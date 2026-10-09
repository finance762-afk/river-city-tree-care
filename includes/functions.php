<?php
/**
 * includes/functions.php — helpers shared by every page (icons, pictures, schema, breadcrumbs,
 * FAQ lists, service cards, Google rating from the reviews feed). Loaded right after config.php.
 * No output happens at include time.
 */
require_once __DIR__ . '/google-reviews.php';

function e($s): string { return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8'); }

/** Inline Lucide SVG (build-time markup, no runtime icon JS). */
function icon(string $name, int $size = 20, string $class = ''): string {
    global $LUCIDE_ICONS;
    $inner = $LUCIDE_ICONS[$name] ?? '';
    if ($inner === '') return '';
    $cls = $class !== '' ? ' class="' . e($class) . '"' : '';
    return '<svg' . $cls . ' xmlns="http://www.w3.org/2000/svg" width="' . $size . '" height="' . $size
        . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">'
        . $inner . '</svg>';
}

function telHref(): string { global $phoneRaw; return 'tel:' . $phoneRaw; }

function isActivePage(string $path): bool {
    $cur = strtok($_SERVER['REQUEST_URI'] ?? '/', '?') ?: '/';
    if ($path === '/') return $cur === '/' || $cur === '/index.php';
    return strpos(rtrim($cur, '/') . '/', $path) === 0;
}
function ariaCurrent(string $path): string { return isActivePage($path) ? ' aria-current="page"' : ''; }

/** Variants on disk for a photo basename: [width => [w, h]] (includes/image-map.php). */
function imageVariants(string $base): array {
    static $map = null;
    if ($map === null) $map = require __DIR__ . '/image-map.php';
    $v = $map[$base] ?? [];
    ksort($v);
    return $v;
}

/**
 * Responsive <picture>: AVIF source + WebP srcset on the <img>, listing only files that exist.
 * $opts: eager (LCP image: eager + fetchpriority=high), class (on <img>).
 */
function picture(string $base, string $alt, string $sizes, array $opts = []): string {
    $v = imageVariants($base);
    if (!$v) return '';
    $avif = []; $webp = [];
    foreach ($v as $w => $dim) {
        $avif[] = "/assets/images/{$base}-{$w}.avif {$dim[0]}w";
        $webp[] = "/assets/images/{$base}-{$w}.webp {$dim[0]}w";
    }
    $topW = array_key_last($v); $top = $v[$topW];
    $cls  = !empty($opts['class']) ? ' class="' . e($opts['class']) . '"' : '';
    $tpl  = !empty($opts['eager'])
        ? '<picture><source type="image/avif" srcset="%s" sizes="%s"><img src="%s" srcset="%s" sizes="%s" alt="%s" width="%d" height="%d"%s loading="eager" fetchpriority="high"></picture>'
        : '<picture><source type="image/avif" srcset="%s" sizes="%s"><img src="%s" srcset="%s" sizes="%s" alt="%s" width="%d" height="%d"%s loading="lazy" decoding="async"></picture>';
    return sprintf($tpl, implode(', ', $avif), e($sizes), '/assets/images/' . $base . '-' . $topW . '.webp', implode(', ', $webp), e($sizes), e($alt), (int) $top[0], (int) $top[1], $cls);
}

/** imagesrcset preload data for the LCP photo (head.php). */
function heroPreload(string $base, string $sizes): array {
    $set = [];
    foreach (imageVariants($base) as $w => $dim) $set[] = "/assets/images/{$base}-{$w}.avif {$dim[0]}w";
    return ['srcset' => implode(', ', $set), 'sizes' => $sizes];
}

/** Five filled stars (decorative: the number is always printed beside them). */
function stars(int $size = 16): string {
    $star = '<svg aria-hidden="true" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>';
    return '<span class="stars" aria-hidden="true">' . str_repeat($star, 5) . '</span>';
}

/**
 * Google rating + review count from the Page One reviews feed (cached by google-reviews.php).
 * Returns null when the feed has nothing: callers then print no rating at all.
 */
function gbpSummary(): ?array {
    static $done = false, $sum = null;
    if ($done) return $sum;
    $done = true;
    global $siteSlug;
    $d = p1_google_reviews_data($siteSlug, 12, 4);
    if (is_array($d) && !empty($d['rating']) && !empty($d['review_count'])) {
        $sum = [
            'rating' => number_format((float) $d['rating'], 1),
            'count'  => (int) $d['review_count'],
            'url'    => (string) ($d['reviews_url'] ?? ''),
            'write'  => (string) ($d['write_review_url'] ?? ''),
        ];
    }
    return $sum;
}

/* ---------- Schema (one @graph per page, printed by head.php) ---------- */

function businessNode(): array {
    global $siteUrl, $siteName, $legalName, $phoneRaw, $email, $address, $geo, $socialLinks, $profileLinks, $ownerName, $serviceAreaPages, $serviceAreaTowns;
    $areas = [];
    foreach ($serviceAreaPages as $a) $areas[] = ['@type' => 'City', 'name' => $a['name'] . ', ' . $a['state']];
    foreach ($serviceAreaTowns as $t) $areas[] = ['@type' => 'City', 'name' => $t . ', GA'];
    return [
        '@type' => 'LocalBusiness',
        '@id' => $siteUrl . '/#business',
        'name' => $siteName,
        'legalName' => $legalName,
        'description' => 'Tree service and land clearing company based in Chickamauga, GA: tree trimming, tree removal, stump grinding, lot clearing, forestry mulching, land development clearing, firewood and portable sawmill services.',
        'url' => $siteUrl . '/',
        'image' => $siteUrl . '/assets/images/og-logo.jpg',
        'logo' => $siteUrl . '/assets/images/icon-512.png',
        'telephone' => $phoneRaw,
        'email' => $email,
        'founder' => ['@type' => 'Person', 'name' => $ownerName],
        'address' => ['@type' => 'PostalAddress', 'addressLocality' => $address['city'], 'addressRegion' => $address['state'], 'postalCode' => $address['zip'], 'addressCountry' => 'US'],
        'geo' => ['@type' => 'GeoCoordinates', 'latitude' => $geo['lat'], 'longitude' => $geo['lng']],
        'openingHoursSpecification' => [[
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
            'opens' => '00:00', 'closes' => '23:59',
        ]],
        'areaServed' => $areas,
        'sameAs' => array_values(array_merge($socialLinks, $profileLinks)),
    ];
}

function webPageNode(string $type = 'WebPage'): array {
    global $siteUrl, $pageTitle, $pageDescription, $canonicalUrl;
    $url = $canonicalUrl ?? $siteUrl . '/';
    return ['@type' => $type, '@id' => $url . '#webpage', 'url' => $url, 'name' => html_entity_decode((string) $pageTitle), 'description' => (string) $pageDescription,
            'isPartOf' => ['@id' => $siteUrl . '/#website'], 'about' => ['@id' => $siteUrl . '/#business'], 'inLanguage' => 'en-US'];
}

/** $trail: [[name, path], ...] after Home. */
function breadcrumbNode(array $trail): array {
    global $siteUrl;
    $items = [['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/']];
    foreach ($trail as $i => [$name, $path]) $items[] = ['@type' => 'ListItem', 'position' => $i + 2, 'name' => $name, 'item' => $siteUrl . $path];
    return ['@type' => 'BreadcrumbList', 'itemListElement' => $items];
}

/** $faqs: [[question, answer html], ...] — the schema mirrors the visible list, tags stripped. */
function faqSchemaNode(array $faqs): array {
    $out = [];
    foreach ($faqs as [$q, $a]) $out[] = ['@type' => 'Question', 'name' => $q, 'acceptedAnswer' => ['@type' => 'Answer', 'text' => trim(html_entity_decode(strip_tags($a)))]];
    return ['@type' => 'FAQPage', 'mainEntity' => $out];
}

/** Service node. $price: [min, max] only when the range is printed on the page. */
function serviceNode(string $name, string $description, string $areaName, ?array $price = null): array {
    global $siteUrl, $canonicalUrl;
    $n = ['@type' => 'Service', 'name' => $name, 'serviceType' => $name, 'description' => $description, 'url' => $canonicalUrl,
          'provider' => ['@id' => $siteUrl . '/#business'], 'areaServed' => ['@type' => 'City', 'name' => $areaName]];
    if ($price) $n['offers'] = ['@type' => 'Offer', 'priceSpecification' => ['@type' => 'PriceSpecification', 'priceCurrency' => 'USD', 'minPrice' => (string) $price[0], 'maxPrice' => (string) $price[1]]];
    return $n;
}

function schemaJson(array $nodes): string {
    global $siteUrl, $siteName;
    $graph = array_merge([businessNode(), ['@type' => 'WebSite', '@id' => $siteUrl . '/#website', 'url' => $siteUrl . '/', 'name' => $siteName, 'publisher' => ['@id' => $siteUrl . '/#business']]], $nodes);
    return json_encode(['@context' => 'https://schema.org', '@graph' => $graph], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

/* ---------- Markup helpers ---------- */

/** Visible breadcrumb. $trail: [[name, path|null], ...] after Home; the last item is the current page. */
function breadcrumbs(array $trail): string {
    $out = '<nav class="breadcrumb" aria-label="Breadcrumb"><ol><li><a href="/">Home</a></li>';
    $last = count($trail) - 1;
    foreach ($trail as $i => [$name, $path]) {
        $out .= '<li class="breadcrumb-sep" aria-hidden="true">/</li>';
        $out .= $i === $last ? '<li aria-current="page">' . e($name) . '</li>' : '<li><a href="' . e($path) . '">' . e($name) . '</a></li>';
    }
    return $out . '</ol></nav>';
}

/** FAQ as native <details> (works without JS). Answers may carry links. */
function faqList(array $faqs, int $open = 0): string {
    $out = '';
    foreach ($faqs as $i => [$q, $a]) {
        $out .= '<details class="faq faq-item"' . ($i < $open ? ' open' : '') . '><summary>' . e($q) . '</summary><p class="faq-answer">' . $a . '</p></details>';
    }
    return $out;
}

/** Required services component: tinted image cards, three bullets each, tint rotation 1-2-3. */
function serviceCards(array $list): string {
    $out = '';
    foreach (array_values($list) as $i => $s) {
        $t = ($i % 3) + 1;
        $out .= '<article class="service-card-with-image card-tint-' . $t . ' reveal-up reveal-delay-' . $t . '">'
            . '<div class="service-card__image">' . picture($s['image'], $s['alt'], '(max-width: 440px) 100vw, (max-width: 720px) 50vw, 340px') . '</div>'
            . '<div class="service-card__body"><div class="service-card__icon">' . icon($s['icon'], 22) . '</div>'
            . '<h3>' . e($s['name']) . '</h3><p class="service-card__desc">' . e($s['desc']) . '</p><ul>';
        foreach ($s['bullets'] as $b) $out .= '<li>' . e($b) . '</li>';
        $out .= '</ul><a href="/services/' . e($s['slug']) . '/" class="service-card__cta">Learn more<span class="sr-only"> about ' . e(strtolower($s['name'])) . '</span></a></div></article>';
    }
    return $out;
}

/** Three other services for the "Other Services You May Need" block (stable per page, not random per request). */
function relatedServices(string $currentSlug, array $prefer = []): array {
    global $services;
    $by = [];
    foreach ($services as $s) $by[$s['slug']] = $s;
    $pick = [];
    foreach ($prefer as $slug) if (isset($by[$slug]) && $slug !== $currentSlug) $pick[$slug] = $by[$slug];
    foreach ($by as $slug => $s) { if (count($pick) >= 3) break; if ($slug !== $currentSlug && !isset($pick[$slug])) $pick[$slug] = $s; }
    return array_slice(array_values($pick), 0, 3);
}

function serviceBySlug(string $slug): ?array {
    global $services;
    foreach ($services as $s) if ($s['slug'] === $slug) return $s;
    return null;
}

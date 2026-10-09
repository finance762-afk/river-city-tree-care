<?php
/**
 * sitemap.php — dynamic XML sitemap (served at /sitemap.xml via .htaccess).
 * Pages come from this registry plus config.php ($services, $serviceAreaPages). Each URL carries
 * its key photo (image sitemap extension), which replaces the old static sitemap-images.xml.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

header('Content-Type: application/xml; charset=utf-8');
header('X-Robots-Tag: noindex');

// Largest variant on disk for a photo basename
$img = function ($base, $caption) {
    $v = imageVariants($base);
    if (!$v) return null;
    return ['src' => '/assets/images/' . $base . '-' . array_key_last($v) . '.webp', 'caption' => $caption];
};
// lastmod = the page file's own modification date
$mod = function ($path) {
    $f = $_SERVER['DOCUMENT_ROOT'] . rtrim($path, '/') . '/index.php';
    return date('Y-m-d', is_file($f) ? filemtime($f) : time());
};

$pages = [
    ['/', '1.0', 'weekly', [
        $img('hero-treetop-cut-valley-view', 'View from the top of a tree during a removal by River City Tree Care'),
        $img('tree-removal-job-site-overgrown-trees-on-residen', 'Tree beside a carport and fence before removal'),
        $img('property-after-tree-removal-clean-lot-with-clear', 'Same carport and fence after the tree was removed'),
    ]],
    ['/services/', '0.9', 'monthly', []],
];
foreach ($services as $s) {
    $pages[] = ['/services/' . $s['slug'] . '/', '0.9', 'monthly', [$img($s['image'], $s['alt'])]];
}
$pages[] = ['/service-areas/', '0.8', 'monthly', []];
foreach ($serviceAreaPages as $a) {
    $pages[] = ['/service-areas/' . $a['slug'] . '/', '0.8', 'monthly', []];
}
$pages[] = ['/about/', '0.7', 'yearly', [$img('andrew-roberson-owner-of-river-city-tree-care-ll', 'River City Tree Care shirt and chainsaw on a board fence')]];
$pages[] = ['/contact/', '0.7', 'yearly', []];
foreach (['privacy-policy', 'terms', 'cookie-policy', 'accessibility'] as $legal) {
    if (is_dir($_SERVER['DOCUMENT_ROOT'] . '/' . $legal)) $pages[] = ['/' . $legal . '/', '0.3', 'yearly', []];
}

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
<?php foreach ($pages as [$path, $priority, $freq, $images]): ?>
  <url>
    <loc><?php echo htmlspecialchars($siteUrl . $path); ?></loc>
    <lastmod><?php echo $mod($path); ?></lastmod>
    <changefreq><?php echo $freq; ?></changefreq>
    <priority><?php echo $priority; ?></priority>
<?php foreach (array_filter($images) as $im): ?>
    <image:image>
      <image:loc><?php echo htmlspecialchars($siteUrl . $im['src']); ?></image:loc>
      <image:caption><?php echo htmlspecialchars($im['caption']); ?></image:caption>
    </image:image>
<?php endforeach; ?>
  </url>
<?php endforeach; ?>
</urlset>

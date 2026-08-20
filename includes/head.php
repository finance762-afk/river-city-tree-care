<?php require_once __DIR__ . "/site-config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle; ?></title>
  <meta name="description" content="<?php echo $pageDescription; ?>">
  <link rel="canonical" href="<?php echo $canonicalUrl; ?>">

  <?php if (!empty($noIndex)): ?>
  <meta name="robots" content="noindex, nofollow">
  <?php endif; ?>

  <?php if (empty($noIndex)): ?>
  <meta name="robots" content="index, follow, max-image-preview:large">
  <?php endif; ?>

  <!-- Icons (Google shows the favicon next to the site name in results) -->
  <link rel="icon" href="/assets/images/favicon.ico" sizes="48x48">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">

  <!-- OG Tags — image must be an ABSOLUTE URL or scrapers ignore it -->
  <?php
    $__siteOrigin = 'https://rivercitytreega.com';
    if (empty($ogImage)) { $ogImage = '/assets/images/og-logo.jpg'; }
    $__ogImageAbs = preg_match('#^https?://#', $ogImage) ? $ogImage : $__siteOrigin . $ogImage;
  ?>
  <meta property="og:site_name" content="River City Tree Care, LLC">
  <meta property="og:title" content="<?php echo $pageTitle; ?>">
  <meta property="og:description" content="<?php echo $pageDescription; ?>">
  <meta property="og:image" content="<?php echo $__ogImageAbs; ?>">
  <?php if ($ogImage === '/assets/images/og-logo.jpg'): ?>
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="River City Tree Care, LLC logo">
  <?php endif; ?>
  <meta property="og:url" content="<?php echo $canonicalUrl; ?>">
  <meta property="og:type" content="<?php echo ($currentPage === 'home') ? 'website' : 'article'; ?>">

  <!-- Google Fonts — Bebas Neue + Nunito Sans + Caveat -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Caveat:wght@400;700&family=Nunito+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- Preload heading font -->
  <link rel="preload" as="font" type="font/woff2" href="https://fonts.gstatic.com/s/bebasneue/v14/JTUSjIg69CK48gW7PXoo9Wlhyw.woff2" crossorigin>

  <!-- Lucide Icons JS -->
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>

  <!-- Swiper CSS (conditional) -->
  <?php if (!empty($useSwiper)): ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <?php endif; ?>

  <!-- Stylesheet -->
  <link rel="stylesheet" href="/assets/css/styles.css?v=5">

  <!-- Elfsight Reviews Widget -->
  <script src="https://elfsightcdn.com/platform.js" async></script>

  <!-- Preconnect / DNS-Prefetch -->
  <link rel="dns-prefetch" href="//www.googletagmanager.com">
  <link rel="dns-prefetch" href="//www.google-analytics.com">
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>

  <!-- GA4 Placeholder -->
  <!-- Google tag (gtag.js) — replace GA_MEASUREMENT_ID -->
  <!--
  <?php if (!empty($ga4MeasurementId)): ?>
  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($ga4MeasurementId, ENT_QUOTES, 'UTF-8'); ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '<?php echo htmlspecialchars($ga4MeasurementId, ENT_QUOTES, 'UTF-8'); ?>');
  </script>
  <?php endif; ?>
  -->

  <!-- GSC Verification (homepage only) -->
  <?php if ($currentPage === 'home'): ?>
  <!-- <?php if (!empty($gscVerification)): ?>
  <meta name="google-site-verification" content="<?php echo htmlspecialchars($gscVerification, ENT_QUOTES, 'UTF-8'); ?>">
  <?php endif; ?> -->
  <?php endif; ?>

  <!-- Hero Image Preload -->
  <?php if (!empty($heroImage)): ?>
  <link rel="preload" as="image" href="<?php echo $heroImage; ?>">
  <?php endif; ?>

  <!-- Schema JSON-LD -->
  <?php if (!empty($schemaMarkup)): ?>
  <script type="application/ld+json">
  <?php echo $schemaMarkup; ?>
  </script>
  <?php endif; ?>
<?php require_once __DIR__ . '/edit-mode.php'; ?>
</head>
<body>
  <a href="#main-content" class="skip-link">Skip to main content</a>

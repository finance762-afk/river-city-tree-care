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

  <!-- OG Tags -->
  <meta property="og:title" content="<?php echo $pageTitle; ?>">
  <meta property="og:description" content="<?php echo $pageDescription; ?>">
  <meta property="og:image" content="<?php echo $ogImage; ?>">
  <meta property="og:url" content="<?php echo $canonicalUrl; ?>">
  <meta property="og:type" content="<?php echo ($currentPage === 'home') ? 'website' : 'article'; ?>">

  <!-- Google Fonts — Bebas Neue + Nunito Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Nunito+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- Preload heading font -->
  <link rel="preload" as="font" type="font/woff2" href="https://fonts.gstatic.com/s/bebasneue/v14/JTUSjIg69CK48gW7PXoo9Wlhyw.woff2" crossorigin>

  <!-- Icon CDN — Lucide -->
  <link rel="stylesheet" href="https://unpkg.com/lucide-static@latest/font/lucide.css">

  <!-- Swiper CSS (conditional) -->
  <?php if (!empty($useSwiper)): ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <?php endif; ?>

  <!-- Stylesheet -->
  <link rel="stylesheet" href="/assets/css/styles.css">

  <!-- Preconnect / DNS-Prefetch -->
  <link rel="dns-prefetch" href="//www.googletagmanager.com">
  <link rel="dns-prefetch" href="//www.google-analytics.com">
  <link rel="dns-prefetch" href="//i.imgur.com">
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
  <link rel="preconnect" href="https://i.imgur.com" crossorigin>

  <!-- GA4 Placeholder -->
  <!-- Google tag (gtag.js) — replace GA_MEASUREMENT_ID -->
  <!--
  <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
  </script>
  -->

  <!-- GSC Verification (homepage only) -->
  <?php if ($currentPage === 'home'): ?>
  <!-- <meta name="google-site-verification" content="GSC_VERIFICATION_CODE"> -->
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
</head>
<body>
  <a href="#main-content" class="skip-link">Skip to main content</a>

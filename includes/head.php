<?php
/**
 * includes/head.php — <head> for every page (v7: scroll-aware fixed header follows in header.php).
 * Pages require config.php + functions.php, then set: $pageTitle, $pageDescription, $canonicalUrl
 * (required); optional $noindex, $ogImage (file in /assets/images/), $heroPreload (functions.php
 * heroPreload()), $pageStyle (page-specific CSS string), $schemaNodes (extra @graph nodes), $ogType.
 */
$canonical  = $canonicalUrl ?? ($siteUrl . (strtok($_SERVER['REQUEST_URI'] ?? '/', '?') ?: '/'));
$ogImageUrl = $siteUrl . '/assets/images/' . ($ogImage ?? 'og-logo.jpg');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo e($pageTitle); ?></title>
<meta name="description" content="<?php echo e($pageDescription); ?>">
<link rel="canonical" href="<?php echo e($canonical); ?>">
<?php if (!empty($noindex)): ?>
<meta name="robots" content="noindex, nofollow">
<?php else: ?>
<meta name="robots" content="index, follow, max-image-preview:large">
<?php endif; ?>
<?php if (($currentPage ?? '') === 'home' && !empty($gscVerification)): ?>
<meta name="google-site-verification" content="<?php echo e($gscVerification); ?>">
<?php endif; ?>
<meta name="theme-color" content="#18100A">
<meta property="og:type" content="<?php echo e($ogType ?? 'website'); ?>">
<meta property="og:title" content="<?php echo e($pageTitle); ?>">
<meta property="og:description" content="<?php echo e($pageDescription); ?>">
<meta property="og:url" content="<?php echo e($canonical); ?>">
<meta property="og:image" content="<?php echo e($ogImageUrl); ?>">
<?php if (empty($ogImage)): ?>
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="<?php echo e($siteName); ?> logo">
<?php endif; ?>
<meta property="og:site_name" content="<?php echo e($siteName); ?>">
<meta property="og:locale" content="en_US">
<link rel="icon" href="/assets/images/favicon.ico" sizes="48x48">
<link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">
<!-- Self-hosted fonts (no font CDN): only the heading face is preloaded -->
<link rel="preload" href="/assets/fonts/bebas-neue.woff2" as="font" type="font/woff2" crossorigin>
<?php if (!empty($heroPreload['srcset'])): ?>
<link rel="preload" as="image" type="image/avif" imagesrcset="<?php echo e($heroPreload['srcset']); ?>" imagesizes="<?php echo e($heroPreload['sizes']); ?>" fetchpriority="high">
<?php endif; ?>
<!-- Critical CSS inline (above-the-fold subset of framework.css); the full sheet loads without blocking render -->
<style><?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/critical.css'; ?></style>
<link rel="preload" href="/assets/css/framework.css?v=<?php echo $cssVersion; ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="/assets/css/framework.css?v=<?php echo $cssVersion; ?>"></noscript>
<style id="site-css">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/css/site.css'; ?>
<?php echo $pageStyle ?? ''; ?>
</style>
<script type="application/ld+json"><?php echo schemaJson($schemaNodes ?? [webPageNode()]); ?></script>
<?php if (!empty($ga4MeasurementId) && preg_match('/^G-[A-Z0-9]{6,}$/', $ga4MeasurementId)): ?>
<!-- Google Analytics 4 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e($ga4MeasurementId); ?>"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','<?php echo e($ga4MeasurementId); ?>');</script>
<?php endif; ?>
<?php require_once __DIR__ . '/edit-mode.php'; ?>
</head>
<body>
<a href="#main-content" class="skip-link">Skip to main content</a>

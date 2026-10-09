<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
http_response_code(404);

$currentPage     = '404';
$pageType        = 'other';
$pageTitle       = 'Page Not Found | River City Tree Care';
$pageDescription = 'That page is not here. Find tree services, service areas and contact details for River City Tree Care in Chickamauga, GA.';
$canonicalUrl    = $siteUrl . '/';
$noindex         = true;
$pageStyle       = <<<CSS
.notfound-links { display: flex; flex-wrap: wrap; gap: var(--space-3); margin-top: var(--space-4); }
CSS;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero--interior" aria-label="Page not found">
  <div class="container">
    <div class="hero-text">
      <span class="eyebrow">Error 404</span>
      <h1 class="hero-title">That page is not here</h1>
      <p class="hero-answer">The link may be old or mistyped. These will get you where you were going.</p>
      <div class="notfound-links">
        <a class="btn btn-accent" href="/">Home</a>
        <a class="btn btn-secondary" href="/services/">Services</a>
        <a class="btn btn-secondary" href="/service-areas/">Service areas</a>
        <a class="btn btn-secondary" href="/contact/">Contact</a>
      </div>
      <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> Call <?php echo e($phone); ?></a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

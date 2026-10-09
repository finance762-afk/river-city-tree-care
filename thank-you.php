<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage     = 'thank-you';
$pageType        = 'other';
$pageTitle       = 'Thank You | River City Tree Care';
$pageDescription = 'Your request reached River City Tree Care in Chickamauga, GA. Andrew will get back to you. For an emergency, call (706) 264-6130.';
$canonicalUrl    = $siteUrl . '/thank-you';
$noindex         = true;
$pageStyle       = <<<CSS
.thanks-actions { display: flex; flex-wrap: wrap; gap: var(--space-3); align-items: center; margin-top: var(--space-4); }
CSS;
$thanksGbp = gbpSummary();

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero--interior" aria-label="Request received">
  <div class="container">
    <div class="hero-text">
      <span class="eyebrow">Request received</span>
      <h1 class="hero-title">Thank you. Your request is in.</h1>
      <p class="hero-answer">River City Tree Care has your details and Andrew will get back to you to set a time to look at the job. If a tree is on a house or blocking a drive, do not wait: call now.</p>
      <div class="thanks-actions">
        <a class="btn btn-accent btn-lg" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> Call <?php echo e($phone); ?></a>
        <a class="btn btn-secondary" href="/">Back to home</a>
      </div>
      <?php if ($thanksGbp && $thanksGbp['write'] !== ''): ?>
      <p>Already a customer? <a href="<?php echo e($thanksGbp['write']); ?>" target="_blank" rel="noopener">Leave River City Tree Care a Google review</a>.</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

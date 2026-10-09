<?php
/**
 * includes/hero-form.php — compact estimate card in the hero of the home, service and city pages
 * (desktop; below 900px the hero button opens the estimate dialog instead).
 * Set $heroFormId (unique per page); optional $heroFormHeading, $heroFormService (service name).
 */
?>
<aside class="hero-form-card" id="estimate-form" aria-label="Estimate request">
  <h2><?php echo e($heroFormHeading ?? 'Request an estimate'); ?></h2>
  <p class="hero-form-tagline">On-site visit and written price at no charge.</p>
  <?php $cfId = $heroFormId ?? 'hero'; $cfService = $heroFormService ?? ''; include __DIR__ . '/compact-form.php'; ?>
</aside>
<?php unset($heroFormId, $heroFormHeading, $heroFormService); ?>

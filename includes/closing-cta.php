<?php
/**
 * includes/closing-cta.php — closing call band. Set $closingHeading and $closingCopy before including.
 */
?>
<section class="closing-cta slant-top" aria-label="Call River City Tree Care">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div>
      <h2><?php echo e($closingHeading ?? 'Ready to get it handled?'); ?></h2>
      <p><?php echo e($closingCopy ?? 'Call Andrew or send the details and he will come look at it.'); ?></p>
    </div>
    <div class="actions">
      <button type="button" class="btn btn-accent btn-lg" data-open-estimate>Request an estimate</button>
      <a class="link-call" href="tel:<?php echo e($phoneRaw); ?>"><?php echo icon('phone', 18); ?> <?php echo e($phone); ?></a>
    </div>
  </div>
</section>
<?php unset($closingHeading, $closingCopy); ?>

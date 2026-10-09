<?php
/**
 * includes/cta-band.php — mid-page estimate band (about, service-areas hub, services hub).
 * Compact form, same endpoint + attribution + required consent. Set $ctaBandId first;
 * optional $ctaBandHeading, $ctaBandCopy.
 */
?>
<section class="cta-band texture-grain" id="estimate" aria-label="Request an estimate">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div class="cta-band__grid">
      <div class="cta-band__copy">
        <span class="eyebrow-label">Estimates</span>
        <h2><?php echo e($ctaBandHeading ?? 'Tell Andrew what you are looking at'); ?></h2>
        <p><?php echo e($ctaBandCopy ?? 'A tree, a row of stumps or a few acres: send the details and River City Tree Care will come out, walk it with you and put a price in writing.'); ?></p>
        <a class="link-call" href="tel:<?php echo e($phoneRaw); ?>"><?php echo icon('phone', 18); ?> or call <?php echo e($phone); ?></a>
      </div>
      <div class="cta-band__card hero-form-card">
        <?php $cfId = $ctaBandId ?? 'cta-band'; $cfButton = 'btn-accent'; include __DIR__ . '/compact-form.php'; ?>
      </div>
    </div>
  </div>
</section>
<?php unset($ctaBandId, $ctaBandHeading, $ctaBandCopy); ?>

<?php
/**
 * includes/related-services.php — "Other Services You May Need": three service cards in the
 * required services-grid pattern. Set $relatedCurrent (this page's slug) and $relatedPrefer
 * (slugs to show first) before including.
 */
$relatedList = relatedServices($relatedCurrent ?? '', $relatedPrefer ?? []);
?>
<section class="section related-services" aria-label="Other tree and land services">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">What We Do</span>
      <h2>Other Services You May Need</h2>
    </div>
    <div class="services-grid">
      <?php echo serviceCards($relatedList); ?>
    </div>
  </div>
</section>
<?php unset($relatedCurrent, $relatedPrefer, $relatedList); ?>

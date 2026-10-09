<?php
/**
 * includes/footer.php — closes <main>; footer with entity block, NAP <address>, legal row,
 * dofollow credit, partner badge; then the estimate dialog, cookie bar, mobile CTA bar, scripts.
 */
$footGbp = gbpSummary();
?>
</main>

<footer class="site-footer texture-grain">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <img src="/assets/images/logo-mark-192.webp" srcset="/assets/images/logo-mark-192.webp 1x, /assets/images/logo-mark-384.webp 2x" alt="<?php echo e($siteName); ?> logo" width="191" height="192" loading="lazy" decoding="async">
        <p><strong><?php echo e($siteName); ?></strong> is the tree service and land clearing crew run by <?php echo e($ownerName); ?> out of Chickamauga, Georgia.</p>
        <div class="footer-badges">
          <span>Licensed &amp; insured</span>
          <span>Free estimates</span>
          <span>Open 24/7</span>
        </div>
        <?php if ($footGbp && $footGbp['url'] !== ''): ?>
        <a class="footer-rating" href="<?php echo e($footGbp['url']); ?>" target="_blank" rel="noopener"><?php echo stars(); ?> <span><b><?php echo e($footGbp['rating']); ?></b> on Google · <?php echo (int) $footGbp['count']; ?> reviews</span></a>
        <?php endif; ?>
      </div>

      <div>
        <h3 class="footer-h">Services</h3>
        <ul>
          <?php foreach ($services as $footSvc): ?>
          <li><a href="/services/<?php echo $footSvc['slug']; ?>/"><?php echo e($footSvc['name']); ?></a></li>
          <?php endforeach; ?>
          <li><a href="/services/">All services</a></li>
        </ul>
      </div>

      <div>
        <h3 class="footer-h">Service Areas</h3>
        <ul>
          <?php foreach ($serviceAreaPages as $footArea): ?>
          <li><a href="/service-areas/<?php echo $footArea['slug']; ?>/"><?php echo e($footArea['name'] . ', ' . $footArea['state']); ?></a></li>
          <?php endforeach; ?>
          <li><a href="/service-areas/">All service areas</a></li>
        </ul>
        <h3 class="footer-h footer-h-gap">Company</h3>
        <ul>
          <li><a href="/about/">About</a></li>
          <li><a href="/contact/">Contact</a></li>
        </ul>
      </div>

      <div>
        <h3 class="footer-h">Contact</h3>
        <address class="footer-nap">
          <div><?php echo icon('phone', 18); ?><a href="tel:<?php echo e($phoneRaw); ?>"><?php echo e($phone); ?></a></div>
          <div><?php echo icon('mail', 18); ?><a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a></div>
          <div><?php echo icon('map-pin', 18); ?><span><?php echo e($address['city'] . ', ' . $address['state'] . ' ' . $address['zip']); ?></span></div>
          <div><?php echo icon('clock', 18); ?><span><?php echo e($hoursDisplay); ?></span></div>
        </address>
        <ul class="footer-social">
          <?php foreach (array_merge($socialLinks, $profileLinks) as $footLabel => $footUrl): ?>
          <li><a href="<?php echo e($footUrl); ?>" target="_blank" rel="noopener"><?php echo e($footLabel); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <p class="footer-entity entity-block"><strong><?php echo e($siteName); ?></strong> is a tree service and land clearing company based in Chickamauga, GA <?php echo e($address['zip']); ?>, owned and operated by <?php echo e($ownerName); ?>. The company works a 50-mile radius that includes Fort Oglethorpe, Ringgold, LaFayette and Chattanooga, TN, and specializes in tree removal, stump grinding and lot clearing. Contact: <?php echo e($phone); ?> | <?php echo e($email); ?> | rivercitytreega.com. Licensed and insured.</p>

    <div class="footer-legal">
      <div class="footer-legal-inner">
        <nav class="footer-legal-links" aria-label="Legal">
          <a href="/privacy-policy/">Privacy Policy</a>
          <span class="footer-legal-divider" aria-hidden="true">|</span>
          <a href="/terms/">Terms of Service</a>
          <span class="footer-legal-divider" aria-hidden="true">|</span>
          <a href="/cookie-policy/">Cookie Policy</a>
          <span class="footer-legal-divider" aria-hidden="true">|</span>
          <a href="/accessibility/">Accessibility</a>
          <span class="footer-legal-divider" aria-hidden="true">|</span>
          <a href="/privacy-policy/#ccpa-rights">Do Not Sell or Share My Personal Information</a>
          <span class="footer-legal-divider" aria-hidden="true">|</span>
          <a href="/sitemap.xml">Sitemap</a>
        </nav>
      </div>
    </div>
    <div class="footer-bottom-bar">
      <p>&copy; <?php echo date('Y'); ?> <?php echo e($legalName); ?>. All rights reserved.</p>
      <p class="footer-credit"><a href="https://pageoneinsights.com" rel="dofollow" target="_blank">Web Design & Hosting by Page One Insights, LLC</a></p>
    </div>
  </div>
  <?php include __DIR__ . '/partner-badge.php'; ?>
</footer>

<dialog class="estimate-dialog" id="estimate-dialog" aria-labelledby="estimate-dialog-title">
  <div class="dialog-head">
    <div>
      <h2 id="estimate-dialog-title" class="dialog-title">Request an estimate</h2>
      <p class="footnote">The on-site visit and the written price cost nothing.</p>
    </div>
    <button type="button" class="dialog-close" aria-label="Close" data-close-estimate><?php echo icon('x', 20); ?></button>
  </div>
  <div class="dialog-body">
    <?php $formId = 'dialog'; include __DIR__ . '/lead-form.php'; ?>
  </div>
</dialog>

<div class="cookie-bar" id="cookie-bar" role="region" aria-label="Cookie notice">
  <p>This site uses cookies to run and to understand traffic. See our <a href="/cookie-policy/">Cookie Policy</a>.</p>
  <button type="button">Got it</button>
</div>

<div class="mobile-cta-bar" aria-label="Contact options">
  <a href="tel:<?php echo e($phoneRaw); ?>" class="mobile-cta-bar__call"><?php echo icon('phone', 18); ?> Call now</a>
  <button type="button" class="mobile-cta-bar__estimate" data-open-estimate>Get an estimate</button>
</div>

<button type="button" class="back-to-top" id="back-to-top" aria-label="Back to top"><?php echo icon('chevron-down', 22, 'flip'); ?></button>

<script src="/assets/js/main.js?v=<?php echo $cssVersion; ?>" defer></script>
<script src="/assets/js/animations.js?v=<?php echo $cssVersion; ?>" defer></script>
<script src="/assets/js/effects.js?v=<?php echo $cssVersion; ?>" defer></script>
</body>
</html>

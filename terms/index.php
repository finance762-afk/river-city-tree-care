<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage     = 'legal';
$pageType        = 'other';
$pageTitle       = 'Terms of Service | River City Tree Care';
$pageDescription = 'Terms that apply to using rivercitytreega.com and to estimates, tree work and land clearing from River City Tree Care, LLC of Chickamauga, Georgia.';
$canonicalUrl    = $siteUrl . '/terms/';
$lastUpdated     = 'October 9, 2026';
$pageStyle       = <<<CSS
.legal-body { padding-block: var(--section-pad); }
.legal-body .legal-prose { margin-inline: auto; }
CSS;

$schemaNodes = [webPageNode(), breadcrumbNode([['Terms of Service', '/terms/']])];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero--legal" aria-label="Terms of Service">
  <div class="container">
    <?php echo breadcrumbs([['Terms of Service', null]]); ?>
    <span class="eyebrow">Legal</span>
    <h1>Terms of Service</h1>
    <p>Effective date: <?php echo date('F j, Y'); ?></p>
  </div>
</section>

<section class="legal-body">
  <div class="container">
    <article class="legal-prose">
      <h2>1. Agreement to Terms</h2>
      <p>By using rivercitytreega.com or engaging <?php echo e($legalName); ?> for services, you agree to these Terms of Service. If you do not agree, do not use this site or our services.</p>

      <h2>2. Use of This Website</h2>
      <ul>
        <li>You may use this site to learn about our services and to contact us.</li>
        <li>You may not use the site for unlawful purposes, attempt to access non-public systems, scrape or copy content without written permission, submit false information through a form, or use automated systems to extract data.</li>
      </ul>

      <h2>3. Estimates and Quotes</h2>
      <p>Price ranges shown on this website are typical figures, not offers. An estimate is based on the information you give us and the conditions visible when we look at the property. The final price may differ if the scope changes or if conditions that could not be seen at the estimate are found. Only a written estimate or agreement from us states the price of a job.</p>

      <h2>4. Tree and Land Work</h2>
      <ul>
        <li>Each job is governed by the written estimate or agreement for that job.</li>
        <li>Tree work, stump grinding and land clearing carry inherent risks. You agree to give us accurate information about property lines, underground utilities, irrigation and anything else that affects the work, and to keep people and pets clear of the work area.</li>
        <li><?php echo e($legalName); ?> carries general liability and workers' compensation insurance. Proof of insurance is available on request before work begins.</li>
      </ul>

      <h2>5. Payment and Cancellation</h2>
      <p>Payment and cancellation terms are stated in the written estimate or agreement for your job. If you need to cancel or reschedule, tell us as early as you can.</p>

      <h2>6. Firewood and Milled Lumber</h2>
      <p>Firewood and lumber are natural products sold as described at the time of sale. Availability, species and moisture content vary. Drying times given for lumber are general guidance.</p>

      <h2>7. Limitation of Liability</h2>
      <p>To the maximum extent permitted by Georgia law, the total liability of <?php echo e($legalName); ?> for any claim related to this site or our services shall not exceed the amount you paid for the specific service giving rise to the claim. We are not liable for indirect, incidental, special or consequential damages.</p>

      <h2>8. Intellectual Property</h2>
      <p>The text, photographs, graphics and logo on this site are owned by <?php echo e($legalName); ?> or used with permission and are protected by copyright. You may not reproduce or distribute them without written permission.</p>

      <h2>9. Governing Law and Disputes</h2>
      <p>These Terms are governed by the laws of the State of Georgia, without regard to conflict-of-laws principles. Disputes shall be resolved in the state or federal courts serving Walker County, Georgia.</p>

      <h2>10. Changes to These Terms</h2>
      <p>We may update these Terms at any time. The "Last Updated" date shows the most recent version. Continued use of the site after an update means you accept the revised Terms.</p>

      <h2>11. Contact Us</h2>
      <p><strong><?php echo e($legalName); ?></strong><br>
      Email: <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a><br>
      Phone: <a href="<?php echo telHref(); ?>"><?php echo e($phone); ?></a><br>
      Address: <?php echo e($address["city"] . ", " . $address["state"] . " " . $address["zip"]); ?></p>

      <p class="legal-disclaimer"><em>This Terms of Service is provided as a general template. We recommend reviewing this document with a licensed Georgia attorney before publication.</em></p>
      <p class="updated">Last Updated: <?php echo e($lastUpdated); ?></p>
    </article>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage     = 'legal';
$pageType        = 'other';
$pageTitle       = 'Accessibility Statement | River City Tree Care';
$pageDescription = 'Accessibility statement for rivercitytreega.com: the WCAG 2.1 Level AA target, the features in place, known issues and how to report a barrier.';
$canonicalUrl    = $siteUrl . '/accessibility/';
$lastUpdated     = 'October 9, 2026';
$pageStyle       = <<<CSS
.legal-body { padding-block: var(--section-pad); }
.legal-body .legal-prose { margin-inline: auto; }
CSS;

$schemaNodes = [webPageNode(), breadcrumbNode([['Accessibility Statement', '/accessibility/']])];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero--legal" aria-label="Accessibility Statement">
  <div class="container">
    <?php echo breadcrumbs([['Accessibility Statement', null]]); ?>
    <span class="eyebrow">Legal</span>
    <h1>Accessibility Statement</h1>
    <p>Effective date: <?php echo date('F j, Y'); ?></p>
  </div>
</section>

<section class="legal-body">
  <div class="container">
    <article class="legal-prose">
      <h2>1. Our Commitment</h2>
      <p><?php echo e($legalName); ?> wants everyone to be able to use rivercitytreega.com, including people with disabilities.</p>

      <h2>2. Conformance Status</h2>
      <p>This site is designed to conform with the Web Content Accessibility Guidelines (WCAG) 2.1 at Level AA. It partially conforms: some content, listed under Known Issues, may not yet fully meet the standard.</p>

      <h2>3. Accessibility Features</h2>
      <ul>
        <li>Semantic HTML with landmark regions (header, navigation, main, footer)</li>
        <li>A skip-to-content link at the top of every page</li>
        <li>Visible keyboard focus indicators on interactive elements</li>
        <li>Alt text on meaningful images</li>
        <li>Color contrast chosen for body text and controls</li>
        <li>Responsive layout that works across screen sizes and zoom levels</li>
        <li>Reduced-motion support: animations are switched off when your device asks for less motion</li>
        <li>Labels on every form field, and questions and answers that open without JavaScript</li>
      </ul>

      <h2>4. Known Issues</h2>
      <ul>
        <li>The embedded Google map on the contact page and the review and partner content supplied by third parties may not fully meet WCAG. The same information is available by phone or email.</li>
        <li>The before-and-after photo slider is operated with a range control; both photos are also described in text beside it.</li>
      </ul>

      <h2>5. Feedback and Reporting Issues</h2>
      <p>If you meet a barrier on this site, please tell us. We aim to respond to accessibility feedback within 5 business days.</p>

      <h2>6. Alternative Contact Methods</h2>
      <p>If the website does not work for you, call <a href="<?php echo telHref(); ?>"><?php echo e($phone); ?></a> or email <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a> and we will give you the same information another way.</p>

      <h2>7. Changes to This Statement</h2>
      <p>We review this statement when the site changes. The "Last Updated" date shows the most recent review.</p>

      <h2>8. Contact Us</h2>
      <p><strong><?php echo e($legalName); ?></strong><br>
      Email: <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a><br>
      Phone: <a href="<?php echo telHref(); ?>"><?php echo e($phone); ?></a><br>
      Address: <?php echo e($address["city"] . ", " . $address["state"] . " " . $address["zip"]); ?></p>

      <p class="legal-disclaimer"><em>This Accessibility Statement is provided as a general template. We recommend reviewing this document with a licensed Georgia attorney before publication.</em></p>
      <p class="updated">Last Updated: <?php echo e($lastUpdated); ?></p>
    </article>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

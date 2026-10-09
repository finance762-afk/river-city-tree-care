<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage     = 'legal';
$pageType        = 'other';
$pageTitle       = 'Cookie Policy | River City Tree Care';
$pageDescription = 'Which cookies rivercitytreega.com uses, including Google Analytics 4, the first-visit attribution cookie and the embedded Google map, and how to control them.';
$canonicalUrl    = $siteUrl . '/cookie-policy/';
$lastUpdated     = 'October 9, 2026';
$pageStyle       = <<<CSS
.legal-body { padding-block: var(--section-pad); }
.legal-body .legal-prose { margin-inline: auto; }
CSS;

$schemaNodes = [webPageNode(), breadcrumbNode([['Cookie Policy', '/cookie-policy/']])];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero--legal" aria-label="Cookie Policy">
  <div class="container">
    <?php echo breadcrumbs([['Cookie Policy', null]]); ?>
    <span class="eyebrow">Legal</span>
    <h1>Cookie Policy</h1>
    <p>Effective date: <?php echo date('F j, Y'); ?></p>
  </div>
</section>

<section class="legal-body">
  <div class="container">
    <article class="legal-prose">
      <h2>1. What Are Cookies?</h2>
      <p>Cookies are small text files stored on your device when you visit a website. They help a site work and tell its owner how visitors use it.</p>

      <h2>2. Cookies We Use</h2>
      <table>
        <thead><tr><th scope="col">Type</th><th scope="col">Set by</th><th scope="col">What it does</th></tr></thead>
        <tbody>
          <tr><th scope="row">Strictly necessary</th><td>rivercitytreega.com</td><td>A first-party cookie records the first page you landed on, the referring site and any campaign tags, so an estimate request can be credited to the right page. It holds no name, email or phone number.</td></tr>
          <tr><th scope="row">Preference</th><td>rivercitytreega.com</td><td>Your browser's local storage remembers that you dismissed the cookie notice.</td></tr>
          <tr><th scope="row">Analytics</th><td>Google Analytics 4</td><td>Cookies prefixed <code>_ga</code> measure visits and page views.</td></tr>
          <tr><th scope="row">Third-party embeds</th><td>Google Maps, Page One Partner</td><td>The map on the contact page and the partner badge in the footer are served by those companies, which may set their own cookies under their own policies.</td></tr>
        </tbody>
      </table>
      <p>Fonts on this site are served from our own domain, so no font provider receives a request when you load a page.</p>

      <h2>3. How to Control Cookies</h2>
      <p>Most browsers let you view, delete or block cookies. Blocking all cookies may stop parts of the site from working. Instructions are available from Google, Mozilla, Apple and Microsoft for their browsers.</p>

      <h2>4. Opt Out of Google Analytics</h2>
      <p>You can opt out of Google Analytics on every site by installing the <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-out Browser Add-on</a>.</p>

      <h2>5. Our Cookie Notice</h2>
      <p>We show a short notice about cookies. Once you dismiss it, it stays hidden on later visits. Clearing your browser's site data brings it back.</p>

      <h2>6. Changes to This Policy</h2>
      <p>We may update this Cookie Policy from time to time. The "Last Updated" date shows the most recent change.</p>

      <h2>7. Contact Us</h2>
      <p><strong><?php echo e($legalName); ?></strong><br>
      Email: <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a><br>
      Phone: <a href="<?php echo telHref(); ?>"><?php echo e($phone); ?></a><br>
      Address: <?php echo e($address["city"] . ", " . $address["state"] . " " . $address["zip"]); ?></p>

      <p class="legal-disclaimer"><em>This Cookie Policy is provided as a general template. We recommend reviewing this document with a licensed Georgia attorney before publication.</em></p>
      <p class="updated">Last Updated: <?php echo e($lastUpdated); ?></p>
    </article>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

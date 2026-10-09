<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage     = 'legal';
$pageType        = 'other';
$pageTitle       = 'Privacy Policy | River City Tree Care';
$pageDescription = 'How River City Tree Care, LLC collects, uses and protects the information you send through rivercitytreega.com and its estimate request forms.';
$canonicalUrl    = $siteUrl . '/privacy-policy/';
$lastUpdated     = 'October 9, 2026';
$pageStyle       = <<<CSS
.legal-body { padding-block: var(--section-pad); }
.legal-body .legal-prose { margin-inline: auto; }
CSS;

$schemaNodes = [webPageNode(), breadcrumbNode([['Privacy Policy', '/privacy-policy/']])];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero--legal" aria-label="Privacy Policy">
  <div class="container">
    <?php echo breadcrumbs([['Privacy Policy', null]]); ?>
    <span class="eyebrow">Legal</span>
    <h1>Privacy Policy</h1>
    <p>Effective date: <?php echo date('F j, Y'); ?></p>
  </div>
</section>

<section class="legal-body">
  <div class="container">
    <article class="legal-prose">
      <h2>1. Introduction</h2>
      <p>This Privacy Policy explains how <?php echo e($legalName); ?> ("we", "us", "our") collects, uses and protects your personal information when you visit rivercitytreega.com or ask us for an estimate.</p>

      <h2>2. Information We Collect</h2>
      <ul>
        <li><strong>Information you provide:</strong> name, email, phone number, town, the service you need and any job details you type into a form, tell us by phone or share at an estimate visit.</li>
        <li><strong>Your consent choices:</strong> whether you ticked the email box, the text-message box and the terms box, the page you were on and the consent wording version.</li>
        <li><strong>Automatically collected:</strong> IP address, browser type, device type, pages visited, referring URL and timestamps (through Google Analytics 4), plus the first page you landed on and how you reached the site, which is attached to a form you send so we know which page produced the request.</li>
        <li><strong>Cookies and similar technologies:</strong> see our <a href="/cookie-policy/">Cookie Policy</a>.</li>
      </ul>

      <h2>3. How We Use Your Information</h2>
      <ul>
        <li>To answer your request and give you an estimate</li>
        <li>To schedule and carry out the work</li>
        <li>To contact you during an active job</li>
        <li>To send emails or text messages, only where you ticked the matching consent box</li>
        <li>To improve this website</li>
        <li>To meet legal obligations (insurance, tax, licensing)</li>
      </ul>

      <h2>4. How We Share Your Information</h2>
      <ul>
        <li>We do <strong>NOT</strong> sell personal information.</li>
        <li><strong>Service providers (data processors):</strong> Page One Insights, LLC, our web design and hosting partner, operates the form endpoint that receives your estimate request, stores it with your consent record and forwards it to us; Google (Google Analytics 4 and the embedded map on the contact page); and our web hosting provider.</li>
        <li><strong>Legal compliance:</strong> if required by Georgia or federal law.</li>
        <li><strong>Business transfers:</strong> in the event of a merger, acquisition or sale of business assets.</li>
      </ul>

      <h2>5. Your Privacy Rights</h2>

      <h3 id="state-rights">Georgia and Tennessee Residents</h3>
      <p>You may ask what personal information we hold about you and ask us to correct or delete it. Contact us using the details in section 12.</p>

      <h3 id="ccpa-rights">California Residents (CCPA / CPRA): Do Not Sell or Share My Personal Information</h3>
      <p>If you are a California resident, you have the following rights under the California Consumer Privacy Act (CCPA) and the California Privacy Rights Act (CPRA):</p>
      <ul>
        <li><strong>Right to know</strong> what personal information we collect, use and disclose.</li>
        <li><strong>Right to delete</strong> personal information we have collected from you, subject to certain exceptions.</li>
        <li><strong>Right to correct</strong> inaccurate personal information.</li>
        <li><strong>Right to opt out of sale or sharing</strong> of personal information. We do not sell or share personal information for cross-context behavioral advertising, but you may still send an opt-out request and we will confirm in writing that it has been recorded.</li>
        <li><strong>Right to limit use</strong> of sensitive personal information.</li>
        <li><strong>Right to non-discrimination:</strong> we will not deny you service or charge a different price because you exercised a right.</li>
      </ul>
      <p><strong>How to exercise your rights:</strong> email <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a> or call <a href="<?php echo telHref(); ?>"><?php echo e($phone); ?></a>. We will respond within 45 days of receipt.</p>

      <h3>Other State Residents</h3>
      <p>Residents of Colorado, Connecticut, Delaware, Indiana, Iowa, Kentucky, Maryland, Minnesota, Montana, Nebraska, New Hampshire, New Jersey, Oregon, Rhode Island, Tennessee, Texas, Utah and Virginia have similar rights under their state privacy laws. Use the same contact details to exercise them.</p>

      <h2>6. Email, SMS and Phone Communications (TCPA)</h2>
      <p>Our forms carry three separate boxes, none of them pre-ticked: one for email updates, one for text messages and one to accept this policy and our <a href="/terms/">Terms of Service</a>. We send marketing emails or text messages only if you ticked the matching box. Message frequency varies. Message and data rates may apply. Consent is not a condition of purchase. Reply STOP to any text to unsubscribe, or HELP for help. You can also opt out by emailing <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a> or telling us on the phone, and we will honor any reasonable opt-out request. We do not share mobile numbers or text-message consent with third parties for their marketing.</p>

      <h2>7. Data Retention</h2>
      <p>We keep estimate requests, consent records and job records for as long as needed to provide the service and meet legal obligations, typically 5 to 7 years for business records.</p>

      <h2>8. Data Security</h2>
      <p>We use reasonable administrative, technical and physical safeguards, including SSL encryption on every form submission. No system is completely secure and we cannot guarantee absolute security.</p>

      <h2>9. Children's Privacy</h2>
      <p>This site is not directed to children under 13 and we do not knowingly collect information from them. If you believe a child has sent us information, contact us and we will delete it.</p>

      <h2>10. Third-Party Links</h2>
      <p>This website links to third-party sites such as Facebook, YouTube, Instagram, TikTok, Nextdoor, Angi, the Better Business Bureau, Google and Page One Partner. We are not responsible for their privacy practices. Review their policies separately.</p>

      <h2>11. Changes to This Policy</h2>
      <p>We may update this Privacy Policy from time to time. The "Last Updated" date at the bottom shows the most recent change.</p>

      <h2>12. Contact Us</h2>
      <p>For privacy questions or to exercise your rights:</p>
      <p><strong><?php echo e($legalName); ?></strong><br>
      Email: <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a><br>
      Phone: <a href="<?php echo telHref(); ?>"><?php echo e($phone); ?></a><br>
      Address: <?php echo e($address["city"] . ", " . $address["state"] . " " . $address["zip"]); ?></p>

      <p class="legal-disclaimer"><em>This Privacy Policy is provided as a general template. We recommend reviewing this document with a licensed Georgia attorney before publication.</em></p>
      <p class="updated">Last Updated: <?php echo e($lastUpdated); ?></p>
    </article>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

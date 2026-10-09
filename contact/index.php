<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage     = 'contact';
$pageType        = 'contact';
$pageTitle       = 'Contact River City Tree Care | Chickamauga, GA';
$pageDescription = 'Request an estimate from River City Tree Care in Chickamauga, GA. Call (706) 264-6130, open 24 hours, or send the form and Andrew will get back to you.';
$canonicalUrl    = $siteUrl . '/contact/';
$pageStyle       = <<<CSS
.contact-main { background: var(--color-paper); }
.contact-emergency { border-left: 4px solid var(--color-accent); background: var(--color-surface); border-radius: 0 var(--radius) var(--radius) 0; padding: var(--space-4) var(--space-5); margin-top: var(--space-6); }
.contact-emergency h3 { margin-bottom: var(--space-2); }
.contact-emergency p { margin: 0; color: var(--color-ink-2); }
.contact-map { background: var(--color-paper-2); }
CSS;

$schemaNodes = [webPageNode('ContactPage'), breadcrumbNode([['Contact', '/contact/']])];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero--interior" aria-label="Contact River City Tree Care">
  <div class="container">
    <div class="hero-text">
      <?php echo breadcrumbs([['Contact', null]]); ?>
      <span class="eyebrow">Chickamauga, GA · Chattanooga, TN</span>
      <h1 class="hero-title">Contact River City Tree Care</h1>
      <p class="hero-answer">Send the form below or call <a href="<?php echo telHref(); ?>"><?php echo e($phone); ?></a>. Estimates are free for every service, and the phone is answered 24 hours a day, including for emergencies.</p>
    </div>
  </div>
</section>

<section class="section contact-main" aria-labelledby="contact-h2">
  <div class="container estimate">
    <div class="card estimate-card">
      <span class="eyebrow-label">Estimates</span>
      <h2 id="contact-h2">Request an estimate</h2>
      <?php $formId = 'contact'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/lead-form.php'; ?>
    </div>
    <div class="estimate-aside">
      <h2>How can I reach River City Tree Care?</h2>
      <p class="answer">By phone, by email or with the form on this page. River City Tree Care is based in Chickamauga, GA and works a 50-mile radius that includes Ringgold, Fort Oglethorpe, LaFayette, Rossville, Dalton and Calhoun in Georgia and Chattanooga in Tennessee.</p>
      <div class="nap">
        <div><?php echo icon('phone', 18); ?><a href="<?php echo telHref(); ?>"><?php echo e($phone); ?></a></div>
        <div><?php echo icon('mail', 18); ?><a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a></div>
        <div><?php echo icon('map-pin', 18); ?><span>Chickamauga, GA 30707</span></div>
        <div><?php echo icon('clock', 18); ?><span><?php echo e($hoursDisplay); ?>, holidays included</span></div>
      </div>
      <div class="contact-emergency">
        <h3>Tree on a house or across the drive?</h3>
        <p>Do not wait for a reply to a form. Call <a href="<?php echo telHref(); ?>"><?php echo e($phone); ?></a> and tell Andrew what it is resting on.</p>
      </div>
      <p>Not sure what to ask for? The <a href="/services/">services page</a> matches common problems to a service, and <a href="/service-areas/">service areas</a> has a town checker.</p>
    </div>
  </div>
</section>

<section class="section contact-map edge-curve-top" aria-labelledby="map-h2">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow-label">Home base</span>
      <h2 id="map-h2">Where is River City Tree Care based?</h2>
      <p class="answer">River City Tree Care is based in Chickamauga, Georgia 30707, in Walker County, a few miles below the Tennessee line. The crew comes to you, so the map shows the home town, not a storefront to visit. Estimates happen at your property.</p>
    </div>
    <div class="map-embed">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52544.0!2d-85.29110!3d34.87120!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88606c8f3ed42a2d%3A0xd1d8b6c93e3e3a6a!2sChickamauga%2C%20GA%2030707!5e0!3m2!1sen!2sus!4v1716249600000!5m2!1sen!2sus" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Map of Chickamauga, GA, home base of River City Tree Care" allowfullscreen></iframe>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

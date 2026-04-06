<?php
$pageTitle       = "Thank You — River City Tree Care";
$pageDescription = "Your estimate request has been received. We will be in touch shortly.";
$canonicalUrl    = "https://www.rivercitytreega.com/thank-you";
$ogImage         = "https://i.imgur.com/3V6kJDE.png";
$currentPage     = "";
$heroImage       = "";
$schemaMarkup    = "";
$noIndex         = true;
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

  <main id="main-content">

    <section style="background: var(--bg); padding: 120px 20px; text-align: center; min-height: 60vh; display: flex; align-items: center; justify-content: center;">
      <div class="container">
        <div style="color: var(--primary); font-size: 3rem; margin-bottom: var(--space-lg);"><i class="lucide-check-circle"></i></div>
        <h1 style="color: var(--primary); margin-bottom: var(--space-md);">We Got Your Request</h1>
        <p class="prose-centered" style="color: var(--text-light); margin-bottom: var(--space-md);">Andrew or a crew member will be in touch within a few hours to discuss your project and schedule a free estimate.</p>
        <p class="prose-centered" style="color: var(--text-light); margin-bottom: var(--space-2xl);">For emergencies, call <a href="tel:+17062646130" style="color: var(--primary); font-weight: 700;">(706) 264-6130</a> directly — we respond 24/7.</p>
        <div style="display: flex; flex-wrap: wrap; gap: var(--space-md); justify-content: center;">
          <a href="/" class="btn-primary">Back to Home</a>
          <a href="/services" class="btn-secondary">View Our Services</a>
        </div>
      </div>
    </section>

  </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

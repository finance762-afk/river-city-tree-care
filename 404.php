<?php
$pageTitle       = "Page Not Found — River City Tree Care";
$pageDescription = "The page you're looking for doesn't exist or has been moved.";
$canonicalUrl    = "https://www.rivercitytreega.com/404";
$ogImage         = "https://i.imgur.com/3V6kJDE.png";
$currentPage     = "";
$heroImage       = "";
$schemaMarkup    = "";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

  <main id="main-content">

    <section style="background: var(--bg); padding: 120px 20px; text-align: center; min-height: 60vh; display: flex; align-items: center; justify-content: center;">
      <div class="container">
        <p style="font-family: 'Bebas Neue', sans-serif; font-size: clamp(5rem, 12vw, 10rem); color: var(--primary); line-height: 1; margin-bottom: var(--space-md);">404</p>
        <h1 style="color: var(--text); margin-bottom: var(--space-md);">Page Not Found</h1>
        <p class="prose-centered" style="color: var(--text-light); margin-bottom: var(--space-2xl);">The page you're looking for doesn't exist, may have been moved, or the URL may be incorrect. Use the links below to find what you need.</p>
        <div style="display: flex; flex-wrap: wrap; gap: var(--space-md); justify-content: center;">
          <a href="/" class="btn-primary">Back to Home</a>
          <a href="/services" class="btn-secondary">View Services</a>
          <a href="/contact" class="btn-secondary">Contact Us</a>
        </div>
      </div>
    </section>

  </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

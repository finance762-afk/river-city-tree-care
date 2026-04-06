<?php
$pageTitle       = "Free Estimate | River City Tree Care Ringgold, GA";
$pageDescription = "Request a free estimate from River City Tree Care in Ringgold, GA. Tree removal, stump grinding, lot clearing, and more. Call (706) 264-6130.";
$canonicalUrl    = "https://www.rivercitytreega.com/contact";
$ogImage         = "https://i.imgur.com/sqX9jX4.jpeg";
$currentPage     = "contact";
$heroImage       = "";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;

$schemaMarkup = '{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "LocalBusiness",
      "@id": "https://www.rivercitytreega.com/#business",
      "name": "River City Tree Care, LLC",
      "url": "https://www.rivercitytreega.com",
      "telephone": "+1-706-264-6130",
      "email": "treeclimber1110@gmail.com",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Ringgold",
        "addressRegion": "GA",
        "postalCode": "30736",
        "addressCountry": "US"
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00",
        "closes": "23:59"
      }
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.rivercitytreega.com" },
        { "@type": "ListItem", "position": 2, "name": "Contact", "item": "https://www.rivercitytreega.com/contact" }
      ]
    }
  ]
}';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

  <main id="main-content">

    <div class="page-header">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a> <span>/</span> <strong>Contact</strong>
        </nav>
        <h1>Get a Free Estimate — Ringgold, GA &amp; Chattanooga, TN</h1>
        <p class="lead prose">Free estimates for all <a href="/services">services</a>. River City Tree Care is available 24/7 including emergencies. Fill out the form below or call directly — we typically respond within a few hours.</p>
      </div>
    </div>

    <!-- Contact form + info block -->
    <section class="service-intro">
      <div class="container">
        <div class="split" style="align-items: flex-start;">

          <!-- Form -->
          <div>
            <h2 style="color: var(--primary); margin-bottom: var(--space-xl);">Send Us Your Details</h2>
            <form action="https://formsubmit.co/treeclimber1110@gmail.com" method="POST">
              <!-- Hidden fields -->
              <input type="hidden" name="_next" value="https://www.rivercitytreega.com/thank-you">
              <input type="hidden" name="_captcha" value="false">
              <input type="text" name="_honey" style="display:none">
              <input type="hidden" name="_template" value="table">
              <input type="hidden" name="_subject" value="New Estimate Request — River City Tree Care">
              <input type="hidden" name="_cc" value="CustomerService@pageoneinsights.com">

              <div class="form-group">
                <input type="text" name="name" id="name" placeholder=" " required>
                <label for="name">Full Name</label>
              </div>

              <div class="form-group">
                <input type="tel" name="phone" id="phone" placeholder=" " required>
                <label for="phone">Phone Number</label>
              </div>

              <div class="form-group">
                <input type="email" name="email" id="email" placeholder=" " required>
                <label for="email">Email Address</label>
              </div>

              <div class="form-group">
                <select name="service" id="service" required>
                  <option value="" disabled selected></option>
                  <option value="Tree Trimming">Tree Trimming</option>
                  <option value="Tree Removal">Tree Removal</option>
                  <option value="Stump Grinding">Stump Grinding</option>
                  <option value="Lot Clearing">Lot Clearing</option>
                  <option value="Forestry Mulching">Forestry Mulching</option>
                  <option value="Land Development">Land Development</option>
                  <option value="Firewood">Firewood</option>
                  <option value="Sawmill Services">Sawmill Services</option>
                  <option value="Emergency / Other">Emergency / Other</option>
                </select>
                <label for="service">Service Needed</label>
              </div>

              <div class="form-group">
                <textarea name="message" id="message" rows="5" placeholder=" " required></textarea>
                <label for="message">Message / Project Details</label>
              </div>

              <button type="submit" class="btn-primary ripple" style="width: 100%;">Send My Request</button>
            </form>
          </div>

          <!-- Contact info block -->
          <div>
            <h2 style="color: var(--primary); margin-bottom: var(--space-xl);">Contact Information</h2>

            <div style="display: flex; flex-direction: column; gap: var(--space-xl);">
              <div>
                <h3 style="color: var(--text); margin-bottom: var(--space-sm);">Phone</h3>
                <a href="tel:+17062646130" style="color: var(--primary); font-family: 'Bebas Neue', sans-serif; font-size: 1.6rem; letter-spacing: 0.04em;">(706) 264-6130</a>
              </div>

              <div>
                <h3 style="color: var(--text); margin-bottom: var(--space-sm);">Email</h3>
                <a href="mailto:treeclimber1110@gmail.com" style="color: var(--primary);">treeclimber1110@gmail.com</a>
              </div>

              <div>
                <h3 style="color: var(--text); margin-bottom: var(--space-sm);">Hours</h3>
                <p style="color: var(--text-light);">Open 24 hours, 7 days a week<br>Including holidays and emergencies</p>
              </div>

              <div>
                <h3 style="color: var(--text); margin-bottom: var(--space-sm);">Service Area</h3>
                <p style="color: var(--text-light);">50-mile radius from Ringgold, GA<br>Including Chattanooga TN, Fort Oglethorpe GA,<br>Dalton GA, LaFayette GA, Rossville GA, Calhoun GA</p>
              </div>

              <div class="callout-box">
                <h3>Need Emergency Service?</h3>
                <p>Don't wait for a form response — call <a href="tel:+17062646130" style="color: var(--primary); font-weight: 700;">(706) 264-6130</a> directly. We respond to storm damage, fallen trees, and emergency situations 24/7.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Google Map -->
    <section style="background: var(--bg-alt); padding: var(--section-pad);">
      <div class="container">
        <h2 style="text-align: center; color: var(--primary); margin-bottom: var(--space-xl);">Find Us in Ringgold, GA</h2>
        <div style="border-radius: var(--radius); overflow: hidden; aspect-ratio: 16/9;">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52544.04762892569!2d-85.15825682089843!3d34.91595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886098e93c2bf403%3A0xb5cc3fe0b33eb5a0!2sRinggold%2C%20GA%2030736!5e0!3m2!1sen!2sus!4v1712419200000!5m2!1sen!2sus"
            width="100%"
            height="100%"
            style="border:0; width:100%; height:100%;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="River City Tree Care service area — Ringgold, GA">
          </iframe>
        </div>
      </div>
    </section>

  </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<?php
$pageTitle       = "Free Estimate | River City Tree Care Chickamauga, GA";
$pageDescription = "Request a free estimate from River City Tree Care in Chickamauga, GA. Tree removal, stump grinding, lot clearing, and more. Call (706) 264-6130.";
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
        "addressLocality": "Chickamauga",
        "addressRegion": "GA",
        "postalCode": "30707",
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
        <h1>Get a Free Estimate — Chickamauga, GA &amp; Chattanooga, TN</h1>
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
              <!-- Honeypot -->
              <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
              <!-- Formsubmit config -->
              <input type="hidden" name="_next" value="https://rivercitytreega.com/thank-you">
              <input type="hidden" name="_captcha" value="false">
              <input type="hidden" name="_subject" value="River City Tree Care — New Website Inquiry">
              <input type="hidden" name="_template" value="table">
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
                <textarea name="message" id="message" rows="5" placeholder=" "></textarea>
                <label for="message">Message / Project Details</label>
              </div>

              <fieldset class="form-consent-fieldset">
                <legend class="form-consent-legend">Communication Consent</legend>

                <label class="form-consent-item">
                  <input type="checkbox" name="email_opt_in" value="yes" class="consent-checkbox">
                  <span class="consent-label">
                    <strong>Email updates (optional):</strong> I agree to receive emails from
                    River City Tree Care about my inquiry, services, promotions, and news. I understand I can unsubscribe anytime via the link in any email
                    or by emailing treeclimber1110@gmail.com. Message frequency varies.
                  </span>
                </label>

                <label class="form-consent-item">
                  <input type="checkbox" name="sms_opt_in" value="yes" class="consent-checkbox">
                  <span class="consent-label">
                    <strong>SMS/Text messages (optional):</strong> I agree to receive text messages from
                    River City Tree Care at the phone number I provided. Message types may include appointment reminders, service updates, and promotional
                    offers. Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe, HELP for help.
                    <strong>Consent is not a condition of purchase.</strong>
                  </span>
                </label>

                <label class="form-consent-item form-consent-required">
                  <input type="checkbox" name="terms_accepted" value="yes" class="consent-checkbox" required>
                  <span class="consent-label">
                    I have read and agree to the
                    <a href="/privacy-policy/">Privacy Policy</a>
                    and
                    <a href="/terms/">Terms of Service</a>. <span class="required-star">*</span>
                  </span>
                </label>
              </fieldset>

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
                <p style="color: var(--text-light);">50-mile radius from Chickamauga, GA<br>Including Ringgold GA, Chattanooga TN, Fort Oglethorpe GA,<br>Dalton GA, LaFayette GA, Rossville GA, Calhoun GA</p>
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
        <h2 style="text-align: center; color: var(--primary); margin-bottom: var(--space-xl);">Find Us in Chickamauga, GA</h2>
        <div style="border-radius: var(--radius); overflow: hidden; aspect-ratio: 16/9;">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52544.0!2d-85.29110!3d34.87120!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88606c8f3ed42a2d%3A0xd1d8b6c93e3e3a6a!2sChickamauga%2C%20GA%2030707!5e0!3m2!1sen!2sus!4v1716249600000!5m2!1sen!2sus"
            width="100%"
            height="100%"
            style="border:0; width:100%; height:100%;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="River City Tree Care service area — Chickamauga, GA">
          </iframe>
        </div>
      </div>
    </section>

  </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

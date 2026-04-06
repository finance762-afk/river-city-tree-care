<?php
$pageTitle       = "Firewood for Sale in Ringgold, GA | River City Tree Care";
$pageDescription = "Split hardwood firewood for sale in Ringgold, GA and Chattanooga, TN. Oak, hickory, and mixed hardwoods. Call (706) 264-6130 for availability and pricing.";
$canonicalUrl    = "https://www.rivercitytreega.com/services/firewood";
$ogImage         = "https://i.imgur.com/O3Mk7h2.jpeg";
$currentPage     = "services";
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
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Ringgold",
        "addressRegion": "GA",
        "postalCode": "30736",
        "addressCountry": "US"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "47"
      }
    },
    {
      "@type": "Service",
      "serviceType": "Firewood Sales",
      "provider": { "@id": "https://www.rivercitytreega.com/#business" },
      "areaServed": [
        { "@type": "City", "name": "Ringgold", "addressRegion": "GA" },
        { "@type": "City", "name": "Chattanooga", "addressRegion": "TN" }
      ],
      "description": "Split hardwood firewood sourced from local tree removal jobs in Ringgold, GA and North Georgia. Oak, hickory, and mixed hardwoods available."
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.rivercitytreega.com" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://www.rivercitytreega.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Firewood", "item": "https://www.rivercitytreega.com/services/firewood" }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What types of firewood do you sell?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "River City Tree Care sells primarily oak and hickory firewood, along with mixed hardwoods depending on what comes off recent job sites. All wood is sourced from local tree removal jobs in the Ringgold, GA and North Georgia area."
          }
        },
        {
          "@type": "Question",
          "name": "Do you deliver firewood?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Delivery availability depends on location and current stock. Call (706) 264-6130 to check availability and discuss pickup or delivery options."
          }
        },
        {
          "@type": "Question",
          "name": "Is the firewood seasoned or green?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Both are available depending on current stock. Seasoned wood is split and air-dried. Green wood is available at a lower price if you have space to cure it yourself — typically 6–12 months of air drying for optimal burn."
          }
        }
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
          <a href="/">Home</a> <span>/</span> <a href="/services">Services</a> <span>/</span> <strong>Firewood</strong>
        </nav>
        <h1>Firewood for Sale in Ringgold, GA</h1>
        <p class="lead prose">River City Tree Care sells split hardwood firewood by the truckload in Ringgold, GA and surrounding areas. River City Tree Care serves Ringgold, GA and the greater Chattanooga area with locally sourced oak, hickory, and mixed hardwoods — cut from our tree removal jobs across North Georgia. Call <a href="tel:+17062646130">(706) 264-6130</a> for availability and pricing.</p>
      </div>
    </div>

    <!-- Split-reverse: content left, image right -->
    <section class="service-intro" data-animate="fade-up">
      <div class="container">
        <div class="split-reverse">
          <div class="service-img-wrap" data-animate="wipe-right">
            <img src="https://i.imgur.com/O3Mk7h2.jpeg" alt="Hardwood logs from tree removal job — firewood and sawmill stock in Ringgold, GA" width="800" height="600">
          </div>
          <div>
            <h2>Locally Sourced Hardwood — Cut Fresh from Job Sites</h2>
            <div class="prose">
              <p>Every tree River City Tree Care removes across the Ringgold, Chattanooga, and North Georgia area produces usable wood. Instead of sending it all to a dump, we split the best hardwood into firewood and make it available to local customers.</p>
              <p>Our firewood comes from the species most common in Catoosa County and the surrounding region — <strong>oak, hickory, and mixed hardwoods</strong> including maple, sweetgum, and poplar. Oak and hickory are the premium picks for fireplace and fire pit use: they burn longer, produce more heat, and create less creosote than softwoods.</p>
              <p>Firewood is sold by the truckload — split, ready to burn (seasoned) or ready to stack and cure (green). Availability and species mix vary based on current job site production. Call to check what's in stock.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Answer blocks -->
    <section class="service-content" style="background: var(--bg-alt);">
      <div class="container">

        <div class="answer-block">
          <h3>What types of firewood do you sell?</h3>
          <p>Primarily oak and hickory, along with mixed hardwoods depending on recent job site production. Oak burns hot and long — ideal for heating. Hickory adds a distinctive smoke flavor, making it popular for fire pits and smoking meat. Mixed hardwoods are a good all-purpose option at a lower price point.</p>
        </div>

        <div class="answer-block">
          <h3>Is the firewood seasoned or green?</h3>
          <p>Both are available depending on current inventory. <strong>Seasoned wood</strong> has been split and air-dried — ready to burn immediately. <strong>Green wood</strong> is freshly cut and needs 6–12 months of air drying before it burns cleanly. Green wood is typically less expensive if you have the space and time to cure it yourself.</p>
        </div>

        <div class="answer-block">
          <h3>Do you deliver firewood?</h3>
          <p>Delivery may be available depending on your location and current stock levels. Pickup is always an option. Call <a href="tel:+17062646130" style="color: var(--primary);">(706) 264-6130</a> to discuss delivery, pricing, and what's currently available.</p>
        </div>

      </div>
    </section>

    <!-- Mid CTA -->
    <section class="service-cta">
      <div class="container">
        <h2>Need Firewood? Call to Check Stock.</h2>
        <p class="prose-centered">Availability changes based on current job site production. Call River City Tree Care to find out what's in stock and arrange pickup or delivery.</p>
        <div class="cta-actions">
          <a href="tel:+17062646130" class="cta-phone"><i class="lucide-phone"></i> (706) 264-6130</a>
          <a href="/contact" class="btn-primary ripple">Contact Us</a>
        </div>
      </div>
    </section>

    <!-- Second image + additional content -->
    <section class="service-content" style="background: var(--bg);" data-animate="fade-up">
      <div class="container">
        <div class="split">
          <div class="service-img-wrap" data-animate="wipe-right">
            <img src="https://i.imgur.com/dgkvKEa.jpeg" alt="Cut timber and logs ready for firewood processing or sawmill milling" width="800" height="600">
          </div>
          <div>
            <h2>Firewood Tips for North Georgia</h2>
            <div class="prose">
              <p><strong>Store it off the ground.</strong> Stack firewood on a pallet or rack to prevent ground moisture from wicking into the bottom layer.</p>
              <p><strong>Keep it covered on top.</strong> A tarp or simple roof keeps rain off while allowing airflow on the sides for continued drying.</p>
              <p><strong>Stack away from the house.</strong> Keep firewood at least 20 feet from your home to reduce termite and pest risk.</p>
              <p><strong>Burn seasoned wood only.</strong> Green wood produces more smoke, less heat, and more creosote buildup in your chimney. If you buy green, give it 6–12 months of air drying before burning.</p>
              <p>If you have large logs from a tree removal that you'd like turned into lumber instead of firewood, check out our <a href="/services/sawmill-services" style="color: var(--primary);">sawmill services</a>.</p>
            </div>

            <div class="related-services">
              <span style="color: var(--text-light); font-size: 0.9rem;">Related services:</span>
              <a href="/services/sawmill-services"><i class="lucide-arrow-right"></i> Sawmill Services</a>
              <a href="/services/tree-removal"><i class="lucide-arrow-right"></i> Tree Removal</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="faq-section" data-animate="fade-up">
      <div class="container">
        <h2 class="section-title" style="text-align: center;">Firewood FAQ</h2>

        <div class="faq-list">
          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              What types of firewood do you sell?
              <i class="lucide-chevron-down chevron"></i>
            </button>
            <div class="faq-answer" role="region">
              <div class="faq-answer-inner prose">
                <p>Oak, hickory, and mixed hardwoods — all sourced from local tree removal jobs in the Ringgold and North Georgia area. Species mix varies by current stock.</p>
              </div>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              Do you deliver firewood?
              <i class="lucide-chevron-down chevron"></i>
            </button>
            <div class="faq-answer" role="region">
              <div class="faq-answer-inner prose">
                <p>Delivery may be available depending on location and current stock. Call <a href="tel:+17062646130" style="color: var(--primary);">(706) 264-6130</a> to discuss options.</p>
              </div>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              Is the firewood seasoned or green?
              <i class="lucide-chevron-down chevron"></i>
            </button>
            <div class="faq-answer" role="region">
              <div class="faq-answer-inner prose">
                <p>Both — seasoned (ready to burn) and green (needs 6–12 months of drying). Green is typically cheaper. Call to check what's currently available.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Closing CTA -->
    <section class="cta-banner">
      <div class="container">
        <h2>Hardwood Firewood — Locally Cut, Ready to Burn</h2>
        <p class="prose-centered">River City Tree Care sells firewood sourced from tree removal jobs across Ringgold, GA and the greater Chattanooga area. Call for pricing and availability.</p>
        <div class="cta-actions">
          <a href="tel:+17062646130" class="cta-phone"><i class="lucide-phone"></i> (706) 264-6130</a>
          <a href="/contact" class="btn-primary ripple">Contact Us</a>
        </div>
      </div>
    </section>

    <div class="container" style="padding: var(--space-lg) var(--space-lg);">
      <p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>
    </div>

  </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

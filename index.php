<?php
$pageTitle       = "Tree Removal & Land Clearing Ringgold, GA | RCTC";
$pageDescription = "24/7 tree removal, stump grinding, lot clearing, and forestry mulching in Ringgold, GA and Chattanooga, TN. Free estimates — (706) 264-6130.";
$canonicalUrl    = "https://www.rivercitytreega.com";
$ogImage         = "https://i.imgur.com/sqX9jX4.jpeg";
$currentPage     = "home";
$heroImage       = "https://i.imgur.com/sqX9jX4.jpeg";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = true;

$schemaMarkup = '{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "LocalBusiness",
      "@id": "https://www.rivercitytreega.com/#business",
      "name": "River City Tree Care, LLC",
      "image": "https://i.imgur.com/3V6kJDE.png",
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
      },
      "areaServed": [
        {"@type": "City", "name": "Ringgold", "addressRegion": "GA"},
        {"@type": "City", "name": "Chattanooga", "addressRegion": "TN"},
        {"@type": "City", "name": "Fort Oglethorpe", "addressRegion": "GA"},
        {"@type": "City", "name": "Dalton", "addressRegion": "GA"},
        {"@type": "City", "name": "Calhoun", "addressRegion": "GA"},
        {"@type": "City", "name": "LaFayette", "addressRegion": "GA"},
        {"@type": "City", "name": "Rossville", "addressRegion": "GA"}
      ],
      "priceRange": "$$",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "47"
      }
    },
    {
      "@type": "WebSite",
      "url": "https://www.rivercitytreega.com",
      "name": "River City Tree Care, LLC",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://www.rivercitytreega.com/?s={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What tree services does River City Tree Care offer?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "River City Tree Care provides tree trimming, tree removal, stump grinding, lot clearing, forestry mulching, land development clearing, firewood sales, and portable sawmill services across a 50-mile radius from Ringgold, GA including Chattanooga, TN."
          }
        },
        {
          "@type": "Question",
          "name": "Do you offer emergency tree removal?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. River City Tree Care operates 24 hours a day, 7 days a week, including holidays. Storm damage, fallen trees blocking driveways, and trees threatening structures are handled with same-day response whenever possible."
          }
        },
        {
          "@type": "Question",
          "name": "What areas does River City Tree Care serve?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "River City Tree Care serves a 50-mile radius from Ringgold, GA including Chattanooga TN, Fort Oglethorpe GA, Dalton GA, Calhoun GA, LaFayette GA, Rossville GA, and surrounding communities in Catoosa County, Hamilton County, and Whitfield County."
          }
        },
        {
          "@type": "Question",
          "name": "Do you haul away debris after tree removal?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes — full cleanup is included with every tree removal job. River City Tree Care hauls all wood, branches, and brush off your property. If you want the wood kept for firewood, just let the crew know."
          }
        },
        {
          "@type": "Question",
          "name": "Are you licensed and insured?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. River City Tree Care, LLC is fully licensed and insured, carrying both general liability and workers compensation coverage. Proof of insurance is available on request before any job begins."
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

    <!-- ============================================
         HERO — Ken Burns + Typed.js
         ============================================ -->
    <section class="hero" aria-label="Hero">
      <div class="hero-bg" style="background-image: url('https://i.imgur.com/sqX9jX4.jpeg');"></div>
      <div class="container">
        <h1 class="hero-h1-gradient">
          Ringgold's Tree Removal &amp;<br>Land Clearing Experts —<br>
          <span class="hero-typed-wrap"><span id="typed-services"></span></span>
        </h1>
        <p class="hero-subtitle prose-centered">
          River City Tree Care, LLC is a licensed and insured tree service company based in Ringgold, GA. 24/7 emergency response. Free estimates within a 50-mile radius including Chattanooga, TN.
        </p>
        <div class="hero-cta">
          <a href="/contact" class="btn-primary ripple">Get a Free Estimate</a>
          <a href="/services" class="btn-secondary">Our Services</a>
        </div>
        <div class="hero-cta" style="animation-delay: 0.35s;">
          <a href="tel:+17062646130" class="hero-phone">
            <i class="lucide-phone"></i> (706) 264-6130
          </a>
        </div>
      </div>
    </section>

    <!-- ============================================
         TRUST BADGE STRIP
         ============================================ -->
    <div class="badge-strip">
      <div class="container">
        <div class="badge"><i class="lucide-clock"></i> 24/7 Emergency Service</div>
        <div class="badge"><i class="lucide-calculator"></i> Free Estimates</div>
        <div class="badge"><i class="lucide-map-pin"></i> 50-Mile Service Radius</div>
        <div class="badge"><i class="lucide-navigation"></i> Ringgold, GA &amp; Chattanooga, TN</div>
        <div class="badge"><i class="lucide-truck"></i> Fully Equipped Crew</div>
      </div>
    </div>

    <!-- ============================================
         SERVICES GRID — Dark cards, amber accent
         ============================================ -->
    <section class="services-section" data-animate="fade-up">
      <div class="container">
        <h2 class="section-title" style="text-align: center;">What We Do</h2>
        <p class="section-subtitle prose-centered" style="text-align: center;">From single-tree removals to full land development clearing — River City Tree Care handles it all across Ringgold, Chattanooga, and the surrounding region.</p>

        <div class="grid-3" data-stagger>

          <div class="service-card">
            <div class="card-icon"><i class="lucide-scissors"></i></div>
            <h3><a href="/services/tree-trimming">Tree Trimming</a></h3>
            <p>Deadwood removal, crown thinning, and clearance trimming for power lines, rooflines, and driveways.</p>
            <a href="/services/tree-trimming" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
          </div>

          <div class="service-card">
            <div class="card-icon"><i class="lucide-trees"></i></div>
            <h3><a href="/services/tree-removal">Tree Removal</a></h3>
            <p>Full tree removal for hazardous, dead, and storm-damaged trees. 24/7 emergency response with complete debris haul-away.</p>
            <a href="/services/tree-removal" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
          </div>

          <div class="service-card">
            <div class="card-icon"><i class="lucide-disc"></i></div>
            <h3><a href="/services/stump-grinding">Stump Grinding</a></h3>
            <p>Stumps ground below grade so you can reclaim your yard. Most residential stumps finished in under an hour.</p>
            <a href="/services/stump-grinding" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
          </div>

          <div class="service-card">
            <div class="card-icon"><i class="lucide-land-plot"></i></div>
            <h3><a href="/services/lot-clearing">Lot Clearing</a></h3>
            <p>Residential and commercial lots cleared for building, fencing, or landscaping — brush, trees, and debris removed completely.</p>
            <a href="/services/lot-clearing" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
          </div>

          <div class="service-card">
            <div class="card-icon"><i class="lucide-tractor"></i></div>
            <h3><a href="/services/forestry-mulching">Forestry Mulching</a></h3>
            <p>Clear overgrown land without excavation. Mulching grinds vegetation in place, leaving nutrient-rich ground cover.</p>
            <a href="/services/forestry-mulching" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
          </div>

          <div class="service-card">
            <div class="card-icon"><i class="lucide-building-2"></i></div>
            <h3><a href="/services/land-development">Land Development</a></h3>
            <p>Site prep for new construction, driveways, and subdivisions. Grading-ready clearing for builders and developers.</p>
            <a href="/services/land-development" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
          </div>

          <div class="service-card">
            <div class="card-icon"><i class="lucide-flame"></i></div>
            <h3><a href="/services/firewood">Firewood</a></h3>
            <p>Seasoned hardwood firewood available for pickup or delivery. Cut from our tree removal jobs — oak, hickory, and mixed hardwoods.</p>
            <a href="/services/firewood" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
          </div>

          <div class="service-card">
            <div class="card-icon"><i class="lucide-axe"></i></div>
            <h3><a href="/services/sawmill-services">Sawmill Services</a></h3>
            <p>Custom milling from your logs or ours. Turn downed trees into usable lumber — slabs, beams, and dimensional cuts.</p>
            <a href="/services/sawmill-services" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
          </div>

        </div>
      </div>
    </section>

    <!-- ============================================
         BEFORE / AFTER — Signature Section
         ============================================ -->
    <section class="before-after-section">
      <div class="container">
        <h2 class="section-title" style="text-align: center;">The Difference One Crew Makes</h2>
        <p class="section-subtitle prose-centered" style="text-align: center;">Same property. Same week. Complete tree removal and full site cleanup in Ringgold, GA.</p>

        <div class="ba-grid">
          <div class="ba-panel" data-animate="wipe-right">
            <img src="https://i.imgur.com/81aTpmZ.jpeg" alt="Property before tree removal — overgrown trees and brush in Ringgold, GA" width="800" height="600">
            <span class="ba-label">Before</span>
          </div>
          <div class="ba-panel" data-animate="wipe-right">
            <img src="https://i.imgur.com/obWRY2D.jpeg" alt="Property after tree removal — clean lot with clear sightlines in Ringgold, GA" width="800" height="600">
            <span class="ba-label">After</span>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================
         STAT COUNTERS
         ============================================ -->
    <section class="stats-section">
      <div class="container">
        <div class="stats-grid">
          <div class="stat-counter">
            <div class="stat-icon"><i class="lucide-clock"></i></div>
            <div class="stat-number" data-count="24" data-suffix="/7">0</div>
            <div class="stat-label">Availability</div>
          </div>
          <div class="stat-counter">
            <div class="stat-icon"><i class="lucide-map-pin"></i></div>
            <div class="stat-number" data-count="50" data-suffix="-Mile">0</div>
            <div class="stat-label">Service Radius</div>
          </div>
          <div class="stat-counter">
            <div class="stat-icon"><i class="lucide-calculator"></i></div>
            <div class="stat-number">Free</div>
            <div class="stat-label">Estimates — Always</div>
          </div>
          <div class="stat-counter">
            <div class="stat-icon"><i class="lucide-zap"></i></div>
            <div class="stat-number">Same-Day</div>
            <div class="stat-label">Emergency Response</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================
         MID-PAGE CTA BANNER
         ============================================ -->
    <section class="cta-banner">
      <div class="container">
        <h2>Trees Down? Storm Damage? We're on It.</h2>
        <p class="prose-centered">River City Tree Care responds 24/7 to emergency calls across Ringgold, GA and the greater Chattanooga area. One call gets a crew to your property — fast.</p>
        <div class="cta-actions">
          <a href="tel:+17062646130" class="cta-phone"><i class="lucide-phone"></i> (706) 264-6130</a>
          <a href="/contact" class="btn-primary ripple">Request a Free Estimate</a>
        </div>
      </div>
    </section>

    <!-- ============================================
         ABOUT SNIPPET
         ============================================ -->
    <section class="about-section" data-animate="fade-up">
      <div class="container">
        <div class="split">
          <div class="about-img-wrap" data-animate="wipe-right">
            <img src="https://i.imgur.com/bOAPVBM.jpeg" alt="Cleared residential yard with lawn chairs in Ringgold, GA — River City Tree Care results" width="800" height="600">
          </div>
          <div class="about-content">
            <h2>Built on Hard Work, Not Sales Pitches</h2>
            <div class="prose">
              <p><strong>River City Tree Care, LLC</strong> is owned and operated by <strong>Andrew Roberson</strong> out of Ringgold, GA. Andrew and his crew handle everything from single backyard tree removals to multi-acre land clearing projects across a 50-mile radius — including Chattanooga, TN, Fort Oglethorpe, Dalton, and surrounding communities.</p>
              <p>The approach is straightforward: show up with the right equipment, do the work safely, clean up completely, and leave every property better than we found it. No subcontractors. No runaround. Just a hands-on crew that takes the job as seriously as you do. <a href="/about" style="color: var(--primary); font-weight: 700;">Read more about our team &rarr;</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================
         WORK GALLERY
         ============================================ -->
    <section class="gallery-section" data-animate="fade-up">
      <div class="container">
        <h2 class="section-title" style="text-align: center;">Recent Work</h2>
        <p class="section-subtitle prose-centered" style="text-align: center;">Job sites across Ringgold, Chattanooga, and the surrounding area.</p>

        <div class="gallery-grid" data-stagger>
          <div class="gallery-item" data-animate="wipe-right">
            <img src="https://i.imgur.com/VXyzEDK.jpeg" alt="Land clearing project — trees and brush removed from lot in Ringgold, GA" width="800" height="600">
          </div>
          <div class="gallery-item" data-animate="wipe-right">
            <img src="https://i.imgur.com/jUSd82l.jpeg" alt="Wood chipper processing tree debris on job site" width="800" height="600">
          </div>
          <div class="gallery-item" data-animate="wipe-right">
            <img src="https://i.imgur.com/O3Mk7h2.jpeg" alt="Sawmill services — custom lumber milling from downed trees" width="800" height="600">
          </div>
          <div class="gallery-item" data-animate="wipe-right">
            <img src="https://i.imgur.com/yVOtcwu.jpeg" alt="Completed land clearing — clean lot ready for development near Chattanooga, TN" width="800" height="600">
          </div>
          <div class="gallery-item" data-animate="wipe-right">
            <img src="https://i.imgur.com/z7KgBB4.jpeg" alt="Stump grinder removing tree stump below grade" width="800" height="600">
          </div>
          <div class="gallery-item" data-animate="wipe-right">
            <img src="https://i.imgur.com/59CI1Kv.jpeg" alt="Large hauling trailer loaded with cut timber from job site" width="800" height="600">
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================
         FAQ
         ============================================ -->
    <section class="faq-section" data-animate="fade-up">
      <div class="container">
        <h2 class="section-title" style="text-align: center;">Frequently Asked Questions</h2>
        <p class="section-subtitle prose-centered" style="text-align: center;">Straight answers to the questions we hear most from homeowners and property managers in the Ringgold and Chattanooga area.</p>

        <div class="faq-list">

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              What tree services does River City Tree Care offer?
              <i class="lucide-chevron-down chevron"></i>
            </button>
            <div class="faq-answer" role="region">
              <div class="faq-answer-inner prose">
                <p>River City Tree Care provides <a href="/services/tree-trimming" style="color: var(--primary);">tree trimming</a>, <a href="/services/tree-removal" style="color: var(--primary);">tree removal</a>, <a href="/services/stump-grinding" style="color: var(--primary);">stump grinding</a>, <a href="/services/lot-clearing" style="color: var(--primary);">lot clearing</a>, <a href="/services/forestry-mulching" style="color: var(--primary);">forestry mulching</a>, <a href="/services/land-development" style="color: var(--primary);">land development clearing</a>, <a href="/services/firewood" style="color: var(--primary);">firewood sales</a>, and <a href="/services/sawmill-services" style="color: var(--primary);">portable sawmill services</a> across a 50-mile radius from Ringgold, GA including Chattanooga, TN.</p>
              </div>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              Do you offer emergency tree removal?
              <i class="lucide-chevron-down chevron"></i>
            </button>
            <div class="faq-answer" role="region">
              <div class="faq-answer-inner prose">
                <p>Yes. River City Tree Care operates 24 hours a day, 7 days a week, including holidays. Storm damage, fallen trees blocking driveways, and trees threatening structures are handled with same-day response whenever possible. Call <a href="tel:+17062646130" style="color: var(--primary);">(706) 264-6130</a> any time — day or night.</p>
              </div>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              What areas does River City Tree Care serve?
              <i class="lucide-chevron-down chevron"></i>
            </button>
            <div class="faq-answer" role="region">
              <div class="faq-answer-inner prose">
                <p>River City Tree Care covers a 50-mile radius from Ringgold, GA — including Chattanooga TN, Fort Oglethorpe GA, Dalton GA, Calhoun GA, LaFayette GA, Rossville GA, and surrounding communities across Catoosa County, Hamilton County, and Whitfield County.</p>
              </div>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              Do you haul away debris after tree removal?
              <i class="lucide-chevron-down chevron"></i>
            </button>
            <div class="faq-answer" role="region">
              <div class="faq-answer-inner prose">
                <p>Yes — full cleanup is included with every tree removal job. We haul all wood, branches, and brush off your property. If you want the wood kept for firewood, just let the crew know and we'll stack it where you need it.</p>
              </div>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              Are you licensed and insured?
              <i class="lucide-chevron-down chevron"></i>
            </button>
            <div class="faq-answer" role="region">
              <div class="faq-answer-inner prose">
                <p>Yes. River City Tree Care, LLC is fully licensed and insured, carrying both general liability and workers' compensation coverage. Proof of insurance is available on request before any job begins.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ============================================
         CLOSING CTA
         ============================================ -->
    <section class="cta-banner">
      <div class="container">
        <h2>Ready to Clear the Way?</h2>
        <p class="prose-centered">Whether it's one tree or ten acres, River City Tree Care has the equipment and the crew to get it done. Serving Ringgold, GA, Chattanooga, TN, and everywhere in between — 24/7.</p>
        <div class="cta-actions">
          <a href="/contact" class="btn-primary ripple">Get Your Free Estimate</a>
          <a href="tel:+17062646130" class="cta-phone"><i class="lucide-phone"></i> (706) 264-6130</a>
        </div>
      </div>
    </section>

  </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

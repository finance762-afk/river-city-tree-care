<?php
$pageTitle       = "Tree Removal &amp; Land Clearing Chickamauga, GA | River City Tree Care";
$pageDescription = "24/7 tree removal, stump grinding, lot clearing, and forestry mulching in Chickamauga, GA and Chattanooga, TN. Free estimates — (706) 264-6130.";
$canonicalUrl    = "https://www.rivercitytreega.com";
$ogImage         = "https://i.imgur.com/sqX9jX4.jpeg";
$currentPage     = "home";
$heroImage       = "https://i.imgur.com/sqX9jX4.jpeg";
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
      "image": "https://i.imgur.com/3V6kJDE.png",
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
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "34.8712",
        "longitude": "-85.2911"
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00",
        "closes": "23:59"
      },
      "areaServed": [
        {"@type": "City", "name": "Chickamauga", "addressRegion": "GA"},
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
            "text": "River City Tree Care provides tree trimming, tree removal, stump grinding, lot clearing, forestry mulching, land development clearing, firewood sales, and portable sawmill services across a 50-mile radius from Chickamauga, GA including Chattanooga, TN."
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
            "text": "River City Tree Care serves a 50-mile radius from Chickamauga, GA including Ringgold GA, Chattanooga TN, Fort Oglethorpe GA, Dalton GA, Calhoun GA, LaFayette GA, Rossville GA, and surrounding communities in Walker County, Catoosa County, Hamilton County, and Whitfield County."
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
         HERO — 100vh, Ken Burns, Green Overlay
         ============================================ -->
    <section class="hero" aria-label="Hero">
      <div class="hero-bg" style="background-image: url('https://i.imgur.com/sqX9jX4.jpeg');"></div>
      <div class="container">
        <h1>
          Chickamauga's <span class="text-accent">Hardest-Working</span><br>
          Tree Removal &amp; Land Clearing Crew
        </h1>
        <p class="hero-subtitle prose-centered">
          Licensed and insured tree service based in Chickamauga, GA. 24/7 emergency response, free estimates, and full cleanup on every job — serving a 50-mile radius including Chattanooga, TN.
        </p>
        <div class="hero-cta">
          <a href="/contact" class="btn-primary ripple">Get a Free Estimate</a>
          <a href="tel:+17062646130" class="hero-phone">
            <i class="lucide-phone"></i> (706) 264-6130
          </a>
        </div>
      </div>

      <!-- SVG Wave Divider → badge-strip bg-alt -->
      <div class="section-divider section-divider--bottom">
        <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0,40 C360,80 720,0 1080,40 C1260,60 1380,50 1440,40 L1440,80 L0,80 Z" fill="#1E1208"/>
        </svg>
      </div>
    </section>

    <!-- ============================================
         TRUST BADGE STRIP — above fold, no animate
         ============================================ -->
    <div class="badge-strip">
      <div class="container">
        <div class="badge"><i class="lucide-clock"></i> 24/7 Emergency Service</div>
        <div class="badge"><i class="lucide-calculator"></i> Free Estimates</div>
        <div class="badge"><i class="lucide-shield-check"></i> Licensed &amp; Insured</div>
        <div class="badge"><i class="lucide-map-pin"></i> Chickamauga, GA &amp; Chattanooga, TN</div>
        <div class="badge"><i class="lucide-truck"></i> Full Cleanup Included</div>
      </div>
    </div>

    <!-- ============================================
         SERVICES — Imaged cards with tinted bg
         ============================================ -->
    <section class="services-section" style="position: relative;">
      <div class="container" style="position: relative; z-index: 1;">
        <div style="text-align: center; margin-bottom: var(--space-2xl);">
          <span class="eyebrow-label">Our Services</span>
          <h2 class="section-title">What <span class="text-accent">We Do</span></h2>
          <p class="section-subtitle prose-centered">From single-tree removals to multi-acre land clearing — River City Tree Care handles it all across Chickamauga, Ringgold, Chattanooga, and the surrounding region.</p>
        </div>

        <div class="services-grid-4" data-stagger>

          <div class="service-card-visual card-tint-1">
            <div class="card-img">
              <img src="https://i.imgur.com/jUSd82l.jpeg" alt="Wood chipper processing branches during tree trimming job in Chickamauga, GA" width="800" height="500" loading="lazy">
            </div>
            <div class="card-body">
              <h3><i class="lucide-scissors"></i> <a href="/services/tree-trimming">Tree Trimming</a></h3>
              <p>Crown thinning, deadwood removal, and clearance trimming for power lines, rooflines, and driveways.</p>
              <a href="/services/tree-trimming" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
            </div>
          </div>

          <div class="service-card-visual card-tint-2">
            <div class="card-img">
              <img src="https://i.imgur.com/81aTpmZ.jpeg" alt="Tree removal job site — overgrown trees on residential property" width="800" height="500" loading="lazy">
            </div>
            <div class="card-body">
              <h3><i class="lucide-trees"></i> <a href="/services/tree-removal">Tree Removal</a></h3>
              <p>Hazardous, dead, and storm-damaged trees removed safely. 24/7 emergency response with full debris haul-away.</p>
              <a href="/services/tree-removal" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
            </div>
          </div>

          <div class="service-card-visual card-tint-3">
            <div class="card-img">
              <img src="https://i.imgur.com/z7KgBB4.jpeg" alt="Commercial stump grinder removing stump below grade" width="800" height="500" loading="lazy">
            </div>
            <div class="card-body">
              <h3><i class="lucide-disc"></i> <a href="/services/stump-grinding">Stump Grinding</a></h3>
              <p>Stumps ground 6–12 inches below grade. Yard ready to fill, seed, or build over — most done in under an hour.</p>
              <a href="/services/stump-grinding" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
            </div>
          </div>

          <div class="service-card-visual card-tint-1">
            <div class="card-img">
              <img src="https://i.imgur.com/VXyzEDK.jpeg" alt="Lot clearing project — trees and brush removed from residential property" width="800" height="500" loading="lazy">
            </div>
            <div class="card-body">
              <h3><i class="lucide-land-plot"></i> <a href="/services/lot-clearing">Lot Clearing</a></h3>
              <p>Residential and commercial lots cleared for building, fencing, or landscaping — all debris hauled off-site.</p>
              <a href="/services/lot-clearing" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
            </div>
          </div>

          <div class="service-card-visual card-tint-2">
            <div class="card-img">
              <img src="https://i.imgur.com/yVOtcwu.jpeg" alt="Completed land clearing — clean lot ready for development" width="800" height="500" loading="lazy">
            </div>
            <div class="card-body">
              <h3><i class="lucide-tractor"></i> <a href="/services/forestry-mulching">Forestry Mulching</a></h3>
              <p>Clear overgrown acreage in a single pass. No hauling, no burning — nutrient-rich mulch stays on-site.</p>
              <a href="/services/forestry-mulching" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
            </div>
          </div>

          <div class="service-card-visual card-tint-3">
            <div class="card-img">
              <img src="https://i.imgur.com/59CI1Kv.jpeg" alt="Hauling trailer loaded with cleared timber from development site" width="800" height="500" loading="lazy">
            </div>
            <div class="card-body">
              <h3><i class="lucide-building-2"></i> <a href="/services/land-development">Land Development</a></h3>
              <p>Site prep for new construction — tree removal, brush clearing, and grading-ready results for builders and developers.</p>
              <a href="/services/land-development" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
            </div>
          </div>

          <div class="service-card-visual card-tint-1">
            <div class="card-img">
              <img src="https://i.imgur.com/O3Mk7h2.jpeg" alt="Hardwood logs from tree removal — firewood stock in North Georgia" width="800" height="500" loading="lazy">
            </div>
            <div class="card-body">
              <h3><i class="lucide-flame"></i> <a href="/services/firewood">Firewood</a></h3>
              <p>Seasoned hardwood cut from local job sites — oak, hickory, and mixed hardwoods by the truckload.</p>
              <a href="/services/firewood" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
            </div>
          </div>

          <div class="service-card-visual card-tint-2">
            <div class="card-img">
              <img src="https://i.imgur.com/dgkvKEa.jpeg" alt="Logs ready for portable sawmill processing — custom lumber milling" width="800" height="500" loading="lazy">
            </div>
            <div class="card-body">
              <h3><i class="lucide-axe"></i> <a href="/services/sawmill-services">Sawmill Services</a></h3>
              <p>Turn downed trees into usable lumber on-site — slabs, beams, and dimensional cuts from your logs.</p>
              <a href="/services/sawmill-services" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
            </div>
          </div>

        </div>
      </div>

      <!-- Floating leaf accent -->
      <svg class="floating-accent float-animate" style="top: 10%; right: 5%; width: 180px;" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="M50 5 C60 20, 85 35, 90 55 C95 75, 70 95, 50 95 C30 95, 5 75, 10 55 C15 35, 40 20, 50 5Z" fill="#2D5A27"/></svg>

      <!-- SVG Angle Divider → stats bg-mid -->
      <div class="section-divider section-divider--bottom">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
          <polygon points="0,60 1440,0 1440,60" fill="#2A1F14"/>
        </svg>
      </div>
    </section>

    <!-- ============================================
         STAT COUNTERS
         ============================================ -->
    <section class="stats-section" style="position: relative;" data-animate="fade-up">
      <div class="container" style="position: relative; z-index: 1;">
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
      <div class="stat-watermark">RCTC</div>
    </section>

    <!-- ============================================
         MID-PAGE CTA BANNER
         ============================================ -->
    <section class="cta-banner">
      <div class="container">
        <h2>Trees Down? <span class="text-accent">Storm Damage?</span> We're on It.</h2>
        <p class="prose-centered">River City Tree Care responds 24/7 to emergency calls across Chickamauga, GA and the greater Chattanooga area. One call gets a crew to your property — fast.</p>
        <div class="cta-actions">
          <a href="tel:+17062646130" class="cta-phone"><i class="lucide-phone"></i> (706) 264-6130</a>
          <a href="/contact" class="btn-primary ripple">Request a Free Estimate</a>
        </div>
      </div>
    </section>

    <!-- ============================================
         PROCESS — How It Works
         ============================================ -->
    <section class="process-section" data-animate="fade-up">
      <div class="container">
        <div style="text-align: center; margin-bottom: var(--space-lg);">
          <span class="eyebrow-label">Our Process</span>
          <h2>How <span class="text-accent">Every Job</span> Works</h2>
          <p class="section-subtitle">No surprises, no runaround — here's what to expect from first call to final cleanup.</p>
        </div>
        <div class="process-steps" data-stagger>
          <div class="process-card">
            <div class="step-number">1</div>
            <h3>Free Estimate</h3>
            <p>We walk your property, assess the scope, and give you a firm written price — no pressure, no obligation.</p>
          </div>
          <div class="process-card">
            <div class="step-number">2</div>
            <h3>Schedule &amp; Prep</h3>
            <p>Pick a date that works. We show up with the right crew and equipment for the job — on time, every time.</p>
          </div>
          <div class="process-card">
            <div class="step-number">3</div>
            <h3>Get It Done</h3>
            <p>Trees come down safely. Stumps get ground. Brush gets cleared. Every job is done to completion.</p>
          </div>
          <div class="process-card">
            <div class="step-number">4</div>
            <h3>Full Cleanup</h3>
            <p>All wood, branches, and debris chipped or hauled off-site. Your property is left cleaner than we found it.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================
         ABOUT SNIPPET — Asymmetric broken-grid
         ============================================ -->
    <section style="background: var(--bg-alt); padding: var(--section-pad); position: relative; overflow: hidden;">
      <div class="container" style="position: relative; z-index: 1;">
        <div class="about-grid">

          <div class="about-image-group" data-animate="fade-up">
            <div class="about-image-primary">
              <img src="https://i.imgur.com/bOAPVBM.jpeg" alt="Cleared residential yard — lot clearing result by River City Tree Care in Chickamauga, GA" width="800" height="600" loading="lazy">
            </div>
            <div class="about-image-secondary">
              <img src="https://i.imgur.com/WpCmdQg.jpeg" alt="River City Tree Care crew at work on active job site" width="600" height="400" loading="lazy">
            </div>
          </div>

          <div data-animate="fade-up">
            <span class="eyebrow-label">About Us</span>
            <h2 style="color: var(--primary); margin-bottom: var(--space-lg);">Built on <span class="text-accent">Hard Work</span>, Not Sales Pitches</h2>
            <div class="prose">
              <p><strong>River City Tree Care, LLC</strong> is owned and operated by <strong>Andrew Roberson</strong> out of Chickamauga, GA. Andrew and his crew handle everything from single backyard tree removals to multi-acre land clearing projects across a 50-mile radius — including Chattanooga, TN, Ringgold, Fort Oglethorpe, Dalton, and surrounding communities.</p>
              <p>The approach is straightforward: show up with the right equipment, do the work safely, clean up completely, and leave every property better than we found it. No subcontractors. No runaround. Just a hands-on crew that takes the job as seriously as you do.</p>
              <p><a href="/about" style="color: var(--accent); font-weight: 700;">Read more about our team &rarr;</a></p>
            </div>
          </div>

        </div>
      </div>

      <!-- Floating tree ring accent -->
      <svg class="floating-accent float-animate-slow" style="bottom: 10%; left: 3%; width: 200px;" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
        <circle cx="50" cy="50" r="45" fill="none" stroke="#2D5A27" stroke-width="2"/>
        <circle cx="50" cy="50" r="35" fill="none" stroke="#2D5A27" stroke-width="1.5"/>
        <circle cx="50" cy="50" r="25" fill="none" stroke="#2D5A27" stroke-width="1"/>
        <circle cx="50" cy="50" r="15" fill="none" stroke="#2D5A27" stroke-width="0.8"/>
        <circle cx="50" cy="50" r="6" fill="#2D5A27"/>
      </svg>

      <!-- SVG Curve Divider → gallery bg -->
      <div class="section-divider section-divider--bottom">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0,0 Q720,80 1440,0 L1440,60 L0,60 Z" fill="#18100A"/>
        </svg>
      </div>
    </section>

    <!-- ============================================
         BEFORE / AFTER
         ============================================ -->
    <section class="before-after-section" style="background: var(--bg);">
      <div class="container">
        <div style="text-align: center; margin-bottom: var(--space-2xl);">
          <span class="eyebrow-label">Results</span>
          <h2 class="section-title">The Difference <span class="text-accent">One Crew</span> Makes</h2>
          <p class="section-subtitle prose-centered">Same property. Same week. Complete tree removal and full site cleanup in Chickamauga, GA.</p>
        </div>

        <div class="ba-grid" data-animate="fade-up">
          <div class="ba-panel">
            <img src="https://i.imgur.com/81aTpmZ.jpeg" alt="Property before tree removal — overgrown trees and brush in Chickamauga, GA" width="800" height="600" loading="lazy">
            <span class="ba-label">Before</span>
          </div>
          <div class="ba-panel">
            <img src="https://i.imgur.com/obWRY2D.jpeg" alt="Property after tree removal — clean lot with clear sightlines in Chickamauga, GA" width="800" height="600" loading="lazy">
            <span class="ba-label">After</span>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================
         WORK GALLERY
         ============================================ -->
    <section class="gallery-section" data-animate="fade-up">
      <div class="container">
        <div style="text-align: center; margin-bottom: var(--space-2xl);">
          <span class="eyebrow-label">Our Work</span>
          <h2 class="section-title">Recent <span class="text-accent">Job Sites</span></h2>
          <p class="section-subtitle prose-centered">Job sites across Chickamauga, Ringgold, Chattanooga, and the surrounding area.</p>
        </div>

        <div class="gallery-grid" data-stagger>
          <div class="gallery-item">
            <img src="https://i.imgur.com/VXyzEDK.jpeg" alt="Land clearing project — trees and brush removed from lot in Chickamauga, GA" width="800" height="600" loading="lazy">
          </div>
          <div class="gallery-item">
            <img src="https://i.imgur.com/jUSd82l.jpeg" alt="Wood chipper processing tree debris on job site" width="800" height="600" loading="lazy">
          </div>
          <div class="gallery-item">
            <img src="https://i.imgur.com/O3Mk7h2.jpeg" alt="Sawmill services — custom lumber milling from downed trees" width="800" height="600" loading="lazy">
          </div>
          <div class="gallery-item">
            <img src="https://i.imgur.com/yVOtcwu.jpeg" alt="Completed land clearing — clean lot ready for development near Chattanooga, TN" width="800" height="600" loading="lazy">
          </div>
          <div class="gallery-item">
            <img src="https://i.imgur.com/z7KgBB4.jpeg" alt="Stump grinder removing tree stump below grade" width="800" height="600" loading="lazy">
          </div>
          <div class="gallery-item">
            <img src="https://i.imgur.com/59CI1Kv.jpeg" alt="Large hauling trailer loaded with cut timber from job site" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================
         FAQ
         ============================================ -->
    <section class="faq-section" data-animate="fade-up">
      <div class="container">
        <div style="text-align: center; margin-bottom: var(--space-lg);">
          <span class="eyebrow-label">FAQ</span>
          <h2 class="section-title">Common <span class="text-accent">Questions</span></h2>
          <p class="section-subtitle prose-centered">Straight answers to the questions we hear most from homeowners and property managers in the Chickamauga and Chattanooga area.</p>
        </div>

        <div class="faq-list">

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              What tree services does River City Tree Care offer?
              <i class="lucide-chevron-down chevron"></i>
            </button>
            <div class="faq-answer" role="region">
              <div class="faq-answer-inner prose">
                <p>River City Tree Care provides <a href="/services/tree-trimming" style="color: var(--primary);">tree trimming</a>, <a href="/services/tree-removal" style="color: var(--primary);">tree removal</a>, <a href="/services/stump-grinding" style="color: var(--primary);">stump grinding</a>, <a href="/services/lot-clearing" style="color: var(--primary);">lot clearing</a>, <a href="/services/forestry-mulching" style="color: var(--primary);">forestry mulching</a>, <a href="/services/land-development" style="color: var(--primary);">land development clearing</a>, <a href="/services/firewood" style="color: var(--primary);">firewood sales</a>, and <a href="/services/sawmill-services" style="color: var(--primary);">portable sawmill services</a> across a 50-mile radius from Chickamauga, GA including Chattanooga, TN.</p>
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
                <p>River City Tree Care covers a 50-mile radius from Chickamauga, GA — including Ringgold GA, Chattanooga TN, Fort Oglethorpe GA, Dalton GA, Calhoun GA, LaFayette GA, Rossville GA, and surrounding communities across Walker County, Catoosa County, Hamilton County, and Whitfield County.</p>
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
                <p>Yes — full cleanup is included with every tree removal job. We haul all wood, branches, and brush off your property. If you want the wood kept for firewood, just let the crew know and we'll cut and stack it where you need it.</p>
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
        <h2>Ready to <span class="text-accent">Clear the Way?</span></h2>
        <p class="prose-centered">Whether it's one tree or ten acres, River City Tree Care has the equipment and the crew to get it done. Serving Chickamauga, GA, Chattanooga, TN, and everywhere in between — 24/7.</p>
        <div class="cta-actions">
          <a href="/contact" class="btn-primary ripple">Get Your Free Estimate</a>
          <a href="tel:+17062646130" class="cta-phone"><i class="lucide-phone"></i> (706) 264-6130</a>
        </div>
      </div>
    </section>

  </main>

<script>document.body.classList.add('page-home');</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<?php
$pageTitle       = "About River City Tree Care, LLC — Ringgold, GA";
$pageDescription = "River City Tree Care, LLC is owned by Andrew Roberson in Ringgold, GA. Tree removal, land clearing, and stump grinding. Licensed and insured.";
$canonicalUrl    = "https://www.rivercitytreega.com/about";
$ogImage         = "https://i.imgur.com/Amvmq1g.png";
$currentPage     = "about";
$heroImage       = "";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;

$schemaMarkup = '{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://www.rivercitytreega.com/#organization",
      "name": "River City Tree Care, LLC",
      "url": "https://www.rivercitytreega.com",
      "logo": "https://i.imgur.com/3V6kJDE.png",
      "telephone": "+1-706-264-6130",
      "email": "treeclimber1110@gmail.com",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Ringgold",
        "addressRegion": "GA",
        "postalCode": "30736",
        "addressCountry": "US"
      },
      "sameAs": [
        "https://www.facebook.com/p/River-City-Tree-Care-61569736164864/",
        "https://www.tiktok.com/@rivercitytreecare.com",
        "https://nextdoor.com/pages/river-city-tree-care-ringgold-ga/",
        "https://www.angi.com/companylist/us/ga/ringgold/river-city-fence-reviews-380222.htm",
        "https://www.bbb.org/us/ga/ringgold/profile/tree-service/river-city-tree-care-0483-40084597"
      ],
      "areaServed": [
        { "@type": "City", "name": "Ringgold", "addressRegion": "GA" },
        { "@type": "City", "name": "Chattanooga", "addressRegion": "TN" },
        { "@type": "City", "name": "Fort Oglethorpe", "addressRegion": "GA" },
        { "@type": "City", "name": "Dalton", "addressRegion": "GA" },
        { "@type": "City", "name": "LaFayette", "addressRegion": "GA" },
        { "@type": "City", "name": "Rossville", "addressRegion": "GA" },
        { "@type": "City", "name": "Calhoun", "addressRegion": "GA" }
      ]
    },
    {
      "@type": "Person",
      "name": "Andrew Roberson",
      "jobTitle": "Owner",
      "worksFor": { "@id": "https://www.rivercitytreega.com/#organization" }
    },
    {
      "@type": "LocalBusiness",
      "@id": "https://www.rivercitytreega.com/#business",
      "name": "River City Tree Care, LLC",
      "url": "https://www.rivercitytreega.com",
      "telephone": "+1-706-264-6130",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "47"
      }
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.rivercitytreega.com" },
        { "@type": "ListItem", "position": 2, "name": "About", "item": "https://www.rivercitytreega.com/about" }
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
          <a href="/">Home</a> <span>/</span> <strong>About</strong>
        </nav>
        <h1>About River City Tree Care, LLC — Ringgold, GA</h1>
        <p class="lead prose">River City Tree Care, LLC is a licensed and insured tree service and land clearing company based in Ringgold, GA, serving a 50-mile radius including Chattanooga, TN and surrounding communities.</p>
      </div>
    </div>

    <!-- Owner story: split — image left, copy right -->
    <section class="service-intro" data-animate="fade-up">
      <div class="container">
        <div class="split">
          <div class="service-img-wrap" data-animate="wipe-right">
            <img src="https://i.imgur.com/Amvmq1g.png" alt="Andrew Roberson, owner of River City Tree Care, LLC — company shirt and chainsaw" width="800" height="600">
          </div>
          <div>
            <h2>Owner-Operated. Hands-On. Every Job.</h2>
            <div class="prose">
              <p><strong>Andrew Roberson</strong> owns and operates River City Tree Care, LLC out of Ringgold, GA. What started as one man with a chainsaw and a truck has grown into a full-service tree care and land clearing operation covering Catoosa County, Hamilton County, Whitfield County, and the broader Chattanooga metro — a 50-mile radius that includes Fort Oglethorpe, Dalton, LaFayette, Rossville, Calhoun, and every community in between.</p>
              <p>Andrew and his crew handle the full range of tree work and land clearing: <a href="/services/tree-trimming" style="color: var(--primary);">trimming</a>, <a href="/services/tree-removal" style="color: var(--primary);">removal</a>, <a href="/services/stump-grinding" style="color: var(--primary);">stump grinding</a>, <a href="/services/lot-clearing" style="color: var(--primary);">lot clearing</a>, <a href="/services/forestry-mulching" style="color: var(--primary);">forestry mulching</a>, <a href="/services/land-development" style="color: var(--primary);">land development clearing</a>, <a href="/services/firewood" style="color: var(--primary);">firewood sales</a>, and <a href="/services/sawmill-services" style="color: var(--primary);">portable sawmill services</a>. The jobs range from single-tree removals in residential backyards to multi-acre clearing for developers and builders.</p>
              <p>The business runs on a simple approach: show up with the right equipment, do the work safely and completely, clean up the entire site, and move on. No subcontractors. No half-finished jobs. No return visits because something got missed. Andrew is on-site for every project — the person who quoted the work is the same person running the crew.</p>
              <p>River City Tree Care is available <strong>24 hours a day, 7 days a week</strong> — including holidays. Storm damage, fallen trees on structures, and emergency situations get same-day response. Every standard job starts with a free on-site estimate so you know the full scope and cost before work begins.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Values / approach — icon cards -->
    <section class="service-content" style="background: var(--bg-alt);" data-animate="fade-up">
      <div class="container">
        <h2 style="text-align: center; color: var(--primary); margin-bottom: var(--space-2xl);">How We Work</h2>
        <div class="grid-2" data-stagger>

          <div class="service-card" style="border-left-color: var(--primary);">
            <div class="card-icon"><i class="lucide-clock"></i></div>
            <h3>Show Up on Time</h3>
            <p>When we set a date, we're there. No rescheduling, no guessing. If an emergency pushes the timeline, you hear from us directly — not through silence.</p>
          </div>

          <div class="service-card" style="border-left-color: var(--primary);">
            <div class="card-icon"><i class="lucide-wrench"></i></div>
            <h3>Professional Equipment</h3>
            <p>Chainsaws, commercial stump grinders, wood chippers, skid steers, forestry mulchers, hauling trailers — we bring the right tools for the job, not make-do alternatives.</p>
          </div>

          <div class="service-card" style="border-left-color: var(--primary);">
            <div class="card-icon"><i class="lucide-sparkles"></i></div>
            <h3>Full Site Cleanup</h3>
            <p>Every job ends with a complete cleanup. All wood, branches, brush, and debris are chipped or hauled off-site. Your property is left cleaner than we found it.</p>
          </div>

          <div class="service-card" style="border-left-color: var(--primary);">
            <div class="card-icon"><i class="lucide-phone-call"></i></div>
            <h3>24/7 Availability</h3>
            <p>Storms don't wait for business hours. River City Tree Care responds to emergency calls around the clock — nights, weekends, and holidays included.</p>
          </div>

        </div>
      </div>
    </section>

    <!-- Work result image -->
    <section class="service-content" style="background: var(--bg);" data-animate="fade-up">
      <div class="container">
        <div class="split-reverse">
          <div class="service-img-wrap" data-animate="wipe-right">
            <img src="https://i.imgur.com/bOAPVBM.jpeg" alt="Cleared residential yard with lawn chairs — lot clearing result by River City Tree Care in Ringgold, GA" width="800" height="600">
          </div>
          <div>
            <h2>The Work Speaks for Itself</h2>
            <div class="prose">
              <p>River City Tree Care has built its reputation job by job across North Georgia and the Chattanooga metro. Every cleared lot, every removed tree, every ground stump is a reference — and Andrew stands behind all of it.</p>
              <p>The business serves homeowners dealing with a single problem tree, property owners clearing land for a new build, developers prepping commercial sites, and everyone in between who needs professional tree work done right the first time.</p>
              <p>Licensed and insured with both general liability and workers' compensation coverage. Proof of insurance is available on request before any job begins.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Review / trust section -->
    <section class="service-content" style="background: var(--bg-mid);" data-animate="fade-up">
      <div class="container" style="text-align: center;">
        <h2 style="color: var(--primary); margin-bottom: var(--space-lg);">What Customers Are Saying</h2>
        <div style="max-width: 600px; margin-inline: auto;">
          <div class="img-shadow" style="margin-bottom: var(--space-lg);">
            <img src="https://i.imgur.com/soD6w6P.jpeg" alt="5-star Google review for River City Tree Care, LLC in Ringgold, GA" width="600" height="400" style="width: 100%; height: auto;">
          </div>
          <p style="color: var(--primary); font-size: 1.6rem; letter-spacing: 0.1em; margin-bottom: var(--space-sm);">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
          <p style="color: var(--text-light); font-size: 0.9rem;">Review sourced from Google Reviews</p>
        </div>
      </div>
    </section>

    <!-- Find us online -->
    <section class="service-content" style="background: var(--bg-alt);" data-animate="fade-up">
      <div class="container">
        <h2 style="text-align: center; color: var(--primary); margin-bottom: var(--space-xl);">Find River City Tree Care Online</h2>
        <div style="display: flex; flex-wrap: wrap; gap: var(--space-md); justify-content: center;">
          <a href="https://www.facebook.com/p/River-City-Tree-Care-61569736164864/" target="_blank" rel="noopener" class="btn-secondary" style="font-size: 0.95rem;">Facebook</a>
          <a href="https://www.tiktok.com/@rivercitytreecare.com" target="_blank" rel="noopener" class="btn-secondary" style="font-size: 0.95rem;">TikTok</a>
          <a href="https://nextdoor.com/pages/river-city-tree-care-ringgold-ga/" target="_blank" rel="noopener" class="btn-secondary" style="font-size: 0.95rem;">Nextdoor</a>
          <a href="https://www.angi.com/companylist/us/ga/ringgold/river-city-fence-reviews-380222.htm" target="_blank" rel="noopener" class="btn-secondary" style="font-size: 0.95rem;">Angi</a>
          <a href="https://www.bbb.org/us/ga/ringgold/profile/tree-service/river-city-tree-care-0483-40084597" target="_blank" rel="noopener" class="btn-secondary" style="font-size: 0.95rem;">BBB</a>
        </div>
      </div>
    </section>

    <!-- Closing CTA -->
    <section class="cta-banner">
      <div class="container">
        <h2>Ready to Get Started?</h2>
        <p class="prose-centered">Free estimates on every job. 24/7 emergency availability. Serving Ringgold, GA, Chattanooga, TN, and the surrounding area.</p>
        <div class="cta-actions">
          <a href="/contact" class="btn-primary ripple">Request a Free Estimate</a>
          <a href="tel:+17062646130" class="cta-phone"><i class="lucide-phone"></i> (706) 264-6130</a>
        </div>
      </div>
    </section>

  </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<?php
$pageTitle       = "About River City Tree Care, LLC — Chickamauga, GA";
$pageDescription = "River City Tree Care, LLC is owned by Andrew Roberson in Chickamauga, GA. Tree removal, land clearing, and stump grinding. Licensed and insured.";
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
        "addressLocality": "Chickamauga",
        "addressRegion": "GA",
        "postalCode": "30707",
        "addressCountry": "US"
      },
      "sameAs": [
        "https://www.facebook.com/p/River-City-Tree-Care-61569736164864/",
        "https://www.youtube.com/@RiverCityTreeCare",
        "https://www.instagram.com/rivercitytreecare",
        "https://www.tiktok.com/@rivercitytreecare.com",
        "https://nextdoor.com/pages/river-city-tree-care-ringgold-ga/",
        "https://www.angi.com/companylist/us/ga/ringgold/river-city-fence-reviews-380222.htm",
        "https://www.bbb.org/us/ga/ringgold/profile/tree-service/river-city-tree-care-0483-40084597"
      ],
      "areaServed": [
        { "@type": "City", "name": "Chickamauga", "addressRegion": "GA" },
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
        <h1>About River City Tree Care, LLC — Chickamauga, GA</h1>
        <p class="lead prose">River City Tree Care, LLC is a licensed and insured tree service and land clearing company based in Chickamauga, GA, serving a 50-mile radius including Chattanooga, TN and surrounding communities.</p>
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
              <p><strong>Andrew Roberson</strong> owns and operates River City Tree Care, LLC out of Chickamauga, GA. What started as one man with a chainsaw and a truck has grown into a full-service tree care and land clearing operation covering Walker County, Catoosa County, Hamilton County, Whitfield County, and the broader Chattanooga metro — a 50-mile radius that includes Fort Oglethorpe, Dalton, LaFayette, Rossville, Calhoun, and every community in between.</p>
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
            <div class="card-icon"><i data-lucide="clock"></i></div>
            <h3>Show Up on Time</h3>
            <p>When we set a date, we're there. No rescheduling, no guessing. If an emergency pushes the timeline, you hear from us directly — not through silence.</p>
          </div>

          <div class="service-card" style="border-left-color: var(--primary);">
            <div class="card-icon"><i data-lucide="wrench"></i></div>
            <h3>Professional Equipment</h3>
            <p>Chainsaws, commercial stump grinders, wood chippers, skid steers, forestry mulchers, hauling trailers — we bring the right tools for the job, not make-do alternatives.</p>
          </div>

          <div class="service-card" style="border-left-color: var(--primary);">
            <div class="card-icon"><i data-lucide="sparkles"></i></div>
            <h3>Full Site Cleanup</h3>
            <p>Every job ends with a complete cleanup. All wood, branches, brush, and debris are chipped or hauled off-site. Your property is left cleaner than we found it.</p>
          </div>

          <div class="service-card" style="border-left-color: var(--primary);">
            <div class="card-icon"><i data-lucide="phone-call"></i></div>
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
            <img src="https://i.imgur.com/bOAPVBM.jpeg" alt="Cleared residential yard with lawn chairs — lot clearing result by River City Tree Care in Chickamauga, GA" width="800" height="600">
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
            <img src="https://i.imgur.com/soD6w6P.jpeg" alt="5-star Google review for River City Tree Care, LLC in Chickamauga, GA" width="600" height="400" style="width: 100%; height: auto;">
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
        <div class="social-bubbles">
          <a href="https://www.facebook.com/p/River-City-Tree-Care-61569736164864/" target="_blank" rel="noopener" class="social-bubble social-bubble--facebook" aria-label="Facebook">
            <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            <span>Facebook</span>
          </a>
          <a href="https://www.youtube.com/@RiverCityTreeCare" target="_blank" rel="noopener" class="social-bubble social-bubble--youtube" aria-label="YouTube">
            <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor" aria-hidden="true"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
            <span>YouTube</span>
          </a>
          <a href="https://www.instagram.com/rivercitytreecare" target="_blank" rel="noopener" class="social-bubble social-bubble--instagram" aria-label="Instagram">
            <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/></svg>
            <span>Instagram</span>
          </a>
          <a href="https://www.tiktok.com/@rivercitytreecare.com" target="_blank" rel="noopener" class="social-bubble social-bubble--tiktok" aria-label="TikTok">
            <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor" aria-hidden="true"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
            <span>TikTok</span>
          </a>
          <a href="https://nextdoor.com/pages/river-city-tree-care-ringgold-ga/" target="_blank" rel="noopener" class="social-bubble social-bubble--nextdoor" aria-label="Nextdoor">
            <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor" aria-hidden="true"><path d="M12.0 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm3.5 14.5h-2v-3.75c0-.69-.56-1.25-1.25-1.25s-1.25.56-1.25 1.25v3.75h-2v-6h2v.9c.53-.7 1.35-1.15 2.25-1.15 1.52 0 2.25 1.1 2.25 2.5v3.75z"/></svg>
            <span>Nextdoor</span>
          </a>
          <a href="https://www.angi.com/companylist/us/ga/ringgold/river-city-fence-reviews-380222.htm" target="_blank" rel="noopener" class="social-bubble social-bubble--angi" aria-label="Angi">
            <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor" aria-hidden="true"><path d="M12 2L2 7v10l10 5 10-5V7L12 2zm0 2.18L19.82 8 12 11.82 4.18 8 12 4.18zM4 9.18l7 3.5V19.5l-7-3.5V9.18zm10 10.32v-6.82l7-3.5v6.82l-7 3.5z"/></svg>
            <span>Angi</span>
          </a>
          <a href="https://www.bbb.org/us/ga/ringgold/profile/tree-service/river-city-tree-care-0483-40084597" target="_blank" rel="noopener" class="social-bubble social-bubble--bbb" aria-label="BBB">
            <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor" aria-hidden="true"><path d="M4 4h6v2H6v12h4v2H4V4zm10 0h6v16h-6v-2h4V6h-4V4zM8 8h8v2H8V8zm0 4h8v2H8v-2z"/></svg>
            <span>BBB</span>
          </a>
        </div>
      </div>
    </section>

    <!-- Closing CTA -->
    <section class="cta-banner">
      <div class="container">
        <h2>Ready to Get Started?</h2>
        <p class="prose-centered">Free estimates on every job. 24/7 emergency availability. Serving Chickamauga, Ringgold, Chattanooga, TN, and the surrounding area.</p>
        <div class="cta-actions">
          <a href="/contact" class="btn-primary ripple">Request a Free Estimate</a>
          <a href="tel:+17062646130" class="cta-phone"><i data-lucide="phone"></i> (706) 264-6130</a>
        </div>
      </div>
    </section>

  </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

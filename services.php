<?php
$pageTitle       = "Tree Services Ringgold, GA | River City Tree Care";
$pageDescription = "Tree removal, stump grinding, lot clearing, forestry mulching, and more in Ringgold, GA and Chattanooga, TN. Free estimates — call (706) 264-6130.";
$canonicalUrl    = "https://www.rivercitytreega.com/services";
$ogImage         = "https://i.imgur.com/sqX9jX4.jpeg";
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
      "telephone": "+1-706-264-6130"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.rivercitytreega.com" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://www.rivercitytreega.com/services" }
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
          <a href="/">Home</a> <span>/</span> <strong>Services</strong>
        </nav>
        <h1>Tree Services in Ringgold, GA &amp; Chattanooga, TN</h1>
        <p class="lead prose">River City Tree Care, LLC provides full-service tree work and land clearing across a 50-mile radius from Ringgold, GA — including Chattanooga, TN, Fort Oglethorpe, Dalton, LaFayette, and surrounding communities. Every job includes free on-site estimates, full cleanup, and 24/7 emergency availability. Call <a href="tel:+17062646130">(706) 264-6130</a> to schedule.</p>
      </div>
    </div>

    <section class="services-main-grid">
      <div class="container">

        <div class="grid-3" data-stagger>

          <div class="service-card">
            <div class="card-icon"><i class="lucide-scissors"></i></div>
            <h3><a href="/services/tree-trimming">Tree Trimming</a></h3>
            <p>Deadwood removal, crown thinning, and clearance trimming for power lines, rooflines, and driveways. Available year-round.</p>
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
            <p>Stumps ground 6–12 inches below grade. Yard ready to fill, seed, or build over. Most stumps done in under an hour.</p>
            <a href="/services/stump-grinding" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
          </div>

          <div class="service-card">
            <div class="card-icon"><i class="lucide-land-plot"></i></div>
            <h3><a href="/services/lot-clearing">Lot Clearing</a></h3>
            <p>Residential and commercial lots cleared for construction, landscaping, or resale prep. All debris hauled off-site.</p>
            <a href="/services/lot-clearing" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
          </div>

          <div class="service-card">
            <div class="card-icon"><i class="lucide-tractor"></i></div>
            <h3><a href="/services/forestry-mulching">Forestry Mulching</a></h3>
            <p>Clear overgrown acreage without excavation. One machine cuts, grinds, and mulches — leaving nutrient-rich ground cover.</p>
            <a href="/services/forestry-mulching" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
          </div>

          <div class="service-card">
            <div class="card-icon"><i class="lucide-building-2"></i></div>
            <h3><a href="/services/land-development">Land Development</a></h3>
            <p>Full site prep for new construction — tree removal, brush clearing, stump grinding, and grading-ready land clearing.</p>
            <a href="/services/land-development" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
          </div>

          <div class="service-card">
            <div class="card-icon"><i class="lucide-flame"></i></div>
            <h3><a href="/services/firewood">Firewood</a></h3>
            <p>Split hardwood firewood sourced from local job sites. Oak, hickory, and mixed hardwoods — call for availability.</p>
            <a href="/services/firewood" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
          </div>

          <div class="service-card">
            <div class="card-icon"><i class="lucide-axe"></i></div>
            <h3><a href="/services/sawmill-services">Sawmill Services</a></h3>
            <p>Portable sawmill turning your logs into custom lumber — slabs, beams, and dimensional cuts milled on site.</p>
            <a href="/services/sawmill-services" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
          </div>

        </div>

      </div>
    </section>

    <section class="cta-banner">
      <div class="container">
        <h2>Not Sure What You Need?</h2>
        <p class="prose-centered">Call River City Tree Care for a free walkthrough and estimate. We'll assess the job and recommend the right approach — no pressure, no obligation.</p>
        <div class="cta-actions">
          <a href="/contact" class="btn-primary ripple">Request a Free Estimate</a>
          <a href="tel:+17062646130" class="cta-phone"><i class="lucide-phone"></i> (706) 264-6130</a>
        </div>
      </div>
    </section>

  </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

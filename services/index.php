<?php
$pageTitle       = "Tree Services Chickamauga, GA | River City Tree Care";
$pageDescription = "Tree removal, stump grinding, lot clearing, forestry mulching, and more in Chickamauga, GA and Chattanooga, TN. Free estimates — call (706) 264-6130.";
$canonicalUrl    = "https://www.rivercitytreega.com/services/";
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
        <h1>Tree Services in Chickamauga, GA &amp; Chattanooga, TN</h1>
        <p class="lead prose">River City Tree Care, LLC provides full-service tree work and land clearing across a 50-mile radius from Chickamauga, GA — including Ringgold, Chattanooga, TN, Fort Oglethorpe, Dalton, LaFayette, and surrounding communities. Every job includes free on-site estimates, full cleanup, and 24/7 emergency availability. Call <a href="tel:+17062646130">(706) 264-6130</a> to schedule.</p>
      </div>
    </div>

    <section class="services-section" style="position: relative;">
      <div class="container" style="position: relative; z-index: 1;">

        <div class="services-grid-4" data-stagger>

          <div class="service-card-visual card-tint-1">
            <div class="card-img">
              <img src="https://i.imgur.com/jUSd82l.jpeg" alt="Wood chipper processing branches during tree trimming job in Chickamauga, GA" width="800" height="500" loading="lazy">
            </div>
            <div class="card-body">
              <h3><i class="lucide-scissors"></i> <a href="/services/tree-trimming/">Tree Trimming</a></h3>
              <p>Crown thinning, deadwood removal, and clearance trimming for power lines, rooflines, and driveways.</p>
              <a href="/services/tree-trimming/" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
            </div>
          </div>

          <div class="service-card-visual card-tint-2">
            <div class="card-img">
              <img src="https://i.imgur.com/81aTpmZ.jpeg" alt="Tree removal job site — overgrown trees on residential property" width="800" height="500" loading="lazy">
            </div>
            <div class="card-body">
              <h3><i class="lucide-trees"></i> <a href="/services/tree-removal/">Tree Removal</a></h3>
              <p>Hazardous, dead, and storm-damaged trees removed safely. 24/7 emergency response with full debris haul-away.</p>
              <a href="/services/tree-removal/" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
            </div>
          </div>

          <div class="service-card-visual card-tint-3">
            <div class="card-img">
              <img src="https://i.imgur.com/z7KgBB4.jpeg" alt="Commercial stump grinder removing stump below grade" width="800" height="500" loading="lazy">
            </div>
            <div class="card-body">
              <h3><i class="lucide-disc"></i> <a href="/services/stump-grinding/">Stump Grinding</a></h3>
              <p>Stumps ground 6–12 inches below grade. Yard ready to fill, seed, or build over — most done in under an hour.</p>
              <a href="/services/stump-grinding/" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
            </div>
          </div>

          <div class="service-card-visual card-tint-1">
            <div class="card-img">
              <img src="https://i.imgur.com/VXyzEDK.jpeg" alt="Lot clearing project — trees and brush removed from residential property" width="800" height="500" loading="lazy">
            </div>
            <div class="card-body">
              <h3><i class="lucide-land-plot"></i> <a href="/services/lot-clearing/">Lot Clearing</a></h3>
              <p>Residential and commercial lots cleared for building, fencing, or landscaping — all debris hauled off-site.</p>
              <a href="/services/lot-clearing/" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
            </div>
          </div>

          <div class="service-card-visual card-tint-2">
            <div class="card-img">
              <img src="https://i.imgur.com/yVOtcwu.jpeg" alt="Completed land clearing — clean lot ready for development" width="800" height="500" loading="lazy">
            </div>
            <div class="card-body">
              <h3><i class="lucide-tractor"></i> <a href="/services/forestry-mulching/">Forestry Mulching</a></h3>
              <p>Clear overgrown acreage in a single pass. No hauling, no burning — nutrient-rich mulch stays on-site.</p>
              <a href="/services/forestry-mulching/" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
            </div>
          </div>

          <div class="service-card-visual card-tint-3">
            <div class="card-img">
              <img src="https://i.imgur.com/59CI1Kv.jpeg" alt="Hauling trailer loaded with cleared timber from development site" width="800" height="500" loading="lazy">
            </div>
            <div class="card-body">
              <h3><i class="lucide-building-2"></i> <a href="/services/land-development/">Land Development</a></h3>
              <p>Site prep for new construction — tree removal, brush clearing, and grading-ready results for builders and developers.</p>
              <a href="/services/land-development/" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
            </div>
          </div>

          <div class="service-card-visual card-tint-1">
            <div class="card-img">
              <img src="https://i.imgur.com/O3Mk7h2.jpeg" alt="Hardwood logs from tree removal — firewood stock in North Georgia" width="800" height="500" loading="lazy">
            </div>
            <div class="card-body">
              <h3><i class="lucide-flame"></i> <a href="/services/firewood/">Firewood</a></h3>
              <p>Seasoned hardwood cut from local job sites — oak, hickory, and mixed hardwoods by the truckload.</p>
              <a href="/services/firewood/" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
            </div>
          </div>

          <div class="service-card-visual card-tint-2">
            <div class="card-img">
              <img src="https://i.imgur.com/dgkvKEa.jpeg" alt="Logs ready for portable sawmill processing — custom lumber milling" width="800" height="500" loading="lazy">
            </div>
            <div class="card-body">
              <h3><i class="lucide-axe"></i> <a href="/services/sawmill-services/">Sawmill Services</a></h3>
              <p>Turn downed trees into usable lumber on-site — slabs, beams, and dimensional cuts from your logs.</p>
              <a href="/services/sawmill-services/" class="card-link">Learn More <i class="lucide-arrow-right"></i></a>
            </div>
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

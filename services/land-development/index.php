<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage     = 'services';
$pageType        = 'service';
$serviceSlug     = 'land-development';
$pageTitle       = 'Land Development Clearing in Chickamauga, GA | River City';
$pageDescription = 'Land clearing and site prep for home sites, subdivisions and commercial pads around Chickamauga, GA. River City Tree Care works with builders. (706) 264-6130.';
$canonicalUrl    = $siteUrl . '/services/land-development/';
$pageStyle       = <<<CSS
.sp-dev .photo-frame--wide { max-width: 520px; }
CSS;

$faqs = [
    ['What size projects does River City Tree Care take?',
     'From a single custom home lot to multi-acre commercial parcels: home builds, phased subdivision lots, commercial pads, driveways and access roads across North Georgia and the Chattanooga area.'],
    ['Is the site ready for grading when you finish?',
     'Yes. Trees, brush, stumps and debris are gone, and the ground is clean and level enough for the grading contractor to start.'],
    ['Can the timber be used instead of hauled?',
     'Yes. Usable logs can be milled through the <a href="/services/sawmill-services/">portable sawmill</a> or cut as <a href="/services/firewood/">firewood</a>, which is common on wooded home sites where the owner wants lumber for a barn or porch.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Services', '/services/'], ['Land Development', '/services/land-development/']]),
    serviceNode('Land Development Clearing', 'Land clearing and site preparation for residential and commercial development around Chickamauga, GA: tree removal, brush clearing, stump grinding and debris haul-away, coordinated with builders and contractors.', 'Chickamauga, GA'),
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero--interior" aria-label="Land development clearing in Chickamauga, GA">
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Services', '/services/'], ['Land Development', null]]); ?>
      <span class="eyebrow">Site prep for builders and owners</span>
      <h1 class="hero-title">Land Development Clearing in Chickamauga, GA</h1>
      <p class="hero-answer">River City Tree Care clears land for development around Chickamauga, GA, from one custom home lot to multi-acre subdivision and commercial sites. The crew removes the trees, brush and stumps inside the footprint, hauls the debris and hands the site over ready for grading.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Request an estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> Call <?php echo e($phone); ?></a>
      </div>
    </div>
    <?php $heroFormId = 'hero-land-development'; $heroFormService = 'Land Development'; $heroFormHeading = 'Price a site'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section sp-dev">
  <div class="container sp-layout">
    <article class="sp-article">

      <div class="content-block">
        <h2>What does land development clearing include?</h2>
        <p class="answer">Land development clearing from River City Tree Care covers tree removal, brush and undergrowth clearing, stump grinding below grade and debris haul-away across the whole footprint. It is the step that has to happen before the foundation is poured, the driveway is graded or a utility trench is dug.</p>
        <p>The work is done to the site plan when there is one. Andrew walks the property with the owner or the contractor, reviews the plan, and gives a detailed written estimate at no charge. Pricing follows acreage and density, the same way it does for <a href="/services/lot-clearing/">a single lot</a>.</p>
      </div>

      <div class="content-block">
        <h2>Which parts of a development site get cleared?</h2>
        <p class="answer">River City Tree Care clears every part of a site that will be built on, driven on or trenched. On a custom home that is usually four areas: the building pad, the driveway, the septic field and the utility runs.</p>
        <div class="table-wrap">
          <table class="data-table">
            <caption>Typical clearing scope by project type.</caption>
            <thead><tr><th scope="col">Project</th><th scope="col">What is cleared</th><th scope="col">Who the crew works with</th></tr></thead>
            <tbody>
              <tr><th scope="row">Custom home</th><td>Building pad, driveway, septic field, utility runs</td><td>Owner or builder</td></tr>
              <tr><th scope="row">Subdivision lots</th><td>Lots cleared in phases</td><td>Developer</td></tr>
              <tr><th scope="row">Commercial pad</th><td>Retail, office or industrial footprint</td><td>General contractor</td></tr>
              <tr><th scope="row">Access and boundaries</th><td>Driveways, access roads, setbacks and property lines</td><td>Owner, surveyor or fence crew</td></tr>
            </tbody>
          </table>
        </div>
      </div>

      <figure class="photo-frame photo-frame--wide reveal-up">
        <?php echo picture('hauling-trailer-loaded-with-cleared-timber-from', 'Dump trailer with its bed raised, the kind used to haul cleared material off a site', '(max-width: 960px) 90vw, 520px'); ?>
        <figcaption>A dump trailer with the bed raised. Cleared material leaves a development site by the trailer load.</figcaption>
      </figure>

      <div class="content-block">
        <h2>How does River City Tree Care work with builders?</h2>
        <p class="answer">River City Tree Care works directly with builders, general contractors and developers, clearing to their specification and inside their schedule. The crew is used to sharing a site with other trades and can stage equipment around active construction. Andrew is the one contact from estimate to handoff.</p>
        <ol class="step-list">
          <li><b>Site assessment</b><span>A walk of the property with you or your contractor, a look at the site plan, and a written estimate.</span></li>
          <li><b>Clear and remove</b><span>Trees, brush and undergrowth in the footprint are cut and removed with equipment matched to the size of the job.</span></li>
          <li><b>Stump grinding</b><span>Every stump in the cleared area is ground 6 to 12 inches below grade.</span></li>
          <li><b>Haul and handoff</b><span>Debris is loaded and hauled, and the site is handed to the next contractor.</span></li>
        </ol>
      </div>

      <div class="content-block">
        <h2>What equipment does a development site need?</h2>
        <p class="answer">A development site needs more than chainsaws. River City Tree Care brings saws for felling, a commercial stump grinder, a brush chipper, skid steers to move material and heavy trailers to haul it, and matches the equipment to the size of the job.</p>
        <p>On larger acreage the crew combines two methods. <a href="/services/forestry-mulching/">Forestry mulching</a> takes care of brush and small trees quickly, and conventional clearing handles the big timber. The rest of what the company does is on the <a href="/services/">services page</a>.</p>
      </div>

      <div class="content-block">
        <h2>Frequently asked questions</h2>
        <?php echo faqList($faqs); ?>
      </div>

      <p class="updated">Last updated: <?php echo date('F Y'); ?></p>
    </article>

    <aside class="sp-rail" aria-label="Land development clearing at a glance">
      <div class="rail-card">
        <h3>At a glance</h3>
        <dl class="rail-facts">
          <div><dt>Project size</dt><dd>One lot to multi-acre</dd></div>
          <div><dt>Stumps</dt><dd>6–12 in. below grade</dd></div>
          <div><dt>Handoff</dt><dd>Ready for grading</dd></div>
          <div><dt>Works with</dt><dd>Builders, GCs, developers</dd></div>
        </dl>
      </div>
      <div class="rail-card rail-card--dark">
        <h3>Talk to Andrew</h3>
        <p>Have the address and the site plan handy if there is one.</p>
        <a class="btn btn-accent btn-block" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> <?php echo e($phone); ?></a>
      </div>
    </aside>
  </div>
</section>

<?php $relatedCurrent = 'land-development'; $relatedPrefer = ['lot-clearing', 'forestry-mulching', 'sawmill-services']; include $_SERVER['DOCUMENT_ROOT'] . '/includes/related-services.php'; ?>
<?php $closingHeading = 'Building on raw land?'; $closingCopy = 'River City Tree Care clears it first. Call Andrew or send the address and the plan.'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/closing-cta.php'; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

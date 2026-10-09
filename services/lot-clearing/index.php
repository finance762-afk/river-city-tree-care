<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage     = 'services';
$pageType        = 'service';
$serviceSlug     = 'lot-clearing';
$pageTitle       = 'Lot Clearing in Chickamauga, GA | River City Tree Care';
$pageDescription = 'Lot clearing in Chickamauga, GA: trees, brush and stumps removed and hauled so the lot is ready for grading. Typically $1,500 to $8,000+. Call (706) 264-6130.';
$canonicalUrl    = $siteUrl . '/services/lot-clearing/';
$pageStyle       = <<<CSS
.sp-clearing .photo-frame--tall { max-width: 420px; }
CSS;

$faqs = [
    ['Do you clear lots for new construction?',
     'Yes. River City Tree Care clears residential and commercial lots for new builds and works alongside the builder or grading contractor. Larger projects are covered under <a href="/services/land-development/">land development clearing</a>.'],
    ['What happens to the trees and brush?',
     'Everything is loaded and hauled off site. If you want firewood, the crew cuts and stacks it. Good logs can be milled into lumber with the <a href="/services/sawmill-services/">portable sawmill</a> instead of leaving in the trailer.'],
    ['Is lot clearing or forestry mulching the better choice?',
     'Clearing is the choice when the ground has to be bare and stump-free for a foundation. <a href="/services/forestry-mulching/">Forestry mulching</a> suits acreage where the mulch can stay on the ground. Andrew will tell you which fits after walking the property.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Services', '/services/'], ['Lot Clearing', '/services/lot-clearing/']]),
    serviceNode('Lot Clearing', 'Residential and commercial lot clearing around Chickamauga, GA: trees, brush and stumps removed and debris hauled so the lot is ready for grading. Typical cost $1,500 to $8,000 or more.', 'Chickamauga, GA', [1500, 8000]),
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero--interior" aria-label="Lot clearing in Chickamauga, GA">
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Services', '/services/'], ['Lot Clearing', null]]); ?>
      <span class="eyebrow">Typically $1,500–$8,000+</span>
      <h1 class="hero-title">Lot Clearing in Chickamauga, GA</h1>
      <p class="hero-answer">River City Tree Care clears residential and commercial lots in Chickamauga, GA for a typical $1,500 to $8,000 or more, depending on acreage and how thick the growth is. Trees, brush and stumps come out and the debris is hauled, so the lot is ready for a grading contractor.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Request an estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> Call <?php echo e($phone); ?></a>
      </div>
    </div>
    <?php $heroFormId = 'hero-lot-clearing'; $heroFormService = 'Lot Clearing'; $heroFormHeading = 'Get a clearing price'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section sp-clearing">
  <div class="container sp-layout">
    <article class="sp-article">

      <div class="content-block">
        <h2>How much does lot clearing cost in Chickamauga, GA?</h2>
        <p class="answer">Lot clearing from River City Tree Care typically costs $1,500 to $8,000 or more. Two things set the number: how many acres are being cleared and how dense the trees and brush are. Access for the equipment and where the debris has to go fill in the rest.</p>
        <p>Every job starts with a free walk of the site. Andrew marks the clearing boundary with you, looks at the tree sizes and species, and gives a written estimate. Acreage is priced from that walk, not from a satellite photo.</p>
      </div>

      <figure class="photo-frame photo-frame--tall reveal-up">
        <?php echo picture('lot-clearing-project-trees-and-brush-removed-fro', 'Cleared and rough-graded red clay lot with a brush pile at the tree line', '(max-width: 960px) 90vw, 420px'); ?>
        <figcaption>A cleared lot: red clay opened up to the tree line, with the last brush pile waiting to be hauled.</figcaption>
      </figure>

      <div class="content-block">
        <h2>What is included when River City Tree Care clears a lot?</h2>
        <p class="answer">A full clearing from River City Tree Care includes tree removal, brush and undergrowth clearing, stump grinding below grade and hauling the debris away. When the crew leaves, the lot is clean and level enough for a grading contractor to start.</p>
        <ol class="step-list">
          <li><b>Site walk</b><span>The clearing boundary is marked and the scope is agreed. You get a written estimate.</span></li>
          <li><b>Trees and brush</b><span>Trees, saplings and undergrowth inside the boundary are cut. Larger trees are felled directionally, or rigged where space is tight.</span></li>
          <li><b>Stumps</b><span>Every stump is ground 6 to 12 inches below grade so the pad is buildable.</span></li>
          <li><b>Haul-away</b><span>Brush, wood and debris are loaded and taken off site.</span></li>
        </ol>
      </div>

      <div class="content-block">
        <h2>Should a lot be cleared or mulched?</h2>
        <p class="answer">Clear the lot when you are building on it, and mulch it when you only need the growth knocked down. A foundation needs bare, stump-free ground. Pasture, fence lines and trails do not, and mulching them usually costs less because nothing is hauled.</p>
        <div class="table-wrap">
          <table class="data-table">
            <caption>How River City Tree Care chooses between the two methods.</caption>
            <thead><tr><th scope="col">Question</th><th scope="col">Lot clearing</th><th scope="col">Forestry mulching</th></tr></thead>
            <tbody>
              <tr><th scope="row">Where does the material go?</th><td>Hauled off site</td><td>Ground into mulch and left in place</td></tr>
              <tr><th scope="row">Stumps</th><td>Ground below grade</td><td>Left at ground level</td></tr>
              <tr><th scope="row">Large trees</th><td>Felled, and the timber can be kept or milled</td><td>Felled first; the mulcher handles brush and small trees</td></tr>
              <tr><th scope="row">Best for</th><td>Home sites, pads, driveways</td><td>Acreage, fence lines, pasture</td></tr>
            </tbody>
          </table>
        </div>
        <p>Read how the single-pass machine works on the <a href="/services/forestry-mulching/">forestry mulching page</a>.</p>
      </div>

      <div class="content-block">
        <h2>What do people clear a lot for?</h2>
        <p class="answer">Most lots River City Tree Care clears are for a new home, with the building envelope, the driveway path and the setbacks opened up together. The rest are commercial pads, fence lines, barns and workshops, access roads through wooded land, and overgrown lots being cleaned up to sell.</p>
        <p>The crew brings the equipment the job calls for: chainsaws, a stump grinder, a chipper, skid steers and hauling trailers. Around Ringgold, where new home sites are going in quickly, the <a href="/service-areas/ringgold-ga/">Ringgold page</a> describes the ground. All eight services are on the <a href="/services/">services page</a>.</p>
      </div>

      <div class="content-block">
        <h2>Frequently asked questions</h2>
        <?php echo faqList($faqs); ?>
      </div>

      <p class="updated">Last updated: <?php echo date('F Y'); ?></p>
    </article>

    <aside class="sp-rail" aria-label="Lot clearing at a glance">
      <div class="rail-card">
        <h3>At a glance</h3>
        <dl class="rail-facts">
          <div><dt>Typical price</dt><dd>$1,500–$8,000+</dd></div>
          <div><dt>Priced by</dt><dd>Acreage and density</dd></div>
          <div><dt>Stumps</dt><dd>Ground below grade</dd></div>
          <div><dt>Debris</dt><dd>Hauled off site</dd></div>
        </dl>
      </div>
      <div class="rail-card rail-card--dark">
        <h3>Talk to Andrew</h3>
        <p>Have the address and a rough acreage ready. He will set a time to walk it.</p>
        <a class="btn btn-accent btn-block" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> <?php echo e($phone); ?></a>
      </div>
    </aside>
  </div>
</section>

<?php $relatedCurrent = 'lot-clearing'; $relatedPrefer = ['forestry-mulching', 'land-development', 'stump-grinding']; include $_SERVER['DOCUMENT_ROOT'] . '/includes/related-services.php'; ?>
<?php $closingHeading = 'Need a lot cleared?'; $closingCopy = 'Start with a walk of the site. River City Tree Care will mark the boundary with you and price it in writing.'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/closing-cta.php'; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

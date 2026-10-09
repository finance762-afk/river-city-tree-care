<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage     = 'services';
$pageType        = 'other';
$pageTitle       = 'Tree Services in Chickamauga, GA | River City Tree Care';
$pageDescription = 'All eight services from River City Tree Care in Chickamauga, GA: trimming, removal, stump grinding, lot clearing, forestry mulching, firewood and sawmill work.';
$canonicalUrl    = $siteUrl . '/services/';
$pageStyle       = <<<CSS
.svc-hub-pick { background: var(--color-surface); }
.svc-hub-pick .section-head { max-width: 64ch; }
CSS;

$schemaNodes = [webPageNode('CollectionPage'), breadcrumbNode([['Services', '/services/']])];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero--interior" aria-label="Tree services in Chickamauga, GA">
  <div class="container">
    <div class="hero-text">
      <?php echo breadcrumbs([['Services', null]]); ?>
      <span class="eyebrow">Eight services, one crew</span>
      <h1 class="hero-title">Tree Services in Chickamauga, GA</h1>
      <p class="hero-answer">River City Tree Care offers eight services from its base in Chickamauga, GA: tree trimming, tree removal, stump grinding, lot clearing, forestry mulching, land development clearing, firewood and portable sawmill work. Owner Andrew Roberson prices and runs every job.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg" data-open-estimate>Request an estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> Call <?php echo e($phone); ?></a>
      </div>
    </div>
  </div>
</section>

<section class="section" aria-label="Tree service and land clearing services">
  <div class="container-wide">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">What We Do</span>
      <h2>Which <span class="text-accent">tree and land services</span> does River City Tree Care provide?</h2>
      <p class="hero-answer">River City Tree Care provides tree care, land clearing and wood products. Tree care is trimming, removal and stump grinding. Land work is lot clearing, forestry mulching and development site prep. The wood from those jobs is sold as firewood or milled into lumber on a portable sawmill.</p>
      <span class="section-subtitle">Pick the job you have</span>
      <p class="prose">Each page gives the typical price where one is published, the steps, and the questions customers ask most.</p>
    </div>
    <div class="services-grid" data-p1-dynamic>
      <?php echo serviceCards($services); ?>
    </div>
  </div>
</section>

<section class="section svc-hub-pick edge-curve-top" aria-labelledby="pick-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Not sure which one?</span>
      <h2 id="pick-h2">Which service fits my problem?</h2>
      <p class="answer">Start from what you are looking at. A single tree is a trimming or removal job, a stump is a grinding job, and anything measured in acres is clearing or mulching. The table matches common situations to the service River City Tree Care would quote.</p>
    </div>
    <div class="table-wrap reveal-up">
      <table class="data-table">
        <caption>Typical ranges are the figures River City Tree Care publishes. Everything is confirmed in writing after a site visit.</caption>
        <thead><tr><th scope="col">What you have</th><th scope="col">Service</th><th scope="col">Typical range</th></tr></thead>
        <tbody>
          <tr><th scope="row">Limbs on the roof or over the drive</th><td><a href="/services/tree-trimming/">Tree trimming</a></td><td class="num">$200–$800 per tree</td></tr>
          <tr><th scope="row">A dead, leaning or storm-damaged tree</th><td><a href="/services/tree-removal/">Tree removal</a></td><td class="num">$400–$2,500+</td></tr>
          <tr><th scope="row">A stump in the yard</th><td><a href="/services/stump-grinding/">Stump grinding</a></td><td class="num">$100–$400 per stump</td></tr>
          <tr><th scope="row">A wooded lot you want to build on</th><td><a href="/services/lot-clearing/">Lot clearing</a></td><td class="num">$1,500–$8,000+</td></tr>
          <tr><th scope="row">Overgrown pasture or a fence row</th><td><a href="/services/forestry-mulching/">Forestry mulching</a></td><td>Quoted by the acre</td></tr>
          <tr><th scope="row">A home site, subdivision or commercial pad</th><td><a href="/services/land-development/">Land development clearing</a></td><td>Quoted from the site plan</td></tr>
          <tr><th scope="row">A cold fireplace</th><td><a href="/services/firewood/">Firewood</a></td><td>Call for the truckload price</td></tr>
          <tr><th scope="row">Good logs on the ground</th><td><a href="/services/sawmill-services/">Sawmill services</a></td><td>Quoted per job</td></tr>
        </tbody>
      </table>
    </div>
    <p class="prose">Work is done within 50 miles of Chickamauga. See the <a href="/service-areas/">towns River City Tree Care serves</a>, or read <a href="/about/">who runs the crew</a>.</p>
  </div>
</section>

<?php $ctaBandId = 'cta-services'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

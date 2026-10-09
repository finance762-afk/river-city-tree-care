<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage     = 'service-areas';
$pageType        = 'other';
$pageTitle       = 'Tree Service Areas | River City Tree Care, Chickamauga GA';
$pageDescription = 'River City Tree Care serves Fort Oglethorpe, Chattanooga, Ringgold, LaFayette and 50 miles around Chickamauga, GA. Check your town or call (706) 264-6130.';
$canonicalUrl    = $siteUrl . '/service-areas/';
$pageStyle       = <<<CSS
.areas-hub .area-grid { grid-template-columns: repeat(2, 1fr); }
.areas-hub .area-card { padding: var(--space-6); }
.areas-else { background: var(--color-surface); }
@media (max-width: 620px) { .areas-hub .area-grid { grid-template-columns: 1fr; } }
CSS;

$schemaNodes = [webPageNode('CollectionPage'), breadcrumbNode([['Service Areas', '/service-areas/']])];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero--interior" aria-label="Tree service areas around Chickamauga, GA">
  <div class="container">
    <div class="hero-text">
      <?php echo breadcrumbs([['Service Areas', null]]); ?>
      <span class="eyebrow">50 miles around Chickamauga</span>
      <h1 class="hero-title">Tree Service Areas Around Chickamauga, GA</h1>
      <p class="hero-answer">River City Tree Care works a 50-mile radius from its shop in Chickamauga, GA. That covers Walker, Catoosa, Hamilton and Whitfield counties on both sides of the state line, with the four towns below getting the most of the crew’s time.</p>
      <div class="hero-actions">
        <a class="btn btn-accent btn-lg" href="#zip-check">Check my town</a>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> Call <?php echo e($phone); ?></a>
      </div>
    </div>
  </div>
</section>

<section class="section areas-hub" aria-labelledby="towns-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Town pages</span>
      <h2 id="towns-h2">Which towns have their own page?</h2>
      <p class="answer">Fort Oglethorpe, Chattanooga, Ringgold and LaFayette each have a page. Every one covers the trees, terrain and typical jobs in that town, because a stump on Lookout Mountain and a stump on a flat Fort Oglethorpe lot are not the same job.</p>
    </div>
    <div class="area-grid" data-p1-dynamic>
      <?php foreach ($serviceAreaPages as $i => $a): ?>
      <a class="area-card reveal-up reveal-delay-<?php echo ($i % 2) + 1; ?>" href="/service-areas/<?php echo $a['slug']; ?>/">
        <span class="county"><?php echo e($a['county']); ?></span>
        <h3><?php echo e($a['name'] . ', ' . $a['state']); ?></h3>
        <p><?php echo e($a['blurb']); ?></p>
        <span class="go">Tree service in <?php echo e($a['name']); ?> →</span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/zip-check.php';
echo p1_zip_check(['heading' => 'Does River City Tree Care serve my town?', 'id' => 'zip-check']);
?>

<section class="section areas-else" aria-labelledby="else-h2">
  <div class="container">
    <div class="content-block reveal-up">
      <span class="eyebrow-label">Everywhere else</span>
      <h2 id="else-h2">Where else does River City Tree Care work?</h2>
      <p class="answer">River City Tree Care covers the full 50-mile radius around Chickamauga. That takes in Rossville, Dalton and Calhoun in Georgia, Lookout Mountain and the rest of Hamilton County in Tennessee, and the communities in Walker, Catoosa and Whitfield counties in between. If the crew can reach your town in about an hour, it is served.</p>
      <ul class="town-chips" aria-label="Other towns served">
        <?php foreach ($serviceAreaTowns as $t): ?>
        <li><?php echo icon('map-pin', 14); ?> <?php echo e($t); ?>, GA</li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="content-block reveal-up">
      <h2>Is the service the same in every area?</h2>
      <p class="answer">Yes. The same crew and the same equipment go to every job, whichever county it is in. That means <a href="/services/tree-removal/">tree removal</a>, <a href="/services/tree-trimming/">tree trimming</a>, <a href="/services/stump-grinding/">stump grinding</a>, forestry mulching, lot clearing and land development, with storm calls answered day and night anywhere in the radius.</p>
      <p>The full list, with typical prices, is on the <a href="/services/">services page</a>.</p>
    </div>
  </div>
</section>

<?php $ctaBandId = 'cta-areas'; $ctaBandHeading = 'Not sure your address is covered?'; $ctaBandCopy = 'Send the town and what you need. River City Tree Care will tell you straight whether the trip makes sense.'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

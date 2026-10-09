<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage     = 'service-areas';
$pageType        = 'city';
$citySlug        = 'chattanooga-tn';
$pageTitle       = 'Tree Service in Chattanooga, TN | River City Tree Care';
$pageDescription = 'Stump grinding and forestry mulching in Chattanooga, TN and Hamilton County from a crew just over the Georgia line. Stumps typically $100 to $400. (706) 264-6130.';
$canonicalUrl    = $siteUrl . '/service-areas/chattanooga-tn/';
$pageStyle       = <<<CSS
.city-chatt .photo-frame--wide { max-width: 480px; }
CSS;

$faqs = [
    ['I need a stump ground in Chattanooga. Who does that at a fair price?',
     'River City Tree Care does, for a typical $100 to $400 per stump. The number depends on diameter, root flare and access. A stump in a fenced backyard in North Chattanooga takes more care than one by the curb in Hixson, and it is priced honestly after Andrew has seen it. Several stumps on one property are discounted.'],
    ['What does forestry mulching cost in Chattanooga, TN?',
     'Forestry mulching is priced by the acre and by how thick the growth is, so River City Tree Care quotes it after a walkthrough. What you get is brush, privet, kudzu and small trees ground into mulch where they stand, with no burn piles, no haul-off and no bare dirt to erode on a Hamilton County hillside.'],
    ['Is a Georgia tree company allowed to work in Chattanooga?',
     'Yes. Chickamauga sits a few miles below the state line, and Chattanooga has always been part of the everyday service area. River City Tree Care, LLC carries general liability and workers’ compensation insurance and can show proof before the job. The 50-mile service radius covers all of Hamilton County, including Ooltewah, Harrison, Soddy-Daisy and Lookout Valley.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Service Areas', '/service-areas/'], ['Chattanooga, TN', '/service-areas/chattanooga-tn/']]),
    serviceNode('Tree Service in Chattanooga, TN', 'Stump grinding, stump removal, forestry mulching, tree removal and trimming for Chattanooga, TN and Hamilton County.', 'Chattanooga, TN'),
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero--interior" aria-label="Tree service in Chattanooga, TN">
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Service Areas', '/service-areas/'], ['Chattanooga, TN', null]]); ?>
      <span class="eyebrow">Hamilton County · Just over the line</span>
      <h1 class="hero-title">Tree Service in Chattanooga, TN</h1>
      <p class="hero-answer">River City Tree Care grinds stumps across Chattanooga and Hamilton County for a typical $100 to $400 per stump, and its forestry mulching crew clears overgrown acreage in a single pass. The company is based in Chickamauga, GA, about twenty minutes south of downtown.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Request an estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> Call <?php echo e($phone); ?></a>
      </div>
    </div>
    <?php $heroFormId = 'hero-chattanooga'; $heroFormService = 'Stump Grinding'; $heroFormHeading = 'Chattanooga estimate'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section city-chatt">
  <div class="container sp-layout">
    <article class="sp-article">

      <div class="content-block">
        <h2>Who grinds stumps in Chattanooga, including on the mountains?</h2>
        <p class="answer">River City Tree Care grinds stumps in Chattanooga with a commercial grinder that handles hillside lots and tight city yards alike. Stumps are taken 6 to 12 inches below grade, the surface roots are followed, and the chips are used as backfill or hauled away.</p>
        <p>Chattanooga yards are full of history and full of stumps. The older streets in St. Elmo, Brainerd, Red Bank and East Ridge were planted with oaks, maples and hackberries that are now reaching the end of their lives, and every removal leaves a stump behind. Up on Lookout Mountain, Signal Mountain and Missionary Ridge, the stumps sit on slopes and in rock, which is where a lot of grinders give up.</p>
        <p>Most Chattanooga stumps are finished in under an hour, and a row of stumps from a cleared fence line is priced as one job. Already have a tree down? <a href="/services/tree-removal/">Tree removal</a> and <a href="/services/stump-grinding/">stump grinding</a> are done on the same visit, so you pay for one trip instead of two.</p>
      </div>

      <div class="content-block">
        <h2>I need a stump ground in Chattanooga. Who does that at a fair price?</h2>
        <p class="answer">River City Tree Care does, for a typical $100 to $400 per stump. The number depends on diameter, root flare and access. A stump in a fenced backyard in North Chattanooga takes more care than one by the curb in Hixson, and it is priced honestly after Andrew has seen it. Several stumps on one property are discounted.</p>
      </div>

      <figure class="photo-frame photo-frame--wide reveal-up">
        <?php echo picture('completed-land-clearing-clean-lot-ready-for-deve', 'Tracked mulching machine on a freshly mulched lane through woods', '(max-width: 960px) 90vw, 480px'); ?>
        <figcaption>The forestry mulcher opening a lane through woods. The chips stay down to hold the slope.</figcaption>
      </figure>

      <div class="content-block">
        <h2>What does forestry mulching cost in Chattanooga, TN?</h2>
        <p class="answer">Forestry mulching is priced by the acre and by how thick the growth is, so River City Tree Care quotes it after a walkthrough. What you get is brush, privet, kudzu and small trees ground into mulch where they stand, with no burn piles, no haul-off and no bare dirt to erode on a Hamilton County hillside.</p>
        <p>Outside the city, Hamilton County land goes to privet, honeysuckle, kudzu and volunteer pines within a few seasons of being left alone. Traditional clearing means a dozer, burn piles and a muddy scar. <a href="/services/forestry-mulching/">Forestry mulching</a> runs a drum mulcher over the growth and leaves a layer of chips that holds the soil on the valley slopes and feeds back into the ground.</p>
        <p>The crew uses it for fence lines along the ridges, hunting trails, pasture reclamation in the Harrison and Apison areas, and view clearing on lots above the river. For a build site that needs grubbing and grading as well, <a href="/services/land-development/">land development clearing</a> takes it from brush to pad. Hardwood trunks from a clearing job do not have to go to the landfill: select logs are milled and the rest become firewood.</p>
      </div>

      <div class="content-block">
        <h2>Is a Georgia tree company allowed to work in Chattanooga?</h2>
        <p class="answer">Yes. Chickamauga sits a few miles below the state line, and Chattanooga has always been part of the everyday service area. River City Tree Care, LLC carries general liability and workers’ compensation insurance and can show proof before the job. The 50-mile service radius covers all of Hamilton County, including Ooltewah, Harrison, Soddy-Daisy and Lookout Valley.</p>
      </div>

      <div class="content-block">
        <h2>How does River City Tree Care work in Chattanooga?</h2>
        <p class="answer">River City Tree Care works a Chattanooga job in three steps. You describe it, Andrew prices it on site, and the crew grinds, clears and cleans in one visit where possible. A stump count and rough sizes speed up the first step, and the written price comes before any work.</p>
        <ol class="step-list">
          <li><b>Describe the job</b><span>Stump count and sizes, a leaning tree, or acreage to open up.</span></li>
          <li><b>Estimate on site</b><span>Slope, access, utilities and what the cleanup should look like are checked, then you get a firm written price. The visit is free.</span></li>
          <li><b>Grind, clear, clean</b><span>Chips are spread or hauled and the site is left ready to use.</span></li>
        </ol>
        <p>Storm calls are answered around the clock. Towns on the Georgia side are listed on the <a href="/service-areas/">service areas page</a>.</p>
      </div>

      <p class="updated">Last updated: <?php echo date('F Y'); ?></p>
    </article>

    <aside class="sp-rail" aria-label="Chattanooga service at a glance">
      <div class="rail-card">
        <h3>Chattanooga at a glance</h3>
        <dl class="rail-facts">
          <div><dt>County</dt><dd>Hamilton, TN</dd></div>
          <div><dt>Stumps</dt><dd>$100–$400 typical</dd></div>
          <div><dt>Mulching</dt><dd>Quoted by the acre</dd></div>
          <div><dt>Base</dt><dd>Chickamauga, GA</dd></div>
        </dl>
      </div>
      <div class="rail-card rail-card--dark">
        <h3>Talk to Andrew</h3>
        <p>Stump count, a leaning tree or acreage: tell him which.</p>
        <a class="btn btn-accent btn-block" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> <?php echo e($phone); ?></a>
      </div>
      <div class="rail-card">
        <h3>Most asked in Chattanooga</h3>
        <ul>
          <li><a href="/services/stump-grinding/">Stump grinding</a></li>
          <li><a href="/services/forestry-mulching/">Forestry mulching</a></li>
          <li><a href="/services/tree-trimming/">Tree trimming</a></li>
        </ul>
      </div>
    </aside>
  </div>
</section>

<?php $closingHeading = 'Just over the line, ready for Chattanooga'; $closingCopy = 'Stump grinding, forestry mulching, tree removal and trimming across Chattanooga and Hamilton County.'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/closing-cta.php'; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

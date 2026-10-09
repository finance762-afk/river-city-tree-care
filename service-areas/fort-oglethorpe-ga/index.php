<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage     = 'service-areas';
$pageType        = 'city';
$citySlug        = 'fort-oglethorpe-ga';
$pageTitle       = 'Tree Service in Fort Oglethorpe, GA | River City Tree Care';
$pageDescription = 'Stump removal, stump grinding and tree trimming in Fort Oglethorpe, GA from a crew a few miles south in Chickamauga. Stumps typically $100–$400. (706) 264-6130.';
$canonicalUrl    = $siteUrl . '/service-areas/fort-oglethorpe-ga/';
$pageStyle       = <<<CSS
.city-fort-o .photo-frame--tall { max-width: 420px; }
CSS;

$faqs = [
    ['How much does stump removal cost in Fort Oglethorpe, GA?',
     'Most Fort Oglethorpe stumps cost $100 to $400 to grind. The price depends on the diameter at ground level, how far the roots flare, and whether the grinder can get to it through a gate or along a fence. Several stumps on one property are discounted, and every estimate is in writing.'],
    ['Who does emergency tree removal in Fort Oglethorpe?',
     'River City Tree Care does, 24 hours a day including weekends and holidays. Fort Oglethorpe is roughly a ten-minute drive from the Chickamauga shop, so when a spring storm drops a pine on a roof in the Lakeview or Mission Ridge area the crew can usually be on site the same day to make it safe and clear the debris.'],
    ['Can you trim trees near power lines in Fort Oglethorpe?',
     'River City Tree Care trims for clearance from rooflines, driveways and the service drop on your property. Limbs in contact with primary utility lines belong to the utility, and Andrew will tell you when they need to be called first.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Service Areas', '/service-areas/'], ['Fort Oglethorpe, GA', '/service-areas/fort-oglethorpe-ga/']]),
    serviceNode('Tree Service in Fort Oglethorpe, GA', 'Stump grinding, stump removal, tree trimming, tree removal and brush cleanup for Fort Oglethorpe, GA and Catoosa County.', 'Fort Oglethorpe, GA'),
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero--interior" aria-label="Tree service in Fort Oglethorpe, GA">
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Service Areas', '/service-areas/'], ['Fort Oglethorpe, GA', null]]); ?>
      <span class="eyebrow">Catoosa County · Minutes from Chickamauga</span>
      <h1 class="hero-title">Tree Service in Fort Oglethorpe, GA</h1>
      <p class="hero-answer">River City Tree Care provides stump grinding, stump removal, tree trimming and emergency tree removal in Fort Oglethorpe, GA. The crew is based a few miles south in Chickamauga, and most Fort Oglethorpe stumps are ground below grade for $100 to $400 each.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Request an estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> Call <?php echo e($phone); ?></a>
      </div>
    </div>
    <?php $heroFormId = 'hero-fort-oglethorpe'; $heroFormService = 'Stump Grinding'; $heroFormHeading = 'Fort Oglethorpe estimate'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section city-fort-o">
  <div class="container sp-layout">
    <article class="sp-article">

      <div class="content-block">
        <h2>Who removes stumps in Fort Oglethorpe?</h2>
        <p class="answer">River City Tree Care removes stumps in Fort Oglethorpe by grinding them 6 to 12 inches below the surrounding soil with a commercial stump grinder. The crew chases the surface roots, then either backfills with the chips or hauls them off. Most residential stumps are done in under an hour.</p>
        <p>Fort Oglethorpe grew up around the old Fort and the battlefield park, and the older neighborhoods off Lafayette Road and Battlefield Parkway still carry the big oaks and pines planted decades ago. When one of those trees comes down, the stump is what people are left staring at. A stump in a Fort Oglethorpe front yard is a mower obstacle, a termite invitation and a reason the lawn never looks finished.</p>
        <p>If you have several stumps from a storm cleanup or an old fence line, they are priced together on one visit. Need the whole tree gone first? The <a href="/services/tree-removal/">tree removal</a> crew handles the takedown and the stump in the same trip, which is cheaper than two separate calls.</p>
      </div>

      <figure class="photo-frame photo-frame--tall reveal-up">
        <?php echo picture('commercial-stump-grinder-removing-stump-below-gr', 'Crew member running a tracked stump grinder on a front lawn', '(max-width: 960px) 90vw, 420px'); ?>
        <figcaption>The tracked stump grinder at work on a front lawn.</figcaption>
      </figure>

      <div class="content-block">
        <h2>How much does stump removal cost in Fort Oglethorpe, GA?</h2>
        <p class="answer">Most Fort Oglethorpe stumps cost $100 to $400 to grind. The price depends on the diameter at ground level, how far the roots flare, and whether the grinder can get to it through a gate or along a fence. Several stumps on one property are discounted, and every estimate is in writing.</p>
        <p>The lots around Fort Oglethorpe tend to be flat to gently rolling, which makes grinding straightforward and lets the crew bring the grinder right to the stump in most yards. More detail is on the <a href="/services/stump-grinding/">stump grinding page</a>.</p>
      </div>

      <div class="content-block">
        <h2>Who does emergency tree removal in Fort Oglethorpe?</h2>
        <p class="answer">River City Tree Care does, 24 hours a day including weekends and holidays. Fort Oglethorpe is roughly a ten-minute drive from the Chickamauga shop, so when a spring storm drops a pine on a roof in the Lakeview or Mission Ridge area the crew can usually be on site the same day to make it safe and clear the debris.</p>
      </div>

      <div class="content-block">
        <h2>What do Fort Oglethorpe homeowners usually need?</h2>
        <p class="answer">Fort Oglethorpe homeowners mostly call about pines and old stumps. Mature oaks, hickories and loblolly pines are common here, and the pines in particular shed limbs and snap in wind. A lot of calls are a storm limb on a shed, a pine leaning toward a neighbor, or a line of old stumps where a privacy screen used to be.</p>
        <p>Sweetgum and silver maple stumps are the ones people regret leaving: both resprout from the stump and roots for years after the tree is cut. Grinding below grade stops that.</p>
        <p>The crew also does crown thinning, deadwood removal and clearance <a href="/services/tree-trimming/">tree trimming</a> over rooflines and driveways, plus brush and overgrowth removal on lots that have been let go. For properties on the edge of town with acreage to open up, <a href="/services/forestry-mulching/">forestry mulching</a> clears brush and small trees without hauling.</p>
      </div>

      <div class="content-block">
        <h2>How does a Fort Oglethorpe job work?</h2>
        <p class="answer">A Fort Oglethorpe job with River City Tree Care works in three steps: a call, a walkthrough of the yard, and the work itself with cleanup. For stumps, a count and rough widths over the phone is often enough for Andrew to quote before he visits.</p>
        <ol class="step-list">
          <li><b>Call or send the form</b><span>Give the address and what you need.</span></li>
          <li><b>On-site walkthrough</b><span>Access, utilities and irrigation are checked, the work is measured and you get a firm written price. The visit is free.</span></li>
          <li><b>Work done and cleaned up</b><span>Stumps ground, trees trimmed or removed, chips spread or hauled, and the yard left ready to use.</span></li>
        </ol>
        <p>Other towns the crew covers are on the <a href="/service-areas/">service areas page</a>.</p>
      </div>

      <div class="content-block">
        <h2>Can you trim trees near power lines in Fort Oglethorpe?</h2>
        <p class="answer">River City Tree Care trims for clearance from rooflines, driveways and the service drop on your property. Limbs in contact with primary utility lines belong to the utility, and Andrew will tell you when they need to be called first.</p>
      </div>

      <p class="updated">Last updated: <?php echo date('F Y'); ?></p>
    </article>

    <aside class="sp-rail" aria-label="Fort Oglethorpe service at a glance">
      <div class="rail-card">
        <h3>Fort Oglethorpe at a glance</h3>
        <dl class="rail-facts">
          <div><dt>County</dt><dd>Catoosa</dd></div>
          <div><dt>Stumps</dt><dd>$100–$400 typical</dd></div>
          <div><dt>Depth</dt><dd>6–12 in. below grade</dd></div>
          <div><dt>Crew</dt><dd>Licensed and insured</dd></div>
        </dl>
      </div>
      <div class="rail-card rail-card--dark">
        <h3>Talk to Andrew</h3>
        <p>A stump count and rough widths is enough to start.</p>
        <a class="btn btn-accent btn-block" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> <?php echo e($phone); ?></a>
      </div>
      <div class="rail-card">
        <h3>Most asked in Fort Oglethorpe</h3>
        <ul>
          <li><a href="/services/stump-grinding/">Stump grinding</a></li>
          <li><a href="/services/tree-removal/">Tree removal</a></li>
          <li><a href="/services/tree-trimming/">Tree trimming</a></li>
        </ul>
      </div>
    </aside>
  </div>
</section>

<?php $closingHeading = 'Fort Oglethorpe stump or tree problem?'; $closingCopy = 'River City Tree Care is based in Chickamauga, minutes away. Call or send the details.'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/closing-cta.php'; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

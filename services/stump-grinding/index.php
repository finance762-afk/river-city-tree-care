<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage     = 'services';
$pageType        = 'service';
$serviceSlug     = 'stump-grinding';
$pageTitle       = 'Stump Grinding in Chickamauga, GA | River City Tree Care';
$pageDescription = 'Stump grinding in Chickamauga, GA, typically $100 to $400 per stump, ground 6 to 12 inches below grade, most in under an hour. Call (706) 264-6130.';
$canonicalUrl    = $siteUrl . '/services/stump-grinding/';
$ogImage         = 'commercial-stump-grinder-removing-stump-below-gr-og.jpg';
$pageStyle       = <<<CSS
.sp-stump .photo-frame--tall { max-width: 420px; }
CSS;

$faqs = [
    ['Is there a discount for several stumps?',
     'Yes. Stumps on one property are priced together on one visit, and the per-stump figure comes down when there is a row of them from a storm cleanup, an old fence line or a <a href="/services/lot-clearing/">cleared lot</a>.'],
    ['Can I plant over a ground stump?',
     'Yes. Once the stump is ground below grade and the hole is filled with topsoil, grass, shrubs or a new tree can go in the same spot. Give the fill a few weeks to settle before you seed.'],
    ['Do you remove the tree and the stump in one trip?',
     'Yes. Stump grinding can be added to any <a href="/services/tree-removal/">tree removal</a>, so the takedown and the stump are handled on the same visit.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Services', '/services/'], ['Stump Grinding', '/services/stump-grinding/']]),
    serviceNode('Stump Grinding', 'Stump grinding 6 to 12 inches below grade for homes and lots around Chickamauga, GA. Typical cost $100 to $400 per stump.', 'Chickamauga, GA', [100, 400]),
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero--interior" aria-label="Stump grinding in Chickamauga, GA">
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Services', '/services/'], ['Stump Grinding', null]]); ?>
      <span class="eyebrow">Typically $100–$400 per stump</span>
      <h1 class="hero-title">Stump Grinding in Chickamauga, GA</h1>
      <p class="hero-answer">River City Tree Care grinds stumps in Chickamauga, GA for a typical $100 to $400 per stump. The stump is taken 6 to 12 inches below the surrounding soil with a commercial grinder, and most residential stumps are finished in under an hour.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Request an estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> Call <?php echo e($phone); ?></a>
      </div>
    </div>
    <?php $heroFormId = 'hero-stump-grinding'; $heroFormService = 'Stump Grinding'; $heroFormHeading = 'Get a stump price'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section sp-stump">
  <div class="container sp-layout">
    <article class="sp-article">

      <div class="content-block">
        <h2>How much does stump grinding cost in Chickamauga, GA?</h2>
        <p class="answer">Most stumps cost $100 to $400 to grind. River City Tree Care prices each one on its diameter at ground level, how far the root flare spreads and whether the grinder can reach it. A stump against a fence or behind a narrow gate takes more care than one in an open yard.</p>
        <p>Andrew measures the stump and gives the price in writing before the grinder comes off the trailer. The estimate visit is free. Stumps left from one of the company’s own removals are usually quoted with the tree, which is cheaper than two separate trips.</p>
      </div>

      <figure class="photo-frame photo-frame--tall reveal-up">
        <?php echo picture('commercial-stump-grinder-removing-stump-below-gr', 'Crew member in a River City Tree Care shirt running a tracked stump grinder on a front lawn', '(max-width: 960px) 90vw, 420px'); ?>
        <figcaption>A tracked stump grinder at work on a subdivision front lawn.</figcaption>
      </figure>

      <div class="content-block">
        <h2>How long does it take to grind a stump?</h2>
        <p class="answer">A residential stump under 24 inches across takes 30 minutes to an hour. Bigger stumps and stumps with long surface roots take longer, and River City Tree Care gives a time along with the price when Andrew looks at the job.</p>
        <div class="table-wrap">
          <table class="data-table">
            <caption>Typical grinding times from River City Tree Care. Rocky ground and tight access add time.</caption>
            <thead><tr><th scope="col">Stump</th><th scope="col">Typical time</th><th scope="col">What to expect</th></tr></thead>
            <tbody>
              <tr><th scope="row">Under 24 inches</th><td class="num">30–60 minutes</td><td>One pass plus the surface roots near the trunk</td></tr>
              <tr><th scope="row">30 inches and up</th><td class="num">1–2 hours</td><td>Wide root flare and lateral roots are chased out</td></tr>
              <tr><th scope="row">Several stumps</th><td class="num">Quoted per job</td><td>Priced together and done on one visit</td></tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="content-block">
        <h2>How does River City Tree Care grind a stump?</h2>
        <p class="answer">River City Tree Care grinds a stump in three steps. The crew measures it and checks the ground, grinds it 6 to 12 inches below grade, then fills the hole and cleans up. For most residential stumps the whole job is one visit of under an hour.</p>
        <ol class="step-list">
          <li><b>Measure and check</b><span>The stump is measured and the area is checked for buried utilities and irrigation lines before any cutting.</span></li>
          <li><b>Grind below grade</b><span>The grinder chips the stump 6 to 12 inches below the surrounding soil and takes the shallow roots with it.</span></li>
          <li><b>Fill and clean</b><span>The hole is filled with the chips or with clean topsoil. Extra chips are spread as mulch or hauled away: your call.</span></li>
        </ol>
      </div>

      <div class="content-block">
        <h2>Why grind a stump instead of leaving it?</h2>
        <p class="answer">A stump left in the yard is a tripping hazard, a home for termites and carpenter ants, and something to mow around for years. Some species also keep growing: sweetgum and silver maple stumps send up shoots from the roots long after the tree is gone.</p>
        <p>Grinding below grade ends the resprouting and gives you three choices for the spot. You can pull most of the chips, add topsoil and seed it. You can use the chips as the base of a flower bed. Or you can build over it, because a patio, driveway or shed pad no longer needs the stump dug out first.</p>
        <p>Outside Chickamauga, the same service is covered on the town pages for <a href="/service-areas/fort-oglethorpe-ga/">stump removal in Fort Oglethorpe</a> and <a href="/service-areas/chattanooga-tn/">stump grinding in Chattanooga</a>, where hillside lots change the job. All eight services are on the <a href="/services/">services page</a>.</p>
      </div>

      <div class="content-block">
        <h2>Frequently asked questions</h2>
        <?php echo faqList($faqs); ?>
      </div>

      <p class="updated">Last updated: <?php echo date('F Y'); ?></p>
    </article>

    <aside class="sp-rail" aria-label="Stump grinding at a glance">
      <div class="rail-card">
        <h3>At a glance</h3>
        <dl class="rail-facts">
          <div><dt>Typical price</dt><dd>$100–$400 per stump</dd></div>
          <div><dt>Depth</dt><dd>6–12 in. below grade</dd></div>
          <div><dt>Most stumps</dt><dd>Under an hour</dd></div>
          <div><dt>Chips</dt><dd>Left as mulch or hauled</dd></div>
        </dl>
      </div>
      <div class="rail-card rail-card--dark">
        <h3>Talk to Andrew</h3>
        <p>Tell him how many stumps and roughly how wide. He can often give a ballpark on the phone.</p>
        <a class="btn btn-accent btn-block" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> <?php echo e($phone); ?></a>
      </div>
    </aside>
  </div>
</section>

<?php $relatedCurrent = 'stump-grinding'; $relatedPrefer = ['tree-removal', 'lot-clearing', 'tree-trimming']; include $_SERVER['DOCUMENT_ROOT'] . '/includes/related-services.php'; ?>
<?php $closingHeading = 'Got a stump in the way?'; $closingCopy = 'Send a count and rough sizes, or call. River City Tree Care will price it and grind it below grade.'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/closing-cta.php'; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

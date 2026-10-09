<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage     = 'services';
$pageType        = 'service';
$serviceSlug     = 'tree-trimming';
$pageTitle       = 'Tree Trimming in Chickamauga, GA | River City Tree Care';
$pageDescription = 'Tree trimming and pruning in Chickamauga, GA: crown thinning, deadwood removal and clearance cuts, typically $200 to $800 per tree. Call (706) 264-6130.';
$canonicalUrl    = $siteUrl . '/services/tree-trimming/';
$pageStyle       = <<<CSS
.sp-trim .photo-frame--tall { max-width: 420px; }
CSS;

$faqs = [
    ['Do you trim trees near power lines?',
     'River City Tree Care trims for clearance from rooflines, driveways and the service drop on your property. Limbs touching the primary utility lines belong to the utility, and Andrew will tell you when they need to be called first.'],
    ['Do you top trees?',
     'No. Cuts are made at the branch collar so the tree can seal over. Topping leaves stubs that rot and regrow weakly, so heavy limbs are reduced back to a side branch instead.'],
    ['What happens to the limbs?',
     'They are chipped on site or hauled off, and the yard is raked before the crew leaves.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Services', '/services/'], ['Tree Trimming', '/services/tree-trimming/']]),
    serviceNode('Tree Trimming', 'Tree trimming and pruning around Chickamauga, GA: crown thinning, deadwood removal and clearance cuts over roofs and driveways. Typical cost $200 to $800 per tree.', 'Chickamauga, GA', [200, 800]),
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero--interior" aria-label="Tree trimming in Chickamauga, GA">
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Services', '/services/'], ['Tree Trimming', null]]); ?>
      <span class="eyebrow">Typically $200–$800 per tree</span>
      <h1 class="hero-title">Tree Trimming in Chickamauga, GA</h1>
      <p class="hero-answer">River City Tree Care trims and prunes trees in Chickamauga, GA for a typical $200 to $800 per tree. The crew thins crowns, takes out deadwood and lifts limbs off roofs and driveways, working all year, and chips the cuttings before leaving.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Request an estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> Call <?php echo e($phone); ?></a>
      </div>
    </div>
    <?php $heroFormId = 'hero-tree-trimming'; $heroFormService = 'Tree Trimming'; $heroFormHeading = 'Get a trimming price'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section sp-trim">
  <div class="container sp-layout">
    <article class="sp-article">

      <div class="content-block">
        <h2>How much does tree trimming cost in Chickamauga, GA?</h2>
        <p class="answer">Most residential trimming from River City Tree Care runs $200 to $800 per tree. The price follows the size of the tree and how hard the canopy is to reach: height, the number of limbs coming off and how close they hang to a roof or a line.</p>
        <p>Andrew walks the yard with you, looks at each tree and writes down a firm price before any cutting. That walkthrough is free. Several trees trimmed on one visit usually cost less per tree than one at a time.</p>
      </div>

      <div class="content-block">
        <h2>When is the best time to trim trees in North Georgia?</h2>
        <p class="answer">Late winter into early spring, while the tree is dormant, is the best time for structural pruning in North Georgia. The branch pattern is visible without leaves and the tree recovers quickly when growth starts. Dead and hazardous limbs should come off as soon as you notice them.</p>
        <div class="table-wrap">
          <table class="data-table">
            <caption>How River City Tree Care times trimming work around Chickamauga.</caption>
            <thead><tr><th scope="col">Type of cut</th><th scope="col">Best time</th><th scope="col">Reason</th></tr></thead>
            <tbody>
              <tr><th scope="row">Structural pruning, crown thinning</th><td>Late winter to early spring</td><td>Tree is dormant and the branch structure is easy to read</td></tr>
              <tr><th scope="row">Deadwood removal</th><td>Any month</td><td>Dead limbs do not wait for a season to fall</td></tr>
              <tr><th scope="row">Limbs on a roof, drive or line</th><td>As soon as you see it</td><td>The damage gets worse with every wind</td></tr>
            </tbody>
          </table>
        </div>
      </div>

      <figure class="photo-frame photo-frame--tall reveal-up">
        <?php echo picture('wood-chipper-processing-branches-during-tree-tri', 'Red wood chipper blowing chips into the back of a chip truck on a gravel drive', '(max-width: 960px) 90vw, 420px'); ?>
        <figcaption>The chipper and chip truck on a trimming job. Limbs are chipped on site.</figcaption>
      </figure>

      <div class="content-block">
        <h2>What does River City Tree Care trim?</h2>
        <p class="answer">River City Tree Care trims whatever is causing the problem. That is usually dead or broken limbs, branches on the roof, limbs over a driveway and crowns too thick to let wind through. Limbs rubbing a roof wear through shingles, and deadwood in a canopy comes down in the first strong storm.</p>
        <ul class="check-list">
          <li><?php echo icon('check', 20); ?><span>Dead, diseased and broken branches</span></li>
          <li><?php echo icon('check', 20); ?><span>Limbs over rooflines and gutters</span></li>
          <li><?php echo icon('check', 20); ?><span>Branches over driveways and walkways</span></li>
          <li><?php echo icon('check', 20); ?><span>Crown thinning for light and airflow</span></li>
          <li><?php echo icon('check', 20); ?><span>Weak attachments taken out ahead of storm season</span></li>
        </ul>
      </div>

      <div class="content-block">
        <h2>How does a trimming job work?</h2>
        <p class="answer">A trimming job with River City Tree Care runs in four steps: walkthrough, plan, trim and cleanup. Andrew prices each tree before any cutting, the crew stages its climbing gear and drop zones, and every limb that comes off is chipped or hauled before the crew leaves.</p>
        <ol class="step-list">
          <li><b>Walkthrough</b><span>Each tree is looked at with you, hazards and goals are noted, and you get a firm price.</span></li>
          <li><b>Plan and stage</b><span>The limbs to cut are picked out, drop zones are mapped and climbing gear is set up.</span></li>
          <li><b>Trim and prune</b><span>Deadwood comes out, clearance cuts are made and the canopy is shaped.</span></li>
          <li><b>Cleanup</b><span>Everything is chipped or hauled and the ground is raked.</span></li>
        </ol>
        <p>If the inspection shows a tree is past saving, the same crew handles <a href="/services/tree-removal/">tree removal</a>. Pruning questions specific to <a href="/service-areas/ringgold-ga/">Ringgold</a> and <a href="/service-areas/lafayette-ga/">LaFayette</a> are answered on those town pages, and the full list of work is on the <a href="/services/">services page</a>.</p>
      </div>

      <div class="content-block">
        <h2>Frequently asked questions</h2>
        <?php echo faqList($faqs); ?>
      </div>

      <p class="updated">Last updated: <?php echo date('F Y'); ?></p>
    </article>

    <aside class="sp-rail" aria-label="Tree trimming at a glance">
      <div class="rail-card">
        <h3>At a glance</h3>
        <dl class="rail-facts">
          <div><dt>Typical price</dt><dd>$200–$800 per tree</dd></div>
          <div><dt>Best season</dt><dd>Late winter</dd></div>
          <div><dt>Deadwood</dt><dd>Any time of year</dd></div>
          <div><dt>Cuttings</dt><dd>Chipped on site</dd></div>
        </dl>
      </div>
      <div class="rail-card rail-card--dark">
        <h3>Talk to Andrew</h3>
        <p>Tell him which trees and what they are hanging over.</p>
        <a class="btn btn-accent btn-block" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> <?php echo e($phone); ?></a>
      </div>
    </aside>
  </div>
</section>

<?php $relatedCurrent = 'tree-trimming'; $relatedPrefer = ['tree-removal', 'stump-grinding', 'firewood']; include $_SERVER['DOCUMENT_ROOT'] . '/includes/related-services.php'; ?>
<?php $closingHeading = 'Branches getting out of hand?'; $closingCopy = 'Call River City Tree Care or send the details. Andrew will walk the yard and price each tree.'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/closing-cta.php'; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

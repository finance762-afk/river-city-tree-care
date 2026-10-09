<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage     = 'services';
$pageType        = 'service';
$serviceSlug     = 'tree-removal';
$pageTitle       = 'Tree Removal in Chickamauga, GA | River City Tree Care';
$pageDescription = 'Tree removal in Chickamauga, GA from an owner-run crew: typically $400 to $2,500+, cleanup included, storm calls answered day and night. (706) 264-6130.';
$canonicalUrl    = $siteUrl . '/services/tree-removal/';
$pageStyle       = <<<CSS
.sp-removal .ba-slider { margin-top: var(--space-2); }
.sp-removal .species { columns: 2; column-gap: var(--space-8); }
@media (max-width: 560px) { .sp-removal .species { columns: 1; } }
CSS;

$faqs = [
    ['Do you remove the stump too?',
     'Stump grinding is an add-on to any removal and most customers take it. The stump is ground 6 to 12 inches below grade so the spot can be filled and seeded. It typically adds $100 to $400 per stump: see <a href="/services/stump-grinding/">stump grinding</a>.'],
    ['Can I keep the wood?',
     'Yes. Tell the crew before they start and the trunk is cut to firewood length and stacked where you want it. Straight hardwood logs 12 inches and wider can be milled into boards with the <a href="/services/sawmill-services/">portable sawmill</a>.'],
    ['What if a tree falls in the middle of the night?',
     'Call (706) 264-6130. River City Tree Care answers storm calls at any hour, holidays included, and a tree on a house, a driveway or a road goes to the front of the line.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Services', '/services/'], ['Tree Removal', '/services/tree-removal/']]),
    serviceNode('Tree Removal', 'Removal of dead, leaning and storm-damaged trees around Chickamauga, GA, with rigging in tight yards and debris haul-away. Typical cost $400 to $2,500 or more.', 'Chickamauga, GA', [400, 2500]),
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero--interior" aria-label="Tree removal in Chickamauga, GA">
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Services', '/services/'], ['Tree Removal', null]]); ?>
      <span class="eyebrow">Typically $400–$2,500+</span>
      <h1 class="hero-title">Tree Removal in Chickamauga, GA</h1>
      <p class="hero-answer">River City Tree Care removes dead, leaning and storm-damaged trees in Chickamauga, GA for a typical $400 to $2,500 or more, depending on size and what the tree is standing next to. Owner Andrew Roberson runs the crew, and the wood and brush leave with them.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Request an estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> Call <?php echo e($phone); ?></a>
      </div>
    </div>
    <?php $heroFormId = 'hero-tree-removal'; $heroFormService = 'Tree Removal'; $heroFormHeading = 'Get a removal price'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section sp-removal">
  <div class="container sp-layout">
    <article class="sp-article">

      <div class="content-block">
        <h2>How much does tree removal cost in Chickamauga, GA?</h2>
        <p class="answer">Tree removal from River City Tree Care typically runs $400 to $2,500 or more. Small trees are usually $400 to $900. Large hardwoods close to a house, a fence or a power line run $1,500 to $2,500 and up, because every piece has to be roped down instead of dropped.</p>
        <div class="table-wrap">
          <table class="data-table">
            <caption>Typical removal ranges published by River City Tree Care. The written estimate after a site visit is the real number.</caption>
            <thead><tr><th scope="col">Job</th><th scope="col">Typical range</th><th scope="col">Why</th></tr></thead>
            <tbody>
              <tr><th scope="row">Small tree, open yard</th><td class="num">$400–$900</td><td>Can often be felled in one direction and chipped on the spot</td></tr>
              <tr><th scope="row">Large hardwood near a structure</th><td class="num">$1,500–$2,500+</td><td>Climbed and lowered in sections with rigging</td></tr>
              <tr><th scope="row">Stump, per stump</th><td class="num">$100–$400 extra</td><td>Ground 6 to 12 inches below grade if you want it gone</td></tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="content-block">
        <h2>How does River City Tree Care take a tree down safely?</h2>
        <p class="answer">River City Tree Care takes a tree down in four steps: assess it, protect what is under it, bring it down, and clean up. Where there is room the tree is felled in one direction. Where there is not, a climber sections it from the top with ropes.</p>
        <ol class="step-list">
          <li><b>Assessment</b><span>Andrew checks the lean, the condition of the wood and the hazards around it, then gives a written price. The visit is free.</span></li>
          <li><b>Safety setup</b><span>Drop zones are cleared, rigging lines are set, and nearby structures and landscaping are protected.</span></li>
          <li><b>Removal</b><span>The tree is sectioned from the top down with climbing gear and rigging, or felled directionally where space allows.</span></li>
          <li><b>Cleanup and haul</b><span>Limbs are chipped, trunk sections are loaded and hauled, and the ground is raked.</span></li>
        </ol>
      </div>

      <div class="content-block">
        <h2>What does a tight removal look like before and after?</h2>
        <p class="answer">A tight removal ends with the tree gone and everything around it untouched. In this job the tree stood between a metal carport and a chain-link fence. Afterwards the carport and fence are still standing, and what is left is a flush stump ready for the grinder.</p>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/before-after.php';
        echo p1_before_after(
            'tree-removal-job-site-overgrown-trees-on-residen', 'property-after-tree-removal-clean-lot-with-clear',
            'Mature tree leaning beside a metal carport and chain-link fence before removal',
            'Same carport and fence after the tree was removed, with a flush-cut stump',
            ['caption' => 'Before and after a residential removal by River City Tree Care. Drag the handle to compare.', 'id' => 'ba-removal']
        ); ?>
      </div>

      <div class="content-block">
        <h2>When does a tree need to come down instead of being trimmed?</h2>
        <p class="answer">A tree needs to come down when trimming cannot make it safe. That means dead trees, trunks split by a storm, hardwoods with failing roots that lean toward a house, and trees standing where a building or driveway is about to go.</p>
        <p>These are the trees the crew removes most often across Walker and Catoosa counties, and each one behaves differently on the rope:</p>
        <ul class="species">
          <li><strong>Oaks:</strong> heavy, dense canopies that need careful sectioning.</li>
          <li><strong>Pines:</strong> tall and prone to snapping in storms; the most common emergency call.</li>
          <li><strong>Maples and sweetgums:</strong> fast growers that crowd roofs and lines.</li>
          <li><strong>Hickories:</strong> strong wood and deep roots, and good firewood.</li>
          <li><strong>Dead standing timber:</strong> unpredictable, handled with extra caution.</li>
          <li><strong>Storm-damaged trees:</strong> hung up in other trees or resting on a structure.</li>
        </ul>
        <p>If the tree can be saved, Andrew will say so and quote <a href="/services/tree-trimming/">tree trimming</a> instead. When several trees are coming out for a build, <a href="/services/lot-clearing/">lot clearing</a> is priced as one job. The <a href="/services/">services page</a> lists everything the crew does.</p>
      </div>

      <div class="content-block">
        <h2>Frequently asked questions</h2>
        <?php echo faqList($faqs); ?>
      </div>

      <p class="updated">Last updated: <?php echo date('F Y'); ?></p>
    </article>

    <aside class="sp-rail" aria-label="Tree removal at a glance">
      <div class="rail-card">
        <h3>At a glance</h3>
        <dl class="rail-facts">
          <div><dt>Typical price</dt><dd>$400–$2,500+</dd></div>
          <div><dt>Small trees</dt><dd>$400–$900</dd></div>
          <div><dt>Cleanup</dt><dd>Included</dd></div>
          <div><dt>Stump</dt><dd>Optional add-on</dd></div>
        </dl>
      </div>
      <div class="rail-card rail-card--dark">
        <h3>Tree on the house?</h3>
        <p>Do not wait on a form. Call and tell Andrew what it is resting on.</p>
        <a class="btn btn-accent btn-block" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> <?php echo e($phone); ?></a>
      </div>
    </aside>
  </div>
</section>

<?php $relatedCurrent = 'tree-removal'; $relatedPrefer = ['stump-grinding', 'tree-trimming', 'lot-clearing']; include $_SERVER['DOCUMENT_ROOT'] . '/includes/related-services.php'; ?>
<?php $closingHeading = 'Dead tree or storm damage?'; $closingCopy = 'Call River City Tree Care or send the details. Andrew will look at it and put the price in writing.'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/closing-cta.php'; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage     = 'services';
$pageType        = 'service';
$serviceSlug     = 'sawmill-services';
$pageTitle       = 'Sawmill Services in Chickamauga, GA | River City Tree Care';
$pageDescription = 'Portable sawmill services in Chickamauga, GA: your logs milled on site into slabs, beams and boards. Logs 12 inches and wider, by appointment. (706) 264-6130.';
$canonicalUrl    = $siteUrl . '/services/sawmill-services/';
$pageStyle       = <<<CSS
.sp-sawmill .photo-frame--wide { max-width: 560px; }
CSS;

$faqs = [
    ['Can you mill a tree you just took down?',
     'Yes. If the trunk is 12 inches or more across and sound, it can be milled during the removal visit or on a follow-up trip. This is popular with customers taking out a large oak who want to keep the wood. See <a href="/services/tree-removal/">tree removal</a>.'],
    ['How long does fresh-milled lumber need to dry?',
     'As a rule of thumb, air-drying takes about a year per inch of thickness: roughly 12 months for a 1-inch oak board and 24 for a 2-inch slab. Stack it with spacers under cover where air can move through.'],
    ['What does milling cost?',
     'It depends on the logs and the cuts, so River City Tree Care quotes each job. Call (706) 264-6130 with the species, diameters and lengths.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Services', '/services/'], ['Sawmill Services', '/services/sawmill-services/']]),
    serviceNode('Portable Sawmill Services', 'Portable sawmill services in Chickamauga, GA: logs milled on site into dimensional lumber, live-edge slabs and beams. Minimum log size 12 inches in diameter and 6 feet long.', 'Chickamauga, GA'),
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero--interior" aria-label="Sawmill services in Chickamauga, GA">
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Services', '/services/'], ['Sawmill Services', null]]); ?>
      <span class="eyebrow">Portable mill · By appointment</span>
      <h1 class="hero-title">Sawmill Services in Chickamauga, GA</h1>
      <p class="hero-answer">River City Tree Care runs a portable sawmill in Chickamauga, GA that turns your logs into lumber on your own property: live-edge slabs, beams and dimensional boards. Logs need to be at least 12 inches across and 6 feet long. Milling is a specialty service booked by appointment.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Ask about milling</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> Call <?php echo e($phone); ?></a>
      </div>
    </div>
    <?php $heroFormId = 'hero-sawmill'; $heroFormService = 'Sawmill Services'; $heroFormHeading = 'Ask about milling'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section sp-sawmill">
  <div class="container sp-layout">
    <article class="sp-article">

      <div class="content-block">
        <h2>What can a portable sawmill make from my logs?</h2>
        <p class="answer">A portable sawmill can turn a sound log into dimensional lumber, live-edge slabs, beams or boards cut to a custom thickness. River City Tree Care sets the mill up on your property, so the log does not have to be trucked anywhere first.</p>
        <div class="table-wrap">
          <table class="data-table">
            <caption>What River City Tree Care mills, and what customers use it for.</caption>
            <thead><tr><th scope="col">Cut</th><th scope="col">Examples</th><th scope="col">Typical use</th></tr></thead>
            <tbody>
              <tr><th scope="row">Dimensional lumber</th><td>2x4, 2x6, 4x4, 6x6</td><td>Framing, barns, sheds</td></tr>
              <tr><th scope="row">Live-edge slabs</th><td>Natural-edge boards</td><td>Tables, mantels, shelving, countertops</td></tr>
              <tr><th scope="row">Beams</th><td>Structural or decorative</td><td>Timber framing, porches</td></tr>
              <tr><th scope="row">Rough-cut boards</th><td>Custom thickness</td><td>Fencing, garden borders</td></tr>
            </tbody>
          </table>
        </div>
      </div>

      <figure class="photo-frame photo-frame--wide reveal-up">
        <?php echo picture('river-city-tree-care-crew-at-work-on-active-job', 'Portable band sawmill set up in a wooded yard beside a row of cut logs', '(max-width: 960px) 90vw, 560px'); ?>
        <figcaption>The portable band mill set up beside a row of logs, ready to cut.</figcaption>
      </figure>

      <div class="content-block">
        <h2>How big does a log have to be to mill?</h2>
        <p class="answer">A log should be at least 12 inches in diameter and 6 feet long to mill into usable lumber. Logs 18 inches and wider give the widest boards. The log also needs to be reasonably straight and free of major rot.</p>
        <p>Metal matters as much as size. A nail, a staple or a strand of old fence wire grown into the trunk will damage the blade, so yard trees and fence-row trees get a careful look first. If you are not sure a tree is worth milling, send Andrew a photo or call.</p>
      </div>

      <div class="content-block">
        <h2>Which North Georgia trees are worth milling?</h2>
        <p class="answer">Oak, hickory, poplar and pine are the trees around Chickamauga worth milling. White oak is the one people most often want kept, because it resists rot outdoors. Whatever the species, the trunk has to be sound, reasonably straight and at least 12 inches across.</p>
        <ul class="check-list">
          <li><?php echo icon('check', 20); ?><span><strong>Red and white oak:</strong> dense, strong and the most requested.</span></li>
          <li><?php echo icon('check', 20); ?><span><strong>Hickory:</strong> very hard and heavy; used for flooring, tool handles and rustic furniture.</span></li>
          <li><?php echo icon('check', 20); ?><span><strong>Poplar:</strong> a softer hardwood that works easily; good for trim and shelving.</span></li>
          <li><?php echo icon('check', 20); ?><span><strong>Pine:</strong> mills easily; used for framing and barn lumber.</span></li>
        </ul>
        <p>Logs that are too small or too crooked for the mill do not go to waste. They are split and sold as <a href="/services/firewood/">firewood</a>.</p>
      </div>

      <div class="content-block">
        <h2>How does on-site milling work?</h2>
        <p class="answer">On-site milling with River City Tree Care runs in four steps: assess the logs, plan the cuts, mill, then stack the boards to dry. It is often added to a clearing job, when the logs are already on the ground.</p>
        <ol class="step-list">
          <li><b>Log assessment</b><span>Species, diameter, length and condition are checked to see what each log will yield.</span></li>
          <li><b>Milling plan</b><span>You say what you need (slabs, beams, boards) and the cuts are planned to get the most out of each log.</span></li>
          <li><b>Milling</b><span>The mill is set up on your property, logs are loaded and cut, and boards are stacked as they come off the saw.</span></li>
          <li><b>Stack and dry</b><span>Lumber is stacked with spacers for air drying, and Andrew tells you how long that species and thickness needs.</span></li>
        </ol>
        <p>Having land opened up for a home site? <a href="/services/lot-clearing/">Lot clearing</a> and milling can be planned together so the best trees become the porch posts. The full list is on the <a href="/services/">services page</a>.</p>
      </div>

      <div class="content-block">
        <h2>Frequently asked questions</h2>
        <?php echo faqList($faqs); ?>
      </div>

      <p class="updated">Last updated: <?php echo date('F Y'); ?></p>
    </article>

    <aside class="sp-rail" aria-label="Sawmill services at a glance">
      <div class="rail-card">
        <h3>At a glance</h3>
        <dl class="rail-facts">
          <div><dt>Minimum log</dt><dd>12 in. × 6 ft</dd></div>
          <div><dt>Best boards</dt><dd>18 in. and wider</dd></div>
          <div><dt>Where</dt><dd>On your property</dd></div>
          <div><dt>Booking</dt><dd>By appointment</dd></div>
        </dl>
      </div>
      <div class="rail-card rail-card--dark">
        <h3>Got logs?</h3>
        <p>Tell Andrew the species, how wide and how long.</p>
        <a class="btn btn-accent btn-block" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> <?php echo e($phone); ?></a>
      </div>
    </aside>
  </div>
</section>

<?php $relatedCurrent = 'sawmill-services'; $relatedPrefer = ['firewood', 'lot-clearing', 'tree-removal']; include $_SERVER['DOCUMENT_ROOT'] . '/includes/related-services.php'; ?>
<?php $closingHeading = 'Got logs worth keeping?'; $closingCopy = 'Call River City Tree Care with the species and sizes and book a milling day.'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/closing-cta.php'; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

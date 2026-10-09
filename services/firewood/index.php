<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage     = 'services';
$pageType        = 'service';
$serviceSlug     = 'firewood';
$pageTitle       = 'Firewood for Sale in Chickamauga, GA | River City Tree Care';
$pageDescription = 'Split oak, hickory and mixed hardwood firewood by the truckload in Chickamauga, GA, cut from local tree removals. Call (706) 264-6130 for stock and price.';
$canonicalUrl    = $siteUrl . '/services/firewood/';
$pageStyle       = <<<CSS
.sp-firewood .photo-frame--wide { max-width: 480px; }
CSS;

$faqs = [
    ['Do you deliver firewood?',
     'Delivery may be available, depending on where you are and how much is in stock. Pickup is always an option. Call (706) 264-6130 to ask about both.'],
    ['How much is a truckload?',
     'The price changes with the species and whether the wood is seasoned or green, so River City Tree Care does not publish one. Call for the current figure.'],
    ['Can you cut firewood from my own tree?',
     'Yes. During a <a href="/services/tree-removal/">tree removal</a> the crew will cut the trunk to firewood length and stack it where you want it, if you ask before the work starts.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Services', '/services/'], ['Firewood', '/services/firewood/']]),
    serviceNode('Firewood', 'Split oak, hickory and mixed hardwood firewood sold by the truckload in Chickamauga, GA, seasoned or green, cut from local tree removal jobs.', 'Chickamauga, GA'),
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero--interior" aria-label="Firewood for sale in Chickamauga, GA">
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Services', '/services/'], ['Firewood', null]]); ?>
      <span class="eyebrow">Oak · Hickory · Mixed hardwood</span>
      <h1 class="hero-title">Firewood for Sale in Chickamauga, GA</h1>
      <p class="hero-answer">River City Tree Care sells split hardwood firewood by the truckload in Chickamauga, GA. The wood is oak, hickory and mixed hardwood cut from the company’s own tree removal jobs, sold seasoned or green. Stock changes with the work, so call (706) 264-6130 to see what is on hand.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Ask about firewood</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> Call <?php echo e($phone); ?></a>
      </div>
    </div>
    <?php $heroFormId = 'hero-firewood'; $heroFormService = 'Firewood'; $heroFormHeading = 'Ask about firewood'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section sp-firewood">
  <div class="container sp-layout">
    <article class="sp-article">

      <div class="content-block">
        <h2>Where does River City Tree Care’s firewood come from?</h2>
        <p class="answer">The firewood comes from trees River City Tree Care removes around Chickamauga, Ringgold and Chattanooga. Instead of sending good hardwood to a dump, the crew splits it and sells it locally. That is also why the supply and the species mix change from week to week.</p>
        <p>The wood is whatever grows in Walker and Catoosa counties: mostly oak and hickory, with maple, sweetgum and poplar in the mixed loads. It is sold by the truckload, not by the bundle.</p>
      </div>

      <figure class="photo-frame photo-frame--wide reveal-up">
        <?php echo picture('hardwood-logs-from-tree-removal-firewood-stock-i', 'Stack of hardwood logs beside a portable sawmill under a clear sky', '(max-width: 960px) 90vw, 480px'); ?>
        <figcaption>Hardwood logs staged in the yard. Straight ones go to the sawmill and the rest are split.</figcaption>
      </figure>

      <div class="content-block">
        <h2>What kinds of firewood can I buy?</h2>
        <p class="answer">River City Tree Care sells three kinds of firewood: oak, hickory and mixed hardwood, each either seasoned or green. Oak and hickory burn longer and hotter than softwood and leave less creosote. Mixed hardwood is the all-purpose load and usually the lower-priced one.</p>
        <div class="table-wrap">
          <table class="data-table">
            <caption>Firewood sold by River City Tree Care. Availability depends on recent removal jobs.</caption>
            <thead><tr><th scope="col">Wood</th><th scope="col">How it burns</th><th scope="col">Good for</th></tr></thead>
            <tbody>
              <tr><th scope="row">Oak</th><td>Hot and long</td><td>Heating, fireplaces</td></tr>
              <tr><th scope="row">Hickory</th><td>Hot, with a strong smoke flavor</td><td>Fire pits, smoking meat</td></tr>
              <tr><th scope="row">Mixed hardwood</th><td>Varies with the mix</td><td>General use</td></tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="content-block">
        <h2>Is the firewood seasoned or green?</h2>
        <p class="answer">Both, depending on what is in stock. Seasoned wood has been split and air-dried and is ready to burn. Green wood is freshly cut and needs 6 to 12 months of drying before it burns cleanly, and it is usually cheaper if you have the room to cure it.</p>
        <p>Burning green wood means more smoke, less heat and more creosote in the chimney. If you buy green, stack it and wait.</p>
      </div>

      <div class="content-block">
        <h2>How should firewood be stored in North Georgia?</h2>
        <p class="answer">Firewood should be stored off the ground, covered on top and away from the house. A stack sitting on the ground wicks moisture into its bottom row, a cover over the top keeps rain off while the sides breathe, and distance from the wall keeps termites away from the home.</p>
        <ul class="check-list">
          <li><?php echo icon('check', 20); ?><span><strong>Off the ground:</strong> stack on a pallet or rack so the bottom row stays dry.</span></li>
          <li><?php echo icon('check', 20); ?><span><strong>Covered on top only:</strong> a tarp or small roof keeps rain off while the sides stay open to air.</span></li>
          <li><?php echo icon('check', 20); ?><span><strong>Away from the house:</strong> keep the stack at least 20 feet from the home.</span></li>
        </ul>
        <p>Have big logs you would sooner turn into boards? See <a href="/services/sawmill-services/">sawmill services</a>. Everything else the crew does is on the <a href="/services/">services page</a>.</p>
      </div>

      <div class="content-block">
        <h2>Frequently asked questions</h2>
        <?php echo faqList($faqs); ?>
      </div>

      <p class="updated">Last updated: <?php echo date('F Y'); ?></p>
    </article>

    <aside class="sp-rail" aria-label="Firewood at a glance">
      <div class="rail-card">
        <h3>At a glance</h3>
        <dl class="rail-facts">
          <div><dt>Species</dt><dd>Oak, hickory, mixed</dd></div>
          <div><dt>Sold by</dt><dd>The truckload</dd></div>
          <div><dt>Condition</dt><dd>Seasoned or green</dd></div>
          <div><dt>Price</dt><dd>Call for current</dd></div>
        </dl>
      </div>
      <div class="rail-card rail-card--dark">
        <h3>Check the stock</h3>
        <p>What is on hand depends on last week’s removals. A call is the fastest way to find out.</p>
        <a class="btn btn-accent btn-block" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> <?php echo e($phone); ?></a>
      </div>
    </aside>
  </div>
</section>

<?php $relatedCurrent = 'firewood'; $relatedPrefer = ['sawmill-services', 'tree-removal', 'tree-trimming']; include $_SERVER['DOCUMENT_ROOT'] . '/includes/related-services.php'; ?>
<?php $closingHeading = 'Need firewood?'; $closingCopy = 'Call River City Tree Care to hear what is in stock and arrange pickup or delivery.'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/closing-cta.php'; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

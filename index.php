<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage     = 'home';
$pageType        = 'home';
$pageTitle       = 'Tree Service in Chickamauga, GA | River City Tree Care';
$pageDescription = 'River City Tree Care is the Chickamauga, GA tree service run by owner Andrew Roberson: tree removal, trimming, stump grinding and land clearing. (706) 264-6130.';
$canonicalUrl    = $siteUrl . '/';
$heroPreload     = heroPreload('hero-treetop-cut-valley-view', '(max-width: 900px) 100vw, 50vw');
$pageStyle       = <<<CSS
/* homepage only */
.home-hero .hero-title { max-width: 16ch; }
.home-hero .hero-visual { min-height: 600px; }
.home-price .section-head { max-width: 64ch; }
.home-about .about-image { max-width: 420px; justify-self: center; }
.home-about .process-title { font-family: var(--font-accent); font-weight: 400; font-size: 1.5rem; letter-spacing: .06em; text-transform: uppercase; margin-top: var(--space-4); }
.home-ba { background: var(--color-surface); }
.home-areas { background: var(--color-paper-2); }
.home-reviews { background: var(--color-surface); }
.home-estimate { background: var(--color-paper-2); }
@media (max-width: 900px) { .home-hero .hero-visual { min-height: 0; } }
CSS;

$gbp = gbpSummary();

$homeFaqs = [
    ['Do you haul away the wood and brush after a tree comes down?',
     'Yes. Cleanup is part of every removal: limbs are chipped on site, trunk sections are loaded and hauled, and the ground is raked. If you want the wood, the crew cuts it to length and stacks it where you say. Good hardwood logs can go through the <a href="/services/sawmill-services/">portable sawmill</a> instead.'],
    ['Will you come out for storm damage at night or on a holiday?',
     'Yes. The phone at (706) 264-6130 is answered around the clock, holidays included. A tree on a house, across a driveway or blocking a road is moved to the front of the line, with same-day response whenever the crew can get there. See <a href="/services/tree-removal/">tree removal</a> for how a storm job is handled.'],
    ['Is River City Tree Care licensed and insured?',
     'Yes. River City Tree Care, LLC carries general liability and workers’ compensation coverage, and Andrew will show proof of insurance before any work starts. Ask for it at the estimate.'],
    ['Can you grind the stump when you take the tree down?',
     'Yes. <a href="/services/stump-grinding/">Stump grinding</a> can be added to any removal. The stump is ground 6 to 12 inches below the surrounding soil, which is deep enough to fill with topsoil and seed. Most residential stumps take under an hour.'],
    ['Does a Georgia tree company work in Chattanooga?',
     'Yes. Chickamauga sits a few miles below the Tennessee line, and the 50-mile service radius covers Hamilton County. The <a href="/service-areas/chattanooga-tn/">Chattanooga page</a> covers stump grinding and forestry mulching on that side of the line.'],
];

$schemaNodes = [webPageNode(), faqSchemaNode($homeFaqs)];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero--type home-hero" aria-label="River City Tree Care, tree service in Chickamauga, GA">
  <div class="container hero-grid hero-grid--visual">
    <div class="hero-text">
      <span class="eyebrow">Chickamauga, GA · Walker County</span>
      <h1 class="hero-title">Tree Service in Chickamauga, GA, <span class="text-accent">Run by Its Owner</span></h1>
      <?php if ($gbp && $gbp['url'] !== ''): ?>
      <a class="hero-rating" href="<?php echo e($gbp['url']); ?>" target="_blank" rel="noopener"><?php echo stars(); ?> <b><?php echo e($gbp['rating']); ?></b> <span>on Google from <?php echo (int) $gbp['count']; ?> reviews</span></a>
      <?php endif; ?>
      <p class="hero-answer">River City Tree Care is a tree service and land clearing company based in Chickamauga, Georgia. Owner Andrew Roberson’s crew removes and trims trees, grinds stumps, clears lots and mulches overgrown acreage within 50 miles of Chickamauga, including Fort Oglethorpe, Ringgold, LaFayette and Chattanooga, Tennessee, and answers the phone 24 hours a day.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Request an estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> Call <?php echo e($phone); ?></a>
      </div>
      <ul class="hero-chips">
        <li><?php echo icon('users', 16); ?> Owner on every job</li>
        <li><?php echo icon('truck', 16); ?> Cleanup included</li>
        <li><?php echo icon('map-pin', 16); ?> 50-mile service radius</li>
      </ul>
    </div>
    <figure class="hero-visual">
      <div class="hero-visual__img"><?php echo picture('hero-treetop-cut-valley-view', 'View from the top of a tree during a removal: a fresh saw cut in the foreground and a wooded valley below', '(max-width: 900px) 100vw, 50vw', ['eager' => true, 'class' => 'hero-img']); ?></div>
      <figcaption>The view from the climb, partway through a removal.</figcaption>
      <?php $heroFormId = 'hero-home'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
    </figure>
  </div>
</section>

<section class="proof proof--home" aria-label="River City Tree Care at a glance">
  <div class="container">
    <div class="proof-row">
      <div class="proof-item"><b>Owner <em>on site</em></b><span>Andrew Roberson quotes the job and runs the crew</span></div>
      <div class="proof-item"><b><em>50</em>-mile radius</b><span>Walker, Catoosa, Whitfield and Hamilton counties</span></div>
      <div class="proof-item"><b><em>8</em> services</b><span>One crew, from pruning to a portable sawmill</span></div>
      <?php if ($gbp): ?>
      <div class="proof-item"><b><em><?php echo e($gbp['rating']); ?></em> on Google</b><span><?php echo (int) $gbp['count']; ?> reviews on the Google Business Profile</span></div>
      <?php else: ?>
      <div class="proof-item"><b>Chickamauga, <em>GA</em></b><span>Home base, ZIP 30707</span></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="section home-services" aria-label="Tree service and land clearing services">
  <div class="container-wide">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">What We Do</span>
      <h2>What <span class="text-accent">tree services</span> does River City Tree Care offer around Chickamauga?</h2>
      <p class="hero-answer">River City Tree Care trims and removes trees, grinds stumps, clears lots, runs a forestry mulcher on overgrown acreage and preps land for building. The same crew also sells split hardwood firewood from its removal jobs and mills logs into lumber with a portable sawmill, so very little of a tree is wasted.</p>
      <span class="section-subtitle">Eight services, one crew</span>
      <p class="prose">Typical price ranges are printed on each card where Andrew has published one. Everything else is priced after a walk of the property.</p>
    </div>
    <div class="services-grid" data-p1-dynamic>
      <?php echo serviceCards($services); ?>
    </div>
  </div>
</section>

<section class="section home-ba edge-curve-top" aria-labelledby="ba-h2">
  <div class="container ba-wrap">
    <div class="content-block reveal-left">
      <span class="eyebrow-label">Before and after</span>
      <h2 id="ba-h2">What does a removal look like when the tree is against a building?</h2>
      <p class="answer">A tree growing against a structure comes down in pieces, from the top, with each section lowered on a rope. In this pair the tree stood between a metal carport and a chain-link fence. The second photo shows the same spot with a flush stump, and the carport and fence still standing.</p>
      <p>The stump in that photo is the next step, not the end of the job. <a href="/services/stump-grinding/">Grinding it below grade</a> lets grass grow over the spot, and <a href="/services/tree-removal/">the tree removal page</a> explains how the crew decides between climbing and felling.</p>
    </div>
    <div class="reveal-right">
      <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/before-after.php';
      echo p1_before_after(
          'tree-removal-job-site-overgrown-trees-on-residen', 'property-after-tree-removal-clean-lot-with-clear',
          'Mature tree leaning beside a metal carport and chain-link fence before removal',
          'Same carport and fence after the tree was removed, with a flush-cut stump',
          ['caption' => 'Residential removal by River City Tree Care: before, and after the tree was taken down. Drag the handle to compare.', 'id' => 'ba-home']
      ); ?>
    </div>
  </div>
</section>

<section class="section home-price" aria-labelledby="price-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Typical prices</span>
      <h2 id="price-h2">How much does tree work cost around Chickamauga, GA?</h2>
      <p class="answer">Most tree work from River City Tree Care falls between $100 for a single small stump and $8,000 or more for a wooded lot. The ranges below are the typical figures Andrew publishes for each service. Your written estimate, given after he has seen the property, is the price that counts.</p>
    </div>
    <div class="table-wrap reveal-up">
      <table class="data-table">
        <caption>Typical ranges published by River City Tree Care. Forestry mulching, land development clearing, firewood and sawmill work are priced by the job: call for a figure.</caption>
        <thead>
          <tr><th scope="col">Service</th><th scope="col">Typical range</th><th scope="col">What moves the price</th></tr>
        </thead>
        <tbody>
          <tr><th scope="row"><a href="/services/tree-trimming/">Tree trimming</a></th><td class="num">$200–$800 per tree</td><td>Tree size and how hard the canopy is to reach</td></tr>
          <tr><th scope="row"><a href="/services/tree-removal/">Tree removal</a></th><td class="num">$400–$2,500+</td><td>Small trees run $400–$900. Large hardwoods close to a house run $1,500–$2,500 or more.</td></tr>
          <tr><th scope="row"><a href="/services/stump-grinding/">Stump grinding</a></th><td class="num">$100–$400 per stump</td><td>Diameter at ground level, root flare and access for the grinder</td></tr>
          <tr><th scope="row"><a href="/services/lot-clearing/">Lot clearing</a></th><td class="num">$1,500–$8,000+</td><td>Acreage and how dense the trees and brush are</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="section home-about texture-grain slant-top" aria-labelledby="about-h2">
  <span class="grain-layer" aria-hidden="true"></span>
  <span class="floating-ring float-animate-slow" aria-hidden="true"></span>
  <div class="container">
    <div class="about-split">
      <div class="about-left reveal-left">
        <span class="eyebrow-label">Owner-operated</span>
        <h2 id="about-h2">Who shows up when you call River City Tree Care?</h2>
        <p class="answer">Andrew Roberson does. He owns River City Tree Care, gives the estimate himself and is on site for every project, so the person who priced your job is the one running the crew. The company does not hand work to subcontractors.</p>
        <p>The crew brings its own equipment: chainsaws and climbing gear, a wood chipper, a commercial stump grinder, skid steers, a forestry mulcher, hauling trailers and a portable sawmill. <a href="/about/">Read more about Andrew and how the company works</a>.</p>
        <h3 class="process-title">The River City 4-step job</h3>
        <ol class="process-steps">
          <li><b>Free estimate</b><span>Andrew walks the property with you and gives a firm written price. The visit and the quote cost nothing.</span></li>
          <li><b>Schedule</b><span>You pick a date. The crew arrives with the equipment that job needs.</span></li>
          <li><b>The work</b><span>Trees come down, stumps are ground, brush is cleared.</span></li>
          <li><b>Cleanup</b><span>Wood, limbs and debris are chipped or hauled off and the site is raked.</span></li>
        </ol>
      </div>
      <div class="about-right about-image reveal-right">
        <div class="about-image-primary img-clipped"><?php echo picture('andrew-roberson-owner-of-river-city-tree-care-ll', 'River City Tree Care shirt and a chainsaw hanging on a board fence', '(max-width: 900px) 80vw, 420px'); ?></div>
      </div>
    </div>
  </div>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/recent-work.php';
$homeRecent = p1_recent_work($siteSlug, ['heading' => 'Recent work and updates from Chickamauga', 'limit' => 8]);
if ($homeRecent !== ''): ?>
<div class="recent-work-wrap" data-p1-dynamic>
  <?php echo $homeRecent; ?>
</div>
<?php endif; ?>

<section class="section home-areas" aria-labelledby="areas-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Service area</span>
      <h2 id="areas-h2">Which towns does River City Tree Care serve?</h2>
      <p class="answer">River City Tree Care works within 50 miles of Chickamauga, across Walker, Catoosa and Whitfield counties in Georgia and Hamilton County in Tennessee. Four towns have their own page with local detail on trees, terrain and typical jobs. The others are listed below, and the <a href="/service-areas/">service areas page</a> has a town checker.</p>
    </div>
    <div class="area-grid" data-p1-dynamic>
      <?php foreach ($serviceAreaPages as $i => $a): ?>
      <a class="area-card reveal-up reveal-delay-<?php echo ($i % 4) + 1; ?>" href="/service-areas/<?php echo $a['slug']; ?>/">
        <span class="county"><?php echo e($a['county']); ?></span>
        <h3><?php echo e($a['name'] . ', ' . $a['state']); ?></h3>
        <p><?php echo e($a['blurb']); ?></p>
        <span class="go">Tree service in <?php echo e($a['name']); ?> →</span>
      </a>
      <?php endforeach; ?>
    </div>
    <ul class="town-chips" aria-label="Other towns served">
      <?php foreach ($serviceAreaTowns as $t): ?>
      <li><?php echo icon('map-pin', 14); ?> <?php echo e($t); ?>, GA</li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<?php
$homeReviews = p1_google_reviews($siteSlug, ['heading' => 'What customers say on Google', 'limit' => 6]);
if ($homeReviews !== ''): ?>
<section class="section home-reviews" aria-label="Google reviews">
  <div class="container">
    <?php echo $homeReviews; ?>
  </div>
</section>
<?php endif; ?>

<section class="section home-faq" aria-labelledby="faq-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Straight answers</span>
      <h2 id="faq-h2">Frequently asked questions</h2>
    </div>
    <div class="faq-grid">
      <div><?php echo faqList(array_slice($homeFaqs, 0, 3)); ?></div>
      <div><?php echo faqList(array_slice($homeFaqs, 3)); ?></div>
    </div>
  </div>
</section>

<section class="section home-estimate edge-curve-top" id="estimate" aria-labelledby="estimate-h2">
  <div class="container estimate">
    <div class="card estimate-card reveal-up">
      <span class="eyebrow-label">Estimates</span>
      <h2 id="estimate-h2">Request an estimate</h2>
      <?php $formId = 'home-estimate'; $formSubmitLabel = 'Send my request'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/lead-form.php'; ?>
    </div>
    <div class="estimate-aside reveal-right">
      <h3>What happens next</h3>
      <ol class="next-steps">
        <li><strong>Andrew calls you back</strong>He asks what you are dealing with and sets a time to see it.</li>
        <li><strong>A walk of the property</strong>Every tree, stump or acre in the job gets looked at, along with access for the equipment.</li>
        <li><strong>A written price</strong>You get the number in writing before any work is scheduled.</li>
      </ol>
      <div class="nap">
        <div><?php echo icon('phone', 18); ?><a href="<?php echo telHref(); ?>"><?php echo e($phone); ?></a></div>
        <div><?php echo icon('mail', 18); ?><a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a></div>
        <div><?php echo icon('map-pin', 18); ?><span>Chickamauga, GA 30707</span></div>
        <div><?php echo icon('clock', 18); ?><span><?php echo e($hoursDisplay); ?></span></div>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

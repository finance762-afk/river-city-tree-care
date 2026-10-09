<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage     = 'about';
$pageType        = 'about';
$pageTitle       = 'About River City Tree Care | Chickamauga, GA';
$pageDescription = 'River City Tree Care is owned and operated by Andrew Roberson in Chickamauga, GA. He quotes every job and runs the crew himself. Call (706) 264-6130.';
$canonicalUrl    = $siteUrl . '/about/';
$pageStyle       = <<<CSS
.about-story .about-image { max-width: 440px; justify-self: center; }
.about-how { background: var(--color-surface); }
.about-how .grid-2 { gap: var(--space-4); }
.about-how .card h3 { font-size: 1.15rem; margin-bottom: var(--space-2); }
.about-how .card p { margin: 0; color: var(--color-ink-2); }
.about-how .card svg { color: var(--color-primary); margin-bottom: var(--space-3); }
.about-profiles { display: flex; flex-wrap: wrap; gap: var(--space-2); list-style: none; padding: 0; margin: var(--space-4) 0 0; }
.about-profiles a { display: inline-flex; min-height: 44px; align-items: center; padding: var(--space-2) var(--space-4); border: 1px solid var(--color-line); border-radius: var(--radius-full); background: var(--color-surface); text-decoration: none; font-weight: 600; }
.about-profiles a:hover { border-color: var(--color-primary); color: var(--color-primary); }
CSS;

$schemaNodes = [
    webPageNode('AboutPage'),
    breadcrumbNode([['About', '/about/']]),
    ['@type' => 'Person', 'name' => $ownerName, 'jobTitle' => 'Owner', 'worksFor' => ['@id' => $siteUrl . '/#business']],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero--interior" aria-label="About River City Tree Care">
  <div class="container">
    <div class="hero-text">
      <?php echo breadcrumbs([['About', null]]); ?>
      <span class="eyebrow">Owner-operated in Chickamauga, GA</span>
      <h1 class="hero-title">About River City Tree Care</h1>
      <p class="hero-answer">River City Tree Care, LLC is a tree service and land clearing company based in Chickamauga, GA, owned and operated by Andrew Roberson. It serves a 50-mile radius that includes Chattanooga, TN, and it is licensed and insured.</p>
    </div>
  </div>
</section>

<section class="section about-story" aria-labelledby="story-h2">
  <div class="container about-split">
    <div class="content-block reveal-left">
      <span class="eyebrow-label">The owner</span>
      <h2 id="story-h2">Who owns River City Tree Care?</h2>
      <p class="answer">Andrew Roberson owns and operates River City Tree Care out of Chickamauga, GA. What started as one man with a chainsaw and a truck has grown into a tree care and land clearing operation covering Walker, Catoosa, Hamilton and Whitfield counties.</p>
      <p>Andrew is on site for every project. The person who quoted the work is the same person running the crew, and the company does not use subcontractors. Jobs range from one tree in a backyard to multi-acre clearing for builders and developers.</p>
      <p>The crew handles the full run of tree and land work: <a href="/services/tree-trimming/">trimming</a>, <a href="/services/tree-removal/">removal</a>, <a href="/services/stump-grinding/">stump grinding</a>, lot clearing, forestry mulching, land development clearing, firewood and a portable sawmill. All eight are on the <a href="/services/">services page</a>.</p>
    </div>
    <div class="about-image reveal-right">
      <div class="about-image-primary img-clipped"><?php echo picture('andrew-roberson-owner-of-river-city-tree-care-ll', 'River City Tree Care shirt with the company phone number and a chainsaw hanging on a board fence', '(max-width: 900px) 80vw, 440px'); ?></div>
    </div>
  </div>
</section>

<section class="section about-how edge-curve-top" aria-labelledby="how-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">How the company works</span>
      <h2 id="how-h2">How does River City Tree Care run a job?</h2>
      <p class="answer">River City Tree Care runs every job the same way. The crew shows up with the right equipment, does the work safely and completely, cleans up the whole site and moves on. There are no half-finished jobs and no return visits because something got missed.</p>
    </div>
    <div class="grid-2">
      <div class="card reveal-up reveal-delay-1"><?php echo icon('calendar-check', 28); ?><h3>A date that holds</h3><p>When a date is set, the crew is there. If an emergency call pushes the schedule, you hear it from Andrew directly.</p></div>
      <div class="card reveal-up reveal-delay-2"><?php echo icon('wrench', 28); ?><h3>Its own equipment</h3><p>Chainsaws, a commercial stump grinder, a wood chipper, skid steers, a forestry mulcher, hauling trailers and a portable sawmill.</p></div>
      <div class="card reveal-up reveal-delay-1"><?php echo icon('truck', 28); ?><h3>A clean site</h3><p>Wood, branches, brush and debris are chipped or hauled off. The property is left cleaner than the crew found it.</p></div>
      <div class="card reveal-up reveal-delay-2"><?php echo icon('clock', 28); ?><h3>Open 24 hours</h3><p>Storms do not keep office hours. Emergency calls are answered nights, weekends and holidays.</p></div>
    </div>
  </div>
</section>

<?php $ctaBandId = 'cta-about'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

<section class="section about-proof" aria-labelledby="proof-h2">
  <div class="container">
    <div class="content-block reveal-up">
      <span class="eyebrow-label">Paperwork and profiles</span>
      <h2 id="proof-h2">Is River City Tree Care insured?</h2>
      <p class="answer">Yes. River City Tree Care, LLC carries both general liability and workers’ compensation coverage. Proof of insurance is available on request before any job begins, and a standard job starts with a free on-site estimate so you know the scope and the cost first.</p>
      <p>The company serves homeowners with a single problem tree, owners clearing land for a new build, and developers prepping commercial sites. Its reviews are public on Google, and its profiles are below. To see where the crew works, go to <a href="/service-areas/">service areas</a>.</p>
      <ul class="about-profiles">
        <?php foreach (array_merge($socialLinks, $profileLinks) as $label => $url): ?>
        <li><a href="<?php echo e($url); ?>" target="_blank" rel="noopener"><?php echo e($label); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<?php
$aboutReviews = p1_google_reviews($siteSlug, ['heading' => 'What customers say on Google', 'limit' => 3]);
if ($aboutReviews !== ''): ?>
<section class="section section--light" aria-label="Google reviews">
  <div class="container"><?php echo $aboutReviews; ?></div>
</section>
<?php endif; ?>

<?php $closingHeading = 'Talk to the owner'; $closingCopy = 'Call Andrew or send the details of the job. He will come look at it himself.'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/closing-cta.php'; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

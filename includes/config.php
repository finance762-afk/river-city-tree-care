<?php
/**
 * includes/config.php — site facts for River City Tree Care (v7 architecture, Oct 2026).
 * Single source for NAP, hours, services and service areas. Every page requires this file
 * (then functions.php) before any output: attribution.php sets the first-touch cookie.
 *
 * Fact sources: llms.txt / llms-full.txt, includes/site-config.json and the pre-v7 pages.
 * Rating and review count are NOT stored here: they come from the Page One reviews feed
 * at request time (functions.php → gbpSummary()).
 */
require_once __DIR__ . '/site-config.php';   // $gscVerification, $ga4MeasurementId, $googleAnalyticsId
require_once __DIR__ . '/attribution.php';   // p1_attribution_fields(); must run before output
require_once __DIR__ . '/icons.php';

$siteSlug  = 'river-city-tree-care';
$slug      = $siteSlug;
$siteUrl   = 'https://rivercitytreega.com';
$siteName  = 'River City Tree Care';            // exactly as the Google Business Profile shows it
$legalName = 'River City Tree Care, LLC';
$ownerName = 'Andrew Roberson';
$phone     = '(706) 264-6130';
$phoneRaw  = '+17062646130';
$email     = 'treeclimber1110@gmail.com';
$address   = ['city' => 'Chickamauga', 'state' => 'GA', 'zip' => '30707', 'county' => 'Walker County'];
$hoursDisplay = 'Open 24 hours, 7 days a week';
$geo       = ['lat' => 34.8712, 'lng' => -85.2911];
$cssVersion = '8.0.0';

// Lead endpoint (unchanged from the pre-v7 site) + spam-shield key used by every form
$formAction      = 'https://db.pageone.cloud/functions/v1/leads/river-city-tree-care';
$leadEndpoint    = $formAction;
$leadsFormSecret = 'bac7714a8f41505ab12d75311ccbb11a6374e38b1a010d69111c84a652cfa0f3';

$socialLinks = [
  'Facebook'  => 'https://www.facebook.com/p/River-City-Tree-Care-61569736164864/',
  'YouTube'   => 'https://www.youtube.com/@RiverCityTreeCare',
  'Instagram' => 'https://www.instagram.com/rivercitytreecare',
  'TikTok'    => 'https://www.tiktok.com/@rivercitytreecare.com',
  'Nextdoor'  => 'https://nextdoor.com/pages/river-city-tree-care-ringgold-ga/',
];
$profileLinks = [
  'Angi' => 'https://www.angi.com/companylist/us/ga/ringgold/river-city-fence-reviews-380222.htm',
  'BBB profile' => 'https://www.bbb.org/us/ga/ringgold/profile/tree-service/river-city-tree-care-0483-40084597',
];

/**
 * Services. 'image' is a photo basename in /assets/images/ (variants in image-map.php);
 * 'alt' describes what the photo shows. 'bullets' are exactly three per card.
 */
$services = [
  ['slug' => 'tree-trimming', 'name' => 'Tree Trimming', 'icon' => 'scissors',
   'image' => 'wood-chipper-processing-branches-during-tree-tri',
   'alt'  => 'Red wood chipper blowing chips into a chip truck on a gravel drive',
   'desc' => 'Crown thinning, deadwood removal and clearance cuts over roofs and driveways.',
   'bullets' => ['Typically $200–$800 per tree', 'Limbs chipped on site', 'Year-round, dormant-season pruning']],
  ['slug' => 'tree-removal', 'name' => 'Tree Removal', 'icon' => 'trees',
   'image' => 'tree-removal-job-site-overgrown-trees-on-residen',
   'alt'  => 'Mature tree leaning beside a metal carport and chain-link fence before removal',
   'desc' => 'Dead, leaning and storm-damaged trees taken down and hauled off.',
   'bullets' => ['Typically $400–$2,500+', 'Rigged down in tight yards', 'Wood hauled or stacked']],
  ['slug' => 'stump-grinding', 'name' => 'Stump Grinding', 'icon' => 'wrench',
   'image' => 'commercial-stump-grinder-removing-stump-below-gr',
   'alt'  => 'Crew member running a tracked stump grinder on a front lawn',
   'desc' => 'Stumps ground 6 to 12 inches below grade, ready for soil and seed.',
   'bullets' => ['Typically $100–$400 per stump', 'Most done in under an hour', 'Chips left or hauled']],
  ['slug' => 'lot-clearing', 'name' => 'Lot Clearing', 'icon' => 'tractor',
   'image' => 'lot-clearing-project-trees-and-brush-removed-fro',
   'alt'  => 'Cleared red clay lot with a brush pile at the tree line',
   'desc' => 'Trees, brush and stumps removed so a lot is ready for grading.',
   'bullets' => ['Typically $1,500–$8,000+', 'Stumps ground below grade', 'Debris hauled off site']],
  ['slug' => 'forestry-mulching', 'name' => 'Forestry Mulching', 'icon' => 'leaf',
   'image' => 'completed-land-clearing-clean-lot-ready-for-deve',
   'alt'  => 'Tracked mulching machine on a freshly mulched lane through woods',
   'desc' => 'One machine cuts and grinds brush and saplings into mulch where they stand.',
   'bullets' => ['No hauling, no burning', 'Mulch holds the soil', 'Fence lines and pasture']],
  ['slug' => 'land-development', 'name' => 'Land Development', 'icon' => 'building-2',
   'image' => 'hauling-trailer-loaded-with-cleared-timber-from',
   'alt'  => 'Dump trailer with its bed raised, used for hauling cleared material',
   'desc' => 'Clearing for home sites, driveways, septic fields and commercial pads.',
   'bullets' => ['Works with builders and GCs', 'Cleared to the site plan', 'Left ready for grading']],
  ['slug' => 'firewood', 'name' => 'Firewood', 'icon' => 'flame',
   'image' => 'hardwood-logs-from-tree-removal-firewood-stock-i',
   'alt'  => 'Stack of hardwood logs beside a portable sawmill',
   'desc' => 'Split oak, hickory and mixed hardwood from local removal jobs.',
   'bullets' => ['Sold by the truckload', 'Seasoned or green', 'Call for current stock']],
  ['slug' => 'sawmill-services', 'name' => 'Sawmill Services', 'icon' => 'hammer',
   'image' => 'river-city-tree-care-crew-at-work-on-active-job',
   'alt'  => 'Portable band sawmill set up beside a row of cut logs',
   'desc' => 'Portable sawmill turns your logs into slabs, beams and boards on site.',
   'bullets' => ['Logs 12 in. and wider', 'Live-edge slabs and beams', 'Milled on your property']],
];

/** City pages (each has /service-areas/{slug}/). 'lead' = the services that page leads with. */
$serviceAreaPages = [
  ['slug' => 'fort-oglethorpe-ga', 'name' => 'Fort Oglethorpe', 'state' => 'GA', 'county' => 'Catoosa County',
   'blurb' => 'Stump removal and pruning around Battlefield Parkway and the Chickamauga Battlefield edge.'],
  ['slug' => 'chattanooga-tn', 'name' => 'Chattanooga', 'state' => 'TN', 'county' => 'Hamilton County',
   'blurb' => 'Stump grinding and forestry mulching from St. Elmo and East Ridge to Lookout Valley.'],
  ['slug' => 'ringgold-ga', 'name' => 'Ringgold', 'state' => 'GA', 'county' => 'Catoosa County',
   'blurb' => 'Pruning, stump grinding and lot clearing between Taylor Ridge and White Oak Mountain.'],
  ['slug' => 'lafayette-ga', 'name' => 'LaFayette', 'state' => 'GA', 'county' => 'Walker County',
   'blurb' => 'Tree service, pruning and acreage clearing from the square out to Pigeon Mountain.'],
];
/** Towns named in llms.txt as served, without a page of their own. */
$serviceAreaTowns = ['Chickamauga', 'Rossville', 'Dalton', 'Calhoun'];

// v8 component contract (includes/zip-check.php, p1-form-helpers.php): town names only, no ZIP list on file.
$serviceAreas = array_merge(array_map(fn($a) => $a['name'], $serviceAreaPages), $serviceAreaTowns);

// Options of every "service needed" select
$formServices = array_merge(array_map(fn($s) => $s['name'], $services), ['Emergency / Other']);

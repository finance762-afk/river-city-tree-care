<?php
/**
 * includes/header.php — fixed dark header (the logo's warm colours read best on the brand brown),
 * desktop dropdowns, mobile overlay menu, and the opening <main>. main.js adds .scrolled on scroll
 * (bar turns solid, logo shrinks). Loop variables are $nav-prefixed (shared-include rule).
 */
?>
<header class="site-header site-header--dark" data-header>
  <nav class="navbar" aria-label="Main navigation">
    <div class="navbar-inner container-wide">
      <a href="/" class="site-logo" aria-label="<?php echo e($siteName); ?> home">
        <img src="/assets/images/logo-mark-192.webp" srcset="/assets/images/logo-mark-192.webp 1x, /assets/images/logo-mark-384.webp 2x" alt="<?php echo e($siteName); ?> logo" width="191" height="192" class="logo--square">
        <span class="logo-text"><span class="logo-name">River City Tree Care</span><span class="logo-tagline">Chickamauga, GA</span></span>
      </a>

      <ul class="navbar-links" role="list">
        <li><a href="/"<?php echo ($currentPage ?? '') === 'home' ? ' aria-current="page"' : ''; ?>>Home</a></li>
        <li class="has-dropdown">
          <button type="button" class="dropdown-toggle" aria-expanded="false" aria-haspopup="true">Services <?php echo icon('chevron-down', 16); ?></button>
          <ul class="dropdown" role="menu" style="display:none">
            <?php foreach ($services as $navSvc): ?>
            <li role="none"><a role="menuitem" href="/services/<?php echo $navSvc['slug']; ?>/"><?php echo e($navSvc['name']); ?></a></li>
            <?php endforeach; ?>
            <li role="none"><a role="menuitem" href="/services/" class="dropdown-all">All tree and land services</a></li>
          </ul>
        </li>
        <li class="has-dropdown">
          <button type="button" class="dropdown-toggle" aria-expanded="false" aria-haspopup="true">Service Areas <?php echo icon('chevron-down', 16); ?></button>
          <ul class="dropdown" role="menu" style="display:none">
            <?php foreach ($serviceAreaPages as $navArea): ?>
            <li role="none"><a role="menuitem" href="/service-areas/<?php echo $navArea['slug']; ?>/"><?php echo e($navArea['name'] . ', ' . $navArea['state']); ?></a></li>
            <?php endforeach; ?>
            <li role="none"><a role="menuitem" href="/service-areas/" class="dropdown-all">All service areas</a></li>
          </ul>
        </li>
        <li><a href="/about/"<?php echo ariaCurrent('/about/'); ?>>About</a></li>
        <li><a href="/contact/"<?php echo ariaCurrent('/contact/'); ?>>Contact</a></li>
      </ul>

      <div class="navbar-cta">
        <a href="tel:<?php echo e($phoneRaw); ?>" class="btn btn-secondary navbar-phone"><?php echo icon('phone', 18); ?> <?php echo e($phone); ?></a>
        <button type="button" class="btn btn-primary" data-open-estimate>Get an Estimate</button>
      </div>

      <button type="button" class="hamburger" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu">
        <span class="hamburger-line"></span><span class="hamburger-line"></span><span class="hamburger-line"></span>
      </button>
    </div>
  </nav>
</header>

<div class="mobile-menu" id="mobile-menu" aria-hidden="true">
  <div class="mobile-menu-inner">
    <nav aria-label="Mobile navigation">
      <ul class="mobile-menu-links">
        <li><a href="/">Home</a></li>
        <li><a href="/services/">Services</a>
          <ul class="mobile-submenu">
            <?php foreach ($services as $navSvc): ?>
            <li><a href="/services/<?php echo $navSvc['slug']; ?>/"><?php echo e($navSvc['name']); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <li><a href="/service-areas/">Service Areas</a>
          <ul class="mobile-submenu">
            <?php foreach ($serviceAreaPages as $navArea): ?>
            <li><a href="/service-areas/<?php echo $navArea['slug']; ?>/"><?php echo e($navArea['name'] . ', ' . $navArea['state']); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <li><a href="/about/">About</a></li>
        <li><a href="/contact/">Contact</a></li>
      </ul>
    </nav>
    <div class="mobile-menu-cta">
      <a href="tel:<?php echo e($phoneRaw); ?>" class="btn btn-accent btn-block"><?php echo icon('phone', 18); ?> Call <?php echo e($phone); ?></a>
      <button type="button" class="btn btn-outline-white btn-block" data-open-estimate>Get an Estimate</button>
    </div>
  </div>
</div>

<main id="main-content">

  <nav class="navbar" aria-label="Main navigation">
    <div class="container">
      <a href="/" class="nav-logo">
        <img src="https://i.imgur.com/3V6kJDE.png" alt="River City Tree Care logo" width="160" height="50">
      </a>

      <ul class="nav-links">
        <li><a href="/" <?php if ($currentPage === 'home') echo 'aria-current="page"'; ?>>Home</a></li>
        <li><a href="/services" <?php if ($currentPage === 'services') echo 'aria-current="page"'; ?>>Services</a></li>
        <li><a href="/about" <?php if ($currentPage === 'about') echo 'aria-current="page"'; ?>>About</a></li>
        <li><a href="/contact" <?php if ($currentPage === 'contact') echo 'aria-current="page"'; ?>>Contact</a></li>
      </ul>

      <a href="tel:+17062646130" class="nav-phone desktop-only">
        <i class="lucide-phone"></i> (706) 264-6130
      </a>

      <button class="hamburger" aria-label="Toggle menu" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </nav>

  <div class="mobile-menu">
    <a href="/" <?php if ($currentPage === 'home') echo 'aria-current="page"'; ?>>Home</a>
    <a href="/services" <?php if ($currentPage === 'services') echo 'aria-current="page"'; ?>>Services</a>
    <a href="/about" <?php if ($currentPage === 'about') echo 'aria-current="page"'; ?>>About</a>
    <a href="/contact" <?php if ($currentPage === 'contact') echo 'aria-current="page"'; ?>>Contact</a>
    <a href="tel:+17062646130" class="mobile-phone">
      <i class="lucide-phone"></i> (706) 264-6130
    </a>
  </div>

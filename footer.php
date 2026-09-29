</main>

<footer class="site-footer">
  <div class="container footer-grid">
    <div class="footer-brand">
      <a href="<?php echo L('home'); ?>" class="logo logo-footer">
        <svg width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect width="100" height="100" rx="20" fill="#90E0EF"/>
          <path d="M50 20 L80 45 V80 H62 V60 H38 V80 H20 V45 Z" fill="#03045E"/>
        </svg>
        <span>Real Estate <em>in Playa del Carmen</em></span>
      </a>
      <p><?php echo htmlspecialchars(ui('footer_about')); ?></p>
      <div class="social-links">
        <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i data-lucide="facebook" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i data-lucide="instagram" aria-hidden="true"></i></a>
        <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer" aria-label="YouTube"><i data-lucide="youtube" aria-hidden="true"></i></a>
      </div>
    </div>

    <div class="footer-col">
      <h3><?php echo ui('footer_explore'); ?></h3>
      <ul>
        <li><a href="<?php echo L('properties'); ?>"><?php echo ui('footer_all_props'); ?></a></li>
        <li><a href="<?php echo L('neighborhoods'); ?>"><?php echo ui('nav_neighborhoods'); ?></a></li>
        <li><a href="<?php echo L('investment'); ?>"><?php echo ui('nav_investment'); ?></a></li>
        <li><a href="https://blog.realestateinplayadelcarmen.com/" hreflang="en"><?php echo ui('nav_blog'); ?></a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h3><?php echo ui('footer_company'); ?></h3>
      <ul>
        <li><a href="<?php echo L('about'); ?>"><?php echo ui('footer_about_us'); ?></a></li>
        <li><a href="<?php echo L('contact'); ?>"><?php echo ui('nav_contact'); ?></a></li>
      </ul>
      <ul class="footer-langs">
        <?php foreach (SUPPORTED_LANGS as $l): ?>
        <li><a href="<?php echo route_url($pageKey === '404' ? 'home' : $pageKey, $l); ?>" hreflang="<?php echo $l; ?>" lang="<?php echo $l; ?>"><?php echo htmlspecialchars($LANG_META[$l]['name']); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>

    <div class="footer-col">
      <h3><?php echo ui('footer_contact_h'); ?></h3>
      <ul class="footer-contact">
        <li><i data-lucide="map-pin" aria-hidden="true"></i> <?php echo htmlspecialchars(ui('footer_address')); ?></li>
        <li><i data-lucide="phone" aria-hidden="true"></i> <a href="tel:+529848015201">+52 984 801 5201</a></li>
        <li><i data-lucide="mail" aria-hidden="true"></i> <a href="mailto:infos@realestateinplayadelcarmen.com">infos@realestateinplayadelcarmen.com</a></li>
      </ul>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="container footer-bottom-inner">
      <p>&copy; <?php echo date('Y'); ?> Real Estate in Playa del Carmen. <?php echo htmlspecialchars(ui('footer_rights')); ?></p>
      <p><?php echo htmlspecialchars(ui('footer_disclaimer')); ?></p>
    </div>
  </div>
</footer>

<script>
  if (window.lucide) { lucide.createIcons(); }
  window.addEventListener('load', () => { if (window.lucide) { lucide.createIcons(); } });

  // Mobile menu toggle
  const menuToggle = document.getElementById('menu-toggle');
  const mainNav = document.getElementById('main-nav');
  if (menuToggle && mainNav) {
    menuToggle.addEventListener('click', () => {
      const isOpen = mainNav.classList.toggle('open');
      menuToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
    mainNav.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        mainNav.classList.remove('open');
        menuToggle.setAttribute('aria-expanded', 'false');
      });
    });
  }

  // Sticky header shadow on scroll
  const header = document.getElementById('site-header');
  if (header) {
    window.addEventListener('scroll', () => {
      header.classList.toggle('scrolled', window.scrollY > 10);
    });
  }

  // Reveal on scroll
  const revealEls = document.querySelectorAll('.reveal-on-scroll');
  if ('IntersectionObserver' in window && revealEls.length) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });
    revealEls.forEach(el => observer.observe(el));
  } else {
    revealEls.forEach(el => el.classList.add('revealed'));
  }

  // FAQ accordion
  document.querySelectorAll('.faq-item').forEach(item => {
    const question = item.querySelector('.faq-question');
    if (question) {
      question.addEventListener('click', () => {
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item.open').forEach(el => el.classList.remove('open'));
        if (!isOpen) item.classList.add('open');
      });
    }
  });
</script>
</body>
</html>

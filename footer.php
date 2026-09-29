</main>

<footer class="site-footer">
  <div class="container footer-grid">
    <div class="footer-brand">
      <a href="/" class="logo logo-footer">
        <svg width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect width="100" height="100" rx="20" fill="#90E0EF"/>
          <path d="M50 20 L80 45 V80 H62 V60 H38 V80 H20 V45 Z" fill="#03045E"/>
        </svg>
        <span>Real Estate <em>in Playa del Carmen</em></span>
      </a>
      <p>Your local, English-speaking real estate team for condos, villas and investment properties across Playa del Carmen and the Riviera Maya.</p>
      <div class="social-links">
        <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i data-lucide="facebook" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i data-lucide="instagram" aria-hidden="true"></i></a>
        <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer" aria-label="YouTube"><i data-lucide="youtube" aria-hidden="true"></i></a>
      </div>
    </div>

    <div class="footer-col">
      <h3>Explore</h3>
      <ul>
        <li><a href="/properties">All Properties</a></li>
        <li><a href="/neighborhoods">Neighborhoods</a></li>
        <li><a href="/investment-guide">Investment Guide</a></li>
        <li><a href="https://blog.realestateinplayadelcarmen.com/">Blog</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h3>Company</h3>
      <ul>
        <li><a href="/about">About Us</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h3>Contact</h3>
      <ul class="footer-contact">
        <li><i data-lucide="map-pin" aria-hidden="true"></i> 5th Avenue, Playa del Carmen, Quintana Roo, Mexico</li>
        <li><i data-lucide="phone" aria-hidden="true"></i> <a href="tel:+529848015201">+52 984 801 5201</a></li>
        <li><i data-lucide="mail" aria-hidden="true"></i> <a href="mailto:info@realestateinplayadelcarmen.com">info@realestateinplayadelcarmen.com</a></li>
      </ul>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="container footer-bottom-inner">
      <p>&copy; <?php echo date('Y'); ?> Real Estate in Playa del Carmen. All rights reserved.</p>
      <p>Independent real estate advisory &mdash; not affiliated with any government entity.</p>
    </div>
  </div>
</footer>

<script>
  if (window.lucide) { lucide.createIcons(); }

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
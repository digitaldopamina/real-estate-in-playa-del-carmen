<?php
$pageTitle = 'Contact Us | Real Estate in Playa del Carmen';
$pageDescription = 'Get in touch with our English-speaking real estate team in Playa del Carmen. Free consultation, no obligation.';
$canonicalPath = '/contact';
$ogImage = 'https://images.pexels.com/photos/34152831/pexels-photo-34152831.jpeg?auto=compress&cs=tinysrgb&h=650&w=940';

$formSubmitted = false;
$formError = '';
$name = $email = $phone = $budget = $message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $budget = trim($_POST['budget'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '' || $email === '' || $message === '') {
        $formError = 'Please fill in your name, email and message.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $formError = 'Please enter a valid email address.';
    } else {
        // In production: send email via mail() or a transactional API.
        $formSubmitted = true;
        $name = $email = $phone = $budget = $message = '';
    }
}

include 'header.php';
?>

<section class="page-hero">
  <div class="page-hero-bg" style="background-image:url('https://images.pexels.com/photos/34152831/pexels-photo-34152831.jpeg?auto=compress&cs=tinysrgb&h=800');"></div>
  <div class="container">
    <div class="breadcrumb" style="color:rgba(255,255,255,0.8);"><a href="/" style="color:white;">Home</a><span>/</span><span>Contact</span></div>
    <h1>Let's talk about your project</h1>
    <p>Whether you're buying your first vacation home or your fifth investment property, we're here to help.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="z-section reveal-on-scroll" style="align-items:flex-start;">
      <div>
        <span class="eyebrow">Get in touch</span>
        <h2>Send us a message</h2>
        <p>We reply within one business day — often much faster.</p>

        <?php if ($formSubmitted): ?>
          <div class="icon-card" style="border-color: var(--primary); background: rgba(0,119,182,0.06); margin-bottom: var(--space-4);">
            <div class="icon-badge" style="background:var(--primary);"><i data-lucide="check" aria-hidden="true"></i></div>
            <h3>Thank you!</h3>
            <p>Your message has been received. One of our advisors will contact you shortly.</p>
          </div>
        <?php else: ?>
          <?php if ($formError): ?>
            <p style="color:#C0392B; font-weight:600;"><?php echo htmlspecialchars($formError); ?></p>
          <?php endif; ?>
          <form class="form-grid" method="post" action="/contact">
            <div class="form-group">
              <label for="name">Full name *</label>
              <input type="text" id="name" name="name" required value="<?php echo htmlspecialchars($name); ?>">
            </div>
            <div class="form-group">
              <label for="email">Email *</label>
              <input type="email" id="email" name="email" required value="<?php echo htmlspecialchars($email); ?>">
            </div>
            <div class="form-group">
              <label for="phone">Phone / WhatsApp</label>
              <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
            </div>
            <div class="form-group">
              <label for="budget">Budget range</label>
              <select id="budget" name="budget">
                <option value="">Select a range</option>
                <option value="<200k" <?php echo $budget === '<200k' ? 'selected' : ''; ?>>Under $200,000</option>
                <option value="200k-400k" <?php echo $budget === '200k-400k' ? 'selected' : ''; ?>>$200,000 – $400,000</option>
                <option value="400k-700k" <?php echo $budget === '400k-700k' ? 'selected' : ''; ?>>$400,000 – $700,000</option>
                <option value=">700k" <?php echo $budget === '>700k' ? 'selected' : ''; ?>>Over $700,000</option>
              </select>
            </div>
            <div class="form-group full">
              <label for="message">What are you looking for? *</label>
              <textarea id="message" name="message" rows="5" required><?php echo htmlspecialchars($message); ?></textarea>
            </div>
            <div class="form-group full">
              <button type="submit" class="btn btn-primary btn-block">Send Message</button>
              <p class="form-note">By submitting, you agree to be contacted by our team about your request.</p>
            </div>
          </form>
        <?php endif; ?>
      </div>

      <div>
        <div class="icon-card" style="margin-bottom:var(--space-4);">
          <div class="icon-badge"><i data-lucide="map-pin" aria-hidden="true"></i></div>
          <h3>Our Office</h3>
          <p>Calle 6 bis int 5, Colonia Centro, 77710 Playa del Carmen, Quintana Roo, Mexico</p>
        </div>
        <div class="icon-card" style="margin-bottom:var(--space-4);">
          <div class="icon-badge"><i data-lucide="phone" aria-hidden="true"></i></div>
          <h3>Call or WhatsApp</h3>
          <p><a href="tel:+529848015201" style="color:var(--primary); font-weight:600;">+52 984 801 5201</a></p>
        </div>
        <div class="icon-card" style="margin-bottom:var(--space-4);">
          <div class="icon-badge"><i data-lucide="mail" aria-hidden="true"></i></div>
          <h3>Email</h3>
          <p><a href="mailto:infos@realestateinplayadelcarmen.com" style="color:var(--primary); font-weight:600;">infos@realestateinplayadelcarmen.com</a></p>
        </div>
        <div style="border-radius:var(--radius-md); overflow:hidden; box-shadow:var(--shadow-sm);">
          <iframe
            title="Map location of Playa del Carmen office"
            src="https://www.openstreetmap.org/export/embed.html?bbox=-87.10%2C20.60%2C-87.05%2C20.65&layer=mapnik&marker=20.6296%2C-87.0739"
            width="100%" height="280" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-sand">
  <div class="container" style="max-width:820px;">
    <div class="section-head">
      <span class="eyebrow">Before you write</span>
      <h2>Quick answers</h2>
    </div>
    <div class="faq-list">
      <div class="faq-item open">
        <div class="faq-question"><span>Do you charge buyers a commission?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>No. Our commission is paid by the seller, standard practice in Mexican real estate. Buyer consultations and property tours are always free.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question"><span>Can we do a video call before I fly down?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Absolutely — most of our clients start with live video walkthroughs before ever visiting in person.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question"><span>Do you help with property management after purchase?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Yes, we connect you with vetted local property managers for short and long-term rentals.</p></div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
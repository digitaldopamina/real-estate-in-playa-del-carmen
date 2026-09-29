<?php
$lang = 'es';
$pageKey = 'contact';
$pageTitle = 'Contacto | Real Estate in Playa del Carmen';
$pageDescription = 'Contacta a nuestro equipo inmobiliario bilingüe en Playa del Carmen. Asesoría gratuita y sin compromiso.';
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
        $formError = 'Por favor completa tu nombre, correo y mensaje.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $formError = 'Por favor ingresa un correo electrónico válido.';
    } else {
        // En producción: enviar el correo con mail() o una API transaccional.
        $formSubmitted = true;
        $name = $email = $phone = $budget = $message = '';
    }
}

include __DIR__ . '/../header.php';
?>

<section class="page-hero">
  <div class="page-hero-bg" style="background-image:url('https://images.pexels.com/photos/34152831/pexels-photo-34152831.jpeg?auto=compress&cs=tinysrgb&h=800');"></div>
  <div class="container">
    <div class="breadcrumb" style="color:rgba(255,255,255,0.8);"><a href="<?= L('home') ?>" style="color:white;">Inicio</a><span>/</span><span>Contacto</span></div>
    <h1>Hablemos de tu proyecto</h1>
    <p>Ya sea tu primera casa vacacional o tu quinta propiedad de inversión, estamos aquí para ayudarte.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="z-section reveal-on-scroll" style="align-items:flex-start;">
      <div>
        <span class="eyebrow">Ponte en contacto</span>
        <h2>Envíanos un mensaje</h2>
        <p>Respondemos en un día hábil, a menudo mucho antes.</p>

        <?php if ($formSubmitted): ?>
          <div class="icon-card" style="border-color: var(--primary); background: rgba(0,119,182,0.06); margin-bottom: var(--space-4);">
            <div class="icon-badge" style="background:var(--primary);"><i data-lucide="check" aria-hidden="true"></i></div>
            <h3>¡Gracias!</h3>
            <p>Hemos recibido tu mensaje. Uno de nuestros asesores se pondrá en contacto contigo muy pronto.</p>
          </div>
        <?php else: ?>
          <?php if ($formError): ?>
            <p style="color:#C0392B; font-weight:600;"><?= htmlspecialchars($formError) ?></p>
          <?php endif; ?>
          <form class="form-grid" method="post" action="<?= L('contact') ?>">
            <div class="form-group">
              <label for="name">Nombre completo *</label>
              <input type="text" id="name" name="name" required value="<?= htmlspecialchars($name) ?>">
            </div>
            <div class="form-group">
              <label for="email">Correo electrónico *</label>
              <input type="email" id="email" name="email" required value="<?= htmlspecialchars($email) ?>">
            </div>
            <div class="form-group">
              <label for="phone">Teléfono / WhatsApp</label>
              <input type="tel" id="phone" name="phone" value="<?= htmlspecialchars($phone) ?>">
            </div>
            <div class="form-group">
              <label for="budget">Rango de presupuesto</label>
              <select id="budget" name="budget">
                <option value="">Selecciona un rango</option>
                <option value="<200k" <?= $budget === '<200k' ? 'selected' : '' ?>>Menos de $200,000</option>
                <option value="200k-400k" <?= $budget === '200k-400k' ? 'selected' : '' ?>>$200,000 – $400,000</option>
                <option value="400k-700k" <?= $budget === '400k-700k' ? 'selected' : '' ?>>$400,000 – $700,000</option>
                <option value=">700k" <?= $budget === '>700k' ? 'selected' : '' ?>>Más de $700,000</option>
              </select>
            </div>
            <div class="form-group full">
              <label for="message">¿Qué estás buscando? *</label>
              <textarea id="message" name="message" rows="5" required><?= htmlspecialchars($message) ?></textarea>
            </div>
            <div class="form-group full">
              <button type="submit" class="btn btn-primary btn-block">Enviar mensaje</button>
              <p class="form-note">Al enviar el formulario, aceptas que nuestro equipo te contacte sobre tu solicitud.</p>
            </div>
          </form>
        <?php endif; ?>
      </div>

      <div>
        <div class="icon-card" style="margin-bottom:var(--space-4);">
          <div class="icon-badge"><i data-lucide="map-pin" aria-hidden="true"></i></div>
          <h3>Nuestra oficina</h3>
          <p>Quinta Avenida, Playa del Carmen, Quintana Roo, México</p>
        </div>
        <div class="icon-card" style="margin-bottom:var(--space-4);">
          <div class="icon-badge"><i data-lucide="phone" aria-hidden="true"></i></div>
          <h3>Llamada o WhatsApp</h3>
          <p><a href="tel:+529848015201" style="color:var(--primary); font-weight:600;">+52 984 801 5201</a></p>
        </div>
        <div class="icon-card" style="margin-bottom:var(--space-4);">
          <div class="icon-badge"><i data-lucide="mail" aria-hidden="true"></i></div>
          <h3>Correo electrónico</h3>
          <p><a href="mailto:info@realestateinplayadelcarmen.com" style="color:var(--primary); font-weight:600;">info@realestateinplayadelcarmen.com</a></p>
        </div>
        <div style="border-radius:var(--radius-md); overflow:hidden; box-shadow:var(--shadow-sm);">
          <iframe
            title="Mapa de la ubicación de la oficina en Playa del Carmen"
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
      <span class="eyebrow">Antes de escribir</span>
      <h2>Respuestas rápidas</h2>
    </div>
    <div class="faq-list">
      <div class="faq-item open">
        <div class="faq-question"><span>¿Cobran comisión a los compradores?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>No. Nuestra comisión la paga el vendedor, práctica habitual en el mercado inmobiliario mexicano. Las asesorías y los recorridos para compradores siempre son gratuitos.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question"><span>¿Podemos hacer una videollamada antes de viajar?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Por supuesto. La mayoría de nuestros clientes empieza con recorridos en video en vivo antes de visitar en persona.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question"><span>¿Ayudan con la administración de la propiedad después de la compra?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Sí, te ponemos en contacto con administradores de propiedades locales de confianza para rentas de corto y largo plazo.</p></div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../footer.php'; ?>
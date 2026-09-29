<?php
$lang = 'fr';
$pageKey = 'contact';
$pageTitle = 'Contact | Real Estate in Playa del Carmen';
$pageDescription = 'Contactez notre équipe immobilière multilingue à Playa del Carmen. Consultation gratuite et sans engagement.';
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
        $formError = 'Merci de renseigner votre nom, votre e-mail et votre message.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $formError = 'Merci de saisir une adresse e-mail valide.';
    } else {
        // En production : envoyer l'e-mail via mail() ou une API transactionnelle.
        $formSubmitted = true;
        $name = $email = $phone = $budget = $message = '';
    }
}

include __DIR__ . '/../header.php';
?>

<section class="page-hero">
  <div class="page-hero-bg" style="background-image:url('https://images.pexels.com/photos/34152831/pexels-photo-34152831.jpeg?auto=compress&cs=tinysrgb&h=800');"></div>
  <div class="container">
    <div class="breadcrumb" style="color:rgba(255,255,255,0.8);"><a href="<?= L('home') ?>" style="color:white;">Accueil</a><span>/</span><span>Contact</span></div>
    <h1>Parlons de votre projet</h1>
    <p>Que ce soit votre première résidence de vacances ou votre cinquième bien d'investissement, nous sommes là pour vous aider.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="z-section reveal-on-scroll" style="align-items:flex-start;">
      <div>
        <span class="eyebrow">Prenez contact</span>
        <h2>Envoyez-nous un message</h2>
        <p>Nous répondons sous un jour ouvré, souvent bien plus vite.</p>

        <?php if ($formSubmitted): ?>
          <div class="icon-card" style="border-color: var(--primary); background: rgba(0,119,182,0.06); margin-bottom: var(--space-4);">
            <div class="icon-badge" style="background:var(--primary);"><i data-lucide="check" aria-hidden="true"></i></div>
            <h3>Merci !</h3>
            <p>Votre message a bien été reçu. L'un de nos conseillers vous contactera très prochainement.</p>
          </div>
        <?php else: ?>
          <?php if ($formError): ?>
            <p style="color:#C0392B; font-weight:600;"><?= htmlspecialchars($formError) ?></p>
          <?php endif; ?>
          <form class="form-grid" method="post" action="<?= L('contact') ?>">
            <div class="form-group">
              <label for="name">Nom complet *</label>
              <input type="text" id="name" name="name" required value="<?= htmlspecialchars($name) ?>">
            </div>
            <div class="form-group">
              <label for="email">E-mail *</label>
              <input type="email" id="email" name="email" required value="<?= htmlspecialchars($email) ?>">
            </div>
            <div class="form-group">
              <label for="phone">Téléphone / WhatsApp</label>
              <input type="tel" id="phone" name="phone" value="<?= htmlspecialchars($phone) ?>">
            </div>
            <div class="form-group">
              <label for="budget">Fourchette de budget</label>
              <select id="budget" name="budget">
                <option value="">Sélectionnez une fourchette</option>
                <option value="<200k" <?= $budget === '<200k' ? 'selected' : '' ?>>Moins de 200 000 $</option>
                <option value="200k-400k" <?= $budget === '200k-400k' ? 'selected' : '' ?>>200 000 $ – 400 000 $</option>
                <option value="400k-700k" <?= $budget === '400k-700k' ? 'selected' : '' ?>>400 000 $ – 700 000 $</option>
                <option value=">700k" <?= $budget === '>700k' ? 'selected' : '' ?>>Plus de 700 000 $</option>
              </select>
            </div>
            <div class="form-group full">
              <label for="message">Que recherchez-vous ? *</label>
              <textarea id="message" name="message" rows="5" required><?= htmlspecialchars($message) ?></textarea>
            </div>
            <div class="form-group full">
              <button type="submit" class="btn btn-primary btn-block">Envoyer le message</button>
              <p class="form-note">En envoyant ce formulaire, vous acceptez d'être contacté par notre équipe au sujet de votre demande.</p>
            </div>
          </form>
        <?php endif; ?>
      </div>

      <div>
        <div class="icon-card" style="margin-bottom:var(--space-4);">
          <div class="icon-badge"><i data-lucide="map-pin" aria-hidden="true"></i></div>
          <h3>Notre agence</h3>
          <p>5e Avenue, Playa del Carmen, Quintana Roo, Mexique</p>
        </div>
        <div class="icon-card" style="margin-bottom:var(--space-4);">
          <div class="icon-badge"><i data-lucide="phone" aria-hidden="true"></i></div>
          <h3>Appel ou WhatsApp</h3>
          <p><a href="tel:+529848015201" style="color:var(--primary); font-weight:600;">+52 984 801 5201</a></p>
        </div>
        <div class="icon-card" style="margin-bottom:var(--space-4);">
          <div class="icon-badge"><i data-lucide="mail" aria-hidden="true"></i></div>
          <h3>E-mail</h3>
          <p><a href="mailto:info@realestateinplayadelcarmen.com" style="color:var(--primary); font-weight:600;">info@realestateinplayadelcarmen.com</a></p>
        </div>
        <div style="border-radius:var(--radius-md); overflow:hidden; box-shadow:var(--shadow-sm);">
          <iframe
            title="Carte de localisation de l'agence à Playa del Carmen"
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
      <span class="eyebrow">Avant de nous écrire</span>
      <h2>Réponses rapides</h2>
    </div>
    <div class="faq-list">
      <div class="faq-item open">
        <div class="faq-question"><span>Facturez-vous une commission aux acheteurs ?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Non. Notre commission est payée par le vendeur, une pratique courante dans l'immobilier mexicain. Les consultations et les visites pour les acheteurs sont toujours gratuites.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question"><span>Peut-on faire un appel vidéo avant que je vienne sur place ?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Bien sûr. La plupart de nos clients commencent par des visites vidéo en direct avant de se déplacer.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question"><span>Vous aidez pour la gestion du bien après l'achat ?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Oui, nous vous mettons en relation avec des gestionnaires de biens locaux de confiance, pour la location courte comme longue durée.</p></div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../footer.php'; ?>
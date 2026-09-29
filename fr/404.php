<?php
http_response_code(404);
$lang = 'fr';
$pageKey = '404';
$noindex = true;
$pageTitle = 'Page introuvable | Real Estate in Playa del Carmen';
$pageDescription = 'La page que vous cherchez n\'existe pas. Découvrez plutôt nos propriétés, nos quartiers et notre guide d\'investissement.';
include __DIR__ . '/../header.php';
?>
<section class="section" style="min-height:60vh; display:flex; align-items:center;">
  <div class="container text-center">
    <span class="eyebrow">404</span>
    <h1>Cette page a été emportée par la marée 🌊</h1>
    <p style="max-width:520px; margin:0 auto var(--space-5);">La page que vous cherchez n'existe plus ou l'URL est incorrecte. Remettons-vous sur la bonne route.</p>
    <div class="hero-actions" style="justify-content:center;">
      <a href="<?= L('home') ?>" class="btn btn-primary">Retour à l'accueil</a>
      <a href="<?= L('properties') ?>" class="btn btn-ghost">Voir les propriétés</a>
    </div>
  </div>
</section>
<?php include __DIR__ . '/../footer.php'; ?>
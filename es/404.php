<?php
http_response_code(404);
$lang = 'es';
$pageKey = '404';
$noindex = true;
$pageTitle = 'Página no encontrada | Real Estate in Playa del Carmen';
$pageDescription = 'La página que buscas no existe. Explora nuestras propiedades, barrios y guía de inversión.';
include __DIR__ . '/../header.php';
?>
<section class="section" style="min-height:60vh; display:flex; align-items:center;">
  <div class="container text-center">
    <span class="eyebrow">404</span>
    <h1>Esta página se la llevó la marea 🌊</h1>
    <p style="max-width:520px; margin:0 auto var(--space-5);">La página que buscas ya no existe o la URL es incorrecta. Te ayudamos a volver al camino.</p>
    <div class="hero-actions" style="justify-content:center;">
      <a href="<?= L('home') ?>" class="btn btn-primary">Volver al inicio</a>
      <a href="<?= L('properties') ?>" class="btn btn-ghost">Ver propiedades</a>
    </div>
  </div>
</section>
<?php include __DIR__ . '/../footer.php'; ?>
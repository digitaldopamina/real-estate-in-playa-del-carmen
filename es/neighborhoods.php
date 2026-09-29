<?php
$lang = 'es';
$pageKey = 'neighborhoods';
$pageTitle = 'Guía de Barrios de Playa del Carmen | Dónde Comprar Propiedad';
$pageDescription = 'Compara los barrios de Playa del Carmen — Centro, Playacar, Zazil-Ha, El Cielo, Coco Beach y Puerto Aventuras — por estilo de vida, precio por m² y potencial de renta.';
$ogImage = 'https://images.pexels.com/photos/31649801/pexels-photo-31649801.jpeg?auto=compress&cs=tinysrgb&h=650&w=940';
include __DIR__ . '/../header.php';

$hoods = [
  [
    'name' => 'Centro / Quinta Avenida',
    'zone' => 'centro',
    'tagline' => 'Caminable y vibrante',
    'img' => 'https://images.pexels.com/photos/31649801/pexels-photo-31649801.jpeg?auto=compress&cs=tinysrgb&h=650',
    'alt' => 'Colorida escena callejera en la Quinta Avenida del centro de Playa del Carmen',
    'desc' => 'El corazón de Playa del Carmen. A pasos de la playa, con restaurantes y vida nocturna a lo largo de la peatonal Quinta Avenida. Ideal para ingresos por renta vacacional gracias a la demanda turística constante.',
    'price' => '$2,800 – $4,200 / m²',
    'best_for' => 'Inversionistas Airbnb, vida caminable',
  ],
  [
    'name' => 'Playacar',
    'zone' => 'playacar',
    'tagline' => 'Privado y familiar',
    'img' => 'https://images.pexels.com/photos/13201411/pexels-photo-13201411.jpeg?auto=compress&cs=tinysrgb&h=650',
    'alt' => 'Villas de lujo en la comunidad privada de Playacar, Playa del Carmen',
    'desc' => 'Una comunidad cerrada planificada al sur del Centro, con campo de golf, acceso a club de playa privado, áreas verdes cuidadas y seguridad 24/7. Muy popular entre familias y jubilados que buscan privacidad.',
    'price' => '$2,500 – $3,800 / m²',
    'best_for' => 'Familias, jubilados, amantes del golf',
  ],
  [
    'name' => 'Zazil-Ha',
    'zone' => 'zazil-ha',
    'tagline' => 'Residencial y tranquilo',
    'img' => 'https://images.pexels.com/photos/20068205/pexels-photo-20068205.jpeg?auto=compress&cs=tinysrgb&h=650',
    'alt' => 'Villa residencial con alberca en Zazil-Ha, Playa del Carmen',
    'desc' => 'Una zona tranquila y mayormente residencial justo al oeste de la carretera de ADO, popular entre expatriados de largo plazo y profesionistas locales. Buen punto de entrada en precio, con fácil acceso a escuelas y supermercados.',
    'price' => '$1,400 – $2,200 / m²',
    'best_for' => 'Residentes de largo plazo, compradores que buscan valor',
  ],
  [
    'name' => 'El Cielo',
    'zone' => 'el-cielo',
    'tagline' => 'Frente al mar y exclusivo',
    'img' => 'https://images.pexels.com/photos/34271104/pexels-photo-34271104.jpeg?auto=compress&cs=tinysrgb&h=650',
    'alt' => 'Vista al mar desde un balcón en el barrio El Cielo, Playa del Carmen',
    'desc' => 'Al norte del Centro, una franja más nueva de torres frente al mar y desarrollos boutique, con una costa más tranquila que la Quinta Avenida. Gran potencial de plusvalía mientras la zona sigue desarrollándose.',
    'price' => '$3,200 – $5,000 / m²',
    'best_for' => 'Vida frente al mar, apuesta por plusvalía',
  ],
  [
    'name' => 'Coco Beach',
    'zone' => '',
    'tagline' => 'Emergente y estilo resort',
    'img' => 'https://images.pexels.com/photos/6367711/pexels-photo-6367711.jpeg?auto=compress&cs=tinysrgb&h=650',
    'alt' => 'Alberca en azotea estilo resort en la zona de Coco Beach, Playa del Carmen',
    'desc' => 'Al norte de El Cielo, un corredor de estilo resort en rápido crecimiento, con torres de departamentos nuevas, albercas en azotea y acceso directo a la playa. Una entrada más accesible para vivir frente al mar.',
    'price' => '$2,600 – $3,900 / m²',
    'best_for' => 'Desarrollos nuevos, amenidades tipo resort',
  ],
  [
    'name' => 'Puerto Aventuras',
    'zone' => '',
    'tagline' => 'Comunidad con marina, a 20 min al sur',
    'img' => 'https://images.pexels.com/photos/18269735/pexels-photo-18269735.jpeg?auto=compress&cs=tinysrgb&h=650',
    'alt' => 'Comunidad tropical con marina cerca de Puerto Aventuras',
    'desc' => 'Un pueblo autosuficiente con marina, a unos 20 minutos al sur de Playa del Carmen, con campo de golf, delfinario y muelles para embarcaciones. Popular entre aficionados a la navegación y compradores que buscan un ritmo más tranquilo.',
    'price' => '$1,900 – $2,900 / m²',
    'best_for' => 'Navegantes, vida tranquila junto a la marina',
  ],
];
?>

<section class="page-hero">
  <div class="page-hero-bg" style="background-image:url('https://images.pexels.com/photos/16147460/pexels-photo-16147460.jpeg?auto=compress&cs=tinysrgb&h=800');"></div>
  <div class="container">
    <div class="breadcrumb" style="color:rgba(255,255,255,0.8);"><a href="<?= L('home') ?>" style="color:white;">Inicio</a><span>/</span><span>Barrios</span></div>
    <h1>Guía de barrios de Playa del Carmen</h1>
    <p>Cada zona tiene su propio precio por m², potencial de renta y estilo de vida. Así eliges la correcta.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="grid grid-3">
      <?php foreach ($hoods as $h): ?>
      <div class="hood-card reveal-on-scroll">
        <img src="<?= $h['img'] ?>" alt="<?= htmlspecialchars($h['alt']) ?>" width="400" height="320" loading="lazy">
        <div class="overlay">
          <span class="tagline"><?= htmlspecialchars($h['tagline']) ?></span>
          <h3><?= htmlspecialchars($h['name']) ?></h3>
          <p><?= htmlspecialchars($h['price']) ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section section-sand">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">A fondo</span>
      <h2>¿Qué barrio se adapta a tus objetivos?</h2>
    </div>
    <?php foreach ($hoods as $i => $h): ?>
    <div class="z-section <?= $i % 2 === 1 ? 'reverse' : '' ?> reveal-on-scroll" style="margin-bottom:var(--space-7);">
      <div class="z-media">
        <img src="<?= $h['img'] ?>" alt="<?= htmlspecialchars($h['alt']) ?>" width="600" height="420" loading="lazy">
      </div>
      <div>
        <span class="eyebrow"><?= htmlspecialchars($h['tagline']) ?></span>
        <h3 style="font-size:1.8rem; color:var(--primary-dark); font-family:var(--font-head);"><?= htmlspecialchars($h['name']) ?></h3>
        <p><?= htmlspecialchars($h['desc']) ?></p>
        <div class="feature-list">
          <div class="feature-item">
            <div class="icon-badge"><i data-lucide="dollar-sign" aria-hidden="true"></i></div>
            <div><h4>Precio típico</h4><p><?= htmlspecialchars($h['price']) ?></p></div>
          </div>
          <div class="feature-item">
            <div class="icon-badge"><i data-lucide="users" aria-hidden="true"></i></div>
            <div><h4>Ideal para</h4><p><?= htmlspecialchars($h['best_for']) ?></p></div>
          </div>
        </div>
        <a href="<?= L('properties') ?><?= $h['zone'] !== '' ? '?zone=' . urlencode($h['zone']) : '' ?>" class="btn btn-secondary" style="margin-top:var(--space-3);">Ver propiedades en esta zona</a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cta-band">
      <div>
        <h2>¿Aún no sabes dónde comprar?</h2>
        <p>Cuéntanos tu estilo de vida y tu presupuesto: te recomendamos el barrio ideal en una sola llamada.</p>
      </div>
      <a href="<?= L('contact') ?>" class="btn btn-primary">Recibir asesoría personalizada</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../footer.php'; ?>
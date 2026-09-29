<?php
$lang = 'es';
$pageKey = 'properties';
$pageTitle = 'Propiedades en Venta en Playa del Carmen | Departamentos, Villas y Terrenos';
$pageDescription = 'Explora departamentos, villas, unidades en preventa y terrenos en venta en Playa del Carmen: Centro, Playacar, Zazil-Ha, El Cielo y más.';
$ogImage = 'https://images.pexels.com/photos/20192218/pexels-photo-20192218.jpeg?auto=compress&cs=tinysrgb&h=650&w=940';
include __DIR__ . '/../header.php';

$zoneNames = ['centro'=>'Centro','playacar'=>'Playacar','zazil-ha'=>'Zazil-Ha','el-cielo'=>'El Cielo','selvamar'=>'Selvamar','region15'=>'Región 15'];

$properties = [
  ['title'=>'Departamento 2 rec. — Playacar Fase II','zone'=>'playacar','type'=>'condo','price'=>285000,'beds'=>2,'baths'=>2,'m2'=>105,'tag'=>'Vista al mar','img'=>'https://images.pexels.com/photos/37510897/pexels-photo-37510897.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Balcón de departamento moderno con vista al mar en Playacar'],
  ['title'=>'Penthouse con roof top — Quinta Avenida','zone'=>'centro','type'=>'condo','price'=>650000,'beds'=>3,'baths'=>3,'m2'=>190,'tag'=>'Penthouse','img'=>'https://images.pexels.com/photos/20192218/pexels-photo-20192218.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Terraza de penthouse cerca de la Quinta Avenida en Playa del Carmen'],
  ['title'=>'Villa contemporánea — Selvamar','zone'=>'selvamar','type'=>'villa','price'=>420000,'beds'=>3,'baths'=>4,'m2'=>240,'tag'=>'Alberca privada','img'=>'https://images.pexels.com/photos/28915352/pexels-photo-28915352.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Villa contemporánea con alberca privada en Selvamar'],
  ['title'=>'Estudio y 1 rec. — Región 15','zone'=>'region15','type'=>'condo','price'=>145000,'beds'=>1,'baths'=>1,'m2'=>48,'tag'=>'Preventa','img'=>'https://images.pexels.com/photos/8089172/pexels-photo-8089172.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Interior luminoso de un estudio en preventa'],
  ['title'=>'Villa familiar con jardín — Zazil-Ha','zone'=>'zazil-ha','type'=>'villa','price'=>365000,'beds'=>4,'baths'=>3,'m2'=>280,'tag'=>'Casa familiar','img'=>'https://images.pexels.com/photos/20068205/pexels-photo-20068205.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Villa con jardín y alberca rodeada de vegetación tropical'],
  ['title'=>'Departamento frente al mar 1 rec. — El Cielo','zone'=>'el-cielo','type'=>'condo','price'=>310000,'beds'=>1,'baths'=>1,'m2'=>72,'tag'=>'Frente al mar','img'=>'https://images.pexels.com/photos/34271104/pexels-photo-34271104.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Balcón con vista al mar en El Cielo, Playa del Carmen'],
  ['title'=>'Loft moderno — Centro','zone'=>'centro','type'=>'condo','price'=>198000,'beds'=>1,'baths'=>1,'m2'=>65,'tag'=>'A pie de la playa','img'=>'https://images.pexels.com/photos/7167073/pexels-photo-7167073.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Sala de un loft moderno en el centro de Playa del Carmen'],
  ['title'=>'Villa en comunidad cerrada — Playacar Fase I','zone'=>'playacar','type'=>'villa','price'=>780000,'beds'=>4,'baths'=>4,'m2'=>340,'tag'=>'Campo de golf','img'=>'https://images.pexels.com/photos/13201411/pexels-photo-13201411.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Villa de lujo cerca del campo de golf en Playacar'],
  ['title'=>'Lote residencial — Región 15','zone'=>'region15','type'=>'lot','price'=>95000,'beds'=>0,'baths'=>0,'m2'=>350,'tag'=>'Construye a tu gusto','img'=>'https://images.pexels.com/photos/35410014/pexels-photo-35410014.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Lote de desarrollo residencial en Playa del Carmen'],
];
?>

<section class="page-hero">
  <div class="page-hero-bg" style="background-image:url('https://images.pexels.com/photos/16147201/pexels-photo-16147201.jpeg?auto=compress&cs=tinysrgb&h=800');"></div>
  <div class="container">
    <div class="breadcrumb" style="color:rgba(255,255,255,0.8);"><a href="<?= L('home') ?>" style="color:white;">Inicio</a><span>/</span><span>Propiedades</span></div>
    <h1>Propiedades en venta en Playa del Carmen</h1>
    <p>Departamentos, villas, preventa y terrenos, filtrados por zona, tipo, presupuesto y recámaras.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="filters-bar">
      <select id="f-type" aria-label="Tipo de propiedad">
        <option value="">Todos los tipos</option>
        <option value="condo">Departamento</option>
        <option value="villa">Villa</option>
        <option value="lot">Terreno / Lote</option>
      </select>
      <select id="f-zone" aria-label="Barrio">
        <option value="">Todos los barrios</option>
        <option value="centro">Centro / Quinta Avenida</option>
        <option value="playacar">Playacar</option>
        <option value="zazil-ha">Zazil-Ha</option>
        <option value="el-cielo">El Cielo</option>
        <option value="selvamar">Selvamar</option>
        <option value="region15">Región 15</option>
      </select>
      <select id="f-budget" aria-label="Presupuesto">
        <option value="">Cualquier presupuesto</option>
        <option value="200000">Hasta $200,000</option>
        <option value="400000">Hasta $400,000</option>
        <option value="700000">Hasta $700,000</option>
        <option value="9999999">Más de $700,000</option>
      </select>
      <select id="f-beds" aria-label="Recámaras">
        <option value="">Cualquier número de recámaras</option>
        <option value="1">1+</option>
        <option value="2">2+</option>
        <option value="3">3+</option>
        <option value="4">4+</option>
      </select>
      <span class="results-count" id="results-count"><?= count($properties) ?> propiedades</span>
    </div>

    <div class="grid grid-4" id="property-grid">
      <?php foreach ($properties as $p): ?>
      <article class="property-card reveal-on-scroll" data-type="<?= $p['type'] ?>" data-zone="<?= $p['zone'] ?>" data-price="<?= $p['price'] ?>" data-beds="<?= $p['beds'] ?>">
        <div class="property-media">
          <img src="<?= $p['img'] ?>" alt="<?= htmlspecialchars($p['alt']) ?>" width="400" height="230" loading="lazy">
          <span class="property-tag"><?= htmlspecialchars($p['tag']) ?></span>
          <span class="property-price">$<?= number_format($p['price']) ?></span>
        </div>
        <div class="property-body">
          <h3><?= htmlspecialchars($p['title']) ?></h3>
          <p class="property-loc"><i data-lucide="map-pin" aria-hidden="true"></i> <?= htmlspecialchars($zoneNames[$p['zone']]) ?>, Playa del Carmen</p>
          <div class="property-specs">
            <?php if ($p['type'] !== 'lot'): ?>
            <span><i data-lucide="bed-double" aria-hidden="true"></i> <?= $p['beds'] ?> rec.</span>
            <span><i data-lucide="bath" aria-hidden="true"></i> <?= $p['baths'] ?> baños</span>
            <?php endif; ?>
            <span><i data-lucide="ruler" aria-hidden="true"></i> <?= $p['m2'] ?> m²</span>
          </div>
        </div>
      </article>
      <?php endforeach; ?>
    </div>

    <p id="no-results" style="display:none; text-align:center; padding: var(--space-6) 0; color: var(--ink-soft);">Ninguna propiedad coincide con tus filtros por ahora. Amplía tu búsqueda o <a href="<?= L('contact') ?>" style="color:var(--primary); font-weight:600;">contáctanos</a>: llegan nuevas propiedades cada semana.</p>
  </div>
</section>

<section class="section section-primary">
  <div class="container">
    <div class="cta-band" style="background:none; padding:0;">
      <div>
        <h2>¿No encuentras lo que buscas?</h2>
        <p>Tenemos propiedades fuera de mercado y unidades en preventa aún sin publicar. Cuéntanos qué necesitas.</p>
      </div>
      <a href="<?= L('contact') ?>" class="btn btn-primary">Solicitar una búsqueda personalizada</a>
    </div>
  </div>
</section>

<script>
  const LABELS = { one: 'propiedad', many: 'propiedades' };
  const filterType = document.getElementById('f-type');
  const filterZone = document.getElementById('f-zone');
  const filterBudget = document.getElementById('f-budget');
  const filterBeds = document.getElementById('f-beds');
  const cards = Array.from(document.querySelectorAll('#property-grid .property-card'));
  const resultsCount = document.getElementById('results-count');
  const noResults = document.getElementById('no-results');

  function applyFilters() {
    let visible = 0;
    cards.forEach(card => {
      const type = card.dataset.type;
      const zone = card.dataset.zone;
      const price = parseInt(card.dataset.price, 10);
      const beds = parseInt(card.dataset.beds, 10);

      const matchType = !filterType.value || type === filterType.value;
      const matchZone = !filterZone.value || zone === filterZone.value;
      const matchBudget = !filterBudget.value || price <= parseInt(filterBudget.value, 10);
      const matchBeds = !filterBeds.value || beds >= parseInt(filterBeds.value, 10);

      const show = matchType && matchZone && matchBudget && matchBeds;
      card.style.display = show ? '' : 'none';
      if (show) visible++;
    });
    resultsCount.textContent = visible + ' ' + (visible === 1 ? LABELS.one : LABELS.many);
    noResults.style.display = visible === 0 ? 'block' : 'none';
  }

  [filterType, filterZone, filterBudget, filterBeds].forEach(el => el.addEventListener('change', applyFilters));

  // Rellenar desde los parámetros de la URL (buscador de la página de inicio)
  const params = new URLSearchParams(window.location.search);
  if (params.get('type')) filterType.value = params.get('type');
  if (params.get('zone')) filterZone.value = params.get('zone');
  if (params.get('budget')) filterBudget.value = params.get('budget');
  if (params.get('beds')) filterBeds.value = params.get('beds');
  applyFilters();
</script>

<?php include __DIR__ . '/../footer.php'; ?>
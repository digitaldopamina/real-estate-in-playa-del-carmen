<?php
$lang = 'fr';
$pageKey = 'properties';
$pageTitle = 'Propriétés à Vendre à Playa del Carmen | Condos, Villas et Terrains';
$pageDescription = 'Parcourez les condos, villas, biens en programme neuf et terrains à vendre à Playa del Carmen : Centro, Playacar, Zazil-Ha, El Cielo et plus encore.';
$ogImage = 'https://images.pexels.com/photos/20192218/pexels-photo-20192218.jpeg?auto=compress&cs=tinysrgb&h=650&w=940';
include __DIR__ . '/../header.php';

$zoneNames = ['centro'=>'Centro','playacar'=>'Playacar','zazil-ha'=>'Zazil-Ha','el-cielo'=>'El Cielo','selvamar'=>'Selvamar','region15'=>'Region 15'];

$properties = [
  ['title'=>'Condo 2 ch. — Playacar Phase II','zone'=>'playacar','type'=>'condo','price'=>285000,'beds'=>2,'baths'=>2,'m2'=>105,'tag'=>'Vue mer','img'=>'https://images.pexels.com/photos/37510897/pexels-photo-37510897.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Balcon d\'un condo moderne avec vue sur l\'océan à Playacar'],
  ['title'=>'Penthouse avec rooftop — 5e Avenue','zone'=>'centro','type'=>'condo','price'=>650000,'beds'=>3,'baths'=>3,'m2'=>190,'tag'=>'Penthouse','img'=>'https://images.pexels.com/photos/20192218/pexels-photo-20192218.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Terrasse d\'un penthouse près de la 5e Avenue à Playa del Carmen'],
  ['title'=>'Villa contemporaine — Selvamar','zone'=>'selvamar','type'=>'villa','price'=>420000,'beds'=>3,'baths'=>4,'m2'=>240,'tag'=>'Piscine privée','img'=>'https://images.pexels.com/photos/28915352/pexels-photo-28915352.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Villa contemporaine avec piscine privée à Selvamar'],
  ['title'=>'Studio et 1 ch. — Region 15','zone'=>'region15','type'=>'condo','price'=>145000,'beds'=>1,'baths'=>1,'m2'=>48,'tag'=>'Programme neuf','img'=>'https://images.pexels.com/photos/8089172/pexels-photo-8089172.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Intérieur lumineux d\'un studio en programme neuf'],
  ['title'=>'Villa familiale avec jardin — Zazil-Ha','zone'=>'zazil-ha','type'=>'villa','price'=>365000,'beds'=>4,'baths'=>3,'m2'=>280,'tag'=>'Maison familiale','img'=>'https://images.pexels.com/photos/20068205/pexels-photo-20068205.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Villa avec jardin et piscine entourée de végétation tropicale'],
  ['title'=>'Condo 1 ch. face à la mer — El Cielo','zone'=>'el-cielo','type'=>'condo','price'=>310000,'beds'=>1,'baths'=>1,'m2'=>72,'tag'=>'Front de mer','img'=>'https://images.pexels.com/photos/34271104/pexels-photo-34271104.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Balcon donnant sur l\'océan à El Cielo, Playa del Carmen'],
  ['title'=>'Loft moderne — Centro','zone'=>'centro','type'=>'condo','price'=>198000,'beds'=>1,'baths'=>1,'m2'=>65,'tag'=>'À pied de la plage','img'=>'https://images.pexels.com/photos/7167073/pexels-photo-7167073.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Salon d\'un loft moderne dans le centre de Playa del Carmen'],
  ['title'=>'Villa en résidence fermée — Playacar Phase I','zone'=>'playacar','type'=>'villa','price'=>780000,'beds'=>4,'baths'=>4,'m2'=>340,'tag'=>'Golf','img'=>'https://images.pexels.com/photos/13201411/pexels-photo-13201411.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Villa de luxe près du terrain de golf de Playacar'],
  ['title'=>'Terrain résidentiel — Region 15','zone'=>'region15','type'=>'lot','price'=>95000,'beds'=>0,'baths'=>0,'m2'=>350,'tag'=>'À construire','img'=>'https://images.pexels.com/photos/35410014/pexels-photo-35410014.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Terrain à bâtir dans un secteur résidentiel de Playa del Carmen'],
];
?>

<section class="page-hero">
  <div class="page-hero-bg" style="background-image:url('https://images.pexels.com/photos/16147201/pexels-photo-16147201.jpeg?auto=compress&cs=tinysrgb&h=800');"></div>
  <div class="container">
    <div class="breadcrumb" style="color:rgba(255,255,255,0.8);"><a href="<?= L('home') ?>" style="color:white;">Accueil</a><span>/</span><span>Propriétés</span></div>
    <h1>Propriétés à vendre à Playa del Carmen</h1>
    <p>Condos, villas, programmes neufs et terrains, filtrés par zone, type, budget et nombre de chambres.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="filters-bar">
      <select id="f-type" aria-label="Type de bien">
        <option value="">Tous types</option>
        <option value="condo">Condo</option>
        <option value="villa">Villa</option>
        <option value="lot">Terrain</option>
      </select>
      <select id="f-zone" aria-label="Quartier">
        <option value="">Tous les quartiers</option>
        <option value="centro">Centro / 5e Avenue</option>
        <option value="playacar">Playacar</option>
        <option value="zazil-ha">Zazil-Ha</option>
        <option value="el-cielo">El Cielo</option>
        <option value="selvamar">Selvamar</option>
        <option value="region15">Region 15</option>
      </select>
      <select id="f-budget" aria-label="Budget">
        <option value="">Tous budgets</option>
        <option value="200000">Jusqu'à 200 000 $</option>
        <option value="400000">Jusqu'à 400 000 $</option>
        <option value="700000">Jusqu'à 700 000 $</option>
        <option value="9999999">Plus de 700 000 $</option>
      </select>
      <select id="f-beds" aria-label="Chambres">
        <option value="">Nombre de chambres</option>
        <option value="1">1+</option>
        <option value="2">2+</option>
        <option value="3">3+</option>
        <option value="4">4+</option>
      </select>
      <span class="results-count" id="results-count"><?= count($properties) ?> propriétés</span>
    </div>

    <div class="grid grid-4" id="property-grid">
      <?php foreach ($properties as $p): ?>
      <article class="property-card reveal-on-scroll" data-type="<?= $p['type'] ?>" data-zone="<?= $p['zone'] ?>" data-price="<?= $p['price'] ?>" data-beds="<?= $p['beds'] ?>">
        <div class="property-media">
          <img src="<?= $p['img'] ?>" alt="<?= htmlspecialchars($p['alt']) ?>" width="400" height="230" loading="lazy">
          <span class="property-tag"><?= htmlspecialchars($p['tag']) ?></span>
          <span class="property-price"><?= number_format($p['price'], 0, ',', "\u{202F}") ?> $</span>
        </div>
        <div class="property-body">
          <h3><?= htmlspecialchars($p['title']) ?></h3>
          <p class="property-loc"><i data-lucide="map-pin" aria-hidden="true"></i> <?= htmlspecialchars($zoneNames[$p['zone']]) ?>, Playa del Carmen</p>
          <div class="property-specs">
            <?php if ($p['type'] !== 'lot'): ?>
            <span><i data-lucide="bed-double" aria-hidden="true"></i> <?= $p['beds'] ?> ch.</span>
            <span><i data-lucide="bath" aria-hidden="true"></i> <?= $p['baths'] ?> sdb</span>
            <?php endif; ?>
            <span><i data-lucide="ruler" aria-hidden="true"></i> <?= $p['m2'] ?> m²</span>
          </div>
        </div>
      </article>
      <?php endforeach; ?>
    </div>

    <p id="no-results" style="display:none; text-align:center; padding: var(--space-6) 0; color: var(--ink-soft);">Aucune propriété ne correspond à vos filtres pour le moment. Élargissez votre recherche ou <a href="<?= L('contact') ?>" style="color:var(--primary); font-weight:600;">contactez-nous</a> : de nouveaux biens arrivent chaque semaine.</p>
  </div>
</section>

<section class="section section-primary">
  <div class="container">
    <div class="cta-band" style="background:none; padding:0;">
      <div>
        <h2>Vous ne trouvez pas le bien idéal ?</h2>
        <p>Nous avons des biens hors marché et des programmes neufs pas encore publiés. Dites-nous ce que vous cherchez.</p>
      </div>
      <a href="<?= L('contact') ?>" class="btn btn-primary">Demander une recherche sur mesure</a>
    </div>
  </div>
</section>

<script>
  const LABELS = { one: 'propriété', many: 'propriétés' };
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

  // Pré-remplissage depuis les paramètres d'URL (barre de recherche de l'accueil)
  const params = new URLSearchParams(window.location.search);
  if (params.get('type')) filterType.value = params.get('type');
  if (params.get('zone')) filterZone.value = params.get('zone');
  if (params.get('budget')) filterBudget.value = params.get('budget');
  if (params.get('beds')) filterBeds.value = params.get('beds');
  applyFilters();
</script>

<?php include __DIR__ . '/../footer.php'; ?>
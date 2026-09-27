<?php
$pageTitle = 'Properties for Sale in Playa del Carmen | Condos, Villas & Land';
$pageDescription = 'Browse condos, villas, pre-construction units and land for sale across Playa del Carmen: Centro, Playacar, Zazil-Ha, El Cielo and more.';
$canonicalPath = '/properties';
$ogImage = 'https://images.pexels.com/photos/20192218/pexels-photo-20192218.jpeg?auto=compress&cs=tinysrgb&h=650&w=940';
include 'header.php';

$properties = [
  ['title'=>'2BR Condo — Playacar Phase II','zone'=>'playacar','type'=>'condo','price'=>285000,'beds'=>2,'baths'=>2,'m2'=>105,'tag'=>'Ocean View','img'=>'https://images.pexels.com/photos/37510897/pexels-photo-37510897.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Modern oceanview condo balcony in Playacar'],
  ['title'=>'Rooftop Penthouse — 5th Avenue','zone'=>'centro','type'=>'condo','price'=>650000,'beds'=>3,'baths'=>3,'m2'=>190,'tag'=>'Penthouse','img'=>'https://images.pexels.com/photos/20192218/pexels-photo-20192218.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Rooftop penthouse terrace near 5th Avenue Playa del Carmen'],
  ['title'=>'Contemporary Villa — Selvamar','zone'=>'selvamar','type'=>'villa','price'=>420000,'beds'=>3,'baths'=>4,'m2'=>240,'tag'=>'Private Pool','img'=>'https://images.pexels.com/photos/28915352/pexels-photo-28915352.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Contemporary villa with private pool in Selvamar'],
  ['title'=>'Studio & 1BR — Region 15','zone'=>'region15','type'=>'condo','price'=>145000,'beds'=>1,'baths'=>1,'m2'=>48,'tag'=>'Pre-construction','img'=>'https://images.pexels.com/photos/8089172/pexels-photo-8089172.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Bright pre-construction studio apartment interior'],
  ['title'=>'Family Villa with Garden — Zazil-Ha','zone'=>'zazil-ha','type'=>'villa','price'=>365000,'beds'=>4,'baths'=>3,'m2'=>280,'tag'=>'Family Home','img'=>'https://images.pexels.com/photos/20068205/pexels-photo-20068205.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Villa with garden and pool surrounded by tropical vegetation'],
  ['title'=>'Beachfront 1BR Condo — El Cielo','zone'=>'el-cielo','type'=>'condo','price'=>310000,'beds'=>1,'baths'=>1,'m2'=>72,'tag'=>'Beachfront','img'=>'https://images.pexels.com/photos/34271104/pexels-photo-34271104.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Balcony overlooking the ocean in El Cielo Playa del Carmen'],
  ['title'=>'Modern Loft — Centro','zone'=>'centro','type'=>'condo','price'=>198000,'beds'=>1,'baths'=>1,'m2'=>65,'tag'=>'Walk to Beach','img'=>'https://images.pexels.com/photos/7167073/pexels-photo-7167073.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Modern loft living room interior in downtown Playa del Carmen'],
  ['title'=>'Gated Community Villa — Playacar Phase I','zone'=>'playacar','type'=>'villa','price'=>780000,'beds'=>4,'baths'=>4,'m2'=>340,'tag'=>'Golf Course','img'=>'https://images.pexels.com/photos/13201411/pexels-photo-13201411.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Luxury villa near golf course in Playacar'],
  ['title'=>'Residential Lot — Region 15','zone'=>'region15','type'=>'lot','price'=>95000,'beds'=>0,'baths'=>0,'m2'=>350,'tag'=>'Build to Suit','img'=>'https://images.pexels.com/photos/35410014/pexels-photo-35410014.jpeg?auto=compress&cs=tinysrgb&h=500','alt'=>'Residential development lot in Playa del Carmen'],
];
?>

<section class="page-hero">
  <div class="page-hero-bg" style="background-image:url('https://images.pexels.com/photos/16147201/pexels-photo-16147201.jpeg?auto=compress&cs=tinysrgb&h=800');"></div>
  <div class="container">
    <div class="breadcrumb" style="color:rgba(255,255,255,0.8);"><a href="/" style="color:white;">Home</a><span>/</span><span>Properties</span></div>
    <h1>Properties for Sale in Playa del Carmen</h1>
    <p>Condos, villas, pre-construction and land — filtered by zone, type, budget and bedrooms.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="filters-bar">
      <select id="f-type">
        <option value="">All Types</option>
        <option value="condo">Condo</option>
        <option value="villa">Villa</option>
        <option value="lot">Land / Lot</option>
      </select>
      <select id="f-zone">
        <option value="">All Neighborhoods</option>
        <option value="centro">Centro / 5th Ave</option>
        <option value="playacar">Playacar</option>
        <option value="zazil-ha">Zazil-Ha</option>
        <option value="el-cielo">El Cielo</option>
        <option value="selvamar">Selvamar</option>
        <option value="region15">Region 15</option>
      </select>
      <select id="f-budget">
        <option value="">Any Budget</option>
        <option value="200000">Up to $200,000</option>
        <option value="400000">Up to $400,000</option>
        <option value="700000">Up to $700,000</option>
        <option value="9999999">$700,000+</option>
      </select>
      <select id="f-beds">
        <option value="">Any Bedrooms</option>
        <option value="1">1+</option>
        <option value="2">2+</option>
        <option value="3">3+</option>
        <option value="4">4+</option>
      </select>
      <span class="results-count" id="results-count"><?php echo count($properties); ?> properties</span>
    </div>

    <div class="grid grid-4" id="property-grid">
      <?php foreach ($properties as $p): ?>
      <article class="property-card reveal-on-scroll" data-type="<?php echo $p['type']; ?>" data-zone="<?php echo $p['zone']; ?>" data-price="<?php echo $p['price']; ?>" data-beds="<?php echo $p['beds']; ?>">
        <div class="property-media">
          <img src="<?php echo $p['img']; ?>" alt="<?php echo htmlspecialchars($p['alt']); ?>" width="400" height="230" loading="lazy">
          <span class="property-tag"><?php echo htmlspecialchars($p['tag']); ?></span>
          <span class="property-price">$<?php echo number_format($p['price']); ?></span>
        </div>
        <div class="property-body">
          <h3><?php echo htmlspecialchars($p['title']); ?></h3>
          <p class="property-loc"><i data-lucide="map-pin" aria-hidden="true"></i> <?php echo ucwords(str_replace('-', ' ', $p['zone'])); ?>, Playa del Carmen</p>
          <div class="property-specs">
            <span><i data-lucide="bed-double" aria-hidden="true"></i> <?php echo $p['beds']; ?> bed</span>
            <span><i data-lucide="bath" aria-hidden="true"></i> <?php echo $p['baths']; ?> bath</span>
            <span><i data-lucide="ruler" aria-hidden="true"></i> <?php echo $p['m2']; ?> m²</span>
          </div>
        </div>
      </article>
      <?php endforeach; ?>
    </div>

    <p id="no-results" style="display:none; text-align:center; padding: var(--space-6) 0; color: var(--ink-soft);">No properties match your filters yet. Try widening your search or <a href="/contact" style="color:var(--primary); font-weight:600;">contact us</a> — new listings arrive every week.</p>
  </div>
</section>

<section class="section section-primary">
  <div class="container">
    <div class="cta-band" style="background:none; padding:0;">
      <div>
        <h2>Don't see the right fit?</h2>
        <p>We have off-market listings and pre-construction units not published yet. Tell us what you're looking for.</p>
      </div>
      <a href="/contact" class="btn btn-primary">Request a Custom Search</a>
    </div>
  </div>
</section>

<script>
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
    resultsCount.textContent = visible + (visible === 1 ? ' property' : ' properties');
    noResults.style.display = visible === 0 ? 'block' : 'none';
  }

  [filterType, filterZone, filterBudget, filterBeds].forEach(el => el.addEventListener('change', applyFilters));

  // Pre-fill from URL params (from homepage search bar)
  const params = new URLSearchParams(window.location.search);
  if (params.get('type')) filterType.value = params.get('type');
  if (params.get('zone')) filterZone.value = params.get('zone');
  if (params.get('budget')) filterBudget.value = params.get('budget');
  if (params.get('beds')) filterBeds.value = params.get('beds');
  applyFilters();
</script>

<?php include 'footer.php'; ?>
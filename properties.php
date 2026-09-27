<?php
$pageTitle = 'Properties for Sale in Playa del Carmen | Condos, Villas & Land';
$pageDescription = 'Browse condos, villas, pre-construction units and land for sale across Playa del Carmen: Centro, Playacar, Zazil-Ha, El Cielo and more.';
$canonicalPath = '/properties';
$ogImage = 'https://images.pexels.com/photos/20192218/pexels-photo-20192218.jpeg?auto=compress&cs=tinysrgb&h=650&w=940';
include 'header.php';

$properties = [
  [
    'title'   => 'House for sale in Tigrillo Playa Del Carmen',
    'zone'    => 'tigrillo',
    'type'    => 'house',
    'price'   => 350000,
    'beds'    => 3,
    'baths'   => 3,
    'm2'      => 216,
    'tag'     => 'Private Pool',
    'img'     => 'https://realestateinplayadelcarmen.com/wp-content/uploads/2023/04/casa-tigrillo-alberca-4-768x581.png',
    'alt'     => 'House for sale in Tigrillo Playa Del Carmen',
    'address' => 'Calle olmos y cypres, El Tigrillo, Playa Del Carmen',
    'desc'    => 'Spacious house with pool, BBQ, A/C, fully equipped kitchen and parking. Secure gated community with security 24/7, basketball court and kids area.',
    'slug'    => 'casa-tigrillo-playa-del-carmen',
  ],
  [
    'title'   => 'Buy luxury apartment in XAMA Tulum',
    'zone'    => 'tulum',
    'type'    => 'condo',
    'price'   => 371124,
    'beds'    => 2,
    'baths'   => 2,
    'm2'      => 114,
    'tag'     => 'Rooftop Pool',
    'img'     => 'https://realestateinplayadelcarmen.com/wp-content/uploads/2023/04/AEREA-1-768x583.jpeg',
    'alt'     => 'Buy luxury apartment in XAMA Tulum',
    'address' => 'Aldea Zama, Tulum',
    'desc'    => 'Exclusive condo in Aldea Zama. Private rooftop pool, gym, front desk, elevator and lock-off system. 5 min walk to shops, supermarkets and restaurants.',
    'slug'    => 'xama-luxury-condos',
  ],
  [
    'title'   => 'Buy Condo MENNESE 38, Studio Apartment Playa Del Carmen',
    'zone'    => 'centro',
    'type'    => 'condo',
    'price'   => 130000,
    'beds'    => 0,
    'baths'   => 1,
    'm2'      => 35,
    'tag'     => '5 min Beach',
    'img'     => 'https://realestateinplayadelcarmen.com/wp-content/uploads/2023/04/6-768x576.jpeg',
    'alt'     => 'Condo MENNESE 38 Studio Apartment Playa Del Carmen',
    'address' => 'Calle 38 Norte esq Av. 25, Playa Del Carmen',
    'desc'    => 'Turnkey studio with infinity pool, lounge, bar & grill, solarium and 24/7 security. Just 5 min walk from 5th Avenue and the beach.',
    'slug'    => 'condo-mennese-38',
  ],
  [
    'title'   => 'Studio for sale in Playa Del Carmen MELIORA 307',
    'zone'    => 'centro',
    'type'    => 'condo',
    'price'   => 160000,
    'beds'    => 0,
    'baths'   => 1,
    'm2'      => 29,
    'tag'     => 'Ocean View',
    'img'     => 'https://realestateinplayadelcarmen.com/wp-content/uploads/2023/04/2-1-768x576.jpg',
    'alt'     => 'Studio MELIORA 307 Playa Del Carmen',
    'address' => 'Calle 10 Norte Bis entre Ave. 20 y 25, Centro, Playa del Carmen',
    'desc'    => 'Condohotel studio with rooftop ocean view, jacuzzi, gym and reception. Ideal for vacation rental income. 3 blocks from 5th Avenue.',
    'slug'    => 'condo-meliora-307',
  ],
  [
    'title'   => 'Condo for sale Playa Del Carmen TAAK 203',
    'zone'    => 'ejidal',
    'type'    => 'condo',
    'price'   => 111000,
    'beds'    => 1,
    'baths'   => 1,
    'm2'      => 44,
    'tag'     => 'Rooftop Pool',
    'img'     => 'https://realestateinplayadelcarmen.com/wp-content/uploads/2023/04/3-1-3-768x581.png',
    'alt'     => 'Condo TAAK 203 Playa Del Carmen',
    'address' => 'Calle 33 Sur Ejidal, Playa del Carmen',
    'desc'    => 'Second floor condo in Zona Diamante. Rooftop pool, BBQ grill, gym. Steps from Centro Maya shopping center with cinema, supermarkets and banks.',
    'slug'    => 'condo-taak-203',
  ],
  [
    'title'   => 'Lands for sale — Francisco Uhmay',
    'zone'    => 'tulum',
    'type'    => 'lot',
    'price'   => 55000,
    'beds'    => 0,
    'baths'   => 0,
    'm2'      => 700,
    'tag'     => 'Land 700–900 m²',
    'img'     => 'https://realestateinplayadelcarmen.com/wp-content/uploads/2023/04/WhatsApp-Image-2023-04-12-at-5.12.43-PM-768x576.jpeg',
    'alt'     => 'Land for sale Francisco Uhmay between Tulum and Coba',
    'address' => 'Between Tulum and Coba, Quintana Roo',
    'desc'    => 'Plots of 700 to 900 m² located between Tulum and Coba. Ideal for eco-lodge or private villa development in a high-growth area.',
    'slug'    => '',
  ],
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
        <option value="">All Zones</option>
        <option value="centro">Centro / 5th Ave</option>
        <option value="tigrillo">El Tigrillo</option>
        <option value="ejidal">Zona Ejidal</option>
        <option value="tulum">Tulum</option>
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
          <?php if (!empty($p['slug'])): ?>
          <h3><a href="/<?php echo $p['slug']; ?>" style="color:inherit;text-decoration:none;"><?php echo htmlspecialchars($p['title']); ?></a></h3>
          <?php else: ?>
          <h3><?php echo htmlspecialchars($p['title']); ?></h3>
          <?php endif; ?>
          <p class="property-loc"><i data-lucide="map-pin" aria-hidden="true"></i> <?php echo htmlspecialchars($p['address']); ?></p>
          <div class="property-specs">
            <?php if ($p['beds'] > 0): ?>
            <span><i data-lucide="bed-double" aria-hidden="true"></i> <?php echo $p['beds']; ?> bed</span>
            <?php else: ?>
            <span><i data-lucide="bed-double" aria-hidden="true"></i> Studio</span>
            <?php endif; ?>
            <span><i data-lucide="bath" aria-hidden="true"></i> <?php echo $p['baths']; ?> bath</span>
            <span><i data-lucide="ruler" aria-hidden="true"></i> <?php echo $p['m2']; ?> m²</span>
          </div>
          <p style="font-size:0.88rem;color:var(--ink-soft);margin-top:0.5rem;line-height:1.4;"><?php echo htmlspecialchars($p['desc']); ?></p>
          <?php if (!empty($p['slug'])): ?>
          <a href="/<?php echo $p['slug']; ?>" class="btn btn-ghost" style="margin-top:0.75rem;font-size:0.85rem;padding:0.4rem 1rem;">View Details <i data-lucide="arrow-right" aria-hidden="true"></i></a>
          <?php endif; ?>
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
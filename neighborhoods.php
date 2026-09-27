<?php
$pageTitle = 'Playa del Carmen Neighborhoods Guide | Where to Buy Property';
$pageDescription = 'Compare Playa del Carmen neighborhoods — Centro, Playacar, Zazil-Ha, El Cielo, Coco Beach and Puerto Aventuras — for lifestyle, price per m² and rental potential.';
$canonicalPath = '/neighborhoods';
$ogImage = 'https://images.pexels.com/photos/31649801/pexels-photo-31649801.jpeg?auto=compress&cs=tinysrgb&h=650&w=940';
include 'header.php';

$hoods = [
  [
    'name' => 'Centro / 5th Avenue',
    'tagline' => 'Walkable & vibrant',
    'img' => 'https://images.pexels.com/photos/31649801/pexels-photo-31649801.jpeg?auto=compress&cs=tinysrgb&h=650',
    'alt' => 'Colorful street scene on Fifth Avenue in downtown Playa del Carmen',
    'desc' => 'The beating heart of Playa del Carmen. Steps from the beach, restaurants and nightlife along the pedestrian Quinta Avenida. Best for short-term rental income thanks to constant tourist demand.',
    'price' => '$2,800 – $4,200 / m²',
    'best_for' => 'Airbnb investors, walkable lifestyle',
  ],
  [
    'name' => 'Playacar',
    'tagline' => 'Gated & family-friendly',
    'img' => 'https://images.pexels.com/photos/13201411/pexels-photo-13201411.jpeg?auto=compress&cs=tinysrgb&h=650',
    'alt' => 'Luxury gated community villas in Playacar Playa del Carmen',
    'desc' => 'A master-planned gated community south of Centro with golf course, private beach club access, lush landscaping and 24/7 security. Popular with families and retirees seeking privacy.',
    'price' => '$2,500 – $3,800 / m²',
    'best_for' => 'Families, retirees, golf lovers',
  ],
  [
    'name' => 'Zazil-Ha',
    'tagline' => 'Quiet residential',
    'img' => 'https://images.pexels.com/photos/20068205/pexels-photo-20068205.jpeg?auto=compress&cs=tinysrgb&h=650',
    'alt' => 'Residential villa with pool in Zazil-Ha Playa del Carmen',
    'desc' => 'A calm, mostly residential area just west of the ADO highway, popular with long-term expats and local professionals. Good value entry point with easy access to schools and supermarkets.',
    'price' => '$1,400 – $2,200 / m²',
    'best_for' => 'Long-term residents, value buyers',
  ],
  [
    'name' => 'El Cielo',
    'tagline' => 'Beachfront & upscale',
    'img' => 'https://images.pexels.com/photos/34271104/pexels-photo-34271104.jpeg?auto=compress&cs=tinysrgb&h=650',
    'alt' => 'Beachfront balcony view in El Cielo neighborhood Playa del Carmen',
    'desc' => 'North of Centro, a newer stretch of beachfront towers and boutique developments with a quieter shoreline than 5th Avenue. Strong appreciation potential as the area continues to develop.',
    'price' => '$3,200 – $5,000 / m²',
    'best_for' => 'Beachfront lifestyle, appreciation plays',
  ],
  [
    'name' => 'Coco Beach',
    'tagline' => 'Emerging & resort-style',
    'img' => 'https://images.pexels.com/photos/6367711/pexels-photo-6367711.jpeg?auto=compress&cs=tinysrgb&h=650',
    'alt' => 'Resort-style rooftop pool in Coco Beach area Playa del Carmen',
    'desc' => 'North of El Cielo, a fast-growing resort-style corridor with newer high-rise condos, rooftop pools and direct beach access. More affordable entry point for beachfront living.',
    'price' => '$2,600 – $3,900 / m²',
    'best_for' => 'New developments, resort amenities',
  ],
  [
    'name' => 'Puerto Aventuras',
    'tagline' => 'Marina community, 20 min south',
    'img' => 'https://images.pexels.com/photos/18269735/pexels-photo-18269735.jpeg?auto=compress&cs=tinysrgb&h=650',
    'alt' => 'Tropical marina resort community near Puerto Aventuras',
    'desc' => 'A self-contained marina town about 20 minutes south of Playa del Carmen with a golf course, dolphinarium and boat slips. Popular with boating enthusiasts and buyers wanting a quieter pace.',
    'price' => '$1,900 – $2,900 / m²',
    'best_for' => 'Boaters, quiet marina lifestyle',
  ],
];
?>

<section class="page-hero">
  <div class="page-hero-bg" style="background-image:url('https://images.pexels.com/photos/16147460/pexels-photo-16147460.jpeg?auto=compress&cs=tinysrgb&h=800');"></div>
  <div class="container">
    <div class="breadcrumb" style="color:rgba(255,255,255,0.8);"><a href="/" style="color:white;">Home</a><span>/</span><span>Neighborhoods</span></div>
    <h1>Playa del Carmen Neighborhoods Guide</h1>
    <p>Every area has its own price per m², rental potential and lifestyle. Here's how to pick the right one.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="grid grid-3">
      <?php foreach ($hoods as $h): ?>
      <div class="hood-card reveal-on-scroll">
        <img src="<?php echo $h['img']; ?>" alt="<?php echo htmlspecialchars($h['alt']); ?>" width="400" height="320" loading="lazy">
        <div class="overlay">
          <span class="tagline"><?php echo htmlspecialchars($h['tagline']); ?></span>
          <h3><?php echo htmlspecialchars($h['name']); ?></h3>
          <p><?php echo htmlspecialchars($h['price']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section section-sand">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Deep Dive</span>
      <h2>Which neighborhood fits your goals?</h2>
    </div>
    <?php foreach ($hoods as $i => $h): ?>
    <div class="z-section <?php echo $i % 2 === 1 ? 'reverse' : ''; ?> reveal-on-scroll" style="margin-bottom:var(--space-7);">
      <div class="z-media">
        <img src="<?php echo $h['img']; ?>" alt="<?php echo htmlspecialchars($h['alt']); ?>" width="600" height="420" loading="lazy">
      </div>
      <div>
        <span class="eyebrow"><?php echo htmlspecialchars($h['tagline']); ?></span>
        <h3 style="font-size:1.8rem; color:var(--primary-dark); font-family:var(--font-head);"><?php echo htmlspecialchars($h['name']); ?></h3>
        <p><?php echo htmlspecialchars($h['desc']); ?></p>
        <div class="feature-list">
          <div class="feature-item">
            <div class="icon-badge"><i data-lucide="dollar-sign" aria-hidden="true"></i></div>
            <div><h4>Typical price</h4><p><?php echo htmlspecialchars($h['price']); ?></p></div>
          </div>
          <div class="feature-item">
            <div class="icon-badge"><i data-lucide="users" aria-hidden="true"></i></div>
            <div><h4>Best for</h4><p><?php echo htmlspecialchars($h['best_for']); ?></p></div>
          </div>
        </div>
        <a href="/properties?zone=<?php echo urlencode(strtolower(str_replace([' ', '/'], ['-', ''], explode(' /', $h['name'])[0]))); ?>" class="btn btn-secondary" style="margin-top:var(--space-3);">See Properties Here</a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cta-band">
      <div>
        <h2>Still not sure where to buy?</h2>
        <p>Tell us your lifestyle and budget — we'll recommend the right neighborhood in one call.</p>
      </div>
      <a href="/contact" class="btn btn-primary">Get Personalized Advice</a>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
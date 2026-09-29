<?php
$lang = 'fr';
$pageKey = 'neighborhoods';
$pageTitle = 'Guide des Quartiers de Playa del Carmen | Où Acheter un Bien Immobilier';
$pageDescription = 'Comparez les quartiers de Playa del Carmen — Centro, Playacar, Zazil-Ha, El Cielo, Coco Beach et Puerto Aventuras — selon le style de vie, le prix au m² et le potentiel locatif.';
$ogImage = 'https://images.pexels.com/photos/31649801/pexels-photo-31649801.jpeg?auto=compress&cs=tinysrgb&h=650&w=940';
include __DIR__ . '/../header.php';

$hoods = [
  [
    'name' => 'Centro / 5e Avenue',
    'zone' => 'centro',
    'tagline' => 'Piéton et animé',
    'img' => 'https://images.pexels.com/photos/31649801/pexels-photo-31649801.jpeg?auto=compress&cs=tinysrgb&h=650',
    'alt' => 'Scène de rue colorée sur la 5e Avenue, dans le centre de Playa del Carmen',
    'desc' => 'Le cœur battant de Playa del Carmen. À deux pas de la plage, avec restaurants et vie nocturne le long de la Quinta Avenida piétonne. Idéal pour les revenus de location courte durée grâce à une demande touristique constante.',
    'price' => '2 800 – 4 200 $ / m²',
    'best_for' => 'Investisseurs Airbnb, vie à pied',
  ],
  [
    'name' => 'Playacar',
    'zone' => 'playacar',
    'tagline' => 'Résidence fermée et familiale',
    'img' => 'https://images.pexels.com/photos/13201411/pexels-photo-13201411.jpeg?auto=compress&cs=tinysrgb&h=650',
    'alt' => 'Villas de luxe dans la résidence fermée de Playacar, Playa del Carmen',
    'desc' => 'Une communauté fermée planifiée au sud de Centro, avec parcours de golf, accès à un beach club privé, espaces verts soignés et sécurité 24h/24. Très prisée des familles et des retraités en quête d\'intimité.',
    'price' => '2 500 – 3 800 $ / m²',
    'best_for' => 'Familles, retraités, amateurs de golf',
  ],
  [
    'name' => 'Zazil-Ha',
    'zone' => 'zazil-ha',
    'tagline' => 'Résidentiel et calme',
    'img' => 'https://images.pexels.com/photos/20068205/pexels-photo-20068205.jpeg?auto=compress&cs=tinysrgb&h=650',
    'alt' => 'Villa résidentielle avec piscine à Zazil-Ha, Playa del Carmen',
    'desc' => 'Un secteur calme, surtout résidentiel, juste à l\'ouest de l\'autoroute ADO, apprécié des expatriés de longue durée et des professionnels locaux. Un bon point d\'entrée en termes de prix, avec un accès facile aux écoles et aux supermarchés.',
    'price' => '1 400 – 2 200 $ / m²',
    'best_for' => 'Résidents à long terme, acheteurs en quête de valeur',
  ],
  [
    'name' => 'El Cielo',
    'zone' => 'el-cielo',
    'tagline' => 'Front de mer et haut de gamme',
    'img' => 'https://images.pexels.com/photos/34271104/pexels-photo-34271104.jpeg?auto=compress&cs=tinysrgb&h=650',
    'alt' => 'Vue sur la mer depuis un balcon dans le quartier El Cielo, Playa del Carmen',
    'desc' => 'Au nord de Centro, une zone plus récente de tours en front de mer et de résidences boutique, avec un littoral plus calme que la 5e Avenue. Fort potentiel de valorisation à mesure que le secteur se développe.',
    'price' => '3 200 – 5 000 $ / m²',
    'best_for' => 'Vie en bord de mer, pari sur la plus-value',
  ],
  [
    'name' => 'Coco Beach',
    'zone' => '',
    'tagline' => 'Émergent, style resort',
    'img' => 'https://images.pexels.com/photos/6367711/pexels-photo-6367711.jpeg?auto=compress&cs=tinysrgb&h=650',
    'alt' => 'Piscine sur le toit de style resort dans le secteur de Coco Beach, Playa del Carmen',
    'desc' => 'Au nord d\'El Cielo, un corridor de style resort en pleine croissance, avec de nouvelles tours de condos, des piscines sur les toits et un accès direct à la plage. Un point d\'entrée plus abordable pour vivre en bord de mer.',
    'price' => '2 600 – 3 900 $ / m²',
    'best_for' => 'Programmes neufs, équipements de type resort',
  ],
  [
    'name' => 'Puerto Aventuras',
    'zone' => '',
    'tagline' => 'Communauté avec marina, à 20 min au sud',
    'img' => 'https://images.pexels.com/photos/18269735/pexels-photo-18269735.jpeg?auto=compress&cs=tinysrgb&h=650',
    'alt' => 'Communauté tropicale avec marina près de Puerto Aventuras',
    'desc' => 'Une petite ville autonome avec marina, à environ 20 minutes au sud de Playa del Carmen, dotée d\'un golf, d\'un delphinarium et de places de port. Appréciée des amateurs de bateau et des acheteurs qui recherchent un rythme plus paisible.',
    'price' => '1 900 – 2 900 $ / m²',
    'best_for' => 'Plaisanciers, vie tranquille près de la marina',
  ],
];
?>

<section class="page-hero">
  <div class="page-hero-bg" style="background-image:url('https://images.pexels.com/photos/16147460/pexels-photo-16147460.jpeg?auto=compress&cs=tinysrgb&h=800');"></div>
  <div class="container">
    <div class="breadcrumb" style="color:rgba(255,255,255,0.8);"><a href="<?= L('home') ?>" style="color:white;">Accueil</a><span>/</span><span>Quartiers</span></div>
    <h1>Guide des quartiers de Playa del Carmen</h1>
    <p>Chaque zone a son propre prix au m², son potentiel locatif et son style de vie. Voici comment choisir la bonne.</p>
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
      <span class="eyebrow">Analyse détaillée</span>
      <h2>Quel quartier correspond à vos objectifs ?</h2>
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
            <div><h4>Prix habituel</h4><p><?= htmlspecialchars($h['price']) ?></p></div>
          </div>
          <div class="feature-item">
            <div class="icon-badge"><i data-lucide="users" aria-hidden="true"></i></div>
            <div><h4>Idéal pour</h4><p><?= htmlspecialchars($h['best_for']) ?></p></div>
          </div>
        </div>
        <a href="<?= L('properties') ?><?= $h['zone'] !== '' ? '?zone=' . urlencode($h['zone']) : '' ?>" class="btn btn-secondary" style="margin-top:var(--space-3);">Voir les biens de ce quartier</a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cta-band">
      <div>
        <h2>Vous hésitez encore sur le lieu d'achat ?</h2>
        <p>Parlez-nous de votre style de vie et de votre budget : nous vous recommandons le bon quartier en un seul appel.</p>
      </div>
      <a href="<?= L('contact') ?>" class="btn btn-primary">Recevoir un conseil personnalisé</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../footer.php'; ?>
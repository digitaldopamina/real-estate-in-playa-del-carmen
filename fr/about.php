<?php
$lang = 'fr';
$pageKey = 'about';
$pageTitle = 'À Propos | Real Estate in Playa del Carmen';
$pageDescription = 'Rencontrez l\'équipe locale et multilingue qui aide les acheteurs internationaux à acquérir condos, villas et biens d\'investissement à Playa del Carmen depuis le premier jour.';
$ogImage = 'https://images.pexels.com/photos/7937330/pexels-photo-7937330.jpeg?auto=compress&cs=tinysrgb&h=650&w=940';
include __DIR__ . '/../header.php';
?>

<section class="page-hero">
  <div class="page-hero-bg" style="background-image:url('https://images.pexels.com/photos/16449013/pexels-photo-16449013.jpeg?auto=compress&cs=tinysrgb&h=800');"></div>
  <div class="container">
    <div class="breadcrumb" style="color:rgba(255,255,255,0.8);"><a href="<?= L('home') ?>" style="color:white;">Accueil</a><span>/</span><span>À propos</span></div>
    <h1>Expertise locale, standards internationaux</h1>
    <p>Nous sommes une équipe immobilière basée à Playa del Carmen qui aide des acheteurs du monde entier à investir en toute confiance.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="z-section reveal-on-scroll">
      <div class="z-media">
        <img src="https://images.pexels.com/photos/5041568/pexels-photo-5041568.jpeg?auto=compress&cs=tinysrgb&h=700" alt="Intérieur lumineux d'une agence immobilière à Playa del Carmen" width="600" height="420" loading="lazy">
        <div class="float-card">
          <div class="icon-badge"><i data-lucide="calendar" aria-hidden="true"></i></div>
          <div><strong>Depuis 2009</strong><span>Ventes à Playa del Carmen</span></div>
        </div>
      </div>
      <div>
        <span class="eyebrow">Notre histoire</span>
        <h2>Fondée par des expatriés, pour des expatriés</h2>
        <p>Real Estate in Playa del Carmen est née d'un constat simple : les acheteurs étrangers étaient poussés à décider trop vite par des agents qui n'expliquaient ni la procédure juridique, ni les quartiers, ni les vrais chiffres derrière les revenus locatifs.</p>
        <p>Nous avons bâti notre agence sur la transparence : des contrats bilingues expliqués ligne par ligne, des avantages et inconvénients honnêtes pour chaque bien, et un réseau de notaires et de gestionnaires de biens de confiance que nous utiliserions nous-mêmes.</p>
        <p>Aujourd'hui, nous avons aidé des acheteurs de plus de 25 pays à trouver condos, villas et biens d'investissement dans toute la Riviera Maya.</p>
      </div>
    </div>
  </div>
</section>

<section class="section section-sand">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Nos valeurs</span>
      <h2>Ce qui guide chaque transaction</h2>
    </div>
    <div class="grid grid-3">
      <div class="icon-card reveal-on-scroll">
        <div class="icon-badge"><i data-lucide="eye" aria-hidden="true"></i></div>
        <h3>Transparence radicale</h3>
        <p>Nous signalons les problèmes de copropriété, les alertes juridiques et les chiffres locatifs réalistes, même si cela nous coûte une commission.</p>
      </div>
      <div class="icon-card reveal-on-scroll">
        <div class="icon-badge"><i data-lucide="handshake" aria-hidden="true"></i></div>
        <h3>Zéro pression commerciale</h3>
        <p>Nous ne cherchons pas à conclure vite, mais à vous faire acheter le bon bien, ou aucun.</p>
      </div>
      <div class="icon-card reveal-on-scroll">
        <div class="icon-badge"><i data-lucide="globe" aria-hidden="true"></i></div>
        <h3>Vraie connaissance locale</h3>
        <p>Nous vivons ici. Nous savons quelles rues s'inondent, quels immeubles ont des soucis de copropriété et lesquels valent vraiment le coup.</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">L'équipe</span>
      <h2>Rencontrez vos conseillers locaux</h2>
    </div>
    <div class="grid grid-3">
      <div class="team-card reveal-on-scroll">
        <img src="https://images.pexels.com/photos/8815820/pexels-photo-8815820.jpeg?auto=compress&cs=tinysrgb&h=400" alt="Portrait d'un conseiller immobilier à Playa del Carmen" width="280" height="280" loading="lazy">
        <h4>Daniel Moreno</h4>
        <span>Fondateur et courtier</span>
        <p>15 ans d'expérience dans l'immobilier de la Riviera Maya. Parle anglais, espagnol et français.</p>
      </div>
      <div class="team-card reveal-on-scroll">
        <img src="https://images.pexels.com/photos/8962574/pexels-photo-8962574.jpeg?auto=compress&cs=tinysrgb&h=400" alt="Portrait d'une agente immobilière bilingue" width="280" height="280" loading="lazy">
        <h4>Camila Torres</h4>
        <span>Conseillère commerciale senior</span>
        <p>Spécialiste de Playacar et des résidences fermées. Parle couramment anglais, espagnol et français.</p>
      </div>
      <div class="team-card reveal-on-scroll">
        <img src="https://images.pexels.com/photos/7937314/pexels-photo-7937314.jpeg?auto=compress&cs=tinysrgb&h=400" alt="Portrait d'un conseiller en investissement pour acheteurs étrangers" width="280" height="280" loading="lazy">
        <h4>Marc Dubois</h4>
        <span>Conseiller en investissement</span>
        <p>Aide les investisseurs internationaux à modéliser leur rendement locatif et à gérer un achat à distance.</p>
      </div>
    </div>
  </div>
</section>

<section class="section section-primary">
  <div class="container">
    <div class="stats-band" style="grid-template-columns: repeat(2, 1fr);">
      <div><strong>20+</strong><span>Ans d'expérience locale</span></div>
      <div><strong>28</strong><span>Pays d'origine de nos clients</span></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cta-band reveal-on-scroll">
      <div>
        <h2>Trouvons ensemble votre bien</h2>
        <p>Réservez un appel gratuit de 20 minutes avec l'un de nos conseillers, sans engagement.</p>
      </div>
      <a href="<?= L('contact') ?>" class="btn btn-primary">Réserver un appel</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../footer.php'; ?>
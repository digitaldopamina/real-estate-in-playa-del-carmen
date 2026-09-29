<?php
$lang = 'fr';
$pageKey = 'investment';
$pageTitle = 'Guide d\'Investissement à Playa del Carmen | Calculateur de ROI et Frais d\'Achat';
$pageDescription = 'Tout ce que les investisseurs étrangers doivent savoir avant d\'acheter à Playa del Carmen : fideicomiso, frais de clôture, taxes, rendement locatif et calculateur de ROI gratuit.';
$ogImage = 'https://images.pexels.com/photos/16147205/pexels-photo-16147205.jpeg?auto=compress&cs=tinysrgb&h=650&w=940';
include __DIR__ . '/../header.php';
?>

<section class="page-hero">
  <div class="page-hero-bg" style="background-image:url('https://images.pexels.com/photos/16147205/pexels-photo-16147205.jpeg?auto=compress&cs=tinysrgb&h=800');"></div>
  <div class="container">
    <div class="breadcrumb" style="color:rgba(255,255,255,0.8);"><a href="<?= L('home') ?>" style="color:white;">Accueil</a><span>/</span><span>Guide d'investissement</span></div>
    <h1>Investir dans l'immobilier à Playa del Carmen</h1>
    <p>Un guide pratique pour les acheteurs étrangers : cadre juridique, coûts, taxes et rendements attendus, avec un calculateur gratuit.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="grid grid-4">
      <div class="icon-card reveal-on-scroll">
        <div class="icon-badge"><i data-lucide="file-check-2" aria-hidden="true"></i></div>
        <h3>Fideicomiso</h3>
        <p>Les étrangers achètent en zone côtière via une fiducie bancaire sécurisée (fideicomiso), renouvelable tous les 50 ans, qui garantit tous les droits de propriété.</p>
      </div>
      <div class="icon-card reveal-on-scroll">
        <div class="icon-badge"><i data-lucide="percent" aria-hidden="true"></i></div>
        <h3>Frais de clôture</h3>
        <p>Prévoyez 5 à 7 % du prix d'achat pour la taxe d'acquisition, le notaire, la création de la fiducie et les frais d'enregistrement.</p>
      </div>
      <div class="icon-card reveal-on-scroll">
        <div class="icon-badge"><i data-lucide="trending-up" aria-hidden="true"></i></div>
        <h3>Rendement locatif</h3>
        <p>Les condos bien situés à Centro ou à El Cielo génèrent généralement 6 à 9 % de rendement brut annuel en location courte durée.</p>
      </div>
      <div class="icon-card reveal-on-scroll">
        <div class="icon-badge"><i data-lucide="receipt" aria-hidden="true"></i></div>
        <h3>Taxes annuelles</h3>
        <p>La taxe foncière (predial) est très faible, souvent inférieure à 0,1 % de la valeur cadastrale : l'une des plus basses d'Amérique du Nord.</p>
      </div>
    </div>
  </div>
</section>

<section class="section section-sand">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Outil gratuit</span>
      <h2>Calculateur d'investissement locatif</h2>
      <p>Estimez vos frais de clôture et votre rendement locatif potentiel à partir d'hypothèses réalistes du marché de Playa del Carmen.</p>
    </div>

    <div class="calc-widget reveal-on-scroll">
      <div class="calc-inputs">
        <div class="form-group">
          <label for="calc-price">Prix d'achat (USD) : <span class="calc-range-value" id="price-value">300 000 $</span></label>
          <input type="range" id="calc-price" min="80000" max="1200000" step="10000" value="300000">
        </div>
        <div class="form-group">
          <label for="calc-nightly">Tarif moyen par nuit (USD) : <span class="calc-range-value" id="nightly-value">120 $</span></label>
          <input type="range" id="calc-nightly" min="40" max="500" step="10" value="120">
        </div>
        <div class="form-group">
          <label for="calc-occupancy">Taux d'occupation estimé : <span class="calc-range-value" id="occupancy-value">65 %</span></label>
          <input type="range" id="calc-occupancy" min="30" max="90" step="5" value="65">
        </div>
        <div class="form-group">
          <label for="calc-expenses">Charges d'exploitation (% des revenus) : <span class="calc-range-value" id="expenses-value">30 %</span></label>
          <input type="range" id="calc-expenses" min="15" max="50" step="5" value="30">
        </div>
        <p class="form-note">Ces estimations sont fournies à titre illustratif et ne constituent pas un conseil financier. Faites-les toujours valider par un comptable agréé.</p>
      </div>
      <div class="calc-results">
        <div class="calc-result-row"><span>Frais de clôture estimés (6 %)</span><strong id="res-closing">18 000 $</strong></div>
        <div class="calc-result-row"><span>Investissement total</span><strong id="res-total">318 000 $</strong></div>
        <div class="calc-result-row"><span>Revenus bruts annuels estimés</span><strong id="res-gross">28 470 $</strong></div>
        <div class="calc-result-row"><span>Revenu net annuel estimé</span><strong id="res-net">19 929 $</strong></div>
        <div class="calc-result-row highlight"><span>Rendement net annuel estimé</span><strong id="res-yield">6,3 %</strong></div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="z-section reveal-on-scroll">
      <div class="z-media">
        <img src="https://images.pexels.com/photos/8815820/pexels-photo-8815820.jpeg?auto=compress&cs=tinysrgb&h=700" alt="Rendez-vous de conseil immobilier avec un acheteur étranger" width="600" height="420" loading="lazy">
      </div>
      <div>
        <span class="eyebrow">Étape par étape</span>
        <h2>Comment se déroule l'achat</h2>
        <p>De votre première présélection à la remise des clés, voici le parcours type d'un acheteur étranger qui acquiert un bien de revente à Playa del Carmen.</p>
      </div>
    </div>

    <div class="steps" style="margin-top:var(--space-6);">
      <div class="step-card reveal-on-scroll">
        <div class="step-num">1</div>
        <h4>Sélection et visites</h4>
        <p>Nous sélectionnons des biens adaptés à votre budget et à vos objectifs, en personne ou par visites vidéo en direct.</p>
      </div>
      <div class="step-card reveal-on-scroll">
        <div class="step-num">2</div>
        <h4>Offre et vérifications</h4>
        <p>Nous déposons votre offre et coordonnons la recherche de titre, la situation de la copropriété et l'état du bien.</p>
      </div>
      <div class="step-card reveal-on-scroll">
        <div class="step-num">3</div>
        <h4>Fideicomiso et contrat</h4>
        <p>Un notaire indépendant met en place votre fiducie bancaire et prépare le contrat de vente officiel.</p>
      </div>
      <div class="step-card reveal-on-scroll">
        <div class="step-num">4</div>
        <h4>Signature et clés</h4>
        <p>Les fonds sont transférés, l'acte est signé devant le notaire et vous devenez officiellement propriétaire.</p>
      </div>
    </div>
  </div>
</section>

<section class="section section-sand">
  <div class="container" style="max-width:820px;">
    <div class="section-head">
      <span class="eyebrow">FAQ</span>
      <h2>Vos questions d'investissement, nos réponses</h2>
    </div>
    <div class="faq-list">
      <div class="faq-item open">
        <div class="faq-question"><span>La location courte durée (Airbnb) est-elle légale à Playa del Carmen ?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Oui, la location courte durée est courante et généralement autorisée, bien que certaines copropriétés fixent leurs propres règles de location ou des durées minimales. Nous le vérifions lors des contrôles préalables.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question"><span>Dois-je payer des impôts mexicains sur les revenus locatifs ?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Les revenus locatifs perçus au Mexique sont généralement soumis à l'impôt sur le revenu et à la TVA mexicains. Ils sont le plus souvent gérés par un gestionnaire de biens ou un comptable local qui effectue les déclarations à votre place.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question"><span>Le marché de la revente est-il liquide ?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Les biens bien situés et correctement valorisés à Centro, Playacar et El Cielo se vendent généralement en 3 à 6 mois, grâce à une forte demande touristique et expatriée.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question"><span>Vaut-il mieux acheter sur plan ou en revente ?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>L'achat sur plan offre des prix d'entrée plus bas et des échéanciers de paiement flexibles, mais comporte un risque lié au promoteur et à la livraison. La revente procure des revenus locatifs immédiats et un historique éprouvé. Nous vous aidons à comparer selon votre calendrier.</p></div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cta-band">
      <div>
        <h2>Envie d'une analyse d'investissement personnalisée ?</h2>
        <p>Envoyez-nous votre budget et nous calculons les chiffres de 3 biens réels actuellement sur le marché.</p>
      </div>
      <a href="<?= L('contact') ?>" class="btn btn-primary">Demander mon analyse</a>
    </div>
  </div>
</section>

<script>
  const priceEl = document.getElementById('calc-price');
  const nightlyEl = document.getElementById('calc-nightly');
  const occupancyEl = document.getElementById('calc-occupancy');
  const expensesEl = document.getElementById('calc-expenses');

  const priceValue = document.getElementById('price-value');
  const nightlyValue = document.getElementById('nightly-value');
  const occupancyValue = document.getElementById('occupancy-value');
  const expensesValue = document.getElementById('expenses-value');

  const resClosing = document.getElementById('res-closing');
  const resTotal = document.getElementById('res-total');
  const resGross = document.getElementById('res-gross');
  const resNet = document.getElementById('res-net');
  const resYield = document.getElementById('res-yield');

  const NBSP = '\u202F';
  const fmt = (n) => Math.round(n).toLocaleString('fr-FR').replace(/\s/g, NBSP) + '\u00A0$';
  const pct = (n) => n.toString().replace('.', ',') + '\u00A0%';

  function recalc() {
    const price = parseInt(priceEl.value, 10);
    const nightly = parseInt(nightlyEl.value, 10);
    const occupancy = parseInt(occupancyEl.value, 10) / 100;
    const expenses = parseInt(expensesEl.value, 10) / 100;

    priceValue.textContent = fmt(price);
    nightlyValue.textContent = fmt(nightly);
    occupancyValue.textContent = pct(occupancyEl.value);
    expensesValue.textContent = pct(expensesEl.value);

    const closing = price * 0.06;
    const total = price + closing;
    const grossRevenue = nightly * 365 * occupancy;
    const netIncome = grossRevenue * (1 - expenses);
    const netYield = (netIncome / total) * 100;

    resClosing.textContent = fmt(closing);
    resTotal.textContent = fmt(total);
    resGross.textContent = fmt(grossRevenue);
    resNet.textContent = fmt(netIncome);
    resYield.textContent = pct(netYield.toFixed(1));
  }

  [priceEl, nightlyEl, occupancyEl, expensesEl].forEach(el => el.addEventListener('input', recalc));
  recalc();
</script>

<?php include __DIR__ . '/../footer.php'; ?>
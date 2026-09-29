<?php
$lang = 'fr';
$pageKey = 'home';
$pageTitle = 'Immobilier à Playa del Carmen | Condos, Villas et Investissement';
$pageDescription = "Trouvez votre bien idéal ou votre prochain investissement à Playa del Carmen. Conseillers locaux multilingues, spécialisés en condos, villas et prévente dans la Riviera Maya.";
$ogImage = 'https://images.pexels.com/photos/17060218/pexels-photo-17060218.jpeg?auto=compress&cs=tinysrgb&h=650&w=940';
include __DIR__ . '/../header.php';
?>

<section class="hero">
  <div class="hero-bg" style="background-image:url('https://images.pexels.com/photos/17060218/pexels-photo-17060218.jpeg?auto=compress&cs=tinysrgb&h=800');"></div>
  <div class="container">
    <div class="hero-content">
      <span class="eyebrow" style="background:rgba(255,255,255,0.15); color:white;">📍 Playa del Carmen, Quintana Roo</span>
      <h1>Devenez propriétaire au bord des Caraïbes mexicaines</h1>
      <p class="lead">Nous accompagnons les acheteurs et investisseurs du monde entier pour trouver condos, villas et opportunités en prévente à Playa del Carmen — sans pression et en toute transparence.</p>
      <div class="hero-actions">
        <a href="<?= L('properties') ?>" class="btn btn-primary">Voir les propriétés</a>
        <a href="<?= L('investment') ?>" class="btn btn-outline">Guide d'investissement</a>
      </div>
      <div class="hero-stats">
        <div><strong>20+</strong><span>Ans à Playa del Carmen</span></div>
        <a href="https://wa.me/529848015201" class="btn-whatsapp" target="_blank" rel="noopener noreferrer">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.062.525 4.002 1.446 5.699L0 24l6.445-1.425A11.952 11.952 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.859 0-3.6-.484-5.11-1.331l-.362-.215-3.825.845.862-3.738-.236-.375A9.952 9.952 0 012 12C2 6.486 6.486 2 12 2s10 4.486 10 10-4.486 10-10 10z"/></svg>
          Contactez-moi
        </a>
      </div>
    </div>

    <form class="search-bar reveal-on-scroll" action="<?= L('properties') ?>" method="get">
      <div class="form-group" style="margin:0;">
        <label for="s-type">Type de bien</label>
        <select id="s-type" name="type">
          <option value="">Tous les types</option>
          <option value="condo">Condo</option>
          <option value="villa">Villa</option>
          <option value="house">Maison</option>
          <option value="lot">Terrain / Lot</option>
        </select>
      </div>
      <div class="form-group" style="margin:0;">
        <label for="s-zone">Quartier</label>
        <select id="s-zone" name="zone">
          <option value="">Toutes les zones</option>
          <option value="centro">Centro / Quinta Avenida</option>
          <option value="playacar">Playacar</option>
          <option value="zazil-ha">Zazil-Ha</option>
          <option value="el-cielo">El Cielo</option>
        </select>
      </div>
      <div class="form-group" style="margin:0;">
        <label for="s-budget">Budget maximum</label>
        <select id="s-budget" name="budget">
          <option value="">Sans limite</option>
          <option value="200000">Jusqu'à $200 000</option>
          <option value="400000">Jusqu'à $400 000</option>
          <option value="700000">Jusqu'à $700 000</option>
        </select>
      </div>
      <div class="form-group" style="margin:0;">
        <label for="s-beds">Chambres</label>
        <select id="s-beds" name="beds">
          <option value="">Peu importe</option>
          <option value="1">1+</option>
          <option value="2">2+</option>
          <option value="3">3+</option>
        </select>
      </div>
      <button type="submit" class="btn btn-secondary"><i data-lucide="search" aria-hidden="true"></i> Rechercher</button>
    </form>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Propriétés en vedette</span>
      <h2>Une sélection de biens, prêts pour vous</h2>
      <p>Un aperçu des opportunités disponibles aujourd'hui dans les quartiers les plus recherchés de Playa del Carmen.</p>
    </div>

    <div class="grid grid-4">
      <article class="property-card reveal-on-scroll">
        <div class="property-media">
          <img src="https://images.pexels.com/photos/37510897/pexels-photo-37510897.jpeg?auto=compress&cs=tinysrgb&h=500" alt="Balcon d'un condo moderne avec vue mer à Playacar" width="400" height="230" loading="lazy">
          <span class="property-tag">Vue mer</span>
          <span class="property-price">$285 000</span>
        </div>
        <div class="property-body">
          <h3>Condo 2 ch. — Playacar Phase II</h3>
          <p class="property-loc"><i data-lucide="map-pin" aria-hidden="true"></i> Playacar, Playa del Carmen</p>
          <div class="property-specs">
            <span><i data-lucide="bed-double" aria-hidden="true"></i> 2 ch.</span>
            <span><i data-lucide="bath" aria-hidden="true"></i> 2 sdb</span>
            <span><i data-lucide="ruler" aria-hidden="true"></i> 105 m²</span>
          </div>
        </div>
      </article>

      <article class="property-card reveal-on-scroll">
        <div class="property-media">
          <img src="https://images.pexels.com/photos/20192218/pexels-photo-20192218.jpeg?auto=compress&cs=tinysrgb&h=500" alt="Terrasse d'un penthouse près de la Quinta Avenida à Playa del Carmen" width="400" height="230" loading="lazy">
          <span class="property-tag">Penthouse</span>
          <span class="property-price">$650 000</span>
        </div>
        <div class="property-body">
          <h3>Penthouse rooftop — Quinta Avenida</h3>
          <p class="property-loc"><i data-lucide="map-pin" aria-hidden="true"></i> Centro, Playa del Carmen</p>
          <div class="property-specs">
            <span><i data-lucide="bed-double" aria-hidden="true"></i> 3 ch.</span>
            <span><i data-lucide="bath" aria-hidden="true"></i> 3 sdb</span>
            <span><i data-lucide="ruler" aria-hidden="true"></i> 190 m²</span>
          </div>
        </div>
      </article>

      <article class="property-card reveal-on-scroll">
        <div class="property-media">
          <img src="https://images.pexels.com/photos/28915352/pexels-photo-28915352.jpeg?auto=compress&cs=tinysrgb&h=500" alt="Villa contemporaine avec piscine privée à Selvamar" width="400" height="230" loading="lazy">
          <span class="property-tag">Piscine privée</span>
          <span class="property-price">$420 000</span>
        </div>
        <div class="property-body">
          <h3>Villa contemporaine — Selvamar</h3>
          <p class="property-loc"><i data-lucide="map-pin" aria-hidden="true"></i> Selvamar, Playa del Carmen</p>
          <div class="property-specs">
            <span><i data-lucide="bed-double" aria-hidden="true"></i> 3 ch.</span>
            <span><i data-lucide="bath" aria-hidden="true"></i> 3,5 sdb</span>
            <span><i data-lucide="ruler" aria-hidden="true"></i> 240 m²</span>
          </div>
        </div>
      </article>

      <article class="property-card reveal-on-scroll">
        <div class="property-media">
          <img src="https://images.pexels.com/photos/8089172/pexels-photo-8089172.jpeg?auto=compress&cs=tinysrgb&h=500" alt="Intérieur lumineux d'un studio en prévente" width="400" height="230" loading="lazy">
          <span class="property-tag">Prévente</span>
          <span class="property-price">À partir de $145 000</span>
        </div>
        <div class="property-body">
          <h3>Studio & 1 ch. — Región 15</h3>
          <p class="property-loc"><i data-lucide="map-pin" aria-hidden="true"></i> Región 15, Playa del Carmen</p>
          <div class="property-specs">
            <span><i data-lucide="bed-double" aria-hidden="true"></i> 0-1 ch.</span>
            <span><i data-lucide="bath" aria-hidden="true"></i> 1 sdb</span>
            <span><i data-lucide="ruler" aria-hidden="true"></i> 48 m²</span>
          </div>
        </div>
      </article>
    </div>

    <div class="text-center" style="margin-top:var(--space-6);">
      <a href="<?= L('properties') ?>" class="btn btn-ghost">Voir toutes les propriétés <i data-lucide="arrow-right" aria-hidden="true"></i></a>
    </div>
  </div>
</section>

<section class="section section-sand">
  <div class="container">
    <div class="z-section reveal-on-scroll">
      <div class="z-media">
        <img src="https://images.pexels.com/photos/7937330/pexels-photo-7937330.jpeg?auto=compress&cs=tinysrgb&h=700" alt="Conseiller immobilier montrant un bien à un couple" width="600" height="420" loading="lazy">
        <div class="float-card">
          <div class="icon-badge"><i data-lucide="shield-check" aria-hidden="true"></i></div>
          <div><strong>100 % vérifié</strong><span>Titres et contrôle juridique</span></div>
        </div>
      </div>
      <div>
        <span class="eyebrow">Pourquoi nous choisir</span>
        <h2>Une équipe locale qui parle votre langue — au sens propre</h2>
        <p>Acheter un bien à l'étranger peut sembler complexe. Nous supprimons les obstacles : conseillers multilingues, promoteurs vérifiés et un processus pas à pas pensé pour les acheteurs étrangers, de la première visio à la remise des clés.</p>
        <div class="feature-list">
          <div class="feature-item">
            <div class="icon-badge"><i data-lucide="languages" aria-hidden="true"></i></div>
            <div><h4>Conseillers multilingues</h4><p>Aucune barrière de langue ni surprise dans le contrat.</p></div>
          </div>
          <div class="feature-item">
            <div class="icon-badge"><i data-lucide="scale" aria-hidden="true"></i></div>
            <div><h4>Réseau juridique de confiance</h4><p>Nous travaillons avec des notaires et avocats en immigration indépendants.</p></div>
          </div>
          <div class="feature-item">
            <div class="icon-badge"><i data-lucide="trending-up" aria-hidden="true"></i></div>
            <div><h4>Vision investisseur</h4><p>Nous analysons le rendement locatif et le potentiel de revente, pas seulement la vue.</p></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="z-section reverse reveal-on-scroll">
      <div class="z-media">
        <img src="https://images.pexels.com/photos/31649801/pexels-photo-31649801.jpeg?auto=compress&cs=tinysrgb&h=700" alt="Rue colorée de la Quinta Avenida à Playa del Carmen" width="600" height="420" loading="lazy">
        <div class="float-card">
          <div class="icon-badge"><i data-lucide="map" aria-hidden="true"></i></div>
          <div><strong>6 quartiers</strong><span>Expliqués en détail</span></div>
        </div>
      </div>
      <div>
        <span class="eyebrow">Informez-vous avant d'acheter</span>
        <h2>Chaque quartier a son style de vie — et son rendement</h2>
        <p>La tranquillité de Playacar, l'animation piétonne du Centro ou les rues résidentielles de Zazil-Ha : chaque quartier de Playa del Carmen a son propre prix au m², sa demande locative et son ambiance. Nous avons créé des guides de quartiers pour vous aider à acheter au bon endroit selon vos objectifs.</p>
        <a href="<?= L('neighborhoods') ?>" class="btn btn-secondary" style="margin-top:var(--space-3);">Explorer les quartiers</a>
      </div>
    </div>
  </div>
</section>

<section class="section section-primary">
  <div class="container">
    <div class="stats-band" style="grid-template-columns: repeat(2, 1fr);">
      <div><strong>20+</strong><span>Ans d'expérience locale</span></div>
      <div><strong>6-8 %</strong><span>Rendement locatif net typique</span></div>
    </div>
  </div>
</section>

<section class="section section-sand">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Témoignages clients</span>
      <h2>Ce que disent nos acheteurs</h2>
    </div>
    <div class="grid grid-3">
      <div class="testimonial-card reveal-on-scroll">
        <div class="stars"><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i></div>
        <p>« Nous avons acheté notre condo à distance depuis le Canada. L'équipe a tout géré : inspections, démarches et même des recommandations pour l'ameublement. »</p>
        <div class="author">
          <div><strong>Michael R.</strong><span>Toronto, Canada — propriétaire à Playacar</span></div>
        </div>
      </div>
      <div class="testimonial-card reveal-on-scroll">
        <div class="stars"><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i></div>
        <p>« Des conseils directs sur le potentiel locatif. Depuis la signature, notre appartement est réservé à 80 % de l'année. »</p>
        <div class="author">
          <div><strong>Laura B.</strong><span>Austin, États-Unis — investisseur au Centro</span></div>
        </div>
      </div>
      <div class="testimonial-card reveal-on-scroll">
        <div class="stars"><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i></div>
        <p>« Zéro pression, toujours. Ils ont signalé des alertes sur deux biens qui nous plaisaient — une vraie marque de confiance. »</p>
        <div class="author">
          <div><strong>Sophie D.</strong><span>Paris, France — propriétaire d'une villa</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cta-band reveal-on-scroll">
      <div>
        <h2>Prêt à démarrer votre recherche ?</h2>
        <p>Partagez-nous votre budget et vos objectifs : nous vous envoyons une sélection personnalisée sous 48 heures.</p>
      </div>
      <a href="<?= L('contact') ?>" class="btn btn-primary">Parler à un conseiller</a>
    </div>
  </div>
</section>

<section class="section section-sand">
  <div class="container" style="max-width:820px;">
    <div class="section-head">
      <span class="eyebrow">Questions fréquentes</span>
      <h2>Acheter un bien au Mexique en tant qu'étranger</h2>
    </div>
    <div class="faq-list">
      <div class="faq-item open">
        <div class="faq-question"><span>Les étrangers peuvent-ils être propriétaires à Playa del Carmen ?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Oui. Playa del Carmen se situe dans la « zone restreinte » (à moins de 50 km du littoral), donc les étrangers achètent via un fideicomiso bancaire (fiducie) ou une société mexicaine. C'est une structure légale solide et éprouvée, utilisée par des milliers de propriétaires étrangers chaque année.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question"><span>Combien de temps dure le processus d'achat ?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>En moyenne 6 à 10 semaines de l'acceptation de l'offre jusqu'à la signature pour les biens en revente, constitution du fideicomiso comprise. Pour les préventes, les délais dépendent du calendrier de construction du promoteur.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question"><span>Quels frais supplémentaires prévoir ?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Comptez environ 5 à 7 % du prix d'achat en frais de clôture. Consultez la ventilation complète dans le <a href="<?= L('investment') ?>" style="color:var(--primary); font-weight:600;">guide d'investissement</a>.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question"><span>Puis-je obtenir un financement en tant que non-résident ?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Le crédit bancaire mexicain est limité pour les étrangers, c'est pourquoi la plupart des acheteurs internationaux règlent comptant ou utilisent les plans de paiement des promoteurs pour les unités en prévente.</p></div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../footer.php'; ?>

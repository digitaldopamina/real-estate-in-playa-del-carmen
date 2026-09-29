<?php
$lang = 'en';
$pageKey = 'home';
$pageTitle = 'Real Estate in Playa del Carmen | Condos, Villas & Investment Properties';
$pageDescription = 'Find your dream home or next investment in Playa del Carmen. Local English-speaking agents specialized in condos, villas and pre-construction in the Riviera Maya.';
$ogImage = 'https://images.pexels.com/photos/17060218/pexels-photo-17060218.jpeg?auto=compress&cs=tinysrgb&h=650&w=940';
include __DIR__ . '/../header.php';
?>

<section class="hero">
  <div class="hero-bg" style="background-image:url('https://images.pexels.com/photos/17060218/pexels-photo-17060218.jpeg?auto=compress&cs=tinysrgb&h=800');"></div>
  <div class="container">
    <div class="hero-content">
      <span class="eyebrow" style="background:rgba(255,255,255,0.15); color:white;">📍 Playa del Carmen, Quintana Roo</span>
      <h1>Own a piece of the Mexican Caribbean</h1>
      <p class="lead">We help buyers and investors from around the world find condos, villas and pre-construction opportunities in Playa del Carmen — with zero pressure and full transparency.</p>
      <div class="hero-actions">
        <a href="<?= L('properties') ?>" class="btn btn-primary">Browse Properties</a>
        <a href="<?= L('investment') ?>" class="btn btn-outline">Investment Guide</a>
      </div>
      <div class="hero-stats">
        <div><strong>20+</strong><span>Years in Playa del Carmen</span></div>
        <a href="https://wa.me/529848015201" class="btn-whatsapp" target="_blank" rel="noopener noreferrer">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.062.525 4.002 1.446 5.699L0 24l6.445-1.425A11.952 11.952 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.859 0-3.6-.484-5.11-1.331l-.362-.215-3.825.845.862-3.738-.236-.375A9.952 9.952 0 012 12C2 6.486 6.486 2 12 2s10 4.486 10 10-4.486 10-10 10z"/></svg>
          Call me
        </a>
      </div>
    </div>

    <form class="search-bar reveal-on-scroll" action="<?= L('properties') ?>" method="get">
      <div class="form-group" style="margin:0;">
        <label for="s-type">Property Type</label>
        <select id="s-type" name="type">
          <option value="">Any type</option>
          <option value="condo">Condo</option>
          <option value="villa">Villa</option>
          <option value="house">House</option>
          <option value="lot">Land / Lot</option>
        </select>
      </div>
      <div class="form-group" style="margin:0;">
        <label for="s-zone">Neighborhood</label>
        <select id="s-zone" name="zone">
          <option value="">Any zone</option>
          <option value="centro">Centro / 5th Ave</option>
          <option value="playacar">Playacar</option>
          <option value="zazil-ha">Zazil-Ha</option>
          <option value="el-cielo">El Cielo</option>
        </select>
      </div>
      <div class="form-group" style="margin:0;">
        <label for="s-budget">Max Budget</label>
        <select id="s-budget" name="budget">
          <option value="">No limit</option>
          <option value="200000">Up to $200,000</option>
          <option value="400000">Up to $400,000</option>
          <option value="700000">Up to $700,000</option>
        </select>
      </div>
      <div class="form-group" style="margin:0;">
        <label for="s-beds">Bedrooms</label>
        <select id="s-beds" name="beds">
          <option value="">Any</option>
          <option value="1">1+</option>
          <option value="2">2+</option>
          <option value="3">3+</option>
        </select>
      </div>
      <button type="submit" class="btn btn-secondary"><i data-lucide="search" aria-hidden="true"></i> Search</button>
    </form>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Featured Listings</span>
      <h2>Handpicked properties, ready for you</h2>
      <p>A sample of the opportunities currently available across Playa del Carmen's most sought-after neighborhoods.</p>
    </div>

    <div class="grid grid-4">
      <article class="property-card reveal-on-scroll">
        <div class="property-media">
          <img src="https://images.pexels.com/photos/37510897/pexels-photo-37510897.jpeg?auto=compress&cs=tinysrgb&h=500" alt="Modern oceanview condo balcony in Playacar" width="400" height="230" loading="lazy">
          <span class="property-tag">Ocean View</span>
          <span class="property-price">$285,000</span>
        </div>
        <div class="property-body">
          <h3>2BR Condo — Playacar Phase II</h3>
          <p class="property-loc"><i data-lucide="map-pin" aria-hidden="true"></i> Playacar, Playa del Carmen</p>
          <div class="property-specs">
            <span><i data-lucide="bed-double" aria-hidden="true"></i> 2 bed</span>
            <span><i data-lucide="bath" aria-hidden="true"></i> 2 bath</span>
            <span><i data-lucide="ruler" aria-hidden="true"></i> 105 m²</span>
          </div>
        </div>
      </article>

      <article class="property-card reveal-on-scroll">
        <div class="property-media">
          <img src="https://images.pexels.com/photos/20192218/pexels-photo-20192218.jpeg?auto=compress&cs=tinysrgb&h=500" alt="Rooftop penthouse terrace near 5th Avenue Playa del Carmen" width="400" height="230" loading="lazy">
          <span class="property-tag">Penthouse</span>
          <span class="property-price">$650,000</span>
        </div>
        <div class="property-body">
          <h3>Rooftop Penthouse — 5th Avenue</h3>
          <p class="property-loc"><i data-lucide="map-pin" aria-hidden="true"></i> Centro, Playa del Carmen</p>
          <div class="property-specs">
            <span><i data-lucide="bed-double" aria-hidden="true"></i> 3 bed</span>
            <span><i data-lucide="bath" aria-hidden="true"></i> 3 bath</span>
            <span><i data-lucide="ruler" aria-hidden="true"></i> 190 m²</span>
          </div>
        </div>
      </article>

      <article class="property-card reveal-on-scroll">
        <div class="property-media">
          <img src="https://images.pexels.com/photos/28915352/pexels-photo-28915352.jpeg?auto=compress&cs=tinysrgb&h=500" alt="Contemporary villa with private pool in Selvamar" width="400" height="230" loading="lazy">
          <span class="property-tag">Private Pool</span>
          <span class="property-price">$420,000</span>
        </div>
        <div class="property-body">
          <h3>Contemporary Villa — Selvamar</h3>
          <p class="property-loc"><i data-lucide="map-pin" aria-hidden="true"></i> Selvamar, Playa del Carmen</p>
          <div class="property-specs">
            <span><i data-lucide="bed-double" aria-hidden="true"></i> 3 bed</span>
            <span><i data-lucide="bath" aria-hidden="true"></i> 3.5 bath</span>
            <span><i data-lucide="ruler" aria-hidden="true"></i> 240 m²</span>
          </div>
        </div>
      </article>

      <article class="property-card reveal-on-scroll">
        <div class="property-media">
          <img src="https://images.pexels.com/photos/8089172/pexels-photo-8089172.jpeg?auto=compress&cs=tinysrgb&h=500" alt="Bright pre-construction studio apartment interior" width="400" height="230" loading="lazy">
          <span class="property-tag">Pre-construction</span>
          <span class="property-price">From $145,000</span>
        </div>
        <div class="property-body">
          <h3>Studio & 1BR — Region 15</h3>
          <p class="property-loc"><i data-lucide="map-pin" aria-hidden="true"></i> Region 15, Playa del Carmen</p>
          <div class="property-specs">
            <span><i data-lucide="bed-double" aria-hidden="true"></i> 0-1 bed</span>
            <span><i data-lucide="bath" aria-hidden="true"></i> 1 bath</span>
            <span><i data-lucide="ruler" aria-hidden="true"></i> 48 m²</span>
          </div>
        </div>
      </article>
    </div>

    <div class="text-center" style="margin-top:var(--space-6);">
      <a href="<?= L('properties') ?>" class="btn btn-ghost">View All Properties <i data-lucide="arrow-right" aria-hidden="true"></i></a>
    </div>
  </div>
</section>

<section class="section section-sand">
  <div class="container">
    <div class="z-section reveal-on-scroll">
      <div class="z-media">
        <img src="https://images.pexels.com/photos/7937330/pexels-photo-7937330.jpeg?auto=compress&cs=tinysrgb&h=700" alt="Real estate agent showing a property to a couple" width="600" height="420" loading="lazy">
        <div class="float-card">
          <div class="icon-badge"><i data-lucide="shield-check" aria-hidden="true"></i></div>
          <div><strong>100% Verified</strong><span>Titles &amp; legal checks</span></div>
        </div>
      </div>
      <div>
        <span class="eyebrow">Why buyers choose us</span>
        <h2>A local team that speaks your language, literally</h2>
        <p>Buying property abroad can feel intimidating. We remove the friction: bilingual agents, vetted developers, and a step-by-step process built for foreign buyers — from your first video call to receiving your keys.</p>
        <div class="feature-list">
          <div class="feature-item">
            <div class="icon-badge"><i data-lucide="languages" aria-hidden="true"></i></div>
            <div><h4>English-speaking agents</h4><p>No translation issues, no surprises in the contract.</p></div>
          </div>
          <div class="feature-item">
            <div class="icon-badge"><i data-lucide="scale" aria-hidden="true"></i></div>
            <div><h4>Trusted legal network</h4><p>We work with independent notaries and immigration lawyers.</p></div>
          </div>
          <div class="feature-item">
            <div class="icon-badge"><i data-lucide="trending-up" aria-hidden="true"></i></div>
            <div><h4>Investment-first mindset</h4><p>We analyze rental yield and resale potential, not just the view.</p></div>
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
        <img src="https://images.pexels.com/photos/31649801/pexels-photo-31649801.jpeg?auto=compress&cs=tinysrgb&h=700" alt="Colorful street scene on Fifth Avenue, Playa del Carmen" width="600" height="420" loading="lazy">
        <div class="float-card">
          <div class="icon-badge"><i data-lucide="map" aria-hidden="true"></i></div>
          <div><strong>6 Neighborhoods</strong><span>Covered in detail</span></div>
        </div>
      </div>
      <div>
        <span class="eyebrow">Know before you buy</span>
        <h2>Every neighborhood has a different lifestyle — and a different ROI</h2>
        <p>Playacar's gated calm, Centro's walkable buzz, or Zazil-Ha's quiet residential streets: each area of Playa del Carmen has its own price per m², rental demand, and vibe. We built neighborhood guides so you buy in the right spot for your goals.</p>
        <a href="<?= L('neighborhoods') ?>" class="btn btn-secondary" style="margin-top:var(--space-3);">Explore Neighborhoods</a>
      </div>
    </div>
  </div>
</section>

<section class="section section-primary">
  <div class="container">
    <div class="stats-band" style="grid-template-columns: repeat(2, 1fr);">
      <div><strong>20+</strong><span>Years of local experience</span></div>
      <div><strong>6-8%</strong><span>Typical net rental yield</span></div>
    </div>
  </div>
</section>

<section class="section section-sand">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Client Stories</span>
      <h2>What our buyers say</h2>
    </div>
    <div class="grid grid-3">
      <div class="testimonial-card reveal-on-scroll">
        <div class="stars"><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i></div>
        <p>"We bought our condo remotely from Canada. The team handled everything — inspections, paperwork, even furnishing recommendations."</p>
        <div class="author">
          <div><strong>Michael R.</strong><span>Toronto, Canada — Playacar owner</span></div>
        </div>
      </div>
      <div class="testimonial-card reveal-on-scroll">
        <div class="stars"><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i></div>
        <p>"Straightforward advice on rental yield potential. Our unit has been booked 80% of the year since we closed."</p>
        <div class="author">
          <div><strong>Laura B.</strong><span>Austin, USA — Centro investor</span></div>
        </div>
      </div>
      <div class="testimonial-card reveal-on-scroll">
        <div class="stars"><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i></div>
        <p>"No pressure, ever. They pointed out red flags on two properties we liked, which built real trust."</p>
        <div class="author">
          <div><strong>Sophie D.</strong><span>Paris, France — Villa owner</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cta-band reveal-on-scroll">
      <div>
        <h2>Ready to start your search?</h2>
        <p>Tell us your budget and goals — we'll send you a shortlist within 48 hours.</p>
      </div>
      <a href="<?= L('contact') ?>" class="btn btn-primary">Talk to an Agent</a>
    </div>
  </div>
</section>

<section class="section section-sand">
  <div class="container" style="max-width:820px;">
    <div class="section-head">
      <span class="eyebrow">FAQ</span>
      <h2>Buying property in Mexico as a foreigner</h2>
    </div>
    <div class="faq-list">
      <div class="faq-item open">
        <div class="faq-question"><span>Can foreigners legally own property in Playa del Carmen?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Yes. Playa del Carmen is in the "restricted zone" (within 50km of the coast), so foreign buyers purchase through a fideicomiso (bank trust) or a Mexican corporation. It's a well-established, secure legal structure used by thousands of foreign owners every year.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question"><span>What's the buying process timeline?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>On average 6-10 weeks from offer acceptance to closing for resale properties, including the fideicomiso setup. Pre-construction timelines depend on the developer's build schedule.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question"><span>What extra costs should I budget for?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Plan for roughly 5-7% of the purchase price in closing costs (acquisition tax, notary fees, trust setup, registration). See our full breakdown in the <a href="<?= L('investment') ?>" style="color:var(--primary); font-weight:600;">Investment Guide</a>.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question"><span>Can I get financing as a non-resident?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Mexican bank financing for foreigners is limited, so most international buyers purchase in cash or use developer payment plans on pre-construction units.</p></div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../footer.php'; ?>

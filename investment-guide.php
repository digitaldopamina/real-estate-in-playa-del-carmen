<?php
$pageTitle = 'Playa del Carmen Investment Guide | ROI Calculator & Buying Costs';
$pageDescription = 'Everything foreign investors need to know before buying in Playa del Carmen: fideicomiso, closing costs, taxes, rental yields, plus a free ROI calculator.';
$canonicalPath = '/investment-guide';
$ogImage = 'https://images.pexels.com/photos/16147205/pexels-photo-16147205.jpeg?auto=compress&cs=tinysrgb&h=650&w=940';
include 'header.php';
?>

<section class="page-hero">
  <div class="page-hero-bg" style="background-image:url('https://images.pexels.com/photos/16147205/pexels-photo-16147205.jpeg?auto=compress&cs=tinysrgb&h=800');"></div>
  <div class="container">
    <div class="breadcrumb" style="color:rgba(255,255,255,0.8);"><a href="/" style="color:white;">Home</a><span>/</span><span>Investment Guide</span></div>
    <h1>Investing in Playa del Carmen Real Estate</h1>
    <p>A practical guide for foreign buyers: legal structure, costs, taxes and expected returns — plus a free calculator.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="grid grid-4">
      <div class="icon-card reveal-on-scroll">
        <div class="icon-badge"><i data-lucide="file-check-2" aria-hidden="true"></i></div>
        <h3>Fideicomiso</h3>
        <p>Foreigners buy coastal property through a secure bank trust (fideicomiso), renewable every 50 years, giving full ownership rights.</p>
      </div>
      <div class="icon-card reveal-on-scroll">
        <div class="icon-badge"><i data-lucide="percent" aria-hidden="true"></i></div>
        <h3>Closing Costs</h3>
        <p>Budget 5-7% of the purchase price for acquisition tax, notary, trust setup and registration fees.</p>
      </div>
      <div class="icon-card reveal-on-scroll">
        <div class="icon-badge"><i data-lucide="trending-up" aria-hidden="true"></i></div>
        <h3>Rental Yield</h3>
        <p>Well-located condos in Centro or El Cielo typically generate 6-9% gross annual rental yield via short-term rentals.</p>
      </div>
      <div class="icon-card reveal-on-scroll">
        <div class="icon-badge"><i data-lucide="receipt" aria-hidden="true"></i></div>
        <h3>Ongoing Taxes</h3>
        <p>Annual property tax (predial) is very low, often under 0.1% of assessed value — among the lowest in North America.</p>
      </div>
    </div>
  </div>
</section>

<section class="section section-sand">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Free Tool</span>
      <h2>Rental Investment Calculator</h2>
      <p>Estimate your closing costs and potential rental return based on real market assumptions for Playa del Carmen.</p>
    </div>

    <div class="calc-widget reveal-on-scroll">
      <div class="calc-inputs">
        <div class="form-group">
          <label for="calc-price">Purchase Price (USD): <span class="calc-range-value" id="price-value">$300,000</span></label>
          <input type="range" id="calc-price" min="80000" max="1200000" step="10000" value="300000">
        </div>
        <div class="form-group">
          <label for="calc-nightly">Average Nightly Rate (USD): <span class="calc-range-value" id="nightly-value">$120</span></label>
          <input type="range" id="calc-nightly" min="40" max="500" step="10" value="120">
        </div>
        <div class="form-group">
          <label for="calc-occupancy">Estimated Occupancy: <span class="calc-range-value" id="occupancy-value">65%</span></label>
          <input type="range" id="calc-occupancy" min="30" max="90" step="5" value="65">
        </div>
        <div class="form-group">
          <label for="calc-expenses">Operating Expenses (% of revenue): <span class="calc-range-value" id="expenses-value">30%</span></label>
          <input type="range" id="calc-expenses" min="15" max="50" step="5" value="30">
        </div>
        <p class="form-note">Estimates are for illustration only and do not constitute financial advice. Always validate with a licensed accountant.</p>
      </div>
      <div class="calc-results">
        <div class="calc-result-row"><span>Estimated closing costs (6%)</span><strong id="res-closing">$18,000</strong></div>
        <div class="calc-result-row"><span>Total investment</span><strong id="res-total">$318,000</strong></div>
        <div class="calc-result-row"><span>Estimated gross annual revenue</span><strong id="res-gross">$28,470</strong></div>
        <div class="calc-result-row"><span>Estimated net annual income</span><strong id="res-net">$19,929</strong></div>
        <div class="calc-result-row highlight"><span>Estimated net annual yield</span><strong id="res-yield">6.3%</strong></div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="z-section reveal-on-scroll">
      <div class="z-media">
        <img src="https://images.pexels.com/photos/8815820/pexels-photo-8815820.jpeg?auto=compress&cs=tinysrgb&h=700" alt="Real estate consultation with foreign property buyer" width="600" height="420" loading="lazy">
      </div>
      <div>
        <span class="eyebrow">Step by step</span>
        <h2>How the buying process works</h2>
        <p>From your first shortlist to receiving your keys, here's the typical path for a foreign buyer purchasing resale property in Playa del Carmen.</p>
      </div>
    </div>

    <div class="steps" style="margin-top:var(--space-6);">
      <div class="step-card reveal-on-scroll">
        <div class="step-num">1</div>
        <h4>Shortlist &amp; visit</h4>
        <p>We curate properties matching your budget and goals, in person or via live video tours.</p>
      </div>
      <div class="step-card reveal-on-scroll">
        <div class="step-num">2</div>
        <h4>Offer &amp; due diligence</h4>
        <p>We submit your offer and coordinate title search, HOA status and property condition checks.</p>
      </div>
      <div class="step-card reveal-on-scroll">
        <div class="step-num">3</div>
        <h4>Fideicomiso &amp; contract</h4>
        <p>An independent notary sets up your bank trust and prepares the official purchase agreement.</p>
      </div>
      <div class="step-card reveal-on-scroll">
        <div class="step-num">4</div>
        <h4>Closing &amp; keys</h4>
        <p>Funds are transferred, the deed is signed before the notary, and you officially own your property.</p>
      </div>
    </div>
  </div>
</section>

<section class="section section-sand">
  <div class="container" style="max-width:820px;">
    <div class="section-head">
      <span class="eyebrow">FAQ</span>
      <h2>Investment questions, answered</h2>
    </div>
    <div class="faq-list">
      <div class="faq-item open">
        <div class="faq-question"><span>Is short-term rental (Airbnb) legal in Playa del Carmen?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Yes, short-term rentals are common and generally allowed, though some condo HOAs (condominium regimes) set their own rental rules or minimum stays — we check this during due diligence.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question"><span>Do I need to pay Mexican taxes on rental income?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Rental income earned in Mexico is generally subject to Mexican income tax and VAT, typically managed through a local property manager or accountant who handles filings on your behalf.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question"><span>How liquid is the resale market?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Well-located, well-priced units in Centro, Playacar and El Cielo typically sell within 3-6 months given strong ongoing tourism and expat demand.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question"><span>Should I buy pre-construction or resale?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Pre-construction offers lower entry prices and flexible payment plans but carries developer/delivery risk. Resale offers immediate rental income and a proven track record. We help you weigh both based on your timeline.</p></div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cta-band">
      <div>
        <h2>Want a personalized investment analysis?</h2>
        <p>Send us your budget and we'll run the numbers on 3 real properties currently on the market.</p>
      </div>
      <a href="/contact" class="btn btn-primary">Request My Analysis</a>
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

  const fmt = (n) => '$' + Math.round(n).toLocaleString('en-US');

  function recalc() {
    const price = parseInt(priceEl.value, 10);
    const nightly = parseInt(nightlyEl.value, 10);
    const occupancy = parseInt(occupancyEl.value, 10) / 100;
    const expenses = parseInt(expensesEl.value, 10) / 100;

    priceValue.textContent = fmt(price);
    nightlyValue.textContent = fmt(nightly);
    occupancyValue.textContent = occupancyEl.value + '%';
    expensesValue.textContent = expensesEl.value + '%';

    const closing = price * 0.06;
    const total = price + closing;
    const grossRevenue = nightly * 365 * occupancy;
    const netIncome = grossRevenue * (1 - expenses);
    const netYield = (netIncome / total) * 100;

    resClosing.textContent = fmt(closing);
    resTotal.textContent = fmt(total);
    resGross.textContent = fmt(grossRevenue);
    resNet.textContent = fmt(netIncome);
    resYield.textContent = netYield.toFixed(1) + '%';
  }

  [priceEl, nightlyEl, occupancyEl, expensesEl].forEach(el => el.addEventListener('input', recalc));
  recalc();
</script>

<?php include 'footer.php'; ?>
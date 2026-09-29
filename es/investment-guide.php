<?php
$lang = 'es';
$pageKey = 'investment';
$pageTitle = 'Guía de Inversión en Playa del Carmen | Calculadora de ROI y Costos de Compra';
$pageDescription = 'Todo lo que un inversionista extranjero debe saber antes de comprar en Playa del Carmen: fideicomiso, gastos de cierre, impuestos, rendimiento por renta y una calculadora de ROI gratuita.';
$ogImage = 'https://images.pexels.com/photos/16147205/pexels-photo-16147205.jpeg?auto=compress&cs=tinysrgb&h=650&w=940';
include __DIR__ . '/../header.php';
?>

<section class="page-hero">
  <div class="page-hero-bg" style="background-image:url('https://images.pexels.com/photos/16147205/pexels-photo-16147205.jpeg?auto=compress&cs=tinysrgb&h=800');"></div>
  <div class="container">
    <div class="breadcrumb" style="color:rgba(255,255,255,0.8);"><a href="<?= L('home') ?>" style="color:white;">Inicio</a><span>/</span><span>Guía de inversión</span></div>
    <h1>Invertir en bienes raíces en Playa del Carmen</h1>
    <p>Una guía práctica para compradores extranjeros: estructura legal, costos, impuestos y rendimientos esperados, con una calculadora gratuita.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="grid grid-4">
      <div class="icon-card reveal-on-scroll">
        <div class="icon-badge"><i data-lucide="file-check-2" aria-hidden="true"></i></div>
        <h3>Fideicomiso</h3>
        <p>Los extranjeros compran propiedad en zona costera mediante un fideicomiso bancario seguro, renovable cada 50 años, con todos los derechos de propiedad.</p>
      </div>
      <div class="icon-card reveal-on-scroll">
        <div class="icon-badge"><i data-lucide="percent" aria-hidden="true"></i></div>
        <h3>Gastos de cierre</h3>
        <p>Calcula entre 5 y 7% del precio de compra para el impuesto de adquisición, notario, constitución del fideicomiso y gastos de registro.</p>
      </div>
      <div class="icon-card reveal-on-scroll">
        <div class="icon-badge"><i data-lucide="trending-up" aria-hidden="true"></i></div>
        <h3>Rendimiento por renta</h3>
        <p>Los departamentos bien ubicados en el Centro o El Cielo suelen generar entre 6 y 9% de rendimiento bruto anual con renta vacacional.</p>
      </div>
      <div class="icon-card reveal-on-scroll">
        <div class="icon-badge"><i data-lucide="receipt" aria-hidden="true"></i></div>
        <h3>Impuestos anuales</h3>
        <p>El impuesto predial es muy bajo, a menudo inferior al 0.1% del valor catastral: de los más bajos de Norteamérica.</p>
      </div>
    </div>
  </div>
</section>

<section class="section section-sand">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Herramienta gratuita</span>
      <h2>Calculadora de inversión en renta</h2>
      <p>Estima tus gastos de cierre y el rendimiento potencial por renta con supuestos reales del mercado de Playa del Carmen.</p>
    </div>

    <div class="calc-widget reveal-on-scroll">
      <div class="calc-inputs">
        <div class="form-group">
          <label for="calc-price">Precio de compra (USD): <span class="calc-range-value" id="price-value">$300,000</span></label>
          <input type="range" id="calc-price" min="80000" max="1200000" step="10000" value="300000">
        </div>
        <div class="form-group">
          <label for="calc-nightly">Tarifa promedio por noche (USD): <span class="calc-range-value" id="nightly-value">$120</span></label>
          <input type="range" id="calc-nightly" min="40" max="500" step="10" value="120">
        </div>
        <div class="form-group">
          <label for="calc-occupancy">Ocupación estimada: <span class="calc-range-value" id="occupancy-value">65%</span></label>
          <input type="range" id="calc-occupancy" min="30" max="90" step="5" value="65">
        </div>
        <div class="form-group">
          <label for="calc-expenses">Gastos operativos (% de los ingresos): <span class="calc-range-value" id="expenses-value">30%</span></label>
          <input type="range" id="calc-expenses" min="15" max="50" step="5" value="30">
        </div>
        <p class="form-note">Las estimaciones son solo ilustrativas y no constituyen asesoría financiera. Valídalas siempre con un contador certificado.</p>
      </div>
      <div class="calc-results">
        <div class="calc-result-row"><span>Gastos de cierre estimados (6%)</span><strong id="res-closing">$18,000</strong></div>
        <div class="calc-result-row"><span>Inversión total</span><strong id="res-total">$318,000</strong></div>
        <div class="calc-result-row"><span>Ingresos brutos anuales estimados</span><strong id="res-gross">$28,470</strong></div>
        <div class="calc-result-row"><span>Ingreso neto anual estimado</span><strong id="res-net">$19,929</strong></div>
        <div class="calc-result-row highlight"><span>Rendimiento neto anual estimado</span><strong id="res-yield">6.3%</strong></div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="z-section reveal-on-scroll">
      <div class="z-media">
        <img src="https://images.pexels.com/photos/8815820/pexels-photo-8815820.jpeg?auto=compress&cs=tinysrgb&h=700" alt="Asesoría inmobiliaria con un comprador extranjero de propiedad" width="600" height="420" loading="lazy">
      </div>
      <div>
        <span class="eyebrow">Paso a paso</span>
        <h2>Cómo funciona el proceso de compra</h2>
        <p>Desde tu primera lista de opciones hasta recibir las llaves, este es el camino habitual de un comprador extranjero que adquiere una propiedad de reventa en Playa del Carmen.</p>
      </div>
    </div>

    <div class="steps" style="margin-top:var(--space-6);">
      <div class="step-card reveal-on-scroll">
        <div class="step-num">1</div>
        <h4>Selección y visitas</h4>
        <p>Seleccionamos propiedades acordes a tu presupuesto y objetivos, en persona o con recorridos en video en vivo.</p>
      </div>
      <div class="step-card reveal-on-scroll">
        <div class="step-num">2</div>
        <h4>Oferta y debida diligencia</h4>
        <p>Presentamos tu oferta y coordinamos la búsqueda de título, el estatus del condominio y la revisión del estado del inmueble.</p>
      </div>
      <div class="step-card reveal-on-scroll">
        <div class="step-num">3</div>
        <h4>Fideicomiso y contrato</h4>
        <p>Un notario independiente constituye tu fideicomiso bancario y prepara el contrato oficial de compraventa.</p>
      </div>
      <div class="step-card reveal-on-scroll">
        <div class="step-num">4</div>
        <h4>Cierre y llaves</h4>
        <p>Se transfieren los fondos, se firma la escritura ante notario y te conviertes oficialmente en propietario.</p>
      </div>
    </div>
  </div>
</section>

<section class="section section-sand">
  <div class="container" style="max-width:820px;">
    <div class="section-head">
      <span class="eyebrow">Preguntas frecuentes</span>
      <h2>Tus dudas sobre inversión, resueltas</h2>
    </div>
    <div class="faq-list">
      <div class="faq-item open">
        <div class="faq-question"><span>¿Es legal la renta vacacional (Airbnb) en Playa del Carmen?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Sí, la renta vacacional es común y en general está permitida, aunque algunos condominios establecen sus propias reglas de renta o estancias mínimas. Lo verificamos durante la debida diligencia.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question"><span>¿Debo pagar impuestos en México por los ingresos de renta?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Los ingresos por renta obtenidos en México generalmente están sujetos al ISR y al IVA mexicanos. Normalmente los gestiona un administrador de propiedades o contador local que presenta las declaraciones por ti.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question"><span>¿Qué tan líquido es el mercado de reventa?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Las unidades bien ubicadas y con buen precio en el Centro, Playacar y El Cielo suelen venderse en 3 a 6 meses, gracias a la fuerte demanda turística y de expatriados.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question"><span>¿Conviene comprar en preventa o reventa?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>La preventa ofrece precios de entrada más bajos y planes de pago flexibles, pero implica riesgo con el desarrollador y la entrega. La reventa da ingresos de renta inmediatos y un historial comprobado. Te ayudamos a comparar según tus plazos.</p></div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cta-band">
      <div>
        <h2>¿Quieres un análisis de inversión personalizado?</h2>
        <p>Envíanos tu presupuesto y calculamos los números de 3 propiedades reales que hay hoy en el mercado.</p>
      </div>
      <a href="<?= L('contact') ?>" class="btn btn-primary">Solicitar mi análisis</a>
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

<?php include __DIR__ . '/../footer.php'; ?>
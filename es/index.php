<?php
$lang = 'es';
$pageKey = 'home';
$pageTitle = 'Bienes Raíces en Playa del Carmen | Departamentos, Villas e Inversión';
$pageDescription = 'Encuentra tu hogar ideal o tu próxima inversión en Playa del Carmen. Asesores locales bilingües, especialistas en departamentos, villas y preventa en la Riviera Maya.';
$ogImage = 'https://images.pexels.com/photos/17060218/pexels-photo-17060218.jpeg?auto=compress&cs=tinysrgb&h=650&w=940';
include __DIR__ . '/../header.php';
?>

<section class="hero">
  <div class="hero-bg" style="background-image:url('https://images.pexels.com/photos/17060218/pexels-photo-17060218.jpeg?auto=compress&cs=tinysrgb&h=800');"></div>
  <div class="container">
    <div class="hero-content">
      <span class="eyebrow" style="background:rgba(255,255,255,0.15); color:white;">📍 Playa del Carmen, Quintana Roo</span>
      <h1>Sé dueño de un pedazo del Caribe mexicano</h1>
      <p class="lead">Ayudamos a compradores e inversionistas de todo el mundo a encontrar departamentos, villas y oportunidades de preventa en Playa del Carmen, sin presión y con total transparencia.</p>
      <div class="hero-actions">
        <a href="<?= L('properties') ?>" class="btn btn-primary">Ver propiedades</a>
        <a href="<?= L('investment') ?>" class="btn btn-outline">Guía de inversión</a>
      </div>
      <div class="hero-stats">
        <div><strong>20+</strong><span>Años en Playa del Carmen</span></div>
        <a href="https://wa.me/529848015201" class="btn-whatsapp" target="_blank" rel="noopener noreferrer">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.062.525 4.002 1.446 5.699L0 24l6.445-1.425A11.952 11.952 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.859 0-3.6-.484-5.11-1.331l-.362-.215-3.825.845.862-3.738-.236-.375A9.952 9.952 0 012 12C2 6.486 6.486 2 12 2s10 4.486 10 10-4.486 10-10 10z"/></svg>
          Llámame
        </a>
      </div>
    </div>

    <form class="search-bar reveal-on-scroll" action="<?= L('properties') ?>" method="get">
      <div class="form-group" style="margin:0;">
        <label for="s-type">Tipo de propiedad</label>
        <select id="s-type" name="type">
          <option value="">Cualquier tipo</option>
          <option value="condo">Departamento</option>
          <option value="villa">Villa</option>
          <option value="house">Casa</option>
          <option value="lot">Terreno / Lote</option>
        </select>
      </div>
      <div class="form-group" style="margin:0;">
        <label for="s-zone">Barrio</label>
        <select id="s-zone" name="zone">
          <option value="">Cualquier zona</option>
          <option value="centro">Centro / Quinta Avenida</option>
          <option value="playacar">Playacar</option>
          <option value="zazil-ha">Zazil-Ha</option>
          <option value="el-cielo">El Cielo</option>
        </select>
      </div>
      <div class="form-group" style="margin:0;">
        <label for="s-budget">Presupuesto máximo</label>
        <select id="s-budget" name="budget">
          <option value="">Sin límite</option>
          <option value="200000">Hasta $200,000</option>
          <option value="400000">Hasta $400,000</option>
          <option value="700000">Hasta $700,000</option>
        </select>
      </div>
      <div class="form-group" style="margin:0;">
        <label for="s-beds">Recámaras</label>
        <select id="s-beds" name="beds">
          <option value="">Cualquiera</option>
          <option value="1">1+</option>
          <option value="2">2+</option>
          <option value="3">3+</option>
        </select>
      </div>
      <button type="submit" class="btn btn-secondary"><i data-lucide="search" aria-hidden="true"></i> Buscar</button>
    </form>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Propiedades destacadas</span>
      <h2>Propiedades seleccionadas, listas para ti</h2>
      <p>Una muestra de las oportunidades disponibles hoy en los barrios más buscados de Playa del Carmen.</p>
    </div>

    <div class="grid grid-4">
      <article class="property-card reveal-on-scroll">
        <div class="property-media">
          <img src="https://images.pexels.com/photos/37510897/pexels-photo-37510897.jpeg?auto=compress&cs=tinysrgb&h=500" alt="Balcón de departamento moderno con vista al mar en Playacar" width="400" height="230" loading="lazy">
          <span class="property-tag">Vista al mar</span>
          <span class="property-price">$285,000</span>
        </div>
        <div class="property-body">
          <h3>Departamento 2 rec. — Playacar Fase II</h3>
          <p class="property-loc"><i data-lucide="map-pin" aria-hidden="true"></i> Playacar, Playa del Carmen</p>
          <div class="property-specs">
            <span><i data-lucide="bed-double" aria-hidden="true"></i> 2 rec.</span>
            <span><i data-lucide="bath" aria-hidden="true"></i> 2 baños</span>
            <span><i data-lucide="ruler" aria-hidden="true"></i> 105 m²</span>
          </div>
        </div>
      </article>

      <article class="property-card reveal-on-scroll">
        <div class="property-media">
          <img src="https://images.pexels.com/photos/20192218/pexels-photo-20192218.jpeg?auto=compress&cs=tinysrgb&h=500" alt="Terraza de penthouse cerca de la Quinta Avenida en Playa del Carmen" width="400" height="230" loading="lazy">
          <span class="property-tag">Penthouse</span>
          <span class="property-price">$650,000</span>
        </div>
        <div class="property-body">
          <h3>Penthouse con roof top — Quinta Avenida</h3>
          <p class="property-loc"><i data-lucide="map-pin" aria-hidden="true"></i> Centro, Playa del Carmen</p>
          <div class="property-specs">
            <span><i data-lucide="bed-double" aria-hidden="true"></i> 3 rec.</span>
            <span><i data-lucide="bath" aria-hidden="true"></i> 3 baños</span>
            <span><i data-lucide="ruler" aria-hidden="true"></i> 190 m²</span>
          </div>
        </div>
      </article>

      <article class="property-card reveal-on-scroll">
        <div class="property-media">
          <img src="https://images.pexels.com/photos/28915352/pexels-photo-28915352.jpeg?auto=compress&cs=tinysrgb&h=500" alt="Villa contemporánea con alberca privada en Selvamar" width="400" height="230" loading="lazy">
          <span class="property-tag">Alberca privada</span>
          <span class="property-price">$420,000</span>
        </div>
        <div class="property-body">
          <h3>Villa contemporánea — Selvamar</h3>
          <p class="property-loc"><i data-lucide="map-pin" aria-hidden="true"></i> Selvamar, Playa del Carmen</p>
          <div class="property-specs">
            <span><i data-lucide="bed-double" aria-hidden="true"></i> 3 rec.</span>
            <span><i data-lucide="bath" aria-hidden="true"></i> 3.5 baños</span>
            <span><i data-lucide="ruler" aria-hidden="true"></i> 240 m²</span>
          </div>
        </div>
      </article>

      <article class="property-card reveal-on-scroll">
        <div class="property-media">
          <img src="https://images.pexels.com/photos/8089172/pexels-photo-8089172.jpeg?auto=compress&cs=tinysrgb&h=500" alt="Interior luminoso de un estudio en preventa" width="400" height="230" loading="lazy">
          <span class="property-tag">Preventa</span>
          <span class="property-price">Desde $145,000</span>
        </div>
        <div class="property-body">
          <h3>Estudio y 1 rec. — Región 15</h3>
          <p class="property-loc"><i data-lucide="map-pin" aria-hidden="true"></i> Región 15, Playa del Carmen</p>
          <div class="property-specs">
            <span><i data-lucide="bed-double" aria-hidden="true"></i> 0-1 rec.</span>
            <span><i data-lucide="bath" aria-hidden="true"></i> 1 baño</span>
            <span><i data-lucide="ruler" aria-hidden="true"></i> 48 m²</span>
          </div>
        </div>
      </article>
    </div>

    <div class="text-center" style="margin-top:var(--space-6);">
      <a href="<?= L('properties') ?>" class="btn btn-ghost">Ver todas las propiedades <i data-lucide="arrow-right" aria-hidden="true"></i></a>
    </div>
  </div>
</section>

<section class="section section-sand">
  <div class="container">
    <div class="z-section reveal-on-scroll">
      <div class="z-media">
        <img src="https://images.pexels.com/photos/7937330/pexels-photo-7937330.jpeg?auto=compress&cs=tinysrgb&h=700" alt="Asesor inmobiliario mostrando una propiedad a una pareja" width="600" height="420" loading="lazy">
        <div class="float-card">
          <div class="icon-badge"><i data-lucide="shield-check" aria-hidden="true"></i></div>
          <div><strong>100% verificado</strong><span>Títulos y revisión legal</span></div>
        </div>
      </div>
      <div>
        <span class="eyebrow">Por qué nos eligen</span>
        <h2>Un equipo local que habla tu idioma, literalmente</h2>
        <p>Comprar una propiedad en el extranjero puede intimidar. Nosotros quitamos la fricción: asesores bilingües, desarrolladores verificados y un proceso paso a paso pensado para compradores extranjeros, desde tu primera videollamada hasta la entrega de llaves.</p>
        <div class="feature-list">
          <div class="feature-item">
            <div class="icon-badge"><i data-lucide="languages" aria-hidden="true"></i></div>
            <div><h4>Asesores bilingües</h4><p>Sin problemas de traducción ni sorpresas en el contrato.</p></div>
          </div>
          <div class="feature-item">
            <div class="icon-badge"><i data-lucide="scale" aria-hidden="true"></i></div>
            <div><h4>Red legal de confianza</h4><p>Trabajamos con notarios y abogados de inmigración independientes.</p></div>
          </div>
          <div class="feature-item">
            <div class="icon-badge"><i data-lucide="trending-up" aria-hidden="true"></i></div>
            <div><h4>Mentalidad de inversión</h4><p>Analizamos el rendimiento por renta y el potencial de reventa, no solo la vista.</p></div>
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
        <img src="https://images.pexels.com/photos/31649801/pexels-photo-31649801.jpeg?auto=compress&cs=tinysrgb&h=700" alt="Calle colorida de la Quinta Avenida en Playa del Carmen" width="600" height="420" loading="lazy">
        <div class="float-card">
          <div class="icon-badge"><i data-lucide="map" aria-hidden="true"></i></div>
          <div><strong>6 barrios</strong><span>Explicados a detalle</span></div>
        </div>
      </div>
      <div>
        <span class="eyebrow">Infórmate antes de comprar</span>
        <h2>Cada barrio tiene un estilo de vida distinto, y un ROI distinto</h2>
        <p>La tranquilidad de Playacar, el movimiento peatonal del Centro o las calles residenciales de Zazil-Ha: cada zona de Playa del Carmen tiene su propio precio por m², su demanda de renta y su ambiente. Creamos guías de barrios para que compres en el lugar correcto según tus objetivos.</p>
        <a href="<?= L('neighborhoods') ?>" class="btn btn-secondary" style="margin-top:var(--space-3);">Explorar los barrios</a>
      </div>
    </div>
  </div>
</section>

<section class="section section-primary">
  <div class="container">
    <div class="stats-band" style="grid-template-columns: repeat(2, 1fr);">
      <div><strong>20+</strong><span>Años de experiencia local</span></div>
      <div><strong>6-8%</strong><span>Rendimiento neto típico por renta</span></div>
    </div>
  </div>
</section>

<section class="section section-sand">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Historias de clientes</span>
      <h2>Lo que dicen nuestros compradores</h2>
    </div>
    <div class="grid grid-3">
      <div class="testimonial-card reveal-on-scroll">
        <div class="stars"><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i></div>
        <p>"Compramos nuestro departamento a distancia desde Canadá. El equipo se encargó de todo: inspecciones, trámites e incluso recomendaciones para amueblar."</p>
        <div class="author">
          <div><strong>Michael R.</strong><span>Toronto, Canadá — propietario en Playacar</span></div>
        </div>
      </div>
      <div class="testimonial-card reveal-on-scroll">
        <div class="stars"><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i></div>
        <p>"Consejos directos sobre el potencial de renta. Desde que cerramos, nuestra unidad ha estado reservada el 80% del año."</p>
        <div class="author">
          <div><strong>Laura B.</strong><span>Austin, EE. UU. — inversionista en el Centro</span></div>
        </div>
      </div>
      <div class="testimonial-card reveal-on-scroll">
        <div class="stars"><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i><i data-lucide="star" aria-hidden="true"></i></div>
        <p>"Cero presión, siempre. Nos señalaron alertas en dos propiedades que nos gustaban, y eso generó confianza de verdad."</p>
        <div class="author">
          <div><strong>Sophie D.</strong><span>París, Francia — propietaria de una villa</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cta-band reveal-on-scroll">
      <div>
        <h2>¿Listo para empezar tu búsqueda?</h2>
        <p>Cuéntanos tu presupuesto y tus objetivos: te enviaremos una selección en 48 horas.</p>
      </div>
      <a href="<?= L('contact') ?>" class="btn btn-primary">Habla con un asesor</a>
    </div>
  </div>
</section>

<section class="section section-sand">
  <div class="container" style="max-width:820px;">
    <div class="section-head">
      <span class="eyebrow">Preguntas frecuentes</span>
      <h2>Comprar propiedad en México siendo extranjero</h2>
    </div>
    <div class="faq-list">
      <div class="faq-item open">
        <div class="faq-question"><span>¿Pueden los extranjeros ser propietarios en Playa del Carmen?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Sí. Playa del Carmen está en la "zona restringida" (a menos de 50 km de la costa), por lo que los extranjeros compran mediante un fideicomiso bancario o una sociedad mexicana. Es una estructura legal sólida y probada que utilizan miles de propietarios extranjeros cada año.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question"><span>¿Cuánto dura el proceso de compra?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>En promedio de 6 a 10 semanas desde la aceptación de la oferta hasta el cierre en propiedades de reventa, incluyendo la constitución del fideicomiso. En preventa, los plazos dependen del calendario de obra del desarrollador.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question"><span>¿Qué costos adicionales debo presupuestar?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>Calcula aproximadamente del 5 al 7% del precio de compra en gastos de cierre. Consulta el desglose completo en la <a href="<?= L('investment') ?>" style="color:var(--primary); font-weight:600;">guía de inversión</a>.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-question"><span>¿Puedo obtener financiamiento siendo no residente?</span><i data-lucide="plus" aria-hidden="true"></i></div>
        <div class="faq-answer"><p>El financiamiento bancario mexicano para extranjeros es limitado, por lo que la mayoría de los compradores internacionales pagan de contado o usan los planes de pago del desarrollador en unidades de preventa.</p></div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../footer.php'; ?>

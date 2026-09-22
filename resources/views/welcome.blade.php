<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>El Mundo de los Carros — Tipos, Marcas y Modelos</title>
<link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

  <header class="nav">
    <div class="nav-inner">
      <div class="logo">🚗 <span>AutoMundo</span></div>
      <nav class="links">
        <a href="#tipos">Tipos</a>
        <a href="#marcas">Marcas</a>
        <a href="#modelos">Modelos</a>
        <a href="#comparativa">Comparativa</a>
        <a href="/cars">Catálogo</a>
      </nav>
    </div>
  </header>

  <section class="hero">
    <div class="hero-content">
      <span class="eyebrow">Guía sobre el mundo automotor</span>
      <h1>Todo sobre <em>carros</em>: tipos, marcas y modelos</h1>
      <p>Una guía visual y sencilla para conocer las carrocerías más comunes, las marcas más influyentes de la industria y algunos de los modelos que marcaron historia.</p>

      <div class="hero-stats">
        <div class="stat"><b>8</b><span>Tipos de carrocería</span></div>
        <div class="stat"><b>10</b><span>Marcas destacadas</span></div>
        <div class="stat"><b>8</b><span>Modelos icónicos</span></div>
      </div>

      <div class="car-silhouette">
        <div class="car-cabin"></div>
        <div class="car-body"></div>
        <div class="car-wheel left"></div>
        <div class="car-wheel right"></div>
      </div>
    </div>
  </section>

  <!-- ================= TIPOS ================= -->
  <section id="tipos">
    <div class="container">
      <div class="section-head">
        <span class="tag">Carrocerías</span>
        <h2>Tipos de carros</h2>
        <p>Cada tipo de carrocería está pensado para un uso distinto: ciudad, familia, trabajo o pasión por la velocidad.</p>
      </div>

      <div class="grid">
        <div class="card">
          <div class="icon">🚘</div>
          <h3>Sedán</h3>
          <p>Cuatro puertas y maletero independiente de la cabina. Ofrece buen equilibrio entre confort, espacio y eficiencia, ideal para el uso diario.</p>
          <div class="examples">Ej: Toyota Corolla, Honda Civic</div>
        </div>

        <div class="card">
          <div class="icon">🚙</div>
          <h3>SUV</h3>
          <p>Vehículo utilitario deportivo, más alto que un sedán, con opción de tracción a las cuatro ruedas y mayor capacidad de carga.</p>
          <div class="examples">Ej: Toyota RAV4, Ford Explorer</div>
        </div>

        <div class="card">
          <div class="icon">🚗</div>
          <h3>Hatchback</h3>
          <p>Compacto y ágil, con puerta trasera integrada al maletero. Muy popular en ciudades por su facilidad para estacionar.</p>
          <div class="examples">Ej: Volkswagen Golf, Honda Fit</div>
        </div>

        <div class="card">
          <div class="icon">🛻</div>
          <h3>Pickup</h3>
          <p>Caja de carga abierta en la parte trasera. Pensada para trabajo pesado, remolque y uso todo terreno.</p>
          <div class="examples">Ej: Ford F-150, Toyota Hilux</div>
        </div>

        <div class="card">
          <div class="icon">🏎️</div>
          <h3>Deportivo</h3>
          <p>Diseño aerodinámico, motores potentes y manejo enfocado en el rendimiento. Generalmente de dos puertas.</p>
          <div class="examples">Ej: Chevrolet Corvette, Porsche 911</div>
        </div>

        <div class="card">
          <div class="icon">⚡</div>
          <h3>Eléctrico</h3>
          <p>Propulsado 100% por motores eléctricos, sin emisiones directas. Cada vez más común gracias a la mejora en autonomía.</p>
          <div class="examples">Ej: Tesla Model 3, Nissan Leaf</div>
        </div>

        <div class="card">
          <div class="icon">🌤️</div>
          <h3>Convertible</h3>
          <p>Techo retráctil o desmontable. Prioriza el estilo y la experiencia de conducción al aire libre sobre la practicidad.</p>
          <div class="examples">Ej: Mazda MX-5, BMW Serie 4 Cabrio</div>
        </div>

        <div class="card">
          <div class="icon">👨‍👩‍👧‍👦</div>
          <h3>Minivan / Familiar</h3>
          <p>Espacio amplio y configuraciones de asientos flexibles, pensado para familias numerosas y viajes largos.</p>
          <div class="examples">Ej: Honda Odyssey, Kia Carnival</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= MARCAS ================= -->
  <section id="marcas" class="alt">
    <div class="container">
      <div class="section-head">
        <span class="tag">Fabricantes</span>
        <h2>Marcas reconocidas</h2>
        <p>Algunas de las marcas que han definido la historia de la industria automotriz, cada una con su propia identidad.</p>
      </div>

      <div class="brand-grid">
        <div class="brand-card">
          <div class="brand-top"><span class="brand-name">Toyota</span><span class="brand-year">1937</span></div>
          <span class="brand-country">🇯🇵 Japón</span>
          <p class="brand-desc">Conocida por su confiabilidad y por ser pionera en tecnología híbrida.</p>
        </div>

        <div class="brand-card">
          <div class="brand-top"><span class="brand-name">Ford</span><span class="brand-year">1903</span></div>
          <span class="brand-country">🇺🇸 Estados Unidos</span>
          <p class="brand-desc">Pionera de la producción en masa; referente en pickups como la F-150.</p>
        </div>

        <div class="brand-card">
          <div class="brand-top"><span class="brand-name">BMW</span><span class="brand-year">1916</span></div>
          <span class="brand-country">🇩🇪 Alemania</span>
          <p class="brand-desc">Sinónimo de lujo deportivo bajo su lema "placer de conducir".</p>
        </div>

        <div class="brand-card">
          <div class="brand-top"><span class="brand-name">Mercedes-Benz</span><span class="brand-year">1926</span></div>
          <span class="brand-country">🇩🇪 Alemania</span>
          <p class="brand-desc">Lujo e innovación constante, con un fuerte enfoque en seguridad.</p>
        </div>

        <div class="brand-card">
          <div class="brand-top"><span class="brand-name">Tesla</span><span class="brand-year">2003</span></div>
          <span class="brand-country">🇺🇸 Estados Unidos</span>
          <p class="brand-desc">Marca líder en vehículos 100% eléctricos y conducción asistida.</p>
        </div>

        <div class="brand-card">
          <div class="brand-top"><span class="brand-name">Chevrolet</span><span class="brand-year">1911</span></div>
          <span class="brand-country">🇺🇸 Estados Unidos</span>
          <p class="brand-desc">Amplia variedad de modelos, con deportivos icónicos como el Corvette.</p>
        </div>

        <div class="brand-card">
          <div class="brand-top"><span class="brand-name">Audi</span><span class="brand-year">1909</span></div>
          <span class="brand-country">🇩🇪 Alemania</span>
          <p class="brand-desc">Reconocida por su tracción quattro y un diseño elegante y tecnológico.</p>
        </div>

        <div class="brand-card">
          <div class="brand-top"><span class="brand-name">Honda</span><span class="brand-year">1948</span></div>
          <span class="brand-country">🇯🇵 Japón</span>
          <p class="brand-desc">Motores eficientes y confiables, con fuerte presencia en autos compactos.</p>
        </div>

        <div class="brand-card">
          <div class="brand-top"><span class="brand-name">Volkswagen</span><span class="brand-year">1937</span></div>
          <span class="brand-country">🇩🇪 Alemania</span>
          <p class="brand-desc">Nació como "el auto del pueblo"; hoy uno de los mayores grupos automotrices del mundo.</p>
        </div>

        <div class="brand-card">
          <div class="brand-top"><span class="brand-name">Porsche</span><span class="brand-year">1931</span></div>
          <span class="brand-country">🇩🇪 Alemania</span>
          <p class="brand-desc">Especialista en deportivos de alto rendimiento, con el 911 como su ícono.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= MODELOS ================= -->
  <section id="modelos">
    <div class="container">
      <div class="section-head">
        <span class="tag">Modelos icónicos</span>
        <h2>Modelos destacados</h2>
        <p>Algunos vehículos que, por su historia, ventas o innovación, se volvieron referentes dentro de su categoría.</p>
      </div>

      <div class="model-grid">
        <div class="model-card">
          <div class="model-banner red">🚘</div>
          <div class="model-body">
            <span class="brand-label">Toyota</span>
            <h3>Corolla</h3>
            <div class="model-meta"><span class="pill">Sedán</span><span class="pill">Compacto</span></div>
            <p>El auto más vendido de la historia a nivel mundial, símbolo de confiabilidad.</p>
          </div>
        </div>

        <div class="model-card">
          <div class="model-banner blue">🏎️</div>
          <div class="model-body">
            <span class="brand-label">Ford</span>
            <h3>Mustang</h3>
            <div class="model-meta"><span class="pill">Deportivo</span><span class="pill">Muscle car</span></div>
            <p>Ícono estadounidense desde 1964, referente de los "pony cars".</p>
          </div>
        </div>

        <div class="model-card">
          <div class="model-banner gray">⚡</div>
          <div class="model-body">
            <span class="brand-label">Tesla</span>
            <h3>Model 3</h3>
            <div class="model-meta"><span class="pill">Eléctrico</span><span class="pill">Sedán</span></div>
            <p>Referente en autonomía, tecnología a bordo y conducción asistida.</p>
          </div>
        </div>

        <div class="model-card">
          <div class="model-banner gold">🚗</div>
          <div class="model-body">
            <span class="brand-label">BMW</span>
            <h3>Serie 3</h3>
            <div class="model-meta"><span class="pill">Sedán</span><span class="pill">Deportivo</span></div>
            <p>Equilibrio entre lujo, tecnología y placer de manejo desde 1975.</p>
          </div>
        </div>

        <div class="model-card">
          <div class="model-banner red">🛻</div>
          <div class="model-body">
            <span class="brand-label">Toyota</span>
            <h3>Hilux</h3>
            <div class="model-meta"><span class="pill">Pickup</span><span class="pill">Todoterreno</span></div>
            <p>Legendaria por su resistencia extrema en cualquier terreno.</p>
          </div>
        </div>

        <div class="model-card">
          <div class="model-banner blue">🏁</div>
          <div class="model-body">
            <span class="brand-label">Porsche</span>
            <h3>911</h3>
            <div class="model-meta"><span class="pill">Deportivo</span><span class="pill">Ícono</span></div>
            <p>Mantiene su diseño esencial desde 1963, evolucionando en cada generación.</p>
          </div>
        </div>

        <div class="model-card">
          <div class="model-banner gray">🚙</div>
          <div class="model-body">
            <span class="brand-label">Jeep</span>
            <h3>Wrangler</h3>
            <div class="model-meta"><span class="pill">SUV</span><span class="pill">Off-road</span></div>
            <p>Capacidad todo terreno pura, con un diseño reconocible en cualquier parte.</p>
          </div>
        </div>

        <div class="model-card">
          <div class="model-banner gold">🚗</div>
          <div class="model-body">
            <span class="brand-label">Volkswagen</span>
            <h3>Golf GTI</h3>
            <div class="model-meta"><span class="pill">Hatchback</span><span class="pill">Deportivo</span></div>
            <p>El "hot hatch" original, referencia obligada desde 1976.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= COMPARATIVA ================= -->
  <section id="comparativa" class="alt">
    <div class="container">
      <div class="section-head">
        <span class="tag">Comparativa rápida</span>
        <h2>Tipos de carrocería en resumen</h2>
        <p>Una vista rápida de las diferencias clave entre los tipos de carrocería más comunes.</p>
      </div>

      <div class="table-wrap">
        <table>
          <thead>
            <tr>
              <th>Tipo</th>
              <th>Espacio</th>
              <th>Uso principal</th>
              <th>Ejemplo</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Sedán</td>
              <td class="dim">Medio</td>
              <td>Ciudad y carretera</td>
              <td>Toyota Corolla</td>
            </tr>
            <tr>
              <td>SUV</td>
              <td class="dim">Alto</td>
              <td>Familia y viajes</td>
              <td>Ford Explorer</td>
            </tr>
            <tr>
              <td>Hatchback</td>
              <td class="dim">Bajo-Medio</td>
              <td>Ciudad</td>
              <td>Honda Fit</td>
            </tr>
            <tr>
              <td>Pickup</td>
              <td class="dim">Muy alto</td>
              <td>Trabajo y carga</td>
              <td>Toyota Hilux</td>
            </tr>
            <tr>
              <td>Deportivo</td>
              <td class="dim">Bajo</td>
              <td>Rendimiento</td>
              <td>Porsche 911</td>
            </tr>
            <tr>
              <td>Eléctrico</td>
              <td class="dim">Variable</td>
              <td>Eficiencia y tecnología</td>
              <td>Tesla Model 3</td>
            </tr>
            <tr>
              <td>Convertible</td>
              <td class="dim">Bajo</td>
              <td>Estilo</td>
              <td>Mazda MX-5</td>
            </tr>
            <tr>
              <td>Minivan</td>
              <td class="dim">Muy alto</td>
              <td>Familia numerosa</td>
              <td>Kia Carnival</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <footer>
    <div class="logo">🚗 <span>AutoMundo</span></div>
    <p>Página informativa creada con HTML y CSS en un solo archivo · Contenido con fines educativos.</p>
  </footer>

</body>
</html>
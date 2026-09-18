<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>El Mundo de los Carros — Tipos, Marcas y Modelos</title>
<style>
  :root{
    --bg: #0e0f12;
    --bg-alt: #16181d;
    --card: #1c1f26;
    --card-hover: #23272f;
    --text: #eef0f3;
    --text-dim: #9aa1ac;
    --accent: #ff4d2d;
    --accent-2: #ffb020;
    --line: #2a2e37;
    --radius: 14px;
  }

  *{ box-sizing: border-box; margin:0; padding:0; }

  html{ scroll-behavior: smooth; }

  body{
    background: var(--bg);
    color: var(--text);
    font-family: "Segoe UI", system-ui, -apple-system, "Helvetica Neue", Arial, sans-serif;
    line-height: 1.6;
  }

  a{ color: inherit; text-decoration: none; }

  img{ max-width:100%; display:block; }

  .container{
    max-width: 1180px;
    margin: 0 auto;
    padding: 0 24px;
  }

  /* ---------- NAV ---------- */
  header.nav{
    position: sticky;
    top: 0;
    z-index: 50;
    background: rgba(14,15,18,0.9);
    backdrop-filter: blur(8px);
    border-bottom: 1px solid var(--line);
  }

  .nav-inner{
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding: 16px 24px;
    max-width: 1180px;
    margin: 0 auto;
  }

  .logo{
    font-weight: 800;
    font-size: 1.25rem;
    letter-spacing: 0.5px;
    display:flex;
    align-items:center;
    gap:8px;
  }

  .logo span{
    background: linear-gradient(135deg, var(--accent), var(--accent-2));
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
  }

  nav.links{
    display:flex;
    gap: 28px;
    font-size: 0.95rem;
    font-weight: 600;
  }

  nav.links a{
    color: var(--text-dim);
    transition: color 0.2s;
    position: relative;
    padding: 4px 0;
  }

  nav.links a:hover{ color: var(--text); }

  nav.links a::after{
    content:"";
    position:absolute;
    left:0; bottom:-4px;
    width:0%;
    height:2px;
    background: linear-gradient(90deg, var(--accent), var(--accent-2));
    transition: width 0.25s;
  }

  nav.links a:hover::after{ width:100%; }

  /* ---------- HERO ---------- */
  .hero{
    position: relative;
    padding: 110px 24px 100px;
    text-align:center;
    overflow:hidden;
    background:
      radial-gradient(circle at 20% 20%, rgba(255,77,45,0.18), transparent 45%),
      radial-gradient(circle at 80% 30%, rgba(255,176,32,0.14), transparent 40%),
      var(--bg);
  }

  .hero::before{
    content:"";
    position:absolute;
    inset:0;
    background-image: linear-gradient(rgba(255,255,255,0.035) 1px, transparent 1px),
                       linear-gradient(90deg, rgba(255,255,255,0.035) 1px, transparent 1px);
    background-size: 42px 42px;
    mask-image: radial-gradient(ellipse at center, black 40%, transparent 75%);
  }

  .hero-content{ position:relative; z-index:2; }

  .eyebrow{
    display:inline-block;
    padding: 6px 16px;
    border-radius: 999px;
    border: 1px solid var(--line);
    background: rgba(255,255,255,0.03);
    color: var(--accent-2);
    font-size: 0.8rem;
    font-weight: 700;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    margin-bottom: 24px;
  }

  .hero h1{
    font-size: clamp(2.2rem, 5vw, 3.6rem);
    font-weight: 800;
    line-height: 1.15;
    margin-bottom: 20px;
  }

  .hero h1 em{
    font-style: normal;
    background: linear-gradient(135deg, var(--accent), var(--accent-2));
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
  }

  .hero p{
    max-width: 620px;
    margin: 0 auto 36px;
    color: var(--text-dim);
    font-size: 1.05rem;
  }

  .hero-stats{
    display:flex;
    justify-content:center;
    gap: 48px;
    flex-wrap: wrap;
    margin-top: 10px;
  }

  .stat b{
    display:block;
    font-size: 1.8rem;
    font-weight: 800;
    background: linear-gradient(135deg, var(--accent), var(--accent-2));
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
  }

  .stat span{
    color: var(--text-dim);
    font-size: 0.85rem;
  }

  /* silueta de un auto dibujada solo con CSS */
  .car-silhouette{
    width: min(560px, 85vw);
    height: 140px;
    margin: 56px auto 0;
    position: relative;
  }

  .car-body{
    position:absolute;
    left:0; right:0; bottom: 28px;
    height: 60px;
    background: linear-gradient(135deg, var(--accent), var(--accent-2));
    border-radius: 30px 30px 14px 14px;
  }

  .car-cabin{
    position:absolute;
    left: 24%; right: 24%; bottom: 78px;
    height: 46px;
    background: linear-gradient(135deg, var(--accent), var(--accent-2));
    border-radius: 40px 40px 0 0;
    opacity: 0.9;
  }

  .car-wheel{
    position:absolute;
    bottom: 6px;
    width: 44px; height: 44px;
    background: #0a0a0b;
    border: 6px solid #2b2e35;
    border-radius: 50%;
  }

  .car-wheel.left{ left: 16%; }
  .car-wheel.right{ right: 16%; }

  /* ---------- SECTIONS ---------- */
  section{ padding: 90px 0; }

  section.alt{ background: var(--bg-alt); }

  .section-head{
    text-align:center;
    max-width: 640px;
    margin: 0 auto 52px;
  }

  .section-head .tag{
    color: var(--accent);
    font-weight: 700;
    font-size: 0.8rem;
    letter-spacing: 1.5px;
    text-transform: uppercase;
  }

  .section-head h2{
    font-size: clamp(1.6rem, 3vw, 2.3rem);
    margin: 10px 0 14px;
  }

  .section-head p{ color: var(--text-dim); }

  /* ---------- GRID CARDS ---------- */
  .grid{
    display:grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 22px;
  }

  .card{
    background: var(--card);
    border: 1px solid var(--line);
    border-radius: var(--radius);
    padding: 26px;
    transition: transform 0.25s ease, border-color 0.25s ease, background 0.25s ease;
  }

  .card:hover{
    transform: translateY(-6px);
    background: var(--card-hover);
    border-color: rgba(255,77,45,0.4);
  }

  .card .icon{
    font-size: 1.8rem;
    width: 56px; height: 56px;
    display:flex; align-items:center; justify-content:center;
    border-radius: 12px;
    background: linear-gradient(135deg, rgba(255,77,45,0.18), rgba(255,176,32,0.12));
    margin-bottom: 18px;
  }

  .card h3{ font-size: 1.15rem; margin-bottom: 8px; }

  .card p{ color: var(--text-dim); font-size: 0.92rem; }

  .card .examples{
    margin-top: 14px;
    padding-top: 14px;
    border-top: 1px dashed var(--line);
    font-size: 0.82rem;
    color: var(--accent-2);
    font-weight: 600;
  }

  /* ---------- BRANDS ---------- */
  .brand-grid{
    display:grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
  }

  .brand-card{
    background: var(--card);
    border: 1px solid var(--line);
    border-radius: var(--radius);
    padding: 22px;
    display:flex;
    flex-direction:column;
    gap: 6px;
    transition: transform 0.25s, border-color 0.25s;
  }

  .brand-card:hover{
    transform: translateY(-4px) scale(1.01);
    border-color: rgba(255,176,32,0.45);
  }

  .brand-top{
    display:flex;
    align-items:center;
    justify-content:space-between;
    margin-bottom: 6px;
  }

  .brand-name{ font-weight: 800; font-size: 1.05rem; }

  .brand-year{
    font-size: 0.72rem;
    color: var(--bg);
    background: var(--accent-2);
    padding: 3px 9px;
    border-radius: 999px;
    font-weight: 700;
  }

  .brand-country{ color: var(--text-dim); font-size: 0.82rem; }

  .brand-desc{ font-size: 0.9rem; color: var(--text); margin-top: 6px; }

  /* ---------- MODELS TABLE / CARDS ---------- */
  .model-grid{
    display:grid;
    grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
    gap: 22px;
  }

  .model-card{
    background: linear-gradient(180deg, var(--card), var(--bg-alt));
    border: 1px solid var(--line);
    border-radius: var(--radius);
    overflow: hidden;
    transition: transform 0.25s, border-color 0.25s;
  }

  .model-card:hover{
    transform: translateY(-6px);
    border-color: rgba(255,77,45,0.4);
  }

  .model-banner{
    height: 90px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size: 2.2rem;
  }

  .model-banner.red{ background: linear-gradient(135deg,#7a1f10,#2b0d06); }
  .model-banner.gold{ background: linear-gradient(135deg,#8a5a0a,#2b1d06); }
  .model-banner.blue{ background: linear-gradient(135deg,#123a5e,#08131f); }
  .model-banner.gray{ background: linear-gradient(135deg,#3a3f4a,#15171b); }

  .model-body{ padding: 20px; }

  .model-body .brand-label{
    color: var(--accent-2);
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
  }

  .model-body h3{ margin: 6px 0 8px; font-size: 1.15rem; }

  .model-meta{
    display:flex;
    gap:10px;
    flex-wrap:wrap;
    margin-bottom: 10px;
  }

  .pill{
    font-size: 0.72rem;
    font-weight: 700;
    background: rgba(255,255,255,0.06);
    border: 1px solid var(--line);
    padding: 3px 10px;
    border-radius: 999px;
    color: var(--text-dim);
  }

  .model-body p{ color: var(--text-dim); font-size: 0.88rem; }

  /* ---------- COMPARATIVA (tabla) ---------- */
  .table-wrap{
    overflow-x: auto;
    border: 1px solid var(--line);
    border-radius: var(--radius);
  }

  table{
    width: 100%;
    border-collapse: collapse;
    min-width: 640px;
  }

  thead th{
    text-align:left;
    background: var(--bg-alt);
    color: var(--accent-2);
    font-size: 0.78rem;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 14px 18px;
    border-bottom: 1px solid var(--line);
  }

  tbody td{
    padding: 14px 18px;
    border-bottom: 1px solid var(--line);
    font-size: 0.92rem;
    color: var(--text);
  }

  tbody tr:last-child td{ border-bottom:none; }

  tbody tr:hover{ background: rgba(255,255,255,0.03); }

  tbody td.dim{ color: var(--text-dim); }

  /* ---------- FOOTER ---------- */
  footer{
    padding: 50px 24px 30px;
    text-align:center;
    border-top: 1px solid var(--line);
    color: var(--text-dim);
    font-size: 0.85rem;
  }

  footer .logo{ justify-content:center; margin-bottom: 10px; }

  /* ---------- RESPONSIVE ---------- */
  @media (max-width: 720px){
    nav.links{ display:none; }
    section{ padding: 60px 0; }
    .hero{ padding: 80px 20px 70px; }
  }
</style>
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
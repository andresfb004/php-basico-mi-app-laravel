<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detalle del carro | AutoMundo</title>
<link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

  <header class="nav">
    <div class="nav-inner">
      <a href="/" class="logo">🚗 <span>AutoMundo</span></a>
      <nav class="links">
        <a href="/#tipos">Tipos</a>
        <a href="/#marcas">Marcas</a>
        <a href="/#modelos">Modelos</a>
        <a href="/cars">Catálogo</a>
      </nav>
    </div>
  </header>

  <section class="page-body">
    <div class="container">
      <div class="detail">
        <div class="detail-visual model-banner red">🚘</div>

        <div class="detail-info">
          <span class="tag" style="color: var(--accent); font-weight:700; text-transform:uppercase; font-size:0.8rem;">Sedán</span>
          <h1>Toyota Corolla</h1>
          <p>El auto más vendido de la historia a nivel mundial, símbolo de confiabilidad, bajo consumo y excelente valor de reventa.</p>

          <span class="price">$ 120.000.000</span>

          <div class="specs">
            <div class="spec"><span>Marca</span><b>Toyota</b></div>
            <div class="spec"><span>Año</span><b>2024</b></div>
            <div class="spec"><span>Carrocería</span><b>Sedán</b></div>
            <div class="spec"><span>Referencia</span><b>#1</b></div>
          </div>

          <div class="actions">
            <a href="/cars" class="btn">← Volver al catálogo</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="logo">🚗 <span>AutoMundo</span></div>
    <p>Catálogo de carros creado con Laravel · Contenido con fines educativos.</p>
  </footer>

</body>
</html>


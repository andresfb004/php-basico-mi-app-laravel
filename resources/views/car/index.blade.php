<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Catálogo de carros | AutoMundo</title>
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

  <section class="page-head">
    <div class="container">
      <span class="tag">Catálogo</span>
      <h1>Carros disponibles</h1>
      <p>Explora los carros registrados en AutoMundo, organizados por tipo de carrocería.</p>
    </div>
  </section>

  <section class="page-body">
    <div class="container">
      <div class="toolbar">
        <span class="count">3 carros registrados</span>
        <a href="/cars/create" class="btn btn-primary">Registrar carro +</a>
      </div>

      <div class="model-grid">
        <div class="model-card">
          <div class="model-banner red">🚘</div>
          <div class="model-body">
            <span class="brand-label">Toyota</span>
            <h3>Corolla</h3>
            <div class="model-meta"><span class="pill">Sedán</span><span class="pill">2024</span></div>
            <p>El auto más vendido de la historia a nivel mundial, símbolo de confiabilidad.</p>
            <div class="model-footer">
              <span class="price">$ 120.000.000</span>
              <a href="/cars/1" class="link-more">Ver detalle →</a>
            </div>
          </div>
        </div>

        <div class="model-card">
          <div class="model-banner blue">🏎️</div>
          <div class="model-body">
            <span class="brand-label">Ford</span>
            <h3>Mustang</h3>
            <div class="model-meta"><span class="pill">Deportivo</span><span class="pill">2023</span></div>
            <p>Ícono estadounidense desde 1964, referente de los "pony cars".</p>
            <div class="model-footer">
              <span class="price">$ 310.000.000</span>
              <a href="/cars/2" class="link-more">Ver detalle →</a>
            </div>
          </div>
        </div>

        <div class="model-card">
          <div class="model-banner gray">⚡</div>
          <div class="model-body">
            <span class="brand-label">Tesla</span>
            <h3>Model 3</h3>
            <div class="model-meta"><span class="pill">Eléctrico</span><span class="pill">2024</span></div>
            <p>Referente en autonomía, tecnología a bordo y conducción asistida.</p>
            <div class="model-footer">
              <span class="price">$ 240.000.000</span>
              <a href="/cars/3" class="link-more">Ver detalle →</a>
            </div>
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


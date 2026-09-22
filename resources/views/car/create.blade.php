<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registrar carro | AutoMundo</title>
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
      <span class="tag">Nuevo registro</span>
      <h1>Registrar un carro</h1>
      <p>Completa la información del vehículo para agregarlo al catálogo.</p>
    </div>
  </section>

  <section class="page-body">
    <div class="container">
      <!-- id, nombre, marca, año, precio, descripción, tipo de carrocería -->
      <form class="form-card">
        <div class="form-grid">
          <div class="form-group">
            <label for="name">Modelo</label>
            <input id="name" type="text" class="form-control" placeholder="Ej: Corolla">
          </div>

          <div class="form-group">
            <label for="brand">Marca</label>
            <input id="brand" type="text" class="form-control" placeholder="Ej: Toyota">
          </div>

          <div class="form-group">
            <label for="year">Año</label>
            <input id="year" type="number" class="form-control" placeholder="Ej: 2024">
          </div>

          <div class="form-group">
            <label for="price">Precio (COP)</label>
            <input id="price" type="number" class="form-control" placeholder="Ej: 120000000">
          </div>

          <div class="form-group full">
            <label for="category">Tipo de carrocería</label>
            <select id="category" class="form-control">
              <option>Sedán</option>
              <option>SUV</option>
              <option>Hatchback</option>
              <option>Pickup</option>
              <option>Deportivo</option>
              <option>Eléctrico</option>
            </select>
          </div>

          <div class="form-group full">
            <label for="description">Descripción</label>
            <textarea id="description" class="form-control" placeholder="Describe el carro..."></textarea>
          </div>
        </div>

        <div class="form-actions">
          <a href="/cars" class="btn">Cancelar</a>
          <button type="button" class="btn btn-primary">Guardar carro</button>
        </div>
      </form>
    </div>
  </section>

  <footer>
    <div class="logo">🚗 <span>AutoMundo</span></div>
    <p>Catálogo de carros creado con Laravel · Contenido con fines educativos.</p>
  </footer>

</body>
</html>


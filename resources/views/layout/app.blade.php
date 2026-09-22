<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="AutoMundo - Tipos, marcas y modelos de carros.">
<title>@yield('title', 'AutoMundo | El mundo de los carros')</title>
<link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

  <header class="nav">
    <div class="nav-inner">
      <a href="{{ url('/') }}" class="logo">🚗 <span>AutoMundo</span></a>
      <nav class="links">
        <a href="{{ url('/') }}#tipos">Tipos</a>
        <a href="{{ url('/') }}#marcas">Marcas</a>
        <a href="{{ url('/') }}#modelos">Modelos</a>
        <a href="{{ url('/cars') }}">Catálogo</a>
      </nav>
    </div>
  </header>

  <main>
    @yield('content')
  </main>

  <footer>
    <div class="logo">🚗 <span>AutoMundo</span></div>
    <p>Catálogo de carros creado con Laravel · Contenido con fines educativos.</p>
  </footer>

</body>
</html>

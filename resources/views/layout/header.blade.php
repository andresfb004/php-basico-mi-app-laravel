<!-- =====================================================
     NAVBAR PÚBLICO AUTOMUNDO
===================================================== -->
<header class="nav">
  <div class="nav-inner">
    <a href="{{ url('/') }}" class="logo">🚗 <span>AutoMundo</span></a>

    <nav class="links">
      <a href="{{ url('/') }}#tipos">Tipos</a>
      <a href="{{ url('/') }}#marcas">Marcas</a>
      <a href="{{ url('/') }}#modelos">Modelos</a>
      <a href="{{ url('/') }}#comparativa">Comparativa</a>
      <a href="{{ route('cars.index') }}">Catálogo →</a>
    </nav>
  </div>
</header>

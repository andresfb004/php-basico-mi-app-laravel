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
      <a href="{{ route('cars.index') }}">Catálogo</a>
    </nav>

    <!-- Sesión: invitado vs usuario autenticado -->
    <div class="nav-session">
      @auth
        <span class="nav-user">Hola, {{ Auth::user()->name }}</span>
        <a href="{{ route('cars.manage') }}" class="btn btn-sm btn-primary">Gestión</a>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-sm">Salir</button>
        </form>
      @else
        <a href="{{ route('login') }}" class="btn btn-sm">Iniciar sesión</a>
      @endauth
    </div>
  </div>
</header>

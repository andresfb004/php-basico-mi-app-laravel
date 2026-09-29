<!-- =====================================================
     BARRA DE GESTIÓN (solo usuarios autenticados)
===================================================== -->
<div class="admin-bar">
  <div class="admin-bar-inner">
    <div class="admin-bar-links">
      <a href="{{ route('cars.manage') }}" class="{{ request()->routeIs('cars.manage') ? 'active' : '' }}">Gestión del catálogo</a>
      <a href="{{ route('cars.create') }}" class="{{ request()->routeIs('cars.create') ? 'active' : '' }}">+ Registrar carro</a>
      <a href="{{ route('profile.edit') }}">Mi perfil</a>
      <a href="{{ route('cars.index') }}">Ver catálogo público ↗</a>
    </div>
    <span class="nav-user">Sesión activa: {{ Auth::user()->email }}</span>
  </div>
</div>

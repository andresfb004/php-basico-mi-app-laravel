<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Acceso | AutoMundo</title>
<link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

  @include('layout.header')

  <main class="auth-page">
    <div class="auth-card">
      <a href="{{ url('/') }}" class="logo auth-logo">🚗 <span>AutoMundo</span></a>

      {{ $slot }}
    </div>
  </main>

  @include('layout.footer')

</body>
</html>

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

  @include('layout.header')

  <main>
    @yield('content')
  </main>

  @include('layout.footer')

</body>
</html>

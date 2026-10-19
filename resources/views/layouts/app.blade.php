<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('titulo') - Eventia Producciones</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/eventia.css') }}">
</head>
<body class="has-navbar-fixed-top">

  {{-- Menú fijo --}}
  <nav class="navbar is-fixed-top barra">
    <div class="navbar-brand">
      <a class="navbar-item logo" href="{{ route('inicio') }}">Eventia</a>
      <a role="button" class="navbar-burger" id="burger" aria-label="Abrir menú" aria-expanded="false" aria-controls="menu">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div class="navbar-menu" id="menu">
      <div class="navbar-end">
        <a class="navbar-item {{ request()->routeIs('inicio') ? 'is-active' : '' }}" href="{{ route('inicio') }}">Inicio</a>
        <a class="navbar-item {{ request()->routeIs('eventos') ? 'is-active' : '' }}" href="{{ route('eventos') }}">Eventos</a>
        <a class="navbar-item {{ request()->routeIs('boletos') ? 'is-active' : '' }}" href="{{ route('boletos') }}">Boletos</a>
        <a class="navbar-item {{ request()->routeIs('galeria') ? 'is-active' : '' }}" href="{{ route('galeria') }}">Galería</a>
        <a class="navbar-item {{ request()->routeIs('nosotros') ? 'is-active' : '' }}" href="{{ route('nosotros') }}">Nosotros</a>
        <a class="navbar-item {{ request()->routeIs('contacto') ? 'is-active' : '' }}" href="{{ route('contacto') }}">Contacto</a>
      </div>
    </div>
  </nav>

  {{-- Aquí se inserta el contenido de cada página --}}
  @yield('contenido')

  <footer class="footer pie has-text-centered">
    <p>Eventia Producciones &copy; {{ date('Y') }}</p>
    <p>Conciertos, festivales y celebraciones en Honduras</p>
  </footer>

  {{-- Abre y cierra el menú en celular --}}
  <script>
    document.getElementById('burger').addEventListener('click', function () {
      this.classList.toggle('is-active');
      document.getElementById('menu').classList.toggle('is-active');
      this.setAttribute('aria-expanded', this.classList.contains('is-active'));
    });
  </script>
</body>
</html>

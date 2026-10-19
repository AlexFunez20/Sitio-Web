@extends('layouts.app')

@section('titulo', 'Galería')

@section('contenido')
  @include('partials.cabecera', ['titulo' => 'Galería', 'subtitulo' => 'Momentos de nuestros eventos'])

  <section class="section">
    <div class="container">
      <div class="columns is-multiline">
        @foreach ([
          ['nombre' => 'Conciertos en vivo', 'icono' => 'fa-music'],
          ['nombre' => 'Festivales', 'icono' => 'fa-ticket'],
          ['nombre' => 'Música y cultura', 'icono' => 'fa-masks-theater'],
          ['nombre' => 'Noches especiales', 'icono' => 'fa-moon'],
          ['nombre' => 'Eventos familiares', 'icono' => 'fa-people-group'],
          ['nombre' => 'Celebraciones', 'icono' => 'fa-champagne-glasses'],
        ] as $momento)
          <div class="column is-6-mobile is-4-tablet">
            <div class="card tarjeta galeria-item">
              <div class="card-content has-text-centered">
                <i class="fa-solid {{ $momento['icono'] }} icono-galeria" aria-hidden="true"></i>
                <p>{{ $momento['nombre'] }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection

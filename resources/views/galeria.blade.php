@extends('layouts.app')

@section('titulo', 'Galería')

@section('contenido')
  @include('partials.cabecera', ['titulo' => 'Galería', 'subtitulo' => 'Momentos de nuestros eventos'])

  <section class="section">
    <div class="container">
      <div class="columns is-multiline">
        @foreach (['Conciertos en vivo', 'Festivales', 'Música y cultura', 'Noches especiales', 'Eventos familiares', 'Celebraciones'] as $momento)
          <div class="column is-6-mobile is-4-tablet">
            <div class="card tarjeta galeria-item">
              <div class="card-content">{{ $momento }}</div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection

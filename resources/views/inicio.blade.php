@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')
  <section class="hero is-medium fondo-atardecer">
    <div class="hero-body">
      <div class="container">
        <div class="columns is-vcentered">
          <div class="column is-8">
            <h1 class="title is-1">Vive experiencias inolvidables</h1>
            <p class="subtitle">Conciertos, festivales y celebraciones en Honduras.</p>
            <div class="buttons">
              <a href="{{ route('eventos') }}" class="button is-medium boton-oscuro">Ver próximos eventos</a>
              <a href="#como-participar" class="button is-medium boton-borde">Cómo participar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <h2 class="title is-3 has-text-centered">Próximos eventos</h2>
      @include('partials.eventos', ['limite' => 3])
      <div class="has-text-centered mt-5">
        <a href="{{ route('eventos') }}" class="button is-medium boton-oscuro">Ver todos los eventos</a>
      </div>
    </div>
  </section>

  <section class="section" id="como-participar">
    <div class="container">
      <h2 class="title is-3 has-text-centered">Cómo participar</h2>
      <div class="columns is-multiline">
        @php($pasos = \App\Models\ComoParticipar::query()->where('activo', true)->orderBy('orden')->get())
        @foreach ($pasos as $paso)
          <div class="column is-3">
            <div class="card tarjeta">
              <div class="card-content has-text-centered">
                <h3 class="title is-5">{{ $paso->titulo }}</h3>
                <p>{{ $paso->descripcion }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection

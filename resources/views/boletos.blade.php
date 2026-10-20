@extends('layouts.app')

@section('titulo', 'Boletos')

@section('contenido')
  @include('partials.cabecera', ['titulo' => 'Tipos de boletos', 'subtitulo' => 'Precios según cada evento'])

  <section class="section">
    <div class="container">
      <div class="columns is-multiline">
        @php($tipos = \App\Models\TipoBoleto::query()->where('activo', true)->whereHas('evento', fn ($query) => $query->where('estado', 'publicado'))->with('evento')->orderBy('precio')->get())
        @foreach ($tipos as $tipo)
          <div class="column is-4">
            <div class="card tarjeta">
              <div class="card-content has-text-centered">
                <i class="fa-solid fa-ticket icono-boleto" aria-hidden="true"></i>
                <h3 class="title is-4">{{ $tipo->nombre }}</h3>
                <p class="precio">L {{ number_format($tipo->precio, 2) }}</p>
                <p class="has-text-weight-semibold">{{ $tipo->evento->nombre }}</p>
                <p class="mt-2">{{ $tipo->descripcion ?: 'Acceso al evento con este tipo de entrada.' }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection

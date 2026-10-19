@extends('layouts.app')

@section('titulo', 'Boletos')

@section('contenido')
  @include('partials.cabecera', ['titulo' => 'Tipos de boletos', 'subtitulo' => 'Precios ilustrativos, pueden variar según el evento'])

  <section class="section">
    <div class="container">
      <div class="columns">

        <div class="column is-4">
          <div class="card tarjeta">
            <div class="card-content has-text-centered">
              <h3 class="title is-4">General</h3>
              <p class="precio">L 250</p>
              <p>Entrada al evento y zona general.</p>
            </div>
          </div>
        </div>

        <div class="column is-4">
          <div class="card tarjeta">
            <div class="card-content has-text-centered">
              <h3 class="title is-4">Preferencial</h3>
              <p class="precio">L 450</p>
              <p>Mejor ubicación y acceso rápido.</p>
            </div>
          </div>
        </div>

        <div class="column is-4">
          <div class="card tarjeta">
            <div class="card-content has-text-centered">
              <h3 class="title is-4">VIP</h3>
              <p class="precio">L 900</p>
              <p>Zona exclusiva, bebidas y atención especial.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection

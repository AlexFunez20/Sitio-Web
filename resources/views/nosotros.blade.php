@extends('layouts.app')

@section('titulo', 'Nosotros')

@section('contenido')
  @include('partials.cabecera', ['titulo' => 'Nosotros', 'subtitulo' => 'Quiénes somos'])

  <section class="section">
    <div class="container">
      <div class="columns is-vcentered">
        <div class="column is-8">
          <div class="content">
            <p>Eventia Producciones es una empresa hondureña dedicada a organizar conciertos, festivales y celebraciones.</p>
            <p>Nos enfocamos en cuidar cada detalle: la música, el lugar, la seguridad y la atención al público, para que cada evento sea una experiencia inolvidable.</p>
          </div>
          <div class="column is-8">
          <div class="content">
            <p>Te esperamos en cada evento y que disfrutes de tu experiencia junto a nosotros.</p>
            <p>No te pierdas ningun evento y hazlo inmemorable, nos aseguramos que obtengas la mejor experiencia posible y que quedes satisfecho.</p>
          </div>
        </div>
        </div>
        <div class="column is-4">
          <div class="nosotros-destacado">
            <p class="title is-5">Eventia Producciones</p>
            <p>Creando momentos para recordar.</p>
          </div>
        </div>
        
        
      </div>
    </div>
  </section>
@endsection

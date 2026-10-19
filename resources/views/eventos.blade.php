@extends('layouts.app')

@section('titulo', 'Eventos')

@section('contenido')
  @include('partials.cabecera', ['titulo' => 'Próximos eventos', 'subtitulo' => 'Elige tu próxima celebración'])

  <section class="section">
    <div class="container">
      @include('partials.eventos')
    </div>
  </section>
@endsection

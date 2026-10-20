@extends('layouts.app')

@section('titulo', 'Galería')

@section('contenido')
  @include('partials.cabecera', ['titulo' => 'Galería', 'subtitulo' => 'Momentos de nuestros eventos'])

  <section class="section">
    <div class="container">
      <div class="columns is-multiline">
        @php($fotos = \App\Models\GaleriaFotos::query()->where('publicada', true)->with('evento')->orderBy('orden')->get())
        @foreach ($fotos as $foto)
          <div class="column is-6-mobile is-4-tablet">
            <div class="card tarjeta">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="{{ \Illuminate\Support\Str::startsWith($foto->imagen, ['http://', 'https://']) ? $foto->imagen : \Illuminate\Support\Facades\Storage::url($foto->imagen) }}" alt="{{ $foto->titulo }}" style="object-fit: cover;">
                </figure>
              </div>
              <div class="card-content">
                <p class="has-text-weight-semibold">{{ $foto->titulo }}</p>
                <p class="mt-1">{{ $foto->evento->nombre ?? 'Evento especial' }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection

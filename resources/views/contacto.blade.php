@extends('layouts.app')

@section('titulo', 'Contacto')

@section('contenido')
  @include('partials.cabecera', ['titulo' => 'Contacto', 'subtitulo' => 'Escríbenos y resolvemos tus dudas'])

  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column is-5">
          <div class="card tarjeta">
            <div class="card-content">
              <h3 class="title is-4">Datos de contacto</h3>
              <p class="contacto-dato">Correo: info@eventia.hn</p>
              <p class="contacto-dato">Teléfono: +504 9999-9999</p>
              <p class="contacto-dato">Facebook: /eventiaproducciones</p>
              <p class="contacto-dato">Instagram: @eventia.hn</p>
            </div>
          </div>
        </div>

        <div class="column is-7">
          <div class="card tarjeta">
            <div class="card-content">
              <h3 class="title is-4">Formulario de consultas</h3>

              @if (session('success'))
                <div class="notification is-success">
                  {{ session('success') }}
                </div>
              @endif

              @if ($errors->any())
                <div class="notification is-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif

              <form method="POST" action="{{ route('contacto.store') }}">
                @csrf
                <div class="field">
                  <label class="label">Nombre</label>
                  <div class="control"><input class="input" type="text" name="nombre" value="{{ old('nombre') }}" required></div>
                </div>
                <div class="field">
                  <label class="label">Correo</label>
                  <div class="control"><input class="input" type="email" name="correo" value="{{ old('correo') }}" required></div>
                </div>
                <div class="field">
                  <label class="label">Teléfono</label>
                  <div class="control"><input class="input" type="text" name="telefono" value="{{ old('telefono') }}"></div>
                </div>
                <div class="field">
                  <label class="label">Asunto</label>
                  <div class="control"><input class="input" type="text" name="asunto" value="{{ old('asunto') }}"></div>
                </div>
                <div class="field">
                  <label class="label">Mensaje</label>
                  <div class="control"><textarea class="textarea" name="mensaje" required>{{ old('mensaje') }}</textarea></div>
                </div>
                <button class="button boton-oscuro" type="submit">Enviar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

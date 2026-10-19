@extends('layouts.app')

@section('titulo', 'Contacto')

@section('contenido')
  @include('partials.cabecera', ['titulo' => 'Contacto', 'subtitulo' => 'Escríbenos y resolvemos tus dudas'])

  <section class="section">
    <div class="container">
      <div class="columns">

        {{-- Datos de contacto --}}
        <div class="column is-5">
          <div class="card tarjeta">
            <div class="card-content">
              <h3 class="title is-4">Datos de contacto</h3>
              <p class="contacto-dato">Correo: info@eventia.hn</p>
              <p class="contacto-dato">Teléfono: +504 9999-9999</p>
              <p class="contacto-dato">Facebook: /eventiaproducciones</p>
              <p class="contacto-dato">Instagram: @@eventia.hn</p>
            </div>
          </div>
        </div>

        {{-- Formulario (solo demostración, no guarda nada) --}}
        <div class="column is-7">
          <div class="card tarjeta">
            <div class="card-content">
              <h3 class="title is-4">Formulario de consultas</h3>

              <div class="notification is-success is-hidden" id="aviso">
                Mensaje de demostración: el formulario aún no está conectado.
              </div>

              <form onsubmit="event.preventDefault(); document.getElementById('aviso').classList.remove('is-hidden');">
                <div class="field">
                  <label class="label">Nombre</label>
                  <div class="control"><input class="input" type="text" required></div>
                </div>
                <div class="field">
                  <label class="label">Correo</label>
                  <div class="control"><input class="input" type="email" required></div>
                </div>
                <div class="field">
                  <label class="label">Mensaje</label>
                  <div class="control"><textarea class="textarea" required></textarea></div>
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

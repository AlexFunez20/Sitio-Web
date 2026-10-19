@php

<div class="columns is-multiline">
  @foreach (array_slice($eventos, 0, $limite) as $evento)
    <div class="column is-4">
      <div class="card tarjeta">
        <div class="card-content">
          <h3 class="title is-5">{{ $evento['nombre'] }}</h3>
          <p>{{ $evento['fecha'] }} · {{ $evento['lugar'] }}</p>
          <p class="mt-2">{{ $evento['descripcion'] }}</p>
          <p class="precio mt-2">L {{ $evento['precio'] }}</p>
        </div>
      </div>
    </div>
  @endforeach
</div>

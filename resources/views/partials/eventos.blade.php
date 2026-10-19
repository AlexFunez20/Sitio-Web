@php($eventos = [
    ['nombre' => 'Noche Garífuna Fest', 'fecha' => '14 nov 2026', 'lugar' => 'San Pedro Sula',
     'descripcion' => 'Música, danza y tradición garífuna frente al mar.', 'precio' => 350],
    ['nombre' => 'Rock Bajo las Estrellas', 'fecha' => '28 nov 2026', 'lugar' => 'Tegucigalpa',
     'descripcion' => 'Las mejores bandas de rock en una noche al aire libre.', 'precio' => 300],
    ['nombre' => 'Electro Sunset', 'fecha' => '12 dic 2026', 'lugar' => 'Tela',
     'descripcion' => 'Música electrónica con DJs mientras cae el sol.', 'precio' => 400],
    ['nombre' => 'Gala Retro 80s y 90s', 'fecha' => '19 dic 2026', 'lugar' => 'San Pedro Sula',
     'descripcion' => 'Una noche de baile con los éxitos de ayer.', 'precio' => 350],
    ['nombre' => 'Navidad en Concierto', 'fecha' => '23 dic 2026', 'lugar' => 'Tegucigalpa',
     'descripcion' => 'Villancicos y música en vivo para toda la familia.', 'precio' => 250],
    ['nombre' => 'Fiesta de Año Nuevo', 'fecha' => '31 dic 2026', 'lugar' => 'La Ceiba',
     'descripcion' => 'Recibe el año con música, comida y fuegos artificiales.', 'precio' => 500],
])
@php($limite = $limite ?? count($eventos))
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

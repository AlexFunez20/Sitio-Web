@php($eventos = \App\Models\Evento::query()->where('estado', 'publicado')->where('fecha_inicio', '>=', now())->with(['tiposBoleto' => fn ($query) => $query->where('activo', true)])->orderBy('fecha_inicio')->get())
@php($limite = $limite ?? $eventos->count())
<div class="columns is-multiline">
  @foreach ($eventos->take($limite) as $evento)
    <div class="column is-4">
      <div class="card tarjeta">
        @if ($evento->imagen)
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="{{ \Illuminate\Support\Str::startsWith($evento->imagen, ['http://', 'https://']) ? $evento->imagen : \Illuminate\Support\Facades\Storage::url($evento->imagen) }}" alt="{{ $evento->nombre }}" style="object-fit: cover;">
            </figure>
          </div>
        @endif
        <div class="card-content">
          <h3 class="title is-5">{{ $evento->nombre }}</h3>
          <p>{{ $evento->fecha_inicio->translatedFormat('d M Y') }} · {{ $evento->lugar }}</p>
          <p class="mt-2">{{ Str::limit($evento->descripcion, 120) }}</p>
          @php($precioMin = $evento->tiposBoleto->min('precio'))
          <p class="precio mt-2">{{ $precioMin !== null ? 'Desde L ' . number_format($precioMin, 2) : 'Precio por confirmar' }}</p>
        </div>
      </div>
    </div>
  @endforeach
</div>

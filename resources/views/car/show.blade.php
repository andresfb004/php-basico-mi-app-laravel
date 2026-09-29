@extends('layout.app')

@section('title', $car->brand . ' ' . $car->name . ' | AutoMundo')

@section('content')
  @php
    $colores = ['red', 'blue', 'gray', 'gold'];
  @endphp

  <section class="page-body">
    <div class="container">
      <div class="detail">
        <div class="detail-visual model-banner {{ $colores[$car->id % 4] }}">{{ $car->category?->icon() ?? '🚗' }}</div>

        <div class="detail-info">
          <span class="brand-label">{{ $car->category?->name ?? 'Sin tipo' }}</span>
          <h1>{{ $car->brand }} {{ $car->name }}</h1>
          <p>{{ $car->description }}</p>

          <span class="price">$ {{ number_format($car->price, 0, ',', '.') }}</span>

          <div class="specs">
            <div class="spec"><span>Marca</span><b>{{ $car->brand }}</b></div>
            <div class="spec"><span>Año</span><b>{{ $car->year }}</b></div>
            <div class="spec"><span>Carrocería</span><b>{{ $car->category?->name ?? 'Sin tipo' }}</b></div>
            <div class="spec"><span>Referencia</span><b>#{{ $car->id }}</b></div>
          </div>

          @if ($car->category)
            <p><small>{{ $car->category->description }}</small></p>
          @endif

          <div class="actions">
            <a href="{{ route('cars.index') }}" class="btn">← Volver al catálogo</a>
            @auth
              <a href="{{ route('cars.edit', $car) }}" class="btn btn-primary">Editar carro</a>
            @endauth
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

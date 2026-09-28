@extends('layout.app')

@section('title', 'Catálogo de carros | AutoMundo')

@section('content')
  <section class="page-head">
    <div class="container">
      <span class="tag">Catálogo</span>
      <h1>Carros disponibles</h1>
      <p>Explora los carros registrados en AutoMundo, organizados por tipo de carrocería.</p>
    </div>
  </section>

  <section class="page-body">
    <div class="container">
      <div class="toolbar">
        <span class="count">{{ $cars->total() }} carros en el catálogo</span>
        <a href="{{ route('cars.manage') }}" class="btn">Gestionar catálogo</a>
      </div>

      @php
        $colores = ['red', 'blue', 'gray', 'gold'];
      @endphp

      <div class="model-grid">
        @forelse ($cars as $car)
          <div class="model-card">
            <div class="model-banner {{ $colores[$car->id % 4] }}">{{ $car->category?->icon() ?? '🚗' }}</div>
            <div class="model-body">
              <span class="brand-label">{{ $car->brand }}</span>
              <h3>{{ $car->name }}</h3>
              <div class="model-meta">
                <span class="pill">{{ $car->category?->name ?? 'Sin tipo' }}</span>
                <span class="pill">{{ $car->year }}</span>
              </div>
              <p>{{ $car->description }}</p>
              <div class="model-footer">
                <span class="price">$ {{ number_format($car->price, 0, ',', '.') }}</span>
                <a href="{{ route('cars.show', $car) }}" class="link-more">Ver detalle →</a>
              </div>
            </div>
          </div>
        @empty
          <div class="empty">Todavía no hay carros registrados.</div>
        @endforelse
      </div>

      {{ $cars->links('car.partials.pagination') }}
    </div>
  </section>
@endsection

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
        <span class="count">{{ $listaDeCarros->count() }} carros registrados</span>
        <a href="/cars/create" class="btn btn-primary">Registrar carro +</a>
      </div>

      @php
        $colores = ['red', 'blue', 'gray', 'gold'];
      @endphp

      <div class="model-grid">
        @forelse ($listaDeCarros as $carro)
          <div class="model-card">
            <div class="model-banner {{ $colores[$loop->index % 4] }}">🚗</div>
            <div class="model-body">
              <span class="brand-label">{{ $carro->brand }}</span>
              <h3>{{ $carro->name }}</h3>
              <div class="model-meta"><span class="pill">{{ $carro->year }}</span></div>
              <p>{{ $carro->description }}</p>
              <div class="model-footer">
                <span class="price">$ {{ number_format($carro->price, 0, ',', '.') }}</span>
                <a href="/cars/{{ $carro->id }}" class="link-more">Ver detalle →</a>
              </div>
            </div>
          </div>
        @empty
          <div class="empty">Todavía no hay carros registrados.</div>
        @endforelse
      </div>
    </div>
  </section>
@endsection

@extends('layout.app')

@section('title', 'Detalle del carro | AutoMundo')

@section('content')
  <section class="page-body">
    <div class="container">
      <div class="detail">
        <div class="detail-visual model-banner red">🚘</div>

        <div class="detail-info">
          <span class="tag" style="color: var(--accent); font-weight:700; text-transform:uppercase; font-size:0.8rem;">Sedán</span>
          <h1>Toyota Corolla</h1>
          <p>El auto más vendido de la historia a nivel mundial, símbolo de confiabilidad, bajo consumo y excelente valor de reventa.</p>

          <span class="price">$ 120.000.000</span>

          <div class="specs">
            <div class="spec"><span>Marca</span><b>Toyota</b></div>
            <div class="spec"><span>Año</span><b>2024</b></div>
            <div class="spec"><span>Carrocería</span><b>Sedán</b></div>
            <div class="spec"><span>Referencia</span><b>#1</b></div>
          </div>

          <div class="actions">
            <a href="/cars" class="btn">← Volver al catálogo</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  
@endsection

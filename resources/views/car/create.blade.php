@extends('layout.app')

@section('title', 'Registrar carro | AutoMundo')

@section('content')
  <section class="page-head">
    <div class="container">
      <span class="tag">Nuevo registro</span>
      <h1>Registrar un carro</h1>
      <p>Completa la información del vehículo para agregarlo al catálogo.</p>
    </div>
  </section>

  <section class="page-body">
    <div class="container">
      <form action="{{ route('cars.store') }}" method="POST" class="form-card">
        @csrf

        @include('car.partials.form', ['car' => null])

        <div class="form-actions">
          <a href="{{ route('cars.manage') }}" class="btn">Cancelar</a>
          <button type="submit" class="btn btn-primary">Guardar carro</button>
        </div>
      </form>
    </div>
  </section>
@endsection

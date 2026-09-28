@extends('layout.app')

@section('title', 'Editar ' . $car->name . ' | AutoMundo')

@section('content')
  <section class="page-head">
    <div class="container">
      <span class="tag">Edición</span>
      <h1>Editar {{ $car->brand }} {{ $car->name }}</h1>
      <p>Actualiza la información del carro. Los cambios se verán de inmediato en el catálogo.</p>
    </div>
  </section>

  <section class="page-body">
    <div class="container">
      <form action="{{ route('cars.update', $car) }}" method="POST" class="form-card">
        @csrf
        @method('PUT')

        @include('car.partials.form', ['car' => $car])

        <div class="form-actions">
          <a href="{{ route('cars.manage') }}" class="btn">Cancelar</a>
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>
      </form>
    </div>
  </section>
@endsection

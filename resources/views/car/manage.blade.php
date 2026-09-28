@extends('layout.app')

@section('title', 'Gestión del catálogo | AutoMundo')

@section('content')
  <section class="page-head">
    <div class="container">
      <span class="tag">Gestión interna</span>
      <h1>Gestión del catálogo</h1>
      <p>Registra, edita y elimina los carros que aparecen en el catálogo de AutoMundo.</p>
    </div>
  </section>

  <section class="page-body">
    <div class="container">
      @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif

      <div class="toolbar">
        <span class="count">{{ $cars->total() }} carros registrados</span>
        <a href="{{ route('cars.create') }}" class="btn btn-primary">Registrar carro +</a>
      </div>

      @if ($cars->isEmpty())
        <div class="empty">Todavía no hay carros registrados.</div>
      @else
        <div class="table-wrap">
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>Carro</th>
                <th>Tipo</th>
                <th>Año</th>
                <th>Precio</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($cars as $car)
                <tr>
                  <td class="dim">{{ $car->id }}</td>
                  <td><b>{{ $car->brand }}</b> {{ $car->name }}</td>
                  <td>{{ $car->category?->icon() }} {{ $car->category?->name ?? 'Sin tipo' }}</td>
                  <td>{{ $car->year }}</td>
                  <td>$ {{ number_format($car->price, 0, ',', '.') }}</td>
                  <td>
                    <div class="actions">
                      <a href="{{ route('cars.show', $car) }}" class="btn btn-sm">Ver</a>
                      <a href="{{ route('cars.edit', $car) }}" class="btn btn-sm">Editar</a>
                      <form action="{{ route('cars.destroy', $car) }}" method="POST"
                            onsubmit="return confirm('¿Eliminar {{ $car->brand }} {{ $car->name }}?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                      </form>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      @endif

      {{ $cars->links('car.partials.pagination') }}
    </div>
  </section>
@endsection

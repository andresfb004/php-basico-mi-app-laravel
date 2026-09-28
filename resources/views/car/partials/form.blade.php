{{-- Campos compartidos por create y edit. $car es null al crear. --}}
@if ($errors->any())
  <div class="alert alert-error">Revisa los campos marcados antes de guardar.</div>
@endif

<div class="form-grid">
  <div class="form-group">
    <label for="name">Modelo</label>
    <input id="name" name="name" type="text" class="form-control"
           value="{{ old('name', $car?->name) }}" placeholder="Ej: Corolla">
    @error('name') <span class="form-error">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="brand">Marca</label>
    <input id="brand" name="brand" type="text" class="form-control"
           value="{{ old('brand', $car?->brand) }}" placeholder="Ej: Toyota">
    @error('brand') <span class="form-error">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="year">Año</label>
    <input id="year" name="year" type="number" class="form-control"
           value="{{ old('year', $car?->year) }}" placeholder="Ej: 2024">
    @error('year') <span class="form-error">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="price">Precio (COP)</label>
    <input id="price" name="price" type="number" step="0.01" class="form-control"
           value="{{ old('price', $car?->price) }}" placeholder="Ej: 120000000">
    @error('price') <span class="form-error">{{ $message }}</span> @enderror
  </div>

  <div class="form-group full">
    <label for="category_id">Tipo de carrocería</label>
    <select id="category_id" name="category_id" class="form-control">
      <option value="">Selecciona un tipo...</option>
      @foreach ($categories as $category)
        <option value="{{ $category->id }}" @selected(old('category_id', $car?->category_id) == $category->id)>
          {{ $category->icon() }} {{ $category->name }}
        </option>
      @endforeach
    </select>
    @error('category_id') <span class="form-error">{{ $message }}</span> @enderror
  </div>

  <div class="form-group full">
    <label for="description">Descripción</label>
    <textarea id="description" name="description" class="form-control"
              placeholder="Describe el carro...">{{ old('description', $car?->description) }}</textarea>
    @error('description') <span class="form-error">{{ $message }}</span> @enderror
  </div>
</div>

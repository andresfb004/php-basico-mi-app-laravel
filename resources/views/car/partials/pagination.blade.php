{{-- Paginación simple con los estilos de AutoMundo --}}
@if ($paginator->hasPages())
  <nav class="pagination">
    @if ($paginator->onFirstPage())
      <span class="btn btn-sm disabled">← Anterior</span>
    @else
      <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-sm">← Anterior</a>
    @endif

    <span class="count">Página {{ $paginator->currentPage() }} de {{ $paginator->lastPage() }}</span>

    @if ($paginator->hasMorePages())
      <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-sm">Siguiente →</a>
    @else
      <span class="btn btn-sm disabled">Siguiente →</span>
    @endif
  </nav>
@endif

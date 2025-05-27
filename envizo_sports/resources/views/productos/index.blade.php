@extends('layouts.app')

@section('content')
<div class="container my-5">
    {{-- Logo del sitio --}}
    <div class="text-center mb-4">
        <a href="dashboard">        <img src="{{ asset('img/e.png') }}" alt="Logo" class="img-fluid" style="max-height: 200px;">
</a>
    </div>

    <div class="card shadow-lg border-0" style="background-color: #212121; color: #FFFFFF;">
        <div class="card-header bg-black text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Lista de Productos</h3>
            <a href="{{ route('productos.create') }}" class="btn btn-outline-light">Crear Producto</a>
        </div>

        <div class="card-body">
            @if ($productos->isEmpty())
                <p class="text-muted">No hay productos disponibles.</p>
            @else
                <ul class="list-group">
                    @foreach ($productos as $producto)
                        <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: #4A4A4A; color: #FFFFFF;">
                            <div>
                                <strong>{{ $producto->nombre }}</strong> - ${{ number_format($producto->precio, 0, ',', '.') }}
                            </div>
                            <div class="btn-group">
                                <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-sm btn-outline-light">Editar</a>
                                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este producto?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>

<footer class="mt-5 py-4 bg-dark text-white text-center">
    <div class="container">
        <p class="mb-2">Síguenos en nuestras redes sociales:</p>
        <div class="d-flex justify-content-center gap-4">
            <a href="https://www.instagram.com/envizo_sports" target="_blank" class="text-white fs-4">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://web.facebook.com/profile.php?id=61573886805693" target="_blank" class="text-white fs-4">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.tiktok.com/@envizo.sports" target="_blank" class="text-white fs-4">
                <i class="fab fa-tiktok"></i>
            </a>
        </div>
        <p class="mt-3 mb-0" style="font-size: 0.9rem;">&copy; {{ date('Y') }} Envizo Sports. Todos los derechos reservados.</p>
    </div>
</footer>

@endsection

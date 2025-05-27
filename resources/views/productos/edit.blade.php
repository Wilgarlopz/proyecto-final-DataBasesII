@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="text-center mb-4">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 150px;">
    </div>

    <div class="card shadow-lg rounded" style="background-color: #212121; color: #FFFFFF;">
        <div class="card-header text-center" style="background-color: #000000;">
            <h2 class="mb-0">Editar Producto</h2>
        </div>

        <div class="card-body">
            <form action="{{ route('productos.update', $producto->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="precio" class="form-label">Precio:</label>
                    <input type="number" name="precio" id="precio" value="{{ $producto->precio }}" step="0.01" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción:</label>
                    <textarea name="descripcion" id="descripcion" rows="3" class="form-control" required>{{ $producto->descripcion }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="stock" class="form-label">Stock:</label>
                    <input type="number" name="stock" id="stock" value="{{ $producto->stock }}" class="form-control" required>
                </div>

                <div class="mb-4">
                    <label for="talla" class="form-label">Talla:</label>
                    <input type="text" name="talla" id="talla" value="{{ $producto->talla }}" class="form-control" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-light btn-lg" style="color: #000000;">Actualizar Producto</button>
                </div>
            </form>
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

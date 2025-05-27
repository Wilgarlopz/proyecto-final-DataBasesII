@extends('layouts.app')

@section('content')
<div class="container text-white" style="background-color: #212121; padding: 2rem; border-radius: 10px;">
    <div class="text-center mb-4">
        <img src="{{ asset('img/e.png') }}" alt="Logo" style="max-height: 100px;">
        <h1 class="mt-3">Editar Pedido</h1>
    </div>

    <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label>Nombre del Cliente</label>
            <input type="text" name="cliente_nombre" value="{{ $pedido->cliente_nombre }}" class="form-control bg-dark text-white" required>
        </div>

        <div class="form-group mb-3">
            <label>Email del Cliente</label>
            <input type="email" name="cliente_email" value="{{ $pedido->cliente_email }}" class="form-control bg-dark text-white" required>
        </div>

        <div class="form-group mb-3">
            <label>Dirección de Envío</label>
            <input type="text" name="direccion_envio" value="{{ $pedido->direccion_envio }}" class="form-control bg-dark text-white" required>
        </div>

        <div class="form-group mb-3">
            <label>Descripción del Pedido</label>
            <textarea name="descripcion_pedido" class="form-control bg-dark text-white" required>{{ $pedido->descripcion_pedido }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label>Total</label>
            <input type="number" name="total" value="{{ $pedido->total }}" step="0.01" class="form-control bg-dark text-white" required>
        </div>

        <div class="form-group mb-4">
            <label>Estado</label>
            <select name="estado" class="form-control bg-dark text-white">
                <option value="pendiente" {{ $pedido->estado == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="procesado" {{ $pedido->estado == 'procesado' ? 'selected' : '' }}>Procesado</option>
                <option value="enviado" {{ $pedido->estado == 'enviado' ? 'selected' : '' }}>Enviado</option>
            </select>
        </div>

        <button type="submit" class="btn btn-outline-light">Actualizar Pedido</button>
    </form>
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

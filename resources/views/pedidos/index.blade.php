@extends('layouts.app')

@section('content')
<div class="container text-white" style="background-color: #212121; padding: 2rem; border-radius: 10px;">
    <div class="text-center mb-4">
<a href="dashboard"><img src="{{ asset('img/e.png') }}" alt="Logo" style="max-height: 120px;"></a>
    
        <h1 class="mt-3">Lista de Pedidos</h1>
        <a href="{{ route('pedidos.create') }}" class="btn btn-outline-light mt-2">Crear Nuevo Pedido</a>
    </div>

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Email</th>
                <th>Dirección</th>
                <th>Descripción</th>
                <th>Total</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->cliente_nombre }}</td>
                <td>{{ $pedido->cliente_email }}</td>
                <td>{{ $pedido->direccion_envio }}</td>
                <td>{{ $pedido->descripcion_pedido }}</td>
                <td>${{ $pedido->total }}</td>
                <td>{{ ucfirst($pedido->estado) }}</td>
                <td>
                    <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
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

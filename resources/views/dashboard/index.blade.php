@extends('layouts.app')

@section('content')
<div style="background-color: #212121; min-height: 100vh;">
    <div class="container py-4">
        <!-- Encabezado con logo -->
        <div class="d-flex justify-content-center align-items-center gap-3 mb-4">
            <h2 class="mb-0 text-white">ENVIZO SPORTS</h2>
            <img src="{{ asset('img/e.png') }}" alt="Logo" style="height: 200px;">
        </div>

        <!-- Tarjetas -->
        <div class="row text-white">
            <!-- Tarjeta de Productos -->
            <div class="col-md-6">
                <div class="card mb-4 bg-dark shadow">
                    <div class="card-body text-center">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{ asset('img/o.png') }}" alt="Logo" style="height: 300px;">
                        </div>
                        <h5 class="card-title">Total Productos</h5>
                        <p class="card-text display-6">{{ $totalProductos }}</p>
                        <a href="{{ route('productos.index') }}" class="btn btn-outline-light">Ver productos</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta de Pedidos -->
            <div class="col-md-6">
                <div class="card mb-4 bg-dark shadow">
                    <div class="card-body text-center">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{ asset('img/u.png') }}" alt="Pedidos" style="height: 300px;">
                        </div>
                        <h5 class="card-title">Total Pedidos</h5>
                        <p class="card-text display-6">{{ $totalPedidos }}</p>
                        <a href="{{ route('pedidos.index') }}" class="btn btn-outline-light">Ver pedidos</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Últimos pedidos -->
        <h4 class="mt-5 text-center text-white">Últimos Pedidos</h4>
        <ul class="list-group">
            @foreach ($pedidosRecientes as $pedido)
                <li class="list-group-item bg-secondary text-white">
                    {{ $pedido->cliente_nombre }} - {{ $pedido->estado }} - ${{ $pedido->total }}
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Footer -->
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
</div>
@endsection

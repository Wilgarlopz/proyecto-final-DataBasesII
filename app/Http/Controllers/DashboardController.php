<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\Pedido;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProductos = Productos::count();
        $totalPedidos = Pedido::count();
        $pedidosRecientes = Pedido::latest()->take(5)->get();

        return view('dashboard.index', compact('totalProductos', 'totalPedidos', 'pedidosRecientes'));
    }
}


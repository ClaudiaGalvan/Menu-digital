<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Mostrar todos los pedidos (para cocinero)
    public function index()
    {
        $orders = Order::where('status', 'Pendiente')->get();
        return view('cocinero', compact('orders'));
    }

    // Cambiar estado del pedido a Listo
    public function updateStatus($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'Listo';
        $order->save();

        return redirect()->back()->with('success', 'Pedido marcado como listo.');
    }
}

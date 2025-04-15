<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pedidos Activos</title>
</head>
<body>
    <h1>Pedidos Activos</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <ul>
        @foreach($orders as $order)
            <li style="margin-bottom: 20px;">
                <strong>Cliente:</strong> {{ $order->customer_name }}<br>
                <strong>Teléfono:</strong> {{ $order->customer_phone }}<br>
                <strong>Pedido:</strong> {{ $order->order_details }}<br>
                <strong>Estado:</strong> {{ $order->status }}<br>

                <form action="{{ route('orders.updateStatus', $order->id) }}" method="POST" style="margin-top: 10px;">
                    @csrf
                    @method('PUT')
                    <button type="submit">Marcar como Listo</button>
                </form>
            </li>
        @endforeach
    </ul>

</body>
</html>

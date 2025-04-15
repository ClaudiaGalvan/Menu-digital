<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: #000;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 320px;
            text-align: center;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 30px;
        }
        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: none;
            border-radius: 8px;
            background-color: #1c1c1e;
            color: #fff;
            font-size: 16px;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #0a84ff;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
        }
        .status {
            color: #30d158;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Recuperar Contraseña</h1>
        
        @if (session('status'))
            <div class="status">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <input type="email" name="email" placeholder="Tu correo electrónico" required>
            <button type="submit">Enviar enlace</button>
        </form>

        <p style="margin-top: 20px;">
            <a href="{{ route('login') }}" style="color: #0a84ff;">Volver al login</a>
        </p>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Mantén tu estilo actual -->
</head>
<body>
    <div class="container">
        <h1>Nueva Contraseña</h1>
        
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="hidden" name="email" value="{{ $email }}">
            
            <input type="password" name="password" placeholder="Nueva contraseña" required>
            <input type="password" name="password_confirmation" placeholder="Confirmar contraseña" required>
            <button type="submit">Aceptar</button>
        </form>
    </div>
</body>
</html>
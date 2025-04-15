<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión | Marquesitas Ki</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: url('/images/marquesita-fondo.jpg') no-repeat center center fixed;
            background-size: cover;
            position: relative;
        }
        .overlay {
            background-color: rgba(0, 0, 0, 0.4);
        }
    </style>
</head>
<body>
    <!-- Capa semitransparente -->
    <div class="overlay absolute inset-0"></div>
    
    <!-- Logo en esquina superior derecha -->
    <div class="relative z-20 pt-6 pr-6 text-right">
        <img src="/images/logo-marquesitas.png" alt="Logo Marquesitas" class="w-32 h-auto inline-block">
    </div>

    <!-- Formulario de login -->
    <div class="relative z-10 min-h-screen flex items-center justify-center px-4">
        <div class="bg-white bg-opacity-90 rounded-lg shadow-xl p-8 w-full max-w-md">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Iniciar sesión</h2>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <!-- Campo Email -->
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Email</label>
                    <input type="email" name="email" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
                </div>
                
                <!-- Campo Password -->
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Password</label>
                    <input type="password" name="password" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
                </div>
                
                <!-- Recordar sesión + Forgot password -->
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" 
                               class="h-4 w-4 text-amber-600 focus:ring-amber-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 text-gray-700">Remember me</label>
                    </div>
                    <a href="#" class="text-amber-600 hover:text-amber-800 text-sm">Forgot your password?</a>
                </div>
                
                <!-- Botón de Login -->
                <button type="submit" 
                        class="w-full bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300">
                    LOG IN
                </button>
                
                <!-- Enlace a Registro -->
                <div class="mt-4 text-center">
                    <span class="text-gray-600">¿No tienes cuenta?</span>
                    <a href="{{ route('register') }}" class="text-amber-600 hover:text-amber-800 font-medium ml-1">
                        Regístrate aquí
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | Marquesitas Ki</title>
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

    <!-- Formulario de registro -->
    <div class="relative z-10 min-h-screen flex items-center justify-center px-4">
        <div class="bg-white bg-opacity-90 rounded-lg shadow-xl p-8 w-full max-w-md">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Registro de usuario</h2>
            
            <form method="POST" action="{{ route('register') }}">
                @csrf
                
                <!-- Campo Name -->
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Name</label>
                    <input type="text" name="name" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
                </div>
                
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
                
                <!-- Campo Confirm Password -->
                <div class="mb-6">
                    <label class="block text-gray-700 mb-2">Confirm Password</label>
                    <input type="password" name="password_confirmation" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
                </div>
                
                <!-- Botón de Registro -->
                <button type="submit" 
                        class="w-full bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300">
                    REGISTER
                </button>
                
                <!-- Enlace a Login -->
                <div class="mt-4 text-center">
                    <span class="text-gray-600">Already registered?</span>
                    <a href="{{ route('login') }}" class="text-amber-600 hover:text-amber-800 font-medium ml-1">
                        Login here
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
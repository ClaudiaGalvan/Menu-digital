<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marquesitas Ki | Bienvenido</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: url('/images/marquesita-fondo.jpg') no-repeat center center fixed;
            background-size: cover;
            position: relative;
            min-height: 100vh;
        }
        .overlay {
            background-color: rgba(0, 0, 0, 0.4); /* Ajusta la opacidad aquí */
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

    <!-- Contenido principal -->
    <div class="relative z-10 min-h-screen flex flex-col justify-center items-center px-4 text-white text-center">
        <!-- Título -->
        <h1 class="text-5xl sm:text-6xl font-bold mb-4">
            Bienvenidos a <span class="text-amber-300">Marquesitas Ki</span>
        </h1>
        
        <!-- Subtítulo -->
        <p class="text-xl sm:text-2xl mb-8 max-w-2xl mx-auto">
            ¡Una tradición en cada bocado!<br>
            Las mejores marquesitas te esperan.
        </p>
        
        <!-- Botones -->
        <div class="flex flex-col sm:flex-row gap-4">
            <a href="{{ route('login') }}" 
               class="bg-transparent hover:bg-amber-600 text-amber-300 font-bold py-3 px-8 border-2 border-amber-300 rounded-lg transition duration-300">
                Login
            </a>
            <a href="{{ route('register') }}" 
               class="bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                Register
            </a>
        </div>
    </div>
</body>
</html>
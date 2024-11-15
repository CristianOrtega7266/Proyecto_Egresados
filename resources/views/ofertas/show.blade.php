<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $oferta->titulo }} - TechHub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white">
    <!-- Navbar -->
    <nav class="backdrop-blur-md bg-black/30 border-b border-gray-800 fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center space-x-4">
                    <a href="/home" class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-500 to-pink-500">
                        TechHub
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-4xl mx-auto p-8 bg-gray-900 rounded-2xl shadow-lg mt-32 mb-12">
        <!-- Header -->
        <header class="mb-12 text-center">
            <h1 class="text-4xl md:text-5xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-purple-500 mb-4">
                {{ $oferta->titulo }}
            </h1>
            <div class="flex items-center justify-center space-x-4 text-gray-400">
                <span class="px-3 py-1 bg-pink-500/10 text-pink-400 rounded-full text-sm">
                    Oportunidad Tech
                </span>
                <span class="text-sm">
                    <i class="far fa-clock mr-2"></i>
                    {{ $oferta->fecha_publicacion->format('d/m/Y') }}
                </span>
            </div>
        </header>

        <!-- Detalles de la oferta -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="bg-gray-800/50 rounded-xl p-6">
                <div class="flex items-center space-x-3 mb-2">
                    <i class="far fa-building text-pink-400"></i>
                    <h2 class="text-lg font-semibold text-white">Empresa</h2>
                </div>
                <p class="text-gray-300">{{ $oferta->empresa ?? 'No especificada' }}</p>
            </div>
            
            <div class="bg-gray-800/50 rounded-xl p-6">
                <div class="flex items-center space-x-3 mb-2">
                    <i class="fas fa-map-marker-alt text-pink-400"></i>
                    <h2 class="text-lg font-semibold text-white">Ubicación</h2>
                </div>
                <p class="text-gray-300">{{ $oferta->ubicacion }}</p>
            </div>
            
            <div class="bg-gray-800/50 rounded-xl p-6">
                <div class="flex items-center space-x-3 mb-2">
                    <i class="fas fa-wallet text-pink-400"></i>
                    <h2 class="text-lg font-semibold text-white">Salario</h2>
                </div>
                <p class="text-gray-300">
                    {{ $oferta->salario ? '$' . number_format($oferta->salario, 2) : 'No especificado' }}
                </p>
            </div>
        </div>

        <!-- Descripción -->
        <div class="bg-gray-800/50 rounded-xl p-8 mb-12">
            <div class="flex items-center space-x-3 mb-6">
                <i class="fas fa-clipboard-list text-pink-400"></i>
                <h2 class="text-xl font-semibold text-white">Descripción del Puesto</h2>
            </div>
            <div class="text-gray-300 leading-relaxed space-y-4">
                {!! $oferta->descripcion !!}
            </div>
        </div>

        <!-- Botones de acción -->
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
            <a href="{{ route('home') }}" 
               class="group inline-flex items-center px-6 py-3 bg-gray-800 hover:bg-gray-700 rounded-full transition-all duration-300">
                <i class="fas fa-arrow-left mr-2 transform group-hover:-translate-x-1 transition-transform"></i>
                Volver a las ofertas
            </a>
            
            <button class="inline-flex items-center px-8 py-3 bg-gradient-to-r from-pink-500 to-purple-500 rounded-full hover:opacity-90 transition-opacity duration-300">
                <i class="fas fa-paper-plane mr-2"></i>
                Aplicar ahora
            </button>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 py-8">
            <div class="text-center text-gray-400">
                <p>&copy; 2024 TechHub. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
</body>

</html>
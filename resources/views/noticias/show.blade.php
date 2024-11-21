<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $noticia->titulo }} - TechHub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white">
    <!-- Navbar -->
        
            
                
                    
    <div class="max-w-4xl mx-auto p-8 bg-gray-900 rounded-2xl shadow-lg mt-32 mb-12">
        <!-- Título y Fecha -->
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-500 to-pink-500 mb-4">
                {{ $noticia->titulo }}
            </h1>
            <div class="flex items-center justify-center space-x-4 text-gray-400">
                <span class="px-3 py-1 bg-purple-500/10 text-purple-400 rounded-full text-sm">
                    Noticias
                </span>
                <span class="text-sm">
                    <i class="far fa-clock mr-2"></i>
                    {{ $noticia->fecha_publicacion->format('d/m/Y') }}
                </span>
            </div>
        </div>

        <!-- Imagen principal -->
        @if ($noticia->imagen)
    <div class="mt-8 mb-8">
        <div class="aspect-video overflow-hidden rounded-xl">
            @if (file_exists(public_path('storage/' . $noticia->imagen)))
                <img src="{{ asset('storage/' . $noticia->imagen) }}" alt="Imagen de la noticia" class="w-full h-full object-cover">
            @else
                <p>Imagen no disponible</p>
            @endif
        </div>
    </div>
@endif


        <!-- Contenido de la noticia -->
        <div class="text-lg text-gray-300 leading-relaxed mb-8 space-y-4">
            {!! $noticia->contenido !!}
        </div>

        <!-- Botón de regreso -->
        <div class="flex justify-start">
            <a href="/dashboard" 
               class="group inline-flex items-center px-6 py-3 bg-purple-600 hover:bg-purple-700 rounded-full transition-all duration-300">
                <i class="fas fa-arrow-left mr-2 transform group-hover:-translate-x-1 transition-transform"></i>
                Volver a las noticias
            </a>
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
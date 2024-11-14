<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de Noticias - Universidad Mariana</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50" x-data="{ view: 'noticias' }">
    <!-- Navbar -->
    <nav class="bg-blue-900 text-white p-4 shadow-lg">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <img src="logo-unimar.png" alt="Logo Universidad Mariana" class="h-12">
                <h1 class="text-2xl font-bold">Portal de Egresados</h1>
            </div>
            <div>
            <a href="/admin"
                    class="bg-blue-800 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow transition">
                    <i class="fas fa-user-shield mr-2"></i>Admin Panel
                </a>
            </div>
        </div>
    </nav>

    <!-- Contenido -->
    <div class="max-w-7xl mx-auto px-4 py-8">
        <!-- Botones de navegación -->
        <div class="flex space-x-4 mb-6">
            <button @click="view = 'noticias'"
                class="px-4 py-2 bg-blue-900 text-white rounded hover:bg-blue-700 transition"
                :class="view === 'noticias' ? 'bg-blue-700' : ''">
                Noticias
            </button>
            <button @click="view = 'ofertas'"
                class="px-4 py-2 bg-green-900 text-white rounded hover:bg-green-700 transition"
                :class="view === 'ofertas' ? 'bg-green-700' : ''">
                Ofertas Laborales
            </button>
        </div>

        <!-- Noticias -->
        <div x-show="view === 'noticias'" class="space-y-4">
            <h2 class="text-2xl font-bold text-blue-900">Últimas Noticias</h2>
            @foreach ($news as $newsItem)
                <div class="bg-white shadow-lg rounded-lg p-4">
                    <div class="flex items-center space-x-4">
                        <img src="{{ $newsItem->imagen }}" alt="Imagen Noticia"
                            class="w-20 h-20 rounded-lg object-cover">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800">{{ $newsItem->titulo }}</h3>
                            <p class="text-gray-600 text-sm">{{ Str::limit($newsItem->contenido, 100) }}</p>
                            <a href="{{ route('noticias.show', $newsItem->id) }}"
                                class="text-blue-600 hover:underline text-sm font-medium">Leer más...</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Ofertas Laborales -->
        <div x-show="view === 'ofertas'" class="space-y-4">
            <h2 class="text-2xl font-bold text-green-900">Ofertas Laborales</h2>
            @foreach ($jobs as $job)
                <div class="bg-white shadow-lg rounded-lg p-4">
                    <div class="flex items-center space-x-4">
                        <div
                            class="w-12 h-12 bg-green-100 text-green-900 rounded-lg flex items-center justify-center">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800">{{ $job->titulo }}</h3>
                            <p class="text-gray-600 text-sm">{{ Str::limit($job->descripcion, 100) }}</p>
                            <a href="{{ route('ofertas.show', $job->id) }}"
                                class="text-green-600 hover:underline text-sm font-medium">Ver detalles...</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
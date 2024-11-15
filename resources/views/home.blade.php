<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechHub - Portal de Innovación</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.3/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white" x-data="{ view: 'noticias', mobileMenu: false }">
    <!-- Navbar -->
    <nav class="backdrop-blur-md bg-black/30 border-b border-gray-800 fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center space-x-4">
                    <div class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-500 to-pink-500">
                        TechHub
                    </div>
                </div>
                
                <!-- Menu para móvil -->
                <button @click="mobileMenu = !mobileMenu" class="lg:hidden text-gray-300 hover:text-white">
                    <i class="fas fa-bars text-2xl"></i>
                </button>

                <!-- Menu desktop -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Explorar</a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Comunidad</a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Recursos</a>
                    <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="flex items-center w-full px-4 py-3 text-gray-700 hover:bg-blue-50 transition duration-200">
                                <i class="fas fa-sign-out-alt text-blue-600 mr-3"></i>
                                <span>Cerrar Sesión</span>
                            </button>
                        </form>
                    @if (auth()->user()->roles->pluck('name')->contains('Admin'))
                        <a href="/admin" class="px-4 py-2 bg-purple-600 hover:bg-purple-700 rounded-full transition-colors duration-200">
                            Panel Admin
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </nav>

   <!-- Menu móvil -->
<div x-show="mobileMenu" 
     x-transition:enter="transition ease-out duration-200"
     x-transition:enter-start="opacity-0 -translate-y-4"
     x-transition:enter-end="opacity-100 translate-y-0"
     class="lg:hidden fixed inset-0 z-40 bg-black/95">
    <div class="flex flex-col items-center justify-center h-full space-y-8">
        <a href="#" class="text-2xl text-gray-300 hover:text-white">Explorar</a>
        <a href="#" class="text-2xl text-gray-300 hover:text-white">Comunidad</a>
        <a href="#" class="text-2xl text-gray-300 hover:text-white">Cerrar Sesión</a>
        <button @click="mobileMenu = false" class="absolute top-6 right-6 text-gray-300 hover:text-white">
            <i class="fas fa-times text-2xl"></i>
        </button>
    </div>
</div>


    <!-- Hero Section -->
    <div class="pt-32 pb-20 px-4 bg-gradient-to-b from-purple-900/20 to-transparent">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-purple-500 to-pink-500">
                Descubre el Futuro de la Tecnología
            </h1>
            <p class="text-xl text-gray-400 mb-12">Explora las últimas innovaciones y oportunidades en el mundo tech</p>
            
            <!-- Botones de navegación -->
            <div class="flex flex-wrap justify-center gap-4">
                <button @click="view = 'noticias'"
                    class="group relative px-8 py-4 rounded-full transition-all duration-300"
                    :class="view === 'noticias' ? 'bg-purple-600 hover:bg-purple-700' : 'bg-gray-800 hover:bg-gray-700'">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-newspaper"></i>
                        <span>Innovaciones</span>
                    </div>
                    <div class="absolute inset-0 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                </button>
                
                <button @click="view = 'ofertas'"
                    class="group relative px-8 py-4 rounded-full transition-all duration-300"
                    :class="view === 'ofertas' ? 'bg-pink-600 hover:bg-pink-700' : 'bg-gray-800 hover:bg-gray-700'">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-rocket"></i>
                        <span>Oportunidades</span>
                    </div>
                    <div class="absolute inset-0 rounded-full bg-gradient-to-r from-pink-500 to-purple-500 opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                </button>
                @if (auth()->user()->roles->pluck('name')->contains('Admin') ||
                                auth()->user()->roles->pluck('name')->contains('Docente'))
                            <a href="/admin"
                            class="group relative px-8 py-4 rounded-full transition-all duration-300"
                            :class="view === 'ofertas' ? 'bg-pink-600 hover:bg-pink-700' : 'bg-gray-800 hover:bg-gray-700'">
                            <i class="fa-solid fa-circle-user"></i>
                                <span>Admin Panel</span>
                            </a>
                        @endif
            </div>
        </div>
    </div>

    <!-- Contenido Principal -->
    <div class="max-w-7xl mx-auto px-4 py-12">
        <!-- Noticias -->
        <div x-show="view === 'noticias'" class="space-y-12">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-3xl font-bold">Últimas Innovaciones</h2>
                <div class="flex items-center space-x-2 text-gray-400">
                    <i class="fas fa-filter"></i>
                    <span>Filtrar</span>
                </div>
            </div>
            
            @foreach ($news as $newsItem)
                <div class="group bg-gray-900 rounded-2xl p-1 hover:bg-gradient-to-r hover:from-purple-500 hover:to-pink-500 transition-all duration-300">
                    <div class="bg-gray-900 rounded-2xl p-6 h-full">
                        <div class="flex flex-col md:flex-row gap-8">
                            <div class="w-full md:w-1/3">
                                <div class="aspect-video overflow-hidden rounded-xl">
                                    <img src="{{ $newsItem->imagen }}" alt="Imagen Noticia"
                                        class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                                </div>
                            </div>
                            <div class="w-full md:w-2/3">
                                <div class="flex items-center space-x-4 mb-4">
                                    <span class="px-3 py-1 bg-purple-500/10 text-purple-400 rounded-full text-sm">
                                        Innovación
                                    </span>
                                    <span class="text-gray-400 text-sm">
                                        <i class="far fa-clock mr-2"></i>
                                        {{ $newsItem->created_at->diffForHumans() }}
                                    </span>
                                </div>
                                <h3 class="text-2xl font-bold mb-4 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-purple-500 group-hover:to-pink-500">
                                    {{ $newsItem->titulo }}
                                </h3>
                                <p class="text-gray-400 mb-6">{{ Str::limit($newsItem->contenido, 150) }}</p>
                                <a href="{{ route('noticias.show', $newsItem->id) }}"
                                    class="inline-flex items-center text-purple-400 hover:text-purple-300 transition-colors">
                                    Leer más
                                    <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-2 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Ofertas -->
        <div x-show="view === 'ofertas'" class="space-y-12">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-3xl font-bold">Oportunidades Tech</h2>
                <div class="flex items-center space-x-2 text-gray-400">
                    <i class="fas fa-filter"></i>
                    <span>Filtrar</span>
                </div>
            </div>
            
            @foreach ($jobs as $job)
                <div class="group bg-gray-900 rounded-2xl p-1 hover:bg-gradient-to-r hover:from-pink-500 hover:to-purple-500 transition-all duration-300">
                    <div class="bg-gray-900 rounded-2xl p-6 h-full">
                        <div class="flex items-start gap-6">
                            <div class="w-16 h-16 rounded-xl bg-pink-500/10 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-rocket text-2xl text-pink-400"></i>
                            </div>
                            <div class="flex-grow">
                                <div class="flex items-center gap-4 mb-4 flex-wrap">
                                    <span class="px-3 py-1 bg-pink-500/10 text-pink-400 rounded-full text-sm">
                                        {{ $job->categoria }}
                                    </span>
                                    <span class="text-gray-400 text-sm">
                                        <i class="far fa-building mr-2"></i>
                                        {{ $job->empresa }}
                                    </span>
                                    <span class="text-gray-400 text-sm">
                                        <i class="fas fa-map-marker-alt mr-2"></i>
                                        {{ $job->ubicacion }}
                                    </span>
                                </div>
                                <h3 class="text-2xl font-bold mb-4 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-pink-500 group-hover:to-purple-500">
                                    {{ $job->titulo }}
                                </h3>
                                <p class="text-gray-400 mb-6">{{ Str::limit($job->descripcion, 150) }}</p>
                                <div class="flex items-center gap-4">
                                    <a href="{{ route('ofertas.show', $job->id) }}"
                                        class="px-6 py-3 bg-pink-600 hover:bg-pink-700 rounded-full transition-colors">
                                        Aplicar ahora
                                    </a>
                                    <button class="text-gray-400 hover:text-white transition-colors">
                                        <i class="far fa-bookmark"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 mt-20">
        <div class="max-w-7xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div>
                    <div class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-500 to-pink-500 mb-4">
                        TechHub
                    </div>
                    <p class="text-gray-400">Construyendo el futuro de la tecnología</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Navegación</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Inicio</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Explorar</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Comunidad</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Recursos</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Síguenos</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-700 transition-all">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-700 transition-all">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-700 transition-all">
                            <i class="fab fa-discord"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2024 TechHub. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
</body>
</html>
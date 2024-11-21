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
                    
                    <!-- Botón Admin Panel visible solo si el usuario tiene rol de Admin o Docente -->
                    @if (auth()->user()->roles->pluck('name')->contains('Admin') || auth()->user()->roles->pluck('name')->contains('Docente'))
                        <a href="/admin" class="group relative px-8 py-4 rounded-full transition-all duration-300"
                           :class="view === 'ofertas' ? 'bg-pink-600 hover:bg-pink-700' : 'bg-gray-800 hover:bg-gray-700'">
                            <i class="fa-solid fa-circle-user"></i>
                            <span>Admin Panel</span>
                        </a>
                    @endif
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="flex items-center w-full px-4 py-3 text-pink-700 hover:bg-pink-50 transition duration-200">
                            <i class="fas fa-sign-out-alt text-pink-600 mr-3"></i>
                            <span>Cerrar Sesión</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="pt-32 pb-20 px-4 bg-gradient-to-b from-purple-900/20 to-transparent">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-purple-500 to-pink-500">
                Descubre Algo Nuevo Todos Los Dias
            </h1>
            <p class="text-xl text-gray-400 mb-12">Explora las últimas Noticias y oportunidades en el mundo tech</p>
            
            <!-- Botones de navegación -->
            <div class="flex flex-wrap justify-center gap-4">
                <button @click="view = 'noticias'"
                    class="group relative px-8 py-4 rounded-full transition-all duration-300"
                    :class="view === 'noticias' ? 'bg-purple-600 hover:bg-purple-700' : 'bg-gray-800 hover:bg-gray-700'">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-newspaper"></i>
                        <span>Noticias</span>
                    </div>
                </button>
                
                <button @click="view = 'ofertas'"
                    class="group relative px-8 py-4 rounded-full transition-all duration-300"
                    :class="view === 'ofertas' ? 'bg-pink-600 hover:bg-pink-700' : 'bg-gray-800 hover:bg-gray-700'">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-rocket"></i>
                        <span>Oportunidades</span>
                    </div>
                </button>
            </div>
        </div>
    </div>

    <!-- Contenido Principal -->
    <div class="max-w-7xl mx-auto px-4 py-12">
        <!-- Noticias -->
        <div x-show="view === 'noticias'" class="space-y-12">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-3xl font-bold">Últimas Noticias</h2>
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
                                    @if (file_exists(public_path('storage/' . $newsItem->imagen)))
                                        <img src="{{ asset('storage/' . $newsItem->imagen) }}" alt="Imagen Noticia"
                                            class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                                    @else
                                        <p>Imagen no disponible</p>
                                    @endif
                                </div>
                            </div>
                            <div class="w-full md:w-2/3">
                                <div class="flex items-center space-x-4 mb-4">
                                    <span class="px-3 py-1 bg-purple-500/10 text-purple-400 rounded-full text-sm">
                                        Noticia
                                    </span>
                                    <span class="text-gray-400 text-sm">
                                        <i class="far fa-clock mr-2"></i>
                                        {{ $newsItem->created_at->diffForHumans() }}
                                    </span>
                                </div>
                                <h3 class="text-2xl font-bold mb-4 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-purple-500 group-hover:to-pink-500">
                                    {{ $newsItem->titulo }}
                                </h3>
                                <p class="text-gray-400 mb-6">{!! Str::limit($newsItem->contenido, 150) !!}</p>
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

    @if ($jobs->isEmpty())
        <p class="text-gray-400">No hay oportunidades disponibles en este momento.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($jobs as $job)
                <div class="group bg-gray-900 rounded-2xl p-6 hover:bg-gradient-to-r hover:from-purple-500 hover:to-pink-500 transition-all duration-300">
                    <div class="flex flex-col h-full">
                        <div class="flex flex-col justify-between h-full">
                            <div>
                                <div class="mb-4">
                                    <span class="px-3 py-1 bg-pink-500/10 text-pink-400 rounded-full text-sm">
                                        Oportunidad
                                    </span>
                                </div>
                                <h3 class="text-2xl font-bold mb-4 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-purple-500 group-hover:to-pink-500">
                                    {{ $job->titulo }}
                                </h3>
                                <p class="text-gray-400 mb-6">{!! Str::limit($job->descripcion, 150) !!}</p>
                            </div>

                            <div class="flex justify-between items-center">
                                <span class="text-gray-400 text-sm">
                                    <i class="far fa-clock mr-2"></i>
                                    {{ $job->created_at->diffForHumans() }}
                                </span>
                                <a href="{{ route('ofertas.show', $job->id) }}"
                                    class="inline-flex items-center text-pink-400 hover:text-pink-300 transition-colors">
                                    Ver más
                                    <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-2 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>



       
    <!-- Footer -->
    <footer class="bg-gray-900 mt-20">
        <div class="max-w-7xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div>
                    <div class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-500 to-pink-500 mb-4">
                        TechHub
                    </div>
                    <p class="text-gray-400">Construyendo un mejor futuro</p>
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
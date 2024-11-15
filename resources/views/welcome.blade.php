<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechHub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.3/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white" x-data="{ view: 'servicios', mobileMenu: false }">
    <!-- Navbar -->
    <nav class="backdrop-blur-md bg-black/30 border-b border-gray-800 fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center space-x-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center">
                    <i class="fa-brands fa-hubspot"></i>
                    </div>
                    <div>
                        <div class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-500 to-pink-500">
                        TechHub
                        </div>
                    
                    </div>
                </div>
                
                <!-- Menu móvil -->
                <button @click="mobileMenu = !mobileMenu" class="lg:hidden text-gray-300 hover:text-white">
                    <i class="fas fa-bars text-2xl"></i>
                </button>

                <!-- Menu desktop -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Inicio</a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Servicios</a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Eventos</a>
                    <a href="/login" class="text-gray-300 hover:text-white transition-colors duration-200">Ingresar</a>
                    <a href="/register" class="px-4 py-2 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full hover:opacity-90 transition-opacity duration-200">
                        Registrarse
                    </a>
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
            <a href="#" class="text-2xl text-gray-300 hover:text-white">Inicio</a>
            <a href="#" class="text-2xl text-gray-300 hover:text-white">Servicios</a>
            <a href="#" class="text-2xl text-gray-300 hover:text-white">Eventos</a>
            <a href="/login" class="text-2xl text-gray-300 hover:text-white">Ingresar</a>
            <a href="/register" class="text-2xl text-gray-300 hover:text-white">Registrarse</a>
            <button @click="mobileMenu = false" class="absolute top-6 right-6 text-gray-300 hover:text-white">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="pt-32 pb-20 px-4 bg-gradient-to-b from-purple-900/20 to-transparent">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-purple-500 to-pink-500">
                Impulsa tu Carrera Profesional
            </h1>
            <p class="text-xl text-gray-400 mb-12">Únete a una comunidad de profesionales innovadores y líderes en tecnología</p>
            
            <!-- Botones de navegación -->
            <div class="flex flex-wrap justify-center gap-4">
                <button @click="view = 'servicios'"
                    class="group relative px-8 py-4 rounded-full transition-all duration-300"
                    :class="view === 'servicios' ? 'bg-purple-600 hover:bg-purple-700' : 'bg-gray-800 hover:bg-gray-700'">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-graduation-cap"></i>
                        <span>Servicios</span>
                    </div>
                </button>
                
                <button @click="view = 'eventos'"
                    class="group relative px-8 py-4 rounded-full transition-all duration-300"
                    :class="view === 'eventos' ? 'bg-pink-600 hover:bg-pink-700' : 'bg-gray-800 hover:bg-gray-700'">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Eventos</span>
                    </div>
                </button>
            </div>
        </div>
    </div>

    <!-- Contenido Principal -->
    <div class="max-w-7xl mx-auto px-4 py-12">
        <!-- Servicios -->
        <div x-show="view === 'servicios'" class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="group bg-gray-900 rounded-2xl p-1 hover:bg-gradient-to-r hover:from-purple-500 hover:to-pink-500 transition-all duration-300">
                <div class="bg-gray-900 rounded-2xl p-6 h-full">
                    <div class="w-16 h-16 bg-purple-500/10 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-briefcase text-2xl text-purple-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Oportunidades</h3>
                    <p class="text-gray-400 mb-6">Accede a oportunidades laborales exclusivas en el sector tecnológico.</p>
                    <a href="#" class="text-purple-400 hover:text-purple-300 flex items-center">
                        Explorar ofertas
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <div class="group bg-gray-900 rounded-2xl p-1 hover:bg-gradient-to-r hover:from-purple-500 hover:to-pink-500 transition-all duration-300">
                <div class="bg-gray-900 rounded-2xl p-6 h-full">
                    <div class="w-16 h-16 bg-pink-500/10 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-newspaper text-2xl text-pink-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Noticias</h3>
                    <p class="text-gray-400 mb-6">Descubre y actualiza tu informacion con las noticias tech.</p>
                    <a href="#" class="text-pink-400 hover:text-pink-300 flex items-center">
                        Ver programas
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <div class="group bg-gray-900 rounded-2xl p-1 hover:bg-gradient-to-r hover:from-purple-500 hover:to-pink-500 transition-all duration-300">
                <div class="bg-gray-900 rounded-2xl p-6 h-full">
                    <div class="w-16 h-16 bg-purple-500/10 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-users text-2xl text-purple-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Networking</h3>
                    <p class="text-gray-400 mb-6">Conecta con profesionales y expande tu red en la industria.</p>
                    <a href="#" class="text-purple-400 hover:text-purple-300 flex items-center">
                        Conectar ahora
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Eventos -->
        <div x-show="view === 'eventos'" class="space-y-8">
            <div class="group bg-gray-900 rounded-2xl p-1 hover:bg-gradient-to-r hover:from-pink-500 hover:to-purple-500 transition-all duration-300">
                <div class="bg-gray-900 rounded-2xl p-6 h-full">
                    <div class="flex items-start gap-6">
                        <div class="w-16 h-16 bg-pink-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-calendar-alt text-2xl text-pink-400"></i>
                        </div>
                        <div>
                            <div class="flex items-center gap-4 mb-4">
                                <span class="px-3 py-1 bg-pink-500/10 text-pink-400 rounded-full text-sm">
                                    28 Nov
                                </span>
                                <span class="text-gray-400 text-sm">
                                    Virtual
                                </span>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">Feria de Empleo Tech</h3>
                            <p class="text-gray-400 mb-6">Conecta con empresas líderes en tecnología en búsqueda de talento.</p>
                            <a href="#" class="px-6 py-3 bg-pink-600 hover:bg-pink-700 rounded-full transition-colors">
                                Registrarse
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 mt-20">
        <div class="max-w-7xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div>
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center">
                        <i class="fa-brands fa-hubspot"></i>
                        </div>
                        <div class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-500 to-pink-500">
                        TechHub
                        </div>
                    </div>
                    <p class="text-gray-400">Transformando vidas a través de la innovación desde 1967</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Enlaces</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Inicio</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Servicios</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Eventos</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Contacto</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Síguenos</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-700 transition-all">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-700 transition-all">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-700 transition-all">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2024 UNIMAR. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
</body>
</html>
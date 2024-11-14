<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Egresados - Universidad Mariana</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50" x-data="{ mobileMenu: false, userMenu: false }">
    <!-- Barra lateral fija -->
    <aside class="fixed inset-y-0 left-0 z-50 w-64 bg-white shadow-lg transform -translate-x-full lg:translate-x-0 transition-transform duration-300" :class="{'translate-x-0': mobileMenu}">
        <div class="h-full flex flex-col">
            <!-- Logo y nombre -->
            <div class="p-6">
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('logo-unimar.png') }}" alt="Logo" class="w-12 h-12">
                    <div>
                        <h1 class="text-xl font-bold text-gray-800">UNIMAR</h1>
                        <p class="text-sm text-gray-500">Portal de Egresados</p>
                    </div>
                </div>
            </div>

            <!-- Menú principal -->
            <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 bg-indigo-50 rounded-xl">
                    <i class="fas fa-home w-5 text-indigo-600"></i>
                    <span class="ml-3 font-medium">Inicio</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl transition-colors">
                    <i class="fas fa-briefcase w-5"></i>
                    <span class="ml-3">Ofertas Laborales</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl transition-colors">
                    <i class="fas fa-newspaper w-5"></i>
                    <span class="ml-3">Noticias</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl transition-colors">
                    <i class="fas fa-user-graduate w-5"></i>
                    <span class="ml-3">Mi Perfil</span>
                </a>
            </nav>
        </div>
    </aside>

    <!-- Contenido principal -->
    <main class="lg:ml-64 min-h-screen">
        <!-- Header con botón de acceso al dashboard y cerrar sesión -->
        <header class="bg-white shadow-sm p-4 flex justify-end items-center space-x-4">
            <!-- Botón que redirige al dashboard del admin -->
            <a href="/admin" class="flex items-center px-4 py-2 text-sm font-medium text-indigo-600 bg-indigo-100 rounded-xl hover:bg-indigo-200 transition-colors">
                <i class="fas fa-user-shield mr-2"></i>
                <span>{{ Auth::user()->name }}</span>
            </a>
            <!-- Botón de cerrar sesión -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex items-center px-4 py-2 text-sm text-red-600 hover:bg-red-50 rounded-xl transition-colors">
                    <i class="fas fa-sign-out-alt mr-2"></i>
                    Cerrar Sesión
                </button>
            </form>
        </header>

        <!-- Contenido de la página -->
        <div class="p-6">
            <!-- Banner de bienvenida -->
            <div class="relative rounded-3xl overflow-hidden mb-8 bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500">
                <div class="absolute inset-0 bg-black opacity-10"></div>
                <div class="relative px-8 py-16 sm:px-12">
                    <h2 class="text-4xl font-bold text-white mb-4">¡Bienvenido de vuelta!</h2>
                    <p class="text-lg text-white/90 max-w-2xl">Descubre las últimas oportunidades laborales y mantente conectado con tu alma mater.</p>
                    <div class="mt-8 flex space-x-4">
                        <a href="#" class="inline-flex items-center px-6 py-3 bg-white text-indigo-600 rounded-xl hover:bg-indigo-50 transition-colors">
                            <i class="fas fa-briefcase mr-2"></i>
                            Ver Ofertas
                        </a>
                        <a href="#" class="inline-flex items-center px-6 py-3 bg-indigo-500 text-white rounded-xl hover:bg-indigo-600 transition-colors">
                            <i class="fas fa-user-edit mr-2"></i>
                            Actualizar Perfil
                        </a>
                    </div>
                </div>
            </div>
            <!-- Continúa con el resto de tu contenido aquí -->
        </div>
    </main>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de Egresados UNIMAR</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans">
    <!-- Navbar Flotante -->
    <nav class="fixed w-full bg-white/80 backdrop-blur-md z-50 shadow-lg">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <div class="w-12 h-12 bg-blue-700 rounded-full flex items-center justify-center">
                        <i class="fas fa-university text-white text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold bg-gradient-to-r from-blue-700 to-purple-600 bg-clip-text text-transparent">UNIMAR</h1>
                        <p class="text-sm text-gray-600">Portal de Egresados</p>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#inicio" class="text-gray-600 hover:text-blue-700 transition">Inicio</a>
                    <a href="#servicios" class="text-gray-600 hover:text-blue-700 transition">Servicios</a>
                    <a href="#eventos" class="text-gray-600 hover:text-blue-700 transition">Eventos</a>
                    <a href="#contacto" class="text-gray-600 hover:text-blue-700 transition">Contacto</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/login" class="px-6 py-2 text-blue-700 hover:bg-blue-50 rounded-full transition">Ingresar</a>
                    <a href="/register" class="px-6 py-2 bg-blue-700 text-white rounded-full hover:bg-blue-800 transition shadow-lg hover:shadow-blue-200">Registrarse</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section con Animación -->
    <section id="inicio" class="min-h-screen pt-24 bg-gradient-to-br from-blue-50 via-white to-purple-50">
        <div class="container mx-auto px-6 py-20">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <h1 class="text-5xl font-bold leading-tight">
                        <span class="block text-blue-700">Construye</span>
                        <span class="block">tu futuro profesional</span>
                        <span class="block bg-gradient-to-r from-blue-700 to-purple-600 bg-clip-text text-transparent">con nosotros</span>
                    </h1>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        Descubre un mundo de oportunidades, conexiones y crecimiento profesional en la red de egresados más innovadora.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="/register" class="px-8 py-3 bg-blue-700 text-white rounded-full hover:bg-blue-800 transition shadow-lg hover:shadow-blue-200 flex items-center">
                            <span>Únete ahora</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                        <a href="#servicios" class="px-8 py-3 border-2 border-blue-700 text-blue-700 rounded-full hover:bg-blue-50 transition flex items-center">
                            <i class="fas fa-play-circle mr-2"></i>
                            <span>Ver servicios</span>
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 rounded-3xl transform rotate-6 opacity-10"></div>
                    <div class="relative bg-white p-8 rounded-3xl shadow-xl">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="p-6 bg-blue-50 rounded-2xl hover:shadow-md transition">
                                <i class="fas fa-chart-line text-4xl text-blue-700 mb-4"></i>
                                <h3 class="font-semibold text-gray-800">Desarrollo Profesional</h3>
                            </div>
                            <div class="p-6 bg-purple-50 rounded-2xl hover:shadow-md transition">
                                <i class="fas fa-users text-4xl text-purple-700 mb-4"></i>
                                <h3 class="font-semibold text-gray-800">Comunidad Activa</h3>
                            </div>
                            <div class="p-6 bg-indigo-50 rounded-2xl hover:shadow-md transition">
                                <i class="fas fa-lightbulb text-4xl text-indigo-700 mb-4"></i>
                                <h3 class="font-semibold text-gray-800">Innovación</h3>
                            </div>
                            <div class="p-6 bg-pink-50 rounded-2xl hover:shadow-md transition">
                                <i class="fas fa-globe text-4xl text-pink-700 mb-4"></i>
                                <h3 class="font-semibold text-gray-800">Conexión Global</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Servicios con Cards Modernas -->
    <section id="servicios" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Nuestros Servicios</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Descubre todo lo que tenemos para ofrecerte en tu desarrollo profesional</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="group">
                    <div class="p-8 rounded-3xl bg-white border border-gray-100 shadow-lg hover:shadow-2xl transition duration-500 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 transform -translate-y-full group-hover:translate-y-0 transition-transform duration-500"></div>
                        <div class="relative">
                            <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-8">
                                <i class="fas fa-briefcase text-3xl text-blue-700"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-4">Bolsa de Empleo</h3>
                            <p class="text-gray-600 mb-6">Accede a oportunidades laborales exclusivas y encuentra tu próximo desafío profesional.</p>
                            <a href="#" class="text-blue-700 hover:text-blue-800 flex items-center">
                                <span>Explorar ofertas</span>
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="group">
                    <div class="p-8 rounded-3xl bg-white border border-gray-100 shadow-lg hover:shadow-2xl transition duration-500 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 to-pink-500/10 transform -translate-y-full group-hover:translate-y-0 transition-transform duration-500"></div>
                        <div class="relative">
                            <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mb-8">
                                <i class="fas fa-graduation-cap text-3xl text-purple-700"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-4">Educación Continua</h3>
                            <p class="text-gray-600 mb-6">Mantente actualizado con cursos, talleres y certificaciones especializadas.</p>
                            <a href="#" class="text-purple-700 hover:text-purple-800 flex items-center">
                                <span>Ver programas</span>
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="group">
                    <div class="p-8 rounded-3xl bg-white border border-gray-100 shadow-lg hover:shadow-2xl transition duration-500 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-pink-500/10 to-red-500/10 transform -translate-y-full group-hover:translate-y-0 transition-transform duration-500"></div>
                        <div class="relative">
                            <div class="w-16 h-16 bg-pink-100 rounded-2xl flex items-center justify-center mb-8">
                                <i class="fas fa-users text-3xl text-pink-700"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-4">Networking</h3>
                            <p class="text-gray-600 mb-6">Conecta con otros profesionales y expande tu red de contactos.</p>
                            <a href="#" class="text-pink-700 hover:text-pink-800 flex items-center">
                                <span>Conectar ahora</span>
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Eventos -->
    <section id="eventos" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Próximos Eventos</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Participa en nuestros eventos exclusivos para egresados</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden group hover:shadow-2xl transition duration-500">
                    <div class="relative">
                        <div class="h-48 bg-gradient-to-r from-blue-400 to-blue-600"></div>
                        <div class="absolute top-4 right-4 bg-white px-4 py-2 rounded-full text-sm font-semibold text-blue-700">
                            28 Nov
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Feria de Empleo Virtual</h3>
                        <p class="text-gray-600 mb-4">Conecta con empresas líderes en búsqueda de talento.</p>
                        <a href="#" class="text-blue-700 hover:text-blue-800 flex items-center">
                            <span>Registrarse</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                <!-- Más eventos... -->
            </div>
        </div>
    </section>

    <!-- Footer Moderno -->
    <footer class="bg-gray-900 text-white">
        <div class="container mx-auto px-6 py-12">
            <div class="grid md:grid-cols-4 gap-12">
                <div class="space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-blue-700 rounded-full flex items-center justify-center">
                            <i class="fas fa-university text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-xl">UNIMAR</h3>
                            <p class="text-sm text-gray-400">Portal de Egresados</p>
                        </div>
                    </div>
                    <p class="text-gray-400">Transformando vidas a través de la educación desde 1967.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-6">Enlaces Rápidos</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Inicio</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Servicios</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Eventos</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Contacto</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-6">Contacto</h4>
                    <ul class="space-y-4">
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-map-marker-alt text-blue-500"></i>
                            <span class="text-gray-400">Calle 18 No. 34-104</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-phone text-blue-500"></i>
                            <span class="text-gray-400">(+57) 7244460</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa
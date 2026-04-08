@extends('layouts.webpage')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[50vh] flex items-center bg-gray-900 text-white overflow-hidden pt-20">
        <div class="absolute inset-0">
            <img src="{{ asset('themes/webpage/images/fondo-azul.jpg') }}" class="w-full h-full object-cover opacity-40" alt="Arquitectura moderna y diseño">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-transparent to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
            <nav class="flex mb-8 text-sm font-bold uppercase tracking-widest text-[#c85a00]" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/" class="hover:text-white transition-colors">Inicio</a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="ml-1 md:ml-2 text-white">Servicios</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight">Nuestros <span class="text-[#c85a00]">Servicios</span></h1>
        </div>
    </section>

    <!-- Services Introduction Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-6">
                    <h2 class="text-3xl font-bold text-[#001e46] tracking-tight">Ingeniería integral para cada desafío.</h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        En Grupo <strong>Brise-Soleil SAC,</strong> somos especialistas en la implementación de metodologías Lean Construction y BIM Management, integrándolas estratégicamente en cada etapa de nuestros proyectos para optimizar recursos, mejorar la planificación y garantizar resultados eficientes y de alta calidad
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Brindamos soluciones integrales en ingeniería y construcción, abarcando desde la concepción y planificación inicial hasta la ejecución y entrega final, adaptándonos a las necesidades específicas de cada cliente y proyecto.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Nuestro enfoque se basa en la innovación, la sostenibilidad y la mejora continua, priorizando la seguridad, el cumplimiento de plazos y la transparencia en cada proceso.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        En Grupo Brise-Soleil SAC, transformamos ideas en proyectos sólidos, eficientes y exitosos.
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <img src="https://images.unsplash.com/photo-1542838180-870386e8a2a5?auto=format&fit=crop&q=80" class="rounded-lg shadow-lg mt-8" alt="Diseño de planos">
                    <img src="https://images.unsplash.com/photo-1520188688402-d922379c3d42?auto=format&fit=crop&q=80" class="rounded-lg shadow-lg" alt="Obra de construcción moderna">
                </div>
            </div>
        </div>
    </section>

    <!-- Service Offerings Section -->
    <section class="py-24 bg-gray-50 border-y border-gray-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-[#c85a00] font-bold tracking-widest uppercase mb-4 text-sm">Nuestras Especialidades</h2>
                <h3 class="text-4xl font-bold text-[#001e46]">Soluciones a medida para su proyecto</h3>
            </div>
            <div class="grid md:grid-cols-3 gap-12">
                <!-- Servicio 1: Construcción Civil -->
                <div class="bg-white p-10 rounded-2xl shadow-sm border-t-4 border-[#c85a00]">
                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-[#c85a00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-[#001e46]">Ingenieria</h3>
                </div>
                <!-- Servicio 2: Diseño Estructural -->
                <div class="bg-white p-10 rounded-2xl shadow-sm border-t-4 border-[#c85a00]">
                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-[#c85a00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-[#001e46]">Construcción Civil</h3>
                </div>
                <!-- Servicio 3: Gestión de Proyectos -->
                <div class="bg-white p-10 rounded-2xl shadow-sm border-t-4 border-[#c85a00]">
                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-[#c85a00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 2v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-[#001e46]">Inmobiliaria</h3>
                </div>
                <!-- Servicio 3: Gestión de Proyectos -->
                <div class="bg-white p-10 rounded-2xl shadow-sm border-t-4 border-[#c85a00]">
                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-[#c85a00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 2v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-[#001e46]">Saneamiento Físico Legal de Predios</h3>
                </div>
                <!-- Servicio 3: Gestión de Proyectos -->
                <div class="bg-white p-10 rounded-2xl shadow-sm border-t-4 border-[#c85a00]">
                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-[#c85a00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 2v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-[#001e46]">Ferretería Online</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 text-center mb-16">
            <h2 class="text-[#c85a00] font-bold tracking-widest uppercase mb-4 text-sm">Compromiso y Calidad</h2>
            <h3 class="text-4xl font-bold text-[#001e46]">
                “Por qué elegir a Grupo Brise-Soleil para su próximo proyecto”
            </h3>
        </div>
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 text-center">
                <!-- Característica 1 -->
                <div class="p-8 border border-gray-200 rounded-lg shadow-sm hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold text-[#001e46] mb-2">Expertise Comprobado</h4>
                    <p class="text-gray-600 leading-relaxed text-sm">
                        Nuestros profesionales tienen más de 25 años de experiencia en la industria, respaldados por proyectos exitosos y clientes satisfechos.
                    </p>
                </div>
                <!-- Característica 2 -->
                <div class="p-8 border border-gray-200 rounded-lg shadow-sm hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold text-[#001e46] mb-2">Innovación Continua</h4>
                    <p class="text-gray-600 leading-relaxed text-sm">Aplicamos las últimas tecnologías y metodologías para optimizar cada fase de su proyecto.</p>
                </div>
                <!-- Característica 3 -->
                <div class="p-8 border border-gray-200 rounded-lg shadow-sm hover:shadow-lg transition-all duration-300">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold text-[#001e46] mb-2">Compromiso con la Calidad</h4>
                    <p class="text-gray-600 leading-relaxed text-sm">Adherencia estricta a los estándares de calidad y seguridad, superando las expectativas en cada entrega.</p>
                </div>
            </div>
            <div class="text-center mt-16">
                <button @click="$store.quoteModal.open()" class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-base font-medium rounded-md text-white bg-[#c85a00] hover:bg-orange-700 md:py-4 md:text-lg md:px-10 transition-colors duration-300">
                    Contáctanos ahora
                </button>
            </div>
        </div>
    </section>
@endsection

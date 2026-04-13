@extends('layouts.webpage')

@section('content')
    <!-- Preloader -->
    <div id="preloader" x-show="isLoading" x-transition:leave="transition ease-in duration-500"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="bg-[#fff] flex flex-col items-center justify-center">
        <img src="{{ asset('themes/webpage/images/logo-about.png') }}" alt="Brise" class="h-40 md:h-32 animate-zoom-in">
    </div>
    <!-- Hero Section -->
    {{-- <section class="relative h-screen flex items-center justify-center bg-gray-900 text-white">
        <div class="absolute inset-0 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1518005020951-eccb494ad742?auto=format&fit=crop&q=80" class="w-full h-full object-cover opacity-40" alt="Arquitectura moderna elegante">
        </div>
        <div class="relative z-10 text-center px-4 max-w-5xl">
            <span class="inline-block py-1 px-3 mb-4 text-xs font-semibold tracking-widest text-orange-500 uppercase bg-orange-500/10 rounded-full">Líderes en Ingeniería</span>
            <h1 class="text-5xl md:text-7xl font-bold mb-6 tracking-tight">Construimos <span class="text-orange-500">Visiones</span> que Perduran</h1>
            <p class="text-xl md:text-2xl mb-10 text-gray-300 max-w-3xl mx-auto font-light">Especialistas en infraestructura civil, industrial y residencial con los más altos estándares de calidad y seguridad.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#proyectos" class="bg-[#c85a00] hover:bg-orange-700 text-white px-8 py-4 rounded-lg font-bold transition-all transform hover:scale-105">Nuestros Proyectos</a>
                <a href="#servicios" class="bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white px-8 py-4 rounded-lg font-bold border border-white/30 transition-all">Ver Servicios</a>
            </div>
        </div>
    </section> --}}
    <section class="relative h-screen flex items-center justify-center bg-gray-100 ">
        <div class="absolute inset-0 overflow-hidden">
            <img src="{{ asset('themes/webpage/images/hero-home.jpg') }}" class="w-full h-full object-cover opacity-40"
                alt="Arquitectura moderna elegante">
        </div>
        <div class="relative z-10 text-center px-4 max-w-5xl">
            <span
                class="inline-block py-1 px-3 mb-4 text-xs font-semibold tracking-widest text-[#fff] uppercase bg-[#c85a00] rounded-full">Líderes
                en Ingeniería</span>
            <h1 class="text-5xl md:text-7xl font-black mb-6 tracking-tight text-[#001e46]">
                Diseñamos proyectos impulsados por innovación de vanguardia
            </h1>
            <p class="text-xl md:text-2xl mb-10 text-gray-600 max-w-3xl mx-auto font-light">
                Especialistas en infraestructura residencial, comercial, corporativa e industrial con los m{as altos estándares
                de calidad y seguridad.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('web_services') }}"
                    class="bg-[#c85a00] hover:bg-[#000] text-white px-8 py-4 rounded-lg font-bold transition-all transform hover:scale-105">
                    VER SERVICIOS
                </a>
            </div>
        </div>
    </section>

    <!-- Stats Bar -->
    <section class="bg-white py-16 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-12">
                <div class="text-center">
                    <div class="text-5xl font-extrabold text-[#001e46] mb-2">100+</div>
                    <div class="text-[#c85a00] font-semibold uppercase text-xs tracking-widest">Obras Finalizadas</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-extrabold text-[#001e46] mb-2">25</div>
                    <div class="text-[#c85a00] font-semibold uppercase text-xs tracking-widest">Años de Trayectoria</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-extrabold text-[#001e46] mb-2">100%</div>
                    <div class="text-[#c85a00] font-semibold uppercase text-xs tracking-widest">Seguridad Laboral</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-extrabold text-[#001e46] mb-2">02</div>
                    <div class="text-[#c85a00] font-semibold uppercase text-xs tracking-widest">Premios Nacionales</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="nosotros" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2">
                    <div class="relative">
                        <img src="{{ asset('themes/webpage/images/home-02.jpg') }}"
                            class="rounded-2xl shadow-2xl relative z-10"
                            alt="Arquitectura residencial moderna y acabados de lujo">
                        <div class="absolute -bottom-6 -right-6 w-64 h-64 bg-orange-500 rounded-2xl -z-0 hidden md:block">
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <h2 class="text-[#c85a00] font-bold tracking-widest uppercase mb-4 text-sm">Sobre la Empresa</h2>
                    <h3 class="text-4xl font-bold text-[#001e46] mb-6 leading-tight">Excelencia en cada detalle, desde el
                        cimiento hasta el acabado.</h3>
                    <p class="text-gray-600 text-lg mb-8">
                        Fundada con la visión de consolidarnos como una empresa referente a nivel regional en la ejecución y gestión de proyectos de ingeniería,
                        construcción e inmobiliarios, reconocida por su solvencia técnica, seguridad jurídica, transparencia en la gestión y cumplimiento 
                        estricto de los compromisos contractuales.
                    </p>
                    <ul class="space-y-4 mb-10 text-gray-700">
                        <li class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Creatividad e innovación que elevan cada proyecto.
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Experiencia consolidada en desarrollos de alto nivel.
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Gestión eficiente con cumplimiento estricto de plazos.
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Selección de materiales certificados de estándar superior.
                        </li>
                    </ul>
                    {{-- <a href="#"
                        class="inline-flex items-center font-bold text-gray-900 hover:text-[#c85a00] transition">
                        Conoce más sobre nuestra historia
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="servicios" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-[#c85a00] font-bold tracking-widest uppercase mb-4 text-sm">Servicios Especializados</h2>
                <h3 class="text-4xl font-bold text-[#001e46]">Soluciones Constructivas de Extremo a Extremo</h3>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div
                    class="p-10 border border-gray-100 bg-gray-50 rounded-xl hover:shadow-xl hover:bg-white hover:border-orange-500/20 transition-all duration-300 group">
                    <div
                        class="w-14 h-14 bg-white shadow-md rounded-lg flex items-center justify-center mb-8 group-hover:bg-[#c85a00] transition-colors">
                        <svg class="w-8 h-8 text-[#c85a00] group-hover:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Construcción Civil</h4>
                    <p class="text-gray-600 leading-relaxed">Edificios residenciales y comerciales diseñados para la máxima
                        habitabilidad y durabilidad urbana.</p>
                </div>
                <!-- Card 2 -->
                <div
                    class="p-10 border border-gray-100 bg-gray-50 rounded-xl hover:shadow-xl hover:bg-white hover:border-orange-500/20 transition-all duration-300 group">
                    <div
                        class="w-14 h-14 bg-white shadow-md rounded-lg flex items-center justify-center mb-8 group-hover:bg-[#c85a00] transition-colors">
                        <svg class="w-8 h-8 text-[#c85a00] group-hover:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Obras Industriales</h4>
                    <p class="text-gray-600 leading-relaxed">Naves logísticas y complejos fabriles con ingeniería
                        estructural avanzada para procesos pesados.</p>
                </div>
                <!-- Card 3 -->
                <div
                    class="p-10 border border-gray-100 bg-gray-50 rounded-xl hover:shadow-xl hover:bg-white hover:border-orange-500/20 transition-all duration-300 group">
                    <div
                        class="w-14 h-14 bg-white shadow-md rounded-lg flex items-center justify-center mb-8 group-hover:bg-[#c85a00] transition-colors">
                        <svg class="w-8 h-8 text-[#c85a00] group-hover:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Remodelaciones</h4>
                    <p class="text-gray-600 leading-relaxed">Renovación total de espacios existentes, inyectando modernidad
                        sin perder la esencia arquitectónica.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Portfolio -->
    <section id="proyectos" class="py-24 bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div class="max-w-xl">
                    <h2 class="text-orange-500 font-bold tracking-widest uppercase mb-4 text-sm">Nuestro Portafolio</h2>
                    <h3 class="text-4xl font-bold">Obras que redefinen paisajes</h3>
                </div>
                {{-- <a href="#" class="text-orange-500 font-bold border-b-2 border-orange-500 pb-1 hover:text-white hover:border-white transition">Ver todos los proyectos</a> --}}
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project item -->
                <div class="group relative overflow-hidden rounded-xl aspect-[4/5]">
                    <img src="{{ asset('themes/webpage/images/portafolio-01.jpg') }}"
                        class="w-full h-full object-cover transition duration-700 group-hover:scale-110" alt="Proyecto 1">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-900/20 to-transparent opacity-80">
                    </div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <span
                            class="text-orange-500 text-sm font-bold uppercase tracking-widest mb-2 block">Corporativo</span>
                        <h4 class="text-2xl font-bold">Centro Empresarial Skyline</h4>
                    </div>
                </div>
                <!-- Project item -->
                <div class="group relative overflow-hidden rounded-xl aspect-[4/5]">
                    <img src="{{ asset('themes/webpage/images/portafolio-02.jpg') }}"
                        class="w-full h-full object-cover transition duration-700 group-hover:scale-110" alt="Proyecto 2">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-900/20 to-transparent opacity-80">
                    </div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <span
                            class="text-orange-500 text-sm font-bold uppercase tracking-widest mb-2 block">Residencial</span>
                        <h4 class="text-2xl font-bold">Torres del Valle</h4>
                    </div>
                </div>
                <!-- Project item -->
                <div class="group relative overflow-hidden rounded-xl aspect-[4/5]">
                    <img src="{{ asset('themes/webpage/images/portafolio-03.jpg') }}"
                        class="w-full h-full object-cover transition duration-700 group-hover:scale-110" alt="Proyecto 3">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-900/20 to-transparent opacity-80">
                    </div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <span
                            class="text-orange-500 text-sm font-bold uppercase tracking-widest mb-2 block">Industrial</span>
                        <h4 class="text-2xl font-bold">Planta Logística Nexo</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-[#c85a00]">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-8">¿Listo para iniciar su próximo proyecto?</h2>
            <p class="text-orange-100 text-xl mb-12 max-w-2xl mx-auto font-light">Agende una asesoría técnica gratuita con
                nuestros ingenieros y reciba un presupuesto preliminar sin compromiso.</p>
            <button @click="$store.quoteModal.open()"
                class="inline-block bg-gray-900 text-white px-10 py-4 rounded-lg font-bold text-lg hover:bg-[#001e46] transition-all shadow-xl">Contactar
                con un Experto</button>
        </div>
    </section>
@stop

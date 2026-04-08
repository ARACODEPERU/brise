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
                            <span class="ml-1 md:ml-2 text-white">Nosotros</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight">Sobre <span class="text-[#c85a00]">Nosotros</span></h1>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-6">
                    <h2 class="text-3xl font-bold text-gray-900 tracking-tight">
                        ¿QUIÉNES SOMOS?
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed text-justify">
                        <strong class="text-gray-900">GRUPO BRISE SOLEIL S.A.C</strong>
                        , es una empresa dedicada a la prestación de servicios especializados en Ingeniería, Construcción, Inmobiliaria y Saneamiento Físico Legal de Predios. Contamos con un equipo multidisciplinario de profesionales con experiencia técnica, administrativa y legal, orientado a la gestión integral de proyectos públicos y privados. Nuestra actuación se sustenta en el cumplimiento estricto del marco normativo vigente, la aplicación de estándares técnicos de calidad y una gestión eficiente de recursos, garantizando seguridad jurídica y viabilidad técnica en cada intervención.
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <img src="{{ asset('themes/webpage/images/about-01.jpg') }}" class="rounded-lg shadow-lg mt-8" alt="Edificación en construcción civil">
                    <img src="{{ asset('themes/webpage/images/logo-about.png') }}" class="rounded-lg shadow-lg" alt="Obra en curso">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission, Vision & Values -->
    <section class="py-24 bg-gray-50 border-y border-gray-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-12">
                <!-- Misión -->
                <div class="bg-white p-10 rounded-2xl shadow-sm border-t-4 border-[#c85a00]">
                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-[#c85a00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900">Nuestra Misión</h3>
                    <p class="text-gray-600 leading-relaxed text-sm text-justify">
                        Brindar servicios especializados en Ingeniería, Construcción, Inmobiliaria y Saneamiento Físico Legal, desarrollando proyectos técnica y legalmente viables, sostenibles y económicamente eficientes. Nos comprometemos a garantizar el cumplimiento de la normativa aplicable, los estándares de calidad y las obligaciones contractuales, generando valor para nuestros clientes y contribuyendo al desarrollo urbano formal y ordenado.
                    </p>
                </div>
                <!-- Visión -->
                <div class="bg-white p-10 rounded-2xl shadow-sm border-t-4 border-[#c85a00]">
                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-[#c85a00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900">Nuestra Visión</h3>
                    <p class="text-gray-600 leading-relaxed text-sm text-justify">
                        Consolidarnos como una empresa referente a nivel regional en la ejecución y gestión de proyectos de ingeniería, construcción e inmobiliarios, reconocida por su solvencia técnica, seguridad jurídica, transparencia en la gestión y cumplimiento estricto de los compromisos contractuales.
                    </p>
                </div>
                <!-- Valores -->
                <div class="bg-white p-10 rounded-2xl shadow-sm border-t-4 border-[#c85a00]">
                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-[#c85a00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900">Nuestros Valores</h3>
                    <ul class="text-gray-600 text-sm space-y-2 text-justify">
                        <li class="flex items-center gap-2 font-semibold text-gray-800 italic  tracking-tight text-xs">
                            <span class="w-1.5 h-1.5 bg-[#c85a00] rounded-full"></span> Integridad absoluta
                        </li>
                        <li class="flex items-center gap-2 font-semibold text-gray-800 italic  tracking-tight text-xs">
                            <span class="w-1.5 h-1.5 bg-[#c85a00] rounded-full"></span> Seguridad preventiva
                        </li>
                        <li class="flex items-center gap-2 font-semibold text-gray-800 italic  tracking-tight text-xs">
                            <span class="w-1.5 h-1.5 bg-[#c85a00] rounded-full"></span> Calidad garantizada
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership/Team Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 text-center mb-16">
            <h2 class="text-[#c85a00] font-bold tracking-widest uppercase mb-4 text-sm">El Equipo</h2>
            <h3 class="text-4xl font-bold text-[#001e46]">Liderazgo con experiencia</h3>
        </div>
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Member 1 -->
                <div class="group text-center">
                    <div class="relative overflow-hidden rounded-xl mb-4 grayscale hover:grayscale-0 transition-all duration-500">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80" class="w-full aspect-[3/4] object-cover" alt="Director">
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-[#c85a00] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h4 class="text-xl font-bold text-[#001e46]">
                        ELIZABETH CARHUANINA
                    </h4>
                    <p class="text-[#c85a00] font-semibold text-sm uppercase tracking-wider">
                        Gerente General de 
                        <br>GRUPO BRISE SOLEIL S.A.C
                    </p>
                </div>
                <!-- Member 2 -->
                <div class="group text-center">
                    <div class="relative overflow-hidden rounded-xl mb-4 grayscale hover:grayscale-0 transition-all duration-500">
                        <img src="{{ asset('themes/webpage/images/about-team-02.jpg') }}" class="w-full aspect-[3/4] object-cover" alt="Director">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#c85a00] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h4 class="text-xl font-bold text-[#001e46]">
                        JULIO FLORES
                    </h4>
                    <p class="text-[#c85a00] font-semibold text-sm uppercase tracking-wider">
                        Sub gerente de 
                        <br>GRUPO BRISE SOLEIL S.A.C.
                    </p>
                </div>
                <!-- Member 3 -->
                <div class="group text-center">
                    <div class="relative overflow-hidden rounded-xl mb-4 grayscale hover:grayscale-0 transition-all duration-500">
                        <img src="{{ asset('themes/webpage/images/about-team-03.jpg') }}" class="w-full aspect-[3/4] object-cover" alt="Director">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#c85a00] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h4 class="text-xl font-bold text-[#001e46]">
                        SAMUEL TORRES
                    </h4>
                    <p class="text-[#c85a00] font-semibold text-sm uppercase tracking-wider">
                        Área Legal de 
                        <br>GRUPO BRISE SOLEIL S.A.C.
                    </p>
                </div>
                <!-- Member 4 -->
                {{-- <div class="group">
                    <div class="relative overflow-hidden rounded-xl mb-4 grayscale hover:grayscale-0 transition-all duration-500">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80" class="w-full aspect-[3/4] object-cover" alt="Director">
                        <div class="absolute inset-0 bg-gradient-to-t from-orange-600/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900">Ing. Alberto Sosa</h4>
                    <p class="text-orange-600 font-semibold text-sm uppercase tracking-wider">Jefe de Seguridad</p>
                </div> --}}
            </div>
        </div>
    </section>
@stop

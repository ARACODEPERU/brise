@extends('layouts.webpage')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[45vh] flex items-center bg-gray-900 text-white overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1487958449943-2429e8be8625?auto=format&fit=crop&q=80" class="w-full h-full object-cover opacity-30" alt="Ingeniería y Proyectos">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-6 w-full text-center">
            <span class="text-orange-500 font-bold tracking-[0.3em] uppercase text-xs mb-4 block">Portafolio</span>
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-4">Nuestras <span class="text-orange-500 italic font-light">Obras</span></h1>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto font-light">Explora nuestra trayectoria a través de proyectos que combinan innovación arquitectónica y solidez técnica.</p>
        </div>
    </section>

    <!-- Portfolio Section with Filtering -->
    <section class="py-24 bg-white" x-data="{ filter: 'all' }">
        <div class="max-w-7xl mx-auto px-6">
            
            <!-- Filter Bar -->
            <div class="flex flex-wrap justify-center gap-3 mb-20">
                <button @click="filter = 'all'" :class="filter === 'all' ? 'bg-orange-600 text-white shadow-lg shadow-orange-600/30' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'" class="px-8 py-3 rounded-full text-[10px] font-black uppercase tracking-[0.2em] transition-all duration-300">Todos</button>
                <button @click="filter = 'residencial'" :class="filter === 'residencial' ? 'bg-orange-600 text-white shadow-lg shadow-orange-600/30' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'" class="px-8 py-3 rounded-full text-[10px] font-black uppercase tracking-[0.2em] transition-all duration-300">Residencial</button>
                <button @click="filter = 'comercial'" :class="filter === 'comercial' ? 'bg-orange-600 text-white shadow-lg shadow-orange-600/30' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'" class="px-8 py-3 rounded-full text-[10px] font-black uppercase tracking-[0.2em] transition-all duration-300">Comercial</button>
                <button @click="filter = 'industrial'" :class="filter === 'industrial' ? 'bg-orange-600 text-white shadow-lg shadow-orange-600/30' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'" class="px-8 py-3 rounded-full text-[10px] font-black uppercase tracking-[0.2em] transition-all duration-300">Industrial</button>
            </div>

            <!-- Projects Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Project 1: Skyline -->
                <div x-show="filter === 'all' || filter === 'comercial'" 
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0 translate-y-8"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="group relative overflow-hidden rounded-3xl aspect-[4/5] shadow-2xl bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80" class="w-full h-full object-cover transition duration-1000 group-hover:scale-110 grayscale-[30%] group-hover:grayscale-0" alt="Skyline">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-900/20 to-transparent opacity-90 group-hover:via-orange-950/20 transition-all duration-500"></div>
                    <div class="absolute bottom-0 left-0 p-10 w-full transform translate-y-2 group-hover:translate-y-0 transition-transform duration-500">
                        <span class="text-orange-500 text-[10px] font-black uppercase tracking-[0.3em] mb-3 block">Comercial • 2023</span>
                        <h4 class="text-2xl font-bold text-white mb-6 leading-tight">Centro Empresarial Skyline</h4>
                        <div class="h-1 w-0 group-hover:w-20 bg-orange-500 transition-all duration-500 mb-6"></div>
                        <a href="{{ route ('web_project_detail') }}" class="inline-flex items-center text-white text-xs font-bold uppercase tracking-widest group/link">
                            Explorar Caso
                            <svg class="ml-2 w-4 h-4 transition-transform group-hover/link:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Project 2: Valle -->
                <div x-show="filter === 'all' || filter === 'residencial'" 
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0 translate-y-8"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="group relative overflow-hidden rounded-3xl aspect-[4/5] shadow-2xl bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&q=80" class="w-full h-full object-cover transition duration-1000 group-hover:scale-110 grayscale-[30%] group-hover:grayscale-0" alt="Torres">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-900/20 to-transparent opacity-90 group-hover:via-orange-950/20 transition-all duration-500"></div>
                    <div class="absolute bottom-0 left-0 p-10 w-full">
                        <span class="text-orange-500 text-[10px] font-black uppercase tracking-[0.3em] mb-3 block">Residencial • 2022</span>
                        <h4 class="text-2xl font-bold text-white mb-6 leading-tight">Torres del Valle Luxury</h4>
                        <div class="h-1 w-0 group-hover:w-20 bg-orange-500 transition-all duration-500 mb-6"></div>
                        <a href="{{ route ('web_project_detail') }}" class="inline-flex items-center text-white text-xs font-bold uppercase tracking-widest group/link">
                            Explorar Caso
                            <svg class="ml-2 w-4 h-4 transition-transform group-hover/link:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Project 3: Nexo -->
                <div x-show="filter === 'all' || filter === 'industrial'" 
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0 translate-y-8"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="group relative overflow-hidden rounded-3xl aspect-[4/5] shadow-2xl bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1590644365607-1c5a519a9a37?auto=format&fit=crop&q=80" class="w-full h-full object-cover transition duration-1000 group-hover:scale-110 grayscale-[30%] group-hover:grayscale-0" alt="Planta">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-900/20 to-transparent opacity-90 group-hover:via-orange-950/20 transition-all duration-500"></div>
                    <div class="absolute bottom-0 left-0 p-10 w-full">
                        <span class="text-orange-500 text-[10px] font-black uppercase tracking-[0.3em] mb-3 block">Industrial • 2023</span>
                        <h4 class="text-2xl font-bold text-white mb-6 leading-tight">Planta Logística Nexo</h4>
                        <div class="h-1 w-0 group-hover:w-20 bg-orange-500 transition-all duration-500 mb-6"></div>
                        <a href="{{ route ('web_project_detail') }}" class="inline-flex items-center text-white text-xs font-bold uppercase tracking-widest group/link">
                            Explorar Caso
                            <svg class="ml-2 w-4 h-4 transition-transform group-hover/link:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Repetir estructuras similares para más proyectos con x-show condicionado -->
                <div x-show="filter === 'all' || filter === 'residencial'" class="group relative overflow-hidden rounded-3xl aspect-[4/5] shadow-2xl bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&q=80" class="w-full h-full object-cover transition duration-1000 group-hover:scale-110 grayscale-[30%]" alt="Casa">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-900/20 to-transparent opacity-90 transition-all duration-500"></div>
                    <div class="absolute bottom-0 left-0 p-10 w-full">
                        <span class="text-orange-500 text-[10px] font-black uppercase tracking-[0.3em] mb-3 block">Residencial • 2021</span>
                        <h4 class="text-2xl font-bold text-white mb-6 leading-tight">Residencia La Jolla</h4>
                        <div class="h-1 w-0 group-hover:w-20 bg-orange-500 transition-all duration-500 mb-6"></div>
                        <a href="{{ route ('web_project_detail') }}" class="inline-flex items-center text-white text-xs font-bold uppercase tracking-widest group/link">Explorar Caso</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-gray-50 border-t border-gray-100">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-gray-900 mb-6 leading-tight">¿Tiene un desafío constructivo para nosotros?</h2>
            <p class="text-gray-600 mb-12 text-lg font-light">Convertimos planos complejos en realidades tangibles. Hablemos sobre los plazos y requerimientos de su próxima obra.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contacto" class="bg-orange-600 hover:bg-orange-700 text-white px-10 py-4 rounded-xl font-bold transition-all shadow-xl shadow-orange-600/20">Solicitar Presupuesto</a>
                <a href="https://wa.me/yournumber" class="bg-white border border-gray-200 text-gray-900 px-10 py-4 rounded-xl font-bold hover:bg-gray-50 transition-all">Consultar vía WhatsApp</a>
            </div>
        </div>
    </section>
@stop
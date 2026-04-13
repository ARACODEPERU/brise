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
                        En <strong class="text-gray-900">GRUPO BRISE SOLEIL S.A.C</strong> somos especialistas en la implementación de metodologías Lean Construction y BIM Management, integrándolas estratégicamente en cada etapa de nuestros proyectos para optimizar recursos, mejorar la planificación y garantizar resultados eficientes y de alta calidad
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
                    <img src="{{ asset('themes/webpage/images/servicio-01.jpg') }}" class="rounded-lg shadow-lg mt-8" alt="Diseño de planos">
                    <img src="{{ asset('themes/webpage/images/servicio-02.jpg') }}" class="rounded-lg shadow-lg" alt="Obra de construcción moderna">
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
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Card 1: Ingenieria -->
                <div class="group relative bg-white rounded-[2.5rem] p-4 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-4 overflow-hidden border border-gray-100">
                    <div class="relative h-64 rounded-[2rem] overflow-hidden mb-8">
                        <img src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?auto=format&fit=crop&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Ingeniería avanzada">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#001e46]/80 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 flex justify-between items-end">
                            <span class="text-white/50 font-black text-4xl italic">01</span>
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white border border-white/30">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-6">
                        <h3 class="text-2xl font-extrabold text-[#001e46] mb-3">Ingeniería</h3>
                        <p class="text-gray-500 line-clamp-2">Modelado BIM y gestión avanzada para proyectos de alta complejidad técnica y estructural.</p>
                    </div>
                </div>

                <!-- Card 2: Construccion -->
                <div class="group relative bg-white rounded-[2.5rem] p-4 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-4 overflow-hidden border border-gray-100">
                    <div class="relative h-64 rounded-[2rem] overflow-hidden mb-8">
                        <img src="https://images.unsplash.com/photo-1536895058696-a69b1c7ba34f?auto=format&fit=crop&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Construcción civil">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#001e46]/80 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 flex justify-between items-end">
                            <span class="text-white/50 font-black text-4xl italic">02</span>
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white border border-white/30">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-6">
                        <h3 class="text-2xl font-extrabold text-[#001e46] mb-3">Construcción Civil</h3>
                        <p class="text-gray-500 line-clamp-2">Ejecución impecable con metodología Lean Construction para garantizar eficiencia y plazos.</p>
                    </div>
                </div>

                <!-- Card 3: Reparación y Mantenimiento -->
                <div class="group relative bg-white rounded-[2.5rem] p-4 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-4 overflow-hidden border border-gray-100">
                    <div class="relative h-64 rounded-[2rem] overflow-hidden mb-8">
                        <img src="https://images.unsplash.com/photo-1581578731522-aa764da617d9?auto=format&fit=crop&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Servicios de reparación y mantenimiento">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#001e46]/80 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 flex justify-between items-end">
                            <span class="text-white/50 font-black text-4xl italic">03</span>
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white border border-white/30">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-6">
                        <h3 class="text-2xl font-extrabold text-[#001e46] mb-3">Reparación y Mantenimiento</h3>
                        <p class="text-gray-500 line-clamp-2">Servicios profesionales para mantener y mejorar sus instalaciones y estructuras.</p>
                    </div>
                </div>
                
                <!-- Card 4: Inmobiliaria -->
                <div class="group relative bg-white rounded-[2.5rem] p-4 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-4 overflow-hidden border border-gray-100">
                    <div class="relative h-64 rounded-[2rem] overflow-hidden mb-8">
                        <img src="https://images.unsplash.com/photo-1464938050520-ef2270bb8ce8?auto=format&fit=crop&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Inversión y proyectos inmobiliarios">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#001e46]/80 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 flex justify-between items-end">
                            <span class="text-white/50 font-black text-4xl italic">04</span>
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white border border-white/30">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-6">
                        <h3 class="text-2xl font-extrabold text-[#001e46] mb-3">Inmobiliaria</h3>
                        <p class="text-gray-500 line-clamp-2">Desarrollos urbanos sostenibles que elevan el estilo de vida y aseguran su inversión.</p>
                    </div>
                </div>

                <!-- Card 5: Saneamiento -->
                <div class="group relative bg-white rounded-[2.5rem] p-4 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-4 overflow-hidden border border-gray-100">
                    <div class="relative h-64 rounded-[2rem] overflow-hidden mb-8">
                        <img src="https://images.unsplash.com/photo-1503387762-592dea58cb21?auto=format&fit=crop&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Gestión de saneamiento físico legal de predios">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#001e46]/80 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 flex justify-between items-end">
                            <span class="text-white/50 font-black text-4xl italic">05</span>
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white border border-white/30">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-6">
                        <h3 class="text-2xl font-extrabold text-[#001e46] mb-3">Saneamiento Físico Legal</h3>
                        <p class="text-gray-500 line-clamp-2">Seguridad jurídica total para su patrimonio con expertos en derecho inmobiliario y registral.</p>
                    </div>
                </div>

                <!-- Card 6: Ferretería -->
                <div class="group relative bg-white rounded-[2.5rem] p-4 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-4 overflow-hidden border border-gray-100">
                    <div class="relative h-64 rounded-[2rem] overflow-hidden mb-8">
                        <img src="https://images.unsplash.com/photo-1530124566582-aa61277cee3e?auto=format&fit=crop&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Suministros y ferretería industrial online">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#001e46]/80 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 flex justify-between items-end">
                            <span class="text-white/50 font-black text-4xl italic">06</span>
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white border border-white/30">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-6">
                        <h3 class="text-2xl font-extrabold text-[#001e46] mb-3">Ferretería Online</h3>
                        <p class="text-gray-500 line-clamp-2">Suministros de alta calidad a un click de distancia, optimizando la logística de su obra.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- VERSION COMPARATIVA: Especialidades Ultra Moderna (Premium) -->
    {{-- <section class="py-24 bg-slate-50 relative overflow-hidden">
        <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-96 h-96 bg-orange-100 rounded-full blur-3xl opacity-50"></div>
        <div class="absolute bottom-0 left-0 translate-y-1/2 -translate-x-1/2 w-96 h-96 bg-blue-50 rounded-full blur-3xl opacity-50"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center mb-20">
                <h2 class="text-5xl font-black text-[#001e46] mb-6 tracking-tight">
                    Experiencia que <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#c85a00] to-orange-400">construye el futuro</span>
                </h2>
                <p class="text-gray-500 max-w-2xl mx-auto text-lg leading-relaxed">
                    Lideramos el mercado con soluciones que integran tecnología de vanguardia y procesos certificados para resultados extraordinarios.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="group relative bg-white rounded-[2.5rem] p-4 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-4 overflow-hidden border border-gray-100">
                    <div class="relative h-64 rounded-[2rem] overflow-hidden mb-8">
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Ingeniería avanzada">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#001e46]/80 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 flex justify-between items-end">
                            <span class="text-white/50 font-black text-4xl italic">01</span>
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white border border-white/30">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-6">
                        <h3 class="text-2xl font-extrabold text-[#001e46] mb-3">Ingeniería</h3>
                        <p class="text-gray-500 line-clamp-2">Modelado BIM y gestión avanzada para proyectos de alta complejidad técnica y estructural.</p>
                    </div>
                </div>

                <div class="group relative bg-white rounded-[2.5rem] p-4 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-4 overflow-hidden border border-gray-100">
                    <div class="relative h-64 rounded-[2rem] overflow-hidden mb-8">
                        <img src="https://images.unsplash.com/photo-1504307651254-35680f3366d4?auto=format&fit=crop&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Construcción civil">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#001e46]/80 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 flex justify-between items-end">
                            <span class="text-white/50 font-black text-4xl italic">02</span>
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white border border-white/30">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-6">
                        <h3 class="text-2xl font-extrabold text-[#001e46] mb-3">Construcción Civil</h3>
                        <p class="text-gray-500 line-clamp-2">Ejecución impecable con metodología Lean Construction para garantizar eficiencia y plazos.</p>
                    </div>
                </div>

                <div class="group relative bg-white rounded-[2.5rem] p-4 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-4 overflow-hidden border border-gray-100">
                    <div class="relative h-64 rounded-[2rem] overflow-hidden mb-8">
                        <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Proyectos inmobiliarios">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#001e46]/80 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 flex justify-between items-end">
                            <span class="text-white/50 font-black text-4xl italic">03</span>
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white border border-white/30">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-6">
                        <h3 class="text-2xl font-extrabold text-[#001e46] mb-3">Inmobiliaria</h3>
                        <p class="text-gray-500 line-clamp-2">Desarrollos urbanos sostenibles que elevan el estilo de vida y aseguran su inversión.</p>
                    </div>
                </div>

                <div class="group relative bg-white rounded-[2.5rem] p-4 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-4 overflow-hidden border border-gray-100 lg:col-start-1 lg:ml-[50%] lg:w-full">
                    <div class="relative h-64 rounded-[2rem] overflow-hidden mb-8">
                        <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Saneamiento legal">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#001e46]/80 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 flex justify-between items-end">
                            <span class="text-white/50 font-black text-4xl italic">04</span>
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white border border-white/30">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-6">
                        <h3 class="text-2xl font-extrabold text-[#001e46] mb-3">Saneamiento Físico Legal</h3>
                        <p class="text-gray-500 line-clamp-2">Seguridad jurídica total para su patrimonio con expertos en derecho inmobiliario y registral.</p>
                    </div>
                </div>

                <div class="group relative bg-white rounded-[2.5rem] p-4 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-4 overflow-hidden border border-gray-100 lg:col-start-2 lg:ml-[50%] lg:w-full">
                    <div class="relative h-64 rounded-[2rem] overflow-hidden mb-8">
                        <img src="https://images.unsplash.com/photo-1534398079543-7ae6d016b86a?auto=format&fit=crop&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Ferretería">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#001e46]/80 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 flex justify-between items-end">
                            <span class="text-white/50 font-black text-4xl italic">05</span>
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white border border-white/30">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-6">
                        <h3 class="text-2xl font-extrabold text-[#001e46] mb-3">Ferretería Online</h3>
                        <p class="text-gray-500 line-clamp-2">Suministros de alta calidad a un click de distancia, optimizando la logística de su obra.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Why Choose Us Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 text-center mb-16">
            <h2 class="text-[#c85a00] font-bold tracking-widest uppercase mb-4 text-sm">Compromiso y Calidad</h2>
            <h3 class="text-4xl font-bold text-[#001e46]">
                “Por qué elegir a Grupo Brise Soleil S.A.C. 
                <br>para su próximo proyecto”
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

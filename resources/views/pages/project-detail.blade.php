@extends('layouts.webpage')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[50vh] flex items-center bg-gray-900 text-white overflow-hidden pt-20">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80" class="w-full h-full object-cover opacity-40" alt="Centro Empresarial Skyline">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-transparent to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
            <nav class="flex mb-8 text-sm font-bold uppercase tracking-widest text-orange-500/80" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/proyectos" class="hover:text-white transition-colors">Proyectos</a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="ml-1 md:ml-2 text-white">Centro Empresarial Skyline</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight">Centro Empresarial <span class="text-orange-500">Skyline</span></h1>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-3 gap-16">
                
                <!-- Columna Izquierda: Galería y Descripción -->
                <div class="lg:col-span-2 space-y-12">
                    
                    <!-- Galería de Fotos con Alpine.js -->
                    <div x-data="{ mainImage: 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80' }">
                        <div class="relative aspect-video overflow-hidden rounded-3xl shadow-2xl mb-6 bg-gray-100 border border-gray-100">
                            <img :src="mainImage" class="w-full h-full object-cover transition-all duration-500" alt="Vista principal del proyecto">
                        </div>
                        <div class="grid grid-cols-4 gap-4">
                            @foreach([
                                'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80',
                                'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80',
                                'https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&q=80',
                                'https://images.unsplash.com/photo-1541888946425-d81bb19480c5?auto=format&fit=crop&q=80'
                            ] as $img)
                                <button @click="mainImage = '{{ $img }}'" class="relative aspect-square overflow-hidden rounded-xl border-2 transition-all" :class="mainImage === '{{ $img }}' ? 'border-orange-500' : 'border-transparent opacity-60 hover:opacity-100'">
                                    <img src="{{ $img }}" class="w-full h-full object-cover" alt="Miniatura">
                                </button>
                            @endforeach
                        </div>
                    </div>

                    <!-- Descripción del Proyecto -->
                    <div class="text-gray-600">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6 uppercase tracking-tight">Sobre la Obra</h2>
                        <div class="space-y-6 text-lg leading-relaxed text-justify">
                            <p>
                                El Centro Empresarial Skyline representa un hito en la arquitectura corporativa moderna. Ubicado en el corazón financiero de la ciudad, este complejo de oficinas de Clase A combina eficiencia energética con un diseño vanguardista que prioriza la luz natural y los espacios colaborativos.
                            </p>
                            <p>
                                Nuestra intervención abarcó desde la ingeniería estructural sismo-resistente hasta los acabados finales de alta gama. Se implementaron sistemas inteligentes de gestión de edificios (BMS) para optimizar el consumo eléctrico y de climatización, logrando una reducción del 30% en costos operativos.
                            </p>
                            <div class="bg-orange-50 border-l-4 border-orange-500 p-8 italic rounded-r-xl">
                                "Un desafío técnico que puso a prueba nuestra capacidad de gestión logística en entornos urbanos densos, entregado bajo estrictos parámetros de seguridad internacional."
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Columna Derecha: Ficha Técnica -->
                <div class="lg:col-span-1">
                    <div class="sticky top-32 space-y-8">
                        <div class="bg-gray-950 text-white p-10 rounded-3xl shadow-2xl overflow-hidden relative border border-white/5">
                            <div class="absolute -top-10 -right-10 w-32 h-32 bg-orange-600/20 rounded-full blur-3xl"></div>
                            
                            <h3 class="text-xl font-bold mb-8 uppercase tracking-[0.2em] text-orange-500 border-b border-white/10 pb-4">Ficha Técnica</h3>
                            
                            <div class="space-y-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 bg-white/5 rounded-lg flex items-center justify-center shrink-0">
                                        <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                    </div>
                                    <div>
                                        <p class="text-[10px] uppercase tracking-widest text-gray-500 font-bold">Cliente</p>
                                        <p class="font-bold">Inversiones Inmobiliarias S.A.</p>
                                    </div>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 bg-white/5 rounded-lg flex items-center justify-center shrink-0">
                                        <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                                    </div>
                                    <div>
                                        <p class="text-[10px] uppercase tracking-widest text-gray-500 font-bold">Ubicación</p>
                                        <p class="font-bold">San Isidro, Lima - Perú</p>
                                    </div>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 bg-white/5 rounded-lg flex items-center justify-center shrink-0">
                                        <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    </div>
                                    <div>
                                        <p class="text-[10px] uppercase tracking-widest text-gray-500 font-bold">Año de Entrega</p>
                                        <p class="font-bold">2023</p>
                                    </div>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 bg-white/5 rounded-lg flex items-center justify-center shrink-0">
                                        <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path></svg>
                                    </div>
                                    <div>
                                        <p class="text-[10px] uppercase tracking-widest text-gray-500 font-bold">Área Construida</p>
                                        <p class="font-bold">12,500 m²</p>
                                    </div>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 bg-white/5 rounded-lg flex items-center justify-center shrink-0">
                                        <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                    </div>
                                    <div>
                                        <p class="text-[10px] uppercase tracking-widest text-gray-500 font-bold">Categoría</p>
                                        <p class="font-bold">Edificación Corporativa</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-8 border-2 border-gray-100 rounded-3xl text-center bg-gray-50">
                            <h4 class="font-bold mb-4">¿Desea algo similar?</h4>
                            <p class="text-sm text-gray-500 mb-6 leading-relaxed">Contamos con la infraestructura y experiencia para materializar su visión corporativa.</p>
                            <a href="/contacto" class="inline-block w-full bg-orange-600 text-white py-4 rounded-xl font-bold uppercase tracking-widest text-[10px] hover:bg-orange-700 transition-all shadow-xl shadow-orange-600/20">Solicitar Asesoría</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@extends('layouts.webpage')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[50vh] flex items-center bg-gray-900 text-white overflow-hidden pt-20">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80" class="w-full h-full object-cover opacity-40" alt="Sede corporativa de BriseConst">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-transparent to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
            <nav class="flex mb-8 text-sm font-bold uppercase tracking-widest text-orange-500/80" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/" class="hover:text-white transition-colors">Inicio</a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="ml-1 md:ml-2 text-white">Contacto</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight">Ponerse en <span class="text-orange-500">Contacto</span></h1>
        </div>
    </section>

    <section class="py-24 bg-white" x-data="{ 
        name: '', 
        email: '', 
        phone: '', 
        subject: '',
        message: '', 
        attempted: false 
    }">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-3 gap-16">
                
                <!-- Columna Izquierda: Información de Contacto -->
                <div class="lg:col-span-1 space-y-12">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-6 uppercase tracking-tight">Hablemos de su proyecto</h2>
                        <p class="text-gray-600 leading-relaxed text-lg">Estamos listos para asesorarlo en su próxima obra. Contáctenos a través de cualquiera de nuestros canales oficiales.</p>
                    </div>

                    <div class="space-y-8">
                        <div class="flex items-start gap-6 group">
                            <div class="w-12 h-12 bg-orange-100 rounded-2xl flex items-center justify-center shrink-0 text-orange-600 group-hover:bg-orange-600 group-hover:text-white transition-all duration-300 shadow-sm">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 uppercase tracking-widest text-xs mb-1">Ubicación</h4>
                                <p class="text-gray-600">Av. Principal 123, San Isidro<br>Lima, Perú</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-6 group">
                            <div class="w-12 h-12 bg-orange-100 rounded-2xl flex items-center justify-center shrink-0 text-orange-600 group-hover:bg-orange-600 group-hover:text-white transition-all duration-300 shadow-sm">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 uppercase tracking-widest text-xs mb-1">Correo Electrónico</h4>
                                <p class="text-gray-600">contacto@briseconst.com<br>proyectos@briseconst.com</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-6 group">
                            <div class="w-12 h-12 bg-orange-100 rounded-2xl flex items-center justify-center shrink-0 text-orange-600 group-hover:bg-orange-600 group-hover:text-white transition-all duration-300 shadow-sm">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 uppercase tracking-widest text-xs mb-1">Teléfonos</h4>
                                <p class="text-gray-600">+51 987 654 321<br>(01) 445-6789</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Columna Derecha: Formulario -->
                <div class="lg:col-span-2">
                    <div class="bg-gray-50 p-8 sm:p-12 rounded-3xl border border-gray-100 shadow-xl shadow-gray-200/50">
                        <form action="#" method="POST" class="space-y-6" @submit="attempted = true; if(!$el.checkValidity()) $event.preventDefault()">
                            @csrf
                            <div class="grid sm:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2 ml-1">Nombre Completo</label>
                                    <input type="text" name="name" x-model="name" required
                                        :class="attempted && !name ? 'border-red-500 ring-2 ring-red-500/20' : 'border-gray-200'"
                                        class="w-full bg-white rounded-xl px-4 py-4 text-sm focus:ring-2 focus:ring-orange-500 outline-none transition-all border shadow-sm" placeholder="Ej. Juan Pérez">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2 ml-1">Correo Electrónico</label>
                                    <input type="email" name="email" x-model="email" required
                                        :class="attempted && !email ? 'border-red-500 ring-2 ring-red-500/20' : 'border-gray-200'"
                                        class="w-full bg-white rounded-xl px-4 py-4 text-sm focus:ring-2 focus:ring-orange-500 outline-none transition-all border shadow-sm" placeholder="juan@ejemplo.com">
                                </div>
                            </div>
                            <div class="grid sm:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2 ml-1">Teléfono</label>
                                    <input type="tel" name="phone" x-model="phone" required
                                        :class="attempted && !phone ? 'border-red-500 ring-2 ring-red-500/20' : 'border-gray-200'"
                                        class="w-full bg-white rounded-xl px-4 py-4 text-sm focus:ring-2 focus:ring-orange-500 outline-none transition-all border shadow-sm" placeholder="987 654 321">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2 ml-1">Asunto</label>
                                    <input type="text" name="subject" x-model="subject" required
                                        :class="attempted && !subject ? 'border-red-500 ring-2 ring-red-500/20' : 'border-gray-200'"
                                        class="w-full bg-white rounded-xl px-4 py-4 text-sm focus:ring-2 focus:ring-orange-500 outline-none transition-all border shadow-sm" placeholder="Ej. Presupuesto Obra Civil">
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2 ml-1">Mensaje Detallado</label>
                                <textarea name="message" x-model="message" rows="5" required
                                    :class="attempted && !message ? 'border-red-500 ring-2 ring-red-500/20' : 'border-gray-200'"
                                    class="w-full bg-white rounded-xl px-4 py-4 text-sm focus:ring-2 focus:ring-orange-500 outline-none transition-all border shadow-sm" placeholder="Cuéntenos sobre su requerimiento o consulta técnica..."></textarea>
                            </div>
                            
                            <div class="flex justify-end">
                                <button type="submit" class="w-full sm:w-auto bg-orange-600 hover:bg-orange-700 text-white font-bold px-12 py-4 rounded-xl shadow-lg shadow-orange-600/20 transition-all transform active:scale-95 uppercase text-xs tracking-widest">
                                    Enviar Mensaje
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

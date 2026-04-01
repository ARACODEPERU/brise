@extends('layouts.webpage')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[50vh] flex items-center bg-gray-900 text-white overflow-hidden pt-20">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&q=80" class="w-full h-full object-cover opacity-40" alt="Libro de Reclamaciones">
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
                            <span class="ml-1 md:ml-2 text-white">Libro de Reclamaciones</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight">Libro de <span class="text-orange-500">Reclamaciones</span></h1>
        </div>
    </section>

    <section class="py-24 bg-white" x-data="{ attempted: false }">
        <div class="max-w-5xl mx-auto px-6">
            <div class="mb-12 border-b border-gray-100 pb-12">
                <p class="text-gray-600 leading-relaxed text-lg italic">
                    Conforme a lo establecido en el Código de Protección y Defensa del Consumidor, nuestra institución cuenta con un Libro de Reclamaciones a su disposición.
                </p>
            </div>

            <form action="{{ route('complaints_book_store') }}" method="POST" class="space-y-12" @submit="attempted = true; if(!$el.checkValidity()) $event.preventDefault()">
                @csrf
                
                <!-- Sección 1: Identificación del Consumidor -->
                <div class="bg-gray-50 p-8 rounded-3xl border border-gray-100 shadow-sm">
                    <div class="flex items-center gap-4 mb-8">
                        <span class="w-10 h-10 bg-orange-600 text-white rounded-xl flex items-center justify-center font-bold">1</span>
                        <h2 class="text-2xl font-bold text-gray-900 uppercase tracking-tight">Identificación del Consumidor</h2>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="md:col-span-2">
                            <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2 ml-1">Nombre Completo *</label>
                            <input type="text" name="names" required :class="attempted ? 'invalid:border-red-500 invalid:ring-2 invalid:ring-red-500/20' : ''" 
                                class="w-full bg-white rounded-xl px-4 py-4 text-sm focus:ring-2 focus:ring-orange-500 outline-none transition-all border border-gray-200" placeholder="Como figura en su DNI">
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2 ml-1">Tipo de Documento *</label>
                            <select name="tipoIdentificacion" required class="w-full bg-white rounded-xl px-4 py-4 text-sm focus:ring-2 focus:ring-orange-500 outline-none transition-all border border-gray-200">
                                @foreach($tipoDocumentos as $doc)
                                    <option value="{{ $doc->id }}">{{ $doc->description }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2 ml-1">Número de Documento *</label>
                            <input type="text" name="dni" required :class="attempted ? 'invalid:border-red-500 invalid:ring-2 invalid:ring-red-500/20' : ''"
                                class="w-full bg-white rounded-xl px-4 py-4 text-sm focus:ring-2 focus:ring-orange-500 outline-none transition-all border border-gray-200">
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2 ml-1">Correo Electrónico *</label>
                            <input type="email" name="email" required :class="attempted ? 'invalid:border-red-500 invalid:ring-2 invalid:ring-red-500/20' : ''"
                                class="w-full bg-white rounded-xl px-4 py-4 text-sm focus:ring-2 focus:ring-orange-500 outline-none transition-all border border-gray-200" placeholder="ejemplo@correo.com">
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2 ml-1">Teléfono / Celular *</label>
                            <input type="tel" name="telefono" required :class="attempted ? 'invalid:border-red-500 invalid:ring-2 invalid:ring-red-500/20' : ''"
                                class="w-full bg-white rounded-xl px-4 py-4 text-sm focus:ring-2 focus:ring-orange-500 outline-none transition-all border border-gray-200">
                        </div>
                    </div>
                </div>

                <!-- Sección 2: Identificación del Bien Contratado -->
                <div class="bg-gray-50 p-8 rounded-3xl border border-gray-100 shadow-sm">
                    <div class="flex items-center gap-4 mb-8">
                        <span class="w-10 h-10 bg-orange-600 text-white rounded-xl flex items-center justify-center font-bold">2</span>
                        <h2 class="text-2xl font-bold text-gray-900 uppercase tracking-tight">Identificación del Bien Contratado</h2>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="md:col-span-2">
                            <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2 ml-1">Tipo de Bien *</label>
                            <div class="flex gap-6 mt-4 ml-1">
                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="radio" name="tipoBien" value="Producto" checked class="form-radio text-orange-600 focus:ring-orange-500 h-5 w-5 border-gray-300">
                                    <span class="ml-2 text-sm font-bold text-gray-700 uppercase tracking-widest">Producto</span>
                                </label>
                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="radio" name="tipoBien" value="Servicio" class="form-radio text-orange-600 focus:ring-orange-500 h-5 w-5 border-gray-300">
                                    <span class="ml-2 text-sm font-bold text-gray-700 uppercase tracking-widest">Servicio</span>
                                </label>
                            </div>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2 ml-1">Monto Reclamado (Opcional)</label>
                            <div class="flex gap-4">
                                <select name="moneda" class="w-32 bg-white rounded-xl px-4 py-4 text-sm focus:ring-2 focus:ring-orange-500 outline-none transition-all border border-gray-200">
                                    @foreach($monedas as $moneda)
                                        <option value="{{ $moneda->id }}">{{ $moneda->symbol }}</option>
                                    @endforeach
                                </select>
                                <input type="number" step="0.01" name="monto" class="flex-1 bg-white rounded-xl px-4 py-4 text-sm focus:ring-2 focus:ring-orange-500 outline-none transition-all border border-gray-200" placeholder="0.00">
                            </div>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2 ml-1">Descripción del Bien *</label>
                            <textarea name="descripcion_bien" required rows="3" :class="attempted ? 'invalid:border-red-500 invalid:ring-2 invalid:ring-red-500/20' : ''"
                                class="w-full bg-white rounded-xl px-4 py-4 text-sm focus:ring-2 focus:ring-orange-500 outline-none transition-all border border-gray-200" placeholder="Detalle el producto o servicio adquirido..."></textarea>
                        </div>
                    </div>
                </div>

                <!-- Sección 3: Detalle de la Reclamación -->
                <div class="bg-gray-50 p-8 rounded-3xl border border-gray-100 shadow-sm">
                    <div class="flex items-center gap-4 mb-8">
                        <span class="w-10 h-10 bg-orange-600 text-white rounded-xl flex items-center justify-center font-bold">3</span>
                        <h2 class="text-2xl font-bold text-gray-900 uppercase tracking-tight">Detalle de la Reclamación</h2>
                    </div>
                    
                    <div class="grid gap-6">
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2 ml-1">Tipo de Reclamo *</label>
                            <div class="flex flex-wrap gap-8 mt-4 ml-1">
                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="radio" name="tipoReclamo" value="Reclamo" checked class="form-radio text-orange-600 focus:ring-orange-500 h-5 w-5 border-gray-300">
                                    <div class="ml-2">
                                        <span class="block text-sm font-bold text-gray-700 uppercase tracking-widest leading-none">Reclamo</span>
                                        <small class="text-[10px] text-gray-400 block mt-1 leading-tight">Disconformidad relacionada a los productos o servicios.</small>
                                    </div>
                                </label>
                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="radio" name="tipoReclamo" value="Queja" class="form-radio text-orange-600 focus:ring-orange-500 h-5 w-5 border-gray-300">
                                    <div class="ml-2">
                                        <span class="block text-sm font-bold text-gray-700 uppercase tracking-widest leading-none">Queja</span>
                                        <small class="text-[10px] text-gray-400 block mt-1 leading-tight">Disconformidad no relacionada a los productos o servicios; malestar o descontento respecto a la atención al público.</small>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2 ml-1">Detalle del Reclamo o Queja *</label>
                            <textarea name="reclamo" required rows="5" :class="attempted ? 'invalid:border-red-500 invalid:ring-2 invalid:ring-red-500/20' : ''"
                                class="w-full bg-white rounded-xl px-4 py-4 text-sm focus:ring-2 focus:ring-orange-500 outline-none transition-all border border-gray-200" placeholder="Describa los hechos de la manera más detallada posible..."></textarea>
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2 ml-1">Pedido del Consumidor *</label>
                            <textarea name="pedido" required rows="3" :class="attempted ? 'invalid:border-red-500 invalid:ring-2 invalid:ring-red-500/20' : ''"
                                class="w-full bg-white rounded-xl px-4 py-4 text-sm focus:ring-2 focus:ring-orange-500 outline-none transition-all border border-gray-200" placeholder="¿Qué acción espera por nuestra parte?"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Políticas y Envío -->
                <div class="space-y-8">
                    <div class="p-6 bg-orange-50 rounded-2xl border border-orange-100">
                        <label class="flex items-start gap-4 cursor-pointer group">
                            <input type="checkbox" name="acepto" required class="mt-1 form-checkbox text-orange-600 rounded border-gray-300 focus:ring-orange-500 h-5 w-5">
                            <span class="text-sm text-gray-700 leading-relaxed">
                                Declaro que soy el titular del servicio y que los datos consignados en el presente formulario son verdaderos y fiel reflejo de la realidad. Asimismo, acepto el tratamiento de mis datos personales según nuestra 
                                <a href="{{ route('web_privacy') }}" class="text-orange-600 font-bold hover:underline" target="_blank">Política de Privacidad</a>.
                            </span>
                        </label>
                    </div>

                    <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                        <div class="text-gray-400 text-xs max-w-md">
                            * La formulación del reclamo no impide acudir a otras vías de solución de controversias ni es requisito previo para interponer una denuncia ante el INDECOPI.
                        </div>
                        <button type="submit" class="w-full md:w-auto bg-gray-900 hover:bg-black text-white font-bold px-12 py-5 rounded-2xl shadow-xl transition-all transform active:scale-95 uppercase text-sm tracking-[0.2em]">
                            Registrar Reclamación
                        </button>
                    </div>
                </div>
            </form>

            <!-- Información Adicional -->
            <div class="mt-24 grid md:grid-cols-2 gap-12 border-t border-gray-100 pt-16">
                <div class="flex gap-6">
                    <div class="w-12 h-12 bg-gray-100 rounded-2xl flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 uppercase tracking-widest text-xs mb-2">Plazo de Respuesta</h4>
                        <p class="text-sm text-gray-500 leading-relaxed">
                            Contamos con un plazo máximo de 15 días hábiles para dar respuesta a su reclamo o queja, el cual podrá ser extendido por un periodo igual cuando la complejidad del asunto lo amerite.
                        </p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="w-12 h-12 bg-gray-100 rounded-2xl flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 uppercase tracking-widest text-xs mb-2">Confirmación</h4>
                        <p class="text-sm text-gray-500 leading-relaxed">
                            Una vez enviado el formulario, recibirá una copia de su hoja de reclamación en el correo electrónico proporcionado con su número de registro correspondiente.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
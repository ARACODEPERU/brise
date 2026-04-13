@extends('layouts.webpage')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[50vh] flex items-center bg-gray-900 text-white overflow-hidden pt-20">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&q=80" class="w-full h-full object-cover opacity-40" alt="Políticas de Privacidad">
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
                            <span class="ml-1 md:ml-2 text-white">Privacidad</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight">Política de <span class="text-orange-500">Privacidad</span></h1>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-24 bg-white">
        <div class="max-w-4xl mx-auto px-6">
            <div class="prose prose-orange max-w-none text-gray-600 leading-relaxed">
                <p class="text-lg mb-8">
                    En <strong>GRUPO BRISE SOLEIL S.A.C</strong>, valoramos su privacidad y nos comprometemos a proteger sus datos personales. Esta política describe cómo recopilamos, utilizamos y protegemos su información cuando visita nuestro sitio web.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-12 mb-4 uppercase tracking-tight">1. Información que recopilamos</h2>
                <p>
                    Recopilamos información que usted nos proporciona directamente a través de nuestros formularios de contacto y solicitud de presupuesto, incluyendo:
                </p>
                <ul class="list-disc pl-6 mb-6 space-y-2">
                    <li>Nombre completo</li>
                    <li>Dirección de correo electrónico</li>
                    <li>Número de teléfono</li>
                    <li>Información sobre su proyecto o requerimiento técnico</li>
                </ul>

                <h2 class="text-2xl font-bold text-gray-900 mt-12 mb-4 uppercase tracking-tight">2. Uso de la información</h2>
                <p>
                    La información recopilada se utiliza exclusivamente para:
                </p>
                <ul class="list-disc pl-6 mb-6 space-y-2">
                    <li>Responder a sus consultas y solicitudes de asesoría.</li>
                    <li>Elaborar y enviar presupuestos personalizados.</li>
                    <li>Mejorar nuestros servicios y la experiencia de usuario en el sitio web.</li>
                    <li>Cumplir con obligaciones legales y normativas vigentes en el sector construcción.</li>
                </ul>

                <h2 class="text-2xl font-bold text-gray-900 mt-12 mb-4 uppercase tracking-tight">3. Protección de datos</h2>
                <p>
                    Implementamos medidas de seguridad técnicas y organizativas para garantizar la integridad y confidencialidad de sus datos. No compartimos, vendemos ni alquilamos su información personal a terceros con fines comerciales.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-12 mb-4 uppercase tracking-tight">4. Sus derechos (ARCO)</h2>
                <p>
                    De acuerdo con la Ley de Protección de Datos Personales, usted tiene derecho a Acceder, Rectificar, Cancelar u Oponerse al tratamiento de sus datos. Para ejercer estos derechos, puede enviarnos una comunicación a 
                    <a href="mailto:gerencia_comercial@grupobrisesoleil.com" class="text-orange-600 font-bold hover:underline">
                        gerencia_comercial@grupobrisesoleil.com
                    </a>.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-12 mb-4 uppercase tracking-tight">5. Cambios en esta política</h2>
                <p>
                    Nos reservamos el derecho de actualizar esta Política de Privacidad en cualquier momento. Los cambios se publicarán en esta página con la fecha de actualización correspondiente.
                </p>

                <div class="mt-16 p-8 bg-gray-50 rounded-2xl border border-gray-100 italic text-sm">
                    Última actualización: {{ date('d/m/Y') }}
                </div>
            </div>

            <!-- Botón de acción final -->
            <div class="mt-16 text-center border-t border-gray-100 pt-16">
                <p class="text-gray-500 mb-6 font-medium">¿Tiene alguna duda sobre el manejo de sus datos?</p>
                <button @click="$store.quoteModal.open()" class="inline-flex items-center justify-center px-8 py-4 bg-gray-900 text-white font-bold rounded-xl hover:bg-orange-600 transition-all duration-300 shadow-xl active:scale-95 uppercase text-xs tracking-widest">
                    Consultar con un asesor
                </button>
            </div>
        </div>
    </section>
@stop
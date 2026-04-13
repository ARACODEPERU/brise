@extends('layouts.webpage')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[50vh] flex items-center bg-gray-900 text-white overflow-hidden pt-20">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&q=80" class="w-full h-full object-cover opacity-40" alt="Términos y Condiciones">
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
                            <span class="ml-1 md:ml-2 text-white">Términos</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight">Términos y <span class="text-orange-500">Condiciones</span></h1>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-24 bg-white">
        <div class="max-w-4xl mx-auto px-6">
            <div class="prose prose-orange max-w-none text-gray-600 leading-relaxed">
                <p class="text-lg mb-8">
                    Bienvenido al sitio web de <strong>GRUPO BRISE SOLEIL S.A.C</strong>. Al acceder y utilizar este sitio, usted acepta cumplir y estar sujeto a los siguientes términos y condiciones de uso.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-12 mb-4 uppercase tracking-tight">1. Aceptación de Términos</h2>
                <p>
                    El acceso a este sitio web es gratuito y atribuye la condición de usuario a quien lo realiza. El uso de los servicios prestados a través de este portal implica la aceptación plena de todas las disposiciones incluidas en este aviso legal.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-12 mb-4 uppercase tracking-tight">2. Propiedad Intelectual</h2>
                <p>
                    Todos los contenidos de este sitio web, incluyendo textos, gráficos, logotipos, iconos, imágenes y software, 
                    son propiedad de GRUPO BRISE SOLEIL S.A.C o de sus proveedores de contenido y están protegidos por las leyes de propiedad intelectual internacionales.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-12 mb-4 uppercase tracking-tight">3. Uso del Sitio</h2>
                <p>
                    El usuario se compromete a utilizar el sitio web y sus servicios de conformidad con 
                    la ley, la moral y el orden público. Queda prohibido el uso del sitio con fines 
                    ilícitos o lesivos contra GRUPO BRISE SOLEIL S.A.C o cualquier tercero.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-12 mb-4 uppercase tracking-tight">4. Limitación de Responsabilidad</h2>
                <p>
                    GRUPO BRISE SOLEIL S.A.C no se hace responsable de los daños y perjuicios de cualquier naturaleza que pudieran derivarse de la falta de disponibilidad, mantenimiento y efectivo funcionamiento del sitio web o de sus servicios.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-12 mb-4 uppercase tracking-tight">5. Servicios y Presupuestos</h2>
                <p>
                    La información sobre proyectos y servicios mostrada en el portafolio tiene carácter referencial. Los presupuestos solicitados a través de los formularios están sujetos a evaluación técnica y validación presencial según sea el caso.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mt-12 mb-4 uppercase tracking-tight">6. Jurisdicción</h2>
                <p>
                    Para la resolución de todas las controversias o cuestiones relacionadas con el presente sitio web o de las actividades en él desarrolladas, será de aplicación la legislación peruana, a la que se someten expresamente las partes.
                </p>

                <div class="mt-16 p-8 bg-gray-50 rounded-2xl border border-gray-100 italic text-sm">
                    Última actualización: {{ date('d/m/Y') }}
                </div>
            </div>

            <!-- Botón de acción final -->
            <div class="mt-16 text-center border-t border-gray-100 pt-16">
                <p class="text-gray-500 mb-6 font-medium">¿Tiene alguna duda sobre nuestras condiciones de servicio?</p>
                <button @click="$store.quoteModal.open()" class="inline-flex items-center justify-center px-8 py-4 bg-gray-900 text-white font-bold rounded-xl hover:bg-orange-600 transition-all duration-300 shadow-xl active:scale-95 uppercase text-xs tracking-widest">
                    Consultar con un asesor
                </button>
            </div>
        </div>
    </section>
@stop
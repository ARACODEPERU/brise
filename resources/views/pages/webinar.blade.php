@extends('layouts.webpage')

@section('content')

    <section class="w-full pt-20 bg-gray-100">
        <div class="w-full">
            <img src="{{ asset('themes/webpage/images/webinar.jpg') }}" class="w-full h-auto block object-contain"
                alt="Arquitectura moderna elegante">
        </div>
    </section>

    <!-- About Section -->
    <section id="nosotros" class="pt-16 pb-10 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-2/2">
                    <h2 class="text-[#c85a00] font-bold tracking-widest uppercase mb-4 text-sm">WEBINAR GRATUITO</h2>
                    <h3 class="text-4xl font-bold text-[#001e46] mb-6 leading-tight">
                        Cómo implementar IPERC en el contexto de la Norma ISO 45001 y Ley 29783
                    </h3>
                    <h4 class="text-2xl font-bold text-[#001e46] mb-6 leading-tight">
                        Gestión preventiva para una cultura de seguridad más sólida
                    </h4>
                    <p class="text-gray-600 text-lg mb-8">
                        La identificación de peligros, evaluación de riesgos y determinación de controles —IPERC— constituye 
                        una herramienta fundamental para fortalecer la prevención de accidentes y proteger la seguridad y salud 
                        de los trabajadores.
                    </p>
                    <p class="text-gray-600 text-lg mb-8">
                        En este webinar abordaremos la implementación del IPERC desde una perspectiva práctica, 
                        considerando su relación con los principales lineamientos de la Norma ISO 45001 y las disposiciones 
                        establecidas en la Ley N.° 29783, Ley de Seguridad y Salud en el Trabajo.
                    </p>
                    <p class="text-gray-600 text-lg mb-8">
                        Una jornada de actualización orientada a profesionales y especialistas que buscan fortalecer 
                        sus conocimientos y mejorar la gestión preventiva dentro de sus organizaciones.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="nosotros" class="pt-10 pb-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2">
                    <div class="relative">
                        <img src="{{ asset('themes/webpage/images/about-team-02.jpg') }}"
                            class="rounded-2xl shadow-2xl relative z-10"
                            alt="Arquitectura residencial moderna y acabados de lujo">
                        <div class="absolute -bottom-6 -right-6 w-64 h-64 bg-orange-500 rounded-2xl -z-0 hidden md:block">
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <h2 class="text-[#c85a00] font-bold tracking-widest uppercase mb-4 text-sm">CONOCE A NUESTRO EXPOSITOR</h2>
                    <h3 class="text-4xl font-bold text-[#001e46] mb-6 leading-tight">
                        Julio Joel Flores Mendo
                    </h3>
                    <h4 class="text-2xl font-bold text-[#001e46] mb-6 leading-tight">
                        Maestría en Dirección de la Construcción — UPC
                        <br>
                        Senior Project Manager de Grupo Brise Soleil S.A.C.
                    </h4>
                    <p class="text-gray-600 text-lg mb-8">
                        Arquitecto con 10 años de experiencia profesional. Egresado de la Maestría en Dirección de la 
                        Construcción por la Universidad de Ciencias Aplicadas (UPC), programa acreditado por The American Council 
                        for Construction Education (ACCE) (EE. UU). Certificado en Lean Construction y BIM Management por la Escuela 
                        de Postgrado de la Universidad de Ciencias Aplicadas, UPC.
                    </p>

                </div>
            </div>
        </div>
    </section>

@stop

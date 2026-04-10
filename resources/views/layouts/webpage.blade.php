<!DOCTYPE html>
<html lang="es">

<head>
    <title>Constructora Profesional | @yield('title', 'Inicio')</title>
    <link rel="icon" href="{{ asset('themes/webpage/images/icon.png') }}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Empresa de construcción líder en proyectos civiles y arquitectónicos." name="description">

    <!-- Fonts & Tailwind (Modern Look) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        [x-cloak] {
            display: none !important;
        }
        /* Estilo crítico para que el loader cubra todo antes de que cargue Tailwind */
        #preloader {
            position: fixed;
            inset: 0;
            z-index: 9999;
        }

        @keyframes logoZoom {
            0% { opacity: 0; transform: scale(0.5); }
            100% { opacity: 1; transform: scale(1); }
        }

        @keyframes logoPulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.4; }
        }

        .animate-zoom-in {
            animation: logoZoom 0.9s cubic-bezier(0.16, 1, 0.3, 1) forwards,
                       logoPulse 1s ease-in-out 0.5s infinite;
        }
    </style>

    <style>
        @font-face {
            font-family: 'TT Norms Pro';
            src: url('/fonts/TTNormsPro-Regular.woff2') format('woff2'),
                url('/fonts/TTNormsPro-Regular.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: 'TT Norms Pro', sans-serif;
        }
    </style>

</head>

<body class="bg-white text-gray-900 antialiased" 
      x-data="{ isLoading: true }" 
      @load.window="setTimeout(() => isLoading = false, 3000)">

    <!-- Preloader -->
    {{-- <div id="preloader" 
         x-show="isLoading" 
         x-transition:leave="transition ease-in duration-500" 
         x-transition:leave-start="opacity-100" 
         x-transition:leave-end="opacity-0"
         class="bg-[#fff] flex flex-col items-center justify-center">
        <img src="{{ asset('themes/webpage/images/logo-about.png') }}" alt="Brise" class="h-40 md:h-32 animate-zoom-in">
    </div> --}}

    @include('partials.nav')

    <main>
        @yield('content')
    </main>

    @include('partials.modal-quote')

    @include('partials.footer')
</body>

</html>

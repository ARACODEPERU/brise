<!DOCTYPE html>
<html lang="es">

<head>
    <title>Constructora Profesional | @yield('title', 'Inicio')</title>
    <link rel="icon" href="{{ asset('themes/webpage/images/icon.png') }}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="Empresa de construcción líder en proyectos civiles y arquitectónicos." name="description" >
    
    <!-- Fonts & Tailwind (Modern Look) -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        body { font-family: 'Open Sans', sans-serif; }
        h1, h2, h3 { font-family: 'Montserrat', sans-serif; }
        [x-cloak] { display: none !important; }
        html { scroll-behavior: smooth; }
    </style>
</head>

<body class="bg-white text-gray-900 antialiased">
    @include('partials.nav')
    
    <main>
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
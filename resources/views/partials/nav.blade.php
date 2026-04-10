{{-- <header x-data="{ open: false, atTop: true }" 
        @scroll.window="atTop = (window.pageYOffset > 50 ? false : true)"
        :class="{ 'bg-white/95 backdrop-blur-md shadow-sm border-b border-gray-100': !atTop, 'bg-transparent': atTop }"
        class="fixed top-0 z-50 w-full transition-all duration-300"> --}}
<header x-data="{ open: false, atTop: true }" 
        @scroll.window="atTop = (window.pageYOffset > 50 ? false : true)"
        :class="{ 'bg-white/95 backdrop-blur-md shadow-sm border-b border-gray-100': !atTop, 'bg-white/95': atTop }"
        class="fixed top-0 z-50 w-full transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="flex items-center gap-2">
                    <span :class="{ 'text-gray-900': !atTop, 'text-white': atTop }" class="text-2xl font-black tracking-tighter uppercase transition-colors">
                        <img src="{{ asset('themes/webpage/images/logo.png') }}" alt="BriseConst" class="h-10">
                    </span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <nav class="hidden md:flex space-x-8">
                {{-- @php $links = ['Inicio' => '/', 'Nosotros' => '/nosotros', 'Servicios' => '/servicios', 'Proyectos' => '/proyectos']; @endphp --}}
                @php $links = ['Inicio' => '/', 'Nosotros' => '/nosotros', 'Servicios' => '/servicios', 'Contacto' => '/contacto']; @endphp
                @foreach($links as $name => $url)
                    <a href="{{ $url }}" 
                       :class="{ 'text-gray-600 hover:text-orange-600': !atTop, 'text-gray-600 hover:text-gray-900': atTop }"
                       class="text-xs font-bold uppercase tracking-widest transition-colors duration-200">
                        {{ $name }}
                    </a>
                @endforeach
            </nav>

            <!-- Desktop CTA -->
            <div class="hidden md:block">
                <button @click="$store.quoteModal.open()" class="bg-[#c85a00] hover:bg-[#000] text-white px-6 py-2.5 rounded-lg text-xs font-bold uppercase tracking-widest transition-all shadow-lg hover:shadow-orange-500/20">
                    Cotizar Proyecto
                </button>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button @click="open = !open" type="button" :class="{ 'text-gray-900': !atTop, 'text-gray-900': atTop }" class="inline-flex items-center justify-center p-2 rounded-md focus:outline-none transition-colors">
                    <svg x-show="!open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" x-cloak class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div x-show="open" 
         x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="md:hidden bg-white border-b border-gray-100 shadow-xl">
        <div class="px-4 pt-2 pb-6 space-y-1">
            @foreach($links as $name => $url)
                <a href="{{ $url }}" @click="open = false" class="block px-3 py-4 text-sm font-bold text-gray-700 border-b border-gray-50 uppercase tracking-wider hover:text-orange-600">{{ $name }}</a>
            @endforeach
            <button @click="open = false; $store.quoteModal.open()" class="block w-full mt-4 text-center bg-gray-900 text-white px-6 py-4 rounded-lg font-bold uppercase tracking-widest text-xs text-left">Solicitar Presupuesto</button>
        </div>
    </div>
</header>

<div x-data x-show="$store.quoteModal.show" 
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
     class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-gray-950/80 backdrop-blur-sm"
     x-cloak>
    
    <div @click.away="$store.quoteModal.close()" 
         class="relative w-full max-w-lg bg-white dark:bg-gray-900 rounded-3xl shadow-2xl overflow-hidden border border-gray-100 dark:border-gray-800">
        
        <!-- Header del Modal -->
        <div class="bg-gray-50 dark:bg-[#001e46] p-6 border-b border-gray-100 dark:border-[#001e46] flex justify-between items-center">
            <div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Solicitar Presupuesto</h3>
                <p class="text-xs text-orange-500 font-bold uppercase tracking-widest mt-1">GRUPO BRISE SOLEIL S.A.C.</p>
            </div>
            <button @click="$store.quoteModal.close()" class="text-gray-400 hover:text-orange-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <!-- Formulario -->
        <form action="#" method="POST" class="p-8 space-y-5" 
              x-data="{ name: '', email: '', phone: '', message: '', attempted: false }" 
              @submit="attempted = true; if(!$el.checkValidity()) $event.preventDefault()"
              x-init="$watch('$store.quoteModal.show', value => { if(!value) { attempted = false; name = ''; email = ''; phone = ''; message = ''; } })">
            @csrf
            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2">Nombre Completo</label>
                <input type="text" name="name" x-model="name" required 
                    :class="attempted && !name ? 'border-red-500 ring-2 ring-red-500/20' : 'border-gray-200 dark:border-gray-700'"
                    class="w-full bg-gray-50 dark:bg-[#001e46] rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-orange-500 outline-none transition-all" placeholder="Ej. Juan Pérez">
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2">Correo Electrónico</label>
                    <input type="email" name="email" x-model="email" required 
                        :class="attempted && !email ? 'border-red-500 ring-2 ring-red-500/20' : 'border-gray-200 dark:border-gray-700'"
                        class="w-full bg-gray-50 dark:bg-[#001e46] rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-orange-500 outline-none transition-all" placeholder="juan@ejemplo.com">
                </div>
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2">Teléfono</label>
                    <input type="tel" name="phone" x-model="phone" required 
                        :class="attempted && !phone ? 'border-red-500 ring-2 ring-red-500/20' : 'border-gray-200 dark:border-gray-700'"
                        class="w-full bg-gray-50 dark:bg-[#001e46] rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-orange-500 outline-none transition-all" placeholder="987 654 321">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2">Tipo de Proyecto</label>
                <select name="type" class="w-full text-gray-50 bg-gray-50 dark:bg-[#001e46] border-gray-200 dark:border-gray-700 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-orange-500 outline-none transition-all">
                    <option>Residencial</option>
                    <option>Comercial</option>
                    <option>Industrial</option>
                    <option>Otros</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-gray-500 mb-2">Mensaje o Detalles</label>
                <textarea name="message" x-model="message" rows="3" required
                    :class="attempted && !message ? 'border-red-500 ring-2 ring-red-500/20' : 'border-gray-200 dark:border-gray-700'"
                    class="w-full bg-gray-50 dark:bg-[#001e46] rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-orange-500 outline-none transition-all" placeholder="Cuéntanos brevemente sobre tu obra..."></textarea>
            </div>

            <button type="submit" class="w-full bg-orange-600 hover:bg-orange-700 text-white font-bold py-4 rounded-xl shadow-lg shadow-orange-600/20 transition-all transform active:scale-95">
                Enviar Solicitud
            </button>
        </form>
    </div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('quoteModal', {
            show: false,
            open() { 
                this.show = true;
                document.body.style.overflow = 'hidden';
            },
            close() { 
                this.show = false;
                document.body.style.overflow = 'auto';
            }
        })
    })
</script>
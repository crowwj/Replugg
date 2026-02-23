<script src="https://cdn.tailwindcss.com"></script>
<div class="min-h-screen bg-white font-sans antialiased text-gray-800 relative">
    
    <div class="absolute top-0 left-0 w-full h-[400px] bg-gradient-to-b from-[#f5f3ff] to-white -z-0"></div>

    <div class="relative z-10">
        <nav class="bg-white px-8 py-3 flex justify-between items-center shadow-sm border-b border-gray-100">
            <div class="flex-shrink-0">
                <span class="text-2xl font-black text-[#5b21b6] tracking-tighter">RE-PLUG<span class="text-[#a78bfa]">.</span></span>
            </div>
            
            <div class="flex-grow max-w-md mx-8 hidden md:block">
                <div class="relative">
                    <input type="text" placeholder="¿Qué tecnología buscas hoy?" class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-200 bg-gray-50/50 focus:outline-none focus:ring-1 focus:ring-[#a78bfa] focus:bg-white text-xs transition-all">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="flex items-center space-x-6">
                <button class="flex items-center text-gray-600 hover:text-[#5b21b6] transition">
                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#5b21b6]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                        <span class="absolute -top-1 -right-1 bg-[#a78bfa] text-white text-[9px] font-bold rounded-full h-4 w-4 flex items-center justify-center">0</span>
                    </div>
                    <span class="ml-2 text-xs font-semibold">Carrito</span>
                </button>
                <button class="bg-[#5b21b6] text-white px-6 py-2 rounded-lg font-bold text-sm hover:bg-[#4c1d95] transition shadow-md">
                    panel de pepito
                </button>
            </div>
        </nav>

        <main class="max-w-7xl mx-auto px-6 py-8 pb-[60vh]">
            <div class="flex items-center space-x-4 mb-6">
                <h1 class="text-4xl font-black text-[#5b21b6] uppercase tracking-tight">Panel de Información</h1>
                <a href="#" class="text-[#a78bfa] hover:text-[#5b21b6] flex items-center text-base font-bold transition">
                    <span class="mr-1 text-xl">←</span> Volver
                </a>
            </div>

            <div class="flex flex-col md:flex-row gap-6 items-start">
                
                <aside class="w-full md:w-1/4 sticky top-6">
                    <div class="bg-white rounded-xl shadow-sm p-5 border border-gray-100">
                        <p class="text-[9px] font-bold text-[#a78bfa] uppercase tracking-widest mb-4 px-1">EXPLORA EL PANEL</p>
                        <nav id="side-nav" class="space-y-1">
                            <a href="#faq" class="nav-link block bg-[#5b21b6] text-white px-4 py-2.5 rounded-lg font-bold text-sm transition-all duration-300">
                                Preguntas frecuentes
                            </a>
                            <a href="#ticket" class="nav-link block text-gray-500 hover:bg-gray-50 px-4 py-2.5 rounded-lg font-semibold text-sm transition-all duration-300">
                                Ticket
                            </a>
                            <a href="#terms" class="nav-link block text-gray-500 hover:bg-gray-50 px-4 py-2.5 rounded-lg font-semibold text-sm transition-all duration-300">
                                Terminos y condiciones
                            </a>
                        </nav>
                    </div>
                </aside>

                <section class="w-full md:w-3/4 space-y-4">
                    <div id="faq" class="content-section bg-white rounded-xl shadow-sm p-10 border border-gray-100">
                        <h2 class="text-3xl font-black text-[#5b21b6] uppercase mb-8">Preguntas Frecuentes</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-10 text-sm">
                            <div class="space-y-6">
                                <div>
                                    <h3 class="font-bold text-[#5b21b6] text-base mb-3">Envíos y Logística</h3>
                                    <ul class="space-y-3">
                                        <li><a href="#" class="text-[#a78bfa] italic hover:text-[#5b21b6] flex items-center">¿Puedo rastrear mi paquete? <span class="ml-1">→</span></a></li>
                                        <li><a href="#" class="text-[#a78bfa] italic hover:text-[#5b21b6] flex items-center">¿Hacen envíos internacionales o solo nacionales? <span class="ml-1">→</span></a></li>
                                        <li><a href="#" class="text-[#a78bfa] italic hover:text-[#5b21b6] flex items-center text-balance">¿Qué pasa si no estoy en casa cuando llegue el repartidor? <span class="ml-1">→</span></a></li>
                                    </ul>
                                </div>
                                <div>
                                    <h3 class="font-bold text-[#5b21b6] text-base mb-3">Pagos y Facturación</h3>
                                    <ul class="space-y-3">
                                        <li><a href="#" class="text-[#a78bfa] italic hover:text-[#5b21b6] flex items-center">¿Qué métodos de pago aceptan? <span class="ml-1">→</span></a></li>
                                        <li><a href="#" class="text-[#a78bfa] italic hover:text-[#5b21b6] flex items-center">¿Es seguro comprar en este sitio? <span class="ml-1">→</span></a></li>
                                        <li><a href="#" class="text-[#a78bfa] italic hover:text-[#5b21b6] flex items-center">¿Puedo solicitar una factura fiscal de mi compra? <span class="ml-1">→</span></a></li>
                                    </ul>
                                </div>
                                <div>
                                    <h3 class="font-bold text-[#5b21b6] text-base mb-3">Privacidad y Cuenta</h3>
                                    <ul class="space-y-3">
                                        <li><a href="#" class="text-[#a78bfa] italic hover:text-[#5b21b6] flex items-center">¿Cómo protegen mis datos personales? <span class="ml-1">→</span></a></li>
                                        <li><a href="#" class="text-[#a78bfa] italic hover:text-[#5b21b6] flex items-center">¿Qué hacen con mi información de contacto? <span class="ml-1">→</span></a></li>
                                        <li><a href="#" class="text-[#a78bfa] italic hover:text-[#5b21b6] flex items-center">Olvidé mi contraseña, ¿cómo la recupero? <span class="ml-1">→</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="space-y-6">
                                <div>
                                    <h3 class="font-bold text-[#5b21b6] text-base mb-3">Cambios y Devoluciones</h3>
                                    <ul class="space-y-3">
                                        <li><a href="#" class="text-[#a78bfa] italic hover:text-[#5b21b6] flex items-center">¿Puedo devolver un producto si no me gusta? <span class="ml-1">→</span></a></li>
                                        <li><a href="#" class="text-[#a78bfa] italic hover:text-[#5b21b6] flex items-center">¿Cuánto tiempo tarda el reembolso? <span class="ml-1">→</span></a></li>
                                    </ul>
                                </div>
                                <div>
                                    <h3 class="font-bold text-[#5b21b6] text-base mb-3">Sobre el Producto</h3>
                                    <ul class="space-y-3">
                                        <li><a href="#" class="text-[#a78bfa] italic hover:text-[#5b21b6] flex items-center">¿Los productos tienen garantía? <span class="ml-1">→</span></a></li>
                                        <li><a href="#" class="text-[#a78bfa] italic hover:text-[#5b21b6] flex items-center">¿Qué pasa si llega defectuoso? <span class="ml-1">→</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="ticket" class="content-section bg-white rounded-xl shadow-sm p-10 border border-gray-100">
                        <h2 class="text-3xl font-black text-[#5b21b6] uppercase mb-2">Ticket</h2>
                        <p class="text-[#a78bfa] text-xs italic mb-4">Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! Tienes un problema específico? ¡hazlo saber! </p>
                        <button class="text-[#5b21b6] font-bold text-sm border-b-2 border-[#5b21b6] hover:text-black hover:border-black transition">Crear ticket.</button>
                    </div>

                    <div id="terms" class="content-section bg-white rounded-xl shadow-sm p-10 border border-gray-100">
                        <h2 class="text-3xl font-black text-[#5b21b6] uppercase mb-4">Terminos y Condiciones</h2>
                        <a href="#" class="text-[#a78bfa] font-bold italic text-sm flex items-center hover:text-[#5b21b6]">
                            ver terminos y condiciones <span class="ml-1">→</span>
                        </a>
                    </div>
                </section>
            </div>
        </main>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const sections = document.querySelectorAll('.content-section');
        const navLinks = document.querySelectorAll('.nav-link');

        window.addEventListener('scroll', () => {
            let current = "";

            // FIX: Si estamos arriba de todo, forzar 'faq'
            if (window.pageYOffset < 100) {
                current = "faq";
            } else {
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    // Detectamos si la sección está cerca del tope de la pantalla
                    if (window.pageYOffset >= sectionTop - 160) {
                        current = section.getAttribute('id');
                    }
                });
            }

            navLinks.forEach(link => {
                // Quitamos estilos de activo
                link.classList.remove('bg-[#5b21b6]', 'text-white', 'shadow-md');
                link.classList.add('text-gray-500', 'hover:bg-gray-50');

                // Aplicamos estilos solo al link que coincida con la sección actual
                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('bg-[#5b21b6]', 'text-white', 'shadow-md');
                    link.classList.remove('text-gray-500', 'hover:bg-gray-50');
                }
            });
        });
    });
</script>
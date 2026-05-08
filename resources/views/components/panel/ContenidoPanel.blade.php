<main class="col-span-1 lg:col-span-4 p-8 lg:p-12">
            <header class="flex justify-between items-center mb-10">
                <div class="flex flex-col">
                    <h1 class="text-3xl font-black text-violet-700 tracking-tighter italic uppercase">RE-PLUG</h1>
                </div>
                <div class="flex gap-3">
                    <a href="/" class="px-5 py-2 text-sm font-bold text-violet-700 bg-violet-50 rounded-xl border border-violet-100 flex items-center gap-2 hover:bg-violet-100 transition-all font-bold">Inicio</a>
                    @auth 
                    <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="px-5 py-2 text-sm font-bold text-red-500 bg-red-50 rounded-xl border border-red-100 flex items-center gap-2 hover:bg-red-100 transition-all font-bold">Cerrar sesión</button>
                    </form>
                    @endauth
                    
                </div>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <div class="lg:col-span-2 bg-white border border-violet-100 rounded-3xl p-8 shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-2 bg-violet-100 rounded-lg text-violet-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-violet-800">Datos de la Cuenta</h3>
                    </div>

                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-2">
                            <form action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            <label class="text-sm font-semibold text-gray-500 ml-1">Nombre de usuario</label>
                            <input type="text" name="name"  id="CambiarNombre" value="{{ Auth::user()->name }}" readonly placeholder="Tu nombre" class="w-full px-4 py-2 rounded-xl border border-violet-100 bg-violet-50/30 focus:outline-none focus:ring-2 focus:ring-violet-500 transition-all cursor-default">
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold text-gray-500 ml-1">Correo Electrónico</label>
                            <input type="email" name="email" id="CambiarCorreo" value="{{ Auth::user()->email }}" readonly placeholder="tu@correo.com" class="w-full px-4 py-2 rounded-xl border border-violet-100 bg-violet-50/30 focus:outline-none focus:ring-2 focus:ring-violet-500 transition-all cursor-default">
                        </div>
                        <div class="flex flex-col gap-2 md:col-span-2">
                            <label class="text-sm font-semibold text-gray-500 ml-1">Número telefónico</label>
                            <input  type="text" name="tel" id="CambiarTel" value="{{ Auth::user()->tel }}" readonly  placeholder="" class="w-full px-4 py-2 rounded-xl border border-violet-100 bg-violet-50/30 focus:outline-none focus:ring-2 focus:ring-violet-500 transition-all cursor-default">
                        </div>
                    </div>

                    <div class="flex gap-3 mt-8">
                        <button  type="submit" class="px-6 py-2.5 bg-violet-700 text-white font-bold rounded-xl hover:bg-violet-600 active:scale-95 transition-all shadow-lg shadow-violet-200">Guardar cambios</button>
                        </form>
                        <button onclick="habilitarEdicion()" class="px-6 py-2.5 bg-white text-violet-700 border border-violet-200 font-bold rounded-xl hover:bg-violet-50 transition-all">Modificar</button>
                    </div>
                </div>
               
                @include('components.panel.password.password')
                @include('components.panel.direcciones.direcciones')
                @include('components.panel.card.card')
               
              

            </div>
        </main>
        <script src="{{ asset('js/perfil.js') }}"></script>
        <script src="{{ asset('js/password.js') }}"></script>
<div class="bg-violet-700 rounded-3xl p-8 text-white shadow-xl shadow-violet-200 flex flex-col justify-between">
    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <div class="bg-violet-600 w-12 h-12 rounded-2xl flex items-center justify-center mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </div>
            <h3 class="text-xl font-bold mb-2">Seguridad</h3>
            <p class="text-violet-200 text-sm mb-6">Cambia tu contraseña para mantener tu cuenta segura.</p>

            <input type="password" name="current_password" id="current_password" readonly 
                placeholder="Contraseña actual" 
                class="w-full px-4 py-2 rounded-xl bg-violet-600 border-none placeholder-violet-300 focus:ring-white text-white mb-2 opacity-70 cursor-not-allowed transition-all">
            
            <input type="password" name="password" id="new_password" readonly 
                placeholder="Nueva contraseña" 
                class="w-full px-4 py-2 rounded-xl bg-violet-600 border-none placeholder-violet-300 focus:ring-white text-white opacity-70 cursor-not-allowed transition-all">
            
            <input type="password" name="password_confirmation" id="password_confirmation" readonly
                placeholder="Confirmar nueva contraseña"
                class="hidden w-full px-4 py-2 rounded-xl bg-violet-600 border-none placeholder-violet-300 focus:ring-white text-white mt-2 opacity-70 cursor-not-allowed transition-all">

            <button type="button" id="btn-modificar" 
                class="w-full mt-6 py-3 bg-white text-violet-700 font-bold rounded-xl hover:bg-violet-200 transition-colors">Modificar Clave</button>
            
            <button type="submit" id="btn-actualizar" 
                class="hidden w-full mt-6 py-3 bg-white text-violet-700 font-bold rounded-xl hover:bg-violet-200 transition-colors">Actualizar Clave</button>
        </div>
    </form>
</div>
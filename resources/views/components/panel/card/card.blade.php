<div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:col-span-2 lg:col-span-3 mt-4">
    <button class="flex items-center justify-between p-6 bg-gradient-to-r from-violet-600 to-indigo-600 rounded-3xl text-white shadow-lg hover:shadow-indigo-200 transition-all active:scale-95 group">
        <div class="text-left">
        <span class="block text-xs uppercase tracking-wider opacity-70 mb-1 font-bold">Mercado</span>
        <span class="text-xl font-black"> Vender Producto</span>
        </div>
        <a href="{{ route('seller.check') }}">
        <div class="bg-white/20 p-3 rounded-2xl group-hover:bg-white/30 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
        </div>
        </a>
    </button>
    <button class="flex items-center justify-between p-6 bg-white border border-violet-100 rounded-3xl text-violet-800 shadow-sm hover:shadow-md transition-all active:scale-95 group">
     
    <div class="text-left">
            <span class="block text-xs uppercase tracking-wider text-violet-400 mb-1 font-bold">Mis Compras</span>
            <span class="text-xl font-black">Historial</span>
        </div>
     
     <a href="{{ route('pedidos.historial') }}">   
        <div class="bg-violet-50 p-3 rounded-2xl group-hover:bg-violet-100 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" /></svg>
        </div>
    </a>   
    </button>

    <button class="flex items-center justify-between p-6 bg-white border border-violet-100 rounded-3xl text-gray-700 shadow-sm hover:shadow-md transition-all active:scale-95 group">
        <div class="text-left">
            <span class="block text-xs uppercase tracking-wider text-gray-400 mb-1 font-bold">Ajustes</span>
            <span class="text-xl font-black">Configuración</span>
        </div>
        <div class="bg-gray-50 p-3 rounded-2xl group-hover:bg-gray-100 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37a1.724 1.724 0 002.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
        </div>
    </button>
</div>
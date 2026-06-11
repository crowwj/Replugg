<div class="md:col-span-2 lg:col-span-3 bg-white border border-violet-100 rounded-3xl p-8 shadow-sm flex items-center justify-between">
    <div class="flex items-center gap-6">
        <div class="hidden sm:flex w-16 h-16 bg-orange-50 text-orange-500 rounded-2xl items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
        </div>
        <div>
            <h3 class="text-xl font-bold text-gray-800">Direcciones</h3>
            <p class="text-gray-500 text-sm italic">
                Tienes {{ \App\Models\Direccion::where('id_usuario', auth()->id())->count() }} direcciones guardadas.
            </p>
        </div>
    </div>
    
    <div class="flex gap-2">
        <a href="{{ route('direcciones.index') }}" class="bg-gray-100 text-gray-800 px-6 py-3 rounded-2xl font-bold hover:bg-gray-200 transition-all">Ver todas</a>
        
        <a href="{{ route('direcciones.create') }}" class="bg-gray-900 text-white px-6 py-3 rounded-2xl font-bold hover:bg-black transition-all">
            <span>+</span> Agregar
        </a>
    </div>
</div>

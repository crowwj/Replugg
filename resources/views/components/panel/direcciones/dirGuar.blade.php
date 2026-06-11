@vite('resources/css/app.css')

<div class="max-w-3xl mx-auto py-8 px-4">
    <div class="flex items-center justify-between mb-8">
        <h2 class="text-2xl font-bold text-gray-800">Mis Direcciones</h2>
        <a href="{{ route('panel.index') }}" 
           class="text-sm font-semibold text-gray-500 hover:text-violet-600 transition-colors flex items-center">
            ← Regresar al panel
        </a>
    </div>

    <div class="space-y-4">
        @forelse($direcciones as $dir)
            <div class="bg-white p-6 rounded-2xl border {{ $dir->es_predeterminada ? 'border-violet-500 ring-1 ring-violet-200' : 'border-gray-100' }} shadow-sm transition-all duration-200 flex items-center justify-between">
                
                <div class="flex items-center gap-4">
                    <div class="p-3 bg-orange-50 rounded-full text-orange-500">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                    </div>
                    <div>
                        <p class="text-base font-bold text-gray-900">Calle: {{ $dir->Calle }} #{{ $dir->NumExt }}</p>
                        <p class="text-sm text-gray-500">Código Postal: {{ $dir->idCP }}</p>
                    </div>
                </div>

                @if(!$dir->es_predeterminada)
                    <form action="{{ route('direcciones.seleccionar', $dir->idDireccion) }}" method="POST">
                        @csrf
                        <button type="submit" class="text-violet-600 font-semibold text-sm hover:underline">
                            Seleccionar
                        </button>
                    </form>
                @else
                    <span class="text-xs font-bold text-violet-600 bg-violet-50 px-3 py-1 rounded-full">
                        Predeterminada
                    </span>
                @endif
            </div>
        @empty
            <div class="text-center py-10">
                <p class="text-gray-400">No tienes direcciones registradas.</p>
            </div>
        @endforelse
    </div>
</div>
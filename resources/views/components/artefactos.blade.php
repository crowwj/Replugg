<div class="mt-8 px-4">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Lo mas nuevo en Re-plug</h2>
    
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4"> 
        @foreach($productos as $producto)
        <div class="bg-white rounded-lg shadow-sm border border-gray-100 hover:shadow-lg transition-shadow duration-300 cursor-pointer group flex flex-col">
            <!-- Imagen -->
            <div class="aspect-square w-full p-4 flex items-center justify-center border-b border-gray-50">
                <img src="{{ asset('img/productos/' . $producto->imagen) }}" alt="{{ $producto->nombre }}"  loading="lazy" class="max-w-full max-h-full object-contain group-hover:scale-105 transition-transform rounded-lg">          
        
        </div>
            <!-- Nombre -->
            <div class="p-4 flex-grow">
                <h3 class="text-lg text-gray-600 line-clamp-2 mb-1 leading-tight h-10">
                    {{ $producto->nombre }}
                </h3>
            <!-- Producto-->    
                <div class="mt-2">
                    <span class="text-2xl font-normal text-gray-900">
                        $ {{ number_format($producto->precio, 0) }}
                    </span>
                </div>
            <!-- Texto variado -->
                <div class="mt-1">
                    <span class="text-xs font-bold text-violet-700">Envío gratis</span>
                    <span class="text-xs text-violet-700 block">Comprar</span>
                </div>
            </div>
        </div>
        @endforeach
        <div class="mt-10 mb-6 flex justify-center">
         {{ $productos->links() }}
        </div>
    </div>
</div>
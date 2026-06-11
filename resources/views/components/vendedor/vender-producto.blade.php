<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Publicar Producto - Re-plug</title>
</head>
<body class="bg-gray-50 min-h-screen text-gray-800 font-sans">

    <div class="max-w-4xl mx-auto px-4 py-10 h-auto">
        
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-black text-violet-800 tracking-wide">RE-PLUG</h1>
                <p class="text-sm text-gray-500 mt-1">Sube un nuevo producto electrónico al mercado</p>
            </div>
            <a href="/" class="px-5 py-2.5 bg-white border border-gray-200 text-gray-600 rounded-2xl shadow-sm hover:bg-gray-50 transition font-medium text-sm flex items-center gap-2">
                ← Volver al Panel
            </a>
        </div>

        @if(session('status'))
            <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-2xl text-sm font-medium">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{route('producto.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-3xl shadow-xl p-6 md:p-10 border border-violet-100 block w-full h-auto">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full mb-6">
                
                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-violet-900 mb-2">Nombre del Producto</label>
                    <input type="text" name="nombre" placeholder="Ej. MacBook Air M1 2020 - 8GB RAM - 256GB SSD" 
                        class="w-full px-4 py-3 bg-gray-50/50 border border-gray-200 rounded-2xl focus:outline-none focus:border-violet-500 focus:ring-2 focus:ring-violet-200 transition-all">
                </div>

                <div>
                    <label class="block text-sm font-bold text-violet-900 mb-2">Categoría</label>

                    <select name="categoria_id" class="w-full px-4 py-3 bg-gray-50/50 border border-gray-200 rounded-2xl focus:outline-none focus:border-violet-500 focus:ring-2 focus:ring-violet-200 transition-all">
                        <option value="">Selecciona una opción</option>
                        <option value="1">Celulares / Smartphones</option>
                        <option value="2">Laptops / Computadoras</option>
                        <option value="3">Consolas / Videojuegos</option>
                        <option value="4">Audio / Audífonos</option>
                    </select>

                </div>

                <div>
                    <label class="block text-sm font-bold text-violet-900 mb-2">Condición / Estado</label>

                    <select name="condicion" class="w-full px-4 py-3 bg-gray-50/50 border border-gray-200 rounded-2xl focus:outline-none focus:border-violet-500 focus:ring-2 focus:ring-violet-200 transition-all">
                        <option value="excelente">Excelente (Sin marcas de uso)</option>
                        <option value="bueno">Buen estado (Marcas leves)</option>
                        <option value="desgastado">Detalles estéticos (Funcional 100%)</option>
                    </select>

                </div>

                <div>
                    <label class="block text-sm font-bold text-violet-900 mb-2">Precio de Venta ($ MXN)</label>
                    <div class="relative">
                        <span class="absolute left-4 top-3 text-gray-400">$</span>
                        <input type="number" name="precio" maxlength="15"  max="999999" step="0.01" placeholder="0.00" 
                            class="w-full pl-8 pr-4 py-3 bg-gray-50/50 border border-gray-200 rounded-2xl focus:outline-none focus:border-violet-500 focus:ring-2 focus:ring-violet-200 transition-all">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-violet-900 mb-2">Cantidad disponible (Stock)</label>
                    <input type="number" name="stock" max="999"  placeholder="1" min="1"
                        class="w-full px-4 py-3 bg-gray-50/50 border border-gray-200 rounded-2xl focus:outline-none focus:border-violet-500 focus:ring-2 focus:ring-violet-200 transition-all">
                </div>

            </div> <div class="w-full mb-6">
                <label class="block text-sm font-bold text-violet-900 mb-2">Descripción del Producto</label>
                <textarea name="descripcion" maxlength="255"  rows="4" placeholder="Describe el estado de la batería, accesorios incluidos, marcas de uso o cualquier detalle técnico..." 
                    class="w-full px-4 py-3 bg-gray-50/50 border border-gray-200 rounded-2xl focus:outline-none focus:border-violet-500 focus:ring-2 focus:ring-violet-200 transition-all resize-none"></textarea>
            </div>

            <div class="w-full mb-6">
                <label class="block text-sm font-bold text-violet-900 mb-2">Imágenes del Producto</label>
                <div class="border-2 border-dashed border-gray-200 rounded-2xl p-6 bg-gray-50/30 text-center hover:border-violet-400 transition cursor-pointer relative">
                    <input type="file" name="imagenes" multiple class="absolute inset-0 opacity-0 cursor-pointer">
                    <svg class="mx-auto h-12 w-12 text-violet-400 mb-2" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                        <path d="M28 8H12a4 4 0 00-4 4v20a4 4 0 004 4h24a4 4 0 004-4V20m-12-4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M24 14v16m-8-8h16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-sm text-gray-600 font-medium">Haz clic para subir o arrastra tus imágenes aquí</p>
                    <p class="text-xs text-gray-400 mt-1">Formatos recomendados: JPG, PNG (Max. 5MB por foto)</p>
                </div>
            </div>

            <div class="mt-8 pt-6 border-t border-gray-100 flex items-center justify-end gap-4 w-full">
                <button type="button" class="px-6 py-3.5 text-sm font-bold text-gray-500 hover:text-gray-700 transition">
                    Cancelar
                </button>
                <button type="submit" class="px-8 py-3.5 bg-gradient-to-r from-violet-600 to-indigo-600 hover:from-violet-700 hover:to-indigo-700 text-white font-bold rounded-2xl shadow-lg shadow-violet-200 hover:shadow-xl transition-all active:scale-[0.98]">
                    Publicar Producto
                </button>
            </div>



            @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


        </form> 
    
    </div>

</body>
</html>
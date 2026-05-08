<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Re-plug</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <div class="bg-white shadow-sm border-b border-violet-100 py-6 px-10 flex justify-between items-center">
        <h2 class="text-3xl font-extrabold text-violet-800 tracking-tighter">
            RE-PLUG<span class="text-violet-400">.</span> <span class="text-gray-400 text-xl font-medium ml-2">Panel de Control</span>
        </h2>
        <a href="/" class="text-sm font-bold text-violet-600 hover:text-violet-800 transition-colors">
            ← Volver a la tienda
        </a>
    </div>

    <div class="py-12 px-10">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-violet-50">
                    <p class="text-gray-500 font-semibold uppercase text-xs tracking-wider mb-2">Total Productos</p>
                    <p class="text-4xl font-black text-gray-900">{{ $totalProductos }}</p>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-violet-50">
                    <p class="text-gray-500 font-semibold uppercase text-xs tracking-wider mb-2">Usuarios</p>
                    <p class="text-4xl font-black text-gray-900">{{ $totalUsuarios }}</p>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-violet-50">
                    <p class="text-gray-500 font-semibold uppercase text-xs tracking-wider mb-2">Publicacion pendientes</p>
                    <p class="text-4xl font-black text-gray-900">48833</p>
                </div>
            </div>

            <div class="bg-violet-800 rounded-[2rem] p-10 text-white shadow-xl shadow-violet-200 rounded-lg">
                <h3 class="text-2xl font-bold mb-6">p</h3>
                <div class="flex gap-4">
                    <button class="bg-white text-violet-900 px-8 py-3 rounded-2xl font-bold hover:bg-violet-50 transition-all active:scale-95">
                        Administrar Usuarios
                    </button>
                    <button class="bg-violet-700 text-white px-8 py-3 rounded-2xl font-bold hover:bg-violet-600 transition-all border border-violet-500">
                        Ver Reportes
                    </button>

                    <button class="bg-white text-violet-900 px-8 py-3 rounded-2xl font-bold hover:bg-violet-50 transition-all active:scale-95">
                        Publicaciones pendientes
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
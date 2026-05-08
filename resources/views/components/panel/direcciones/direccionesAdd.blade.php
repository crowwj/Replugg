<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> 
    <link rel="shortcut icon" href="/img/logo/logoo.png"/>
     @vite('resources/css/app.css')
    <title>Direcciones | Re-plug</title>
</head>
<body class="bg-gradient-to-b from-violet-100 via-white to-violet-50 min-h-screen bg-fixed bg-no-repeat">
    <div class="max-w-4xl mx-auto p-6 mt-10">
        
        <div class="mb-6">
            <a href="/dashboard" class="inline-flex items-center text-violet-600 font-semibold hover:text-violet-800 transition-colors group">
                <div class="bg-white p-2 rounded-lg shadow-sm border border-violet-100 mr-3 group-hover:shadow-md transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                </div>
                Regresar al Panel
            </a>
        </div>

        <div class="mb-10">
            <h2 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-violet-800 to-indigo-600 mb-2">
                Agregar Nueva Dirección
            </h2>
            <p class="text-gray-600 text-lg">Registra dónde quieres recibir tus productos de <span class="text-violet-600 font-bold">Re-plug</span>.</p>
        </div>

        <form action="#" method="POST" class="bg-white p-8 md:p-10 rounded-[2.5rem] shadow-2xl shadow-violet-200/50 border border-violet-50">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Etiqueta de dirección</label>
                    <input type="text" placeholder="Ej. Mi Casa u Oficina" 
                        class="w-full px-5 py-4 rounded-2xl bg-violet-50/50 border border-violet-100 focus:ring-4 focus:ring-violet-500/10 focus:border-violet-500 outline-none transition-all placeholder-gray-400">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Código Postal</label>
                    <input type="number" id="cp_input" placeholder="00000" 
                        class="w-full px-5 py-4 rounded-2xl bg-violet-50/50 border border-violet-100 focus:ring-4 focus:ring-violet-500/10 focus:border-violet-500 outline-none transition-all placeholder-gray-400">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Estado</label>
                    <input type="text" readonly placeholder="Estado" 
                        class="w-full px-5 py-4 rounded-2xl bg-gray-100 border border-transparent text-gray-500 cursor-not-allowed font-medium">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Municipio / Alcaldía</label>
                    <input type="text" readonly placeholder="Municipio" 
                        class="w-full px-5 py-4 rounded-2xl bg-gray-100 border border-transparent text-gray-500 cursor-not-allowed font-medium">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Colonia / Asentamiento</label>
                    <div class="relative">
                        <select class="w-full px-5 py-4 rounded-2xl bg-violet-50/50 border border-violet-100 focus:ring-4 focus:ring-violet-500/10 focus:border-violet-500 outline-none transition-all appearance-none">
                            <option value="">Selecciona tu colonia</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-violet-500">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Calle</label>
                    <input type="text" placeholder="Nombre de la calle o avenida" 
                        class="w-full px-5 py-4 rounded-2xl bg-violet-50/50 border border-violet-100 focus:ring-4 focus:ring-violet-500/10 focus:border-violet-500 outline-none transition-all placeholder-gray-400">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Núm. Exterior</label>
                    <input type="text" placeholder="Ext." 
                        class="w-full px-5 py-4 rounded-2xl bg-violet-50/50 border border-violet-100 focus:ring-4 focus:ring-violet-500/10 focus:border-violet-500 outline-none transition-all placeholder-gray-400">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Núm. Interior (Opcional)</label>
                    <input type="text" placeholder="Apto / Depto" 
                        class="w-full px-5 py-4 rounded-2xl bg-violet-50/50 border border-violet-100 focus:ring-4 focus:ring-violet-500/10 focus:border-violet-500 outline-none transition-all placeholder-gray-400">
                </div>

            </div>

            <div class="flex flex-col md:flex-row gap-4 mt-12">
                <button type="submit" 
                    class="flex-[2] bg-gradient-to-r from-violet-600 to-indigo-600 hover:from-violet-700 hover:to-indigo-700 text-white font-extrabold py-4 rounded-2xl transition-all shadow-xl shadow-violet-200 active:scale-[0.98]">
                    Guardar Dirección
                </button>
                <button type="button" 
                    class="flex-1 bg-white border-2 border-gray-100 hover:bg-gray-50 text-gray-500 font-bold py-4 rounded-2xl transition-all">
                    Cancelar
                </button>
            </div>
        </form>
    </div>
</body>
</html>
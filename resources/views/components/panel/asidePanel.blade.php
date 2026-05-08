<aside class="col-span-1 bg-white border-r border-violet-100 p-8 flex flex-col items-center shadow-sm">
            <div class="flex items-center gap-2 mb-10 w-full">
                <div class="w-2 h-8 bg-violet-700 rounded-full"></div>
                <h2 class="font-extrabold text-xl tracking-tighter text-violet-800 uppercase">Panel</h2>
            </div>
            <div class="flex flex-col items-center text-center w-full">
                <div class="w-24 h-24 bg-gradient-to-tr from-violet-600 to-indigo-500 rounded-full flex items-center justify-center text-white text-3xl font-black shadow-lg mb-4 ring-4 ring-violet-50">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>
                <h3 class="text-lg font-bold text-gray-800">
                    {{ Auth::user()->name }}
                </h3>
                <span class="mt-2 px-3 py-1 bg-violet-100 text-violet-700 text-xs font-bold uppercase tracking-wider rounded-full border border-violet-200">
                    Comprador
                </span>

                <div class="mt-8 w-full space-y-4 border-t border-gray-50 pt-8">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-400 font-medium">Miembro desde:</span>
                        <span class="text-gray-700 font-bold">
                            {{ Auth::user()->created_at->format('d/m/Y') }}
                        </span>
                    </div>
                </div>
            </div>
        </aside>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito - Re-Plug</title>
     <link rel="shortcut icon" href="/img/logo/logoo.png" />
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#f8f9fd]">

    <nav class="bg-white py-4 px-8 flex justify-between items-center shadow-sm">
        <div class="text-2xl font-black text-[#6347f3]">RE-PLUG<span class="text-gray-900">.</span></div>
        <a href="{{ url('/') }}" class="text-sm font-semibold text-gray-500 hover:text-[#6347f3]">Volver al mercado</a>
    </nav>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col lg:flex-row gap-8">
            
            <div class="lg:w-2/3">
                <h1 class="text-3xl font-extrabold text-gray-900 mb-8">Tu carrito</h1>
                
                <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden">
                    @forelse($items as $item)
                        <div class="flex items-center p-8 border-b border-gray-100 last:border-0 hover:bg-gray-50/50 transition">
                            <img src="{{ asset('img/' . $item->imagen) }}" alt="{{ $item->nombre }}" class="w-28 h-28 object-cover rounded-2xl shadow-sm">
                            
                            <div class="ml-8 flex-1">
                                <h3 class="text-xl font-bold text-gray-800">{{ $item->nombre }}</h3>
                                <p class="text-sm text-gray-400 mt-1">Garantía Re-plug incluida</p>
                                <div class="flex items-center mt-4 bg-gray-100 w-fit px-3 py-1 rounded-lg">
                                    <span class="text-xs font-bold text-gray-500 uppercase">Cantidad:</span>
                                    <span class="ml-2 font-bold text-[#6347f3]">{{ $item->cantidad }}</span>
                                </div>
                            </div>

                            <div class="text-right">
                                <p class="text-2xl font-black text-gray-900">${{ number_format($item->precio * $item->cantidad, 2) }}</p>
                                <p class="text-xs text-gray-400 font-semibold mt-1">${{ number_format($item->precio, 2) }} c/u</p>
                                
                                <form action="{{ route('carrito.remove', $item->id_carrito) }}" method="POST" class="mt-4">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-400 hover:text-red-600 text-xs font-bold transition uppercase tracking-wider">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <div class="p-20 text-center">
                            <div class="bg-gray-50 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                                🛒
                            </div>
                            <p class="text-gray-500 text-lg mb-8">No hay productos en tu carrito.</p>
                            <a href="{{ url('/') }}" class="inline-block bg-[#6347f3] text-white px-10 py-4 rounded-2xl font-bold hover:shadow-[0_10px_20px_rgba(99,71,243,0.3)] transition-all">
                                Ir a comprar
                            </a>
                        </div>
                    @endforelse
                </div>
            </div>

            <div class="lg:w-1/3">
                <div class="bg-white rounded-[2rem] p-8 border border-gray-100 shadow-xl shadow-gray-200/50 sticky top-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-8">Resumen</h2>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex justify-between text-gray-500 font-medium">
                            <span>Subtotal</span>
                            <span>${{ number_format($total, 2) }}</span>
                        </div>
                        <div class="flex justify-between text-gray-500 font-medium">
                            <span>Envío</span>
                            <span class="text-green-500 font-bold uppercase text-sm italic">Gratis</span>
                        </div>
                        <div class="pt-6 border-t border-gray-100 flex justify-between items-end">
                            <span class="text-lg font-bold text-gray-900">Total a pagar</span>
                            <span class="text-3xl font-black text-[#6347f3]">${{ number_format($total, 2) }}</span>
                        </div>
                    </div>

                    <div class="mb-8">
                        <p class="text-xs font-black text-gray-400 uppercase tracking-widest mb-4">Selecciona pago</p>
                        <div class="grid grid-cols-1 gap-3">
                            <label class="relative flex items-center p-4 rounded-2xl border-2 border-gray-100 cursor-pointer hover:bg-gray-50 transition has-[:checked]:border-[#6347f3] has-[:checked]:bg-indigo-50/30">
                                <input type="radio" name="metodo" class="w-5 h-5 text-[#6347f3] border-gray-300 focus:ring-0" checked>
                                <span class="ml-4 font-bold text-gray-700">Tarjeta Bancaria</span>
                            </label>
                            <label class="relative flex items-center p-4 rounded-2xl border-2 border-gray-100 cursor-pointer hover:bg-gray-50 transition has-[:checked]:border-[#6347f3] has-[:checked]:bg-indigo-50/30">
                                <input type="radio" name="metodo" class="w-5 h-5 text-[#6347f3] border-gray-300 focus:ring-0">
                                <span class="ml-4 font-bold text-gray-700">PayPal</span>
                            </label>

                             <label class="relative flex items-center p-4 rounded-2xl border-2 border-gray-100 cursor-pointer hover:bg-gray-50 transition has-[:checked]:border-[#6347f3] has-[:checked]:bg-indigo-50/30">
                                <input type="radio" name="metodo" class="w-5 h-5 text-[#6347f3] border-gray-300 focus:ring-0" checked>
                                <span class="ml-4 font-bold text-gray-700">pagar ya</span>
                            </label>
                        </div>
                    </div>
                    <form action="{{ route('carrito.checkout') }}" method="POST">
                        @csrf
                    <button class="w-full bg-[#6347f3] text-white py-5 rounded-2xl font-black text-lg hover:shadow-[0_15px_30px_rgba(99,71,243,0.4)] transition-all active:scale-[0.98]">
                        FINALIZAR COMPRA
                    </button>
                    </form>
                    <div class="flex items-center justify-center gap-2 mt-6 text-gray-400 font-bold text-[10px] uppercase tracking-tighter">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"/></svg>
                        Transacción encriptada
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
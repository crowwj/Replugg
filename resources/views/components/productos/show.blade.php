<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-b from-violet-100 via-white to-violet-50 min-h-screen bg-fixed bg-no-repeat">
    @include('components.navbar')
   <div class="max-w-7xl mx-auto px-4 py-10">

@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-2xl mb-6 flex justify-between items-center font-bold">
        <span>{{ session('success') }}</span>
        <a href="{{ route('carrito.index') }}" class="underline text-green-800">Ver carrito</a>
    </div>
@endif



    <a href="/" class="text-violet-600 font-semibold flex items-center mb-6 hover:underline">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
        Volver al mercado
    </a>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 bg-white rounded-3xl p-8 shadow-sm border border-gray-100">
        
        <div class="flex items-center justify-center bg-gray-50 rounded-2xl p-4">
            <img src="{{ asset('img/productos/' . $producto->imagen) }}" alt="{{ $producto->nombre }}" class="max-w-full h-auto rounded-xl shadow-md transition-transform hover:scale-105 duration-300">
        </div>

        <div class="flex flex-col">
            <span class="text-xs font-bold text-violet-500 uppercase tracking-widest mb-2">Nuevo en Re-plug</span>
            <h1 class="text-4xl font-black text-gray-900 mb-4">{{ $producto->nombre }}</h1>
            
            <div class="flex items-center mb-6">
                <span class="text-3xl font-bold text-gray-900">${{ number_format($producto->precio, 0) }}</span>
                <span class="ml-4 text-green-500 font-semibold text-sm">Envío gratis disponible</span>
            </div>

            <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                {{ $producto->descripcion }}
            </p>

            <div class="border-t border-gray-100 pt-6">
                <div class="flex items-center mb-6">
                    <div class="bg-gray-100 rounded-lg px-4 py-2 mr-4">
                        <span class="text-sm text-gray-500 block">Stock disponible</span>
                        <span id="stock-number" class="font-bold text-gray-900">{{ $producto->stock }}</span> unidades
                    </div>
                </div>

              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        @if($producto->stock > 0)
            <form action="{{ route('carrito.add', $producto->id_producto) }}" method="POST">
                @csrf
                <input type="hidden" name="comprar_ahora" value="1">
                <button type="submit" class="w-full bg-gradient-to-r from-violet-600 to-indigo-600 text-white font-bold py-4 rounded-2xl shadow-lg hover:shadow-indigo-200 transition-all active:scale-95 flex items-center justify-center">
                    Comprar ahora
                </button>
            </form>
            
            <form action="{{ route('carrito.add', $producto->id_producto) }}" method="POST">
                @csrf
                <button type="submit" class="w-full border-2 border-violet-600 text-violet-600 font-bold py-4 rounded-2xl hover:bg-violet-50 transition-all active:scale-95 flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                    Añadir al carrito
                </button>
            </form>
            @else
            <div class="col-span-2 bg-gray-100 text-gray-400 font-bold py-4 rounded-2xl flex items-center justify-center cursor-not-allowed border-2 border-dashed border-gray-200">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            PRODUCTO AGOTADO
        </div>
    @endif
            </div>

            <div class="mt-8 flex items-center text-gray-400 text-sm">
                <svg class="w-5 h-5 mr-2 text-violet-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                Compra protegida por Re-plug
            </div>
        </div>
    </div>
</div>



@if(session('error_limite'))
    <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 rounded-xl mb-4 shadow-sm">
        <p class="font-black tracking-wide">{{ session('error_limite') }}</p>
    </div>
@endif

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('form').forEach(form => {
        // Solo para añadir al carrito (evitamos que interfiera con "Comprar ahora")
        if(form.action.includes('carrito/add') && !form.querySelector('input[name="comprar_ahora"]')) {
            
            form.addEventListener('submit', function(e) {
                e.preventDefault(); 

                fetch(this.action, {
                    method: 'POST',
                    body: new FormData(this),
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(res => res.json())
                .then(data => {
                    if(data.success) {
                        // 1. ACTUALIZA EL NÚMERO DE STOCK
                        const stockEl = document.getElementById('stock-number');
                        if(stockEl) {
                            stockEl.innerText = data.nuevoStock;
                            stockEl.classList.add('text-green-500', 'scale-110');
                            setTimeout(() => stockEl.classList.remove('text-green-500', 'scale-110'), 300);
                        }

                        // 2. ACTUALIZA EL CARRITO
                        const cartCountEl = document.getElementById('cart-count');
                        if(cartCountEl) {
                            let currentCount = parseInt(cartCountEl.innerText) || 0;
                            cartCountEl.innerText = currentCount + 1;
                            cartCountEl.classList.remove('hidden'); // Por si estaba en 0
                        }
                    }
                })
                .catch(err => console.error("Error:", err));
            });
        }
    });
});
</script>                                                                                                                           

</body>
</html>


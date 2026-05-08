<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="/img/logo/logoo.png" />
    @vite('resources/css/app.css')
    <title>Historial de compras</title>
</head>
<body class="bg-[#f8f9fd] font-sans">
    @include('components.navbar')

    <div class="max-w-5xl mx-auto px-4 py-12">
        <h1 class="text-3xl font-black text-gray-900 mb-8">Mis Pedidos</h1>

        <div class="space-y-6">
            @forelse($pedidos as $pedido)
                <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 flex justify-between items-center hover:shadow-md transition">
                    <div>
                        <p class="text-xs font-bold text-violet-500 uppercase tracking-widest">Pedido #{{ $pedido->id_pedidos }}</p>
                        <p class="text-lg font-bold text-gray-800">{{ date('d M, Y', strtotime($pedido->fecha)) }}</p>
                        <span class="px-3 py-1 bg-green-100 text-green-600 text-xs font-bold rounded-full uppercase">
                            {{ $pedido->estado }}
                        </span>
                    </div>
                    
                    <div class="text-right">
                        <p class="text-sm text-gray-400 font-medium">Total pagado</p>
                        <p class="text-2xl font-black text-[#6347f3]">${{ number_format($pedido->total, 2) }}</p>
                    </div>
                </div>
            @empty
                <div class="text-center py-20 bg-white rounded-[3rem] border-2 border-dashed border-gray-200">
                    <p class="text-gray-400 font-medium">Aún no has realizado ninguna compra.</p>
                    <a href="/" class="mt-4 inline-block text-violet-600 font-bold hover:underline">Explorar laptops</a>
                </div>
            @endforelse
        </div>
    </div>
</body>
</html>
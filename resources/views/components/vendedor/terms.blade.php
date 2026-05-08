<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      @vite('resources/css/app.css')
    <title>TyC Vendedor</title>
</head>
<body>
    <div class="min-h-screen bg-gray-50 flex items-center justify-center p-6">
    <div class="max-w-md w-full bg-white rounded-3xl shadow-xl p-8 border border-violet-100">
        <h2 class="text-2xl font-black text-violet-800 mb-4">¿Quieres empezar a vender?</h2>
        <p class="text-gray-600 mb-6">
            Para publicar productos en el mercado, debes aceptar nuestras políticas de vendedor y comisiones.
        </p>
        
        <form action="{{ route('seller.become') }}" method="POST">
            @csrf
            <button type="submit" class="w-full py-4 bg-gradient-to-r from-violet-600 to-indigo-600 text-white font-bold rounded-2xl shadow-lg hover:shadow-indigo-200 transition-all active:scale-95">
                Aceptar y Empezar
            </button>
        </form>
        
        <a href="/" class="block text-center mt-4 text-sm text-gray-400 hover:text-violet-600 transition-colors">
            Quizás más tarde
        </a>
    </div>
</div>
</body>
</html>
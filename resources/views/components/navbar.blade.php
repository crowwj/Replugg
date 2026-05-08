<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>   @layer base {   } </style>
        @endif
    </head>
    <body class="bg-gray-50">

    <div class="grid grid-cols-12 items-center gap-4 py-6 bg-white shadow-sm px-10">
        <div class="col-span-3">
            <h2 class="text-4xl font-extrabold text-violet-800 tracking-tighter hover:opacity-80 transition-opacity">
              <a href="/">RE-PLUG</a><span class="text-violet-400">.</span>
            </h2>
        </div>
        
        <div class="col-span-5 ">
            <div class="relative group">
                <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400 group-focus-within:text-violet-700 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="text" 
                       placeholder="¿Qué tecnología buscas hoy?" 
                       class="w-full pl-12 pr-4 py-3 bg-gray-50 border border-violet-100 rounded-2xl outline-none transition-all duration-300 focus:bg-white focus:border-violet-200 focus:ring-4 focus:ring-violet-50 text-gray-700"
                >
            </div>
        </div>

        <div class="col-span-4 flex items-center justify-end gap-6">
            <a href="{{ route('carrito.index') }}" class="flex items-center gap-2 text-gray-600 hover:text-violet-700 font-medium transition-colors group">
    <div class="relative">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7 text-violet-800 group-hover:scale-110 transition-transform">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
        </svg>
       
        @auth
            @php
                $conteo = \DB::table('carrito')->where('id_usuario', auth()->id())->sum('cantidad');
            @endphp
            
           <span id="cart-count" 
      class="absolute -top-1 -right-1 bg-violet-600 text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full animate-bounce {{ ($conteo ?? 0) > 0 ? '' : 'hidden' }}">
    {{ $conteo ?? 0 }}
</span>
        @endauth
    </div>
    <span>Carrito</span>
</a>

            @auth
                <div class="flex items-center gap-3">
                    <a href="/dashboard" class="bg-purple-600 text-white px-6 py-2.5 rounded-xl font-bold hover:bg-indigo-700 hover:shadow-lg transition-all active:scale-95">
                        Panel de {{ Auth::user()->name }}
                    </a>

                    @if(Auth::user()->role == 'admin')
                        <a href="/admin/dashboard" class="bg-red-600 text-white px-5 py-2.5 rounded-xl font-bold hover:bg-red-700 hover:shadow-lg transition-all active:scale-95 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                            </svg>
                            Admin
                        </a>
                    @endif
                </div>
            @endauth

            @guest
                <a href="/usuario" class="bg-violet-800 text-white px-6 py-2.5 rounded-xl font-bold hover:bg-violet-900 hover:shadow-lg hover:shadow-violet-200 transition-all active:scale-95">
                    Iniciar sesión
                </a>
            @endguest
        </div>
    </div>
    </body>
</html>
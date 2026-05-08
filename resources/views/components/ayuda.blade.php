<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda</title>
     @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-b from-violet-100 via-white to-violet-50 min-h-screen bg-fixed bg-no-repeat"> 
    @include('components.navbar') 
  <div class="grid grid-cols-5 gap-6 mt-10 p-6 bg-slate-50 rounded-xl ">
        <div class="col-span-5 text-xl font-bold pb-2 mb-2 text-violet-900 hover:text-violet-600 border-b">
            Panel de ayuda
        </div>
            <div class="transition-all duration-500 hover:scale-105">
                <button class="w-full bg-gradient-to-r from-violet-500 to-indigo-700  p-2 rounded-md text-white  text-sm h-20">Cambiar mi contraseña</button>
            </div>
            <div class="transition-all duration-500 hover:scale-105">
                <button class="w-full  bg-gradient-to-r from-violet-500 to-indigo-700  p-2 rounded-md text-white  text-sm h-20">Cómo crear cuenta</button>
            </div>
            <div class="transition-all duration-500 hover:scale-105">
                <button class="w-full bg-gradient-to-r from-violet-500 to-indigo-700  p-2 rounded-md text-white  text-sm h-20">Agregar direcciones</button>
            </div>
            <div class="transition-all duration-500 hover:scale-105">
                <button class="w-full  bg-gradient-to-r from-violet-500 to-indigo-700  p-2 rounded-md text-white  text-sm h-20">Como iniciar sesion</button>
            </div>
            <div class="transition-all duration-500 hover:scale-105">
                <button class="w-full  bg-gradient-to-r from-violet-500 to-indigo-700  p-2 rounded-md text-white  text-sm h-20">Cancelar un pedido</button>
            </div>
            <div class="transition-all duration-500 hover:scale-105">
                <button class="w-full bg-gradient-to-r from-violet-500 to-indigo-700 rounded-3xl p-2 rounded-md text-white  text-sm h-20">Comprar un producto</button>
            </div>
            <div class="transition-all duration-500 hover:scale-105">
                <button class="w-full  bg-gradient-to-r from-violet-500 to-indigo-700  p-2 rounded-md text-white  text-sm h-20">Reportar un problema</button>
            </div>
            <div class="transition-all duration-500 hover:scale-105">
                <button class="w-full  bg-gradient-to-r from-violet-500 to-indigo-700  p-2 rounded-md text-white  text-sm h-20">¿Cómo borrar una cuenta?</button>
            </div>
            <div class="transition-all duration-500 hover:scale-105">
                <button class="w-full  bg-gradient-to-r from-violet-500 to-indigo-700  p-2 rounded-md text-white  text-sm h-20">Políticas de devoluciones</button>
            </div>
            <div class="transition-all duration-500 hover:scale-105">
                <button class="w-full  bg-gradient-to-r from-violet-500 to-indigo-700  p-2 rounded-md text-white  text-sm h-20">Cómo contactarnos</button>
            </div>
            <div class="transition-all duration-500 hover:scale-105">
                <button class="w-full  bg-gradient-to-r from-violet-500 to-indigo-700  p-2 rounded-md text-white text-sm h-20">Cómo configurar la pagina</button>
            </div>
    </div>
</body>
</html>
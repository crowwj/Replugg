<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
     @vite('resources/css/app.css')
</head>
<body class="">
    
   <div class="min-h-screen bg-gradient-to-b from-violet-100 via-white to-violet-50 min-h-screen bg-fixed bg-no-repeat flex items-center justify-center p-4">
  <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8">
    <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Registro</h2>
    
    <form class="space-y-4">
      <div>
        <label for="text" class="block text-sm font-medium text-gray-700 mb-1">Nombre completo</label>
        <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent outline-none transition-all">
      </div>
      <div>
        <label for="text "class="block text-sm font-medium text-gray-700 mb-1">Correo electronico</label>
        <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent outline-none transition-all">
      </div>
      <div>
        <label for="tel" class="block text-sm font-medium text-gray-700 mb-1">Numero telefonico</label>
        <input type="tel"class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent outline-none transition-all" >
      </div>
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
        <input type="password"class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent outline-none transition-all" >
      </div>

      <div>
        <button type="submit"  class="w-full bg-purple-500  text-white font-semibold py-2 rounded-lg transition-colors shadow-md hover:bg-violet-500">
            Crear cuenta
        </button>
        <a href="#" class="text-sm text-purple-500 hover:underline hover:text-violet-500">Regresar al inicio</a>
      </div>
    </form>
  </div>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
     @vite('resources/css/app.css')
</head>
<body class="">
    
   <div class="min-h-screen bg-gradient-to-b from-violet-100 via-white to-violet-50 min-h-screen bg-fixed bg-no-repeat flex items-center justify-center p-4">
  <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8">
    <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Iniciar sesion</h2>
    
    <form class="space-y-4">
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Correo electrónico</label>
        <input 
          type="email" 
          placeholder="correo@ejemplo.com" 
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring--500 focus:border-transparent outline-none transition-all"
        />
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
        <input 
          type="password" 
          placeholder="••••••••" 
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent outline-none transition-all"
        />
      </div>

      <div class="text-right">
        <a href="#" class="text-sm text-purple-500 hover:underline hover:text-violet-500">¿Olvidaste tu contraseña?</a>
      </div>

      <button 
        type="submit" 
        class="w-full bg-purple-500  text-white font-semibold py-2 rounded-lg transition-colors shadow-md hover:bg-violet-500"
      >
        Iniciar sesión
      </button>

      <p class="text-center text-sm text-gray-600 mt-4">
        ¿No tienes cuenta? 
        <a href="#" class="text-purple-500 font-medium hover:underline hover:text-violet-500">Regístrate</a>
      </p>
    </form>
  </div>
</div>
</body>
</html>
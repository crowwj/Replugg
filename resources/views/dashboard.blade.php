<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control - RE-PLUG</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> 
     @vite('resources/css/app.css')
    <link rel="shortcut icon" href="/img/logo/logoo.png"/>
</head>
<body class="bg-gradient-to-b from-violet-100 via-white to-violet-50 min-h-screen bg-fixed">
    <div class="grid grid-cols-1 lg:grid-cols-5 min-h-screen">
        @include('components.panel.asidePanel')
        @include('components.panel.ContenidoPanel')
    </div>
</body>
</html>
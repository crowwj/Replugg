<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Replug</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">   
    <link rel="shortcut icon" href="/img/logo/logoo.png" />
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-b from-violet-100 via-white to-violet-50 min-h-screen bg-fixed bg-no-repeat">

@include('components.navbar')
@include('components.contenidotop')
@include('components.artefactos')
@include('components.etiquetas')

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> 
    <link rel="shortcut icon" href="/img/logo/logoo.png"/>
     @vite('resources/css/app.css')
    <title>Direcciones | Re-plug</title>
</head>
<body class="bg-gradient-to-b from-violet-100 via-white to-violet-50 min-h-screen bg-fixed bg-no-repeat">
    <div class="max-w-4xl mx-auto p-6 mt-10">
        
        <div class="mb-6">
            <a href="/dashboard" class="inline-flex items-center text-violet-600 font-semibold hover:text-violet-800 transition-colors group">
                <div class="bg-white p-2 rounded-lg shadow-sm border border-violet-100 mr-3 group-hover:shadow-md transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                </div>
                Regresar al Panel
            </a>
        </div>

        <div class="mb-10">
            <h2 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-violet-800 to-indigo-600 mb-2">
                Agregar Nueva Dirección
            </h2>
            <p class="text-gray-600 text-lg">Registra dónde quieres recibir tus productos de <span class="text-violet-600 font-bold">Re-plug</span>.</p>
        </div>

        @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif
<form action="{{ route('direcciones.store') }}" method="POST" novalidate class="bg-white p-8 md:p-10 rounded-[2.5rem] shadow-2xl shadow-violet-200/50 border border-violet-50">
    @csrf

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        
        <div class="md:col-span-2">
            <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Etiqueta de dirección</label>
            <input type="text" name="etiqueta" value="{{ old('etiqueta') }}" placeholder="Ej. Mi Casa u Oficina" class="w-full px-5 py-4 rounded-2xl bg-violet-50/50 border border-violet-100 focus:ring-4 focus:ring-violet-500/10 focus:border-violet-500 outline-none transition-all">
        </div>

        <div>
            <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Código Postal</label>
            <input type="number" name="cp" value="{{ old('cp') }}" placeholder="00000" required class="w-full px-5 py-4 rounded-2xl bg-violet-50/50 border border-violet-100 focus:ring-4 focus:ring-violet-500/10 focus:border-violet-500 outline-none transition-all">
        </div>
        <div>
            <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Estado</label>
            <input type="text" name="estado" value="Sinaloa" readonly class="w-full px-5 py-4 rounded-2xl bg-gray-50 border border-violet-100 text-gray-700 font-medium">
        </div>

        <div>
            <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Municipio / Alcaldía</label>
            <select name="municipio" class="w-full px-5 py-4 rounded-2xl bg-violet-50/50 border border-violet-100 focus:ring-4 focus:ring-violet-500/10 focus:border-violet-500 outline-none transition-all">
                <option value="">Selecciona tu municipio</option>
                @foreach($municipios as $m)
                    <option value="{{ $m }}" {{ old('municipio') == $m ? 'selected' : '' }}>{{ $m }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Colonia / Asentamiento</label>
            <input type="text" name="colonia" value="{{ old('colonia') }}" placeholder="Ej. Centro" required class="w-full px-5 py-4 rounded-2xl bg-violet-50/50 border border-violet-100 focus:ring-4 focus:ring-violet-500/10 focus:border-violet-500 outline-none transition-all">
        </div>

        <div class="md:col-span-2">
            <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Calle</label>
            <input type="text" name="calle" value="{{ old('calle') }}" placeholder="Nombre de la calle" required class="w-full px-5 py-4 rounded-2xl bg-violet-50/50 border border-violet-100 focus:ring-4 focus:ring-violet-500/10 focus:border-violet-500 outline-none transition-all">
        </div>

        <div>
            <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Núm. Exterior</label>
            <input type="text" name="numext" value="{{ old('numext') }}" placeholder="Ext." required class="w-full px-5 py-4 rounded-2xl bg-violet-50/50 border border-violet-100 focus:ring-4 focus:ring-violet-500/10 focus:border-violet-500 outline-none transition-all">
        </div>
        <div>
            <label class="block text-sm font-bold text-gray-700 mb-2 ml-1">Núm. Interior (Opcional)</label>
            <input type="text" name="num_int" value="{{ old('num_int') }}" placeholder="Apto / Depto" class="w-full px-5 py-4 rounded-2xl bg-violet-50/50 border border-violet-100 focus:ring-4 focus:ring-violet-500/10 focus:border-violet-500 outline-none transition-all">
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-4 mt-12">
        <button type="submit" class="flex-[2] bg-gradient-to-r from-violet-600 to-indigo-600 hover:from-violet-700 hover:to-indigo-700 text-white font-extrabold py-4 rounded-2xl transition-all shadow-xl shadow-violet-200 active:scale-[0.98]">
            Guardar Dirección
        </button>
        <a href="/" class="flex-1 bg-white border-2 border-gray-100 hover:bg-gray-50 text-gray-500 font-bold py-4 rounded-2xl transition-all block text-center leading-[3rem]">
            Cancelar
        </a>
    </div>
</form>
    <script>
        document.getElementById('cp_input').addEventListener('input', function(e) {
    let cp = e.target.value;

    if (cp.length === 5) {
        
        fetch(`/api/consultar-cp/${cp}`)
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    //
                    document.getElementById('municipio_input').value = data.municipio;
                    
                   
                    let selectColonia = document.getElementById('colonia_select');
                    selectColonia.innerHTML = ''; 
                    
                    data.colonias.forEach(colonia => {
                        let option = document.createElement('option');
                        option.value = colonia;
                        option.textContent = colonia;
                        selectColonia.appendChild(option);
                    });
                } else {
                    alert('Código postal no encontrado en Sinaloa');
                }
            });
    }
});

document.getElementById('cp').addEventListener('blur', function() {
    let cp = this.value;
    fetch(`/api/datos-cp/${cp}`)
        .then(response => response.json())
        .then(data => {  
            document.getElementById('municipio').value = data[0].municipio;
        });
});
    </script>
</body>
</html>

<div class="grid grid-cols-1 md:grid-cols-12 gap-6 p-4 md:p-8" >
    <div class="col-span-3 bg-white/70 backdrop-blur-sm shadow-sm rounded-2xl p-6 border border-violet-100">
        <h3 class="text-xs font-bold text-violet-800 uppercase tracking-widest mb-4">Explorar Categorías</h3>
        
        <ul class="space-y-2">
            <li>
                <a href="#" class=" btn-categoria flex items-center justify-between group p-2 rounded-lg hover:bg-violet-600 hover:text-white transition-all duration-200" data-id="1">
                    <span class="font-medium">Computadoras</span>
                    <svg class="size-4 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </li>
            <li>
                <a href="#" class=" btn-categoria flex items-center justify-between group p-2 rounded-lg hover:bg-violet-600 hover:text-white transition-all duration-200" data-id="2">
                    <span class="font-medium">Celulares</span>
                    <svg class="size-4 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </li>
            <li>
                <a href="#" class=" btn-categoria flex items-center justify-between group p-2 rounded-lg hover:bg-violet-600 hover:text-white transition-all duration-200" data-id="3">
                    <span class="font-medium">Componentes</span>
                    <svg class="size-4 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </li>
            <li>
                <a href="#" class=" btn-categoria flex items-center justify-between group p-2 rounded-lg hover:bg-violet-600 hover:text-white transition-all duration-200" data-id="4">
                    <span class="font-medium">Consolas</span>
                    <svg class="size-4 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </li>

            <li>
                <a href="#" class=" btn-categoria flex items-center justify-between group p-2 rounded-lg hover:bg-violet-600 hover:text-white transition-all duration-200" data-id="5">
                    <span class="font-medium">Accesorios</span>
                    <svg class="size-4 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </li>
        </ul>
    </div>

    <div id="contenedor-dinamico" class="col-span-9 bg-white/60 backdrop-blur-sm rounded-2xl p-6 shadow-sm border border-violet-100 min-h-[400px]">
        <div class="flex items-center justify-center h-full text-violet-400">
            Selecciona una categoría para ver productos
        </div>
    </div>
</div>


<!-- Cambiar el producto segun le piques -->

<script>
document.querySelectorAll('.btn-categoria').forEach(boton => {
    boton.addEventListener('click', async (e) => {
        e.preventDefault();
        const id = boton.getAttribute('data-id');
        const contenedor = document.getElementById('contenedor-dinamico');

       
        contenedor.innerHTML = '<p class="text-center text-violet-500">Cargando productos...</p>';

        try {
            const respuesta = await fetch(`/productos/categoria/${id}`);
            const productos = await respuesta.json();

            if (productos.length === 0) {
                contenedor.innerHTML = '<p class="text-center">No hay productos en esta categoría.</p>';
                return;
            }

            // Creamos el grid de productos
            let html = '<div class="grid grid-cols-1 md:grid-cols-3 gap-4">';
            productos.forEach(p => {
                html += `
                    <div class="bg-white p-4 rounded-xl shadow-sm overflow-hidden border border-violet-100">
                        <img src="/img/productos/${p.imagen}" class="w-full h-32 object-contain mb-2 rounded-lg">
                        <h3 class="font-bold text-sm">${p.nombre}</h3>
                        <p class="text-violet-600 font-bold">$${parseFloat(p.precio).toLocaleString('es-MX')}</p>
                        <button class="mt-2 w-full bg-violet-600 text-white text-xs py-2 rounded-lg">Ver más</button>
                    </div>
                `;
            });
            html += '</div>';
            contenedor.innerHTML = html;
            //En caso de no funcionar
        } catch (error) {
            contenedor.innerHTML = '<p class="text-red-500">Error al conectar con la base de datos.</p>';
        }
    });
});
</script>
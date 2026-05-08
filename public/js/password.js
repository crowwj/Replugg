const btnModificar = document.getElementById('btn-modificar');
    const btnActualizar = document.getElementById('btn-actualizar');
    const currentPass = document.getElementById('current_password');
    const newPass = document.getElementById('new_password');

    btnModificar.addEventListener('click', () => {
        [currentPass, newPass].forEach(input => {
            input.removeAttribute('readonly');
            input.classList.remove('opacity-70', 'cursor-not-allowed');
        });
        btnModificar.classList.add('hidden');
        btnActualizar.classList.remove('hidden');
        
        currentPass.focus();
    });
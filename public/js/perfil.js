function habilitarEdicion() {
    const inputs = document.querySelectorAll('input[readonly]');
    
    inputs.forEach(input => {
        input.readOnly = false;
        input.classList.remove('bg-gray-50'); 
    });

   
    if(inputs.length > 0) inputs[0].focus();
}





document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('FormularioInterno');
    var submitButton = document.getElementById('botonSubmit');

    form.addEventListener('submit', function(event) {
        // Deshabilitar el botón para prevenir múltiples envíos
        submitButton.disabled = true;
        submitButton.value =
        'Cargando...'; // Opcional: Cambia el texto del botón para indicar que está en proceso.
    });
});

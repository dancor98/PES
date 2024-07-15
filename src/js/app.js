
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



document.addEventListener("DOMContentLoaded", function() {
    function getQueryParams() {
        let params = {};
        window.location.search.substring(1).split('&').forEach(function(param) {
            let parts = param.split('=');
            params[parts[0]] = decodeURIComponent(parts[1]);
        });
        return params;
    }

    let params = getQueryParams();
    if (params.estado === 'exito') {
        var myModal = new bootstrap.Modal(document.getElementById('exito'));
        myModal.show();
    } else if (params.estado === 'error') {
        var myModal = new bootstrap.Modal(document.getElementById('error'));
        myModal.show();
    }
});



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

document.addEventListener('DOMContentLoaded', function() {
    var backButton = document.getElementById('backButton');
    if (backButton) {
        backButton.addEventListener('click', function() {
            if (document.referrer !== '') {
                window.history.go(-1);
            } else {
                // Redirigir según el rol del usuario
                if (rolUsuario === '1') {
                    window.location.href = '/admin/dashboard';
                } else if (rolUsuario === '0') {
                    window.location.href = '/colaborador/dashboard';
                } else {
                    // Fallback en caso de rol no identificado
                    window.location.href = '/';
                }
            }
        });
    }
});


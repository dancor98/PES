
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
            params[parts[0]] = decodeURIComponent(parts[1] || '');
        });
        return params;
    }

    let params = getQueryParams();
    if (params.estado) {
        let estado = params.estado;
        let modalId;

        switch (estado) {
            case 'exito':
                modalId = 'exito';
                break;
            case 'error_abrir_archivo':
                modalId = 'error_abrir_archivo';
                break;
            case 'error_procesamiento':
                modalId = 'error_procesamiento';
                break;
            case 'error_extension':
                modalId = 'error_extension';
                break;
            case 'error_carga':
                modalId = 'error_carga';
                break;
            default:
                return; // Si el estado no es reconocido, no hacer nada
        }

        if (modalId) {
            var myModal = new bootstrap.Modal(document.getElementById(modalId));
            myModal.show();
        }
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


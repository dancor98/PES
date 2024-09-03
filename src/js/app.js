document.addEventListener("DOMContentLoaded", function () {
  var form = document.getElementById("FormularioInterno");
  var submitButton = document.getElementById("botonSubmit");

  form.addEventListener("submit", function (event) {
    // Deshabilitar el botón para prevenir múltiples envíos
    submitButton.disabled = true;
    submitButton.value = "Cargando..."; // Opcional: Cambia el texto del botón para indicar que está en proceso.
  });
}); //bloquea el boton de submit para emitar carga doble

//estado Exito o Error
document.addEventListener("DOMContentLoaded", function () {
  function getQueryParams() {
    let params = {};
    window.location.search
      .substring(1)
      .split("&")
      .forEach(function (param) {
        let parts = param.split("=");
        params[parts[0]] = decodeURIComponent(parts[1] || "");
      });
    return params;
  }

  let params = getQueryParams();
  if (params.estado) {
    let estado = params.estado;
    let modalId;

    switch (estado) {
      case "exito":
        modalId = "exito";
        break;
      case "error_abrir_archivo":
        modalId = "error_abrir_archivo";
        break;
      case "error_procesamiento":
        modalId = "error_procesamiento";
        break;
      case "error_extension":
        modalId = "error_extension";
        break;
      case "error_carga":
        modalId = "error_carga";
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

document.addEventListener("DOMContentLoaded", function () {
  var backButton = document.getElementById("backButton");
  if (backButton) {
    backButton.addEventListener("click", function () {
      if (document.referrer !== "") {
        window.history.go(-1);
      } else {
        // Redirigir según el rol del usuario
        if (rolUsuario === "1") {
          window.location.href = "/admin/dashboard";
        } else if (rolUsuario === "0") {
          window.location.href = "/colaborador/dashboard";
        } else {
          // Fallback en caso de rol no identificado
          window.location.href = "/";
        }
      }
    });
  }
}); //boton de volver

//filtro periodo
document.addEventListener("DOMContentLoaded", function () {
  var filtroPeriodo = document.getElementById("filtroPeriodo");

  // Leer el valor del parámetro 'periodo' de la URL y establecer el valor en el dropdown
  var urlParams = new URLSearchParams(window.location.search);
  var mes = urlParams.get("periodo");
  if (mes) {
    filtroPeriodo.value = mes;
  }

  // Actualizar la URL cuando se selecciona un mes en el filtro
  filtroPeriodo.addEventListener("change", function () {
    var filtro = filtroPeriodo.value;
    var url = new URL(window.location.href);
    if (filtro) {
      url.searchParams.set("periodo", filtro);
    } else {
      url.searchParams.delete("periodo");
    }
    window.history.pushState({}, "", url);
    window.location.reload(); // Recargar la página con el nuevo filtro
  });
});

//filtro estado
document.addEventListener("DOMContentLoaded", function () {
  var filtroEstado = document.getElementById("filtroEstado");

  // Leer el valor del parámetro 'estado' de la URL y establecer el valor en el dropdown
  var urlParams = new URLSearchParams(window.location.search);
  var status = urlParams.get("estado");
  if (status) {
    filtroEstado.value = status;
  }

  // Actualizar la URL cuando se selecciona un estado en el filtro
  filtroEstado.addEventListener("change", function () {
    var filtro = filtroEstado.value;
    var url = new URL(window.location.href);
    if (filtro) {
      url.searchParams.set("estado", filtro);
    } else {
      url.searchParams.delete("estado");
    }
    window.history.pushState({}, "", url);
    window.location.reload(); // Recargar la página con el nuevo filtro
  });
});

// //vacaciones
// document.addEventListener("DOMContentLoaded", function () {
//   var hoy = new Date();
//   hoy.setDate(hoy.getDate() + 1); // Sumamos un día a la fecha actual para obtener mañana
//   var manana = hoy.toISOString().split("T")[0];

//   var desde = document.getElementById("desde");
//   var hasta = document.getElementById("hasta");
//   var cantidad = document.getElementById("cantidad");
//   var cantidad_dias = document.getElementById("cantidad_dias");
//   var botonSubmit = document.getElementById("botonSubmit");

//   // Establecemos el valor mínimo para el campo "desde" como mañana
//   if (desde) {
//     desde.setAttribute("min", manana);

//     desde.addEventListener("change", function () {
//       validarFecha(desde);
//       // Establecemos el valor mínimo para el campo "hasta" como el valor seleccionado en "desde"
//       if (hasta) {
//         hasta.setAttribute("min", desde.value);
//       }
//       actualizarCantidadDias();
//     });
//   }

//   if (hasta) {
//     hasta.addEventListener("change", function () {
//       validarFecha(hasta);
//       actualizarCantidadDias();
//     });
//   }

//   if (botonSubmit) {
//     botonSubmit.addEventListener("click", function (event) {
//       // Validamos que las fechas sean correctas
//       if (desde && desde.value < manana) {
//         alert("La fecha 'Desde' no puede ser menor a mañana.");
//         event.preventDefault();
//         return false;
//       }

//       if (hasta && hasta.value < desde.value) {
//         alert("La fecha 'Hasta' no puede ser menor a la fecha 'Desde'.");
//         event.preventDefault();
//         return false;
//       }
//     });
//   }

//   function validarFecha(campo) {
//     var fechaSeleccionada = new Date(campo.value);
//     var diaSemana = fechaSeleccionada.getDay();

//     // Si el día seleccionado es sábado (5) o domingo (6)
//     if (diaSemana === 5 || diaSemana === 6) {
//       alert("No se pueden seleccionar sábados ni domingos.");
//       // Restablece el campo a vacío
//       campo.value = "";
//     }
//   }

//   function actualizarCantidadDias() {
//     if (desde && hasta && desde.value && hasta.value) {
//       var fechaDesde = new Date(desde.value);
//       var fechaHasta = new Date(hasta.value);

//       // Asegúrate de que la fechaHasta incluya el final del día
//       fechaHasta.setHours(23, 59, 59, 999);

//       if (fechaHasta >= fechaDesde) {
//         var diferencia = 0;
//         var fechaTemp = new Date(fechaDesde);

//         // Iterar a través de cada día en el rango de fechas
//         while (fechaTemp <= fechaHasta) {
//           var diaSemana = fechaTemp.getDay();
//           if (diaSemana !== 5 && diaSemana !== 6) {
//             // Excluye sábados (5) y domingos (6)
//             diferencia++;
//           }
//           fechaTemp.setDate(fechaTemp.getDate() + 1);
//         }

//         if (cantidad) {
//           cantidad.value = diferencia;
//         }

//         if (cantidad_dias) {
//           cantidad_dias.value = diferencia;
//         }
//       } else {
//         if (cantidad) {
//           cantidad.value = "";
//         }

//         if (cantidad_dias) {
//           cantidad_dias.value = "";
//         }
//       }
//     } else {
//       if (cantidad) {
//         cantidad.value = "";
//       }

//       if (cantidad_dias) {
//         cantidad_dias.value = "";
//       }
//     }
//   }
// });

//vacaciones
document.addEventListener("DOMContentLoaded", function () {
  var hoy = new Date();
  hoy.setDate(hoy.getDate() + 1); // Sumamos un día a la fecha actual para obtener mañana
  var manana = hoy.toISOString().split("T")[0];

  var desde = document.getElementById("desde");
  var hasta = document.getElementById("hasta");
  var cantidad = document.getElementById("cantidad");
  var cantidad_dias = document.getElementById("cantidad_dias");
  var botonSubmit = document.getElementById("botonSubmit");
  var colaboradorId = document.getElementById("colaborador_id").value;

  // Establecemos el valor mínimo para el campo "desde" como mañana
  if (desde) {
    desde.setAttribute("min", manana);

    desde.addEventListener("change", function () {
      validarFecha(desde);
      // Establecemos el valor mínimo para el campo "hasta" como el valor seleccionado en "desde"
      if (hasta) {
        hasta.setAttribute("min", desde.value);
      }
      actualizarCantidadDias();
    });
  }

  if (hasta) {
    hasta.addEventListener("change", function () {
      validarFecha(hasta);
      actualizarCantidadDias();
    });
  }

  if (botonSubmit) {
    botonSubmit.addEventListener("click", function (event) {
      // Validamos que las fechas sean correctas
      if (desde && desde.value < manana) {
        alert("La fecha 'Desde' no puede ser menor a mañana.");
        event.preventDefault();
        return false;
      }

      if (hasta && hasta.value < desde.value) {
        alert("La fecha 'Hasta' no puede ser menor a la fecha 'Desde'.");
        event.preventDefault();
        return false;
      }
    });
  }

  function validarFecha(campo) {
    var fechaSeleccionada = new Date(campo.value);
    var diaSemana = fechaSeleccionada.getDay();

    // Si el colaborador_id es 7, excluye sábados (5) y domingos (6)
    if (colaboradorId == 7 && (diaSemana === 5 || diaSemana === 6)) {
      alert("No se pueden seleccionar sábados ni domingos.");
      // Restablece el campo a vacío
      campo.value = "";
    }
    // Si es otro colaborador, solo excluye domingos (6)
    else if (diaSemana === 6) {
      alert("No se pueden seleccionar domingos.");
      // Restablece el campo a vacío
      campo.value = "";
    }
  }

  function actualizarCantidadDias() {
    if (desde && hasta && desde.value && hasta.value) {
      var fechaDesde = new Date(desde.value);
      var fechaHasta = new Date(hasta.value);

      // Asegúrate de que la fechaHasta incluya el final del día
      fechaHasta.setHours(23, 59, 59, 999);

      if (fechaHasta >= fechaDesde) {
        var diferencia = 0;
        var fechaTemp = new Date(fechaDesde);

        // Iterar a través de cada día en el rango de fechas
        while (fechaTemp <= fechaHasta) {
          var diaSemana = fechaTemp.getDay();
          // Si colaborador_id es 2, excluye sábados (5) y domingos (6)
          if (colaboradorId == 2) {
            if (diaSemana !== 5 && diaSemana !== 6) {
              diferencia++;
            }
          } else {
            // Excluye solo domingos (6) para otros colaboradores
            if (diaSemana !== 6) {
              diferencia++;
            }
          }
          fechaTemp.setDate(fechaTemp.getDate() + 1);
        }

        if (cantidad) {
          cantidad.value = diferencia;
        }

        if (cantidad_dias) {
          cantidad_dias.value = diferencia;
        }
      } else {
        if (cantidad) {
          cantidad.value = "";
        }

        if (cantidad_dias) {
          cantidad_dias.value = "";
        }
      }
    } else {
      if (cantidad) {
        cantidad.value = "";
      }

      if (cantidad_dias) {
        cantidad_dias.value = "";
      }
    }
  }
});

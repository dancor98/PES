<?php

namespace Controllers;

use Model\Carreras;
use Model\Colaboradores;
use Model\Vacaciones;
use MVC\Router;

class DashboardController
{

    public static function index(Router $router)
    {
        session_start();
        // Validar que el usuario esté logueado y sea administrador
        if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
            header('Location: /login');
            return;
        }

        $colaboradoresTotal = Colaboradores::totalGeneral();
        $solicitudvacacionesN = Vacaciones::totalVacacionesN();
        $postulacionesTotal = Carreras::totalPostulaciones();

        $router->render('admin/dashboard/index', [
            'titulo' => 'Modulos Disponibles',
            'colaboradoresTotal' => $colaboradoresTotal,
            'solicitudvacacionesN' => $solicitudvacacionesN,
            'postulacionesTotal' => $postulacionesTotal
        ]);
    }
}

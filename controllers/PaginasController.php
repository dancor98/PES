<?php

namespace Controllers;

use MVC\Router;

class PaginasController
{

    public static function index(Router $router)
    {
        $router->render('paginas/index', [
            'titulo' => 'inicio',
        ]);
    }
    public static function nosotros(Router $router)
    {
        $router->render('paginas/nosotros', [
            'titulo' => 'Nosotros',
        ]);
    }
    public static function productosServicios(Router $router)
    {
        $router->render('paginas/productos-servicios', [
            'titulo' => 'Productos y Servicios',
        ]);
    }
    public static function localidades(Router $router)
    {
        $router->render('paginas/localidades', [
            'titulo' => 'Localidades',
        ]);
    }
    public static function carreras(Router $router)
    {
        $router->render('paginas/carreras', [
            'titulo' => 'Carreras',
        ]);
    }

    public static function error(Router $router)
    {
        $router->render('paginas/error', [
            'titulo' => 'Error 404 - Pagina no encontrada'
        ]);
    }
}

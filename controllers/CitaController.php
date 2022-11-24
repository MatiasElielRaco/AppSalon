<?php

namespace Controllers;

use MVC\Router;

class CitaController {
    public static function index (Router $router) {

        isAuth();
        
        if(!isset($_SESSION["nombre"])) {
            header("location: /");
        }

        $router->render("cita/index", [
            "nombre" => $_SESSION["nombre"],
            "id" => $_SESSION["id"]
        ]);
    }
}
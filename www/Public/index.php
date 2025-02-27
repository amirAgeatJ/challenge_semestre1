<?php

namespace App;

// Inclure l'autoloader de Composer pour PhpMailer
use App\Controller\InstallerController;

require __DIR__ . '/../vendor/autoload.php';

// Notre Autoloader
spl_autoload_register("App\myAutoloader");

function myAutoloader($class){
    $classExploded = explode("\\", $class);
    $class = end($classExploded);
    //echo "L'autoloader se lance pour ".$class;
    if(file_exists("../Core/".$class.".php")){
        include "../Core/".$class.".php";
    }
    if(file_exists("../Models/".$class.".php")){
        include "../Models/".$class.".php";
    }
}


//if (!file_exists('../config.php')) {
//    $controller = new InstallerController();
//    $controller->install();
//    exit();
//}

function slugToUrl($uri, $routes) {
    foreach ($routes as $route => $data) {
        $pattern = preg_replace('/\{[a-zA-Z0-9_]+\}/', '([^/]+)', $route);
        if (preg_match('#^' . $pattern . '$#', $uri, $matches)) {
            array_shift($matches);
            // Utiliser les noms de paramètres du route pour créer le tableau de paramètres
            $keys = [];
            preg_match_all('/\{([a-zA-Z0-9_]+)\}/', $route, $keys);
            $params = array_combine($keys[1], $matches);
            return [$route, $params];
        }
    }
    return [null, []];
}
$uri = $_SERVER["REQUEST_URI"];
if(strlen($uri) > 1)
    $uri = rtrim($uri, "/");
$uriExploded = explode("?",$uri);
$uri = $uriExploded[0];

if(file_exists("../Routes.yml")) {
    $listOfRoutes = yaml_parse_file("../Routes.yml");
} else {
    header("Internal Server Error", true, 500);
    die("Le fichier de routing ../Routes.yml n'existe pas");
}

list($requestedRoute, $params) = slugToUrl($uri, $listOfRoutes);

if(empty($listOfRoutes[$requestedRoute])) {
    header("Status 404 Not Found", true, 404);
    die("Page 404");
}

if(empty($listOfRoutes[$requestedRoute]["Controller"]) || empty($listOfRoutes[$requestedRoute]["Action"]) ) {
    header("Internal Server Error", true, 500);
    die("Le fichier routes.yml ne contient pas de controller ou d'action pour l'uri :".$uri);
}

$controller = $listOfRoutes[$requestedRoute]["Controller"];
$action = $listOfRoutes[$requestedRoute]["Action"];

//include "../Controllers/".$controller.".php";
if(!file_exists("../Controllers/".$controller.".php")){
    die("Le fichier controller ../Controllers/".$controller.".php n'existe pas");
}
include "../Controllers/".$controller.".php";

$controller = "App\\Controller\\".$controller;

if( !class_exists($controller) ){
    die("La class controller ".$controller." n'existe pas");
}
$objetController = new $controller();

if( !method_exists($controller, $action) ){
    die("Le methode ".$action." n'existe pas dans le controller ".$controller);
}
$objetController->$action($params);


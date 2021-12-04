<?php
require_once 'controllers/homeController.php';


$homeController = new homeController();


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';     // acción por defecto si no envían
}
    
$parameters = explode('/', $action);

switch ($parameters[0]) {
    case "home":
        $homeController->showHome();
        break;
}

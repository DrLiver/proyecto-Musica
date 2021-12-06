<?php
require_once 'controllers/homeController.php';
require_once 'controllers/songController.php';

$homeController = new homeController();
$songController = new songController();


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';     // acción por defecto si no envían
}
    
$parameters = explode('/', $action);

if (!isset($parameters[1])) {
    switch ($parameters[0]) {
        case "home":
            $homeController->showHome();
            break;
        case "manageSongs":
            $songController->manageSongsMenu();
            break;
        case "addSong":
            $songController->addSong();
            break;
        default:
            $homeController->show404();
            break;

    }
}
else {
    switch ($parameters[0]) {
        case "editSong":
            $songController->editSong($parameters[1]);
            break;
        default:
            $homeController->show404();
            break;
    }
}

<?php
    require_once "libraries/Router.php";
    require_once "controllers/songController.php";
    require_once "controllers/albumController.php";

    $router = new Router();

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    $router->addRoute('songs', 'GET', 'songController', 'getSongs');
    $router->addRoute('songs/:ID', 'GET', 'songController', 'getSongs');
    $router->addRoute('songs/:ID', 'DELETE', 'songController', 'deleteSong');
    $router->addRoute('addSong', 'POST', 'songController', 'addSong');
    $router->addRoute('addSongNew', 'POST', 'songController', 'addSongNew');

    $router->addRoute('albums', 'GET', 'albumController', 'getAlbums');
    $router->addRoute('idAlbums', 'GET', 'albumController', 'getAlbumsID');
    $router->addRoute('albums/:ID', 'GET', 'albumController', 'getAlbums');
    $router->addRoute('albums/:ID', 'DELETE', 'albumController', 'deleteAlbum');
    $router->addRoute('addAlbum', 'POST', 'albumController', 'addAlbum');

    $router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

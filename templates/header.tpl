<!DOCTYPE html>
<html lang="en">
</head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{BASE_URL}/styles/style.css">
    <link rel="stylesheet" href="{BASE_URL}/styles/bootstrap.css">
    <script src="{BASE_URL}/scripts/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{BASE_URL}/styles/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
    </script>
<title>Document</title>
<body class="bg-light">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <h2 class="navbar-brand">Proyecto Personal</h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{BASE_URL}home">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Contenido
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{BASE_URL}albums">Albums</a></li>
                            <li><a class="dropdown-item" href="{BASE_URL}songs">Canciones</a></li>
                            <li><a class="dropdown-item" href="{BASE_URL}artists">Artistas</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{BASE_URL}aboutMe">Sobre Mí</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Administrador
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{BASE_URL}manageSongs">Gestionar Canciones</a></li>
                            <li><a class="dropdown-item" href="{BASE_URL}manageAlbums">Gestionar Albúms</a></li>
                            <li><a class="dropdown-item" href="{BASE_URL}manageUsers">Gestionar Usuarios</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

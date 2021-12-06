<?php
/* Smarty version 3.1.39, created on 2021-12-04 17:04:40
  from 'C:\xampp\htdocs\proyecto\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61ab91988f4ae2_81933478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '922315171fd21a2c52354014d2498c3dbedda095' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\templates\\index.html',
      1 => 1638633879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ab91988f4ae2_81933478 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
</head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/bootstrap.css">
    <?php echo '<script'; ?>
 src="scripts/bootstrap.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js" 
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
    <?php echo '</script'; ?>
>
<title>Document</title>
<body class="bg-light">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <h2 class="navbar-brand">Proyecto Personal</h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Contenido
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Albumes</a></li>
                            <li><a class="dropdown-item" href="#">Canciones</a></li>
                            <li><a class="dropdown-item" href="#">Artistas</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Sobre Mí</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    
</body>
</html><?php }
}

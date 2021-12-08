<?php
/* Smarty version 3.1.39, created on 2021-12-08 05:36:21
  from 'C:\xampp\htdocs\proyecto\templates\addAlbumMenu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b036451fa097_68512480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12a12b002fff3989c2a572f80eac23989ce8b4f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\templates\\addAlbumMenu.html',
      1 => 1638938178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b036451fa097_68512480 (Smarty_Internal_Template $_smarty_tpl) {
?><article class="section-content">
    <h1 class="display-6 subtitle">Añadir un Albúm Nuevo</h1>

    <form action="api/addAlbum" class="form">

    <div class="label-input-container">
        <label for="codigo_album" class="form-label">Código Deezer: </label>
        <input type="text" name="codigo_album" class="form-control" id="albumCode">
    </div>
    
    <div id="codeWarning" class="form-text text-danger">
    </div>
    
        <div class="form-text-album text-primary" id="load-spinner">
            Los códigos de los álbumes de Deezer son los que aparecen en la URL de la página del álbum. Por Ejemplo: 502723.
        </div>

        <div class="form-text-album text-secondary">
            ¿Quieres crear un albúm de forma manual? <a href="<?php echo BASE_URL;?>
addAlbum">Crea uno ahora</a>
        </div>

        <div class="label-input-container submit-container">
            <input type="button" value="Crear" class="btn btn-outline-dark submit-btn" id="add-album-submit">
        </div>

    </form>

</article><?php }
}

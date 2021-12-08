<?php
/* Smarty version 3.1.39, created on 2021-12-08 22:52:48
  from 'C:\xampp\htdocs\proyecto\templates\addSongNew.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b129303534b1_91415313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a7e75905fbcd87742e374cd41c1c22173a83b32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\templates\\addSongNew.tpl',
      1 => 1639000367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b129303534b1_91415313 (Smarty_Internal_Template $_smarty_tpl) {
?><article class="section-content">
        <h1 class="display-6 subtitle">Añadir una canción Nueva</h1>

        <div class="form-text-album text-primary" id="load-spinner">
            Los códigos de las canciones de Deezer son los que aparecen en la URL de la página de la canción. Por Ejemplo: 502723.
        </div>

        <form action="api/addAlbum" class="form">

        <div class="label-input-container">
            <label for="codigo_album" class="form-label">Código Deezer: </label>
            <input type="text" name="codigo_album" class="form-control" id="songCode">
        </div>
    
        <div id="codeWarning" class="form-text text-danger">
        </div>

        <div class="form-text-album text-secondary">
            ¿Quieres crear una canción de forma manual? <a href="<?php echo BASE_URL;?>
addSongOldMethod">Crea una ahora.</a>
        </div>

        <div class="form-text-album text-secondary message">
            Para añadir una canción, asegurate de que esté disponible su albúm en la base de datos. Si no es así, <a href="<?php echo BASE_URL;?>
addAlbum">Crea uno ahora.</a>
        </div>

        <div class="label-input-container submit-container">
            <input type="button" value="Crear" class="btn btn-outline-dark submit-btn" id="add-song-submit">
        </div>

    </form>

</article><?php }
}

<?php
/* Smarty version 3.1.39, created on 2021-12-07 23:43:46
  from 'C:\xampp\htdocs\proyecto\templates\addAlbumMenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61afe3a2734050_99754790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64e3ebb40b8042224047d7d0d08b0ba75f9ec9a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\templates\\addAlbumMenu.tpl',
      1 => 1638917023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61afe3a2734050_99754790 (Smarty_Internal_Template $_smarty_tpl) {
?><article class="section-content">
    <h1 class="display-6 subtitle">Añadir un Albúm Nuevo</h1>

    <form action="api/addAlbum" class="form">

    <div class="label-input-container">
        <label for="codigo_album" class="form-label">Código Deezer: </label>
        <input type="text" name="codigo_album" class="form-control" id="albumCode">
    </div>
    
    <div id="codeWarning" class="form-text text-danger">
    </div>
    
        <div class="form-text-album text-primary">
            Los códigos de los álbumes de Deezer son los que aparecen en la URL de la página del álbum.
        </div>

        <div class="form-text-album text-secondary">
            ¿Quieres crear un albúm de forma manual? <a href="<?php echo BASE_URL;?>
addAlbum">Crea uno ahora</a>
        </div>

        <div class="label-input-container submit-container">
            <input type="button" value="Crear" class="btn btn-outline-dark submit-btn" id="add-song-submit">
        </div>

    </form>

</article><?php }
}

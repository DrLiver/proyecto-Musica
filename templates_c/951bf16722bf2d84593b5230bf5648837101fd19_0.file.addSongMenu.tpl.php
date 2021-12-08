<?php
/* Smarty version 3.1.39, created on 2021-12-08 22:42:11
  from 'C:\xampp\htdocs\proyecto\templates\addSongMenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b126b313d152_79314979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '951bf16722bf2d84593b5230bf5648837101fd19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\templates\\addSongMenu.tpl',
      1 => 1638999729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b126b313d152_79314979 (Smarty_Internal_Template $_smarty_tpl) {
?><article class="section-content">
    <h1 class="display-6 subtitle">Añadir Una Cancion Nueva</h1>

    <form action="api/addSong" class="form">
        <div class="label-input-container">
            <label for="titulo_cancion" class="form-label">Título: </label>
            <input type="text" name="titulo_cancion" class="form-control" id="songTitle">
        </div>

        <div id="titleWarning" class="form-text text-danger">
        </div>

        <div class="label-input-container">
            <label for="album" class="form-label">Albúm: </label>
            <select name="album" id="songAlbum" class="form-control">
                <option value="">Selecciona un album</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['albums']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->titulo_album;?>
 - <?php echo $_smarty_tpl->tpl_vars['item']->value->artista;?>
</option>    
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>

        <div id="albumWarning" class="form-text text-danger">
        </div>

        <div class="form-text-album text-secondary message">
            ¿El albúm que buscas no está entre las opciones? <a href="<?php echo BASE_URL;?>
addAlbum">Crea uno ahora</a>
        </div>

        <div class="label-input-container submit-container">
            <input type="button" value="Crear" class="btn btn-outline-dark submit-btn" id="add-song-submit">
        </div>

    </form>

</article><?php }
}

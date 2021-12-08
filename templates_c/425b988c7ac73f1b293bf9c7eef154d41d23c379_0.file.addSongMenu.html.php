<?php
/* Smarty version 3.1.39, created on 2021-12-07 15:50:00
  from 'C:\xampp\htdocs\proyecto\templates\addSongMenu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61af74988fbf87_02828485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '425b988c7ac73f1b293bf9c7eef154d41d23c379' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\templates\\addSongMenu.html',
      1 => 1638888598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61af74988fbf87_02828485 (Smarty_Internal_Template $_smarty_tpl) {
?><article class="section-content">
    <h1 class="display-6 subtitle">Añadir Una Cancion Nueva</h1>

    <form class="form">
        <div class="label-input-container">
            <label for="titulo_cancion" class="form-label">Título: </label>
            <input type="text" name="titulo_cancion" class="form-control" id="songTitle">
        </div>

        <div id="titleWarning" class="form-text text-danger">
        </div>

        <div class="label-input-container">
            <label for="album" class="form-label">Albúm: </label>
            <select name="album" id="songAlbum" class="form-control">

            </select>
        </div>

        <div id="albumWarning" class="form-text text-danger">
        </div>

        <div class="label-input-container">
            <label for="duracion" class="form-label">Duración: </label>
            <input type=time min="0:00" max="100:59" name="duration" id="songDuration" class="form-control">
        </div>

        <div id="durationWarning" class="form-text text-danger">
        </div>

        <div class="label-input-container submit-container">
            <input type="button" value="Crear" class="btn btn-outline-dark submit-btn" id="add-song-submit">
        </div>

    </form>

</article><?php }
}

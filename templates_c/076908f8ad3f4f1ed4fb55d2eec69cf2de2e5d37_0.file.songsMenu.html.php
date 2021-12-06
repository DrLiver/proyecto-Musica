<?php
/* Smarty version 3.1.39, created on 2021-12-06 17:17:31
  from 'C:\xampp\htdocs\proyecto\templates\songsMenu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61ae379b253da2_61227029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '076908f8ad3f4f1ed4fb55d2eec69cf2de2e5d37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\templates\\songsMenu.html',
      1 => 1638807433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ae379b253da2_61227029 (Smarty_Internal_Template $_smarty_tpl) {
?><article class="section-content">
    <h1 class="display-6 subtitle">Gestionar Canciones Disponibles</h1>

    <div id="search-add-conteiner">
      <a href="<?php echo BASE_URL;?>
addSong" class="btn btn-outline-dark" id="add-song-btn">Añadir Cancion</a>
      <form class="d-flex">
          <input class="form-control me-2 bg-dark text-light" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark" type="submit">Search</button>
      </form>
    </div>

    <div id="songManage-table">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Artista</th>
                <th scope="col">Albúm</th>
                <th scope="col">acción</th>
              </tr>
            </thead>
            <tbody id="songManage-table-tbody">
              
            </tbody>
          </table>
    </div>

</article><?php }
}

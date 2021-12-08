<?php
/* Smarty version 3.1.39, created on 2021-12-07 23:34:28
  from 'C:\xampp\htdocs\proyecto\templates\albumsMenu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61afe1740d0197_39333649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aeb9dc5a9fb30120bf7881e878007be64092aea4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\templates\\albumsMenu.html',
      1 => 1638916466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61afe1740d0197_39333649 (Smarty_Internal_Template $_smarty_tpl) {
?><article class="section-content">
    <h1 class="display-6 subtitle">Gestionar Albums Disponibles</h1>

    <div id="search-add-conteiner">
      <a href="<?php echo BASE_URL;?>
addAlbum" class="btn btn-outline-dark" id="add-song-btn">Añadir Album</a>
      <form class="d-flex">
          <input class="form-control me-2 bg-dark text-light" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark" type="submit">Search</button>
      </form>
    </div>

    <div id="songManage-table">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Caratula</th>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Artista</th>
                <th scope="col">acción</th>
              </tr>
            </thead>
            <tbody id="albumManage-table-tbody">
              
            </tbody>
          </table>
    </div>

</article><?php }
}

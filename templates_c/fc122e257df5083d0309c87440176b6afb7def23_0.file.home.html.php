<?php
/* Smarty version 3.1.39, created on 2021-12-06 04:24:08
  from 'C:\xampp\htdocs\proyecto\templates\home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61ad82585811c2_77677933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc122e257df5083d0309c87440176b6afb7def23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\templates\\home.html',
      1 => 1638757898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ad82585811c2_77677933 (Smarty_Internal_Template $_smarty_tpl) {
?><article id="home-content">
    <h1 class="display-6 subtitle">Ultimos Lanzamientos</h1>

    <form class="d-flex">
        <input class="form-control me-2 bg-dark text-light" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Search</button>
    </form>

    <div id="table-home">
        <table class="table table-dark table-striped table-home">
            <thead>
                <tr>
                    <th scope="col">Caratula</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Artista</th>
                    <th scope="col">Año</th>
                    <th scope="col">Tipo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="files\images\philCollins.jpg" class="album-image" alt="but seriously"></td>
                    <td><a href="" class="element-table-link">...But Seriously</a></td>
                    <td><a href="" class="element-table-link">Phil Collins</a></td>
                    <td>1989</td>
                    <td>Albúm</td>
                </tr>
                
            </tbody>
        </table>
    </div>

</article><?php }
}

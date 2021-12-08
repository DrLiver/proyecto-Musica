<?php
require_once 'view.php';

    class albumView extends View {
        
        public function __construct() {
            parent::__construct();
        }

        public function showAlbumsManageMenu() {
            $this->smarty->display('header.tpl');
            $this->smarty->display('albumsMenu.html');
            $this->smarty->assign('script1', '<script src="scripts\ABMalbum.js"></script>');
            $this->smarty->display('footer.tpl');
        }

        public function addAlbumMenu() {
            $this->smarty->display('templates/header.tpl');
            $this->smarty->display('templates/addAlbumMenu.html');
            $this->smarty->assign('script1', '<script src="scripts\addAlbum.js"></script>');
            $this->smarty->display('templates/footer.tpl');
        }


    }
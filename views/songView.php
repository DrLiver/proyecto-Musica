<?php
    require_once 'view.php';

    class songView extends View {

        public function __construct() {
            parent::__construct();
        }

        public function displayMenu () {
            $this->smarty->display('templates/header.tpl');
            $this->smarty->display('templates/songsMenu.html');
            $this->smarty->assign('script1', '<script src="scripts/ABMsong.js"></script>');
            $this->smarty->display('templates/footer.tpl');
        }

        public function editSongMenu ($id) {
            $this->smarty->display('templates/header.tpl');
            $this->smarty->assign('script1', ' ');
            $this->smarty->display('templates/footer.tpl');
        }

        public function addSongMenu () {
            $this->smarty->display('templates/header.tpl');
            $this->smarty->display('templates/addSongMenu.html');
            $this->smarty->assign('script1', '<script src="scripts/addSong.js"></script>');
            $this->smarty->display('templates/footer.tpl');
        }
    }
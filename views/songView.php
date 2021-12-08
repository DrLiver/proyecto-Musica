<?php
    require_once 'view.php';

    class songView extends View {

        public function __construct() {
            parent::__construct();
        }

        public function showManageMenu () {
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

        public function addSongMenu ($albumsSelect) {
            $this->smarty->display('templates/header.tpl');
            $this->smarty->assign('albums',$albumsSelect);
            $this->smarty->display('templates/addSongMenu.tpl');
            $this->smarty->assign('script1', '<script src="scripts/addSong.js"></script>');
            $this->smarty->display('templates/footer.tpl');
        }

        public function addSongMenuNew () {
            $this->smarty->display('templates/header.tpl');
            $this->smarty->display('templates/addSongNew.tpl');
            $this->smarty->assign('script1', '<script src="scripts\addSongNew.js"></script>');
            $this->smarty->display('templates/footer.tpl');
        }
    }
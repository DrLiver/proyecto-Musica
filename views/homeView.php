<?php
    require_once 'view.php';

    class homeView extends View {

        public function __construct() {
            parent::__construct();
        }

        public function showHome() {
            $this->smarty->display('templates/header.tpl');
            $this->smarty->display('templates/home.html');
            $this->smarty->assign('script1', '<script src="scripts\loadContent.js"></script>');
            $this->smarty->display('templates/footer.tpl');
        }

        public function show404() {
            $this->smarty->display('templates/header.tpl');
            $this->smarty->display('templates/404.tpl');
            $this->smarty->assign('script1', ' ');
            $this->smarty->display('templates/footer.tpl');
        }
    }
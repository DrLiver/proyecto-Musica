<?php
    require_once 'view.php';

    class homeView extends View {

        public function __construct() {
            parent::__construct();
        }

        public function showHome() {
            $this->smarty->display('templates/index.html');
        }
    }
<?php
    require_once 'controller.php';
    require_once 'views/homeView.php';

    class homeController extends Controller {

        public function __construct() {
            parent::__construct();
            $this->view = new homeView();
        }

        public function showHome () {
            $this->view->showHome();
        }

        public function show404() {
            $this->view->show404();
        }

    }
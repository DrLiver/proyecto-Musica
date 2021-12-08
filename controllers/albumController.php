<?php

require_once 'ApiController.php';
require_once 'models/albumModel.php';
require_once 'views/albumView.php';

    class albumController extends ApiController {

        private $model;
        private $view;

        public function __construct() {
            parent::__construct();
            $this->model = new albumModel();
            $this->view = new albumView();
        }

        public function manageAlbumsMenu() {
            $this->view->showAlbumsManageMenu();
        }

        public function addAlbumMenu() {
            $this->view->addAlbumMenu();
        }

        public function getAlbums($action = []) {
            if (empty($action)) {
                $albums = $this->model->getAllAlbums();
                $this->apiView->response($albums, 200);
            }
            else {
                $id = $action[":ID"];
                $song = $this->model->getAlbum($id);
                if ($song) {
                    $this->apiView->response($song, 200);
                }
                else {
                    $this->apiView->response("no existe el objeto de la posicion $id", 404);
                }
            }
        }

        public function getAlbumsID () {
            $albums = $this->model->getAlbumsID();
                $this->apiView->response($albums, 200);
        }

        public function addAlbum() {
            $album = $this->getBody();
            $this->model->addAlbum($album);
        }

        public function deleteAlbum($action) {
            $id = $action[":ID"];
            $this->model->deleteAlbum($id);
            $this->apiView->response("se eliminó el albúm con exito", 200);
        }

    }
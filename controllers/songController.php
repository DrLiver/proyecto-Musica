<?php

    require_once 'views/songView.php';
    require_once 'models/songModel.php';
    require_once 'ApiController.php';

    class songController extends ApiController {

        private $view;

        public function __construct() {
            parent::__construct();
            $this->model = new songModel();
            $this->view = new songView();
        }

        public function manageSongsMenu () {
            $this->view->displayMenu();
        }

        public function editSong ($id) {
            $this->view->editSongMenu($id);
        }

        public function getSongs ($action = []) {
            if (empty($action)) {
                $songs = $this->model->getAllSongsForManage();
                $this->apiView->response($songs, 200);
            }
            else {
                $id = $action[":ID"];
                $song = $this->model->getSongForManage($id);
                if ($song) {
                    $this->apiView->response($song, 200);
                }
                else {
                    $this->apiView->response("no existe el objeto de la posicion $id", 404);
                }
            }
        }

        public function deleteSong ($action) {
            $id = $action[":ID"];
            $this->model->deleteSong($id);
            $this->apiView->response("se eliminó la cancion con exito", 200);

        }

        public function addSong () {
            $this->view->addSongMenu();
        }
    }
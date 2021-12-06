<?php
    require_once 'model.php';

    class songModel extends model {

        public function __construct() {
            parent::__construct();
        }

        public function getAllSongsForManage() {
            $query = $this->db->prepare("SELECT a.id,a.titulo_cancion,b.artista,b.titulo_album FROM cancion a INNER JOIN album b ON a.id_album = b.id");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }

        public function getSongForManage($id) {
            $query = $this->db->prepare("SELECT a.id,a.titulo_cancion,b.artista,b.titulo_album FROM cancion a INNER JOIN album b ON a.id_album = b.id WHERE a.id=?");
            $query->execute(array($id));
            return $query->fetch(PDO::FETCH_OBJ);
        }

        public function deleteSong($id) {
            $query = $this->db->prepare("DELETE FROM cancion WHERE id=?");
            $query->execute(array($id));
        }

    }
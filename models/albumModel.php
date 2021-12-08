<?php

    class albumModel extends Model {

        public function __construct() {
            parent::__construct();
        }

        public function getAllSimplified() {
            $query = $this->db->prepare('SELECT id,titulo_album,artista,id_artista FROM album ORDER BY titulo_album ASC');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }

        public function getAllAlbums () {
            $query = $this->db->prepare('SELECT url_cover,id,titulo_album,artista FROM album ORDER BY titulo_album ASC');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }

        public function getAlbumsID () {
            $query = $this->db->prepare('SELECT id FROM album');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }

        public function getAlbum ($id) {
            $query = $this->db->prepare('SELECT url_cover,id,titulo_album,artista FROM album WHERE id=?');
            $query->execute(array($id));
            return $query->fetch(PDO::FETCH_OBJ);
        }

        public function getAlbumArtist($artistID) {
            $query = $this->db->prepare('SELECT artista FROM album WHERE id_artista=?');
            $query->execute(array($artistID));
            return $query->fetch(PDO::FETCH_OBJ);
        }

        public function addAlbum($album) {
            $query = $this->db->prepare("INSERT INTO album (id,url_cover,titulo_album,artista,id_artista,genero,año) VALUES (?,?,?,?,?,?,?)");
            $query->execute(array($album->id,$album->url_cover,$album->titulo_album,$album->artista,$album->id_artista,$album->genero,$album->año));
        }

        public function deleteAlbum($id) {
            $query = $this->db->prepare("DELETE FROM album WHERE id=?");
            $query->execute(array($id));
        }

    }
<?php

    class model {
        protected $db;

        public function __construct() {
            $this->db = new PDO('mysql:host=localhost;dbname=music_proyect', 'root', '');
        }

        public function bringBasicElementsData () {
            $query = $this->db->prepare('SELECT a.*,b.*,c* FROM album a INNER JOIN cancion b  INNER JOIN elemento_base c ON a.id = b.id = c.id');
        }
    }
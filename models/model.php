<?php

    class model {
        protected $db;

        public function __construct() {
            $this->db = new PDO('mysql:host=localhost;dbname=u155799243_proyectMusic', 'u155799243_admin', 'mMa=7m?7#:9');
        }

        
    }
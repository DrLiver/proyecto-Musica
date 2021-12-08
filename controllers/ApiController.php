<?php
require_once 'views/ApiView.php';

abstract class ApiController {
    protected $apiView;
    protected $data; 

    public function __construct() {
        $this->apiView = new apiView();
        $this->data = file_get_contents("php://input"); 
    }

    function getBody(){ 
        return json_decode($this->data); 
    }  
}


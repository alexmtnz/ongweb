<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propuestas extends Front_Controller {

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {

        $this->left_sidebar="left_default.php";
        //$this->right_sidebar="right_default.php";
        $this->set_template("content_default");
        prettyPrint($this->context);
        parent::renderView();

    }

    public function prueba($data){
print_r($data);
        parent::renderView();
    }
}

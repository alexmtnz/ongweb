<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backmain extends Front_Controller {

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {

        $this->load->view('welcome_message');
    }
}

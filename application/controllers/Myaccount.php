<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Myaccount extends Front_Controller {

    public function __construct()
    {

        parent::__construct();

        $userdata = $this->session->userdata;


        if(!isset($userdata['logged_in']) || $userdata['logged_in']!=true ){
            redirect("login");
        }

    }

    public function index()
    {

        // user object logged = this->context['user']
        $this->addCSS(array(
            "customizer/shop-pages-customizer.css"
        ));

        $this->set_vars(array(
            "active_sidebar" => 1
        ));
        $this->right_sidebar="sidebaraccount";

        print_r($this->context['user']);

        //set_template pone el contenido
        $this->set_template("account/myaccount");
        //añadir variables a todas las templates @ver: header_default


        parent::renderView();
    }

    public function mispropuestas(){


        $this->addCSS(array(
            "customizer/shop-pages-customizer.css"
        ));
        $this->set_vars(array(
            "active_sidebar" => 2
        ));
        $this->right_sidebar="sidebaraccount";

        print_r($this->context['user']);

        $this->load->model("Propuestacampana");

        $user_propuestas = $this->Propuestacampana->get_propuestas_by_user($this->context['user']->id_user);



        $this->set_vars(array(
            "user_propuestas" => $user_propuestas
        ));

        //set_template pone el contenido
        $this->set_template("account/myaccount");
        //añadir variables a todas las templates @ver: header_default

        parent::renderView();
    }


}

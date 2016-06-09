<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Auth extends Front_Controller {

    public function __construct()
    {

        parent::__construct();

    }

    public function index()
    {
        $this->load->model("User");
        $this->User->email="miau";
        $this->User->dni="miau";
        $this->User->password="miau";
        $this->User->nombre="miau";
        $this->User->apellido1="miau";


        //sidebars en la carpeta viewS/SIDEBAR
     //   $this->left_sidebar="left_default.php";
      //  $this->right_sidebar="right_default.php";


        //set_template pone el contenido
        $this->set_template("login");



        $this->load->model('HelperForm');


        $form_data=array(
            'class' => 'form-box login-form form-validator',
            'id' => 'myform',
            'title' => "login form",
            "action" => "auth/login"
        );

        $this->HelperForm->fields_form = array(
            'legend' => array(
                'title' => ('Blog Post'),
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => 'Your email',
                    'name' => 'email',
                    'value'=> "",
                    'size' => 60,
                    'required' => true,

                ),
                array(
                    'type' => 'password',
                    'label' => 'your password',
                    'name' => 'password',
                    'value'=> "",
                    'size' => 60,
                    'required' => true,

                ),
            ),
            'submit' => array(
                'title' => 'Save',
                'class' => 'button'
            )
        );

        $form=  $this->HelperForm->generateForm($form_data);
        //añadir variables a todas las templates @ver: header_default
        $this->set_vars(
            array(
            "form_login"=> $form
             ));



        parent::renderView();
    }


    public function login(){
          $this->load->model("user");
          $this->load->library("session");


         $mail = $this->input->post('email');
         $pass= $this->input->post('password');

          $user = new User();
        $result=$user->check_user_password($mail,$pass);
        prettyPrint($result);
            if($result!=false){
                $loaduser = $user->get($result->id_user);

                $newdata = array(
                    'id_user'=> $loaduser->id_user,
                    'username'  => $loaduser->nombre,
                    'email'     => $loaduser->email,
                    "start" => new DateTime(),
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($newdata);

            }
      redirect("myaccount");
    }


    public function register(){
        $this->load->model("User");

        //sidebars en la carpeta viewS/SIDEBAR
        //   $this->left_sidebar="left_default.php";
        //  $this->right_sidebar="right_default.php";


        //set_template pone el contenido
        $this->set_template("register");



        $this->load->model('HelperForm');

        $form_data=array(
            'class' => 'form-box login-form form-validator',
            'id' => 'myform',
            'title' => "register form",
            "action" => "auth/authregister"
        );

        $this->HelperForm->fields_form = array(

            'input' => array(
                array(
                    'type' => 'text',
                    'label' => 'tu email',
                    'name' => 'email',
                    'value'=> "",
                    'size' => 60,
                    'required' => true,

                ),
                array(
                    'type' => 'password',
                    'label' => 'your password',
                    'name' => 'password',
                    'value'=> "",
                    'size' => 60,
                    'required' => true,

                ),
                array(
                    'type' => 'text',
                    'label' => 'tu nombre',
                    'name' => 'nombre',
                    'value'=> "",
                    'size' => 60,
                    'required' => true,

                ),
                array(
                    'type' => 'text',
                    'label' => 'tu apellido',
                    'name' => 'apellido',
                    'value'=> "",
                    'size' => 60,
                    'required' => true,
                ),
                array(
                    'type' => 'text',
                    'label' => 'tu segundo apellido',
                    'name' => 'apellido2',
                    'value'=> "",
                    'size' => 60,

                ),
                array(
                    'type' => 'date',
                    'label' => 'fecha de nacimiento',
                    'name' => 'nacimiento',
                    'value'=> "",
                    'size' => 60,

                ),
                array(
                    'type' => 'text',
                    'label' => 'tu telefono',
                    'name' => 'telefono',
                    'value'=> "",
                    'size' => 60,
                    'required' => true,
                ),
            ),
            'submit' => array(
                'title' => 'Save',
                'class' => 'button'
            )
        );

        $form=  $this->HelperForm->generateForm($form_data);
        //añadir variables a todas las templates @ver: header_default
        $this->set_vars(
            array(
                "form_register"=> $form
            ));


        parent::renderView();
    }

    public function authregister(){
        $user = new User();

        $user->email = $this->input->post('email');
        $user->password= md5($this->input->post('password'));
        $user->nombre= $this->input->post('nombre');
        $user->apellido1= $this->input->post('apellido');
        $user->apellido2 = $this->input->post('apellido2');
        $user->fechaNacimiento = $this->input->post('nacimiento');
        $user->numeroTelefono =  $this->input->post('telefono');

        $user->save();
    }

    public function logout(){
        $this->load->library("session");
        unset(
            $_SESSION['id_user'],
            $_SESSION['username'],
            $_SESSION['email'],
            $_SESSION['start'],
            $_SESSION['logged_in']
        );
        redirect("login");
    }


}

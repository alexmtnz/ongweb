<?php
defined('BASEPATH') OR exit('No direct script access allowed');




class Welcome extends Front_Controller {

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

	//	print_r($this->User->save(3));


		// por defecto a true, solo ejemplo
		$this->display_header=true;
		$this->display_footer=true;

		//cambiar header and footer, por defecto los default
		// $this->header_tpl='';
		//this->footer_tpl='noseke.php';


		//sidebars en la carpeta viewS/SIDEBAR
		$this->left_sidebar="left_default.php";
		$this->right_sidebar="right_default.php";


		//set_template pone el contenido
		$this->set_template("content_default");

		//añadir variables a todas las templates @ver: header_default
		$this->set_vars(array(
		"variable_hola"=> "hola hamijos"
		));

		//añadir css y js SOLO A este controlador carpeta public/@css o @js
		$this->addCSS(array(
			"css1...","css2..."
		));
		$this->addCSS(array(
			"CSS3...."
		));
		// añadir js..
		$this->addJS(array(
			"JS...."
		));


		parent::renderView();
	}
}

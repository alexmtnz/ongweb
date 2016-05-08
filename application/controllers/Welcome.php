<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Front_Controller {

	public function index()
	{
		print_r(base_url());
		$this->load->view('welcome_message');
	}
}

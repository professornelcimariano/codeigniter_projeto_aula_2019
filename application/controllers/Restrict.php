<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Restrict extends CI_Controller{
	
	public function index(){

		//Carregamento do helper form
		$this->load->helper('form');
		$this->template->show("restrict.php");
		// echo "Restrict";
	}
	
}

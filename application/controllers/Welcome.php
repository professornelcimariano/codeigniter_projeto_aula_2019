<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Welcome extends CI_Controller
{
	public function index()
	{
		$this->load->view('welcome_message');
		// echo "Welcome, página carregada";
	}
}

	/* public function hello()
	{
		echo "Olá, bem vindo ao codeigniter!";
	}

	public function nome($nome, $sobrenome)
	{
		echo "Olá, ".$nome." " .$sobrenome." bem vindo ao codeigniter!";
	} */

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library("session");
	}

	public function index()
	{
		$dados = array(
			'dado' => array(
				'nome' => "Nelci",
				'sobrenome' => "Mariano"
			)
		);
		//Verifica se a Sessão Existe
		if (!$this->session->userdata("usu_email")) {
			header("Location: " . base_url() . "restrict");
		} else {
			$this->admintemplate->show('admin/dashboard', $dados);
		}
	}
}

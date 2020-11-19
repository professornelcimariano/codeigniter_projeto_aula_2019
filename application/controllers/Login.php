<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        // session_start();
    }

    public function index()
    {
        //Function index
    }
    public function formLogin()
    {
        //Carregamento da library form_validation
        $this->load->library('form_validation');
        //Regras de campos obrigatórios
        $this->form_validation->set_rules("usu_email", "E-mail", "required");
        $this->form_validation->set_rules("usu_senha", "Senha", "required");

        //Se não for validado exibe o formulário com a mensagem
        if ($this->form_validation->run() == false) {
            $this->template->show("restrict.php");
        } else {
            //Capturando os dados do formulário
            $data = $this->input->post();
            // var_dump($data);
            $senhaMD5 = MD5($data['usu_senha']);
            // MD5 é para criptogragar a senha
            //Inicializando o model
            $this->load->model("Login_model");
            $result = $this->Login_model->verificarLogin($data['usu_email'], $senhaMD5);
            //Chamar a função do model para verificar o login e a senha
            if (!empty($result)) {
                $usu_id = $result->usu_id;
                $usu_nome = $result->usu_nome;
                $usu_email = $result->usu_email;
                //Criando as sessões
                $this->session->set_userdata("usu_id", $usu_id);
                $this->session->set_userdata("usu_nome", $usu_nome);
                $this->session->set_userdata("usu_email", $usu_email);
                //Pegar o valor da sessão (linha abaixo)
                //$this->session->userdata("usu_nome");
                redirect (base_url() .'admin/dashboard');
                // echo "com login";
            } else {
                $this->template->show('restrict');
                // echo "Sem login";
            }
        }
    }

    public function logoff(){
		$this->session->sess_destroy();
		header("Location: " . base_url() . "restrict");
	}
}

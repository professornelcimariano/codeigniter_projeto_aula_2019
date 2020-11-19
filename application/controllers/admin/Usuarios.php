<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Usuarios extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
    }
    //http://localhost/codeigniter_projeto/admin/Usuarios
    public function index()
    {
        //Carregamento da library form_validation
        $this->load->library('form_validation');
        //Verifica se a Sessão Existe
        if (!$this->session->userdata("usu_email")) {
            header("Location: " . base_url() . "restrict");
            // echo "não existe a sessão";
        } else {
            //Carrega o layout do formulário de cadastro de usuários
            $this->admintemplate->show('admin/system/usuarios/cadastro');
        }
    }
    public function cadastrar()
    {
        //Carregamento da library form_validation
        $this->load->library('form_validation');
        //Regras de campos obrigatórios
        $this->form_validation->set_rules("usu_nome", "Nome", "required");
        $this->form_validation->set_rules("usu_email", "E-mail", "required");
        $this->form_validation->set_rules("usu_senha", "Senha", "required");
        //Se não for validado exibe o formulário com a mensagem
        if ($this->form_validation->run() == false) {
            $this->admintemplate->show("admin/system/usuarios/cadastro");
        } else {
            //Capturando os dados do formulário
            $data = $this->input->post();
            // var_dump($data);
            $senhaMD5 = MD5($data['usu_senha']);
            $data['usu_senha'] = $senhaMD5;
            // var_dump($data);
            // MD5 é para criptogragar a senha
            //Inicializando o model
            $this->load->model("Usuarios_model");
            $this->Usuarios_model->cadastrar($data);
            // $this->admintemplate->show("admin/system/usuarios/cadastro");
            $this->registros();
        }
    }

    public function registros()
    {
        //Fazer o carregamento dos dados
        $this->load->model("Usuarios_model");
        $usuarios = $this->Usuarios_model->registros();
        // var_dump($usuarios);
        $data = array(
            'usuarios' => $usuarios
        );
        $this->admintemplate->show("admin/system/usuarios/registros", $data);
    }
}

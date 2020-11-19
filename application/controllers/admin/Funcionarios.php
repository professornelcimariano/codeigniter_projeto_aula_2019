<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Funcionarios extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
    }
    public function index()
    {
        $this->load->library('form_validation');
        if (!$this->session->userdata("usu_email")) {
            header("Location: " . base_url() . "restrict");
        } else {
            $this->admintemplate->show('admin/system/funcionarios/cadastro');
        }
    }

    public function cadastrar()
    {

        $this->load->library('form_validation');
        $this->form_validation->set_rules("fun_nome", "Nome", "required");
        $this->form_validation->set_rules("fun_email", "E-mail", "required");
       
        if ($this->form_validation->run() == false) {
            $this->admintemplate->show("admin/system/funcionarios/cadastro");
        } else {
            $data = $this->input->post();
            $this->load->model("Funcionarios_model");
            $this->Funcionarios_model->cadastrar($data);
            $this->registros();
        }
    }
    
    public function registros()
    {
        $this->load->model("Funcionarios_model");
        $funcionarios = $this->Funcionarios_model->registros();
        $data = array(
            'funcionarios' => $funcionarios
        );
        $this->admintemplate->show("admin/system/funcionarios/registros", $data);
    }
}

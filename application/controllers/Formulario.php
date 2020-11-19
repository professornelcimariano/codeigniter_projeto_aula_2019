<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Formulario extends CI_Controller
{
    public function index()
    {
        $this->load->helper(['form']);
        $this->load->library('form_validation');
        $this->load->model('Formulario_model');
        $forms = $this->Formulario_model->exibirDados();
        $data = array(
            "forms" => $forms
        );
        $this->load->view("formulario", $data);
    }


    public function cadastro()
    {
        $this->load->helper(['form', 'url']);
        $this->load->library('form_validation');

        $this->form_validation->set_rules('for_nome', 'Nome', 'required');
        $this->form_validation->set_rules('for_cidade', 'Cidade', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view("formulario");
        } else {
            $data = $this->input->post();
            $this->load->model('Formulario_model');
            $this->Formulario_model->inserir($data);
            echo "Cadastro efetuado";
        }
    }
}

<?php
class Funcionarios_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //Cadastrar na base de dados
    public function cadastrar($data)
    {
        $this->db->insert("funcionarios", $data);
    }
    //Exibir os registros do banco
    public function registros()
    {
        $this->db
        ->from("funcionarios")
        ->order_by("fun_id", "desc");
		return $this->db->get()->result_array();
    }
}
/* 
    $this->db
    ->from("usuarios")
    ->where("usu_id", $this->session->userdata("usu_id"));
    return $this->db->get()->result_array();
 */


    /*  public function inserir($data) {
		$this->db->insert("formulario", $data);
    }

    public function qtd_registros()
    {
        $this->db
            ->from("formulario");          

        $result = $this->db->get();
        return $result->num_rows();
    } */


<?php
class Formulario_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function inserir($data) {
		$this->db->insert("formulario", $data);
    }

    public function exibirDados()
    {
        $this->db
            ->from("formulario");

		return $this->db->get()->result_array();
    }

    public function qtd_registros()
    {
        $this->db
            ->from("formulario");          

        $result = $this->db->get();
        return $result->num_rows();
    }
   
}
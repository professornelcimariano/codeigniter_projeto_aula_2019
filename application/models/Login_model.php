<?php
class Login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    //Verificar login e senha
    public function verificarLogin($email, $senha)
    {
        //Select na base de dados
        $this->db
            ->from("usuarios")
            ->where("usu_email", $email)
            ->where("usu_senha", $senha);
        //$result -> armazenará os registros
        $result = $this->db->get();
        //$result->num_rows -> Qtd de registros encontrada no #result
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }
}

    //Cadastrar na base de dados
   /*  public function inserirLogin($data)
    {
        $this->db->insert("usuarios", $data);
    } */


    /*  public function inserir($data) {
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
    } */


<?php
class Products_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function selectProducts(){

        $this->db->from("produtos");
		return $this->db->get()->result_array();
    }

    public function selectProductsByIds($ids){
        $this->db
        ->from("produtos")
        ->where_in("id", $ids);
        return $this->db->get()->result_array();
    }
}
/* 

    
     /*    
        $sql = "SELECT * FROM produtos WHERE id IN (".$ids.")";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function cadastrar($data)
    {
        $this->db->insert("usuarios", $data);
    }

    //Exibir os registros do banco
    public function registros()
    {
        $this->db
        ->from("usuarios")
        ->order_by("usu_id", "desc");
		return $this->db->get()->result_array();
    }
*/


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


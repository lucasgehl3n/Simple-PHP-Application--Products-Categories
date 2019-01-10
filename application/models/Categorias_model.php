<?php

class Categorias_model extends CI_Model {

	public function listaCategorias(){
		return $this->db->get('categoria')->result_array();
	}

}	

?>


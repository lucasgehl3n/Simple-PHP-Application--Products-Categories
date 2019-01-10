<?php

class Categorias_model extends CI_Model {

	public function listaCategorias(){
		return $this->db->get('categoria')->result_array();
	}

	public function inserirCategoria($categoria){

		$data = array(
			'nome' => $categoria['nome'],
			'descricao' => $categoria['desc']
			//'caminhoImagem'
		);


		if ($this->db->insert('categoria', $data)) {
			return true;
		} else {
			return false;
		}
	}
	
	public function buscaCategoriaPorId($idCategoria){

		$query = $this->db->where('idCategoria',$idCategoria)->get('categoria')->result_array();
		return $query[0]; 
	}

	public function editaCategoria($categoria){

		$data = array(
			'nome' => $categoria['nome'],
			'descricao' => $categoria['desc']
		);
		
		$this->db->where('idCategoria',$categoria['idCategoria'])->update('categoria', $data);
	
		if($this->db->affected_rows()>0){ 
			return 1; 
		}
		
		return 0;			
	}

	public function excluirCategoria($idCategoria){

	$this->db->where('categoria_idCategoria',$idCategoria);
	$this->db->delete('produto'); //deleta associações de produtos */


		$this->db->where('idCategoria',$idCategoria);
		$query= $this->db->delete('categoria'); 

		if($this->db->affected_rows()>0){ 
			return 1; 
		}


		return 0;
	}

}

?>


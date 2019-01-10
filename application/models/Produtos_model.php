<?php

class Produtos_model extends CI_Model {

	public function inserirProduto($produto){

		if(!isset($_SESSION)){
			$this->load->library('session');
		}

		if(null!==($this->session->userdata('usuario'))){

			$data = array(
				'nome' => $produto['nomeProduto'],
				'valor' => $produto['valor'],
				'categoria_idCategoria' => $produto['categoriaProduto'],
				'quantidade' => $produto['quantidade'],
				'descricao' => $produto['descProduto']
			);


			if ($this->db->insert('produto', $data)) {
				return true;
			} 

			else {
				return false;
			}

		}
	}

	public function buscaProdutoPorCategoria($idCategoria){
		return $this->db->where('categoria_idCategoria',$idCategoria)->get('produto')->result_array();
	}


	public function buscaProdutoPorId($idProduto){
		$query = $this->db->where('idProduto',$idProduto)->get('produto')->result_array();
		return $query[0]; //nesse caso se retorna sempre uma única linha, pois ID é chave primária.
	}
	

	public function excluirProduto($idProduto){
		$this->db->where('idProduto',$idProduto);
		$query = $this->db->delete('produto');

		if($this->db->affected_rows()>0){ // verifica se a exclusão ocorreu. Ele sempre retornaria true se fosse utilizado o teste simples
			return 1; 
		}
		return 0;
	}


	public function editarProduto($produto){

		$data = array(
			'nome' => $produto['nomeProduto'],
			'valor' => $produto['valor'],
			'descricao' => $produto['descProduto'],
			'quantidade' => $produto['quantidade']
		);

		$this->db->where('idProduto',$produto['idProduto'])->update('produto', $data) ;

		if($this->db->affected_rows()>0){ 
			return 1; 
		}
		
		return 0;			
	}

	public function buscaProdutoPorNome($nomeProduto){
		return $this->db->like('nome',$nomeProduto,'both')->get('produto')->result_array(); 
		// qualquer produto que contenha esse texto
	}

}
?>


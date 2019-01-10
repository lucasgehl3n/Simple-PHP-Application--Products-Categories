<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {

	public function listaOpcoes(){
		$this->load->model('Categorias_model');
		$data['categorias'] = $this->Categorias_model-> listaCategorias();
		$this->load->view('header');
		$this->load->view('produtos/produtos', $data);
	}

	public function inserirProduto(){

		$produto['nomeProduto'] = $this->input->post('nomeProduto');
		$produto['descProduto'] = $this->input->post('descProduto');
		$produto['categoriaProduto'] = $this->input->post('categoriaProduto');
		$produto['quantidade'] = $this->input->post('quantidade');

		$valor1= $this->input->post('valor1'); 
		$valor2 = $this->input->post('valor2');
		$produto['valor']=$valor1.".".$valor2;//Os valores serão convertidos em uma variável só, para serem submetidos ao banco já no formato ideal. 

		//$produto['caminhoImagem'] = $this->input->post('');
		$this->load->model('Produtos_model');
		$this->Produtos_model->inserirProduto($produto);
		$this->buscaProdutoPorCategoria();
	}

	public function buscaProdutoPorCategoria(){
		$idCategoria = $this->input->post('categoriaProduto');
		$this->load->model('Produtos_model');
		$data['produtos'] = $this->Produtos_model->buscaProdutoPorCategoria($idCategoria);
		$this->load->view('header');
		$this->load->view('produtos/buscaProdutos',$data);

	}


}

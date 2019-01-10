<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

	public function listaOpcoes(){
		$this->load->model('Categorias_model');
		$data['categorias'] = $this->Categorias_model-> listaCategorias();
		$this->load->view('header');
		$this->load->view('categorias/categorias', $data);
	}

	public function chamaNovaCategoria(){
		$this->load->view('header');
		$this->load->view('categorias/novaCategoria');
	}

	public function novaCategoria(){
		$categoria['nome'] = $this->input->post('nomeCategoria');
		$categoria['desc'] = $this->input->post('descCategoria');
		$this->load->model('Categorias_model');
		$this->Categorias_model->inserirCategoria($categoria);
		$this->listaOpcoes();
	}

	public function chamaEditarCategoria(){
		$idCategoria = $this->input->post('idCategoria');
		$this->load->model('Categorias_model');
		$data['categoria'] = $this->Categorias_model->buscaCategoriaPorId($idCategoria);
		$this->load->view('header');
		$this->load->view('categorias/editaCategoria', $data);
	}

	public function editaCategoria(){
		$categoria['idCategoria'] = $this->input->post('idCategoria');
		$categoria['nome'] = $this->input->post('nomeCategoria');
		$categoria['desc'] = $this->input->post('descCategoria');

		$this->load->model('Categorias_model');
		$query = $this->Categorias_model->editaCategoria($categoria);
		$this->listaOpcoes();

	}

	public function excluirCategoria(){
		$idCategoria = $this->input->post('idCategoria');
		$this->load->model('Categorias_model');
		$query = $this->Categorias_model->excluirCategoria($idCategoria);


		if($query==1){
			$this->listaOpcoes();
		}

		else{
			echo "Erro!";
			$this->listaOpcoes();
		}
	}

}
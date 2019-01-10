<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/css/uikit.min.css" />

  <!-- UIkit JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/js/uikit.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/js/uikit-icons.min.js"></script>

  <style type="text/css">

  @media only screen and (max-width: 768px) {

    /* Para celulares: */

    .col-*{
      width: 100% !important;

    }

    .offset-*{
      width: 0% !important;
    }  

    .desktop{
      display: none;
    }
  }


  body,html{ 
    background-color: #FFE454;
    width: 100%;
    height: 100%;
  }

 }

</style>
</head>

<body>
  <nav class="navbar navbar-dark bg-dark navbar-expand-lg ">
    <a class="navbar-brand" href="#"><b>CORSAIR</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url().'index.php/Produto/listaOpcoes'?>">Produtos<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url().'index.php/Categoria/listaOpcoes'?>">Categorias</a>
        </li>
      </ul>

      <form class="form-inline mr-sm-2" action="<?= base_url().'index.php/Produto/buscaProdutoPorNome/'?>"  method="post">

        <input type="text" class="form-control mr-sm-2" id="campoPesquisa" name="campoPesquisa" placeholder="Pesquisar produto..." aria-label="Search" required>
        
        <input class="btn btn-outline-light my-2 my-sm-0" type="submit" value="Buscar"></button>
      </form>
    </div>
  </nav>


  <br/>
</body>
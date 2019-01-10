<!DOCTYPE html>
<html>
<head>
	<title>Gerenciamento de produtos</title>
</head>
<body>

<div class="uk-container uk-container-medium">
	<div class="uk-card uk-card-default col-md-12 uk-card-hover ">
		<div class="uk-card-header">



			<div class="uk-grid-small uk-flex-middle" uk-grid>

				<div class="uk-width-expand">

					<h1 class="uk-card-title uk-margin-remove-bottom">Produtos</h1>
					<p class="uk-text-meta uk-margin-remove-top">
					</div>
				</div>
			</div>

			<div class="uk-card-body">
				<ul class="uk-tab" uk-switcher="connect: .switcher-container">
					<li><a href="#">Pesquisar</a></li>

					<li><a href="#">Inserir</a></li>
				</ul>

				<ul class="uk-switcher switcher-container uk-margin">

				<!-- A partir daqui, se dividirá basicamente em duas etapas, sendo elas a aba de pesquisa e a aba de inserção, separadas no código. -->


					<li>
						<!-- Etapa 1: Esse trecho de código permite a pesquisa dos produtos por categorias específicas -->


						<br/>
						<form action="<?= base_url().'index.php/Produto/buscaProdutoPorCategoria/'?>" method="post">
							<div class="row">
								<div class="col-md-6">
									<select class="uk-select uk-form-large"  id="categoriaProduto" name="categoriaProduto" required>

										<option disabled selected>Pesquisar por categoria...</option>
										<?php foreach ($categorias as $categoriaAtual) {
											?>											
											<option value="<?= $categoriaAtual['idCategoria'] ?>">
												<?=$categoriaAtual['nome']?>
											</option>

										<?php									} 
										?>
									</select>
								</div>
								
								<div class="col-md-2">
									<input type="submit" class="uk-button uk-button-large uk-button-secondary col-md-12" value="Pesquisar">

								</div>

								<div class="offset-1 col-md-3">
									<img src="https://cdn.worldvectorlogo.com/logos/corsair-3.svg" class="desktop" style="width:50%; height: auto">

								</div>

							</div>
						</form>
						<br/>
						<br/>
					</li>













					<li>
						<!-- Etapa 2: destinado ao cadastro de novos produtos. 

						As demais operações do crud ficam disponíveis através da efetuação da pesquisa por categorias ou por nome(cabeçalho) -->


						<form action="<?= base_url().'index.php/Produto/inserirProduto/'?>" method="post">
							<div class="row">
								<div class="col-md-6">

									<div class="form-group ">

										<legend class="uk-legend">Inserir Produto</legend>
										<br/>

										<input type="text" class="uk-input" id="nomeProduto" name="nomeProduto" placeholder="Nome*" required>
										<p/>

										<input type="text" class="uk-input" id="descProduto" name="descProduto" placeholder="Descrição*" required>
										<p/>

										<input type="text" class="uk-input" id="quantidade" name="quantidade" placeholder="Quantidade disponível*" required>
										<p/>

										<div class="row">

											<div class="col-md-6">
												<input type="text" class="uk-input col-md-2" id="valor1" name="valor1" placeholder="REAIS*" required>
											</div>

											<div class="col-md-6">

												<input type="text" class="uk-input col-md-2 " id="valor2" name="valor2" placeholder="CENTAVOS*" required>

											</div>

										</div>


										<p/>

										<select class="uk-select" id="categoriaProduto" name="categoriaProduto" required>
											<option disabled selected>Categoria...</option>
											<?php foreach ($categorias as $categoriaAtual) {
												?>											
												<option value="<?= $categoriaAtual['idCategoria'] ?>">
													<?=$categoriaAtual['nome']?>
												</option>

<?php									} 
?>
										</select>

									</div>



									<div class="form-group">
										<input type="submit" class="uk-button col-md-4  uk-button-secondary ">
									</div>


								</div>
								<div class="col-md-4 offset-1">
									<br/>
									<img src="https://www.corsair.com/corsairmedia/sys_master/productcontent/blog_Introducing-The-New-Sails-Logo-Content-1.png">

								</div>
							</div>

						</form>
					</li>

				</ul>
			</div>
		</div>
<br/>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Categorias</title>
	<style type="text/css">

	.imagemCabec{
		width: auto;
		max-height: 120px;
	}

</style>
</head>

<body>
	<div class="uk-container uk-container-medium">
		
		<div class="uk-card uk-card-default col-md-12 uk-card-hover ">
			<div class="uk-card-header">


				<div class="uk-grid-small uk-flex-middle" uk-grid>
					<div class="uk-width-auto">
						<img class="imagem uk-border-rounded uk-transition-scale-up uk-transition-opaque imagemCabec" src="https://cwsmgmt.corsair.com/media/Corsair_logo_S_W_800px.png">
					</div>

					<div class="uk-width-expand">
						<h2 class="uk-card-title uk-margin-remove-bottom">Categorias</h2>
						<p class="uk-text-meta uk-margin-remove-top">Gerenciamento</p>

						<p class="uk-text-meta uk-margin-remove-top">
						</div>
					</div>
					
				</div>
				
				


				
				<div class="uk-card-body">
					<ul uk-accordion>
						<?php				for ($i=0; $i < count($categorias) ; $i++) {  

							if($i == 0){ ?> 									
								<li class="uk-open">
									<?php	
								}

								
								else{
									?>
									<li>
									<?php					} 
									
									?>
									<a class="uk-accordion-title uk-text-large "><?= $categorias[$i]['nome']?></a>

									<div class="uk-accordion-content">
										<div class="row">


											<div class="col-md-6">
												<h5><b>Descrição</b></h5>
												<h5><?=$categorias[$i]['descricao']?></h5>
											</div>


											<div class="col-md-2">

												<h5><b>Editar</b></h5>
												<p>

													<form action="<?= base_url().'index.php/Categoria/chamaEditarCategoria/'?>" method="post">
														<input type="hidden" name="idCategoria" id="idCategoria" value="<?= $categorias[$i]['idCategoria']?>">
														<button type="submit" uk-icon="icon: pencil; ratio: 1.5"></button>
													</form>
													
												</p>
											</div>


											<div class="col-md-2">
												<h5><b>Excluir</b></h5>
												<p>

													<form action="<?= base_url().'index.php/Categoria/excluirCategoria/'?>" method="post">
														<input type="hidden" name="idCategoria" value="<?= $categorias[$i]['idCategoria']?>">
														<button type="submit" uk-icon="icon: trash; ratio: 1.5"></button>
													</form>
													
												</p>

											</div>

											
										</div>
										
										<br/><br/>
										
									</li>
								<?php							} 
								?>
							</ul>

							<br/>
							<?= anchor('Categoria/chamaNovaCategoria', 'Nova Categoria', array('class'=>' uk-button uk-button-secondary col-md-3')); ?>
						</div>
						
						
						
					</div>
				</p>
			</div>

		</div>
	</div>
</body>
</html>

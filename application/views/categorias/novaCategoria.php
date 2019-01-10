<!DOCTYPE html>
<html>
<head>
	<title>Nova Categoria</title>
</head>

<body>
	<div class="uk-container uk-container-medium">
		<div class="uk-card uk-card-default col-md-12 uk-card-hover ">
			<div class="uk-card-header">



				<div class="uk-grid-small uk-flex-middle" uk-grid>

					<div class="uk-width-expand">

						<h1 class="uk-card-title uk-margin-remove-bottom">
							<b>Nova Categoria de Produtos</b> 
						</h1>
						<p class="uk-text-meta uk-margin-remove-top">
						</div>
					</div>
				</div>
				<div class="uk-card-body">
					<form action="<?= base_url().'index.php/Categoria/novaCategoria/'?>" method="post">
						<div class="row">
							<div class="col-md-6 offset-md-3">

								<div class="form-group ">

									<br/>									

									Nome
									<input type="text" class="uk-input" id="nomeCategoria" name="nomeCategoria" placeholder="Nome*" required>
									<p/>

									Descrição
									<input type="text" class="uk-input" id="descCategoria" name="descCategoria" placeholder="Descrição*" required>
									<p/>
								</div>

								<div class="form-group">
									<input type="submit" value="Criar categoria" class="uk-button uk-button-secondary col-md-4">
									<?= anchor('Categoria/listaOpcoes', 'Voltar', array('class'=>' uk-button uk-button-default col-md-3')); ?>

								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

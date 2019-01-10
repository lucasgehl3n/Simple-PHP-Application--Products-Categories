<!DOCTYPE html>
<html>
<head>
	<title>Editar Produto</title>
</head>

<body>
	<div class="uk-container uk-container-medium">
		<div class="uk-card uk-card-default col-md-12 uk-card-hover ">
			<div class="uk-card-header">



				<div class="uk-grid-small uk-flex-middle" uk-grid>

					<div class="uk-width-expand">

						<h1 class="uk-card-title uk-margin-remove-bottom">
							Editar Produto - <b><?= $produto['nome']?></b>
						</h1>
						<p class="uk-text-meta uk-margin-remove-top">
						</div>
					</div>
				</div>
				<div class="uk-card-body">
					<form action="<?= base_url().'index.php/Produto/editarProduto/'?>" method="post">
						<div class="row">
							<div class="col-md-6 offset-3">

								<div class="form-group ">

									<br/>

									<input type="hidden" class="uk-input" id="idProduto" name="idProduto" value="<?=$produto['idProduto']?>">

									Nome<input type="text" class="uk-input" id="nomeProduto" name="nomeProduto" placeholder="Nome*" required value="<?= $produto['nome']?>">
									<p/>
									Descrição
									<input type="text" class="uk-input" id="descProduto" name="descProduto" placeholder="Descrição*" value="<?= $produto['descricao']?>" required>
									<p/>

									Valor (R$)
									<input type="text" class="uk-input col-md-2" id="valor" name="valor" placeholder="Custo" value="<?= $produto['valor']?>" required>
									<p/>

									Quantidade atual
									<input type="text" class="uk-input col-md-2" id="quantidade" name="quantidade" placeholder="Custo" value="<?= $produto['quantidade']?>" required>
								</div>


								<p/>
								
								<div uk-form-custom="target: true">
									<input type="file">
									<input class="uk-input uk-form-width-medium" type="text" placeholder="Selecionar imagem" disabled>
								</div>
							</div>


							<div class="col-md-6 offset-3">
								<div class="form-group">
									<input type="submit" class="uk-button uk-button-secondary col-md-3">
									<?= anchor('Produto/listaOpcoes', 'Voltar', array('class'=>' uk-button uk-button-default col-md-3')); ?>
								</div>
							</div>
						</div>
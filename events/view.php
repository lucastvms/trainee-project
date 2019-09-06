<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Evento <?php echo $event['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome do Evento:</dt>
	<dd><?php echo $event['name']; ?></dd>

	<dt>CPF / CNPJ (Responsável):</dt>
	<dd><?php echo $event['cpf_cnpj']; ?></dd>

	<dt>Data:</dt>
	<dd><?php echo $event['date']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Endereço:</dt>
	<dd><?php echo $event['address']; ?></dd>

	<dt>Bairro:</dt>
	<dd><?php echo $event['hood']; ?></dd>

	<dt>CEP:</dt>
	<dd><?php echo $event['zip_code']; ?></dd>

	<dt>Data de Cadastro:</dt>
	<dd><?php echo $event['created']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Cidade:</dt>
	<dd><?php echo $event['city']; ?></dd>

	<dt>Telefone:</dt>
	<dd><?php echo $event['phone']; ?></dd>

	<dt>Celular:</dt>
	<dd><?php echo $event['mobile']; ?></dd>

	<dt>UF:</dt>
	<dd><?php echo $event['state']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $event['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-secondary">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
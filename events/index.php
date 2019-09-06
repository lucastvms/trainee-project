<?php
require_once('functions.php');
index();
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Eventos</h2>
		</div>
		<div class="col-sm-3 text-right h2">
			<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Evento</a>
			<a class="btn btn-secondary" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
		</div>
		<div class="col-sm-3 text-right h2">
			<form class="form-inline" action="index.php" id="searchForm" method="post">
				<input class="form-control mr-sm-2" type="text" placeholder="Search" name="searchId">
				<button class="btn btn-light" type="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th width="30%">Nome</th>
			<th>CPF/CNPJ</th>
			<th>Telefone</th>
			<th>Atualizado em</th>
			<th>Opções</th>
		</tr>
	</thead>
	<tbody>
		<?php if ($events) : ?>
			<?php foreach ($events as $event) : ?>
				<tr>
					<td><?php echo $event['id']; ?></td>
					<td><?php echo $event['name']; ?></td>
					<td><?php echo $event['cpf_cnpj']; ?></td>
					<td><?php echo $event['mobile']; ?></td>
					<td><?php echo $event['modified']; ?></td>
					<td class="actions text-right">
						<a href="view.php?id=<?php echo $event['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar </a>
						<a href="edit.php?id=<?php echo $event['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar </a>
						<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-event="<?php echo $event['id']; ?>"><i class="fa fa-trash"></i> Excluir </a>
					</td>
				</tr>
			<?php endforeach; ?>
			<?php else : ?>
				<tr>
					<td colspan="6">Nenhum registro encontrado.</td>
				</tr>
			<?php endif; ?>
		</tbody>
	</table>

	<?php include('modal.php')?>

	<?php include(FOOTER_TEMPLATE); ?>
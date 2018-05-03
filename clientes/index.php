<?php
    require_once('functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Clientes</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Cliente</a>
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
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
		<th>Data de nascimento</th>
		<th>CPF</th>
    <th>Sexo</th>
	</tr>
</thead>
<tbody>
<?php if ($clientes) : ?>
<?php foreach ($clientes as $cliente) : ?>
	<tr>
		<td><?php echo $cliente['id']; ?></td>
		<td><?php echo $cliente['nome']; ?></td>
		<td><?php echo $cliente['datanascimento']; ?></td>
    <td><?php echo $cliente['cpf']; ?></td>
    <td><?php echo $cliente['sexo']; ?></td>
		<td class="actions text-right">
			<a href="edit.php?id=<?php echo $cliente['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="delete.php?id=<?php echo $cliente['id']; ?>" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $cliente['id']; ?>">
				<i class="fa fa-trash"></i> Excluir
			</a>
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

<?php include('modal.php'); ?>

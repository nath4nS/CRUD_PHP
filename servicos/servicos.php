<?php 
include_once('../includes/conexao.php');
include_once('../layout/header.php');
include_once('../layout/menu.php'); 

$sql_servicos = 'SELECT * FROM servicos';
$query_servicos = mysqli_query($conexao, $sql_servicos);
?>
		<div class="row">
			<div class="col-2 offset-md-10">
				<a href="<?php echo $path ?>servicos/form_servico.php" class="btn btn-primary">
					Novo usuário
				</a>
				
			</div>
		</div>
		<h2>
			Serviços 
			<small><span class="badge badge-info"><?php echo $query_servicos->num_rows; ?> Serviços realizados(s)</span></small>
		</h2>
		<table class="table table-hover table-striped table-bordered">
			<thead class="thead-dark">	
			<tr class="text-center">
				<th>Serviços</th>
				<th>Peça</th>
				<th>Valor</th>
				<th>Ações</th>
			</thead>
			</tr>
			<tbody >				
			<?php while($servico = mysqli_fetch_assoc($query_servicos)){ ?>
			<tr align="center">
				<td><?php echo $servico['servico']; ?></td>
				<td><?php echo $servico['peca']; ?></td>
				<td>R$ <?php echo number_format($servico['valor'],2,',','.') ?></td>

				<td align="center">
					<a href="form_servico.php?id=<?php echo $servico['id']; ?>" class="btn btn-warning">Editar</a>
					<a href="deleta_servico.php?id=<?php echo $servico['id'] ?>" class="btn btn-danger" onclick="return confirm('Deseja realmente deletar?')">Deletar</a>
				</td>
			</tbody>
			</tr>
		<?php } ?>

		</table>

<?php 
include_once('../layout/footer.php');
?>
<?php 
include_once('../includes/conexao.php');
include_once('../layout/header.php');
include_once('../layout/menu.php'); 

$sql_veiculos = 'SELECT * FROM veiculos';
$query_veiculos = mysqli_query($conexao, $sql_veiculos);
?>
		<div class="row">
			<div class="col-2 offset-md-10">
				<a href="<?php echo $path ?>veiculos/form_veiculo.php" class="btn btn-primary">
					Novo usuário
				</a>
				
			</div>
		</div>
		<h2>
			Listagem de Veículos
			<small><span class="badge badge-info"><?php echo $query_veiculos->num_rows; ?> 	Veículos(s)</span></small>
		</h2>
		<table class="table table-hover table-striped table-bordered">
			<thead class="thead-dark">	
			<tr class="text-center">
				<th>Modelo do Veículo</th>
				<th>Ano do Veículo</th>
				<th>Placa do Veículo</th>
				<th>Ações</th>
			</thead>
			</tr>
			<tbody >				
			<?php while($veiculo = mysqli_fetch_assoc($query_veiculos)){ ?>
			<tr align="center">
				<td><?php echo $veiculo['modelo'] ?></td>
				<td><?php echo $veiculo['ano']; ?></td>
				<td><?php echo $veiculo['placa']; ?></td>
				<td align="center">
					<a href="form_veiculo.php?id=<?php echo $veiculo['id']; ?>" class="btn btn-warning">Editar</a>
					<a href="deleta_veiculo.php?id=<?php echo $veiculo['id'] ?>" class="btn btn-danger" onclick="return confirm('Deseja realmente deletar?')">Deletar</a>
				</td>
			</tbody>
			</tr>
		<?php } ?>

		</table>

<?php 
include_once('../layout/footer.php');
?>
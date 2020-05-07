<?php 
include('../includes/conexao.php'); 
include('../layout/header.php'); 
include('../layout/menu.php'); 

if(isset($_GET['id']) && $_GET['id'] != '' && is_numeric($_GET['id'])) {
	$id = $_GET['id'];
	$action = 'Editar ';

	$sql = "SELECT * FROM veiculos WHERE id = $id";
	$query = mysqli_query($conexao, $sql);
	$veiculo = mysqli_fetch_assoc($query);

} else {
	$id = '';
	$action = 'Cadastrar ';
}
?>
		<p>&nbsp;</p>
		<div class="col-6 offset-md-3">
			<div class="card">
					<div class="card-header">
						<h2 align="center">Cadastro de Veículos</h2>
					</div>
					<div class="card-body">
						<form action="cadastra_veiculo.php" method="post">
							<div class="form-group">
								<label>Modelo do Veículo:</label>
								<input type="text" name="modelo" class="form-control" value="<?php echo(isset($veiculo) && $veiculo['modelo'] != '' ? $veiculo['modelo'] : '') ?>">
								<input type="hidden" name="id" value="<?php echo $id; ?>">
							</div>
							<div class="form-group">
								<label>Ano do veículo:</label>
								<input type="text" name="ano" class="form-control" value="<?php echo(isset($veiculo) && $veiculo['ano'] != '' ? $veiculo['ano'] : '') ?>">
							</div>
							<div class="form-group">
								<label>Placa do veículo:</label>
								<input type="text" name="placa" class="form-control" value="<?php echo(isset($veiculo) && $veiculo['placa'] != '' ? $veiculo['placa'] : '') ?>">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Salvar</button>	
							</div>
						</form>
					</div>
				</div>
			</div>
			
<?php include('../layout/footer.php'); ?>
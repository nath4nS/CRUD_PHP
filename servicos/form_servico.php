<?php 
include('../includes/conexao.php'); 
include('../layout/header.php'); 
include('../layout/menu.php'); 

if(isset($_GET['id']) && $_GET['id'] != '' && is_numeric($_GET['id'])) {
	$id = $_GET['id'];
	$action = 'Editar ';

	$sql = "SELECT * FROM servicos WHERE id = $id";
	$query = mysqli_query($conexao, $sql);
	$servico = mysqli_fetch_assoc($query);

} else {
	$id = '';
	$action = 'Cadastrar ';
}
?>
		<p>&nbsp;</p>
		<div class="col-6 offset-md-3">
			<div class="card">
					<div class="card-header">
						<h2 align="center">Serviços</h2>
					</div>
					<div class="card-body">
						<form action="cadastra_servico.php" method="post">
							<div class="form-group">
								<label>Descriçao do serviço:</label>
								<input type="text" name="servico" class="form-control" value="<?php echo(isset($servico) && $servico['servico'] != '' ? $servico['servico'] : '') ?>">
								<input type="hidden" name="id" value="<?php echo $id; ?>">
							</div>
							<div class="form-group">
								<label>Peça:</label>
								<input type="text" name="peca" class="form-control" value="<?php echo(isset($servico) && $servico['peca'] != '' ? $servico['peca'] : '') ?>">
							</div>
							<div class="form-group">
								<label>Valor:</label>
								<input type="text" name="valor" class="form-control" value="<?php echo(isset($servico) && $servico['valor'] != '' ? $servico['valor'] : '') ?>">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Salvar</button>	
							</div>
						</form>
					</div>
				</div>
			</div>
			
<?php include('../layout/footer.php'); ?>
<?php 
include('../includes/conexao.php'); 
include('../layout/header.php'); 
include('../layout/menu.php'); 

if(isset($_GET['id']) && $_GET['id'] != '' && is_numeric($_GET['id'])) {
	$id = $_GET['id'];
	$action = 'Editar ';

	$sql = "SELECT * FROM usuarios WHERE id = $id";
	$query = mysqli_query($conexao, $sql);
	$usuario = mysqli_fetch_assoc($query);

} else {
	$id = '';
	$action = 'Cadastrar ';
}
?>
		<p>&nbsp;</p>
		<div class="col-6 offset-md-3">
			<div class="card">
					<div class="card-header">
						<h2 align="center">Cadastro de Usuário</h2>
					</div>
					<div class="card-body">
						<form action="cadastra_usuario.php" method="post">
							<div class="form-group">
								<label>Nome:</label>
								<input type="text" name="nome" class="form-control" value="<?php echo(isset($usuario) && $usuario['nome'] != '' ? $usuario['nome'] : '') ?>">
								<input type="hidden" name="id" value="<?php echo $id; ?>">
							</div>
							<div class="form-group">
								<label>E-mail:</label>
								<input type="email" name="email" class="form-control" value="<?php echo(isset($usuario) && $usuario['email'] != '' ? $usuario['email'] : '') ?>">
							</div>
							<div class="form-group">
								<label>Senha:</label>
								<input type="password" name="senha" class="form-control">
							</div>
							<div class="form-group">
								<label>CPF:</label>
								<input type="text" name="cpf" class="form-control" value="<?php echo(isset($usuario) && $usuario['cpf'] != '' ? $usuario['cpf'] : '') ?>">
							</div>
							<div class="form-group">
								<label>Celular:</label>
								<input type="text" name="celular" class="form-control" value="<?php echo(isset($usuario) && $usuario['celular'] != '' ? $usuario['celular'] : '') ?>">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Salvar</button>	
							</div>
						</form>
					</div>
				</div>
			</div>
			
<?php include('../layout/footer.php'); ?>
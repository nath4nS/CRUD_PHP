<?php 
include_once('../includes/conexao.php');
include_once('../layout/header.php');
include_once('../layout/menu.php'); 

$sql_usuarios = 'SELECT * FROM usuarios';
$query_usuarios = mysqli_query($conexao, $sql_usuarios);
?>
		<div class="row">
			<div class="col-2 offset-md-10">
				<a href="<?php echo $path ?>usuarios/form_usuario.php" class="btn btn-primary">
					Novo usuário
				</a>
				
			</div>
		</div>
		<h2>
			Listagem de usuários
			<small><span class="badge badge-info"><?php echo $query_usuarios->num_rows; ?> usuário</span></small>
		</h2>
		<table class="table table-hover table-striped table-bordered">
			<thead class="thead-dark">	
			<tr class="text-center">
				<th>Nome</th>
				<th>Email</th>
				<th>Senha</th>
				<th>CPF</th>
				<th>Celular</th>
				<th>Ações</th>
			</thead>
			</tr>
			<tbody >				
			<?php while($usuario = mysqli_fetch_assoc($query_usuarios)){ ?>
			<tr align="center">
				<td><?php echo $usuario['nome'] ?></td>
				<td><?php echo $usuario['email']; ?></td>
				<td><?php echo substr($usuario['senha'], 0, 3); ?>*****</td>
				<td><?php echo $usuario['cpf']; ?></td>
				<td><?php echo $usuario['celular']; ?></td>
				<td align="center">
					<a href="form_usuario.php?id=<?php echo $usuario['id']; ?>" class="btn btn-warning">Editar</a>
					<a href="deleta_usuario.php?id=<?php echo $usuario['id'] ?>" class="btn btn-danger" onclick="return confirm('Deseja realmente deletar?')">Deletar</a>
				</td>
			</tbody>
			</tr>
		<?php } ?>

		</table>

<?php 
include_once('../layout/footer.php');
?>
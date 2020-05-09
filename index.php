<?php 
include('layout/header_ext.php'); 
?>

<p>&nbsp;</p>
<div class="container">
	<div class="col-5 offset-md-3">
		<?php 
			if(isset($_GET['msg']) && $_GET['msg'] != ''){
		?>
		<div class="alert alert-danger">
			<?php echo $_GET['msg']; ?>
		</div>
		<?php } ?>
			<div class="card">
				<div class="card-header">
					<h2 align="center">Administrativo</h2>
				</div>
				<div class="card-body">
					<form action="login/logar.php" method="post">
						<div class="form-group">
							<label>E-mail:</label>
						<input type="text" name="email" 
									class="form-control" 
									value="" required>
						</div>
						<div class="form-group">
							<label>Senha:</label>
							<input type="password" name="senha" class="form-control" value="" required>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Efetuar login</button>	
						</div>
					</form>
				</div>
			</div>
	</div>
</div>

<?php 
include('layout/footer.php'); 
?>	

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  
  <div class="container">
    <a class="navbar-brand" href="<?php echo $path ?>home/home.php">
      Oficina
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="textoNavbar">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item">
          <a class="nav-link" href="<?php echo $path ?>usuarios/usuarios.php">Usuários</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $path ?>veiculos/veiculos.php">Veículos</a>
        </li>      
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $path ?>servicos/servicos.php">Serviços</a>
        </li>
        <li class="nav-link">Olá <?php echo $_SESSION['nome']; ?>
        </li>
        <li class="nav-link"><a href="<?php echo $path ?>login/logout.php">Sair</a>
        </li>
      </ul>
    </div>
  </nav>
  <br>
 </div>

<div class="container">
  <?php if(isset($_GET['mensagem'])){ ?>
  	<div class="alert alert-<?php echo $_GET['alert']; ?> alert-dismissible fade show">
  		<?php echo $_GET['mensagem'] ?>

  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
<?php } ?>

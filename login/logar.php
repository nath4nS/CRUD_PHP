<?php
session_start();
include_once('../includes/conexao.php');
$email = $_POST['email'];
$senha = md5($_POST['senha']);

$sql = "SELECT * FROM usuarios
		WHERE email = '$email'
		AND senha = '$senha'";

$query = mysqli_query($conexao, $sql);

if($query->num_rows > 0) {
	//foi encontrado, entao cria uma sessao
	$dados = mysqli_fetch_assoc($query);
	$_SESSION['logado'] = true;
	$_SESSION['nome'] = $dados['nome'];
	$_SESSION['email'] = $dados['email'];
	$msg = "Usuário logado com sucesso.";
	$alert = "success";
	echo 'Bem vindo '.$dados['nome'];
	header("Location: ../home/	home.php?mensagem=".$msg."&alert=".$alert);
} else {
	//nao foi encontrado, entao nao cria a sessao e envia de volta pra index
	$msg = "Erro: Usuário não encontrado.";
	session_destroy();
	header("Location: ../index.php?msg=".$msg);
}
?>
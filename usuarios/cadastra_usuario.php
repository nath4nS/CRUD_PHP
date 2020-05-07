<?php
include_once('../includes/conexao.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'] != '' ? md5($_POST['senha']) : '';
$cpf = $_POST['cpf'];
$celular = $_POST['celular'];

if($id == '') {
	$sql = "INSERT INTO 
					usuarios (nome, email, senha, cpf, celular)
					VALUES 
					('$nome', '$email','$senha','$cpf', '$celular');";

}else {
	$sql = "UPDATE usuarios SET 
			nome = '$nome',
			email = '$email'
			senha = $senha',
			cpf = '$cpf',
			celular = '$celular'"
			."WHERE id = $id";
}


if(mysqli_query($conexao, $sql)) {
	$mensagem = "Salvo com sucesso!";
	$alert = "success";
} else {
	$mensagem = "Erro ao salva. - Erro: ".mysqli_error($conexao);
	$alert = "danger";
}

header("Location: usuarios.php?mensagem=$mensagem&alert=$alert");
?>
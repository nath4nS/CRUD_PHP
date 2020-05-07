<?php 
include_once '../includes/conexao.php';
$id = $_GET['id'];

$sql_delete = "DELETE FROM veiculos WHERE id = $id";

if(mysqli_query($conexao, $sql_delete)) {
	$mensagem = 'O veículo foi deletado com sucesso!';
	$alert = 'success';
} else {
	$mensagem = 'Erro ao deletar. - '.mysqli_error($conexao);
	$alert = 'danger';
}

header("Location: veiculos.php?mensagem=$mensagem&alert=$alert")
?>
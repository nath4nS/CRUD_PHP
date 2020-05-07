<?php
include_once('../includes/conexao.php');

$id = $_POST['id'];
$modelo = $_POST['modelo'];
$ano = $_POST['ano'];
$placa = $_POST['placa'];

if($id == '') {
	$sql = "INSERT INTO 
					veiculos (modelo, ano, placa)
					VALUES 
					('$modelo', '$ano','$placa');";

}else {
	$sql = "UPDATE veiculos SET 
			modelo = '$modelo',
			ano = '$ano',
			placa = '$placa'"
			."WHERE id = $id";
}


if(mysqli_query($conexao, $sql)) {
	$mensagem = "Salvo com sucesso!";
	$alert = "success";
} else {
	$mensagem = "Erro ao salva. - Erro: ".mysqli_error($conexao);
	$alert = "danger";
}

header("Location: veiculos.php?mensagem=$mensagem&alert=$alert");
?>
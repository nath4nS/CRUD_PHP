<?php
include_once('../includes/conexao.php');

$id = $_POST['id'];
$servico = $_POST['servico'];;
$peca = $_POST['peca'];
$valor = $_POST['valor'];

if($id == '') {
	$sql = "INSERT INTO 
					servicos (servico, peca, valor)
					VALUES 
					('$servico', '$peca', '$valor');";

}else {
	$sql = "UPDATE servicos SET 
			servico = '$servico',
			peca = '$peca',
			valor = '$valor'"
			."WHERE id = $id";
}


if(mysqli_query($conexao, $sql)) {
	$mensagem = "Salvo com sucesso!";
	$alert = "success";
} else {
	$mensagem = "Erro ao salva. - Erro: ".mysqli_error($conexao);
	$alert = "danger";
}

header("Location: servicos.php?mensagem=$mensagem&alert=$alert");
?>
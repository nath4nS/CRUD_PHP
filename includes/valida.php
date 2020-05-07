<?php
session_start();
if(!isset($_SESSION['logado']) && $_SESSION['logado'] != true) {
	header("Location: ../index.php?msg=Você não possui permissão de acesso.");
}
?>
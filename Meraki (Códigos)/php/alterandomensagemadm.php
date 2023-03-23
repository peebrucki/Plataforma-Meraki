<?php
session_start();
include_once("conexao.php");

$id_mensagem = filter_input(INPUT_POST, 'id_mensagem', FILTER_SANITIZE_STRING);
$mensagem_ong = filter_input(INPUT_POST, 'mensagem_ong', FILTER_SANITIZE_STRING);
$mensagem_doador = filter_input(INPUT_POST, 'mensagem_doador', FILTER_SANITIZE_STRING);
$resposta = filter_input(INPUT_POST, 'resposta', FILTER_SANITIZE_STRING);

$result_usuario = "UPDATE mensagem SET mensagem_ong='$mensagem_ong', mensagem_doador='$mensagem_doador', resposta='$resposta' WHERE id_mensagem='$id_mensagem'";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);

if(mysqli_affected_rows($mysqli)){
	echo "<script> alert('Alterações Feitas com Sucesso!');location.href=\"../dadosmensagemadm.php\";</script>";
}else{
	echo "<script> alert('Ocorreu um Erro! O Usuario NÃO foi Editado');location.href=\"../dadosmensagemadm.php\";</script>";
}
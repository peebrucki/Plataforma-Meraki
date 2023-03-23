<?php
session_start();
include_once("conexao.php");

$id_doador = filter_input(INPUT_POST, 'id_doador', FILTER_SANITIZE_NUMBER_INT);
$nome_doador = filter_input(INPUT_POST, 'nome_doador', FILTER_SANITIZE_STRING);
$email_doador = filter_input(INPUT_POST, 'email_doador', FILTER_SANITIZE_STRING);
$senha_doador = filter_input(INPUT_POST, 'senha_doador', FILTER_SANITIZE_STRING);
$telefone_doador = filter_input(INPUT_POST, 'telefone_doador', FILTER_SANITIZE_STRING);
$cep_doador = filter_input(INPUT_POST, 'cep_doador', FILTER_SANITIZE_STRING);
$cpf_doador = filter_input(INPUT_POST, 'cpf_doador', FILTER_SANITIZE_STRING);

$result_usuario = "UPDATE doador SET nome_doador='$nome_doador', email_doador='$email_doador', telefone_doador='$telefone_doador', cep_doador='$cep_doador', cpf_doador='$cpf_doador' WHERE id_doador='$id_doador'";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);

if(mysqli_affected_rows($mysqli)){
	echo "<script> alert('Alterações Feitas com Sucesso!');location.href=\"../perfildoador.php\";</script>";
}else{
	echo "<script> alert('Ocorreu um Erro! O Usuario NÃO foi Editado');location.href=\"../perfildoador.php\";</script>";
}
<?php
session_start();
include_once("conexao.php");

$id_adm = filter_input(INPUT_POST, 'id_adm', FILTER_SANITIZE_NUMBER_INT);
$nome_adm = filter_input(INPUT_POST, 'nome_adm', FILTER_SANITIZE_STRING);
$email_adm = filter_input(INPUT_POST, 'email_adm', FILTER_SANITIZE_STRING);
$senha_adm = filter_input(INPUT_POST, 'senha_adm', FILTER_SANITIZE_STRING);
$telefone_adm = filter_input(INPUT_POST, 'telefone_adm', FILTER_SANITIZE_STRING);

$result_usuario = "UPDATE adm SET nome_adm='$nome_adm', nome_adm='$nome_adm', email_adm='$email_adm', telefone_adm='$telefone_adm' WHERE id_adm='$id_adm'";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);

if(mysqli_affected_rows($mysqli)){
	echo "<script> alert('Alterações Feitas com Sucesso!');location.href=\"../perfiladm.php\";</script>";
}else{
	echo "<script> alert('Ocorreu um Erro! O Usuario NÃO foi Editado');location.href=\"../perfiladm.php\";</script>";
}
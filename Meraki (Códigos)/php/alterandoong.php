<?php
session_start();
include_once("conexao.php");

$id_ong = filter_input(INPUT_POST, 'id_ong', FILTER_SANITIZE_NUMBER_INT);
$nomefantasia_ong = filter_input(INPUT_POST, 'nomefantasia_ong', FILTER_SANITIZE_STRING);
$nomejuridico_ong = filter_input(INPUT_POST, 'nomejuridico_ong', FILTER_SANITIZE_STRING);
$email_ong = filter_input(INPUT_POST, 'email_ong', FILTER_SANITIZE_STRING);
$senha_ong = filter_input(INPUT_POST, 'senha_ong', FILTER_SANITIZE_STRING);
$telefone_ong = filter_input(INPUT_POST, 'telefone_ong', FILTER_SANITIZE_STRING);
$cep_ong = filter_input(INPUT_POST, 'cep_ong', FILTER_SANITIZE_STRING);
$cnpj_ong = filter_input(INPUT_POST, 'cnpj_ong', FILTER_SANITIZE_STRING);
$desc_ong = filter_input(INPUT_POST, 'desc_ong', FILTER_SANITIZE_STRING);

$result_usuario = "UPDATE ong SET nomefantasia_ong='$nomefantasia_ong', nomejuridico_ong='$nomejuridico_ong', email_ong='$email_ong', telefone_ong='$telefone_ong', cep_ong='$cep_ong', cnpj_ong='$cnpj_ong', desc_ong='$desc_ong' WHERE id_ong='$id_ong'";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);

if(mysqli_affected_rows($mysqli)){
	echo "<script> alert('Alterações Feitas com Sucesso!');location.href=\"../perfilong.php\";</script>";
}else{
	echo "<script> alert('Ocorreu um Erro! O Usuario NÃO foi Editado');location.href=\"../perfilong.php\";</script>";
}
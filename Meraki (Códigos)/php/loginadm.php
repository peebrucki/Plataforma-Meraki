<?php
include('conexao.php');

if(isset($_POST['email_adm']) || isset($_POST['senha_adm'])) 
{
//verifica se campos estão preenchidos
    if(strlen($_POST['email_adm']) == 0) 
    {
        echo "Preencha seu e-mail";
    } 
    else if(strlen($_POST['senha_adm']) == 0) 
    {
        echo "Preencha sua senha";
    } 
    else 
    {
        $email_adm = $_POST['email_adm'];
        $senha_adm = $_POST['senha_adm'];

        $sql_code = "SELECT * FROM adm WHERE email_adm = '$email_adm' LIMIT 1";
        $sql_exec = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
            
         $usuario = $sql_exec->fetch_assoc();
         if(password_verify($senha_adm, $usuario['senha_adm']))
         {
            if(!isset($_SESSION))
            {
            session_start();
            $_SESSION['id_adm'] = $usuario['id_adm'];
            $_SESSION['nome_adm'] = $usuario['nome_adm'];
            $_SESSION['email_adm'] = $usuario['email_adm'];
            $_SESSION['telefone_adm'] = $usuario['telefone_adm'];
            header("Location: ../inicialadm.php");
            }
            else
            {
                echo "Ocorreu um erro! Por favor tentar novamente";
            }
        } 
        else 
        {
            echo "<script> alert('Falha ao Logar! Por Favor tente Novamente');location.href=\"../loginadm.html\";</script>";
        }

    }

}
?>
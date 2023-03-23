<?php
include('conexao.php');

if(isset($_POST['email_doador']) || isset($_POST['senha_doador'])) 
{
//verifica se campos estão preenchidos
    if(strlen($_POST['email_doador']) == 0) 
    {
       echo "<script> alert('Por Favor Preencha todos os campos!');location.href=\"../loginong.html\";</script>";
    } 
    else if(strlen($_POST['senha_doador']) == 0) 
    {
       echo "<script> alert('Por Favor Preencha todos os campos!');location.href=\"../loginong.html\";</script>";
    } 
    else 
    {
        $email_doador = $_POST['email_doador'];
        $senha_doador = $_POST['senha_doador'];

        $sql_code = "SELECT * FROM doador WHERE email_doador = '$email_doador' LIMIT 1";
        $sql_exec = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
            
         $usuario = $sql_exec->fetch_assoc();
         if(password_verify($senha_doador, $usuario['senha_doador']))
         {
            if(!isset($_SESSION))
            {
            session_start();
            $_SESSION['id_doador'] = $usuario['id_doador'];
            $_SESSION['nome_doador'] = $usuario['nome_doador'];
            $_SESSION['email_doador'] = $usuario['email_doador'];
            $_SESSION['senha_doador'] = $usuario['senha_doador'];
            $_SESSION['telefone_doador'] = $usuario['telefone_doador'];
            $_SESSION['cep_doador'] = $usuario['cep_doador'];
            $_SESSION['cpf_doador'] = $usuario['cpf_doador'];
            header("Location: ../inicialdoador.php");
            }
            else
            {
                echo "Ocorreu um erro! Por favor tentar novamente";
            }
        } 
        else 
        {
            echo "<script> alert('Falha ao Logar! Por Favor tente Novamente');location.href=\"../logindoador.html\";</script>";
        }

    }

}
?>
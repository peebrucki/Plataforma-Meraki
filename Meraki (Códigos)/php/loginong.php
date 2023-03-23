<?php
include('conexao.php');

if(isset($_POST['email_ong']) || isset($_POST['senha_ong'])) 
{
//verifica se campos estão preenchidos
    if(strlen($_POST['email_ong']) == 0) 
    {
        echo "<script> alert('Por Favor Preencha todos os campos!');location.href=\"../loginong.html\";</script>";
    } 
    else if(strlen($_POST['senha_ong']) == 0) 
    {
        echo "<script> alert('Por Favor Preencha todos os campos!');location.href=\"../loginong.html\";</script>";
    } 
    else 
    {

        $email_ong = $_POST['email_ong'];
        $senha_ong = $_POST['senha_ong'];

        $sql_code = "SELECT * FROM ong WHERE email_ong = '$email_ong' LIMIT 1";
        $sql_exec = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
            
         $usuario = $sql_exec->fetch_assoc();
         if(password_verify($senha_ong, $usuario['senha_ong']))
         {
            if(!isset($_SESSION))
            {
            session_start();
            $_SESSION['id_ong'] = $usuario['id_ong'];
            $_SESSION['nomefantasia_ong'] = $usuario['nomefantasia_ong'];
            $_SESSION['nomejuridico_ong'] = $usuario['nomejuridico_ong'];
            $_SESSION['email_ong'] = $usuario['email_ong'];
            $_SESSION['senha_ong'] = $usuario['senha_ong'];
            $_SESSION['telefone_ong'] = $usuario['telefone_ong'];
            $_SESSION['cep_ong'] = $usuario['cep_ong'];
            $_SESSION['cnpj_ong'] = $usuario['cnpj_ong'];
            $_SESSION['categoria_ong'] = $usuario['categoria_ong']; 
            $_SESSION['desc_ong'] = $usuario['desc_ong'];

            header("Location: ../inicialong.php");
            }
            else
            {
                echo "Ocorreu um erro! Por favor tentar novamente";
            }
        } 
        else 
        {
            echo "<script> alert('Falha ao Logar! Por Favor tente Novamente');location.href=\"../loginong.html\";</script>";
        }

    }

}
?>
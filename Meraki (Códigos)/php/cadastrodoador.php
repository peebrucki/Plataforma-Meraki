<?php
    include("conexao.php");

if(isset($_POST['nome_doador']) || isset($_POST['email_doador']) || isset($_POST['senha_doador']) || isset($_POST['telefone_doador']) || isset($_POST['cep_doador']) || isset($_POST['cpf_doador'])) 
{
//VERIFICA CAMPO PREENCHIDO
    if(strlen($_POST['nome_doador']) == 0) 
    {
        echo "<script>alert('Por Favor Preencha todos os campos!');location.href=\"../logindoador.html\";</script>";
    }  
    else if(strlen($_POST['email_doador']) == 0) 
    {
        echo "<script> alert('Por Favor Preencha todos os campos!');location.href=\"../logindoador.html\";</script>";
    } 
    else if(strlen($_POST['senha_doador']) == 0) 
    {
       echo "<script> alert('Por Favor Preencha todos os campos!');location.href=\"../logindoador.html\";</script>";    } 
    else if(strlen($_POST['telefone_doador']) == 0) 
    {
        echo "<script> alert('Por Favor Preencha todos os campos!');location.href=\"../logindoador.html\";</script>";
    }
    else if(strlen($_POST['cep_doador']) == 0) 
    {
        echo "<script> alert('Por Favor Preencha todos os campos!');location.href=\"../logindoador.html\";</script>";
    }
    else if(strlen($_POST['cpf_doador']) == 0) 
    {
        echo "<script> alert('Por Favor Preencha todos os campos!');location.href=\"../logindoador.html\";</script>";
    }
    //FIM VERIFICA CAMPO PREENCHIDO
    else 
    {
      $nome_doador = $_POST['nome_doador'];
      $email_doador = $_POST['email_doador'];
      $senha_doador = password_hash($_POST['senha_doador'], PASSWORD_DEFAULT);
      $telefone_doador = $_POST['telefone_doador'];
      $cep_doador = $_POST['cep_doador'];
      $cpf_doador = $_POST['cpf_doador'];
      try
        {
                if ($_POST["senha_doador"] == $_POST["senha_confirma"])
                {
     
                 $result_usuario = "INSERT INTO doador (nome_doador, email_doador, senha_doador, telefone_doador, cep_doador, cpf_doador) VALUES ('$nome_doador','$email_doador','$senha_doador','$telefone_doador','$cep_doador','$cpf_doador')";
                 $resultado_usuario = mysqli_query($mysqli, $result_usuario);
    
                         if(mysqli_affected_rows($mysqli) != 0)
                         {
                         echo "<script> alert('O Usuario foi cadastrado com Sucesso');location.href=\"../index.html\";</script>";  
                         }
                         else
                         {
                         echo "<script>alert('ERRO: O Usuario não foi cadastrado com Sucesso');</script>";    
                         }
                }
                else 
                {
                echo "<script> alert('A senha não confere');location.href=\"../logindoador.html\";</script>";
                } 
        } 
        catch (PDOException $erro)
        {
            echo"Erro" . $erro->getMessage();
        }           
    }   
        
} 
?>


<?php
    include("conexao.php");

if(isset($_POST['nomefantasia_ong']) || isset($_POST['nomejuridico_ong']) || isset($_POST['email_ong']) || isset($_POST['senha_ong']) || isset($_POST['telefone_ong']) || isset($_POST['cep_ong']) || isset($_POST['cnpj_ong']) || isset($_POST['categoria_ong']) || isset($_POST['desc_ong'])) 
{
//VERIFICA CAMPO PREENCHIDO
    if(strlen($_POST['nomefantasia_ong']) == 0) 
    {
        echo "<script>alert('Por Favor Preencha todos os campos!');location.href=\"../loginong.html\";</script>";
    }  
    else if(strlen($_POST['nomejuridico_ong']) == 0) 
    {
        echo "<script> alert('Por Favor Preencha todos os campos!');location.href=\"../loginong.html\";</script>";
    }
    else if(strlen($_POST['email_ong']) == 0) 
    {
        echo "<script> alert('Por Favor Preencha todos os campos!');location.href=\"../loginong.html\";</script>";
    } 
    else if(strlen($_POST['senha_ong']) == 0) 
    {
       echo "<script> alert('Por Favor Preencha todos os campos!');location.href=\"../loginong.html\";</script>";    } 
    else if(strlen($_POST['telefone_ong']) == 0) 
    {
        echo "<script> alert('Por Favor Preencha todos os campos!');location.href=\"../loginong.html\";</script>";
    }
    else if(strlen($_POST['cep_ong']) == 0) 
    {
        echo "<script> alert('Por Favor Preencha todos os campos!');location.href=\"../loginong.html\";</script>";
    }
    else if(strlen($_POST['cnpj_ong']) == 0) 
    {
        echo "<script> alert('Por Favor Preencha todos os campos!');location.href=\"../loginong.html\";</script>";
    }
    else if(strlen($_POST['categoria_ong']) == 0) 
    {
        echo "<script> alert('Por Favor Preencha todos os campos!');location.href=\"../loginong.html\";</script>";
    }
    else if(strlen($_POST['desc_ong']) == 0) 
    {
        echo "<script> alert('Por Favor Preencha todos os campos!');location.href=\"../loginong.html\";</script>";
    }
    //FIM VERIFICA CAMPO PREENCHIDO
    else 
    {
      $nomefantasia_ong = $_POST['nomefantasia_ong'];
      $nomejuridico_ong = $_POST['nomejuridico_ong'];
      $email_ong = $_POST['email_ong'];
      $senha_ong = password_hash($_POST['senha_ong'], PASSWORD_DEFAULT);
      $telefone_ong = $_POST['telefone_ong'];
      $cep_ong = $_POST['cep_ong'];
      $cnpj_ong = $_POST['cnpj_ong'];
      $categoria_ong = $_POST['categoria_ong'];
      $desc_ong = $_POST['desc_ong'];
      try
        {
                if ($_POST["senha_ong"] == $_POST["senha_ong"])
                {
     
                 $result_usuario = "INSERT INTO ong (nomefantasia_ong, nomejuridico_ong, email_ong, senha_ong, telefone_ong, cep_ong, cnpj_ong, categoria_ong, desc_ong) VALUES ('$nomefantasia_ong','$nomejuridico_ong','$email_ong','$senha_ong','$telefone_ong','$cep_ong','$cnpj_ong','$categoria_ong', '$desc_ong')";
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
                echo "<script> alert('A senha não confere');location.href=\"../loginong.html\";</script>";
                } 
        } 
        catch (PDOException $erro)
        {
            echo"Erro" . $erro->getMessage();
        }           
    }   
        
} 
?>


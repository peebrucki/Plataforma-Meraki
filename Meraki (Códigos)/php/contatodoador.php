<?php 
    session_start();
    include("conexao.php");
    

if(isset($_POST['mensagem_doador'])) 
{
//VERIFICA CAMPO PREENCHIDO
    if(strlen($_POST['mensagem_doador']) == 0) 
    {
        echo "<script>alert('Por Favor Preencha a Mensagem para Enviar!');location.href=\"../inicialdoador.php\";</script>";
    }  
    //FIM VERIFICA CAMPO PREENCHIDO
    else 
    {
      $mensagem_doador = $_POST['mensagem_doador'];

                if (isset($_POST['mensagem_doador']))
                {

                $nome_doador = $_SESSION['nome_doador'];
                $email_doador = $_SESSION['email_doador']; 

                 $result_usuario = "INSERT INTO mensagem (mensagem_doador, nome_doador, email_doador) VALUES ('$mensagem_doador', '$nome_doador', '$email_doador')";
                 $resultado_usuario = mysqli_query($mysqli, $result_usuario);
    
                         if(mysqli_affected_rows($mysqli) != 0)
                         {
                         echo "<script> alert('A Mensagem Foi Enviada com Sucesso');location.href=\"../inicialdoador.php\";</script>";  
                         }
                         else
                         {
                         echo "<script>alert('ERRO: A Mensagem NÃO Foi Enviada Com Sucesso!');</script>";    
                         }
                }
                else 
                {
                echo "<script> alert('ERRO');location.href=\"../inicialdoador.php\";</script>";
                } 
                  
    }   
        
} 
?>
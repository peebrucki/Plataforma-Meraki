<?php 
    session_start();
    include("conexao.php");
    

if(isset($_POST['mensagem_ong'])) 
{
//VERIFICA CAMPO PREENCHIDO
    if(strlen($_POST['mensagem_ong']) == 0) 
    {
        echo "<script>alert('Por Favor Preencha a Mensagem para Enviar!');location.href=\"../inicialong.php\";</script>";
    }  
    //FIM VERIFICA CAMPO PREENCHIDO
    else 
    {
      $mensagem_ong = $_POST['mensagem_ong'];

                if (isset($_POST['mensagem_ong']))
                {

                $nomefantasia_ong = $_SESSION['nomefantasia_ong'];
                $email_ong = $_SESSION['email_ong']; 

                 $result_usuario = "INSERT INTO mensagem (mensagem_ong, nomefantasia_ong, email_ong) VALUES ('$mensagem_ong', '$nomefantasia_ong', '$email_ong')";
                 $resultado_usuario = mysqli_query($mysqli, $result_usuario);
    
                         if(mysqli_affected_rows($mysqli) != 0)
                         {
                         echo "<script> alert('A Mensagem Foi Enviada com Sucesso');location.href=\"../inicialong.php\";</script>";  
                         }
                         else
                         {
                         echo "<script>alert('ERRO: A Mensagem NÃO Foi Enviada Com Sucesso!');</script>";    
                         }
                }
                else 
                {
                echo "<script> alert('ERRO');location.href=\"../inicialong.php\";</script>";
                } 
                  
    }   
        
} 
?>
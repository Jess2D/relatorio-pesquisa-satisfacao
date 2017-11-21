<?php 
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['senha'];
session_start();  
 
 include("conexao.php");

    if (isset($entrar)) {
            
      $verifica = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";

      $result = $conexão->query($verifica);
      

         $total = mysqli_num_rows($result);

        if ($total<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../Views/login.html';</script>";
          die();
        }else{
          $_SESSION['logado'] = "SIM";
          header("Location:../Views/Top.php");
        }
    }
?>
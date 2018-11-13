
 <?php
include_once "conexaopura.php"; 

?>




<?php 

    session_start();
    
    

  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['senha'];
    




    if (isset($entrar)) {
             
      $verifica = mysqli_query($conecta, "SELECT * FROM atendentes WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysqli_num_rows($verifica)<=0){
            
            unset ($_SESSION['login']);
            unset ($_SESSION['senha']);

            echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='paginaLogin.html';</script>";
          die();
        }else{
            
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            
            setcookie("login",$login);
            header("Location:formularioConsulta.php");
        }
    }



 
?>

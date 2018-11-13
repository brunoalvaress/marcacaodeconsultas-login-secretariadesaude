 <?php
include_once "conexaopura.php"; 
?>


<?php


        
        
        $conecta = mysqli_connect($servidor,$usuario,$senha,$database); //conecta ao DB

        if(mysqli_connect_errno()){
            die("Conexão falhou: " . mysqli_connect_errno() );
        }
    
       
        
            
        $deleta =  mysqli_query($conecta, "DELETE FROM pacientes LIMIT 1");  
        mysqli_close($conecta);
?>

<!DOCTYPE html>
<html>
    <head>
          <title>SECRETARIA DE SAÚDE - OURO BRANCO - MINAS GERAIS</title>
                <meta http-equiv="X-UA-Compatible" content="IE-edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta charset="utf-8">


                <link href="../css/bootstrap.min.css" rel="stylesheet">
                <link href="_css/estilo.css" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
     
        
    
    <body>
       <div class="page-header">
              <a href="http://www.ourobranco.mg.gov.br/">
            <img class="img-responsive center-block" src="../img/prefeitura.jpg" alt ="imagem" width="30%" >
                 </a>
            </div>
 
        <div class="container-fluid">
        
        <h3> O registro foi deletado.</h3>

         
         
         <form name="voltar" action="consulta2.php" method="POST">
          

       <button class="btn " type="submit" >Voltar</button> 
            </form>
        </div>
    
    <footer class="navbar navbar-warning navbar-bottom">
                    <p class="tfooter" align="left">Praça Sagrados Corações, 200 - Centro - Ouro Branco - CEP: 36420-000 - Tel: (31) 3938 - 1000</p>
        </footer>
        
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="_js/script.js"></script>
      

    </body>

</html>
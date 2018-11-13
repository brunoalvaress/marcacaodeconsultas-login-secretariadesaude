 <?php
include_once "conexaopura.php"; 
?>


<?php


    $nome       = $_POST['nomepaciente'];
    $sobrenome  = $_POST['sobrenomepaciente'];
    $endereco   = $_POST['enderecopaciente'];
    $telefone   = $_POST['telefonepaciente'];
  
        
        //Seleciona todos os ids e após isso conta o número de linhas que id possui
        $contagem_sql = mysqli_query($conecta, "SELECT id FROM pacientes" );
        $total_registros = mysqli_num_rows($contagem_sql);

        //Caso total de linhas seja menor que N, registre no banco
        //Caso total de linhas seja maior que N, vá para página de bloqueio
        if($total_registros < 15){
            
        $inserir    = "INSERT INTO pacientes ";
        $inserir    .= "(nome,sobrenome,endereco,telefone) ";
        $inserir    .= "VALUES ";
        $inserir    .= "('$nome','$sobrenome','$endereco','$telefone')";
        
        $operacao_inserir = mysqli_query($conecta,$inserir);
        }else{
           
         header("Location:limiteexcedido.html");
 
              
            
        }
            
 
            

        

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
        
                    <br><br><br>

 
        <div class="container-fluid">
            
            <h3>Em breve alguma de nossas atendentes irá entrar em contato para agenda a sua consulta.</h3>
            <br><br><br>
           
      
           
            <form name="voltar" action="paginaprincipal.html" method="POST">
                <button class="btn" style="width: 15em" type="submit" >Voltar</button>  
            </form>
        </div>
            
           <footer class="navbar navbar-warning navbar-fixed-bottom">
                    <p class="tfooter" align="left">Praça Sagrados Corações, 200 - Centro - Ouro Branco - CEP: 36420-000 - Tel: (31) 3938 - 1000</p>
        </footer>


            
        
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="_js/script.js"></script>
        
    </body>
</html>
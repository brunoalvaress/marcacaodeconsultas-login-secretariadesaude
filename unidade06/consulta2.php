 <?php
include_once "conexaopura.php"; 
?>


<?php

     session_start();

    //Conecta ao banco de dados
    $conecta = mysqli_connect('localhost', 'root', '', 'hospitais');

    //Cria tabela com o conteúdo do banco de dados
     echo "<table border=1>";
     echo "<tr>";

     echo "<th> ID </th>";
     echo "<th> NOME </th>";
     echo "<th> SOBRENOME </th>";
     echo "<th> ENDEREÇO </th>";
     echo "<th> TELEFONE </th>";

     echo "</tr>";

    //Percorre o banco de dados selecionando tudo da tabela pacientes
    $dados = mysqli_query($conecta, "SELECT * FROM `pacientes`");
    

    while  ($registro = mysqli_fetch_array($dados)){

        //Atribui cada registro do banco de dados a uma variável
        $id = $registro['id'];
        $nome = $registro['nome'];
        $sobrenome = $registro['sobrenome'];
        $endereco = $registro['endereco'];
        $telefone = $registro['telefone'];

        //Atribui cada variável a um campo da tabela
        echo "<tr>";
        echo "<td>".$id."</td>";
        echo "<td>".$nome."</td>";
        echo "<td>".$sobrenome."</td>";
        echo "<td>".$endereco."</td>";
        echo "<td>".$telefone."</td>";

        echo "</tr>";

    }


        echo "</table>";

        
       
           

            if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
            {
              unset($_SESSION['login']);
              unset($_SESSION['senha']);
              header('location:paginaLogin.html');
              }

            $logado = $_SESSION['login'];
            
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
            
    
            
            <style>


                table, td, tr{

                    border: 1px solid #ddd;
                    text-align: left;


                }


                 table {
                    border-collapse: collapse;
                    width: 100%;

                }


                th {

                    background:-webkit-linear-gradient(top, #f0c911 5%, #f2ab1e 100%);
                    font-family: 'Roboto', sans-serif;
                    font-size: 1.3em;
                    color: white;

                }

                tr:nth-child(odd) {

                    background:-webkit-linear-gradient(top, #f0c911 5%, #f2ab1e 2%);
                    color: white;

                }




                td {
                    font-family: 'Roboto', sans-serif;
                    font-size: 1.2em;

                }


                th, tr {
                        padding: 15px;
                    }

            </style>

        </head>

        <body>
            
            
            
                        <br>
                        <div class="container-fluid">

               <form name="deleta" action="deletar.php" method="POST">
                
                <button class="btn" style="width: 15em" type="submit" id="deleta" name="deleta" >Deletar primeiro registro</button>  
                
            </form>

        <form name="voltar" action="formularioConsulta.php" method="POST">
                
                <button class="btn" style="width: 15em" type="submit" >Voltar</button>  
                
            </form>
            
            
            
            <footer class="navbar navbar-warning navbar-fixed-bottom">
                    <p class="tfooter" align="left">Praça Sagrados Corações, 200 - Centro - Ouro Branco - CEP: 36420-000 - Tel: (31) 3938 - 1000</p>
        </footer>
            
            

            </div>
        </body>

        </html>

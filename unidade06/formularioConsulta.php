
            <?php 
        /* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
         simplesmente não fazer o login e digitar na barra de endereço do seu navegador 
        o caminho para a página principal do site (sistema), burlando assim a obrigação de 
        fazer um login, com isso se ele não estiver feito o login não será criado a session, 
        então ao verificar que a session não existe a página redireciona o mesmo
         para a index.php. */
            session_start();

            if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
            {
              unset($_SESSION['login']);
              unset($_SESSION['senha']);
              header('location:paginaLogin.html');
              }

            $logado = $_SESSION['login'];
            ?>


<html>
    <head>
        <title>SECRETARIA DE SAÚDE - OURO BRANCO - MINAS GERAIS</title>
        <meta http-equiv="X-UA-Compatible" content="IE-edge; charset=utf-8">
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
            
            <h3>Página de Login para Atendentes</h3>
            
                        <br> <br>

            <form action="consulta2.php" method="POST">

                <button class="btn " style="width: 15em" type="submit" name = "consulta" id="consulta" >Consultar</button> 
                    
            </form>
             
            
            <form name="voltar" action="paginaLogin.html" method="POST">
                
                <button class="btn"  style="width: 15em" type="submit" >Voltar</button>  
                
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
<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "hospitais"; //escolher DB
    
        
        
        
        $conecta = mysqli_connect($servidor,$usuario,$senha,$database); //conecta ao DB

        if(mysqli_connect_errno()){
            die("Conexão falhou: " . mysqli_connect_errno() );
        }

?>
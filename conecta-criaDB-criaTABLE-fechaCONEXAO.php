<?php



    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "hospitais"; //escolher DB
    
        
        
        
         $conecta = mysqli_connect($servidor,$usuario,$senha,$database); //conecta ao DB

        if(mysqli_connect_errno()){
            die("Conexão falhou: " . mysqli_connect_errno() );
        }

           /* // Create database
            $sql="CREATE DATABASE hospitais";
        if (mysqli_query($conecta,$sql))
          {
          echo "Database my_db created successfully";
          }
        else
          {
          echo "Error creating database: " . mysqli_error($conecta);
          } */

       /*//Cria tabela dentro do DB escolhido
        $sql = "CREATE TABLE pacientes (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        nome VARCHAR(30) NOT NULL,
        sobrenome VARCHAR(30) NOT NULL,
        endereco VARCHAR(50) NOT NULL,
        telefone VARCHAR(15) NOT NULL
        
        )";

        if ($conecta->query($sql) === TRUE) {
            echo "Table Pacientes created successfully";
        } else {
            echo "Error creating table: " . $conecta->error;
        }  

    
        /* //Adiciona uma coluna a tabela
        $sql = "ALTER TABLE `pacientes` ADD `telefone` VARCHAR(15) NOT NULL AFTER `endereco`";

            if ($conecta->query($sql) === TRUE) {
            echo "Table Pacientes foi mudada com suceso";
        } else {
            echo "Error creating table: " . $conecta->error;
        } */
            


        //Fecha a conexão a tabela
           mysqli_close($conecta);




        ?>

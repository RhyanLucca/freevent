<?php

    $dsn = 'mysql:host=localhost;dbname=rtsystems';
    $user = 'root';
    $pswd = '';
    // @RhyanLucca1000

    $connStatus = false;

    try {
        $conn = new PDO($dsn, $user, $pswd);
        if($conn){
            $connStatus = true;
        }
    } catch(PDOException $e){
        echo 'Erro: ' . $e->getCode() . ' Mensagem: ' .$e->getMessage();
    }

?>
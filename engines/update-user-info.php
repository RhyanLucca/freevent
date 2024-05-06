<?php
    session_start();
    require_once './connection.php';
    include '../includes/libraries.php';

    $telefone = str_replace(array('-','(', ')'), '', $_POST['inputUserTelefone']);
    $celular = str_replace(array('-','(', ')'), '', $_POST['inputUserCelular']);
    $celularEm = str_replace(array('-','(', ')'), '', $_POST['inputUserCelularEm']);
    $cep = str_replace(array('-', '.'), '', $_POST['inputUserCep']);
    $uf = $_POST['inputUserUf'];
    $cidade = $_POST['inputUserCidade'];
    $logradouro = $_POST['inputUserLogradouro'];
    $numero = $_POST['inputUserNumero'];
    $complemento = $_POST['inputUserComplemento'];


    if($connStatus){
        $query = "UPDATE tabusers SET cadTelefone = '$telefone', cadCelular = '$celular', cadCelularEm = '$celularEm', cadCep = '$cep',cadUf = '$uf', cadCidade = '$cidade', cadLogradouro = '$logradouro', cadNumero = '$numero',cadComplemento = '$complemento' WHERE cadCPF = '{$_SESSION['user.cpf']}'";
        // $stmt = $conn->query($query);
        // $userArray = $stmt->fetch();

        $conn->exec($query);

        // require_once './login-validator.php';
        // header('Location: ../user-profile.php');
    }

?>
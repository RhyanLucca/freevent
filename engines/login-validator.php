<?php

    session_start();

    $_SESSION['user.auth'] = 0;

    require_once './connection.php';

    echo $connStatus;

    if($connStatus){
        $query = "SELECT * FROM tabusers WHERE cadEmail = '{$_POST['emailInput']}' AND cadPswd = '{$_POST['pswdInput']}'";
        
        $stmt = $conn->query($query);
        $userArray = $stmt->fetch();

        if(!empty($userArray)){
            $login = true;
            $_SESSION['user.id'] = $userArray['cadID'];
            $_SESSION['user.name'] = $userArray['cadName'];
            $_SESSION['user.nick'] = $userArray['cadNick'];
            $_SESSION['user.email'] = $userArray['cadEmail'];
            $_SESSION['user.pswd'] = $userArray['cadPswd'];
            $_SESSION['user.rg'] = $userArray['cadRG'];
            $_SESSION['user.cpf'] = $userArray['cadCPF'];
            $_SESSION['user.birthday'] = $userArray['cad'];
            $_SESSION['user.telefone'] = $userArray['cadTelefone'];
            $_SESSION['user.celular'] = $userArray['cadCelular'];
            $_SESSION['user.celularEm'] = $userArray['cadCelularEm'];
            $_SESSION['user.cep'] = $userArray['cadCep'];
            $_SESSION['user.uf'] = $userArray['cadUf'];
            $_SESSION['user.cidade'] = $userArray['cadCidade'];
            $_SESSION['user.logradouro'] = $userArray['cadLogradouro'];
            $_SESSION['user.numero'] = $userArray['cadNumero'];
            $_SESSION['user.complemento'] = $userArray['cadComplemento'];
            $_SESSION['user.codigo'] = $userArray['cadCodigo'];
            $_SESSION['user.auth'] = 1;

            $today = date("Y-m-d");

            if($userArray['cadDataCod'] !== $today || $userArray['cadDataCod'] == ""){
                $NewCod = str_shuffle($userArray['cadCPF']);
                $query = "UPDATE tabusers SET cadCodigo = '$NewCod', cadDataCod = DATE(NOW()) WHERE cadID = '{$_SESSION['user.id']}'";
                $stmt = $conn->query($query);
                $query = "SELECT cadCodigo FROM tabusers WHERE cadID = '{$_SESSION['user.id']}'";
                $stmt = $conn->query($query);
                $userArray = $stmt->fetch();

                $_SESSION['user.codigo'] = $userArray['cadCodigo'];
            }

            echo '<pre>';
                print_r($_SESSION);
            echo '</pre>';
            echo $_SESSION['user.auth'];
            echo $_SESSION['user.id'];
            
            header('Location: ../events.php');

        }else{
            header('Location: ../login.php?login=0');
        }

        

    }


    // echo $query;


?>
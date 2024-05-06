<?php

    require_once './connection.php';
    include '../includes/libraries.php';

    $nameInput = $_POST['nameInput'];
    $emailInput = $_POST['emailInput'];
    $rgInput = str_replace(array('-', '.'), '', $_POST['rgInput']);
    $cpfInput = str_replace(array('-', '.'), '', $_POST['cpfInput']);
    $birthdayInput = $_POST['birthdayInput'];
    $pswdInput = $_POST['pswdInput'];
    $useTermsCheckbox = $_POST['useTermsCheckbox'];

    // echo $rgInput;
    // echo '<br>';
    // echo $birthdayInput;
    // echo '<br>';
    // echo $useTermsCheckbox;

    // $hoje = date("Y-m-d");
    
    // echo $hoje;

    // $dataValida = date("Y-m-d", strtotime($hoje. '-18 years'));
    // echo '<br>';
    // echo $dataValida;
    
    // echo '<br><br><br>';


    // $_POST['cpfInput'] = str_replace(array('-', '.'), '', $_POST['cpfInput']);
    
    if($connStatus){
        $query = "SELECT * FROM tabusers WHERE cadEmail = '$emailInput' OR cadCPF = '$cpfInput'";
        
        $stmt = $conn->query($query);
        $userArray = $stmt->fetch();

        print_r($userArray);
        
        $nick = explode(' ', $nameInput);

        $nick = $nick[0] . ' ' . end($nick);

        // echo $_POST['cpfInput'];

        if(empty($userArray)){

            $query = "INSERT INTO tabusers (cadName, cadNick, cadEmail, cadRG, cadCPF, cadDataNasc, cadPswd) VALUES ('$nameInput', '$nick', '$emailInput', '$rgInput', '$cpfInput', '$birthdayInput', '$pswdInput')";
            echo '<br>' . $query;
            // $stmt = $conn->prepare($query);
            $conn->exec($query);
            
        //         $login = true;
        //         $_SESSION['user.id'] = $userArray['cadID'];
        //         $_SESSION['user.name'] = $userArray['cadName'];
        //         $_SESSION['user.email'] = $userArray['cadEmail'];
        //         $_SESSION['user.pswd'] = $userArray['cadPswd'];
        //         $_SESSION['user.auth'] = true;
            // require_once './login-validator.php';
            header('Location: ../login.php');

        }else{
            header('Location: ../signin.php');
        }
    }


?>
<?php

    // session_start();

    // $_SESSION['user.auth'] = 0;

    require_once './connection.php';

    echo $connStatus;

    if($connStatus){
        $query = "SELECT * FROM tabusers WHERE cadEmail = '{$_POST['emailInput']}' OR cadCPF = '{$_POST['cpfInput']}'";
        
    $stmt = $conn->query($query);
    $userArray = $stmt->fetch();

    print_r($userArray);
    
    $_POST['cpfInput'] = str_replace(array('-', '.'), '', $_POST['cpfInput']);
    
    echo $_POST['cpfInput'];

    if(empty($userArray)){

        $query = "INSERT INTO tabusers (cadName, cadEmail, cadPswd, cadCPF) VALUES ('{$_POST['nameInput']}', '{$_POST['emailInput']}', '{$_POST['pswdInput']}', '{$_POST['cpfInput']}' )";
        echo '<br>' . $query;
        // $stmt = $conn->prepare($query);
        $conn->exec($query);
        
    //         $login = true;
    //         $_SESSION['user.id'] = $userArray['cadID'];
    //         $_SESSION['user.name'] = $userArray['cadName'];
    //         $_SESSION['user.email'] = $userArray['cadEmail'];
    //         $_SESSION['user.pswd'] = $userArray['cadPswd'];
    //         $_SESSION['user.auth'] = true;

        header('Location: ../login.php');

        }else{
           header('Location: ../signin.php');
        }

        

    }


    // echo $query;


?>
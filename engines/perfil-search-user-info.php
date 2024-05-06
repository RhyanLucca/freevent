<?php
    session_start();
    require_once './connection.php';

    if($connStatus){
        $query = "SELECT * FROM tabusers WHERE cadID = '{$_SESSION['user.id']}'";
    
        $stmt = $conn->query($query);
        $userArray = $stmt->fetch(PDO::FETCH_ASSOC);

        header("Content-Type:application/json");
        print_r(json_encode($userArray, true));
        // print_r($userArray);

    }

?>
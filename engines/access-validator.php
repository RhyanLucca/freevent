<?php

    session_start();

    if(!isset($_SESSION['user.auth']) || $_SESSION['user.auth'] != 1){
        header ('Location: ./login.php?auth=0');
    }

?>
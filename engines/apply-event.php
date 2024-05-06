<?php

    session_start();

    require_once './connection.php';

    $eventID = $_POST['hdnEv'];

    $query = "INSERT INTO tabinscricoes VALUES(null, '$eventID', '{$_SESSION['user.id']}', '{$_SESSION['user.codigo']}', now(), '0')";

    echo $query;

    $conn->exec($query);

    header("Location: ../event-page.php?eventId=$eventID");
?>
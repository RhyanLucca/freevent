<?php

    session_start();
    require_once 'connection.php';
    include '../includes/ownfunctions.php';

    $eventID = $_POST['eventID'];
    $payment = str_replace(',', '.', $_POST['payment']);
    $uf = $_POST['uf'];

    if($connStatus){
        if(isset($_SESSION['user.id'])){
            $query = "SELECT * FROM tabevents WHERE id != '$eventID' AND eventUF = '$uf' AND eventContractorId != '{$_SESSION['user.id']}' ORDER BY RAND() LIMIT 10";
        }else{
            $query = "SELECT * FROM tabevents WHERE id != '$eventID' AND eventUF = '$uf' ORDER BY RAND() LIMIT 10";
        }
        // OR eventPayment >= '$payment')
        // echo $query;
    }

        $stmt = $conn->query($query);
        $ArraySimilarEvents = $stmt->fetchall(PDO::FETCH_ASSOC);

        foreach($ArraySimilarEvents as $similarEvents) {
            $eventId = $similarEvents['id'];
            $query2 = "select count(tabusers_cadID) from tabinscricoes WHERE tabevents_id = {$similarEvents['id']} AND inscricao_validate =1";
            $stmt2 = $conn->query($query2);
            $eventsArray2 = $stmt2->fetch(PDO::FETCH_NUM);
?>
            <div data-id='<?=$eventId?>' class='login-frame' style='width:90%;height:;margin-bottom:20px;cursor:pointer;' onclick='window.location.href = "event-page.php?eventId=<?=$eventId?>"'>
                <div style='display:flex; justify-content:space-between;'>
                    <h4><?= strlen($similarEvents['eventName']) > 25 ? substr($similarEvents['eventName'], 0, 25) . '...' : $similarEvents['eventName']?></h4>
                    <?php
                        echo isset($_SESSION['user.id']) && $_SESSION['user.id'] === $similarEvents['id'] ? "<img id='editarEvento' src='images/definicoes.png' alt='' style='width:25px;height:25px;' onclick=''>" : "";
                    ?>
                </div>
                <hr>
                <p><?= strlen($similarEvents['eventDescription']) > 150 ? substr($similarEvents['eventDescription'], 0, 150) . '...' : $similarEvents['eventDescription']?></p>
                <hr>
                <div style='display:flex;justify-content:space-between;'>
                    <div style='display: flex;align-items: center;'>
                        <img src="images/payment.png" alt="" style='width:25px;height:25px;margin-right:10px;'>
                        <p>R$ <?= floatInt($similarEvents['eventPayment'])?></p>
                    </div>
                    <div style='display: flex;align-items: center;'>
                            <?php
                                switch ($similarEvents['eventProfessional']) {
                                    case 0:
                                        $img = 'escudo';
                                        $title = 'Segurança de Eventos';
                                        break;
                                    case 1:
                                        $img = 'chama';
                                        $title = 'Bombeiro Civil';
                                        break;
                                    case 2:
                                        $img = 'banimento';
                                        $title = 'Controlador de Acesso';
                                        break;
                                }
                            ?>
                        <img src="images/<?=$img?>.png" alt="" title='<?=$title?>' style='width:25px;height:25px;margin-right:10px;'> 
                        <!-- <img src="images/user.png" alt="" style='width:25px;height:25px;margin-right:10px;'> -->
                        <p><?=$eventsArray2[0]?>/10</p>
                    </div>    
                </div>
            </div>
<?php
        }
?>


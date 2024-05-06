<?php

    session_start();

    require_once './connection.php';
    include '../includes/libraries.php';

    // for ($i = 1; $i <= 33333333; $i++){
        
    // }

    $horario = $_POST['horario'];
    empty($horario) ? $horario='BETWEEN 0 AND 3' : $horario = "=$horario";

    $valor = $_POST['value'];
    empty($valor) ? $valor=0 : $valor;

    $myEvent = $_POST['myevent'];

    // echo $myEvent;

    if($connStatus){
        if(isset($_SESSION['user.id'])){
            if($myEvent == 1){
                if(!isset($_SESSION['user.auth']) || $_SESSION['user.auth'] != 1){
                    header ('Location: ./login.php?auth=0');
                }
                $query = "SELECT id, eventName, DATE_FORMAT(eventStart, '%d/%m - %H:%m') as eventStart, DATE_FORMAT(eventEnd, '%d/%m - %H:%m') as eventEnd, eventDescription, eventLocation, eventGeoLocation, eventPayment, eventVacancies, eventActive, eventProfessional, eventContractorId FROM tabevents WHERE eventContractorId = {$_SESSION['user.id']} AND eventCodTime $horario AND eventPayment >= $valor AND eventActive=1 ORDER BY (eventStart AND eventPayment)";
            }else{
                $query = "SELECT id, eventName, DATE_FORMAT(eventStart, '%d/%m - %H:%m') as eventStart, DATE_FORMAT(eventEnd, '%d/%m - %H:%m') as eventEnd, eventDescription, eventLocation, eventGeoLocation, eventPayment, eventVacancies, eventActive, eventProfessional, eventContractorId FROM tabevents WHERE eventContractorId != {$_SESSION['user.id']} AND eventCodTime $horario AND eventPayment >= $valor AND eventActive=1 ORDER BY eventStart, eventPayment";
            }
        }else{
            $query = "SELECT id, eventName, DATE_FORMAT(eventStart, '%d/%m - %H:%m') as eventStart, DATE_FORMAT(eventEnd, '%d/%m - %H:%m') as eventEnd, eventDescription, eventLocation, eventGeoLocation, eventPayment, eventVacancies, eventActive, eventProfessional, eventContractorId FROM tabevents WHERE eventCodTime $horario AND eventPayment >= $valor AND eventActive=1 ORDER BY (eventStart AND eventPayment)";
        }
    }

    $stmt = $conn->query($query);
    $eventsArray = $stmt->fetchall(PDO::FETCH_NUM);

    $cont = 0;
    foreach($eventsArray as $events){
        
        $cont +=1;
        $query2 = "select count(tabusers_cadID) from tabinscricoes WHERE tabevents_id = $events[0] AND inscricao_validate =1";
        $stmt2 = $conn->query($query2);
        // $eventsArray = $stmt->fetchall(PDO::FETCH_ASSOC);
        $eventsArray2 = $stmt2->fetch(PDO::FETCH_NUM);
?>
    <img id='loadingGifBlue' src="images/loadingGifBlue.gif" alt="" style='display:none;'>

    <div class='publication-body' data-id='<?=$events[0]?>' data-professional='<?=$events[10]?>' data-contractor='<?=$events[11] == $_SESSION['user.id'] ? 1 : 0?>'>
                    
        <div class="publication-title">
            <div style='justify-content:space-between;height:fit-content'>
                <!-- <h3 id='publicationTitle' name='publicationTitle' data-maxChar=""><?=strlen($events[1]) > 25 ? substr($events[1], 0, 23) . '...' : $events[1] ;?></h3> -->
                <h3 id='publicationTitle' name='publicationTitle'><?=$events[1]?></h3>
                <?php
                
                // echo isset($_SESSION['user.id']) && $_SESSION['user.id'] === $events[11] ? "<img id='editarEvento' src='images/definicoes.png' alt='' style='width:25px;height:25px;' onclick=''>" : ""

                ?>
            </div>
        </div>
        <hr>
        <div class='publication-date' style="min-height:10%;display: flex;align-items: center;">
            <img src="images/date.png" alt="" style='width:25px;height:25px;margin-right:10px;'>
            <p><?='Inicio: '.  $events[2] .'  <br>Término:   '. $events[3]?></p>
        </div>
        <hr>
        <div class="publication-description">
            <!-- <?=strlen($events[4]) > 150 ? substr($events[4], 0, 150) . '...' : $events[1] ?> -->
            <?=$events[4]?>
        </div>
        <hr>
        <div class="publication-bonus" style='display: flex;align-items: center;margin-top:3%'>
            <div style='display: flex;align-items: center;'>
                <img src="images/payment.png" alt="" style='width:25px;height:25px;margin-right:10px;'>    
                <p>R$ <?=floatInt($events[7])?></p>
            </div>
            <div style='display: flex;align-items: center;'>
                <?php
                switch ($events[10]) {
                    case 1:
                        $img = 'escudo';
                        $title = 'Segurança de Eventos';
                        break;
                    case 2:
                        $img = 'chama';
                        $title = 'Bombeiro Civil';
                        break;
                    case 3:
                        $img = 'banimento';
                        $title = 'Controlador de Acesso';
                        break;
                }
                ?>
                <img src="images/<?=$img?>.png" alt="" title='<?=$title?>' style='width:25px;height:25px;margin-right:10px;'>  
                <p class="full-right"><?=$eventsArray2[0] .'/'. $events[8]?></p>
            </div>
        </div>
    </div>


<?php }?>

<?php

    require_once 'connection.php';
    include '../includes/ownfunctions.php';

    $eventID = $_POST['eventID'];
    $payment = str_replace(',', '.', $_POST['payment']);
    $uf = $_POST['uf'];

    if($connStatus){
        $query = "SELECT *,TIMESTAMPDIFF(YEAR, users.cadDataNasc, NOW()) AS idade FROM tabinscricoes as inc LEFT JOIN tabusers as users ON users.cadID = inc.tabusers_cadID WHERE tabevents_id = $eventID;";
    }

        $stmt = $conn->query($query);
        $ArrayCandidates = $stmt->fetchall(PDO::FETCH_ASSOC);

        foreach($ArrayCandidates as $candidates) {
            // $eventId = $candidates['id'];
            // $query2 = "select count(tabusers_cadID) from tabinscricoes WHERE tabevents_id = {$candidates['id']} AND inscricao_validate =1";
            // $stmt2 = $conn->query($query2);
            // $eventsArray2 = $stmt2->fetch(PDO::FETCH_NUM);
?>

            <div data-id='' class='login-frame returnCandidate' style='width:90%;height:;margin-bottom:20px;cursor:pointer;'>
                <h4><?= strlen($candidates['cadName']) > 25 ? substr($candidates['cadName'], 0, 25) . '...' : $candidates['cadName']?></h4>
                <hr>
                    <div style='display:flex;justify-content:space-between;'>
                        <div class='' style='width:48%;height:150px;'>
                            <img src="./images/fotoPerfilRhyanLucca.png" style='width:100%;height:100%;border-radius:5px' alt="">
                        </div>
                        
                        <div class='' style='width:48%;height:150px;'>
                            <p>Idade: <?=$candidates['idade']?></p>
                            <br>
                            <p>Sexo: Masculino</p>
                            <br>
                            <p>Eventos: +100</p>
                            <br>
                            <div class='' style='display:flex;justify-content:space-between;width:80%;'>
                                <img src="./images/escudo.png" style='width:25px;height:25px;' alt="">
                                <img src="./images/chama.png" style='width:25px;height:25px;' alt="">
                                <img src="./images/banimento.png" style='width:25px;height:25px;' alt="">
                            </div>
                        </div>
                    </div>
                <hr>
                <div style='display:flex;justify-content:space-between;'>
                    <button id='btnAceptCandidate' name='btnAceptCandidate' class='filter-button' style='width:48%;background-color:green;border-color:green;' data-candidateId='<?=$candidates['cadID']?>'>
                        Aceitar
                    </button>

                    <button id='btnRejectCandidate' name='btnRejectCandidate' class='filter-button' style='width:48%;background-color:red;border-color:red;'>
                        Rejeitar
                    </button>                
                </div>
            </div>

<?php
        }
?>




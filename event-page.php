<?php 
session_start();
include 'includes/libraries.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreeEvent - Evento</title>

    <style>

        .body-area{
            margin: 1rem;
        }

        /* Extra small devices (telefones pequenos): */
        @media (max-width:576px){
            .body-area{               
                display: block;
            }

            #eventFrame{
                width: 90%;
                margin: 1rem auto;
            }

            #eventsCandidatesFrame{
                width: 90%;
                margin: 1rem auto;
                overflow-y:scroll;
            }

        }
        
        /* Small devices (telefones maiores e tablets pequenos) */
        @media (min-width:576px) and (max-width:769px){

            .body-area{
                display: grid;
                grid-template-rows: auto auto;
                grid-template-columns: 55% 45%;
            }

            #eventFrame{
                width: 90%;
                margin: 1rem auto;
            }

            #eventsCandidatesFrame{
                width: 90%;
                margin: 1rem auto;
                overflow-y:scroll;
            }

        }
        
        /* Medium devices (tablets maiores e laptops): */
        @media (min-width: 769px) and (max-width:992px){
            
            .body-area{
                display: grid;
                grid-template-rows: auto auto;
                grid-template-columns: 55% 45%;
            }

            #eventFrame{
                width: 90%;
                margin: 1rem auto;
            }

            #eventsCandidatesFrame{
                width: 90%;
                margin: 1rem auto;
                overflow-y:scroll;
            }

        }
        
        /* Large devices (desktops): */
        @media (min-width:992px) and (max-width:1200px){
            
            .body-area{
                display: grid;
                grid-template-rows: auto auto;
                grid-template-columns: 55% 45%;
            }

            #eventFrame{
                width: 90%;
                margin: 1rem auto;
            }

            #eventsCandidatesFrame{
                width: 90%;
                margin: 1rem auto;
                overflow-y:scroll;
            }

        }
        
        /* Extra large devices (telas grandes e monitores de alta resolução): */
        @media (min-width:1200px){

            .body-area{
                display: grid;
                grid-template-rows: auto auto;
                grid-template-columns: 55% 45%;
            }

            #eventFrame{
                width: 90%;
                margin: 1rem auto;
            }

            #eventsCandidatesFrame{
                width: 90%;
                margin: 1rem auto;
                overflow-y:scroll;
            }

        }
        

    </style>

</head>
<header>
    <?php 
    require_once 'navbar.php';
    require_once 'engines/connection.php';    
    $idEvento = $_GET['eventId'];
    if($connStatus){
        $query = "SELECT *, DATE_FORMAT(eventStart, '%d/%m às %H:%m') as eventStart, DATE_FORMAT(eventEnd, '%d/%m às %H:%m') as eventEnd FROM tabevents WHERE id = $idEvento";
        $stmt = $conn->query($query);
        $eventData = $stmt->fetch(PDO::FETCH_ASSOC);
        // $query = "SELECT * FROM tabevents WHERE id = $idEvento"
        $sessao = 0;
        $inscricao = 0;
        $aprovacao = 0;
        if(isset($_SESSION["user.id"])){
            $query = "SELECT * FROM tabinscricoes WHERE tabusers_cadID = {$_SESSION["user.id"]} AND tabevents_id = $idEvento";
            $stmt = $conn->query($query);
            $responseArray = $stmt->fetch();
            $sessao = 1;
            $inscricao = 1;
        }
    }
    ?>
</header>
<body>
        <div class="body-area">
        <!-- style='display:flex;justify-content:space-between;' -->
        <div id='eventFrame' class='login-frame' data-id='<?=$idEvento?>' data-uf='<?=$eventData['eventUF']?>' data-contractor='<?=$eventData['eventContractorId'] == $_SESSION['user.id'] ? 1 : 0?>' data-inscricao='<?=$inscricao?>' data-sessao='<?=$sessao?>'>   
                <div style='display: flex;align-items: center; justify-content:space-between;'>
                    <h1><?=$eventData['eventName']?></h1>
                    <!-- <h2><?=$eventData['eventProfessional']?></h2> -->
                    <?php
                        switch ($eventData['eventProfessional']) {
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
                        };
                    ?>
                    <img src="images/<?=$img?>.png" alt="" title='<?=$title?>' style='width:40px;height:40px;margin-right:10px;'>
                    <!-- <img src="images/escudo.png" alt="" title='<?=$title?>' style='width:40px;height:40px;margin-right:10px;'> -->

                </div>
                <br>
                <hr>
                <div class='form-input-div' style='display: flex;align-items: center;'>
                    <img src="images/payment.png" alt="" style='width:30px;height:30px;margin-right:10px;'>
                    <p id='paymentValue' data-value='<?=floatInt($eventData['eventPayment'])?>'>R$ <?=floatInt($eventData['eventPayment'])?></p>
                </div>
                <div class='form-input-div' style='display: flex;align-items: center;'>
                    <img src="images/location.png" alt="" style='width:30px;height:30px;margin-right:10px;'>
                    <p><?='São Paulo, '. $eventData['eventRua'] .', CEP:'. $eventData['eventGeoLocation']?></p>
                </div>
                <div class='form-input-div' style='display: flex;align-items: center;'>
                    <img src="images/date.png" alt="" style='width:30px;height:30px;margin-right:10px;'>
                    <p><?='Inicio: '.  $eventData['eventStart'] .'  <br>Término:   '. $eventData['eventEnd']?></p>
                </div>
                <hr>
                <h3>Dados do contratante</h3>
                <div class='form-input-div' style='display: flex;align-items: center;'>
                    <img src="images/user.png" alt="" style='width:30px;height:30px;margin-right:10px;'>
                    <p id='contractorName' name='contractorName'><?=isset($_SESSION['user.id']) ? $eventData['eventContractor'] : 'Contratante da Silva' ?></p>
                </div>
                <div class='form-input-div' style='display: flex;align-items: center;'>
                    <img src="images/contact.png" alt="" style='width:30px;height:30px;margin-right:10px;'>
                    <p id='contractorTel' name='contractorTel'><?=isset($_SESSION['user.id']) ? $eventData['eventContractorTel'] : '(11)912345678' ?></p>
                </div>
                <div class='form-input-div' style='display: flex;align-items: center;'>
                    <img src="images/email.png" alt="" style='width:30px;height:30px;margin-right:10px;'>
                    <p id='contractorEmail' name='contractorEmail'><?=isset($_SESSION['user.id']) ? $eventData['eventContractorEmail'] : 'contratante@gmail.com' ?></p>
                </div>
                <hr>
                <h2>Descrição</h2>
                <br>
                <p><?=$eventData['eventDescription']?></p>
                <br>
                <hr>
                <br>
                <div>
                    <form id='formEventFunction' name='formEventFunction' action="engines/apply-event.php" method='POST'>
                        <input type="hidden" id='hdnEv' name="hdnEv" value='<?=$idEvento?>'>
                        <input id='btnCandidatar' name='btnCandidatar'  type="submit" value='Candidatar-se' class='filter-button' style='display:none;'>
                        <button id='btnAlterarEvento' name='btnAlterarEvento' type='button' class='filter-button' style='display:none;'>Alterar Evento</button>
                    </form>
                </div>
            </div>

            <div id="eventsCandidatesFrame" class='login-frame'>
                <h2 id='returnTitle'></h2>
                <hr>
                <br>
                <div id='similarEvents'>
                </div>
            </div>
        </div>

        <script>

            var btnCandidatar = document.getElementById('btnCandidatar');
            var eventID = document.getElementById('eventFrame').getAttribute('data-id');
            var inscricao = document.getElementById('eventFrame').getAttribute('data-inscricao');
            var formEventFunction = document.getElementById('formEventFunction');
            var contractor = document.getElementById('eventFrame').getAttribute('data-contractor')
            var session = document.getElementById('eventFrame').getAttribute('data-sessao')

            window.onload = function(){
                if(session == 0){
                    document.getElementById('contractorName').style.filter = 'blur(5px)';
                    document.getElementById('contractorTel').style.filter = 'blur(5px)';
                    document.getElementById('contractorEmail').style.filter = 'blur(5px)';
                    btnCandidatar.disabled = true
                }
                if(contractor == 1){
                    document.getElementById('returnTitle').innerText = 'Candidatos';
                    btnAlterarEvento.style.display = 'block';
                    returnCandidates();
                }else{
                    document.getElementById('returnTitle').innerText = 'Eventos similares';
                    btnCandidatar.style.display = 'block';
                    if(inscricao == 1){
                        btnCandidatar.disabled = true;
                    }
                    similarEvents();
                }
            };

            function returnCandidates(){
                var xhr = new XMLHttpRequest();
                var payment = document.getElementById('paymentValue');
                var payment = payment.getAttribute('data-value');
                var uf = document.getElementById('eventFrame').getAttribute('data-uf');
                xhr.onreadystatechange = function(){
                    if(xhr.readyState === 4 && xhr.status === 200){
                        if(xhr.responseText === ''){
                            texto = 'Não há eventos similares'
                            document.getElementById('similarEvents').innerHTML = texto;
                        }
                        document.getElementById('similarEvents').innerHTML = xhr.responseText;
                    }
                };
                xhr.open('POST', './engines/load-candidates.php');
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.send('eventID=' + eventID + '&payment=' + payment + '&uf=' + uf);
            };

            function similarEvents(){
                var xhr = new XMLHttpRequest();
                var payment = document.getElementById('paymentValue');
                payment = payment.getAttribute('data-value');
                var uf = document.getElementById('eventFrame').getAttribute('data-uf');
                xhr.onreadystatechange = function(){
                    if(xhr.readyState === 4 && xhr.status === 200){
                        if(xhr.responseText === ''){
                            texto = 'Não há eventos similares'
                            document.getElementById('similarEvents').innerHTML = texto;
                        }
                        document.getElementById('similarEvents').innerHTML = xhr.responseText;
                    }
                };
                xhr.open('POST', './engines/load-similar-events.php');
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.send('eventID=' + eventID + '&payment=' + payment + '&uf=' + uf);
            };

        </script>

</body>
</html>

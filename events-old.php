<?php
    session_start();
    require_once 'navbar.php';
    include 'includes/libraries.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreeEvent - Eventos</title>
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script> -->
</head>

<body >

    <div class="body-area">
        
        <div class="filter-body">

            <div style="margin: 0.3rem;">
                <form action="" class="submitFormFilter" id="filterForm" name="filterForm" data-myEvents='<?=isset($_SESSION['user.id']) ? 1 : 0 ?>'>
             
                    <div class="filter">
                        <select name="extraFilter" id="extraFilter" class="form-input">
                            <option value="" selected style="display: none;">Estado</option>
                            <option value="">São Paulo</option>
                        </select>
                    </div>  

                    <div class="filter">
                        <select name="cityFilter" id="cityFilter" class="form-input">
                            <option value="" selected style="display: none;">Cidade</option>
                            <option value="0">Todos</option>
                            <option value="1">São Paulo</option>
                            <option value="2">Osasco</option>
                            <option value="3">Carapicuíba</option>
                        </select>
                    </div>
                    <div class="filter">
                        <select  name="timeFilter" id="timeFilter" class="form-input">
                            <option value="" selected style="display: none;">Período</option>
                            <option value="0">Todos</option>
                            <option value="1">Manhã</option>
                            <option value="2">Tarde</option>
                            <option value="3">Noturno</option>
                        </select>
                    </div>
                    <div class="filter">
                        <input id="valueFilter" name="valueFilter" type="text" placeholder=" Valor a partir de R$:" class="form-input">
                    </div>
                    <div id='myEventsFilter' class="filter" style='width: 15%;display:flex;align-items:center;'>
                        <input id="myEvents" name="myEvents" type="checkbox" style='width:20px;height:20px;'>
                        <label for="myEvents" style='margin-left:5px;'>Meus eventos</label>
                    </div>
                    <div class="filter">
                        <button type="button" onclick='' id="clearFormButton" name="clearFormButton" class="filter-button">
                            Limpar
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
        <h2><span id='numEvents' style='display:none;'>10</span> Eventos Disponíveis</h2>
        <hr>

        <img id='loadingGifBlue' src="images/loadingGifBlue.gif" alt="" style='display:none;margin:0 auto;'>

        <div class="publications-container" id="publication-container">

        </div>
    </div>

    <script>

        var filterForm = document.getElementById('filterForm');
        var valueFilter= document.getElementById('valueFilter');
        var horarioFilter = document.getElementById('timeFilter');
        var clearFormButton = document.getElementById('clearFormButton');
        var myEventsFilter = document.getElementById('myEventsFilter');
        var myEvents = document.getElementById('myEvents');

        if(filterForm.getAttribute('data-myEvents') == 1){
                myEventsFilter.style.display='flex';
            }else{
                myEventsFilter.style.display='none';
        }

        window.onload = function(){
            loadAjax();
        }

        myEvents.onchange = function(){
            loadAjax();
        }

        clearFormButton.onclick= function(){
            filterForm.reset();
            loadAjax();
        }

        horarioFilter.onchange = function(){
            loadAjax();
        }

        valueFilter.addEventListener('keyup', function() {
            loadAjax();
        });

        filterForm.onsubmit = function(event){
            event.preventDefault();
            loadAjax();
        }

        function loadAjax(){
            var xhr = new XMLHttpRequest();
            var value = document.getElementById('valueFilter');
            var horario = document.getElementById('timeFilter');
            var loadingGifBlue = document.getElementById('loadingGifBlue');

            if(myEvents.checked){
                myevent = 1
            }else{
                myevent = 0
            }

            horario = horario.value;
            value = value.value;

            xhr.onreadystatechange = function(){
                if(xhr.readyState !== 4 && xhr.status !== 200){
                    document.getElementById('publication-container').innerHTML = ''
                    loadingGifBlue.style.display = 'block';
                }
                
                if(xhr.readyState === 4 && xhr.status ===200){
                    loadingGifBlue.style.display = 'none';
                    document.getElementById('publication-container').innerHTML = xhr.responseText;
                    setTimeout(function(){
                        getEventData()
                    }, 10);
                }
            };
            xhr.open('POST', './engines/return-events.php');
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send('horario='+horario+'&value='+value+'&myevent='+myevent);
        };

        function getEventData(){
            var eventoDivs = document.querySelectorAll('.publication-body');
            console.log(eventoDivs)
            eventoDivs.forEach(function(eventoDiv) {
                eventoDiv.addEventListener('click', function() {
                    idEvent = this.getAttribute('data-id');
                    console.log(idEvent);
                    window.location.href = 'event-page.php?eventId='+idEvent;
                });
            });
        }

    </script>

</body>

</html>

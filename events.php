<?php
    session_start();
    // require_once 'navbar.php';
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

    <style>

            .publications-container{
                margin: 1rem;
            }

            .publication-description{
                text-align: left;
                overflow: hidden;
                text-overflow: ellipsis;
            }

        /* Extra small devices (telefones pequenos): */
        @media (max-width:576px){

            .body-area{
                width: 98%;
                margin: 0 auto;
            }

            .filter-body{
                
                width: 90%;
                margin: 20px auto;
            }

            .submitFormFilter{
                
                display: block;
            }

            .filter{
                
                width: 90%;
                margin: 0 auto;
            }

            .myEventsFilter{
                
                display: block;

            }

            .clearFormButton{
                
            }

            .publications-container{
                display: grid;
                grid-template-rows: auto;
                grid-template-columns: 100%;
            }

            .publication-body{
                background-color: #fff;
                cursor: pointer;
                width: 90%;
                max-width: 90%;
                margin: .5rem auto;
                padding: 1%;
                border: 1px solid rgb(190, 190, 190);
                box-shadow: 3px 3px 3px rgb(190, 190, 190);
                border-radius: 7px;
            }

            .publication-title{
                text-align: left;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .publication-date{

            }

            .publication-description{

            }

            .publication-bonus{

            }



        }

        /* Small devices (telefones maiores e tablets pequenos) */
        @media (min-width:576px) and (max-width:769px){

            .body-area{
                width: 98%;
                margin: 0 auto;
            }

            .filter-body{
                
                width: 90%;
                margin: 20px auto;
            }

            .submitFormFilter{
                
                display: grid;
                grid-template-rows: auto auto;
                grid-template-columns: 50% 50%;
            }

            .filter{
                
                width: 90%;
                margin: 0 auto;
            }

            .myEventsFilter{
                
                display: block;

            }

            .clearFormButton{
                
            }

            .publications-container{
                display: grid;
                grid-template-rows: auto auto;
                grid-template-columns: 49% 49%;
            }

            .publication-body{
                background-color: #fff;
                cursor: pointer;
                /* width: 65%; */
                margin: .5rem;
                padding: 1%;
                border: 1px solid rgb(190, 190, 190);
                box-shadow: 3px 3px 3px rgb(190, 190, 190);
                border-radius: 7px;
            }

            .publication-title{
                text-align: left;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

        }

        /* Medium devices (tablets maiores e laptops): */
        @media (min-width: 769px) and (max-width:992px){

            #myEventsFilter{
                /* width: 15%; */
                display:flex;
                align-items:center;
            }

            .filter-body{
                width: 90%;
                margin: 20px auto;
            }

            .publications-container{
                margin: .5rem;
                display: grid;
                grid-template-rows: auto auto auto;
                grid-template-columns: 33% 33% 33%;
            }

            .publication-body{
                background-color: #fff;
                cursor: pointer;
                margin: .2rem;
                padding: 1%;
                border: 1px solid rgb(190, 190, 190);
                box-shadow: 3px 3px 3px rgb(190, 190, 190);
                border-radius: 7px;
            }

            .publication-title{
                text-align: left;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .publication-date{

            }

            .publication-description{

            }

            .publication-bonus{

            }

        }

        /* Large devices (desktops): */
        @media (min-width:992px) and (max-width:1200px){

            #myEventsFilter{
                display:flex;
                align-items:center;
            }

            .filter-body{
                width: 90%;
                margin: 20px auto;
            }

            .publications-container{
                /* border: 1px solid red; */
                margin: .5rem;
                display: grid;
                grid-template-rows: auto auto auto auto;
                grid-template-columns: 24% 24% 24% 24%;
            }

            .publication-body{
                font-size: .9rem;
                background-color: #fff;
                cursor: pointer;
                margin-bottom: .6rem;
                padding: 1%;
                border: 1px solid rgb(190, 190, 190);
                box-shadow: 3px 3px 3px rgb(190, 190, 190);
                border-radius: 7px;
            }

            .publication-title{
                text-align: left;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .publication-date{

            }

            .publication-description{
            }

            .publication-bonus{

            }

        }

        /* Extra large devices (telas grandes e monitores de alta resolução): */
        @media (min-width:1200px){

            #myEventsFilter{
                display:flex;
                align-items:center;
            }

            .filter-body{
                width: 90%;
                margin: 20px auto;
            }

            .publications-container{
                display: grid;
                grid-template-rows: auto auto auto auto;
                grid-template-columns: 24% 24% 24% 24%;
            }

            .publication-body{
                font-size: .9rem;
                background-color: #fff;
                cursor: pointer;
                margin-bottom: .6rem;
                padding: 1%;
                border: 1px solid rgb(190, 190, 190);
                box-shadow: 3px 3px 3px rgb(190, 190, 190);
                border-radius: 7px;
            }

            .publication-title{
                text-align: left;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .publication-date{

            }

            .publication-description{

            }

            .publication-bonus{

            }

        }

    </style>

</head>

<body class="">
    <?php require_once 'navbar.php'; ?>

    <div class="body-area">
        
        <div class="filter-body">

            <div style="margin: 0.3rem;">
                <form action="" class="submitFormFilter" id="filterForm" name="filterForm" data-myEvents='<?=isset($_SESSION['user.id']) ? 1 : 0 ?>'>
             
                    <div class="filter">
                        <select name="ufFilter" id="ufFilter" class="form-input">
                            <option value="" selected style="display: none;">Estado</option>
                        </select>
                    </div>  

                    <div class="filter">
                        <select name="cityFilter" id="cityFilter" class="form-input">
                            <option value="" selected style="display: none;">Cidade</option>
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
                        <input id="valueFilter" name="valueFilter" type="text" placeholder=" Valor:" class="form-input">
                    </div>
                    <div id='myEventsFilter' class="filter">
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
        
        <h2 style="margin: .3rem 1rem;">Eventos Disponíveis</h2>
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
            loadUfCity("ufFilter", "cityFilter")
            loadAjax();
        }

        myEvents.onchange = function(){
            loadAjax();
        }

        clearFormButton.onclick= function(){
            filterForm.reset();
            cityFilter.innerHTML = "<option value='' selected style='display: none;'>Cidade</option>"
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


        function loadUfCity(uf,city){

            var ufSelect = document.getElementById(`${uf}`)
            var citySelect = document.getElementById(`${city}`)

            var xhr = new XMLHttpRequest();
            xhr.open("GET", "includes/brasil.json", true)
            xhr.onreadystatechange = function(){
                
                if(xhr.readyState === 4 && xhr.status === 200){
                    data = JSON.parse(xhr.responseText)
                    data.estados.forEach(estado => {
                        ufSelect.innerHTML += `<option value='${estado.sigla}' data-ibge='${estado.ibge}'>${estado.nome}</option>`;
                        ufSelect.onchange = function(){
                            var selectedUf = data.estados.find(estado => estado.sigla === ufSelect.value)
                            console.log(ufSelect.value)
                            citySelect.innerHTML = ""
                            if (selectedUf){
                                selectedUf.cidades.forEach(cidade => {
                                    citySelect.innerHTML += `<option value='${cidade.ibge}'>${cidade.name}</option>`;
                                })
                                citySelect.disabled = false
                            }
                            else{
                                citySelect.disabled = false
                            }
                        }
                    });
                }
            }
            xhr.send();
        }

        function loadAjax(){
            var xhr = new XMLHttpRequest();

            var ufFilter = document.getElementById('ufFilter')
            var cityFilter = document.getElementById('cityFilter')

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

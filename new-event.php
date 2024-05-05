<?php 
    require_once 'engines/access-validator.php';
    require_once 'navbar.php';
    include 'includes/libraries.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreeEvent - Novo Evento</title>
</head>
<header>
    
<style>

    .form-input{
        align-items: center;
        width: 100%;
    }

    thead, tbody{
        margin:0;
        padding: 0;
    }

    /* Extra small devices (telefones pequenos): */
    @media (max-width:576px){
        .body-area{
            margin: 1rem 0 ;
        }

        .new-event-frame{
            border: 1px solid grey; 
            border-radius: 0.5rem;
            width: 90%; 
            margin: 0 auto; 
            padding: 2%;
            height: fit-content;
            background-color: #fff;
            border: 0.5px solid rgb(190, 190, 190);
            box-shadow: 3px 3px 3px rgb(190, 190, 190);
        }

        .form-input-div{
            display: block;
            margin: 15px 0 15px 0;
        }

        .form-input{
            margin: 1rem 0;
        }

        #dateTimeArea{
            display: grid;
            grid-template-rows: auto auto;
            grid-template-columns: 48% 48%;
            justify-content:space-between;
        }

        #dateTimeArea div{
            margin: .5rem 0;
            width: 100%;
        }

        #tableDiv{
            display: none;
            font-size: .7rem;
            overflow-x: auto;
        }

        .functionTable{
            width: 100%;
            border-collapse: collapse;
        }
        

        .pagamentoDiv{
            display: block;
        }

        th{
        }

        .tdProf:nth-child(1), #thProf:nth-child(1) {
            margin: 0;            
            text-align: left;
            width: 25%;
        }
 
        #thSex, .tdSex{
             text-align: left;
            margin: 0;          
            /* width: 25%; */
            /* display: none; */
        }

        #thQtde, .tdQtde{
            text-align: left;
            margin: 0;
        }

        #thValue, .tdValue{
            text-align: left;
            margin: 0;
            /* width: 15%; */
        }
        
        #thTotal, .tdTotal{
            text-align: left;
            margin: 0;                        
            /* display: none; */
            width: 15%;
        }
        
        #thAct, .tdAct{
            text-align: left;
            margin: 0;
            /* width: 20%; */
        }

    }
    
    /* Small devices (telefones maiores e tablets pequenos) */
    @media (min-width:576px) and (max-width:769px){
        .body-area{
            margin: 1rem 0 ;
        }

        .new-event-frame{
            border: 1px solid grey; 
            border-radius: 0.5rem;
            width: 80%; 
            margin: 0 auto; 
            padding: 3%;
            height: fit-content;
            background-color: #fff;
            border: 0.5px solid rgb(190, 190, 190);
            box-shadow: 3px 3px 3px rgb(190, 190, 190);
        }

        .form-input-div{
            display: block;
            margin: 15px 0 15px 0;
        }

        .form-input{
            margin: 1rem 0;
        }

        #dateTimeArea{
            display: grid;
            grid-template-rows: auto auto auto auto;
            grid-template-columns: 22% 22% 24% 24%;
            justify-content:space-between;
        }

        #dateTimeArea div{
            margin: .5rem 0;
            width: 100%;
        }

        #localDiv{
            display: grid;
            grid-template-rows: auto auto auto;
            grid-template-columns: 32% 32% 32%;
            justify-content: space-between;
        }


        #inputEventUF{
            display: block;
            width:100%;
        }

        #inputEventCity{
            display: block;
            width:100%;
        }

        #inputEventCep{
            width: 100%;
        }

        #logNumdiv{
            display: grid;
            grid-template-rows: auto auto;
            grid-template-columns: 78% 20%;
            justify-content: space-between;
        }

        #inputEventStreet{
            width:;
        }

        #inputEventStreetNumber{
            width:;
        }

        #vagaDiv{
            display: grid;
            grid-template-rows: auto auto;
            grid-template-columns: 45% 45%;
            justify-content: space-between;
        }

        #tableDiv{
            display: none;
            font-size: .7rem;
            overflow-x: auto;
        }

        .tdProf:nth-child(1), #thProf:nth-child(1) {
            margin: 0;            
            text-align: left;
            width: 25%;          
        }
 
        #thSex, .tdSex{
            text-align: left;
            margin: 0;            
            /* display: none; */
        }

        #thQtde, .tdQtde{
            text-align: left;
            margin: 0;   
            width: 10%;  
        }

        #thValue, .tdValue{
            text-align: left;
            margin: 0;   
            width: 20%;  
        }
        
        #thTotal, .tdTotal{
            text-align:;
            margin: 0;                        
            /* display: none; */
        }
        
        #thAct, .tdAct{
             /* text-align: left; */
            margin: 0;           
            /* font-size: 2rem;              */
        }

    }
    
    /* Medium devices (tablets maiores e laptops): */
    @media (min-width: 769px) and (max-width:992px){

        .body-area{
            margin: 1rem 0 ;
        }

        .new-event-frame{
            border: 1px solid grey; 
            border-radius: 0.5rem;
            width: 65%; 
            margin: 0 auto; 
            padding: 3%;
            height: fit-content;
            background-color: #fff;
            border: 0.5px solid rgb(190, 190, 190);
            box-shadow: 3px 3px 3px rgb(190, 190, 190);
        }

        .form-input-div{
            display: block;
            margin: 15px 0 15px 0;
        }

        .form-input{
            margin: 1rem 0;
        }

        #dateTimeArea{
            display: grid;
            grid-template-rows: auto auto auto auto;
            grid-template-columns: 23% 23% 23% 23%;
            justify-content:space-between;
        }

        #localDiv{
            display: grid;
            grid-template-rows: auto auto auto;
            grid-template-columns: 20% 38% 38%;
            justify-content: space-between;
        }


        #inputEventUF{
            display: block;
            width:100%;
        }

        #inputEventCity{
            display: block;
            width:100%;
        }

        #inputEventCep{
            width: 100%;
        }

        #logNumdiv{
            display: grid;
            grid-template-rows: auto auto;
            grid-template-columns: 78% 20%;
            justify-content: space-between;
        }

        #inputEventStreet{
            width:;
        }

        #inputEventStreetNumber{
            width:;
        }

        #vagaDiv{
            display: grid;
            grid-template-rows: auto auto;
            grid-template-columns: 45% 45%;
            justify-content: space-between;
        }

        #tableDiv{
            display: none;
            font-size: .7rem;
            overflow-x: auto;
        }
        

        .tdProf:nth-child(1), #thProf:nth-child(1) {
            margin: 0;            
            text-align: left;
            width: 30%;            
        }
 
        #thSex, .tdSex{
             text-align: left;
            margin: 0;            
        }

        #thQtde, .tdQtde{
             text-align: left;
            margin: 0;   
            width: 10%;                      
        }

        #thValue, .tdValue{
             text-align: left;
            margin: 0;   
            width: 15%;                      
        }
        
        #thTotal, .tdTotal{
             text-align:;
            margin: 0;                        
        }
        
        #thAct, .tdAct{
            margin: 0;           
        }

    }
    
    /* Large devices (desktops): */
    @media (min-width:992px) and (max-width:1200px){

        .body-area{
            margin: 1rem 0 ;
        }

        .new-event-frame{
            border: 1px solid grey; 
            border-radius: 0.5rem;
            width: 60%; 
            margin: 0 auto; 
            padding: 3%;
            height: fit-content;
            background-color: #fff;
            border: 0.5px solid rgb(190, 190, 190);
            box-shadow: 3px 3px 3px rgb(190, 190, 190);
        }

        .form-input-div{
            display: block;
            margin: 15px 0 15px 0;
        }

        .form-input{
            margin: 1rem 0;
        }

        #dateTimeArea{
            display: grid;
            grid-template-rows: auto auto auto auto;
            grid-template-columns: 23% 23% 23% 23%;
            justify-content:space-between;
        }

        #localDiv{
            display: grid;
            grid-template-rows: auto auto auto;
            grid-template-columns: 20% 38% 38%;
            justify-content: space-between;
        }


        #inputEventUF{
            display: block;
            width:100%;
        }

        #inputEventCity{
            display: block;
            width:100%;
        }

        #inputEventCep{
            width: 100%;
        }

        #logNumdiv{
            display: grid;
            grid-template-rows: auto auto;
            grid-template-columns: 78% 20%;
            justify-content: space-between;
        }

        #inputEventStreet{
            width:;
        }

        #inputEventStreetNumber{
            width:;
        }

        #vagaDiv{
            display: grid;
            /* grid-template-rows: auto auto auto auto; */
            grid-template-columns: repeat(2, 45%);
            justify-content: space-between;
        }


        #tableDiv{
            display: none;
            font-size: .7rem;
            overflow-x: auto;
        }
        

        .tdProf:nth-child(1), #thProf:nth-child(1) {
            margin: 0;            
            text-align: left;
            width: 30%;            
        }
 
        #thSex, .tdSex{
             text-align: left;
            margin: 0;            
        }

        #thQtde, .tdQtde{
             text-align: left;
            margin: 0;   
            width: 10%;                      
        }

        #thValue, .tdValue{
             text-align: left;
            margin: 0;   
            width: 15%;                      
        }
        
        #thTotal, .tdTotal{
             text-align:;
            margin: 0;                        
        }
        
        #thAct, .tdAct{
            margin: 0;           
        }

        
        .pagamentoDiv{
            display: block;
        }

        .pagamentoDiv div{

        }

        .pagamentoDiv div label{

        }

    }
    
    /* Extra large devices (telas grandes e monitores de alta resolução): */
    @media (min-width:1200px){
 
        .body-area{
            margin: 1rem 0 ;
        }

        .new-event-frame{
            border: 1px solid grey; 
            border-radius: 0.5rem;
            width: 50%; 
            margin: 0 auto; 
            padding: 3%;
            height: fit-content;
            background-color: #fff;
            border: 0.5px solid rgb(190, 190, 190);
            box-shadow: 3px 3px 3px rgb(190, 190, 190);
        }

        .form-input-div{
            display: block;
            margin: 15px 0 15px 0;
        }

        .form-input{
            margin: 1rem 0;
        }

        #dateTimeArea{
            display: grid;
            grid-template-rows: auto auto auto auto;
            grid-template-columns: 23% 23% 23% 23%;
            justify-content:space-between;
        }

        #localDiv{
            display: grid;
            grid-template-rows: auto auto auto;
            grid-template-columns: 20% 38% 38%;
            justify-content: space-between;
        }


        #inputEventUF{
            display: block;
            width:100%;
        }

        #inputEventCity{
            display: block;
            width:100%;
        }

        #inputEventCep{
            width: 100%;
        }

        #logNumdiv{
            display: grid;
            grid-template-rows: auto auto;
            grid-template-columns: 78% 20%;
            justify-content: space-between;
        }

        #inputEventStreet{
            width:;
        }

        #inputEventStreetNumber{
            width:;
        }

        #vagaDiv{
            display: grid;
            /* grid-template-rows: auto auto auto;
            grid-template-columns: 32% 32% 32%; */
            grid-template-columns: repeat(2, 45%);
            justify-content: space-between;
        }

        .pagamentoDiv{
            display: flex;
            justify-content: space-between;
        }

        .pagamentoDiv div{

        }

        .pagamentoDiv div label{

        }

        #tableDiv{
            display: none;
            font-size: .7rem;
            overflow-x: auto;
        }
        

        .tdProf:nth-child(1), #thProf:nth-child(1) {
            margin: 0;            
            text-align: left;
            width: 30%;            
        }
 
        #thSex, .tdSex{
             text-align: left;
            margin: 0;            
        }

        #thQtde, .tdQtde{
             text-align: left;
            margin: 0;   
            width: 10%;                      
        }

        #thValue, .tdValue{
             text-align: left;
            margin: 0;   
            width: 15%;                      
        }
        
        #thTotal, .tdTotal{
             text-align:;
            margin: 0;                        
        }
        
        #thAct, .tdAct{
            margin: 0;           
        }

    }

    .login-msg{
        align-items:center;
        text-align:center;
        margin-bottom:32px;
    }

    .label{
    }

    .form-input{
        margin-top:5px;
        width: 100%;
        font-size: 14px;
        height:35px;
    }

    .login-error-msg{
        display: none;
        padding: 5px;
        min-height:40px;
        max-height:40px;
        border-radius: 3px;
        background-color: rgba(255, 0, 0, 0.151);
        align-items: center;
        color: red;
    }

</style>


</header>
<body>
    
    <div class="body-area">
        <!-- <form id="formNewEvent" name="formNewEvent" class='new-event-frame' action="engines/add-event.php" method='post'> -->
        <form id="formNewEvent" name="formNewEvent" class='new-event-frame'>
            <h3>Registrar novo evento</h3>
            <hr>
            <div class='form-input-div'>
                <label for="">Nome do evento</label>
                <input class='form-input' id="inputEventName" name="inputEventName" type="text" minlength="5" maxlength="80" required>
            </div>
            <div class='form-input-div'>
                <label for="">Descrição</label>
                <textarea class='form-input' style='height:100px;' id="inputEventDescription" name="inputEventDescription" rows="6" cols="50" minlength="20" maxlength="600" required></textarea>
            </div>
            <div class='form-input-div' id="dateTimeArea">
                <div>
                    <label >Data Início</label>
                    <input type="date" class='form-input' id="inputEvenStartDate" name="inputEvenStartDate" required>
                </div>
                <div>
                    <label >Hora Início</label>
                    <input type="time" class='form-input' id="inputEventStartTime" name="inputEventStartTime" required>
                </div>
                <div>
                    <label >Data Término</label>
                    <input type="date" class='form-input' id="inputEventEndDate" name="inputEventEndDate" required>
                </div>
                <div>
                    <label >Hora Término</label>
                    <input type="time" class='form-input' id="inputEventEndTime" name="inputEventEndTime" required>
                </div>
            </div>  
            <div class='form-input-div' id='localDiv'>
                <div>
                    <label for="">CEP</label>
                    <input class='form-input' id="inputEventCep" name="inputEventCep" type="text" required>
                    <button type='button' id='btnSearchCep' name='btnSearchCep'  class='filter-button'>
                        <p>Pesquisar</p>
                        <img id='loadingGif' src="images/loadingGif.gif" alt="loading" style="margin:0 auto;width:35px;height:35px;display:none;"></img>
                    </button>
                </div>
                <div>
                    <label for="">UF</label>
                    <select class='form-input' id="inputEventUF" name="inputEventUF" required>                    
                        <option value="" selected style='display:none;'>Selecione a UF</option>
                    </select>
                </div>
                <div>
                    <label for="">Cidade</label>
                    <select name="inputEventCity" id="inputEventCity" class="form-input" required>
                        <option value="" selected style="display: none;">Selecione uma cidade</option>
                    </select>
                </div>
            </div>
            <div class='form-input-div' id='logNumdiv'>
                <div>
                    <label for="">Logradouro (Rua, Avenida, etc.)</label>
                    <input class='form-input' id="inputEventStreet" name="inputEventStreet" type="text" minlength="10" maxlength="150" required>
                </div>
                <div>
                    <label for="">Número</label>
                    <input class='form-input' id="inputEventStreetNumber" name="inputEventStreetNumber" type="text" required>
                </div>
            </div> 
            <br>
                <h3>Vagas</h3>
                <hr>              
            <div class='form-input-div' id='vagaDiv'>                      
                <div>
                    <label for="">Profissional</label>
                    <select id="inputEventProfessional" name="inputEventProfessional" class='form-input' required>
                        <option value="" data-id="0" selected style="display: none;">Selecione o profissional</option>
                        <option value="Segurança de eventos" data-id="1">Segurança de eventos</option>
                        <option value="Bombeiro Civil" data-id="2">Bombeiro Civil</option>
                        <option value="Controlador de Acesso" data-id="3">Controlador de acesso</option>
                    </select>
                </div>
                <div>
                <label for="">Sexo</label>
                    <select id="inputEventGenre" name="inputEventGenre" class='form-input' required>
                        <option value="0" selected style="display: none;">Selecione o Sexo</option>
                        <option value="1">Masculino</option>
                        <option value="2">Feminino</option>
                        <option value="3">Outros</option>
                    </select>
                </div>
                <div>
                    <label for=""> Vagas Qtde.</label>
                    <input type="number" class='form-input' id="inputEventVacancies" name="inputEventVacancies" required>
                </div>    
                <div>
                    <label for="">Pagamento R$</label>
                    <input type="number" class='form-input' id="inputEventPayment" name="inputEventPayment" required>
                </div>
            </div>
            <button type="button" class='filter-button' id="btnAdicionar" name="btnAdicionar">
                Adicionar
            </button>
            <br>
            <br>
            <div id='tableDiv'>
                <hr>
                <br>
                <table class="functionTable" style="width:100%">
                    <thead>
                        <tr>
                            <th id="thProf">Profissional</th>
                            <th id="thSex">Sexo</th>
                            <th id="thQtde">Qtde.</th>
                            <th id="thValue">Valor R$</th>
                            <th id="thTotal">Total</th>
                            <th id="thAct"><img src="images/deleteIconWhite.png" style='width:1rem;height:1rem;' alt=""></th>
                        </tr>
                    </thead>
                    <tbody id="tbodyContratacoes">
                    </tbody>
                </table>
            <br>
            </div>
            <div id='divHdn' name='divHdn' style='display:none;align-items: center;'>          
                <br>
                <h3>Pagamento</h3>
                <hr> 
                <div class="pagamentoDiv"> 
                    <div>
                        <p id="totalContratacoes">Total: R$ 0.00</p>
                    </div>
                    <div>
                        <label class="alignRight" id='vValue' name='vValue'></label>
                    </div>
                    <hr>
                    <div>
                        <label class="alignRight" id='tValue' name='tValue'></label>
                        <br>
                    </div> 
                </div>
            </div>
            <hr>
            <div class='event-tax-msg' id="event-tax-msg" style='display:none;'>
                <p id='valueDescription'>Atenção: uma taxa de 10% é cobrada para garantir a veracidade do seu evento. Após a confirmação o valor cobrado é apenas 7% do valor total. </p>
            </div>
            <br>
            <div>
                <button type="submit" class='filter-button' id="btnRegisterEvent" name="btnRegisterEvent" disabled>
                    Registrar
                </button>
            </div>
        </form>
    </div>

<script>
    var btnRegisterEvent = document.getElementById('btnRegisterEvent');
    var btnAdicionar = document.getElementById('btnAdicionar');
    var trash = document.getElementById('trash')
    var tableDiv = document.getElementById('tableDiv');
    var arrayValue = [];
    var inputEventName = document.getElementById("inputEventName")
    var inputEventDescription = document.getElementById("inputEventDescription")
    var inputEvenStartDate = document.getElementById("inputEvenStartDate")
    var inputEventStartTime = document.getElementById("inputEventStartTime")
    var inputEventEndDate = document.getElementById("inputEventEndDate")
    var inputEventEndTime = document.getElementById("inputEventEndTime")
    var inputEventUF = document.getElementById("inputEventUF")
    var inputEventCity = document.getElementById("inputEventCity")
    var inputEventCep = document.getElementById("inputEventCep")
    var inputEventStreet = document.getElementById("inputEventStreet")
    var inputEventStreetNumber = document.getElementById("inputEventStreetNumber")
    var inputEventProfessional = document.getElementById("inputEventProfessional")
    var inputEventVacancies = document.getElementById("inputEventVacancies")
    var inputEventPayment = document.getElementById("inputEventPayment")
    var uf = document.getElementById('inputEventUF');
    let contratacoes = [];
    let total = 0;
    
    //TESTE ##############################################################################################
    
    window.onload = function(){
        console.log("Start page")
        loadUF()
    }
    
    // API Busca CEP e seleciona 
    function searchCep(cep, cboUf, cboCidade, logradouroInput, numeroInput, complementoInput){

        console.log("searchCep")

        var xhr = new XMLHttpRequest();
        var method = "POST";
        var url = "engines/searchCep.php"
        var data = "txtCep=" + cep
        var loadingGif = document.getElementById("loadingGif");

        var ufVar
        var ufCity

        xhr.onreadystatechange= function(){

            if(xhr.readyState == 4 && xhr.status == 200){
                obj = JSON.parse(xhr.responseText)
                console.log(obj)

                for (let index = 0; index < cboUf.options.length; index++) {
                    if(cboUf.options[index].value === obj.uf){
                        cboUf.selectedIndex = index
                        cboCidade.innerHTML = "";
                        ufVar = obj.uf
                        ufCity = obj.localidade
                    }
                }

                logradouroInput.value = obj.logradouro

                var event = new Event('change');
                cboUf.dispatchEvent(event);
            };


            cboUf.onchange = function(){

                preencheCidade(ufVar, cboCidade, ufCity)

            };
        };

        xhr.open(method, url);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send(data);

    };

    function preencheCidade(ufVar, element, cityReturn){
        console.log("preencheCidade")

        var xhr = new XMLHttpRequest();
        var url = `includes/estados-json/${ufVar}.json`
        var method = "GET"

        xhr.onreadystatechange = function(){
            if(xhr.readyState === 4 && xhr.status === 200){
                var response = JSON.parse(xhr.responseText);
                console.log("Response:", response);
                response.cidades.forEach(cidade => {
                    element.innerHTML += `<option value='${cidade.name}'>${cidade.name}</option>`;
                });
                selectCidade(cityReturn, element)
            };
        };
        xhr.open(method, url);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send();
    };

    function selectCidade(jsonCity, element){

        console.log("selectCidade")

        for (let index = 0; index < element.options.length; index++) {
            if(element.options[index].value === jsonCity){
                element.selectedIndex = index
            }
        }
    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
    btnSearchCep.onclick = function(){
        inputEventCep = document.getElementById("inputEventCep").value
        inputEventUF = document.getElementById("inputEventUF")
        inputEventCity = document.getElementById("inputEventCity")
        inputEventStreet = document.getElementById("inputEventStreet")
        inputEventStreetNumber = document.getElementById("inputEventStreetNumber")

        searchCep(inputEventCep,inputEventUF,inputEventCity,inputEventStreet,inputEventStreetNumber)
    }

    //preenche os estados 
    function loadUF() {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "includes/brasil.json", true)
        xhr.onreadystatechange = function(){

            if(xhr.readyState === 4 && xhr.status === 200){
                data = JSON.parse(xhr.responseText)
                data.estados.forEach(estado => {
                    inputEventUF.innerHTML += `<option value='${estado.sigla}' data-ibge='${estado.ibge}'>${estado.nome}</option>`;
                });
            }
        }
        xhr.send();
    }

    // Registrar  um novo evento
    btnRegisterEvent.onclick = function(event){
        event.preventDefault()
        arrayInputs = [inputEventName.value, inputEventDescription.value, inputEvenStartDate.value, inputEventStartTime.value, inputEventEndDate.value, inputEventEndTime.value, inputEventUF.selectedIndex, inputEventCity.selectedIndex, inputEventCep.value, inputEventStreet.value, inputEventStreetNumber.value, inputEventProfessional.getAttribute('data-id'), inputEventVacancies.value, inputEventPayment.value, contratacoes]
        console.log(arrayInputs)
        arrayInputs[14].forEach(profissional=>{
            switch (profissional.profissao) {
                case "Segurança de eventos":
                    inputEventProfessional="1";
                    break;

                case "Bombeiro Civil":
                    inputEventProfessional="2";
                    break;

                case "Controlador de Acesso":
                    inputEventProfessional="3";
                    break;
            }

            arrayPOST = [inputEventName.value, inputEventDescription.value, inputEvenStartDate.value, inputEventStartTime.value, inputEventEndDate.value, inputEventEndTime.value, inputEventUF.value, inputEventCity.value, inputEventCep.value, inputEventStreet.value, inputEventStreetNumber.value,inputEventProfessional, inputEventVacancies.value, inputEventPayment.value];

            console.log(arrayPOST)

            dados = "inputEventName=" + arrayPOST[0] + "&inputEventDescription=" + arrayPOST[1] + "&inputEvenStartDate=" + arrayPOST[2] + "&inputEventStartTime=" + arrayPOST[3] + "&inputEventEndDate=" + arrayPOST[4] + "&inputEventEndTime=" + arrayPOST[5] + "&inputEventUF=" + arrayPOST[6] + "&inputEventCity=" + arrayPOST[7] + "&inputEventCep=" + arrayPOST[8] + "&inputEventStreet=" + arrayPOST[9] + "&inputEventStreetNumber=" + arrayPOST[10] + "&inputEventProfessional=" + arrayPOST[11] + "&inputEventVacancies=" + arrayPOST[12] + "&inputEventPayment=" + arrayPOST[13]

            console.log(dados)

            var xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function(){
                if(xhr.readyState === 4 && xhr.status === 200){
                    
                    dados = "inputEventName=" + arrayPOST[0] + "&inputEventDescription=" + arrayPOST[1] + "&inputEvenStartDate=" + arrayPOST[2] + "&inputEventStartTime=" + arrayPOST[3] + "&inputEventEndDate=" + arrayPOST[4] + "&inputEventEndTime=" + arrayPOST[5] + "&inputEventVacancies=" + arrayPOST[6] + "&inputEventPayment=" + arrayPOST[7] + "&inputEventProfessional=" + arrayPOST[8] + "&inputEventUF=" + arrayPOST[9] + "&inputEventCity=" + arrayPOST[10] + "&inputEventCep=" + arrayPOST[11] + "&inputEventStreet=" + arrayPOST[12] + "&InputEventStreetNumber=" + arrayPOST[13]

                    console.log(dados)

                }
            }         
        })
        
        console.log(arrayPOST)
        
        // event.preventDefault()

        var inputEventUF = document.getElementById('inputEventUF')
        var inputEventCity = document.getElementById('inputEventCity')

    }

    function loadAjax(){
        var xhr = new XMLHttpRequest();
        var estado = document.getElementById('inputEventUF');

        estado = estado.value;

        console.log(estado);

        xhr.onreadystatechange = function(){
            if(xhr.readyState === 4 && xhr.status ===200){
                document.getElementById('inputEventCity').innerHTML = xhr.responseText;
            }
        };

        xhr.open('POST', './engines/select_subcategoria.php');
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        // xhr.send('value='+value);
        xhr.send('estado='+estado);

    };

    // Adicionar profissionais a lista
    btnAdicionar.onclick = function(){
        tableDiv.style.display='block';
        document.getElementById('divHdn').style.display = "block";
        eventTaxMsg = document.getElementById('event-tax-msg');
        eventTaxMsg.style.display='block';
        adicionarContratacao()
        validaGravar()
    }

    // Validação de possibilidade de gravar
    function validaGravar(){
        if(contratacoes.length !== 0){
            btnRegisterEvent.disabled= false;
        }else{
            btnRegisterEvent.disabled= true;
        }
    }

    function adicionarContratacao() {
        const profissao = document.getElementById('inputEventProfessional').value;
        const selectElement = document.getElementById('inputEventProfessional');
        const selectedIndex = selectElement.selectedIndex; // Índice da opção selecionada
        const profissaoData = selectElement.options[selectedIndex].getAttribute("data-id");
        // const selectedIndex = selectElement.selectedIndex; // Índice da opção selecionada
        // const profissaoData = selectElement.options[selectedIndex].getAttribute("data-id");
        console.log(profissaoData)
        const sexo = document.getElementById('inputEventGenre').value;
        const quantidade = parseInt(document.getElementById('inputEventVacancies').value);
        const valor = parseFloat(document.getElementById('inputEventPayment').value);
        const totalContratacao = quantidade * valor;
        total += totalContratacao;

        contratacoes.push({
            profissao: profissao,
            sexo: sexo,
            quantidade: quantidade,
            valor: valor,
            total: totalContratacao
        });

        renderizarTabela();
        atualizarTotal();
    }

    function excluirContratacao(index) {
            total -= contratacoes[index].total;
            contratacoes.splice(index, 1);
            renderizarTabela();
            atualizarTotal();
            validaGravar()
            console.log(contratacoes)
    }

    function renderizarTabela() {
            const tbody = document.getElementById('tbodyContratacoes');
            tbody.innerHTML = '';

            contratacoes.forEach((contratacao, index) => {
                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <td class="tdProf">${contratacao.profissao}</td>
                    <td class="tdSex">${contratacao.sexo}</td>
                    <td class="tdQtde">${contratacao.quantidade}</td>
                    <td class="tdValue">${contratacao.valor.toFixed(2)}</td>
                    <td class="tdTotal">${contratacao.total.toFixed(2)}</td>
                    <td class="tdAct" onclick="excluirContratacao(${index})"><img src='images/deleteIcon.png' style='width:1rem;height:1rem;cursor:pointer;' alt=''></td>
                `;
                tbody.appendChild(tr);
            });
    }

    function atualizarTotal() {
            const totalElement = document.getElementById('totalContratacoes');
            const vValue = document.getElementById('vValue')
            const tValue = document.getElementById('tValue')
            const taxa = total * 0.1;
            const totalComTaxa = total + taxa;
            totalElement.textContent = `Total: R$ ${total.toFixed(2)}`;
            vValue.textContent = `Taxa de veracidade: R$ ${taxa.toFixed(2)}`;
            tValue.textContent = `Total do evento: R$ ${totalComTaxa.toFixed(2)}`;
    }

</script>

    
</body>
</html>
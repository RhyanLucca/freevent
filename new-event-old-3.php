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

    /* .form-input-div{
        margin: 15px 0 15px 0;
        border:1px solid red;
    } */

    .form-input{
        align-items: center;
        /* margin-top:5px; */
        width: 100%;
        /* font-size: 14px; */
        /* height:35px; */
    }

    /* Extra small devices (telefones pequenos): */
    @media (max-width:576px){
        .body-area{
            margin: 1rem 0 ;
        }

        .new-event-frame{
            border: 1px solid grey; 
            border-radius: 0.5rem;
            width: 85%; 
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
        }

        #testeTable{
            width: 100%;
        }

        .pagamentoDiv{
            display: block;
        }

        .pagamentoDiv div{

        }

        .pagamentoDiv div label{

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
            grid-template-rows: auto auto auto;
            grid-template-columns: 45% 26% 26%;
            justify-content: space-between;
        }


        #tableDiv{
            display: none;
        }

        #testeTable{
            width: 100%;
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
            grid-template-columns: 38% 38% 20%;
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
            grid-template-rows: auto auto auto;
            grid-template-columns: 45% 26% 26%;
            justify-content: space-between;
        }


        #tableDiv{
            display: none;
        }

        #testeTable{
            width: 100%;
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
            grid-template-columns: 38% 38% 20%;
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
            grid-template-rows: auto auto auto;
            grid-template-columns: 45% 26% 26%;
            justify-content: space-between;
        }


        #tableDiv{
            display: none;
        }

        #testeTable{
            width: 100%;
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
            grid-template-columns: 38% 38% 20%;
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
            grid-template-rows: auto auto auto;
            grid-template-columns: 32% 32% 32%;
            justify-content: space-between;
        }


        #tableDiv{
            display: none;
        }

        #testeTable{
            width: 100%;
        }

        .pagamentoDiv{
            display: flex;
            justify-content: space-between;
        }

        .pagamentoDiv div{

        }

        .pagamentoDiv div label{

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
        <form id="formTeste" name="formTeste" class='new-event-frame' action="engines/add-event.php" method='post'>
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
            <!-- style='display:flex;justify-content:space-between;' -->
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
                    <label for="">UF</label>
                    <select class='form-input' id="inputEventUF" name="inputEventUF" required>                    
                        <option value="" selected style='display:none;'></option>
                        <option value="1">Acre</option>
                        <option value="2">Alagoas</option>
                        <option value="3">Amazonas</option>
                        <option value="4">Amapá</option>
                        <option value="5">Bahia</option>
                        <option value="6">Ceará</option>
                        <option value="7">Distrito Federal</option>
                        <option value="8">Espírito Santo</option>
                        <option value="9">Goiás</option>
                        <option value="10">Maranhão</option>
                        <option value="11">Minas Gerais</option>
                        <option value="12">Mato Grosso do Sul</option>
                        <option value="13">Mato Grosso</option>
                        <option value="14">Pará</option>
                        <option value="15">Paraíba</option>
                        <option value="16">Pernambuco</option>
                        <option value="17">Piauí</option>
                        <option value="18">Paraná</option>
                        <option value="19">Rio de Janeiro</option>
                        <option value="20">Rio Grande do Norte</option>
                        <option value="21">Rondônia</option>
                        <option value="22">Roraima</option>
                        <option value="23">Rio Grande do Sul</option>
                        <option value="24">Santa Catarina</option>
                        <option value="25">Sergipe</option>
                        <option value="26">São Paulo</option>
                        <option value="27">Tocantins</option>
                        <option value="99">Estrangeiro</option>
                    </select>
                </div>
                <div>
                    <label for="">Cidade</label>
                    <select name="inputEventCity" id="inputEventCity" class="form-input" required>
                        <option value="" selected style="display: none;">Selecione uma cidade</option>
                        <option value="1">São Paulo</option>
                    </select>
                </div>
                <div>
                    <label for="">CEP</label>
                    <input class='form-input' id="inputEventCep" name="inputEventCep" type="text" required>
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
                    <select class='form-input' name="inputEventProfessional" id="inputEventProfessional" required>
                        <option value="" selected style="display: none;"></option>
                        <option value="0">Segurança de eventos</option>
                        <option value="1">Bombeiro Civil</option>
                        <option value="2">Controlador de acesso</option>
                    </select>
                </div>
                <div>
                    <label for=""> Vagas Qtde.</label>
                    <input class='form-input' id="inputEventVacancies" name="inputEventVacancies" type="text" required>
                </div>    
                <div>
                    <label for="">Pagamento R$</label>
                    <input class='form-input' id="inputEventPayment" name="inputEventPayment" type="text" required>
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
                <table class="table" style="width:100%">
                    <thead>
                        <th style="width:40%" title="Profissional">Prof.</th>
                        <th style="width:20%" title="Quantidade">Qtde.</th>
                        <th style="width:20%" title="Pagamento">Pgmt.</th>
                        <th style="width:20%" title="Excluir"><img src="images/deleteIconWhite.png" style='width:25px;height:25px;' alt=""></th>
                    </thead>
                    <tbody id='tbody' name='tbody' data-idx=''>  

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
                        <label>Valor: <b>R$</b></label>
                        <b><label class="alignRight" id='eValue' name='eValue'></label></b>
                    </div>
                    <div>
                        <label>Taxa de veracidade: <b>R$</b></label>
                        <b><label class="alignRight" id='vValue' name='vValue'></label></b>
                    </div>
                    <div>
                        <label>Total: <b>R$</b></label>
                        <b><label class="alignRight" id='tValue' name='tValue'></label></b>
                    </div>
                </div>
            </div>
            <hr>
            <div class='event-tax-msg' style='display:none;'>
                <p id='valueDescription'>Atenção: uma taxa de 10% é cobrada para garantir a veracidade do seu evento. Após a confirmação o valor cobrado é apenas 7% do valor total. 
                </p>
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
        var prof = document.getElementById('inputEventProfessional');
        var qtde = document.getElementById('inputEventVacancies');
        var pgmt = document.getElementById('inputEventPayment');
        var trash = document.getElementById('trash')
        var tableDiv = document.getElementById('tableDiv');
        var arrayValue = []

        btnAdicionar.onclick = function(){
            if(prof.value !== "" && qtde.value !== "" && pgmt.value !== ""){
                adicionarRow();
                tableDiv.style.display='block'
            }
            if(arrayValue.length !== 0){
                btnRegisterEvent.disabled= false
            }
            prof.value = '';
            qtde.value = '';
            pgmt.value = '';
        };

        function valorTotal(eventValue){
            var taxaValue = eventValue/100 * 10;
            var valor_total = eventValue + (eventValue/100 * 10);
            // console.log("Lucro taxa de veracidade: " + (eventValue/100 * 7).toFixed(2));
            // console.log("Taxa de usuario: " + (pgmt.value/100 * 7) + " Valor total: " + (pgmt.value/100 * 7) * qtde.value);
            // console.log("Total lucro: " + (((pgmt.value/100 * 7) * qtde.value) + (eventValue/100 * 7)).toFixed(2));
            if(eventValue != 0){
                document.getElementById('divHdn').style.display = "block";
                document.getElementById('eValue').innerText = eventValue.toFixed(2);
                document.getElementById('vValue').innerText = taxaValue.toFixed(2);
                document.getElementById('tValue').innerText = valor_total.toFixed(2);
                valueDescription = document.querySelector('.event-tax-msg');
                valueDescription.style.display='block';
            };
        };

        var tbody = document.getElementById('tbody');

        function adicionarRow(){

            let tr = tbody.insertRow();
            let td_prof = tr.insertCell();
            let td_qtde = tr.insertCell();
            let td_pgmt = tr.insertCell();
            let td_trash = tr.insertCell();
            var funcao;
            var values = []

            if(prof.value !== "" && qtde.value !== "" && pgmt.value !== ""){

                switch(prof.value) {
                    case "0":
                        funcao = "segurança de Eventos";
                        break;
                    case "1":
                        funcao = "Bombeiro Civil";
                        break;
                    case "2":
                        funcao = "Controlador de Acesso";
                        break;
                }
                
                arrayValue.push([funcao, qtde.value, pgmt.value, "index"]);
                for (let index = 0; index < arrayValue.length; index++) {
                    td_prof.innerText = arrayValue[index][0];
                    td_qtde.innerText = arrayValue[index][1];
                    td_pgmt.innerText = arrayValue[index][2];
                    td_trash.innerHTML = "<img src='images/deleteIcon.png' style='width:25px;height:25px;cursor:pointer;' alt=''>"
                    td_trash.setAttribute('data-idx', index);
                    arrayValue[index][3] = index
                    valueQtde = parseInt(arrayValue[index][1])
                    valuePgmt = parseInt(arrayValue[index][2])
                    total = valueQtde * valuePgmt
                    values.push(total)
                    var sum = 0
                    for (let index = 0; index < values.length; index++) {
                        sum += values[index]
                    }
                }
                
                valorTotal(sum)

                td_trash.onclick = function(){
                    deleteRow(this.parentElement.rowIndex)
                }
            }
        }

        function returnDataTable(){

        }

        function removerIDArray(indice){
            arrayValue.splice(indice, 1);
            console.log(arrayValue)
        }

        function deleteRow(index){
            index = index-1
            arrayValue.forEach(function(x){
                if(index === x[3]){
                    valorParaRemover = x[3]
                    console.log(valorParaRemover)
                    response = findIndexInMultidimensionalArray(arrayValue,valorParaRemover)
                    console.log('response: ' + response)
                    tbody.deleteRow(index)
                    console.log(arrayValue)
                    removerIDArray(response)
                }
            })
        }

        function findIndexInMultidimensionalArray(array, targetValue) {
            for (let i = 0; i < array.length; i++) {
                // Comparar o valor no índice 3 do subarray
                if (targetValue === array[i][3]) {
                    return i;  // Retorna o índice se encontrado
                }
            }
            return -1;  // Retorna -1 se o valor não for encontrado
        }


        
    </script>
        // qtde.addEventListener('change', function(){
            //     valorTotal();
        // });

        // pgmt.onchange= function(){
            //     valorTotal();
        // };

        // document.getElementById('inputEventUF').onchange = function(){
            //     loadAjax();
        // };

        // function loadAjax(){
            //     var xhr = new XMLHttpRequest();
            //     var estado = document.getElementById('inputEventUF');

            //     estado = estado.value;

            //     console.log(estado);

            //     xhr.onreadystatechange = function(){
            //         if(xhr.readyState === 4 && xhr.status ===200){
            //             document.getElementById('inputEventCity').innerHTML = xhr.responseText;
            //         }
            //     };

            //     xhr.open('POST', './engines/select_subcategoria.php');
            //     xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            //     // xhr.send('value='+value);
            //     xhr.send('estado='+estado);

        // };
    
</body>
</html>
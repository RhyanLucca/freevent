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

    .new-event-frame{
        border: 1px solid grey; 
        border-radius: 0.5rem;
        width: 650px; 
        margin: 0 auto; 
        padding: 3%;
        height: fit-content;
        background-color: #fff;
        border: 0.5px solid rgb(190, 190, 190);
        box-shadow: 3px 3px 3px rgb(190, 190, 190);
    }

    .login-msg{
        align-items:center;
        text-align:center;
        margin-bottom:32px;
    }

    .form-input-div{
        margin: 20px 0 10px 0;
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
        border: 1px solid red;
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
            <div class='form-input-div' style='display:flex;justify-content:space-between;'>
                <div style='width:23%;'>
                    <label >Data Início</label>
                    <input type="date" class='form-input' id="inputEvenStartDate" name="inputEvenStartDate" required>
                </div>
                <div style='width:23%;'>
                    <label >Hora Início</label>
                    <input type="time" class='form-input' id="inputEventStartTime" name="inputEventStartTime" required>
                </div>
                <div style='width:23%;'>
                    <label >Data Término</label>
                    <input type="date" class='form-input' id="inputEventEndDate" name="inputEventEndDate" required>
                </div>
                <div style='width:23%;'>
                    <label >Hora Término</label>
                    <input type="time" class='form-input' id="inputEventEndTime" name="inputEventEndTime" required>
                </div>
            </div>  
            <div class='form-input-div' style='display:flex;justify-content:space-between;'>
                <div style='width:31%;'>
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
                <div style='width:31%;'>
                    <label for="">Cidade</label>
                    <select name="inputEventCity" id="inputEventCity" class="form-input" required>
                        <option value="" selected style="display: none;">Selecione uma cidade</option>
                        <option value="1">São Paulo</option>
                    </select>
                </div>
                <div style='width:31%;'>
                    <label for="">CEP</label>
                    <input class='form-input' id="inputEventCep" name="inputEventCep" type="text" required>
                </div>
            </div>
            <div class='form-input-div' style='display:flex;justify-content:space-between;'>
                <div style='width:65.5%;'>
                    <label for="">Logradouro (Rua, Avenida, etc.)</label>
                    <input class='form-input' id="inputEventStreet" name="inputEventStreet" type="text" minlength="10" maxlength="150" required>
                </div>
                <div style='width:31%;'>
                    <label for="">Número</label>
                    <input class='form-input' id="InputEventStreetNumber" name="InputEventStreetNumber" type="text" required>
                </div>
            </div> 
            <br>
                <h3>Vagas</h3>
                <hr>              
            <div class='form-input-div' style='display:flex;justify-content:space-between;'>                      
                <div style='width:31%;'>
                    <label for="">Tipo de profissional</label>
                    <select class='form-input' name="inputEventProfessional" id="inputEventProfessional" required>
                        <option value="" selected style="display: none;"></option>
                        <option value="0">Segurança de eventos</option>
                        <option value="1">Bombeiro Civil</option>
                        <option value="2">Controlador de acesso</option>
                    </select>
                </div>
                <div style='width:31%;'>
                    <label for=""> Quantidade de Vagas</label>
                    <input class='form-input' id="inputEventVacancies" name="inputEventVacancies" type="text" required>
                </div>    
                <div style='width:31%;'>
                    <label for="">Valor pagamento R$</label>
                    <input class='form-input' id="inputEventPayment" name="inputEventPayment" type="text" required>
                </div>
            </div>
            <button type="button" class='filter-button' id="btnAdicionar" name="btnAdicionar">
                Adicionar
            </button>
            <br>
            <br>
            <div id='tableDiv' style='display:none;'>
                <hr>
                <br>
                <table id='testeTable' style='width:100%;'>
                    <thead style=''>
                        <th>Profissional</th>
                        <th>Vagas</th>
                        <th>Pagamento</th>
                        <!-- <th><img src="images/pencilWhite.png" style='width:25px;height:25px;' alt=""></th> -->
                        <th><img src="images/deleteIconWhite.png" style='width:25px;height:25px;' alt=""></th>
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
                <div style='width:100%;display:flex;justify-content:space-between;'> 
                    <div style='width:100%;align-itens:center;text-align:center'>
                        <label style=''>Valor</label><br>
                        <label id='eValue' name='eValue'></label>
                    </div>
                    <div style='width:100%;align-itens:center;text-align:center'>
                        <label style=''>Taxa de veracidade</label><br>
                        <label id='vValue' name='vValue'></label>
                    </div>
                    <div style='width:100%;align-itens:center;text-align:center'>
                        <label style=''>Total</label><br>
                        <label id='tValue' name='tValue'></label> 
                    </div>
                </div>
            </div>
            <hr>
            <div class='event-tax-msg' style='display:none;'>
                <p id='valueDescription' style=''>Atenção: uma taxa de 10% é cobrada para garantir a veracidade do seu evento. Após a confirmação o valor cobrado é apenas 7% do valor total. 
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
        var trash = document.getElementById('trash');
        var tableDiv = document.getElementById('tableDiv');
        var arrayValue = [];
        var testeTable = document.getElementById('testeTable');

        btnAdicionar.onclick = function(){
            if(prof.value !== "" && qtde.value !== "" && pgmt.value !== ""){
                adicionarRow();
                tableDiv.style.display='block';
            }
            if(arrayValue.length !== 0){
                btnRegisterEvent.disabled= false;
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

            // let tr = tbody.insertRow();
            // let td_prof = tr.insertCell();
            // let td_qtde = tr.insertCell();
            // let td_pgmt = tr.insertCell();
            // let td_trash = tr.insertCell();
            var funcao;
            // var values = []

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
                returnDataTable();
                // for (let index = 0; index < arrayValue.length; index++) {
                //     td_prof.innerText = arrayValue[index][0];
                //     td_qtde.innerText = arrayValue[index][1];
                //     td_pgmt.innerText = arrayValue[index][2];
                //     td_trash.innerHTML = "<img src='images/deleteIcon.png' style='width:25px;height:25px;cursor:pointer;' alt=''>"
                //     td_trash.setAttribute('data-idx', index);
                //     arrayValue[index][3] = index
                //     valueQtde = parseInt(arrayValue[index][1])
                //     valuePgmt = parseInt(arrayValue[index][2])
                //     total = valueQtde * valuePgmt
                //     values.push(total)
                //     var sum = 0
                //     for (let index = 0; index < values.length; index++) {
                //         sum += values[index]
                //     }
                // }
                
                // valorTotal(sum)

                // td_trash.onclick = function(){
                //     deleteRow(this.parentElement.rowIndex)
                // }
            }
            console.log(arrayValue);
        }

        function returnDataTable(){
            console.log("ReturnDataTable")

            let tr = tbody.insertRow();
            let td_prof = tr.insertCell();
            let td_qtde = tr.insertCell();
            let td_pgmt = tr.insertCell();
            let td_trash = tr.insertCell();
            var funcao;
            var values = [];

            // console.log(td_trash.parentElement.rowIndex)

            for (let index = 0; index < arrayValue.length; index++) {
                
                td_prof.innerText = arrayValue[index][0];
                td_qtde.innerText = arrayValue[index][1];
                td_pgmt.innerText = arrayValue[index][2];
                td_trash.innerHTML = "<img src='images/deleteIcon.png' style='width:25px;height:25px;cursor:pointer;' alt=''>";
                // console.log(td_trash.parentElement.rowIndex);
                // console.log(td_trash.parentElement.rowIndex + td_prof.innerText);
                // td_trash.setAttribute('data-idx', td_trash.parentElement.rowIndex);
                // arrayValue[index][3] = td_trash.parentElement.rowIndex;

                tr.setAttribute('data-idx', index);
                arrayValue[index][3] = index;

                valueQtde = parseInt(arrayValue[index][1]);
                valuePgmt = parseInt(arrayValue[index][2]);
                total = valueQtde * valuePgmt;
                values.push(total);
                var sum = 0;
                for (let index = 0; index < values.length; index++) {
                    sum += values[index];
                }
            }
            
            valorTotal(sum);

            td_trash.ondblclick = function(){
                funcDeleteRow(this.parentElement.rowIndex);
            }
        }

        function removerIDArray(indice){
            arrayValue.splice(indice);
            console.log(arrayValue);
        }

        function funcDeleteRow(index){
            var row = testeTable.rows[index];
            let values = [];
            testeTable.deleteRow(index);
            response = findIndexInMultidimensionalArray(arrayValue,index);
            removerIDArray(response);
            console.log('RemoverIDARRAY')
            for (let index = 0; index < arrayValue.length; index++) {
                valueQtde = parseInt(arrayValue[index][1]);
                valuePgmt = parseInt(arrayValue[index][2]);
                total = valueQtde * valuePgmt;
                values.push(total);
                var sum = 0;
                for (let index = 0; index < values.length; index++) {
                    sum += values[index];
                }
            }
            
            valorTotal(sum);
            // console.log(index);
            // console.log(row.getAttribute('data-idx'))
            // setTimeout(() => {
            //     console.log("Delayed for 1 second.");
            //     returnDataTable()
            // }, "1000");
            // setTimeout(returnDataTable(), 90000);
            // setTimeout(returnDataTable(), 50000)
            // removerIDArray(index)
            // console.log(arrayValue)
            // arrayValue.forEach(function(x){
            //     if(index == x[3]){}
            //     console.log(arrayValue)
            //         console.log(index)
            //         console.log(typeof(index))
            //         tbody.deleteRow(index)
                    // valorParaRemover = x[3]
        //         console.log(valorParaRemover)
        //         response = findIndexInMultidimensionalArray(arrayValue,valorParaRemover)
        //         console.log('response: ' + response)
                    // tbody.deleteRow(index)
        //         console.log(arrayValue)
                    // removerIDArray(response)
        //     }else{
        //         console.log('Passou reto')
                // }
            // })
        }

        // function deleteRow(index){
        //     // index = index-1
        //     arrayValue.forEach(function(x){
        //         if(index == x[3]){
        //             valorParaRemover = x[3]
        //             console.log(valorParaRemover)
        //             response = findIndexInMultidimensionalArray(arrayValue,valorParaRemover)
        //             console.log('response: ' + response)
        //             tbody.deleteRow(index)
        //             console.log(arrayValue)
        //             removerIDArray(response)
        //         }else{
        //             console.log('Passou reto')
        //         }
        //     })
        // }

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
    
</body>
</html>
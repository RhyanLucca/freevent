<?php
    // session_start();
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
    <title>FreeEvent - Perfil</title>

    <style>

    .body-area{
        margin: 1rem auto;
    }

    .login-frame{
        margin: 0 auto;
    }

    h3{
        margin-top: 2.5rem;
    }

    /* Extra small devices (telefones pequenos): */
    @media (max-width:576px){
        
        .body-area{
        }

        .login-frame{
            width: 75%;
        }

        .divFirstData{
            display: block;
            width: 100%;
        }

        .picture{
            height: 18rem;
            width: 60%;
            margin: 0 auto;
        }

        .form-input-div{
            /* margin: 1rem o; */
        }

        .form-input{
            margin: .3rem 0;
        }

        .divDadosPessoais{

        }

    }
    /* Small devices (telefones maiores e tablets pequenos) */
    @media (min-width:576px) and (max-width:769px){
        
        .body-area{
        }

        .login-frame{
            width: 65%;
        }

        .divFirstData{
            display: block;
            width: 100%;
        }

        .picture{
            height: 18rem;
            width: 60%;
            margin: 0 auto;
        }

        .form-input-div{
            /* margin: 1rem o; */
        }

        .form-input{
            margin: .3rem 0;
        }

        .divDadosPessoais{

        }
        
    }
    /* Medium devices (tablets maiores e laptops): */
    @media (min-width: 769px) and (max-width:992px){
        
        .body-area{
        }

        .login-frame{
            width: 70%;
        }

        .divFirstData{
            display: grid;
            grid-template-rows: auto auto;
            grid-template-columns: 35% 60%;
            justify-content: space-between;
        }

        .divPicData{
            width:100%;
        }

        .picture{
            height: 18rem;
            width: 100%;
            margin: 0 auto;
        }

        .form-input-div{
            /* margin: 1rem o; */
        }

        .form-input{
            margin: .3rem 0;
        }

        .divDadosPessoais{
            display: grid;
            grid-template-rows: auto auto auto;
            grid-template-columns: 32% 32% 32% ;
            justify-content: space-between;
        }

        .divContato{
            display: grid;
            grid-template-rows: auto auto auto;
            grid-template-columns: 31% 31% 31% ;
            justify-content: space-between;
        }

        .divFirstEndereco{
            display: grid;
            grid-template-rows: auto auto auto;
            grid-template-columns: 31% 31% 31%;
            justify-content: space-between;
        }

        .divSecEndereco{
            display: grid;
            grid-template-rows: auto auto auto;
            grid-template-columns: 31% 31% 31%;
            justify-content: space-between;
        }
        
    }
    /* Large devices (desktops): */
    @media (min-width:992px) and (max-width:1200px){
        
        .body-area{
        }

        .login-frame{
            width: 60%;
        }

        .divFirstData{
            display: grid;
            grid-template-rows: auto auto;
            grid-template-columns: 35% 60%;
            justify-content: space-between;
        }

        .divPicData{
            width:100%;
        }

        .picture{
            height: 18rem;
            width: 100%;
            margin: 0 auto;
        }

        .form-input-div{
            /* margin: 1rem o; */
        }

        .form-input{
            margin: .3rem 0;
        }

        .divDadosPessoais{
            display: grid;
            grid-template-rows: auto auto auto;
            grid-template-columns: 32% 32% 32% ;
            justify-content: space-between;
        }

        .divContato{
            display: grid;
            grid-template-rows: auto auto auto;
            grid-template-columns: 31% 31% 31% ;
            justify-content: space-between;
        }

        .divFirstEndereco{
            display: grid;
            grid-template-rows: auto auto auto;
            grid-template-columns: 31% 31% 31%;
            justify-content: space-between;
        }

        .divSecEndereco{
            display: grid;
            grid-template-rows: auto auto auto;
            grid-template-columns: 31% 31% 31%;
            justify-content: space-between;
        }

    }
    /* Extra large devices (telas grandes e monitores de alta resolução): */
    @media (min-width:1200px){
        
        .body-area{
        }

        .login-frame{
            width: 55%;
        }

        .divFirstData{
            display: grid;
            grid-template-rows: auto auto;
            grid-template-columns: 35% 60%;
            justify-content: space-between;
        }

        .divPicData{
            width:100%;
        }

        .picture{
            height: 18rem;
            width: 100%;
            margin: 0 auto;
        }

        .form-input-div{
            /* margin: 1rem o; */
        }

        .form-input{
            margin: .3rem 0;
        }

        .divDadosPessoais{
            display: grid;
            grid-template-rows: auto auto auto;
            grid-template-columns: 32% 32% 32% ;
            justify-content: space-between;
        }

        .divContato{
            display: grid;
            grid-template-rows: auto auto auto;
            grid-template-columns: 31% 31% 31% ;
            justify-content: space-between;
        }

        .divFirstEndereco{
            display: grid;
            grid-template-rows: auto auto auto;
            grid-template-columns: 31% 31% 31%;
            justify-content: space-between;
        }

        .divSecEndereco{
            display: grid;
            grid-template-rows: auto auto auto;
            grid-template-columns: 31% 31% 31%;
            justify-content: space-between;
        }

    }

    </style>

</head>
<body>

    <div class="body-area">
        <br>
        <div class="login-frame">
            <form id='formInfoUser'>
            <!-- action="engines/update-user-info.php" method='POST' -->
                <div class='divFirstData'>
                    <div class="divPicData">
                        <div>
                            <div class="picture debug">
                            Foto de perfil
                            </div>
                            <br>
                            <input type="button" class="filter-button" value="Adicionar foto">
                        </div>
                    </div>
                    <div class=''>
                        <h3>Dados de usuário</h3>
                        <hr>
                        <div class='form-input-div'>
                            <label for="">Código de usuário</label>
                            <input type="text" class='form-input' id='inputUserCod' name='inputUserCod' value='<?= $_SESSION['user.codigo']?>' disabled>
                        </div>
                        <div class='form-input-div'>
                            <label for="">Nome de usuário</label>
                            <input type="text" class='form-input' id='inputUserName' name='inputUserName' value='<?= $_SESSION['user.nick']?>' disabled>
                        </div>
                        <div class='form-input-div'>
                            <label for="">E-mail</label>
                            <input type="text" class='form-input' id='inputUserEmail' name='inputUserEmail' value='<?= $_SESSION['user.email']?>' disabled>
                        </div>
                    </div>
                </div>
                <h3>Dados Pessoais</h3>
                <hr>
                <div class='form-input-div'>
                    <label for="">Nome completo</label>
                    <input type="text" class='form-input' id='inputUserFName' name='inputUserFName' value='<?= $_SESSION['user.name']?>' disabled>
                </div>
                <div class='divDadosPessoais'>
                    <div class='form-input-div'>
                        <label for="">RG</label>
                        <input type="text" class='form-input' id='inputUserRg' name='inputUserRg' data-value='<?= $_SESSION['user.rg']?>' value='<?= $_SESSION['user.rg']?>' disabled>
                    </div>
                    <div class='form-input-div'>
                        <label for="">CPF</label>
                        <input type="text" class='form-input' id='inputUserCpf' name='inputUserCpf' maxlength='14' data-value='<?= $_SESSION['user.cpf']?>' value='' disabled>
                    </div>
                    <div class='form-input-div'>
                        <label for="">Data de Nascimento</label>
                        <input type="text" class='form-input' id='inputUserDataNascimento' name='inputUserDataNascimento'  data-value='' value='23/01/2003' disabled>
                    </div>
                </div>
            <!-- <form id='formInfoUser' action="engines/update-user-info.php" method='POST'> -->
                <div class='divContato'>
                    <div class='form-input-div'>
                        <label for="">Telefone</label>
                        <input type="text" class='form-input' id='inputUserTelefone' name='inputUserTelefone' maxlength='13' placeholder="(99)9999-9999" data-value='<?=$_SESSION['user.telefone']?>' value='' disabled>
                    </div>
                    <div class='form-input-div'>
                        <label for="">Celular</label>
                        <input type="text" class='form-input' id='inputUserCelular' name='inputUserCelular' maxlength='14' placeholder="(99)99999-9999" data-value='<?=$_SESSION['user.celular']?>' value='' disabled>
                    </div>
                    <div class='form-input-div'>
                        <label for="">Número reserva</label>
                        <input type="text" class='form-input' id='inputUserCelularEm' name='inputUserCelularEm' maxlength='14' placeholder="(99)99999-9999" data-value='<?=$_SESSION['user.celularEm']?>' value='' disabled>
                    </div>
                </div>
                <h3>Endereço</h3>
                <hr>
                <div class='divFirstEndereco'>
                    <div class='form-input-div'>
                        <label for="">CEP</label>
                        <div>
                            <input type="text" class='form-input local' style='' id='inputUserCep' name='inputUserCep' maxlength='9' data-value='<?=$_SESSION['user.cep']?>' value='' disabled>
                            <button type='button' id='btnSearchCep' name='btnSearchCep'  class='filter-button' disabled>
                                <p>Pesquisar</p>
                                <img id='loadingGif' src="images/loadingGif.gif" alt="loading" style="margin:0 auto;width:35px;height:35px;display:none;"></img>
                            </button>
                        </div>
                    </div>
                    <div class='form-input-div'>
                        <label for="">UF</label>
                        <input type="text" class='form-input local' id='inputUserUf' name='inputUserUf' maxlength='2' data-value='<?=$_SESSION['user.uf']?>' value='' disabled>
                    </div>
                    <div class='form-input-div'>
                        <label for="">Cidade</label>
                        <input type="text" class='form-input local' id='inputUserCidade' name='inputUserCidade' data-value='<?=$_SESSION['user.cidade']?>' value='' disabled>
                    </div>
                </div>
                <div class='divSecEndereco'>
                    <div class='form-input-div'>
                        <label for="">Logradouro</label>
                        <input type="text" class='form-input local' id='inputUserLogradouro' name='inputUserLogradouro' data-value='<?=$_SESSION['user.logradouro']?>' value='' disabled>
                    </div>
                    <div class='form-input-div'>
                        <label for="">Número</label>
                        <input type="text" class='form-input local' id='inputUserNumero' name='inputUserNumero' data-value='<?=$_SESSION['user.numero']?>' value='' disabled>
                    </div>
                    <div class='form-input-div'>
                        <label for="">Complemento</label>
                        <input type="text" class='form-input local' id='inputUserComplemento' name='inputUserComplemento' data-value='<?=$_SESSION['user.complemento']?>' value='' disabled>
                    </div>
                </div>
                <h3>Dados Funcionais</h3>
                <hr>
                <br>
                <hr>
                <br>
                <div id='btnDivReleaseButtons'>
                    <input type="button" id='btnUpdateDados' name='btnUpdateDados' class='filter-button' onclick='enableInputs()' value='Atualizar dados'>
                </div>
                <div id='btnDivUpdateCrud' style='justify-content:space-between; display:none;'>
                    <button type="submit" id='btnUpdateDadosSalvar' name='btnUpdateDados' class='filter-button' style='width:49%;display:;'>
                        <p>Salvar</p>
                        <img id='loadingGifSalvar' src="images/loadingGif.gif" alt="loading" style="margin:0 auto;width:35px;height:35px;display:none;"></img>
                    </button>
                    <input type="button" id='btnUpdateDadosCancelar' name='btnUpdateDados' onclick='disableInputs()' class='filter-button' style='width:49%;display:;' value='Cancelar'>
                </div>
            </form>
        </div>
    </div>

    <script>

        var formInfoUser = document.getElementById('formInfoUser')
        var inputUserCod = document.getElementById('inputUserCod');
        var inputUserName = document.getElementById('inputUserName');
        var inputUserEmail = document.getElementById('inputUserEmail');
        var inputUserFName = document.getElementById('inputUserFName');
        var inputUserDataNascimento = document.getElementById('inputUserDataNascimento');
        var rg = document.getElementById('inputUserRg');
        var cpf = document.getElementById('inputUserCpf');
        var telefone = document.getElementById('inputUserTelefone');
        var celular = document.getElementById('inputUserCelular');
        var celularEm = document.getElementById('inputUserCelularEm');
        var cep = document.getElementById('inputUserCep');
        var uf = document.getElementById('inputUserUf');
        var cidade = document.getElementById('inputUserCidade');
        var logradouro = document.getElementById('inputUserLogradouro');
        var numero = document.getElementById('inputUserNumero');
        var complemento = document.getElementById('inputUserComplemento');
        var loadingGif = document.getElementById('loadingGif');
        var loadingGifSalvar = document.getElementById('loadingGifSalvar');
        var btnDivReleaseButtons = document.getElementById('btnDivReleaseButtons');
        var btnDivUpdateCrud = document.getElementById('btnDivUpdateCrud');
        var btnUpdateDadosSalvar = document.getElementById('btnUpdateDadosSalvar');

        window.onload = function(){
            preencheDados();
        };

        function preencheDados(){
            xhr = new XMLHttpRequest();
            
            xhr.onreadystatechange = function(){

                // if(xhr.readyState !== 4 && xhr.status !== 200){
                // }

                if(xhr.readyState == 4 && xhr.status == 200){
                    // closeLoading(btnSearchCep);
                    teste = JSON.parse(xhr.responseText);
                    
                    // obj = JSON.parse(teste);
                    console.log(teste);

                    inputUserCod.value = teste.cadCodigo;
                    inputUserName.value = teste.cadNick;
                    inputUserEmail.value = teste.cadEmail;
                    inputUserFName.value = teste.cadName;
                    rg.value = converterRG(teste.cadRG);
                    cpf.value = converterCPF(teste.cadCPF);
                    // inputUserDataNascimento.value = teste.cadDataNasc.replace(" - ", "/");
                    telefone.value = teste.cadTelefone.replace(/^(\d{2})(\d{4})(\d{4})/, "($1)$2-$3");
                    celular.value = teste.cadCelular.replace(/^(\d{2})(\d{5})(\d{4})/, "($1)$2-$3");
                    celularEm.value = teste.cadCelularEm.replace(/^(\d{2})(\d{5})(\d{4})/, "($1)$2-$3");
                    cep.value = teste.cadCep;
                    uf.value = teste.cadUf;
                    cidade.value = teste.cadCidade;
                    logradouro.value = teste.cadLogradouro;
                    numero.value = teste.cadNumero;
                    complemento.value = teste.cadComplemento;
                }
            }
            xhr.open('GET', 'engines/perfil-search-user-info.php');
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send();
        }
        
        formInfoUser.onsubmit = function(event){
            event.preventDefault();
            updateInfoUser();
            preencheDados();
            disableInputs();
        }

        function updateInfoUser(){
            var xhr = new XMLHttpRequest;

            rgValue = rg.value;
            cpfValue = cpf.value;
            telefoneValue = telefone.value;
            celularValue = celular.value;
            celularEmValue = celularEm.value;
            cepValue = cep.value;
            ufValue = uf.value;
            cidadeValue = cidade.value;
            logradouroValue = logradouro.value;
            numeroValue = numero.value;
            complementoValue = complemento.value;
            
            xhr.onreadystatechange= function(){

                if(xhr.readyState !== 4 && xhr.status !== 200){
                    teste = btnUpdateDadosSalvar.getElementsByTagName('p');
                    teste.innerText = '';
                    loadingGifSalvar.style.display = 'block';
                }

                if(xhr.readyState == 4 && xhr.status == 200){
                    preencheDados();
                    loadingGifSalvar.style.display = 'none';
                }
            }
            xhr.open('POST', 'engines/update-user-info.php');
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send('inputUserTelefone=' + telefoneValue + '&inputUserCelular=' + celularValue + '&inputUserCelularEm=' + celularEmValue + '&inputUserCep=' + cepValue + '&inputUserUf=' + ufValue + '&inputUserCidade=' + cidadeValue + '&inputUserLogradouro=' + logradouroValue + '&inputUserNumero=' + numeroValue + '&inputUserComplemento=' + complementoValue);
        };
        
        convertCep = cep.value
        convertCep = convertCep.replace(/^(\d{5})(\d{2})/, "$1-$2");
        cep.value = convertCep;
        cep.addEventListener('keyup', function(){
            let inputLength = this.value.length;
            if(inputLength === 5) {
                cep.value += '-';
            }
        });

        function converterCPF(cpfValue){
            convertCpf = cpfValue;
            convertCpf = convertCpf.replace(/^(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
            return convertCpf;
        };

        cpf.addEventListener('keyup', function(){
            let inputLength = this.value.length;
            if(inputLength === 3 || inputLength === 7) {
                cpf.value += '.';
            }else if(inputLength === 11) {
                cpf.value += '-';
            }
        });
        
        function converterRG(rgValue){
            convertRg = rgValue;
            convertRg = convertRg.replace(/^(\d{2})(\d{3})(\d{3})(\d{1})/, "$1.$2.$3-$4");
            return convertRg;
        };

        telefone.addEventListener('change', function(){
            convertTelefone = telefone.value;
            convertTelefone = convertTelefone.replace(/^(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
            telefone.value = convertTelefone;
        });
        
        telefone = document.getElementById('inputUserTelefone');
        celular = document.getElementById('inputUserCelular');
        celularEm = document.getElementById('inputUserCelularEm');

        telefone.addEventListener("keyup", formatarTelefone);
        function formatarTelefone(e){
            var v=e.target.value.replace(/\D/g,"");
            v=v.replace(/^(\d\d)(\d)/g,"($1)$2"); 
            v=v.replace(/(\d{4})(\d)/,"$1-$2");    
            e.target.value = v;
        }

        celular.addEventListener("keyup", formatarCelular);
        celularEm.addEventListener("keyup", formatarCelular);
        function formatarCelular(e){
            var v=e.target.value.replace(/\D/g,"");
            v=v.replace(/^(\d\d)(\d)/g,"($1)$2"); 
            v=v.replace(/(\d{5})(\d)/,"$1-$2");    
            e.target.value = v;
        }

        function enableInputs(){
            btnDivReleaseButtons.style.display = 'none';
            btnDivUpdateCrud.style.display = 'flex';

            telefone.removeAttribute('disabled', true);
            celular.removeAttribute('disabled', true);
            celularEm.removeAttribute('disabled', true);
            cep.removeAttribute('disabled', true);
            btnSearchCep.removeAttribute('disabled', true);
            uf.removeAttribute('disabled');
            cidade.removeAttribute('disabled', true);
            logradouro.removeAttribute('disabled', true);
            numero.removeAttribute('disabled', true);
            complemento.removeAttribute('disabled', true);

            telefone.setAttribute('required', true);
            celular.setAttribute('required', true);
            celularEm.setAttribute('required', true);
            cep.setAttribute('required', true);
            uf.setAttribute('required', true);
            cidade.setAttribute('required', true);
            logradouro.setAttribute('required', true);
            numero.setAttribute('required', true);
        }

        function disableInputs(){

            formInfoUser.reset()

            btnDivReleaseButtons.style.display = 'block';
            btnDivUpdateCrud.style.display = 'none';

            telefone.removeAttribute('required');
            celular.removeAttribute('required');
            celularEm.removeAttribute('required');
            cep.removeAttribute('required');
            uf.removeAttribute('required');
            cidade.removeAttribute('required');
            logradouro.removeAttribute('required');
            numero.removeAttribute('required');
            complemento.removeAttribute('required');

            telefone.setAttribute('disabled', true);
            celular.setAttribute('disabled', true);
            celularEm.setAttribute('disabled', true);
            cep.setAttribute('disabled', true);
            uf.setAttribute('disabled', true);
            cidade.setAttribute('disabled', true);
            logradouro.setAttribute('disabled', true);
            numero.setAttribute('disabled', true);
            complemento.setAttribute('disabled', true);
            btnSearchCep.setAttribute('disabled', true);
            preencheDados();
        }

        function showLoading(element){
            element.querySelector('p').style.display = 'none';
            loadingGif.style.display = 'block';
        }

        function closeLoading(element){
            element.querySelector('p').style.display = 'block';
            loadingGif.style.display = 'none';
        }

        btnSearchCep.onclick = function(){
        
            var xhr = new XMLHttpRequest;
            var cep = document.getElementById('inputUserCep');

            cep = cep.value;

            xhr.onreadystatechange= function(){

                if(xhr.readyState !== 4 && xhr.status !== 200){
                    showLoading(btnSearchCep);
                }

                if(xhr.readyState == 4 && xhr.status == 200){
                    closeLoading(btnSearchCep);
                    teste = JSON.parse(xhr.responseText);
                    
                    obj = JSON.parse(teste);
                    console.log(obj);

                    uf.value = obj.uf;
                    cidade.value = obj.localidade;
                    logradouro.value = obj.logradouro;
                    complemento.value = obj.complemento;
                }

            }
            xhr.open('POST', 'engines/searchCep.php');
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send('cep='+cep);
        };

    </script>

</body>
</html>
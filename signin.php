<?php
    // require_once 'navbar.php';
    include 'includes/libraries.php';
    //require_once 'engines/access-validator.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreeEvent - Cadastro</title>

    <style>

        .body-area{
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        @media (max-width:576px){
            
            .login-frame{
                /* background-color: green; */
                width: 80%;
            }

        }

        @media (min-width:576px) and (max-width:769px){
            
            .login-frame{
                /* background-color: yellow; */
                width: 64%;
            }

        }

        @media (min-width: 769px) and (max-width:992px){
            
            .login-frame{
                /* background-color: blue; */
                width: 50%;
            }

        }

        @media (min-width:992px) and (max-width:1200px){
            
            .login-frame{
                /* background-color: red; */
                width: 45%;
            }

        }

        @media (min-width:1200px){
            
            .login-frame{
                /* background-color: purple; */
                width: 33%;
            }

        }


    </style>

</head>



<div class="nav-body">
    <div class="" style="display:flex;height:100%;min-width:100%;max-width:100%;align-items:center;text-align:center;">
        <h2 style="color:#fff;margin-left:auto;margin-right:auto"><a id='titulo' class="title"href="./"><span id='spanTeste' class='title-span' style='color:red;'>RTS</span>YSTEMS</a></h2>
    </div>
</div>

<div class="body-area">
    <div class="login-frame">
        <form id='signinForm' name='signinForm' action="engines/new-user.php" method='post'>
        <!-- action="engines/new-user.php" method='post' -->  
            <div class='login-msg'>
                <p style='font-size:1.5rem;'><b>Cadastre-se gratuitamente</b></p>
                <br>
                <p>Acesse as melhores vagas com a RTSYSTEMS</p>
            </div>
            <div class="form-input-div">
                <label class="label" for="">Insira seu nome completo *</label>
                <input class="form-input" type="text" id='nameInput' name='nameInput'>
                <span id="nameInputSpan" class=""></span>
            </div>
            <div class="form-input-div">
                <label class="label" for="">E-mail *</label>
                <input class="form-input" type="email" id='emailInput' name='emailInput'>
                <span id="emailInputSpan" class=""></span>
            </div>
            <div class="form-input-div">
                <label class="label" for="">RG *</label>
                <input class="form-input" type="text" id='rgInput' name='rgInput' maxlength='12'>
                <span id="cpfInputSpan" class=""></span>
            </div>
            <div class="form-input-div">
                <label class="label" for="">CPF *</label>
                <input class="form-input" type="text" id='cpfInput' name='cpfInput' maxlength='14'>
                <span id="cpfInputSpan" class=""></span>
            </div>
            <div class="form-input-div">
                <?php
                $hoje = date("Y-m-d");
                $dataValida = date("Y-m-d", strtotime($hoje. '-18 years'));?>
                <label class="label" for="">Data de nascimento *</label>
                <input class="form-input" type="date" id='birthdayInput' name='birthdayInput' max="<?=$dataValida?>">
                <span id="cpfInputSpan" class=""></span>
            </div>
            <div class="form-input-div">
                <label class="label" for="">Senha *</label>
                <input class="form-input" type="password" id='pswdInput' name='pswdInput' data-validate-hint="Informe o solicitante do serviço">
                <span id="pswdInputSpan" class=""></span>
            </div>
            <div class="form-input-div">
                <label class="label" for="">Repita sua senha *</label>
                <input class="form-input" type="password" id='confPswdInput' name='confPswdInput'>
                <span id="confPswdInputSpan" class=""></span>
            </div>
            <div class="form-input-div">
                <input type="checkbox" id='useTermsCheckbox' name='useTermsCheckbox' value='0'> Aceito os <a href="" style="color: #00A2FF;">termos de uso</a> *
            </div>
            <div class='login-error-msg' id="formErrorMessage" style="display:none;text-align:center;align-items:center;">
                <p></p>
            </div>
            <div class='form-input-div'>
                <button type='submit' id='btnteste' class='filter-button'>Criar conta</button>
            </div>
            <div class='form-input-div'>            
                <button type='button' id='enterAccountButton' name='enterAccountButton' class='filter-button'><p>Já tenho perfil</p></button>
            </div>   
        </form>
    </div>
</div>

<script>

    document.getElementById('enterAccountButton').onclick = function(){
        window.location = "login.php";
    };

    const input = document.getElementById("cpfInput");

    input.addEventListener("keyup", formatarCPF);

    function formatarCPF(e){

        var v=e.target.value.replace(/\D/g,"");

        v=v.replace(/(\d{3})(\d)/,"$1.$2");

        v=v.replace(/(\d{3})(\d)/,"$1.$2");

        v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2");

        e.target.value = v;
    } 

    const input2 = document.getElementById("rgInput");

    input2.addEventListener("keyup", formatarRG);

    function formatarRG(e){

        var v=e.target.value.replace(/\D/g,"");

        v=v.replace(/(\d{2})(\d)/,"$1.$2");

        v=v.replace(/(\d{3})(\d)/,"$1.$2");

        v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2");

        e.target.value = v;
        } 

    var form = document.getElementById('signinForm');
    var nameInput = document.getElementById('nameInput');
    var emailInput = document.getElementById('emailInput');
    var rgInput = document.getElementById('rgInput');
    var birthdayInput = document.getElementById('birthdayInput');
    var cpfInput = document.getElementById('cpfInput');
    var pswdInput =  document.getElementById('pswdInput');
    var confPswdInput = document.getElementById('confPswdInput');
    var useTermsCheckbox = document.getElementById('useTermsCheckbox');

    console.log(useTermsCheckbox);

    var msg;
    var show = document.getElementById("formErrorMessage");

    form.onsubmit = function(event){
        event.preventDefault();
        validateForm();
    };

    function validateForm(event){

        validaEmail = validarEmail(emailInput.value);
        validaNome = validarNome(nameInput.value);

        if(nameInput.value == "" || emailInput.value == "" || cpfInput.value == "" || pswdInput.value == "" || confPswdInput.value == ""){
            msg = 'Preencha todos os campos para prosseguir.';
            show.innerHTML = msg;
            show.style.display = "block";
        }else if(validaEmail !== 1){
            msg = 'Email inválido, verifique se foi o email informado está correto.';
            show.innerHTML = msg;
            show.style.display = "block";
        }else if(validaNome !== 1){
            msg = 'Nome inválido, verifique se foi o nome informado está correto.';
            show.innerHTML = msg;
            show.style.display = "block";
        }else if(pswdInput.value !== confPswdInput.value){
            msg = 'As senhas informadas não coincidem.';
            show.innerHTML = msg;
            show.style.display = "block";
        }else if(!useTermsCheckbox.checked){
            msg = 'Você deve aceitar os termos de uso para prosseguir.';
            show.innerHTML = msg;
            show.style.display = "block";
        }
        else{
            useTermsCheckbox.value = 1;
            form.submit();
        }
    };
    
    function validarEmail (email) {
        var emailPattern =  /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
        var teste = emailPattern.test(email);
        if(teste == true){
            return 1
        }
    };

    function validarNome(nome){
        nomeSobrenome = /\b[A-Za-zÀ-ú][A-Za-zÀ-ú]+,?\s[A-Za-zÀ-ú][A-Za-zÀ-ú]{2,19}\b/gi;
        if((nomeSobrenome.test(nome))){
                return 1;
            }
    };

</script>


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
    <title>FreeEvent - Login</title>

    <style>

        .body-area{
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        @media (max-width:576px){
            
            .login-frame{
                width: 75%;
            }

        }

        @media (min-width:576px) and (max-width:769px){
            
            .login-frame{
                width: 55%;
            }

        }

        @media (min-width: 769px) and (max-width:992px){
            
            .login-frame{
                width: 45%;
            }

        }

        @media (min-width:992px) and (max-width:1200px){
            
            .login-frame{
                width: 35%;
            }

        }

        @media (min-width:1200px){
            
            .login-frame{
                width: 27%;
            }

        }

    
    </style>

</head>
<body >
<div class="nav-body">
    <div class="" style="display:flex;height:100%;min-width:100%;max-width:100%;align-items:center;text-align:center;">
        <h2 style="color:#fff;margin-left:auto;margin-right:auto"><a id='titulo' class="title"href="./"><span id='spanTeste' class='title-span' style='color:red;'>RTS</span>YSTEMS</a></h2>
    </div>
</div>

<!-- ############################### -->
<div class="body-area" style="display: flex;justify-content: center;align-items: center;">
    <div class="login-frame">
        <form action="engines/login-validator.php" method="post">
            <div class='login-msg'>
                <p style='font-size:1.5rem;'><b>Entre no seu perfil</b></p>
                <br>
                <p>Bem vindo(a) de volta ao RTSYSTEMS</p>
            </div>
            <div class="form-input-div">
                <label class="label" for="emailInput">E-mail</label><br>
                <input class="form-input" type="text" name="emailInput" id="emailInput" required>
            </div>
            <div class="form-input-div">
                <label class="label" for="pswdInput">Senha</label><br>
                <input class="form-input" type="password" name="pswdInput" id="pswdInput" required>
            </div>

                <?php
                    if(isset($_GET['login']) && $_GET['login'] == 0){
                ?>  

                    <div class='login-error-msg' style="display:block;">
                        <p>Usuário ou senha incorretos. <br> Tente novamente</p>
                    </div>

                <?php
                    }
                ?>
                <?php
                    if(isset($_GET['auth']) && $_GET['auth'] == 0){
                ?>

                    <div class='login-error-msg' style="display:block;">
                        <p>Faça login para ter acesso a todo o conteúdo do site.</p>
                    </div>

                <?php
                    }
                ?>

            <div class='form-input-div'>
                <input type="submit" value="Entrar" class='filter-button'>
            </div>
            <div class='form-input-div'>
                <button type='button' id='createAccountButton' name='createAccountButton' class='filter-button'><p>Não possui conta? Cadastre-se aqui</p></button>
            </div>            
            <div class='form-input-div'>
                <div style='text-align:center;'>
                    <a href="">Recuperar acesso</a>
                </div>
            </div>
        </form>
    </div>
</div>

<script>

    document.getElementById('createAccountButton').onclick = function(){
        window.location = "signin.php";
    };


    // titleTeste = document.getElementById('titulo');
    // spanTeste = document.getElementById('spanTeste');
    
    // titleTeste.addEventListener('mouseover', () => {
    //     // Change the button's background color
    //     console.log('saiu');
    //     spanTeste.style.transition = '0.2s';
    //     spanTeste.style.color = 'red';
    // });

    // titleTeste.addEventListener('mouseout', () => {
    //     // Change the button's background color
    //     console.log('saiu');
    //     spanTeste.style.transition = '0.2s';
    //     spanTeste.style.color = 'white';
    // });

</script>

</body>
</html>
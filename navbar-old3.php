<?php 
    // session_start();
    // include 'includes/libraries.php';
    // require_once 'engines/access-validator.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        /* Start horizontal nav ---------------------------------------------------------------------------- */

            .navUl{
                margin: 0 auto;
                display: flex;
                list-style-type: none;
                align-items: center;
                height: fit-content;
                background-color: #00A2FF;
                color:white;
                font-weight: bold;
                border-bottom: 1px solid white;
            }

            .navLiMobile{
                margin-right: 0.5rem;
                margin-left: auto;
                transform: rotate(90deg);
                cursor: pointer;
            }

            .navLi{
                margin: 1%;
                color: #fff;
                padding: 0.7%;
                border-radius: 7px;
                text-align: center;
                font-size: 1rem;
                cursor: pointer;
                display: none;
            }

            .navLi a{
                font-size: 1.1rem;
            }

            .navLi:hover{
                background-color: #fff;
                color: #00A2FF;
                transition: 0.2s;
            }

            .navLi:hover a{
                color: #00A2FF;
                transition: 0.2s;
            }

            .alignRight{
                text-align: right;
                margin-left: auto;
            }

        /* End horizontal nav ---------------------------------------------------------------------------- */

        /* Start vertical Nav */

            .navUlMob{
                padding: 1rem 1rem;
                display: none;
                width: 100vw;
                height: inherit;
                background-color: #00A2FF;
                color:white;
                position: absolute;
                z-index: 999;
                right: 0;
                overflow: auto;
                text-align:center;
                border-bottom: 1px solid transparent;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            }

            .navLiMob{
                display: block;
                padding: 0.5rem;
                margin-bottom: 1rem;
                color: #fff;
                cursor: pointer;
                font-weight: bold;
            }

        /* End vertical Nav */

        @media (max-height:300px){
            .navUlMob{
                height: fit-content;
                overflow: auto;
            }
        }

        @media (min-width:1024px) {
            
            .navLi{
                display: flex;
                font-size: 150%;
            }

            .navUl{
            }

            .navLiMobile{
                display: none;
            }
        }

        /* Extra small devices (telefones pequenos): */    
        @media (max-width: 576px){
            
        }
        
        /* Small devices (telefones maiores e tablets pequenos) */
        @media (min-width:576px) and (max-width:769px){
            
        }
        
        /* Medium devices (tablets maiores e laptops): */
        @media (min-width: 769px) and (max-width:992px){
            
        }
        
        /* Large devices (desktops): */
        @media (min-width:992px) and (max-width:1200px){
            
        }
        
        /* Extra large devices (telas grandes e monitores de alta resolução): */
        @media (min-width:1200px){
            
        }

    </style>

</head>
<body>

<div style="">
    <?php 
    if(isset($_SESSION['user.auth']) && $_SESSION['user.auth'] == 1){ ?>

        <ul class="navUl">
            <li class="" style='margin: 1%;cursor: pointer;'><h2><a href="./"><span style="color:red">RTS</span>YSTEMS</a></h2></li>
            <li class="navLi"><a href="events.php" class="">Eventos</a></li>
            <li class="navLi"><a href="new-event.php" class="">Novo evento</a></li>
            <li class="navLi"><a href="inscricoes.php" class="">Inscrições</a></li>
            <li class="navLi"><a href="#" class="">Contato</a></li>
            <li class="navLi"><a href="#" class="">Sobre</a></li>
            <li class="navLi alignRight">
                <a href="user-profile.php" class="">Carteira</a>
            </li>
            <li class="navLi"><a href="user-profile.php" class="">Perfil</a></li>
            <li class="navLiMobile">|||</li>
        </ul>
            
        <ul class="navUlMob" style="float:right;align-items:center;list-style-type:none;">
            <li class="navLiMob"><a href="events.php" class="">Eventos</a></li>
            <li class="navLiMob"><a href="new-event.php" class="">Novo evento</a></li>
            <li class="navLiMob"><a href="inscricoes.php" class="">Inscrições</a></li>
            <li class="navLiMob"><a href="#" class="">Contato</a></li>
            <li class="navLiMob"><a href="#" class="">Sobre</a></li>
            <li class="navLiMob"><a href="user-profile.php" class="">Carteira</a></li>
            <li class="navLiMob"><a href="user-profile.php" class="">Perfil</a></li>
        </ul>
    <?php
    }else{
    ?>
        <ul class="navUl">
            <li class="" style='margin: 1%;cursor: pointer;'><h2><a href="./"><span style="color:red">RTS</span>YSTEMS</a></h2></li>
            <li class="navLi"><a href="events.php" class="">Eventos</a></li>
            <li class="navLi"><a href="#" class="">Contato</a></li>
            <li class="navLi"><a href="#" class="">Sobre</a></li>
            <li class="navLi alignRight"><a href="login.php" class="">Entrar</a></li>
            <li class="navLi"><a href="signin.php" class="">Cadastre-se</a></li>
            <li class="navLiMobile">|||</li>
        </ul>
            
        <ul class="navUlMob" style="float:right;align-items:center;list-style-type:none;">
            <li class="navLiMob"><a href="events.php" class="">Eventos</a></li>
            <li class="navLiMob"><a href="#" class="">Contato</a></li>
            <li class="navLiMob"><a href="#" class="">Sobre</a></li>
            <li class="navLiMob"><a href="login.php" class="">Entrar</a></li>
            <li class="navLiMob"><a href="signin.php" class="">Cadastre-se</a></li>
        </ul>
    <?php } ?>
</div>

    <script>

        navLink = document.getElementsByClassName("navLi").child

        console.log(navLink)
        
        var navLiMobile = document.getElementsByClassName('navLiMobile')[0]
        var navUlMob = document.getElementsByClassName("navUlMob")[0]
        var navLiMob = document.getElementsByClassName("navLiMob")
        var navUl = document.getElementsByClassName('navUl')[0]
        var navLi = document.getElementsByClassName('navLi')

        navLiMobile.onclick = function(){
            
            navUlMob.style.display == "block" ? navUlMob.style.display = 'none' : navUlMob.style.display = 'block';
            
        }
        
        function checkWindowSize(){
            var screenWidth =  window.innerWidth;
            
            // navLiMob.style.fontSize = '1rem'
            
            if (screenWidth >= 860){
                navUlMob.style.display = "none"
                // navLiMob.style.fontSize = '1rem'
                // navUl.style.backgroundColor = 'red';
                navLi.style.fontsize = '25px';
            }
        }
        
        window.addEventListener('resize', function(){
            checkWindowSize()
        })

        // Seleciona todos os elementos <li> dentro da lista <ul>
        var listaItems = document.querySelectorAll('.navUlMob .navLiMob');

        // Adiciona um evento de clique a cada item da lista
        listaItems.forEach(function(item) {
            item.addEventListener('click', function() {
                // Obtém o URL do link dentro do item clicado
                var url = item.querySelector('a').getAttribute('href');
                // Redireciona para o URL
                window.location.href = url;
            });
        });
        
        </script>

</body>
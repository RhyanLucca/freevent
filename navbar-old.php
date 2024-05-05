<?php 
    // session_start();
    // include 'includes/libraries.php';
    // require_once 'engines/access-validator.php';
?>

<div class="nav-body">

    <div class="navbar-section" style="min-width:20%;max-width:20%;">
        <h2 style="color:#fff;margin-left:auto;margin-right:auto"><a id='titulo' class="title"href="./"><span id='spanTeste' class='title-span' style='color:red;'>RTS</span>YSTEMS</a></h2>
        <!-- <h2 style="color:#fff;margin-left:auto;margin-right:auto"><a id='titulo' class="title"href="./"><span id='spanTeste' class='title-span' style='color:red;'>FREE</span>VENT</a></h2> -->
    </div>
    
    <?php 
    if(isset($_SESSION['user.auth']) && $_SESSION['user.auth'] == 1){ ?>
        
        <div class="navbar-section" style="min-width:50%;max-width:50%;">
            
            <a id='navEvents' href="events.php" class="nav-tab">Eventos</a>

            <a href="new-event.php" class="nav-tab">Novo evento</a>

            <a href="inscricoes.php" class="nav-tab">Inscrições</a>

            <a href="#" class="nav-tab">Contato</a>

            <a href="#" class="nav-tab">Sobre</a>

        </div>

        <div class="navbar-section" style="min-width:13%;max-width:13%;"></div>

        <div class="navbar-section" style="min-width:17%;max-width:17%;float:right;">
            <div class=''>
                <a href="user-profile.php" class="">
                    <div style='display:flex;align-items:center;'>
                        <img src="images/wallet.png" style='width:1.5rem;height:1.5rem;margin-right:5%;hover:'>  
                        <label style='color:white;font-weight: bold;'>1250,55</label>
                    </div>
                </a>
            </div>
            <a href="user-profile.php" class="nav-tab">Perfil</a>
        </div> 
    <?php
    }else{
    ?>
    <div class="navbar-section" style="min-width:35%;max-width:35%;">
        
        <a href="events.php" class="nav-tab">Eventos</a>

        <a href="#" class="nav-tab">Contato</a>

        <a href="#" class="nav-tab">Sobre</a>

    </div>
    <div class="navbar-section" style="min-width:19%;max-width:19%;"></div>
    
    <div class="navbar-section" style="min-width:25%;max-width:25%;float:right">
        
        <a href="login.php" class="nav-tab">Entrar</a>

        <a href="signin.php" class="nav-tab">Cadastre-se</a>

    </div>
    <?php } ?>
</div>

<script>

    // navEvents = document.getElementById('navEvents')


    // function loadEvent(){
    //     xhr = new XMLHttpRequest();

    //     xhr.onreadystatechange = function(){
    //         if(xhr.readyState !== 4 && xhr.status !== 200){
    //             // document.getElementById('publication-container').innerHTML = ''
    //             // loadingGifBlue.style.display = 'block';
    //         }
            
    //         if(xhr.readyState === 4 && xhr.status ===200){
    //             console.log(xhr.responseText);
    //             document.querySelector('body').innerHTML = xhr.responseText;
    //             // loadingGifBlue.style.display = 'none';
    //             // document.getElementById('publication-container').innerHTML = xhr.responseText;
    //             // setTimeout(function(){
    //                 // getEventData()
    //             // }, 10);
    //         }
    //     };

    //     xhr.open('POST', 'events.php');
    //     xhr.send()
    // }

    // navEvents.onclick = function(){
    //     alert('navEvents');
    //     loadEvent();
    // }

</script>
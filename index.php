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
    <title>FreeEvent - Inicio</title>

    <style>

        *{
            margin: 0;
            padding: 0;
        }

        .header{
            height: 2.5rem;
        }

        .footer{
            height:3rem;    
        }

        body{
            background-color:#00A2FF;
        }

        .content{
            
        }



        /*Extra Small <575px */
        /*Small ≥576px */
        /*Medium ≥768px */
        /*Large ≥992px */
        /*Extra Large ≥1200px */

        /* max-width 320px	Smartwatches
        max-width 420px	Smaller devices
        max-width 600px	Phones
        min-width 600px	Tablets and Large Phones
        min-width 768px	Tablets
        min-width 992px	Laptops and Desktops
        min-width 1200px	Monitors, Desktops */

        /* Extra small devices (telefones pequenos): < 576
        Small devices (telefones maiores e tablets pequenos): Normalmente entre 576 entre 768 pixels
        Medium devices (tablets maiores e laptops): Em geral, entre 768 e 992 pixels de largura
        Large devices (desktops): Tipicamente entre 992 e 1200 pixels de largura
        Extra large devices (telas grandes e monitores de alta resolução): Acima de 1200  */

        
        /* Extra small devices (telefones pequenos): */
        @media (max-width: 576px){

            /* Start Geral */

                /* body{
                    background-color:green;
                } */

                img{
                    width: 100%;
                    height: 100%;
                }

                .fg-white{
                    color: #fff;
                }
                
                /* .content{
                    width:10%;
                    margin: 0 auto;

                } */

                .main{
                    padding: 2%;
                    font-size: 1rem;
                    align-items: center;
                    text-align: center;
                    margin: 4%;
                }

                .bigText{
                    font-size: 1.5rem;
                    align-items: center;
                    text-align: center;
                    font-weight: bold;
                }

                .card1{
                    width: 80%;
                    margin: 5% auto;
                    background-color: #fff;
                    padding: 4%;
                    height: fit-content;
                }

                .card2{
                    width: 80%;
                    margin: 5% auto;
                    background-color: #fff;
                    padding: 4%;
                    height: fit-content;
                }

            /* End Geral */

            /* ------------------------------------------------------------------------------------- */

            /* Start First Card */

                .divMsgBtn{
                    padding: 5% 0;
                    align-items: center;
                    text-align: left;
                    width:90%;
                    display: block;
                }

                .divAccountButtons{
                    width: 100%;
                    display:block;
                    margin: 5% auto;
                    align-items:left;
                }

                .divAccountButtons button{
                    width: 50%;
                }

                .divFireSecImg{
                    width: 90%;
                    height: 90%;
                    margin: 2% auto;
                    display: flex;
                }

            /* End First Card */

            /* ------------------------------------------------------------------------------------- */

            /* Start Second Card */

                .functionSection{
                    width: 90%;
                    margin: 9% auto;
                }

                .functionSection p{
                    text-align: center;
                }

                .divFuncImg{
                    width: 65%;
                    height: 65%;
                    margin: 2% auto;
                }

                .divFuncText{
                    /* background-color:#00A2FF; */
                    /* color: #fff; */
                    align-items: center;
                    text-align: left;
                    width: 95%;
                    margin: 3% auto;
                    padding: 3.5%;
                    border-radius: 3%;
                }

            /* End Second Card */

        }

        /* Small devices (telefones maiores e tablets pequenos) */
        @media (min-width:576px) and (max-width:769px){

            /* Start Geral */

                /* body{
                    background-color:yellow;
                } */

                img{
                    width: 100%;
                    height: 100%;
                }

                .fg-white{
                    color: #fff;
                }

                /* .content{
                    width:100%;
                } */

                .main{
                    padding: 2%;
                    font-size: 1rem;
                    align-items: center;
                    text-align: center;
                    margin: 4%;
                }

                .bigText{
                    font-size: 1.5rem;
                    font-weight: bold;
                }

                .card1{
                    width: 85%;
                    margin:3% auto;
                    background-color: #fff;
                    padding: 2%;
                    display: grid;
                    grid-template-rows: auto auto auto;
                    grid-template-columns: 45% 55%;
                }

                .card2{
                    width: 85%;
                    margin:3% auto;
                    background-color: #fff;
                    padding: 2%;
                    display: grid;
                    grid-template-rows: auto auto auto;
                    grid-template-columns: 45% 55%;
                }

            /* End Geral */

            /* ------------------------------------------------------------------------------------- */

            /* Start First Card */

                .divDestaque{
                    grid-column: 1/3;
                    margin-bottom: 5%;
                    text-align: center;
                }

                .divMsgBtn{
                    padding: 7% 0;
                    align-items: center;
                    text-align: left;
                    width:90%;
                    display: block;
                }

                .divAccountButtons{
                    width: 100%;
                    display:block;
                    margin: 10% auto;
                    align-items:left;
                }

                .divAccountButtons button{
                    width: 50%;
                }

                .divFireSecImg{
                    width: 100%;
                    height: 90%;
                    display: flex;
                }

            /* End First Card */

            /* ------------------------------------------------------------------------------------- */

            /* Start Second Card */

                .functionSection{
                    align-items: center;
                    width: 90%;
                    margin: 5% auto;
                    display: grid;
                    grid-template-columns: 50% 50%;
                    grid-column: 1/3;
                }
                
                .functionSection p{
                    text-align: left;
                }

                .divFuncDesc{

                }

                .divFuncImg{
                    width: 90%;
                    height: 90%;
                    margin: 0 auto;
                }

                .divFuncImg:nth-child(1){
                }

                .divFuncText:nth-child(1){
                }


                .divFuncText{
                    align-items: center;
                    text-align: left;
                    width: 95%;
                    margin: 3% auto;
                    padding: 3.5%;
                    border-radius: 3%;
                }

            /* End Second Card */
            

        }

        /* Medium devices (tablets maiores e laptops): */
        @media (min-width: 769px) and (max-width:992px){

            /* Start Geral */

                /* body{
                    background-color:blue;
                } */

                p{
                    font-size: 1.3rem;
                }

                a{
                    font-size: 1.3rem;
                }

                img{
                    width: 100%;
                    height: 100%;
                }

                .fg-white{
                    color: #fff;
                }

                .main{
                    padding: 2%;
                    font-size: 1.2rem;
                    align-items: center;
                    text-align: center;
                    margin: 4%;
                }

                .bigText{
                    font-size: 1.9rem;
                    align-items: center;
                    text-align: center;
                    font-weight: bold;
                }


                .card1{
                    width: 86%;
                    margin: 3% auto;
                    background-color: #fff;
                    padding: 2%;
                    display: grid;
                    grid-template-rows: auto auto auto;
                    grid-template-columns: 55% 45%
                }

                .card2{
                    width: 90%;
                    margin: 3% auto;
                    background-color: #fff;
                    height: fit-content;
                    display: flex;
                }


            /* End Geral */

            /* ------------------------------------------------------------------------------------- */

            /* Start First Card */

                .divDestaque{
                    grid-column: 1/3;
                    margin-bottom: 5%;
                    /* border: 1px solid red; */
                    font-size: 2rem;
                    /* background-color: red; */
                }

                .divMsgBtn{
                    padding: 7% 0;
                    align-items: center;
                    text-align: left;
                    width:90%;
                    display: block;
                }

                .divAccountButtons{
                    width: 100%;
                    display:block;
                    margin: 10% auto;
                    align-items:left;
                }

                /* .divAccountButtons button{
                    width: 50%;
                } */

                .divAccountButtons button{
                    width: 50%;
                    font-size: 1.3rem;
                    height: fit-content;
                    padding: 3%;
                }

                .divFireSecImg{
                    width: 100%;
                    height: 100%;
                    display: flex;
                }

            /* End First Card */

            /* ------------------------------------------------------------------------------------- */

            /* Start Second Card */

                .functionSection{
                    /* align-items: center; */
                    width: 30%;
                    height: 33%;
                    /* border: 1px solid red; */
                    margin: 5% auto;
                    /* margin: 0 auto; */
                    /* display: grid; */
                    /* grid-template-columns: 50% 50%; */
                    /* grid-column: 1/3; */
                }

                .divFuncDesc{

                }

                .divFuncImg{
                    width: 80%;
                    height: 80%;
                    margin: 2% auto;
                }

                .divFuncImg:nth-child(1){
                }

                .divFuncText:nth-child(1){
                }


                .divFuncText{
                    align-items: center;
                    text-align: left;
                    width: 95%;
                    margin: 3% auto;
                    padding: 3.5%;
                    border-radius: 3%;
                }

                .divFuncText p{
                    align-items: center;
                    text-align: center;
                    /* width: 95%;
                    margin: 3% auto;
                    padding: 3.5%;
                    border-radius: 3%; */
                }

            /* End Second Card */

        }
        
        /* Large devices (desktops): */
        @media (min-width:992px) and (max-width:1200px){

            /* Start Geral */

                /* body{
                    background-color:red;
                } */

                p{
                    font-size: 1.5rem;
                }

                a{
                    font-size: 1.5rem;
                }

                img{
                    width: 100%;
                    height: 100%;
                }

                .fg-white{
                    color: #fff;
                }

                /* .content{
                    width:100%;
                } */

                .main{
                    padding: 2%;
                    font-size: 2rem;
                    align-items: center;
                    text-align: center;
                    margin: 4%;
                }

                .bigText{
                    font-size: 2rem;
                    align-items: center;
                    text-align: center;
                    font-weight: bold;
                }


                .card1{
                    width: 94%;
                    margin: 1% auto;
                    background-color: #fff;
                    padding: 2%;
                    padding-bottom: 10%;
                    display: grid;
                    grid-template-rows: auto auto auto;
                    grid-template-columns: 55% 45%;
                }

                .card2{
                    width: 98%;
                    margin: 1% auto;
                    background-color: #fff;
                    height: fit-content;
                    /* padding: 2%; */
                    /* display: grid; */
                    /* grid-template-rows: auto auto auto; */
                    /* grid-template-columns: 55% 45% */
                    display: flex;
                }


            /* End Geral */

            /* ------------------------------------------------------------------------------------- */

            /* Start First Card */

                .divDestaque{
                    grid-column: 1/3;
                    margin-bottom: 5%;
                }

                .divMsgBtn{
                    padding: 7% 0;
                    align-items: center;
                    text-align: left;
                    width:90%;
                    display: block;
                }

                .divAccountButtons{
                    width: 100%;
                    display:block;
                    margin: 10% auto;
                    align-items:left;
                }

                .divAccountButtons button{
                    width: 50%;
                    font-size: 1.5rem;
                    height: fit-content;
                    padding: 3%;
                }

                .divFireSecImg{
                    width: 100%;
                    height: 100%;
                    display: flex;
                }

            /* End First Card */

            /* ------------------------------------------------------------------------------------- */

            /* Start Second Card */

                .functionSection{
                    /* align-items: center; */
                    width: 30%;
                    height: 33%;
                    /* border: 1px solid red; */
                    margin: 5% auto;
                    /* margin: 0 auto; */
                    /* display: grid; */
                    /* grid-template-columns: 50% 50%; */
                    /* grid-column: 1/3; */
                }

                .divFuncDesc{

                }

                .divFuncImg{
                    width: 80%;
                    height: 80%;
                    margin: 2% auto;
                }

                .divFuncImg:nth-child(1){
                }

                .divFuncText:nth-child(1){
                }


                .divFuncText{
                    align-items: center;
                    text-align: center;
                    width: 95%;
                    margin: 3% auto;
                    padding: 3.5%;
                    border-radius: 3%;
                }

            /* End Second Card */

        }

        /* Extra large devices (telas grandes e monitores de alta resolução): */
        @media (min-width:1200px){

            /* Start Geral */

                /* body{
                    background-color:purple;
                } */

                p{
                    font-size: 1.7rem;
                }

                a{
                    font-size: 1.6rem;
                }

                img{
                    width: 100%;
                    height: 100%;
                }

                .fg-white{
                    color: #fff;
                }

                /* .content{
                    width:100%;
                } */

                .main{
                    /* border: 1px solid red; */
                    /* height: 80vh; */
                    padding: 2%;
                    font-size: 2.5rem;
                    align-items: center;
                    text-align: center;
                    margin: 4%;
                }

                .bigText{
                    font-size: 2.5rem;
                    align-items: center;
                    text-align: center;
                    font-weight: bold;
                }


                .card1{
                    width: 94%;
                    margin: 1% auto;
                    background-color: #fff;
                    padding: 2%;
                    padding-bottom: 10%;
                    display: grid;
                    grid-template-rows: auto auto auto;
                    grid-template-columns: 55% 45%;
                }

                .card2{
                    width: 98%;
                    margin: 1% auto;
                    background-color: #fff;
                    height: fit-content;
                    /* padding: 2%; */
                    /* display: grid; */
                    /* grid-template-rows: auto auto auto; */
                    /* grid-template-columns: 55% 45% */
                    display: flex;
                }


            /* End Geral */

            /* ------------------------------------------------------------------------------------- */

            /* Start First Card */

                .divDestaque{
                    grid-column: 1/3;
                    margin-bottom: 5%;
                }

                .divMsgBtn{
                    padding: 7% 0;
                    align-items: center;
                    text-align: left;
                    width:90%;
                    display: block;
                }

                .divAccountButtons{
                    width: 100%;
                    display:block;
                    margin: 10% auto;
                    align-items:left;
                }

                .divAccountButtons button{
                    width: 50%;
                    font-size: 1.5rem;
                    height: fit-content;
                    padding: 3%;
                }

                .divFireSecImg{
                    width: 100%;
                    height: 100%;
                    display: flex;
                }

            /* End First Card */

            /* ------------------------------------------------------------------------------------- */

            /* Start Second Card */

                .functionSection{
                    /* align-items: center; */
                    width: 30%;
                    height: 33%;
                    /* border: 1px solid red; */
                    margin: 5% auto;
                    /* margin: 0 auto; */
                    /* display: grid; */
                    /* grid-template-columns: 50% 50%; */
                    /* grid-column: 1/3; */
                }

                .divFuncDesc{

                }

                .divFuncImg{
                    width: 80%;
                    height: 80%;
                    margin: 2% auto;
                }

                .divFuncImg:nth-child(1){
                }

                .divFuncText:nth-child(1){
                }


                .divFuncText{
                    align-items: center;
                    text-align: center;
                    width: 95%;
                    margin: 3% auto;
                    padding: 3.5%;
                    border-radius: 3%;
                }

            /* End Second Card */

        }

    </style>

</head>
<body>
     
    <div class="content">
        
        <?php require_once 'navbar.php'; ?>

        <div class="main fg-white">
            <h1>Garantindo a qualidade e segurança para seu evento</h1>
        </div>

        <div class="card1 ">

            <div class="divDestaque">
                <p class="bigText" style="text-align: left;">Explore novas oportunidades e ganhe de acordo com suas necessidades</p>
            </div>

            <div class="divMsgBtn ">
                <div class="">
                    <p>Trabalhe quando quiser com liberdade para escolher as melhores oportunidades para você.</p>
                </div>

                <div class="divAccountButtons ">
                    <a href="signin.php"><button type='button' id='' name='' class='filter-button'>Começar</button><br><br></a>
                    <a href="login.php" style="color:#00A2FF;text-decoration: underline">Já tem uma conta? Fazer login</a>
                </div>
            </div>

            <div class="divFireSecImg ">
                <img class='functionImg' id='bombeiroFig' src="images/bombeiroFig2.png" style='display:none;'>
                <img class='functionImg' id='segurancaFig' src="images/segurancaFig2.png">   
            </div>

        </div>

        <div class="card2">

            <div class="functionSection">
                <div class="divFuncImg">
                    <img src="images/escudo.png" alt="" class='first-link'>
                </div>

                <div class="divFuncDesc">
                    <div class="">
                        <p class="bigText">Segurança de eventos</p>
                    </div>

                    <div class="divFuncText">
                        <p>Profissionais certificados altamente qualificados para garantir tranquilidade e proteção para seu evento.</p>  
                    </div>
                </div>
            </div>

            <div class="functionSection">
                <div class="divFuncImg">
                    <img src="images/chama.png" alt="" class='first-link'>
                </div>

                <div class="divFuncDesc">
                    <div class="">
                        <p class="bigText">Bombeiro civil</p>
                    </div>

                    <div class="divFuncText">
                        <p>Profissionais experientes e preparados para garantir respostas rápidas a qualquer emergência durante o seu evento.</p>  
                    </div>
                </div>
            </div>

            <div class="functionSection">
                <div class="divFuncImg">
                    <img src="images/banimento.png" alt="" class='first-link'>
                </div>

                <div class="divFuncDesc">
                    <div class="">
                        <p class="bigText">Controlador de acesso</p>
                    </div>

                    <div class="divFuncText">
                        <p>Profissionais em controladoria que garantem a entrada apenas de pessoas autorizadas, mantendo a organização do seu evento.</p>  
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script>

        setInterval(function () {
            if(document.getElementById('bombeiroFig').style.display == 'none'){
                document.getElementById('segurancaFig').style.display = 'none'
                document.getElementById('bombeiroFig').style.display = 'block'
            }else if(document.getElementById('segurancaFig').style.display == 'none'){
                document.getElementById('bombeiroFig').style.display = 'none'
                document.getElementById('segurancaFig').style.display = 'block'
            }
        }, 3000);

        thirdFrameImgs = document.querySelectorAll('.thirdFrameImg');
        tfImgAuxTxt = document.querySelectorAll('.tfImgAuxTxt');
 
        thirdFrameImgs.forEach(function(thirdFrameImg) {
            thirdFrameImg.addEventListener('click', function() {
                var idx = this.getAttribute('data-idx');
                tfImgAuxTxt[idx].style.display !== 'block' ? tfImgAuxTxt[idx].style.display = 'block' : tfImgAuxTxt[idx].style.display = 'none';
            })
        })

    </script>

</body>
</html>
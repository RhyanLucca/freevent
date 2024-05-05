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

        .debug{
            border: 1px solid red;
        }

        /*Extra Small <575px */
        /*Small ≥576px */
        /*Medium ≥768px */
        /*Large ≥992px */
        /*Extra Large ≥1200px */


        /* Start Extra Small --------------------------------------------------------------------------------------------------------- */
        @media (max-width:575px){

            .whiteFrame{
                display:block;
                height: fit-content;
                background-color: #fff;
                padding: 5%;
                margin: 10px auto;
                width: 80%;
            }

            .divFrameText{
                width: 100%;
            }

            /* START FIRST FRAME */

                .firstFrame{
                height:fit-content;
                background-color:#00A2FF;
                height: 40vh;
                }

                .divText{
                align-items:center;
                text-align:center;
                height:100%;
                display: flex;
                padding: 3%;
                }

                .divText h1{
                font-size:180%;
                color:#fff;
                position:inherit;
                text-align:center;
                width:90%;
                margin:0 auto
                }
            /* END FIRST FRAME */

            /* START SECOND FRAME */

                .divSFImages{
                align-items:center;
                text-align:center;
                width: 90%;
                margin:0 auto;
                }

                .divSFImages .functionImg{
                    /* align-items:right; */
                    /* text-align:right; */
                    /* float:right; */
                    margin: 0 auto;
                    /* width:20rem; */
                    /* height:20rem; */
                    width:100%;
                    height:100%;
                    display: block;
                }
            /* END SECOND FRAME */

            /* START THIRD FRAME */

                .thirdFrameImg{
                margin:7% auto;
                text-align:center;
                max-width:70%;
                }

                .tfImgAuxTxt{
                text-align:left;
                background-color:#00A2FF;
                padding:5%;
                color:#fff;
                border-radius: 3px;
                }

            /* END THIRD FRAME */

        }
        /* --------------------------------------------------------------------------------------------------------- End Extra Small */

        /* Start Small --------------------------------------------------------------------------------------------------------- */
        
        
        /* --------------------------------------------------------------------------------------------------------- End Small */


        /* Width: 768 X 1023 */
        /* Width: > 1024 */


        /* .firstFrame{
            height:80vh;
            background-color:#00A2FF;
        } */

        /* .divText{
            align-items:center;
            text-align:center;
            height:100%;
            display: flex;
        } */

        /* .divText h1{
            font-size: 15vw;
            color:#fff;
            position:inherit;
            text-align:center;
            width:90%;
            margin:0 auto
        } */
        
        /* .divSFImages{
            align-items:center;
            text-align:center;
            display: none;
        } */

        .divSFImages .functionImg{
            /* align-items:right; */
            /* text-align:right; */
            /* float:right; */
            /* width:90%;
            height:90%; */
        }

        @media (min-width:768px) {

            .firstFrame{
                display:flex;
            }

            .divText{
                width: 60%;
            }

            .divSFImages{
                display:block;
                width: 40%;
            }
            
        }

    </style>
</head>

<body style="margin:0;padding:0;background-color:#00A2FF">

    <?php require_once 'navbar.php'; ?>
    
    <div class='firstFrame'>
        <div class='divText  '>
            <h1>Garantindo a qualidade e segurança para seu evento</h1>
        </div>
    </div>

    <div class="whiteFrame">
        <div class="">
            <h2>Explore novas oportunidades e ganhe de acordo com suas necessidades</h2>
        </div>
        <div class="" style="margin-top:3%;width:100%">
            <p>Trabalhe quando quiser com liberdade para escolher as melhores oportunidades pra você.</p>
        </div>
        <br>
        <div class="" style="display:block;align-items:center;justify-content:space-between">
            <!-- <input class="filter-button" type="button" value="Começar"><br><br> -->
            <a href="signin.php"><button type='button' id='' name='' class='filter-button'>Começar</button><br><br></a>
            <a href="login.php" style="color:#00A2FF;text-decoration: underline">Já tem uma conta? Fazer login</a>
        </div>
        <br><br>
        <div class='divSFImages'>
            <img class='functionImg' id='bombeiroFig' src="images/bombeiroFig2.png" style='display:none;'>
            <img class='functionImg' id='segurancaFig' src="images/segurancaFig2.png">
        </div>
    </div>

    <div class="whiteFrame">
        <div class="">
            <h2>Tudo para garantir a qualidade e segurança do seu evento</h2>
        </div>
        
        <!-- <div class='' style='margin:2rem auto;max-width:90%;align-items:center;justify-content:space-between;'> -->
        <div style="">
            
            <div style="display: block;">
                <div class='thirdFrameImg' style='' data-idx="0">
                    <img src="images/escudo.png" style="width:100%;height:100%;" alt="" class='first-link'>
                    <h3 style=''>Segurança de eventos</h3>
                </div>
                <div class="tfImgAuxTxt" style="">
                    Contrate profissionais certificados altamente qualificados para garantir tranquilidade e proteção para seu evento.
                <!-- <br><br>Explore diversas oportunidades na área de segurança de eventos. Seja parte de equipes dedicadas a garantir a segurança e o bem-estar em eventos de alto nível. -->
                </div>
            </div>
            <div style="display: block;">
                <div class='thirdFrameImg' style='' data-idx="1">
                    <img src="images/chama.png" style="width:100%;height:100%;" alt="" class='first-link'>
                    <h3 style=''>Bombeiros Civis</h3>
                </div>
                <div class="tfImgAuxTxt">
                    Contrate profissionais experientes e preparados para garantir respostas rápidas a qualquer emergência durante o seu evento.
                </div>
            </div>
            <div style="display: block;">
                <div class='thirdFrameImg' style='' data-idx="2">
                    <img src="images/banimento.png" style="width:100%;height:100%;" alt="" class='first-link'>
                    <h3 style=''>Controladoria de acesso</h3>
                </div>
                <div class="tfImgAuxTxt">
                    Contrate profissionais em controladoria que garantem a entrada apenas de pessoas autorizadas, mantendo a organização do seu evento.
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
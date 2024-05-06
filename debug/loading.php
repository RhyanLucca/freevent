<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <button id='btnTeste'>
        <p>Teste</p>
        <img id='loading' name='loading' src="../images/loading.gif" style="display:none;" alt="">
    </button>

    <button id='btnTeste'>
        <p>Teste</p>
        <img id='loading' name='loading' src="../images/loading.gif" style="display:none;" alt="">
    </button>

<script>

    btnTeste=document.getElementById('btnTeste')

    btnTeste.onclick = function(){
        showLoading(btnTeste);
    }

    function showLoading(element){
        console.log(document.getElementsByTagName('img'))
    }

</script>


</body>
</html>
<?php
include('class/ClassEstados.php');
$objEstados = new ClassEstados();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <select name="estado" id="estado">
        <option value="">Selecione o Estado</option>
        <?php foreach ($objEstados->getEstados() as $estado) { ?>
            <select name="" id="" value='<?php echo $estado->id?>'><?php echo $estado->nome; ?></select>
        <?php } ?>
    </select>

<br><br>

    <select name="cidade" id="cidade">
        <option value="">Selecione a Cidade</option>
    </select>


    <script src="assets/js/script.js"></script>
</body>
</html>
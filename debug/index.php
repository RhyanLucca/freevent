<?php

include('../engines/connection.php');
header('Content-Type: text/html; charset=utf-8');
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
    
    <h1>Cadastrar Artigo</h1>

    <form action="select_subcategoria.php" method='GET'>
        Categoria:
        <br>
        <select name="estado" id="estado" required>
            <option value="">Selecione um estado</option>
        <?php    
        $query = $conn->query("SELECT id, nome, uf FROM estados");
        $registros = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach($registros as $option){
            ?>
            <option value="<?= $option['id']?>"><?= $option['nome']?></option>
        
            <?php
        }
        ?>
        </select>

        <select name="cidade" id="cidade" required>
            <option value="">Selecione uma Cidade</option>
        </select>

        <input type="submit" value="">

    </form>

<script src="js/funcoes.js"></script>
</body>
</html>
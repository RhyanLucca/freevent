<?php

include('../engines/connection.php');

$estado = $_POST['estado'];

echo $estado;

$query = $conn->query("SELECT id, nome, id_estado FROM cidades WHERE id_estado = $estado");

// $data = ['id' => $categoria];

// $query->execute(query);

$registros = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($registros as $option){
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <option value="<?= $option['id']?>"><?= $option['nome']?></option>

<?php
}
?>
<?php

include('../engines/connection.php');
header('Content-Type: text/html; charset=utf-8');
$estado = $_GET['estado'];

echo $estado;

$query = $conn->query("SELECT id, nome, id_estado FROM cidades WHERE id_estado = $estado");

// $data = ['id' => $categoria];

// $query->execute(query);

$registros = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($registros as $option){
?>

    <option value="<?= $option['id']?>"><?= $option['nome']?></option>

<?php
}
?>
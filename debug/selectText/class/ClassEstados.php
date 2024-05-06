<?php

include('ClassConect.php');

class ClassEstados extends ClassConect{

    public function getEstado(){
        $estados = $this->conectaDB()->prepare('select * from estados');
        $estados->execute();
        return $fEstados = $estados->fetchAl(PDO::FETCH_OBJ);
    }

}

?>
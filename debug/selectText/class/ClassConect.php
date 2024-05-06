<?php

class Connect{

    public function conectaDB(){
        try{
            return $con= new PDO('mysql:host=localhost;dbname=rtsystems', 'root', '');
        }catch(PDOException $erro){
            return $erro->getMessage();
        }
    }



}

?>
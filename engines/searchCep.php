<?php

if(isset($_POST['txtCep'])) {

    $cep = $_POST['txtCep'];

    if($cep !== ""){

        $url = "https://viacep.com.br/ws/$cep/json/";

        function returnCep($urlBusca){
            
            $curl = curl_init($urlBusca);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
            curl_close($curl);

            header("Content-Type:application/json");
            print_r($response);
            // print_r(json_encode($response, true));
        }

        $dados = returnCep($url);

        echo $dados;
    }
}
?>
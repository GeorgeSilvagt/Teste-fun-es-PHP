<?php
    $cep = filter_input(INPUT_GET, "cep");
    $cep = str_replace("-", "",$cep);
    if($cep != null){
    $str = file_get_contents("https://viacep.com.br/ws/$cep/json/");
    

    $arrayEnd = json_decode($str);
    
if($arrayEnd != null){
   echo "<p><b>Cep: </b>".$arrayEnd->cep."</p>";
   echo "<p><b>logradouro: </b>".$arrayEnd->logradouro."</p>";
   echo "<p><b>complemento: </b>".$arrayEnd->complemento."</p>";
   echo "<p><b>bairro: </b>".$arrayEnd->bairro."</p>";
   echo "<p><b>localidade: </b>".$arrayEnd->localidade."</p>";
   echo "<p><b>uf: </b>".$arrayEnd->uf."</p>";
   echo "<p><b>ibge: </b>".$arrayEnd->ibge."</p>";
   echo "<p><b>ddd: </b>".$arrayEnd->ddd."</p>";
}
    }
    else{
        echo "Insira o cep!!!";
    }

?>


<?php

    $jasonStr = '{"Titulo":"Titanic","Sinopse":"O navio afunda","ano":2021,
        "horarios":["16:00","19:00","20:00"],"personagens" : ["Jack","rose","corno"]}';

    $arrayFilme = json_decode($jasonStr);

   // var_dump($arrayFilme);

    echo "<p><b>Titulo: </b>".$arrayFilme->Titulo."</p>";
    echo "<p><b>Sinopse: </b>".$arrayFilme->Sinopse."</p>";
    echo "<p><b>Ano: </b>".$arrayFilme->ano."</p>";
    echo "<p><b>Horarios: </b></p>";
  

    for($i=0; $i < count($arrayFilme->horarios); $i++){
        echo "<p>-<b>".$arrayFilme->horarios[$i]."-</p></b>";
    }
   
    echo "<p><b> Personagens: </b></p>";

    for ($j=0; $j < count($arrayFilme->personagens); $j++){
        echo "<b><p>".$arrayFilme->personagens[$j]."</b></p>";
    }
  
    /* $arrayFilme = array(
       "Titulo"=> "Titenic",
       "Sinopse"=>"O navio afunda",
       "ano"=> 2021,
       "horarios"=> array(
           "16:00",
           "19:00",
           "20:00"
       )
   );
    
$jasonStr = json_encode($arrayFilme);
echo $jasonStr;*/

?>

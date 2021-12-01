

<?php
   $arrayFilme = array(
       "Titulo"=> "Titenic",
       "Sinopse"=>"O navio afunda",
       "ano"=>"2021",
       "horarios"=> array(
           "16:00",
           "19:00",
           "20:00"
       )
   );
    
$jasonStr = json_encode($arrayFilme);
echo $jasonStr;

?>

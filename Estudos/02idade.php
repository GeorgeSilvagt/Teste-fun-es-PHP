<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>valor</title>
    <meta charset="utf-8">
  </head>
  <body>
      <div>
      <?php
       $nome = isset($_GET ["nome"]) ? $_GET["nome"] : "[não informado]";
       $ano = isset($_GET ["ano"]) ? $_GET["ano"] : 0;
       $sexo = isset($_GET["sexo"]) ? $_GET ["sexo"] : "[não informado]";

       if($ano < date("Y") || $ano != 0){

       $idade =  date("Y") - $ano;

       };

       if($idade == 0) {

           $idade = "[ano não informado]";
        };

       echo "$nome e $sexo e tem $idade anos.";
    ?>
    <p>
    <form type= "button" action= "http://localhost/Estudos/Form%20Gust%20Gua%20%2308%2002.html">
        <button type= "submit">Voltar</button>
    </form>
    
    </div>
  </body>
</html>
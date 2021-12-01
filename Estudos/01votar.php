<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>resultado</title>
    <meta charset="utf-8">
  </head>
  <body>
      <div>
      <?php
        $nome = $_GET["nome"];
        $ano = $_GET["ano"];
        $idade = date("Y") - $ano;
        $erro = isset($_GET["ano"]) ? $_GET["ano"] : 0000;
        $erro2 = isset($_GET["nome"]) ? $_GET["nome"] : "????";

        

        if($idade<16){
            echo "$nome tem $idade e não pode votar e dirigir.";
        }
        elseif ($idade>=16 && $idade<18) {
            echo "$nome tem $idade voto opcional, mas não pode dirigir.";
          }
          else {
           
            echo "$nome tem $idade e  pode votar e dirigir.";
          }
          
          if ($idade>=65) {
            echo " (voto opcional)";
          }
        

      ?>
      <p>
      <form type= "button" action ="http://localhost/Estudos/aula%20Gust%20Gua%20%2309%2001.html">
        <button type= "submit">Voltar</button>
      </form>
   
    </div>

    </div>
  </body>
</html>

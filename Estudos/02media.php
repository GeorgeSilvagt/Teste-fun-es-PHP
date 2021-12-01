<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>resultado</title>
    <meta charset="utf-8">
  </head>
  <body>
      <div>
      <?php
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];

        $media = ($nota1 + $nota2)/2;
        if ($media >=6) {
            Echo "Sua media foi $media e vc esta aprovado";
        }
        elseif($media>=4 && $media<6){
            echo "Sua media foi $media e vc esta em recuperação";

        }
        else{
            echo"Sua media foi $media vc foi reprovado";
             }
      ?>
      <p>
      <form type= "button" action ="http://localhost/Estudos/aula%20Gust%20Gua%20%2309%2002.html">
        <button type= "submit">Voltar</button>
      </form>
   
    </div>

    </div>
  </body>
</html>

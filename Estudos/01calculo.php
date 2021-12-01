<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>resultado</title>
    <meta charset="utf-8">
  </head>
  <body>
      <div>
      <?php
        
        $numero = isset($_GET["numero"]) ? $_GET["numero"] : 0;
        $operacao = isset($_GET["opera"]) ? $_GET["opera"] : 0;

        switch ($operacao) {
            case 'um':
                $result=$numero * 2;
                
                break;
            
            case '2':
                $result=pow($numero,3);
               
                break;

            case '3':
                $result=sqrt($numero);
               
                break;
            
            }
            echo "Resultado: $result";
      ?>
      <p>
      <form type= "button" action ="http://localhost/Estudos/Form%20Gust%20Gua%20%2310%2001.html">
        <button type= "submit">Voltar</button>
      </form>
   
    </div>

    </div>
  </body>
</html>
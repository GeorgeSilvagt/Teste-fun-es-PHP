<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>resultado</title>
    <meta charset="utf-8">
  </head>
  <body>
      <div>
      <?php
        
       $regiao =isset($_GET["reg"]) ? $_GET["reg"] : 0;

       switch ($regiao) {
           case 'norte':
               echo "Região Norte";
               break;
           case'nordeste':
                Echo "Região Nordeste";
                break;
            default:
            echo "Insira";
       }
      ?>
      <p>
          <a href ="javascript:history.go(-1)" class="botao">Voltar</a>

      <!--<form type= "button" action ="http://localhost/Estudos/Form%20Gust%20Gua%20%2310%2002.html">
        <button type= "submit">Voltar</button>-->
      </form>
   
    </div>

    </div>
  </body>
</html>
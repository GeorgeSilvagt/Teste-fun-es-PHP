<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>resultado</title>
    <meta charset="utf-8">
  </head>
  <body>
      <div>
      <?php
        
       $numerodia =isset($_GET["dia"]) ? $_GET["dia"] : 0;

       switch ($numerodia) {
           case '02':
           case '03':
           case '04':
           case '05':
           case '06':
               echo "Hoje teremos aula";
               break;
           case'07':
           case'08':
                echo "Não teremos aula";
                break;
            default:
            echo "Insira o dia!";
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
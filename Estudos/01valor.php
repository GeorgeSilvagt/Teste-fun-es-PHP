<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>valor</title>
    <meta charset="utf-8">
  </head>
  <body>
      <div>
      <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor);

        echo "A raiz quadrada de $valor é " .number_format($rq,2);
    ?>
    <p>
    <form type ="button" action="http://localhost/Estudos/Form%20Gust%20Gua%20%2308.html" >
    <button type= "submit">Voltar</buttom>
    </form>
    </div>

    </div>
  </body>
</html>


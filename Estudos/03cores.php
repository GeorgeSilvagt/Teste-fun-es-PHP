<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <?php
        $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto não informado";
        $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
      ?>
    <title>valor</title>


    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;

        }

        </style>
    <meta charset="utf-8">
  </head>
  <body>
      <div>
      <?php
       echo "<span class='texto'>  $txt </span>";
       
     ?>
    <p>
    <form type= "button" action= "http://localhost/Estudos/Form%20Gust%20Gua%20%2308%2003.html">
        <button type= "submit">Voltar</button>
    </form>
    
    </div>
  </body>
</html>
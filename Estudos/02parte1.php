<!DOCTYPE HTML>
<html lang="ptbr">
    <head>
        <Title>Teste while</Title>
        <meta cheset="utf-8">
</head>
<body>
    <div>
    <form method="get" action="02parte2.php">
    <?php
        $cont=1;
        while($cont<=5){
        echo "Valor $cont: <input type='number' name='v$cont' max='100' min= '0' max='100' value='0'/><br><p>";
        $cont++;
       }
           
        ?>
        <input type="submit" value="Enviar" class="botao"/>
        </form>
    </div>
</body>
</html>
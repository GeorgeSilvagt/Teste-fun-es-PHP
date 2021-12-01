<!DOCTYPE HTML>
<html lang="ptbr">
    <head>
        <Title>Teste while</Title>
        <meta cheset="utf-8">
</head>
<body>
    <div>
    <?php
        $c=1;
        while ($c<=5) {
            $v = "num".$c;
            $url = "v".$c;
            $$v = isset($_GET["$url"]) ? $_GET["$url"] : 0;
            $c++;
        }
        $i=1;
        while($i<=5) {
            $v = "num". $i ;
            echo "Valor $i: ". $$v. "<br/>";
            $i++;
        }

        ?>
        </br>
        <form action="http://localhost/Estudos/02parte1.php">
        <input type="submit" value="voltar"/>
        </form>
    </div>
</body>
</html>
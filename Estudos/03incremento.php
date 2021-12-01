<!DOCTYPE HTML>
<html lang="ptbr">
    <head>
        <Title>Contador</Title>
        <meta cheset="utf-8">
</head>
<body>
    <div>
        <?php
            $cont = 0;
            $incremento=isset($_GET["incre"]) ? $_GET["incre"]: 0;
            $numero1=isset($_GET["num1"]) ? $_GET["num1"] : 0;
            $numero2=isset($_GET["num2"]) ? $_GET["num2"] : 0;
          

            if ($numero1<$numero2){
                echo $numero1. " ";

            while($cont<$numero1 && $numero1<$numero2){
                $numero1 = $numero1 + $incremento;

                 
                echo $numero1 . "  ";

                $cont++;
            
               
            }
        }
           else{
            echo $numero1. " ";
            $cont = $numero1;

            while($cont>=$numero1 && $numero1>=$numero2){
                $numero1 = $numero1 - $incremento;

                 
                echo $numero1 ."  ";

                $cont++;
            }
          }

        ?>
        <p>
        <form type="button" action="http://localhost/Estudos/Form%20Gust%20Gua%20%2311%2003.html">
            <button type="submit">VOLTAR</button>
        </form>

    </div>
</body>
</html>
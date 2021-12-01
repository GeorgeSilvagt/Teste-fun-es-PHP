<?php

$cid = 'BRXX3198'; //ID Yahoo da cidade que deseja exibir o tempo

$dados = unserialize(file_get_contents("http://frameworks.hgbrasil.com/tempo/hg_tempo.php?cid=$cid")); //Recebe os valores do HG Framework

/*
***** HG Brasil Weather Framework *****
*****   Hugo Leonardo Demiglio    *****
*****   Livre para altera��es     *****
*****   Favor manter o copyright  *****
*****  hugodemiglio@hgbrasil.com  *****

Vari�veis:
	$dados[0] => Temperatura em graus Celsius
	$dados[1] => Data do servidor dd/mm/aaaa
	$dados[2] => Hor�rio do servidor hh:mm
	$dados[3] => C�digo de condi��o clim�tica
	$dados[4] => Descri��o da condi��o clim�tica
	$dados[5] => Informa se � dia ou noite por extenso(dia/noite)
	$dados[6] => C�digo da cidade informado
	$dados[7] => Nome da cidade de referencia
	$dados[8] => C�digo da imagem � ser exibida

		Vers�o 1.0.2009
		
*/
?>

<html>
<head>
<style type="text/css">
	/* HG Brasil CSS Framework */
	* {
	margin:0 0 7 0;
	padding:0;
	list-style:none;
	}
	body{
	font: normal 16px Arial;
	color: #FFF;
	}
	#HGweather{
	background-image: url(http://frameworks.hgbrasil.com/tempo/backgroud.png);
	width: 270px;
	height: 79px;
	position: absolute; 
	top: 7px; /* Altere aqui para mudar a posi��o do tempo */
	left: 7px; /* Altere aqui para mudar a posi��o do tempo */
	background-repeat: no-repeat;
	}
	#imagem{
	position: relative;
	top: 4px;
	left: 0px;
	}
	#cidade{
	position: relative;
	top: -100px;
	left: 90px;
	}
	#condicao{
	position: relative;
	top: -105px;
	left: 90px;
	}
	#temperatura{
	position: relative;
	top: -105px;
	left: 220px;
	}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="author" content="Hugo Leonardo Demiglio - HG Brasil" />
<title>Tempo</title>
</head>
<body>

<div id="HGweather">
	<div id="imagem">
		<p><?php echo "<img src='http://frameworks.hgbrasil.com/tempo/imagens/". $dados[8] .".png' border='0' width='125px' height='90px'>"; ?></p>
	</div>
	<div id="cidade">
		<p><?php echo $dados[7]; ?></p>
	</div>
	<div id="condicao">
		<p><?php echo ucwords($dados[4]); ?></p>
	</div>
	<div id="temperatura">
		<p><?php echo $dados[0] ." �C"; ?></p>
	</div>
</div>

</body>
</html>
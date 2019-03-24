<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PY4FLR</title>
	</head>

	<body>
		<h1>Dados:</h1>
<?php

//php + shell script
//Autor: Eng. Fabricio de Lima Ribeiro
//Data: 23/03/2019

$site = "www.uol.com.br";

$resultado = shell_exec("lynx -dump $site | head -n 21 | tail -n 1");
$dolar = substr($resultado, -6);
echo "Dolar: R$ $dolar";

$resultado = shell_exec("lynx -dump $site | head -n 22 | tail -n 1");
$euro = substr($resultado, -6);
echo "<br>Euro: R$ $euro";

$data = shell_exec("date +'%d/%m/%Y'");
echo "<br>Cotaçao do dia: $data";

$hora = shell_exec("date +'%T'");
echo " as $hora";

echo "<br>Fonte: $site";

?>

	</body>
</html>

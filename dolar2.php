!DOCTYPE html>
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
//Data: 25/09/2019

$site = "www.uol.com.br";

shell_exec("rm site.html site.txt");
shell_exec("wget $site -O site.html");
shell_exec("tr [:space:] '\n' < site.html > site.txt");

$dolar=shell_exec("grep -A 1 Dólar: ./site.txt");
echo "$dolar";

$euro=shell_exec("grep -A 1 Euro: ./site.txt");
echo "<br>$euro";

$data = shell_exec("date +'%d/%m/%Y'");
echo "<br>Cotaçao do dia: $data";

$hora = shell_exec("date +'%T'");
echo " as $hora";

echo "<br>Fonte: $site";

?>

        </body>
</html>



<?php

$nome = "Arthur";
$idade = "16";
$altura = "1,85";
$status = true;

//exibir valores na tela
echo "O nome é: $nome"; //primeira forma
echo "<br>";
echo "O nome é: " . $nome; //segunda forma
echo "<br>";

//Verificar tipo e valor de uma variável
var_dump($altura);
echo "<br>";
print_r($altura);
echo "<br>";

//Curiosidade

for($i=1; $i < 6; $i++)
echo $i . "<br>";

//Curiosidade do php a respeito de valores booleanos

echo "O status é: $status";

//Se o status for false, ele mostra NADA, false no php é NADA


?>


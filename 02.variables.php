<?php 

#Variable Numerica
$numero = 17;
echo "Esta es el dia de Junio que naci: $numero<br>";
var_dump($numero);

echo "<br><br>";

#Variable texto
$palabra = "Palabra";
echo "Esto es una palabra: $palabra<br>";
var_dump($palabra);
echo "<br><br>";

#Variable Boleana
$boleana = true;
echo "Esto es una variable booleana: $boleana<br>";
var_dump($boleana);
echo "<br><br>";

#Variable Arreglo
$colores = array("rojo","azul", "verde");
echo "Esto es una variable array: $colores[2]";
echo "<br><br>";

#Variable Objeto
$frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana"];
echo "Esto es una variable objeto: $frutas->fruta1	";
echo "<br><br>";
?>
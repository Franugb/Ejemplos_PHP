<?php
$array1 = array("a" => "rojo", "b" => "verde");
$array2 = array("c" => "azul", "d" => "amarillo");
$resultado = array_merge($array1, $array2);
print_r($resultado);

$cadena = "abcdef";
echo substr($cadena, 1, 3);

$array = array("a" => "rojo", "b" => "verde", "c" => "azul");
$reverso = array_reverse($array);
print_r($reverso);

$array = array("a" => "rojo", "b" => "verde", "c" => "rojo");
$unico = array_unique($array);
print_r($unico); 

$array = array("a" => "rojo", "b" => "verde", "c" => "azul");
$claves = array_keys($array);
print_r($claves);

$cadena = "Hola Mundo";
echo strtoupper($cadena); 

$cadena = "   Hola Mundo   ";
echo trim($cadena); 

$cadena = "Hola mundo";
echo strpos($cadena, "mundo"); 

$stack = array("rojo", "verde", "azul");
$elemento = array_pop($stack);
echo $elemento; 

$frutas = array("Manzana", "Naranja", "Uva");
$cadena = implode(",", $frutas);
echo $cadena; 















































































?>
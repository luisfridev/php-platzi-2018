<?php
/**
 * Ejercicio 1.
 * Escribe el código necesario para generar la cadena final usando el arreglo dado
 * Lado, ledo, lido, lodo, ludo,
 * decirlo al revés lo dudo.
 * Ludo, lodo, lido, ledo, lado,
 * ¡Qué trabajo me ha costado!
 */
$arreglo = [
	'keyStr1' => 'lado',
	0 => 'ledo',
	'keyStr2' => 'lido',
	1 => 'lodo',
    2 => 'ludo'
];


foreach ($arreglo as $element) {
	echo "$element, ";
}
echo '<br> decirlo al revés lo dudo <br>';
foreach (array_reverse($arreglo) as $element) {
	echo "$element, ";
}
echo '<br> ¡Qué trabajo me ha costado!';
?>
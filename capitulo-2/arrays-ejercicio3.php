<?php
/**
 * Ejercicio 3.
 * Escribe el código necesario para encontrar los 3 números 
 * más grandes y los 3 números más bajos de la siguiente lista:
 */

 $valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];

// Numeros más grandes
$times = 3;
echo 'Valores más grandes <br>';
while ($times > 0) {
    echo max($valores). '<br>';
    $max_value_key = array_search(max($valores), $valores);
    unset($valores[$max_value_key]);
    $times--;
}

// Numeros más bajos
$times = 3;
echo 'Números más bajos <br>';
while ($times > 0) {
    echo min($valores). '<br>';
    $max_value_key = array_search(min($valores), $valores);
    unset($valores[$max_value_key]);
    $times--;
}

// Solucion 2
function getValues($type, $times, $array_values)
{
    echo ucfirst($type).' numbers: <br>';
    while ($times > 0) {
    echo $type($array_values). '<br>';
    $max_value_key = array_search($type($array_values), $array_values);
    unset($array_values[$max_value_key]);
    $times--;
    }
}

$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
echo getValues('max',3,$valores);
echo getValues('min',3,$valores);



?>
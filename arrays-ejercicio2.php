<?php
/**
 * Ejercicio 2.
 * Crea un arreglo que contenga como clave los nombres de 5 países y como valor 
 * otro arreglo con 3 ciudades que pertenezcan a ese país, después utiliza 
 * un ciclo foreach, para imprimir el nombre del país 
 * seguido de las ciudades que definiste:
 * 
 * Ejemplo,
 * 
 * México: Monterrey Querétaro Guadalajara
 * Colombia: Bogota Cartagena Medellin
 */

$places = [
    'México' => [
        'Monterrey',
        'Querétaro',
        'Guadalajara'
    ],
    'Colombia' => [
        'Bogota',
        'Cartagena',
        'Medellin'
    ],
    'Japón' => [
        'Fukushima',
        'Nagasaki',
        'Osaka'
    ],
    'Alemania' => [
        'Berlín',
        'Múnich',
        'Bremen'
    ],
    'Tailandia' => [
        'Bangkok',
        'Chiang Mai',
        'Sukhothai '
    ]
];


foreach ($places as $country => $cities) {
    echo "$country <br>";
    if (is_array($cities)) {
        foreach ($cities as $city) {
            echo "- $city <br>";
        }
    }
}
?>
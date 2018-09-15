<?php
# EJERCICIO 2
# Tomando en cuenta que tenemos una variable llamada $valor, 
# escribe en la sección de discusiones ¿Cómo sería un condicional
# para las siguientes opciones?
# 1.- $valor es mayor que 5 pero menor que 10
# 2.- $valor es mayor o igual a 0 pero menor o igual a 20
# 3.- $valor es igual a “10” asegurando que el tipo de dato sea cadena
# 4.- $valor es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15

if ($valor > 5 && $valor < 10) {
}
if ($valor >= 0 && $valor <= 20) {
}
if ($valor === "10") {
}
if (($valor > 0 && $valor < 5) || ($valor > 10 && $valor < 15)) {
}

?>
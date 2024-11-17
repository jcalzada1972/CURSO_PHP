<?php
// declarar variables
 $num1=3;
 $num2=5;

// Realizar las cuatro operaciones matemáticas
$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$division = ($num2 != 0) ? $num1 / $num2 : 'Error: División por cero';

// Mostrar los resultados de las cuatro operaciones
echo "\nResultados:<br>";
echo "Suma: " . $suma . "<br>";
echo "Resta: " . $resta . "<br>";
echo "Multiplicación: " . $multiplicacion . "<br>";
echo "División: " . $division . "<br>";
?>
<?php 
/*
- El estudiante tiene un límite de 10 faltas.
- Cada vez que el estudiante falta a una clase, se incrementa el contador de faltas.
- El semestre tiene 15 clases en total.
- Queremos mostrar el número de faltas después de cada clase y detener el ciclo 
si el estudiante llega al límite de faltas.*/

// Inicialización de variables

$maxFaltas = 10; // Máximo de faltas permitidas
$clasesTotales = 15; // Total de clases en el semestre
$faltas = 0; // Contador de faltas

// Ciclo while que simula el seguimiento de faltas durante el semestre
$clase = 1; // Comenzamos desde la primera clase

while ($clase <= $clasesTotales) {
    // Simulamos que el estudiante falta aleatoriamente a algunas clases
    // Aquí usamos rand() para simular si faltó o no (1 = falta, 0 = asistió)
    $falta = rand(0, 1); // 0 o 1 al azar

    if ($falta == 1) {
        $faltas++; // Incrementamos el contador de faltas
        echo "Clase $clase: El estudiante faltó. Total de faltas: $faltas<br>";
    } else {
        echo "Clase $clase: El estudiante asistió. Total de faltas: $faltas<br>";
    }

    // Verificamos si el estudiante ha alcanzado el límite de faltas
    if ($faltas >= $maxFaltas) {
        echo "¡El estudiante ha alcanzado el límite de faltas ($maxFaltas)! El semestre ha terminado para él.<br>";
        break; // Terminamos el ciclo si el estudiante ha alcanzado el límite de faltas
    }

    $clase++; // Pasamos a la siguiente clase
}



 ?>
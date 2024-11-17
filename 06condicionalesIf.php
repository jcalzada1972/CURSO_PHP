<?php
/* Imagina que en la universidad hay una regla que establece lo siguiente:

1. Los estudiantes solo pueden inscribirse en clases si tienen un promedio mínimo de 6.0.
2. Los estudiantes pueden inscribirse en un máximo de 5 clases. */



// Datos del estudiante
$promedio = 7.5;  // Promedio del estudiante
$clasesInscritas = 3;  // Número de clases en las que ya está inscrito el estudiante
$maxClases = 5;  // Número máximo de clases permitidas

// Condición para verificar si el estudiante tiene el promedio necesario
if ($promedio >= 6.0) {
    // Verificar si el estudiante no ha excedido el límite de clases
    if ($clasesInscritas < $maxClases) {
        echo "Puedes inscribirte en una nueva clase. Tu promedio es suficiente y aún tienes espacio en tu horario"."<br>";
    } else {
        echo "No puedes inscribirte en más clases. Ya estás inscrito en el número máximo de clases"."<br>";
    }
} else {
    echo "No puedes inscribirte en una clase. Tu promedio es demasiado bajo. <br>";
}

?>
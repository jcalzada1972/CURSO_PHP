<?php
/*
- El cliente realiza varias compras y se registra el monto  de cada compra.
- El ciclo do-while continuará ejecutándose hasta que el   
  cliente decida que ya no quiere comprar más.
- El sistema debe mostrar el total de las compras realizadas 
  por el cliente.
*/


// Inicialización de variables
$totalVentas = 0;  // Acumulador de ventas totales
$seguirComprando = true;  // Variable de control para el ciclo
$maxDescuento = 100; // El cliente puede recibir un descuento si gasta más de $100 en total

// Simulación de ventas
do {
    // Pedir al cliente el monto de su compra
    $montoCompra = floatval(readline("Ingrese el monto de la compra: $"));

    // Validación del monto de la compra (no puede ser negativo)
    if ($montoCompra < 0) {
        echo "El monto de la compra no puede ser negativo. Intente de nuevo.\n";
        continue; // Si el monto es negativo, reinicia la iteración del ciclo
    }

    // Acumular el monto de la compra al total
    $totalVentas += $montoCompra;

    // Mostrar el total de las ventas hasta el momento
    echo "Compra registrada. Total acumulado: $totalVentas\n";

    // Preguntar si el cliente quiere seguir comprando
    $respuesta = readline("¿Desea seguir comprando? (sí/no): ");

    // Si el cliente responde "no", salir del ciclo
    if (strtolower($respuesta) !== "sí") {
        $seguirComprando = false;
    }

} while ($seguirComprando);  // El ciclo se repite mientras el cliente quiera seguir comprando

// Verificar si el cliente es elegible para un descuento
if ($totalVentas > $maxDescuento) {
    $descuento = $totalVentas * 0.1; // 10% de descuento
    $totalVentas -= $descuento;
    echo "¡Felicidades! Ha recibido un descuento del 10%. Total con descuento: $totalVentas\n";
} else {
    echo "Total final de la compra sin descuento: $totalVentas\n";
}

?>
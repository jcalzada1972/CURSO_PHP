<?php
$edad = 18;

if ($edad < 13) {
    echo "Eres un niño.";
} elseif ($edad >= 13 && $edad < 18) {
    echo "Eres un adolescente.";
} else {
    echo "Eres un adulto.";
}
?>
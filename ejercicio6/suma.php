<?php
$repeticiones = $_POST['numero'];
$sumatorio = 0;
//Este bucle se repetira hasta igualar repeticiones, que es un numero dado por el usuario
for ($i = 1 ; $i <= $repeticiones ; $i++) {
    $sumatorio = $sumatorio + $i;
}

echo "El resultado es:". $sumatorio;
?>

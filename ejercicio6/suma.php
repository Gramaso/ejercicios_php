<?php
$repeticiones = $_POST['numero'];
$sumatorio = 0;
for ($i = 1 ; $i <= $repeticiones ; $i++) {
    $sumatorio = $sumatorio + $i;
}

echo "El resultado es:". $sumatorio;
?>
<?php
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$numero3 = $_POST['numero3'];
//Mediante if y else if se harab todas las comparaciones necesatias
if ($numero1 == $numero2 && $numero1 == $numero3) {
    echo "Los tres números son iguales.";
} else if ($numero1 >= $numero2 && $numero1 >= $numero3) {
    echo "El mayor es el : " . $numero1;
} else if ($numero2 >= $numero1 && $numero2 >= $numero3) {
    echo "El mayor numero es el: " . $numero2;
} else
    echo "El mayor numero es el: " . $numero3;
?>

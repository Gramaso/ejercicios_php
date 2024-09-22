<?php
$divisor = $_POST['kilometros'];
$dividendo = $_POST['velocidad'];
//Dividimos los kilometros por la velovidad
$tiempo_medio = $divisor / $dividendo;
echo "El tiempo estimado es: $tiempo_medio horas";

?>

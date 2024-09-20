<?php
$divisor = $_POST['kilometros'];
$dividendo = $_POST['velocidad'];
$tiempo_medio = $divisor / $dividendo;
echo "El tiempo estimado es: $tiempo_medio horas";

?>
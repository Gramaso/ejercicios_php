<?php
/*"Infante" si la edad es menor de 12 años.
"Adolescente" si tiene entre 12 y 17 años.
"Adulto" si está entre 18 y 60 años.
"Anciano" si es mayor de 60.*/
$edad = $_POST ['edad'];
if ($edad <= 12) {
    echo "Es menor de edad.";
} else if ($edad > 12 && $edad < 17 ) {
    echo "Adolescente";
} else if ($edad > 17 && $edad < 60) {
    echo "Adulto";
} else
    echo "Anciano";
?>
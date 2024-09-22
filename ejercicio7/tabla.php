<?php
$tabla = $_POST['numero'];
//Marcamos que el bucle termine en 10 este mismo incluido
for ($i = 1 ; $i <= 10 ; $i++) {
    $reultado = $i*$tabla;
    //enseñamos el codigo en una tabla
    echo "<table border=1> <tr> <td> $i X $tabla = $reultado </tr> </td> </table>";
     
}
?>

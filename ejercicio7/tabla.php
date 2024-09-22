<?php
$tabla = $_POST['numero'];
for ($i = 1 ; $i <= 10 ; $i++) {
    $reultado = $i*$tabla;
    echo "<table border=1> <tr> <td> $i X $tabla = $reultado </tr> </td> </table>";
     
}
?>
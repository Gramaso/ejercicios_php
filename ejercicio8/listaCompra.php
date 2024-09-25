<?php
//Este array separara y añadira los elementos por separado que se encuentren despues de una ,
$ar = explode(",", ($_POST['compra']));
for ($i = 0 ; $i < count($ar) ; $i++) {
    //El pre es necesario para que tenga una apariencia de lista
    echo "<pre>";
    echo "-". $ar[$i];
    echo "</pre>";
}
?>
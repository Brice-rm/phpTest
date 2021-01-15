<?php

$fruits = array("Kiwi", "Abricot", "Pastèque", "Citron", "Litchi");
sort($fruits);
unset($fruits[4]);

foreach ($fruits as $key => $val) {
    echo "Le fruits numero " . $key . " est : " . $val . "<br/>";
}

?>
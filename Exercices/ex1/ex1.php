<?php

$fruits = array("Kiwi", "Abricot", "Pastèque", "Citron");
sort($fruits);

foreach ($fruits as $key => $val) {
    echo "Le fruits numero " . $key . " est : " . $val . "<br/>";
}

?>
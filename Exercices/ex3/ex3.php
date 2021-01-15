<?php
$json = '{"Title": "Créer des jeux de A à Z avec Unity", "Author":
"Anthony Cardinale", "Detail": { "Publisher": "D-Booker" } }';

$json = json_decode($json, true);

function test_print($value, $key)
{
    echo  $key . ":" . " " . $value . "<br/>";
}

array_walk_recursive($json, 'test_print');

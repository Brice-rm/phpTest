<?php

function cube($n)
{
    return (strlen($n));
}

$a = ["Le","Chat","Botté","de","Charles","Perrault"];
$b = array_map('cube', $a);

print_r  ("voici le max: ". max($b) . "<br/>");
print_r ("voici le min: " . min($b));



?>
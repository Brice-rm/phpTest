<?php


for ($multiple = 1; $multiple <= 10; $multiple++)
{
echo 'Ceci est la table n°' . $multiple  . '<br />'; 

for ($multiple2 = 1; $multiple2 <= 10; $multiple2++)
{
    echo $multiple .' x '. $multiple2 . ' = '. $multiple * $multiple2 .'<br>';
}


}


?>
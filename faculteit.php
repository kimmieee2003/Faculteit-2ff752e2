<?php
$getal = readline("Van welk getal wil je de faculteit weten?");
$br = $getal;
for($i=1; $i < $getal; $i++){
    $br = $br * $i;
}

echo $br;
?>
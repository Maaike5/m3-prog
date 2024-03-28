<?php
$zangers = ["Jaap Reesema", "Bruno Mars", "Sam Smith", "Acda en de Munnik", "Benson Boone"];
print_r($zangers);
echo "<br>";
echo "$zangers[2]<br>";
echo "$zangers[4]<br>";


print_r($zangers);
echo "<br>";
var_dump($zangers);
echo "<br>";
echo count($zangers)."<br>";
array_push($zangers, "Danny Jones");
print_r($zangers);
echo "<br>";
sort($zangers);
echo implode(' ', $zangers);
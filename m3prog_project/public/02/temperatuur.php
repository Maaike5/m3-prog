<?php
// Fahrenheit naar Celsius
 $fahrenheit = 74;
 $celsius = ($fahrenheit - 32) / 1.8;
 echo "{$fahrenheit} graden Fahrenheit = {$celsius} graden Celsius. <br/>";

// celsius naar Fahrenheit
$celsius = 30;
$fahrenheit = ($celsius * 1.8) + 32;
echo "{$celsius} graden Celsius = {$fahrenheit} graden Fahrenheit. <br/>";

// Fahrenheit naar Kelvin
$fahrenheit = 40;
$kelvin = ($fahrenheit - 32) * 5/9 + 273.15;
echo "{$fahrenheit} graden Fahrenheit = {$kelvin} graden Kelvin. <br/>";
 
 // celsius naar Kelvin
$celsius = 0;
$kelvin = ($celsius + 273.15 );
echo "{$celsius} graden Celsius = {$kelvin} graden Kelvin. <br/>";
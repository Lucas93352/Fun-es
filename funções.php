echo "conversor de fahrenheit para celsius:";

function conversor($celsius){
   $fahrenheit  = ($celsius * 1.8 ) + 32; 
   return $fahrenheit;
}

echo "<br>";
$celsius = 30;
$fahrenheit =conversor($celsius);
echo "$celsius graus Celsius é igual a $fahrenheit graus Fahrenheit.\n";

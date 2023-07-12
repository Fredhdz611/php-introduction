<?php include 'includes/header.php';

$num1 = 10;
$num2 = 30;
$num3 = 30;
$num4 = '30';

var_dump($num1 > $num2);
echo '<br>';

var_dump($num1 < $num2);
echo '<br>';

var_dump($num1 >= $num2);
echo '<br>';

var_dump($num1 <= $num2);
echo '<br>';

var_dump($num3 == $num2);
echo '<br>';

var_dump($num3 === $num4);
echo '<br>';

// si el num de la derecha es mayor imprime -1
// si el num de la derecha si son iguales imprime 0
// si el num de la izquierda es mayor imprime 1

var_dump($num1 <=> $num2);
echo '<br>';

var_dump($num2 <=> $num3);
echo '<br>';

var_dump($num3 <=> $num1);
echo '<br>';

include 'includes/footer.php';
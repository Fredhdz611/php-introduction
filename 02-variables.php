<?php include 'includes/header.php';

$nombre = 'Alfredo '; //forma de declarar una variable.
$_nombre = 'Alfredo '; //forma de declarar una variable.
$nombre_ = 'Alfredo '; //forma de declarar una variable.


echo $nombre;
echo $_nombre;
echo $nombre_;

var_dump($nombre);

define('constante', 'Valor de la constante '); //forma de declarar una constante, es una constante, pero no crea una variable, crea un identificador que es conocido como constante. 
echo constante;

//forma tradicional de declarar una const 
const constante2 = 'constante dos';
echo constante2;


include 'includes/footer.php';
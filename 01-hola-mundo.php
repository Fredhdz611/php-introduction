<?php
//Se debe de abrir y cerara cuando es bloque de codigo de php
?>

<h1>Hola mundo!</h1> <!-- Se puede agregar html en el mismo archivo -->

<h1><?php echo 'Hola mundo 2'; ?></h1> <!-- Otra forma de integrar php en html -->

<?php 
//diferentes formas de imprimir info con y sin html
echo 'Hola mundo 3'; 
echo '<h1>Hola Mundo 4</h1>';
print 'Hola mundo 5';
print (' Hola mundo 6');
print_r(' Hola mundo 7');

var_dump('Hola mundo 7'); //Da info sobre un texto o variable que estemos imprimiendo. 
var_dump(20);

?>


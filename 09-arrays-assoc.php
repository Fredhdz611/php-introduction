<?php include 'includes/header.php';

//vendria a ser un obj en JS
$cliente = [
    'nombre' => 'Juan', 
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium', 
        'disponible' => 100
    ]
];

echo "<pre>";
var_dump($cliente['informacion']);
echo "</pre>";

echo "<br>";
echo $cliente['nombre'];

echo "<br>";
echo $cliente['informacion']['disponible'];
$cliente['codigo'] = 1209192012;

echo "<br>";
echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';
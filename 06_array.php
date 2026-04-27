<?php

//$carros = ['Uno', 'Gol', 'Fusion', 'Civic', 'Corolla', 'Camaro', 'Mustang', 'Fusca', 'Brasília', 'Chevette', 'Kadett', 'Monza', 'Opala', 'S10', 'Hilux'];
//echo $carros[2]; 
//echo '<br>';
//echo $carros[5];
//echo '<br>';
//echo $carros[7];

//$carrosUm = ['Uno', 'Fiat', 'Branco'];
//echo $carrosUm[2];
$carro_um = [
    'modelo' => 'Uno',
    'marca' => 'Fiat',
    'cor' => 'Branco'
];
echo $carro_um['modelo'];
echo '<br>';
echo $carro_um['marca'];
echo '<br>';
echo $carro_um['cor'];
echo '<hr>';


$carro_dois = [
    'modelo' => 'Polo',
    'marca' => 'Volkswagen',
    'cor' => 'Prata'
];
echo $carro_dois['modelo'];
echo '<br>';
echo $carro_dois['marca'];
echo '<br>';
echo $carro_dois['cor'];
echo '<hr>';


$carro_tres = [
    'modelo' => 'Civic',
    'marca' => 'Honda',
    'cor' => 'Preto'
];
echo "Modelo: " . $carro_tres['modelo'];
echo '<br>';
echo "Marca: " . $carro_tres['marca'];
echo '<br>';    
echo "Cor: " . $carro_tres['cor'];


?>
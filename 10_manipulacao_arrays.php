<?php

$idades = [12, 14, 18, 20, 44, 50, 98, 78, 56];

//echo $idades[count($idades) - 1];
//echo end($idades);

$idadesFiltradas = array_filter($idades, function ($idade) {
    return $idade > 18;
});

var_dump($idadesFiltradas);

//array_filter() -> filtra os elementos de um array usando uma função de callback

?>


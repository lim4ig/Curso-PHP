<?php

$carrinho = [
    0 => 'Macarrão',
    1 => 'Feijão',
    2 => 'Arroz',
    3 => 'Batata',
];

echo '<pre>';
arsort($carrinho);
var_dump($carrinho);

echo '<hr>';

asort($carrinho);
var_dump($carrinho);

echo '<hr>';

sort($carrinho);
var_dump($carrinho);

echo '<hr>'

//arsort() -> ordena um array em ordem decrescente, mantendo a associação entre os índices e os valores
//asort() -> ordena um array em ordem crescente, mantendo a associação entre os índices e os valores
//sort() -> ordena um array em ordem crescente, reindexando os índices dos elementos

?>


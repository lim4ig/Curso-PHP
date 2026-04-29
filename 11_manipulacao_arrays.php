<?php
echo '<pre>';
$nomes = ['Rubens', 'Senac', 'Americana'];
var_dump($nomes);
/*
echo '<hr>';
echo '<pre>';
$nomes[0] = strtoupper($nomes[0]);
$nomes[1] = strtoupper($nomes[1]);
$nomes[2] = strtoupper($nomes[2]);
var_dump($nomes);
*/
echo '<hr>';
echo '<pre>';
$nomes = array_map('transformarParaMaiuscula', $nomes);
function transformarParaMaiuscula($nome)
{
    return strtoupper($nome);
}
var_dump($nomes);

//strtoupper() -> converte uma string para letras maiúsculas
//array_map() -> aplica uma função de callback a cada elemento de um array, retornando um novo array com os resultados
?>
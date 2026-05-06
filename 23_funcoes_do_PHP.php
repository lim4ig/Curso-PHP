<?php
$estado = 'São Paulo/SP';
$arrayEstado = explode('/',$estado);
echo "<pre>";
var_dump($arrayEstado);
//O explode divide o array em 2 partes, usando o caractere que eu escolher, no caso a barra.

$info = 'São Paulo/SP/Brasil/Terra';
$arrayInfo = explode('/',$info);
var_dump($arrayInfo);
//O explode divide o array em 4 partes, usando o caractere que eu escolher, no caso a barra.
?>
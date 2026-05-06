<?php
$empresa = 'Senac Jaú';
echo "$empresa <br>";
$novaEmpresa = str_replace('Jaú', 'Americana', $empresa);
echo "$novaEmpresa <br>";
//Substitui a palavra Jaú por Americana

echo substr($novaEmpresa, 0, 4) . '<br>';
//Mostra as 4 primeiras letras 

echo strlen($novaEmpresa);
//Quantidade de caracteres presente na variavel

?>
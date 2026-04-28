<?php

$infoEmpresa = [
    'nome' => 'Senac Americana',
    'funcionario' => 'Paulo Santos',
    'anoAtual' => 2026,
];

$infoCursos = [
    'cursos' => ['PHP', 'JS', 'Vue JS', 'Laravel'],
    'totalCursos' => 26,
];

echo '<pre>';
//var_dump(array_keys($infoEmpresa));
//O array_keys retorna todas as chaves, tanto numericas quanto string de um array. Também pode ser usado para filtrar e devolver apenas as chaves de um valor específico.
//var_dump(array_values($infoEmpresa));
//Mostra os valores presentes
//var_dump(count($infoEmpresa));
//Mostra a contagem dos elementos presentes
$infoEmpresa = array_merge($infoEmpresa, $infoCursos);
print_r($infoEmpresa);
//Utilizado para juntar os arrays

?>
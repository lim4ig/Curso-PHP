<?php
$var1 = 'Igor';
$var2 = 'de Lima';

//echo $var1 .' '. $var2 . ' ' . 20;

$var3 = $var1 . ' ' . $var2 . ' ' . 20;
//echo $var3;

$nome = 'Rubens Pereira';
$empresa = 'Senac Americana';

//echo'O ' . $nome . ' ' . 'é o fundadro do ' . $empresa . '.';
//echo '<br>';
//echo '<hr>';
//echo "O $nome é o fundador do $empresa. Onde trabalha o professores Guto e Paulo.";

echo "O {$nome} é o fundador do {$empresa}.";

?>
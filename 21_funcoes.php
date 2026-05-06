<?php
function escrever($texto) {
    echo "{$texto} <br>";
}

//escrever('Henderson e um betinha');

function soma($n1, $n2){
    return ($n1 * $n2) + 100;
}
//echo soma(10, 20); 

function conta($n1, $n2, $taxa = 2){
    return ($n1 * $n2) * $taxa;
}
//echo conta(1,2); 

function notas($nota1, $nota2, $nota3, $nota4, $media = 4){ 
    return ($nota1 + $nota2 + $nota3 + $nota4) / $media;
}
echo notas(10,5,8,3);

?>

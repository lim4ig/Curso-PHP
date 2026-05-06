<?php
$nome = 'Carlos Ferreira';
if (isset($nome)){
    echo $nome;
}else{
    echo 'Não existe!';
}
// Função para verificar se a variável existe ou não
echo '<hr>';

unset($nome);
if (isset($nome)){
    echo $nome;
}else{
    echo 'Não existe!';
}
//Apaga a variavel existente
?>
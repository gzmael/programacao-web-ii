<?php

$vetor = array( 20, 'texto', true, 20.5);

print_r($vetor);


// adicionar um elemento no final do array
array_push($vetor, 'Novo Elemento');

echo '<br/>';
print_r($vetor);
// adicionar um elemento no começo do array
array_unshift($vetor, 'Sou o primeiro');

echo '<br/>';
print_r($vetor);

// remover o primeiro elemento
array_shift($vetor);

echo '<br/>';
print_r($vetor);

// remover o último elemento
array_pop($vetor);

echo '<br/>';
print_r($vetor);

// retirar ou substituir um elemento
array_splice($vetor, 1, 1, 'Opa');

echo '<br/>';
print_r($vetor);

// tamanho de um array
echo '<br/>';
echo count($vetor);

// reverter as posições do array
$vetorInverso = array_reverse($vetor);

echo '<br/>';
print_r($vetorInverso);

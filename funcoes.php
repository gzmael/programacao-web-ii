<?php

// determinado conjuto de instruções

$arrow = fn($x) => $x * $x * $x;

echo $arrow(4);


$texto = "O melhor Barça time do mundo é o Barça";

$novo = str_replace('Barça', '', $texto);

echo $novo;

echo strtolower("todo ASDASD");
<?php

$salario = 1000;
$cargo = 'Entregador';

switch ($cargo) {
  case 'Gerente':
    $salario = $salario + ($salario * 0.5);
    break;

  case 'Funcionario':
    $salario = $salario + ($salario * 0.2);
    break;
  
  default:
    echo "Esse cargo não é válido";
    break;
}

echo "Seu salário é igual: $salario";
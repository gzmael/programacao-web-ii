<?php

// Sistema de Academia

$pessoa = array(
  "nome" => 'Jezmael',
  "idade" => 33,
  "estado_civil" => "Casado",
  "vacinado" => false,
  "peso" => 74.5
);

$vetor = array(1,2,3, 7, 10, 30);

// print_r($pessoa);

for ($cont = 0; $cont < count($vetor); $cont++) { 
  echo $vetor[$cont] . "\n";
}

for ($i=0; $i > -1; $i++) { 
  echo $i . '\n';
}

$contador = 0;
do {
  # code...
  $contador++;
} while ($a <= 10);

while($contador < 1000) {
  //....
}

foreach ($pessoa as $chave => $valor) {
  echo $chave . ':' . $valor . "\n";
}
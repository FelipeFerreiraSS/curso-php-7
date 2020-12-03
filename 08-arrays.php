<?php

// arrays
$carros = array('BMW', 'Mercedes', 'Ferrari');
$carros[] = "Porche"; //adicionar no array
$carros[10] = "Lambo";  //adicionar a valor numerico

print_r($carros);  // esclusivo para arrays

echo $carros[1];

// outra forma

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";

print_r($motos);
echo $motos[5];

//outra forma

$clientes = ["Rodrigo", "joão", "Maria"];
print_r($clientes);

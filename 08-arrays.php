<?php

// arrays Mumericos
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


//exibir quantidade de elementos em um array
// count

echo count($carros);
echo count($motos);
echo count($clientes);

//OU atribuir o valor a uma variavel
$totalClientes = count($clientes);
echo $totalClientes;

//lupe para percorrer arrays
//foreach 
foreach ($carros as $valor) {
	echo $valor;
}

//Arrays associativos
$pessoas = array('nome' => "Felipe", "idade" => 23, "altura" => 1.70);
$pessoas["cidade"] = "Itabuna";
echo $pessoas["nome"];
var_dump($pessoas);

foreach ($pessoas as $indice => $valor) {
	echo $indice.":".$valor."<br>";
}

//arrays multidimencionais
$times = array(
	"cariocas" => array("vasco", "flamengo", "botafogo"),
	"paulista" => array("santos", "sao paulo", "paumeiras"),
	"baianos" => array("bahia", "vitoria", "itabuna") 
	);

echo $times["cariocas"][1];
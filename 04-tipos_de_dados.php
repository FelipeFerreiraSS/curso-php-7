<?php

//***************DADOS ESCALAVEIS

//String
$nome = "Oi";
var_dump($nome);
if(is_string($nome)):
	echo "E uma String";
else:
	echo "Não é uma String";
endif;
echo "<hr>";

// int
$idade = 10;
var_dump($idade);
if (is_int($idade)) {
	echo "é um inteiro";
} else {
	echo "não é um inteiro";
}
echo "<hr>";

//float
$altura = 1.77;
var_dump($altura);
if (is_float($altura)):
	echo "é um float ";
else:
	echo "não é um float";
endif;

echo "<hr>";

//boolean
$admin = true;
var_dump($admin);
if (is_bool($admin)) {
	echo "é um boolean";
} else {
	echo "não é um boolean";
}

echo "<hr>";

//**************COMPOSTOS

//array
$carros = array('Gol', 'Uno', 'Fiat', 12, 20.8, true);
var_dump($carros);

echo "<hr>";

//object
class Cliente {
	public $nome;
	public function atribuirNome($nome) {
		$this->$nome = $nome;
	}
}

$cliente = new Cliente();
$cliente->atribuirNome("Felipe");
var_dump($cliente);

if (is_object($cliente)) {
	echo "é um objeto";
} else {
	echo "não é um objeto";
}

echo "<hr>";

//******************ESPECIAIS
//null
$cidade = null;
var_dump($cidade);

// resource


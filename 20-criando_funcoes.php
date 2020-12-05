<?php

// Criando funções

function exibirNome($nome) {
	echo "Meu nome é $nome";
}

exibirNome("Felipe");

echo "<hr>";
// função para calcular media

function calcularMedia($nome, $n1, $n2, $n3, $n4){
	$media = ($n1 + $n2 + $n3 + $n4) / 4;
	if ($media >= 7) {
		echo "$nome foi aprovado com $media de media";
	} else{
		echo "$nome reprovado!";
	}
}

calcularMedia("Felipe", 9, 8, 9, 10);
<?php

// Manipulação de Arquivos


// Incerindo comteudo em arquivo de texto 
$arquivo = 'arquivo.txt';
$conteudo = "Conteudo de teste\r\n";

$arquivoAberto = fopen($arquivo, 'a');
fwrite($arquivoAberto, $conteudo);
fclose($arquivoAberto);
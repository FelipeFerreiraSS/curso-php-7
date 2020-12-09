<?php

// Datas

echo date('d/m/y');
echo date('d'); // dia
echo date('D'); // dia texto
echo date('m'); // mes
echo date('M'); // mes texto
echo date('y'); // ano
echo date('Y'); // ano texto
echo date('l'); // dia da semana

echo date('d/m/y h'); // hora 12horas
echo date('d/m/y H'); // Hora 24horas
echo date('d/m/y H:i:s'); // i= minutos, s= segundos

date_default_timezone_set('America/Sao_Paulo'); 
echo date('d/m/y h:i:s');

// Armazenar data no banco de dados
$date = date('Y-m-d'); // DATE
$datetime = date('Y-m-d H:i:s'); // DATETIME

// STRTOTIME mudar de string para formato de data

$data = '2020-12-08 21:38:00';
$data = strtotime($data);

echo date('d/m/y', $data);
<?php
//Sintaxe básica dp PHP
//Isso é um comentário de uma linha


/* 
Esse é um comentário de múltiplas
linhas

*/

$var1 = 10;
$Var1 = 100;
$_var1 = 200;
/* As variaveis devem começar com "$" e terminar com ";" e são case sensitive
Além disso podem começar com letra maiuscula ou underline após o $
*/

$var3 = "texto";
$var3  = 'Texto'

/* Variavéis de texto podem ser englobadas por aspas duplas ou simples.
Caso haja html, ele deve ser escrito fora do php ou o php deve ser escrito dentro do html, sempre respeitando a abertura de tag do php, caso não haja html, não é necessário fechar a tag php.
*/

//  As 3 principais variaveis de requisição HTTP do PHP são:

$_GET

// Recebe os dados transmitidos utilizando o GET

$_POST

// Faz a mesma coisa através de POST

//e

$_REQUEST

//É considerada uma "coringa"  pois recebe os dados de ambas requisições

// Uma outra caracteristica sobre as 3 variaveis acima, é que se tratam de arrays. Logo, quando há um input com o nome de um índice do conjunto, ele será requisitado.






?>
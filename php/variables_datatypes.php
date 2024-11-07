<?php
$name = "Gustavo";
$idade = 14;
$estuda = true; //quando é true ele retorna 1 e quando é false ele retorna nada
$dinheiro = 1000.85;

//echo $name . ' is ' . $idade . ' years old'; no php para concatenar variáveis com texto invés do +, se usa o "."
//echo "$name is $idade years old"; mas uma forma mais fácil é usar " invés de ', que ai ele já concatena sozinho
// outra coisa é que é legal usar tipo ${idade}, usar as chaves faz a variável se sobresair
$x = '1'+'1';//no php ele já se concatena mesmo se eu colocar '
echo  $x;
echo 5*5;
define("HOST", "localhost"); //para criar uma variável que nunca muda, chamada constante, você usa o define()
//onde o primeiro paramêtro é o nome da variável e o segundo é o valor dela (o nome normalmente é todo maisculo)
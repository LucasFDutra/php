<?php
$nome = "Lucas Felipe Dutra";
echo 'meu nome é $nome'; //não vai exibir meu nome, pois aspas simples são literais
echo '<br>';
echo 'meu nome é '.$nome; //vai exibir meu nome, pois '.' é o operador de concatenação
echo '<br>';
echo "meu nome é $nome"; //vai exibir meu nome

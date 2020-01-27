<?php
$string = "aabCC";

//passando para maiuscula
echo "passando para maiuscula<br>";
echo strtoupper($string);
echo '<br>';
echo '<hr>';

//passando para minuscula
echo "passando para minuscula<br>";
echo strtolower($string);
echo '<br>';
echo '<hr>';

//retornar parte de uma string
echo "retornar parte de uma string<br>";
echo substr($string, 2); //substr(string, inicio, quantidade a partir do inicio)
echo '<br>';
echo '<hr>';

//pegar tamanho de uma string
echo "pegar tamanho de uma string<br>";
echo strlen($string);
echo '<br>';
echo '<hr>';

//substituir uma palavra em um texto
echo "substituir uma palavra em um texto<br>";
echo str_replace("aa", "CC", $string); //str_replace(substituido, substituto, string em questão);
echo '<br>';
echo '<hr>';

//ver a posição de uma plavra em um texto
echo "ver a posição de uma plavra em um texto<br>";
echo strpos($string, "b");
echo '<br>';
echo '<hr>';

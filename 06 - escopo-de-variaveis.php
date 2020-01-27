<?php
$nome = "Lucas Dutra"; //variavel definida no escopo global

function exibeNome() {
  global $nome; //usa a variável nome global (ele divide o global do local)
  echo $nome;
}

exibeNome();
echo '<hr>';

function exibeCidade() {
  global $cidade; //para acessar ela fora do escopo local ela deve ser definida como global
  $cidade = "São Paulo";
}

exibeCidade();
echo "$cidade";


/*resumindo... as variáveis tem seus escopos muito bem definidos, se ela é global ela não pode ser usada dentro de escopos locais
mesmo que estes estejam contidos pelo escopo globa. Logo, se quisermos que uma variável global seja lida em um escopo local, devemos utilizar
`global $variavel`. e se quisermos que uma variável local seja utilizada pelo escopo global, devemos utilizar `global $variavel` também.*/

//outro jeito de fazer isso é utilizando o array GLOBALS

echo "<hr>";

$a = 1;
$b = 2;

function soma() {
  echo $GLOBALS['a'] + $GLOBALS['b'];
}

soma();

<?php

//---------------------sintaxes---------------------//
//sintax 1
$numero1 = 10;
if ($numero1 === 10) {
  echo "numero igual a 10 sintax 1";
}

echo '<br>';

//sintax 2
if ($numero1 === 10) :
  echo "numero igual a 10 sintax 2";
endif;
echo '<hr>';
//--------------vendo a questão de tipos--------------//
// === identico em valor e em tipo
// == identico apenas em valor e não necessariamente em tipo
$numero2 = '10';
if ($numero2 === 10) {
  echo "numero igual a 10 em valor e tipo";
}

echo '<br>';

if ($numero2 == 10) {
  echo "numero igual a 10 em valor";
}
echo '<hr>';

//-------------------if elseif else-------------------//
$numero3 = 10;
//sintax 1
if ($numero3 > 10) {
  echo "numero maior que 10 sintax 1";
} elseif ($numero3 < 10) {
  echo "numero menor que 10 sintax 1";
} else {
  echo "numero igual a 10 sintax 1";
}
echo '<br>';
//sintax 2
if ($numero3 > 10):
  echo "numero maior que 10 sintax 2";
elseif ($numero3 < 10):
  echo "numero menor que 10 sintax 2";
else:
  echo "numero igual a 10 sintax 2";
endif;
echo '<hr>';


//-------------------operador ternario-------------------//
$numero4 = 10;
echo ($numero4 === 10) ? "verdadeiro" : "falso";
echo '<hr>';

//----------------------switch/case----------------------//
$cor = "azul";

switch ($cor) {
  case 'rosa':
    echo "cor igual a rosa";
    break; //obrigatorio ter o break
  case 'azul':
    echo "cor igual a azul";
    break;
  default:
    echo "cor não encontrada";
    break;
}
echo '<hr>';

<?php
$carros = array("bmw", "ferrari");

print_r($carros); //print_r mostra todo o array
echo '<br>';
echo $carros[0];
echo '<br>';
echo $carros[1];
echo '<br>';
echo '<hr>';


//adicionar no final
$carros[] = "honda";
print_r($carros);
echo '<br>';
echo '<hr>';

//criando indices proprios
$nomes = array(nome1=>"lucas", nome2=>"carlos");
print_r($nomes);
echo '<br>';
echo $nomes[nome1];
echo '<br>';
echo $nomes[nome2];
echo '<br>';
echo '<hr>';

//exibir numero de elementos de um array
echo count($carros);
echo '<hr>';

//loop para percorrer arrays
foreach ($carros as $valor) {
  echo "$valor>";
}
echo '<br>';
echo '<hr>';

//array multidimensionais
$numeros = array(array(2,1,3), array(4,5,6), array(7,8,9));

foreach ($numeros as $valor) {
  print_r($valor);
  echo '<br>';
  foreach ($valor as $i) {
    echo "$i  ";
  }
  echo '<br>';
}
echo '<hr>';

//---------------funções de array---------------//
//existe no array
echo in_array(1, $numeros[0]); //verifica se existe no array, retorna 1 ou 0, true ou false
echo '<br>';
echo '<hr>';

//concatenando array
$array1 = array("pos"=>1,2,3);
$array2 = array(4,5,6);
$arrays = array_merge($array1, $array2); //concatena arrays e mantem seus indices
print_r($arrays);
echo '<br>';
echo '<hr>';

//retornando o ultimo elemento do array
$a = array_pop($array1); //remove o ultimo termo do array e retorna ele na variavel a
print_r($array1);
echo '<br>';
echo $a;
echo '<br>';
echo '<hr>';

//retornando o primeiro elemento do array
$b = array_shift($array2);
print_r($array2);
echo '<br>';
echo $b;
echo '<br>';
echo '<hr>';

//adicionando elementos no inicio do array
$value = 15;
array_unshift($array1, $value);
print_r($array1);
echo '<br>';
array_unshift($array1, $array2);
print_r($array1);
echo '<br>';
echo '<hr>';

//adicionando elementos no final do array
$value = 99;
array_push($array1, $value);
print_r($array1);
echo '<br>';
array_push($array1, $array2);
print_r($array1);
echo '<br>';
echo '<hr>';

//calcular a soma dos elementos de um array
$numeros = array(1,2,3);
echo array_sum($numeros);
echo '<br>';
echo '<hr>';

//separar uma string em um array
$string = "Lucas Felipe Dutra";
$stringArray = explode(" ", $string);
print_r($stringArray);
echo '<br>';
echo '<hr>';

//juntando um array em uma string
$stringArray = array("Lucas", "Felipe", "Dutra");
print_r($stringArray);
echo '<br>';
$string = implode(" ", $stringArray);
echo $string;
echo '<br>';
echo '<hr>';

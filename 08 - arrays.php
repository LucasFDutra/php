<?php
$carros = array("bmw", "ferrari");

print_r($carros); //print_r mostra todo o array
echo '<br>';
echo $carros[0];
echo '<br>';
echo $carros[1];
echo '<br>';

//adicionar no final
$carros[] = "honda";
print_r($carros);

//criando indices proprios
echo '<br>';
$nomes = array(nome1=>"lucas", nome2=>"carlos");
print_r($nomes);
echo '<br>';
echo $nomes[nome1];
echo '<br>';
echo $nomes[nome2];


//exibir numero de elementos de um array
echo '<br>';
echo '<br>';

echo count($carros);

//loop para percorrer arrays
echo '<br>';
echo '<br>';
echo '<hr>';

foreach ($carros as $valor) {
  echo "$valor <br>";
}

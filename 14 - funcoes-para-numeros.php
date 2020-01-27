<?php
$numero = 15233.1467;
echo "numero: $numero <br><hr>";

//number_format -> formatar numero com milhas.. coloca aqueles . a cada milhar, pode mostrar com virgula, colocar somente com 2 casas decimais
echo "number_format -> formatar numero<br>";
echo number_format($numero, 2, ",", "."); //number_format(numero, casas decimais, separador de casas decimais, separador de milhar) -> isso arredonda para cima
echo '<br><hr>';

//arredondar para o mais proximo -> round
echo "arredondar para o mais proximo -> round<br>";
echo round($numero);
echo '<br><hr>';

//arredondar para cima -> ceil
echo "arredondar para cima -> ceil<br>";
echo ceil($numero);
echo '<br><hr>';

//arredondar para baixo -> floor
echo "arredondar para baixo -> floor<br>";
echo floor($numero);
echo '<br><hr>';

//inteiro aleatorio -> rand
echo "inteiro aleatorio -> rand<br>";
echo rand();
echo '<br>';
echo rand(5, 15); //gera numero aleatorio entre 5 e 15
echo '<br><hr>';

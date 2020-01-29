<?php
session_start();

//as informações podem passar de uma pagina para outra, veja que aqui temos as informações de cor e carro sem nem importar nada nem passar nada por parametro
// mas como esse arquivo não cria nada, ele não pode ser aberto primeiro, quem tem que abrir primeiro é o index.php

echo $_SESSION['cor']."<br>".$_SESSION['carro'];

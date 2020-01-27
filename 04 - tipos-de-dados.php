<?php
//--------------------simples--------------------//
//string
$nome = "lucas";
echo "$nome <br><hr>";

//int
$idade = 24;
echo "$idade <br><hr>";

//float
$altura = 1.76;
echo "$altura <br><hr>";

//boolean
$engenheiro = true;
echo "$engenheiro <br><hr>";

//-------------------compostos-------------------//
//array
$cursos = array("eng", "med", "economia");
echo "curso da posição 0: $cursos[0]<br>";
echo "curso da posição 1: $cursos[1]<br>";
echo "curso da posição 2: $cursos[2]<br><hr>";

//object
class Client
{
  public $nome;

  public function atribuirNome($nome) {
    $this->$nome = $nome;
  }
}

$cliente = new Client();
$cliente->atribuirNome("Lucas");
var_dump($cliente);

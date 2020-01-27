<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
    //-----------------------------------filtros de validação-----------------------------------//
    if(isset($_POST['enviar-formulario'])){
      $erros = array();

      if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
        $erros[] = "Idade precisa ser um inteiro";
      }

      if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $erros[] = "Email invalido";
      }

      if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) {
        $erros[] = "peso precisa ser um float";
      }

      if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
        $erros[] = "URL invalido";
      }

      if(!empty($erros)) {
        foreach ($erros as $erro) {
          echo "<li> $erro </li>";
        }
      } else {
        echo "Seus dados estão corretos";
      }
    }

    //-----------------------------filtros de sanitização (limpeza)-----------------------------//
    // FILTER_SANITIZE_SPECIAL_CHARS -> se no input colocar um codigo html ele pode acabar criando um componente na tela, isso aqui faz com que codigos html sejam tratados como char dentro de um input
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $nome.'<br>';

    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    echo $idade.'<br>';

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    echo $email.'<br>';

    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    echo $url.'<br>';

  ?>


  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    Nome: <input type="text" name='nome'><br>
    Idade: <input type="text" name="idade"><br>
    Email: <input type="email" name='email'><br>
    Peso: <input type="text" name='peso'><br>
    URL: <input type="text" name='url'><br>
    <button type="submit" name="enviar-formulario">enviar</button>
  </form>
</body>
</html>

<?php
// servem para inserir o conteudo de um arquivo php em outro arquivo php
include 'header.php';
// require 'header.php'; a diferença entre o require e o include, é que se o require não encontrar o arquivo ele retorna um erro,
                        // o include simplesmente retorna um warning

// require_once 'header.php';
// include_once 'header.php';
?>

<?php echo 'ola'; ?>

<?php
  include 'footer.php';
?>

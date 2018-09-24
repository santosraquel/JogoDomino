<!DOCTYPE html>
<html lang="pt-br" >
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

        if(isset($_POST['email'])){
            $email = trim($_POST["email"]);
            $mensagem = '';
        }

        if($usuario != "" && $senha != ""){
          // Faz conexão com o banco de Dados
          $conexaoBanco = mysqli_connect('localhost','root','','domino');
          // $conexaoBanco = mysqli_connect('localhost','root','mysql','domino');

     ?>

  </body>
</html>

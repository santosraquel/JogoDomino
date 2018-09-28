<?php
 session_start();

 ?>

<!DOCTYPE html>
<html lang="pt-br" >
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <?php


      $email = trim($_POST["email"]);
      $senha = trim($_POST["senha"]);
      $novaSenha = trim($_POST["novaSenha"]);
      $confirmarNovaSenha = trim($_POST["confirmarNovaSenha"]);
      $validarCampos = true;

    // Validar campos obrigatórios
      if($email != "" && $senha != ""){
        // Faz conexão com o banco de Dados
        $conexaoBanco = mysqli_connect('localhost','root','','domino');
        // $conexaoBanco = mysqli_connect('localhost','root','mysql','domino');

        // Faz um select com o usuário e a Senha
        //criptografa a Senha
        $senha = md5 ($senha . "domino");
        $senha = md5 ($senha);
         // '$usuario%'"; -- % faz uma pesquisa. Ex: Digitou Raf vai trazer tudo o que tem no banco Raf
       $sql = "SELECT * FROM usuario WHERE (email LIKE '$email' AND senha LIKE '$senha'); ";
       $sqlinsert = "UPDATE usuario SET email= $email AND senha =   $confirmarNovaSenha;";
       $resultado = mysqli_query($conexaoBanco, $sql);
}




       if($novaSenha != $confirmarNovaSenha || $novaSenha == ""){
         echo "Senhas não coincidem!";
         $validarCampos = false;
       }
//
       if($validarCampos){
         $novaSenha = md5($novaSenha . "domino");
          $novasenha = md5($novaSenha);
         // $conexaoBanco = mysqli_connect('localhost','root','mysql','domino');
         $conexaoBanco = mysqli_connect('localhost','root','','domino');
         // include_once("bancoDados/conexao.php");
         $sqlinsert = "UPDATE usuario SET email= $email AND senha = $novasenha;";
         echo $sqlinsert;
         $resultado = mysqli_query($conexaoBanco, $sqlinsert);
       }


       ?>

  </body>
</html>

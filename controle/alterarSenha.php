<?php
  $conexao = domino();
  $resultado = mysqli_query ($conexao, 'SELECT email, senha FROM usuario');
?>
$email = trim($_POST["email"]);
     $senha = trim($_POST["senha"]);
     $novaSenha = trim($_POST["novaSenha"]);
     $confirmarNovaSenha = trim($_POST["confirmarNovaSenha"]);
     $validarCampos = true;

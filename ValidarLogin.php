<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Validando Login</title>
  </head>
  <body>

<?php
session_start();
include_once("cadastrarJogador.php");
// Recebendo dados dos campos do formulário e armazendando em uma váriavel
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

// Validar campos
$validarCampos = true;
if($usuario == $nome ||  $usuario == $email){
  $validarCampos = false;
}

if($usuario != $nome ||  $usuario != $email){
  echo "Login não coincide!";
  $validarCampos = false;
}

if($senha != $senha){
  echo "Senhas não coincidem!";
  $validarCampos = false;
}

// Criando tabela dos Jogadores cadastrados
if($validarCampos){
  include_once("bancoDados/conexao.php");
  $sqlinsert = "INSERT INTO usuario (nome, email, senha) VALUES" . "('$nome','$email','$senha')";
  $resultado = mysqli_query($conexaoBanco, $sqlinsert);
}

if(mysqli_insert_id($conexaoBanco)){
  $_SESSION['msg'] = "<p style='color:green;'>Jogador cadastrado com sucesso!</p>";
  header("Location: index.php"); // ABRE O ARQUIVO INDEX.PHP QUANDO CLICAR NO BOTÃO
}else{
  $_SESSION['msg'] = "<p style='color:red;'>Atenção: Cadastro do jogador não foi realizado com sucesso!</p>";
  header("Location: index.php");
}
 ?>

</body>
</html>

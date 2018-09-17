<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Validando Login</title>
  </head>
  <body>

<?php

// Recebendo dados dos campos do formulário e armazendando em uma váriavel//
// Trim remove espaço em branco do inicio e fim
$usuario = trim($_POST["usuario"]);
$senha = trim($_POST["senha"]);

// Validar campos obrigatórios
if($usuario != "" && $senha != ""){
  // Faz conexão com o banco de Dados
  $conexaoBanco = mysqli_connect('localhost','root','','domino');
  // Faz um select com o usuário e a Senha
  //criptografa a Senha
  $senha = md5 ($senha . "domino");
  $senha = md5 ($senha);
   // '$usuario%'"; -- % faz uma pesquisa. Ex: Digitou Raf vai trazer tudo o que tem no banco Raf
 $sql = "SELECT * FROM usuario WHERE (nome LIKE '$usuario' AND senha LIKE '$senha') OR (email LIKE '$usuario' AND senha LIKE '$senha'); ";
 $resultado = mysqli_query($conexaoBanco, $sql);

// Mostra na tela o SELECT
 echo $sql;

  // Se existir algum registro...
  if (mysqli_num_rows($resultado) > 0) {
    session_start();
    $_SESSION['login'] = "ok";
    header("Location: ../index.php"); // MOSTRA UMA MENSAGEM DE ERRO

  }
  //Se não...
  else{
    exit ("Usuário ou senha não encontrados!");
  }
} else{
  // pode exibir uma mensagem na tela
  exit ("<h3>Prencha todos os campos!<h3>");

  // Redirecionar para outro local
}


//
// $validarCampos = true;
// if($usuario == $nome ||  $usuario == $email){
//   $validarCampos = false;
// }
//
// if($usuario != $nome ||  $usuario != $email){
//   echo "Login não coincide!";
//   $validarCampos = false;
// }
//
// if($senha != $senha){
//   echo "Senhas não coincidem!";
//   $validarCampos = false;
// }
//
// // Criando tabela dos Jogadores cadastrados
// if($validarCampos){
//   include_once("bancoDados/conexao.php");
//   $sqlinsert = "SELECT nome, email, senha FROM usuario" . "('$nome','$email','$senha')";
//   $resultado = mysqli_query($conexaoBanco, $sqlinsert);
// }
//
// if(mysqli_insert_id($conexaoBanco)){
//   $_SESSION['msg'] = "<p style='color:green;'>Jogador cadastrado com sucesso!</p>";
//   header("Location: index.php"); // ABRE O ARQUIVO INDEX.PHP QUANDO CLICAR NO BOTÃO
// }else{
//   $_SESSION['msg'] = "<p style='color:red;'>Atenção: Cadastro do jogador não foi realizado com sucesso!</p>";
//   header("Location: index.php");
// }
//  ?>

</body>
</html>

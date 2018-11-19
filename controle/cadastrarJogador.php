<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Validando Cadastro jogador</title>
  </head>
  <body>





<?php
// Mostrar mensagem
session_start();
//  CÓDIGO PARA FAZER COM QUE O USUÁRIO E O E-MAIL SEJAM ÚNICOS

// Recebendo dados dos campos do formulário e armazendando em uma váriavel
$nome = trim($_POST["nome"]);
$email = trim($_POST["email"]);
$senha = trim($_POST["senha"]);
$confirmarSenha = trim($_POST["confirmarSenha"]);
// $erro = false;

// Validar campos
$validarCampos = true;
if($nome == ""){
  echo "Preencha o nome!";
  $validarCampos = false;
// }else{
//   $consultaUsuario = "SELECT id FROM usuario WHERE nome = $nome";
//   $resultado_usuario = mysqli_query($conexaoBanco, $resultado_usuario);
//   if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
//     $erro = true;
//     $_SESSION['msg']="Atenção: Este usuário já existe!";
//   }
}

if($email == ""){
  echo "Preencha o e-mail!";
  $validarCampos = false;
}

if($senha != $confirmarSenha || $senha == ""){
  echo "Senhas não coincidem!";
  $validarCampos = false;
}



// Criando tabela dos Jogadores cadastrados
if($validarCampos){
  $senha = md5($senha . "domino");
  $senha = md5($senha);
  $conexaoBanco = mysqli_connect('localhost','root','mysql','domino');
  // $conexaoBanco = mysqli_connect('localhost','root','','domino');
  // include_once("bancoDados/conexao.php");
  $sqlinsert = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome','$email','$senha')";
  echo "Cadastro realizado com Sucesso!";
  $resultado = mysqli_query($conexaoBanco, $sqlinsert);
}
if(mysqli_insert_id($conexaoBanco)){
  $_SESSION['msg_ok'] = "<p style='color:green;'>Jogador cadastrado com sucesso!</p>";
  header("Location: ../login.php"); // ABRE O ARQUIVO INDEX.PHP QUANDO CLICAR NO BOTÃO

}else{
  $_SESSION['msg_erro'] = "<p style='color:#000000;'>Atenção: Cadastro do jogador não realizado com sucesso!</p>";
  // header("Location: ValidarLogin.php"); // MOSTRA UMA MENSAGEM DE ERRO
}
 ?>

</body>
</html>

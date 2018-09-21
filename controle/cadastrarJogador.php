<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Validando Cadastro jogador</title>
  </head>
  <body>

    <h1>Os Jogadores Cadastrados são:</h1>

<?php
// Mostrar mensagem
session_start();

// Recebendo dados dos campos do formulário e armazendando em uma váriavel
$nome = trim($_POST["nome"]);
$email = trim($_POST["email"]);
$senha = trim($_POST["senha"]);
$confirmarSenha = trim($_POST["confirmarSenha"]);


// Validar campos
$validarCampos = true;
if($nome == ""){
  echo "Preencha o nome!";
  $validarCampos = false;
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
  $sqlinsert = "INSERT INTO Usuario (nome, email, senha) VALUES ('$nome','$email','$senha')";
  echo $sqlinsert;
  $resultado = mysqli_query($conexaoBanco, $sqlinsert);
//   echo "<table border = '0' cellpadding='3'>";
// echo "<TR><TD> NOME:</TD><TD><B> $nome </B></TD></TR>";
// echo "<TR><TD> E-MAIL:</TD><TD><B> $email </B></TD></TR>";
// echo "<TR><TD> SENHA:</TD><TD><B> $senha </B></TD></TR>";
}
if(mysqli_insert_id($conexaoBanco)){
  $_SESSION['msg_ok'] = "<p style='color:green;'>Jogador cadastrado com sucesso!</p>";
  header("Location: login.php"); // ABRE O ARQUIVO INDEX.PHP QUANDO CLICAR NO BOTÃO
}else{
  $_SESSION['msg_erro'] = "<p style='color:#000000;'>Atenção: Cadastro do jogador não foi realizado com sucesso!</p>";
  // header("Location: ValidarLogin.php"); // MOSTRA UMA MENSAGEM DE ERRO
}
 ?>

</body>
</html>

<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Validando Login</title>
  </head>
  <body style="background-color:#d2a679;">

<div class="imagemProf">
  <img src="../img/prof.png" id="imagemProf" style="float: right; width: 600px;
	height: 550px;">
</div>
<?php

// Recebendo dados dos campos do formulário e armazendando em uma váriavel//
// Trim remove espaço em branco do inicio e fim
$usuario = trim($_POST["usuario"]);
$senha = trim($_POST["senha"]);

// Validar campos obrigatórios
if($usuario != "" && $senha != ""){
  // Faz conexão com o banco de Dados
  // $conexaoBanco = mysqli_connect('localhost','root','','domino');
  $conexaoBanco = mysqli_connect('localhost','root','mysql','domino');

  // Faz um select com o usuário e a Senha
  //criptografa a Senha
  $senha = md5 ($senha . "domino");
  $senha = md5 ($senha);
   // '$usuario%'"; -- % faz uma pesquisa. Ex: Digitou Raf vai trazer tudo o que tem no banco Raf
 $sql = "SELECT * FROM usuario WHERE (nome LIKE '$usuario' AND senha LIKE '$senha') OR (email LIKE '$usuario' AND senha LIKE '$senha'); ";
 $resultado = mysqli_query($conexaoBanco, $sql);

// Mostra na tela o SELECT
 // echo $sql;

  // Se existir algum registro...
  if (mysqli_num_rows($resultado) > 0) {
    session_start();
    $_SESSION['login'] = "ok";
    header("Location: ../index.php"); // MOSTRA UMA MENSAGEM DE ERRO

  }
  //Se não...
  else{
    exit ("<p style='background-color:#86592d;
  	border: 1px solid #86592d;
  	border-radius: 10px;
  	width: 300px;
  	text-align: center;
  	margin: 30px auto;
  	padding: 50px;
  	background: radial-gradient(70% 60%, #d6a76a, #fff);
  	box-shadow: 4px 5px 5px #994d00;
    color: #e60000;
    font-size:30px;
    font-family:Times New Roman;
    margin: 100px auto 200px 450px;
    float: center;'><b>
    Atenção: Usuário ou senha incorretos!</b></p>");

  }
} else{
  // pode exibir uma mensagem na tela
  exit ("<h3 style='background-color: #ffffff;
  border: 1px solid #86592d;
  border-radius: 10px;
  width: 300px;
  text-align: center;
  margin: 30px auto;
  padding: 50px;
  background: radial-gradient(70% 60%, #d6a76a, #fff);
  box-shadow: 4px 5px 5px #994d00;
  color: #e60000;
  font-size:35px;
  font-family:Times New Roman;
  margin: 100px auto 200px 450px;
  float: center;'><b>Atenção: Prencha todos os campos!</b><h3>");

  // Redirecionar para outro local
}
 ?>

</body>
</html>

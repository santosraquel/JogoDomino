<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Redefinir Senha</title>
  </head>
  <body>


<!-- <?php
// Mostrar mensagem
session_start();

// Recebendo dados dos campos do formulário e armazendando em uma váriavel
$email = trim($_POST["email"]);
$senha = trim($_POST["senha"]);
$confirmarSenha = trim($_POST["confirmarSenha"]);

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
 $sql = "SELECT * FROM usuario WHERE (email LIKE '$usuario' AND senha LIKE '$senha'); ";
 $resultado = mysqli_query($conexaoBanco, $sql);
 ?> -->

</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Validar Senha</title>
  </head>
  <body>
      <?php
      session_start();

      $email = $_POST["email"];


      $senha = trim($_POST["novaSenha"]);
      $confirmarSenha = trim($_POST["confirmarSenha"]);

      $validarCampos = true;


      if($senha != $confirmarSenha || $senha == ""){
        echo "Senhas não coincidem!";
        $validarCampos = false;
      }


      if($validarCampos){
        $senha = md5($senha . "domino");
        $senha = md5($senha);
        // $conexaoBanco = mysqli_connect('localhost','root','mysql','domino');
        $conexaoBanco = mysqli_connect('localhost','root','','domino');
        // include_once("bancoDados/conexao.php");
        $sqlinsert = "UPDATE usuario SET senha = '$senha' WHERE email ='$email'";
        echo "Senha alterada com sucesso!";
        $resultado = mysqli_query($conexaoBanco, $sqlinsert);
      }

    if(mysqli_insert_id($conexaoBanco)){
      $_SESSION['msg_ok'] = "<p style='color:green;'>Senha alterada com sucesso!</p>";
      header("Location: ../login.php"); // ABRE O ARQUIVO INDEX.PHP QUANDO CLICAR NO BOTÃO

    }else{
      $_SESSION['msg_erro'] = "<p style='color:#000000;'>Atenção: Senha não Alterada!</p>";
      // header("Location: ValidarLogin.php"); // MOSTRA UMA MENSAGEM DE ERRO
    }

       ?>


  </body>
</html>

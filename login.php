<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Login</title>

    <link rel="stylesheet" type= "text/css" href="css/style.css"/>

    <style media="screen"> </style>
  </head>
  <body>

      <div class="login">
        <?php
            if(isset($_SESSION['msg_ok'])){
              echo $_SESSION['msg_ok'];
              unset($_SESSION['msg_ok']);

            } else if (isset($_SESSION['msg_erro'])){
              echo $_SESSION['msg_erro'];
              unset($_SESSION['msg_erro']);
            }
         ?>

        <form class="" action="controle/ValidarLogin.php" method="post">

          <img src="img/criancaRoda.png"  height="200" width="250"> <br>

            <label for="" class="fontLabel"><b>Usuário ou E-mail:</b></label><br>
            <input type="text" name="usuario" value="" class="campo" placeholder="usuario@email.com"><br>

            <label for="" class="fontLabel"><b>Senha:</b></label><br>
            <input type="password" name="senha" value="" class="campo"  placeholder="Digite sua senha"><br>

            <input type="checkbox" name="lembrar" value="1" id="lembrar">
            <label for="lembrar"><b>Lembrar minha senha</b></label>
            <br>

            <input type="submit" name="" value="Entrar" class="botao entrar">
            

            <br> <br>


            <a href="esqueceuSenha.php">Esqueceu a senha?</a> <br>
            <a href="alterarSenha.php">Alterar senha</a> <br>
            <a href="cadastro.php">Cadastre-se</a>


        </form>
      </div>

  </body>
</html>

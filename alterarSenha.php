<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Redefinir Senha</title>

    <link rel="stylesheet" type= "text/css" href="css/style.css"/>

    <style media="screen"> </style>
  </head>
  <body>

    <?php
    // @session_start();
    //
    //
    //     if(isset($_SESSION['msg_ok'])){
    //       echo $_SESSION['msg_ok'];
    //       unset($_SESSION['msg_ok']);
    //
    //     } else if (isset($_SESSION['msg_erro'])){
    //       echo $_SESSION['msg_erro'];
    //       unset($_SESSION['msg_erro']);
    //     }

    $conexaoBanco = mysqli_connect('localhost','root','','domino');


    $email = $_POST['email'];

     ?>

      <div class="esqueceuSenha">

        <form class="" action="controle/validarSenha.php" method="post">

            <label class="fontLabel"><b>Nova Senha:</b></label><br>
            <input type="password" name="novaSenha" value="" class="campo"  placeholder="Digite sua senha"><br>

            <label class="fontLabel"><b>Confirmar Nova Senha:</b></label><br>
            <input type="password" name="confirmarSenha" value="" class="campo"  placeholder="Digite sua senha novamente"><br> <br>
            <input type="hidden" id="email" name="email" value="<?php echo $email;?>">

            <input type="submit" name="redefinirSenha" value="Redefinir Senha" class="botao redefinirSenha" id="redefinirSenha">

            <input type="reset" name="Limpar" value="Limpar" class="botao limpar" id="limpar">



        </form>
      </div>

  </body>
</html>

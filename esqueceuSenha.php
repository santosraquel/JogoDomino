<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Redefinir Senha</title>

    <link rel="stylesheet" type= "text/css" href="css/style.css"/>

    <style media="screen"> </style>
  </head>
  <body>




      <div class="esqueceuSenha">

        <?php

            if(isset($_SESSION['msg_ok'])){
              echo $_SESSION['msg_ok'];
              unset($_SESSION['msg_ok']);}

            // } else if (isset($_SESSION['msg_erro'])){
            //   echo $_SESSION['msg_erro'];
            //   unset($_SESSION['msg_erro']);
            // }
         ?>

        <form class="" action="alterarSenha.php" method="post">

            <label for=""><b>E-mail:</b></label><br>
            <input type="text" name="email" value="" class="campo" placeholder="usuario@email.com"><br>


            <input type="submit" name="redefinirSenha" value="Redefinir Senha" class="botao redefinirSenha">

            <input type="reset" name="Limpar" value="Limpar" class="botao limpar">

        </form>
        <br>
        <p id="LinkLogin">Deseja logar-se?<a href="login.php">Clique aqui para logar.</a></p>
      </div>

    </body>
  </html>

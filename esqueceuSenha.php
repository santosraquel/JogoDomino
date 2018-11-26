<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Redefinir Senha</title>

    <link rel="stylesheet" type= "text/css" href="css/style.css"/>

    <style media="screen"> </style>
  </head>
  <body>

    <!-- <div id="menu-topo">

    </div> -->

    <!-- <?php
      //   if(count($erro) > 0){
      //
      //   foreach ($erro as $msg) {
      //     echo "<p>$msg</p>";
      //   }
      // }

     ?> -->

      <div class="esqueceuSenha">

        <form class="" action="controle/redefinirSenha.php" method="post">

            <label for=""><b>E-mail:</b></label><br>
            <input type="text" name="email" value="email" class="campo" placeholder="usuario@email.com"><br>


            <input type="submit" name="redefinirSenha" value="Redefinir Senha" class="botao redefinirSenha">

            <input type="reset" name="Limpar" value="Limpar" class="botao limpar">

        </form>
        <br>
        <p id="LinkLogin">Deseja logar-se?<a href="login.php">Clique aqui para logar.</a></p>
      </div>

  </body>
</html>

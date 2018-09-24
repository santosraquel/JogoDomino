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

      <div class="esqueceuSenha">

        <form class="" action="controle/trocarSenha.php" method="post">

            <label for=""><b>E-mail:</b></label><br>
            <input type="text" name="email" value="" class="campo" placeholder="usuario@email.com"><br>

            <!-- <label for="" class="fontLabel"><b>Senha:</b></label><br>
            <input type="password" name="senha" value="" class="campo"  placeholder="Digite sua senha"><br> -->

            <label for=""><b>Nova Senha:</b></label><br>
            <input type="password" name="senha" value="" class="campo"  placeholder="Digite sua senha"><br>

            <label for=""><b>Confirmar Nova Senha:</b></label><br>
            <input type="password" name="confirmarSenha" value="" class="campo"  placeholder="Digite sua senha novamente"><br> <br>

            <input type="submit" name="" value="Redefinir Senha" class="botao redefinirSenha">

            <input type="reset" name="" value="Limpar" class="botao limpar">



        </form>
      </div>

  </body>
</html>

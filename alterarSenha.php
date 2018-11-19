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

        <form class="" action="controle/alterarSenha.php" method="post">

            <label class="fontLabel"><b>E-mail:</b></label><br>
            <input type="text" name="email" value="" class="campo" placeholder="usuario@email.com"><br>

            <label class="fontLabel"><b>Senha atual:</b></label><br>
            <input type="password" name="senhaAtual" value="" class="campo"  placeholder="Digite sua senha"><br>

            <label class="fontLabel"><b>Nova Senha:</b></label><br>
            <input type="password" name="novaSenha" value="" class="campo"  placeholder="Digite sua senha"><br>

            <label class="fontLabel"><b>Confirmar Nova Senha:</b></label><br>
            <input type="password" name="confirmarNovaSenha" value="" class="campo"  placeholder="Digite sua senha novamente"><br> <br>

            <input type="submit" name="redefinirSenha" value="Redefinir Senha" class="botao redefinirSenha" id="redefinirSenha">

            <input type="reset" name="Limpar" value="Limpar" class="botao limpar" id="limpar">



        </form>
      </div>

  </body>
</html>

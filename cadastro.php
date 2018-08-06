<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Cadastro</title>

    <link rel="stylesheet" type= "text/css" href="css/style.css"/>

    <style media="screen"> </style>
  </head>
  <body>

    <div id="menu-topo">
      <ul>
        <li> <a href="telaPrincipal.php"><b>Página Inicial</b></a> </li>
        <li> <a href="cadastro.php"><b>Cadastro</b></a> </li>
        <li> <a href="login.php"><b>Login</b></a> </li>
        <li> <a href="#"><b>Descrição do Jogo</b></a> </li>
        <li> <a href="comoJogar.php"><b>Como Jogar</b></a> </li>
        <li> <a href="sobre.php"><b>Sobre</b></a> </li>
      </ul>
    </div>

      <div class="cadastro">

        <img src="img/cadast.png"  height="150" width="160"alt=""> <br>
          <!-- controle/cadastro.php DEFININDO ARQUIVO DE DESTINO -->
        <form class="" action="controle/cadastro.php" method="post">
            <label for=""><b>Nome:</b></label> <br>
              <input type="text" name="nome" value="" class="campo" placeholder="Digite seu nome"><br>

            <label for=""><b>E-mail:</b></label><br>
            <input type="text" name="email" value="" class="campo" placeholder="usuario@email.com"><br>

            <label for=""><b>Senha:</b></label><br>
            <input type="password" name="senha" value="" class="campo"  placeholder="Digite sua senha"><br>

            <label for=""><b>Confirmar Senha:</b></label><br>
            <input type="password" name="confirmarSenha" value="" class="campo"  placeholder="Digite sua senha novamente"><br> <br>

            <input type="submit" name="" value="Cadastrar" class="botao cadastrar">

            <input type="reset" name="" value="Limpar" class="botao limpar">



        </form>
      </div>

  </body>
</html>

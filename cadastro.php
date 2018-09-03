<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Cadastro</title>

    <link rel="stylesheet" type= "text/css" href="css/style.css"/>

    <style media="screen"> </style>
  </head>
  <body>

    <!-- <div id="menu-topo">
      <ul>

            include("menu.php");

    </div> -->

      <div class="cadastro">

        <img src="img/cadast.png"  height="150" width="160"alt=""> <br>

        <form class="" action="" method="post">
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
            
            <a href="telaInicial.php" class="botaoVoltar" id="botaoVoltar"><b>VOLTAR</b></a> <br>



        </form>
      </div>

  </body>
</html>

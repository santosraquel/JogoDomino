<?php
session_start();
 ?>

<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Cadastro</title>

    <link rel="stylesheet" type= "text/css" href="css/style.css"/>

    <style media="screen"> </style>
  </head>
  <body>

      <div class="cadastro">

        <img src="img/cadast.png"  height="150" width="160"alt=""> <br>
          <?php
              if(isset($_SESSION['msg']))
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
           ?>
        <form class="" action="cadastrarJogador.php" method="post">
            <label for="" class="fontLabel"><b>Nome:</b></label> <br>
              <input type="text" name="nome" value="" class="campo" placeholder="Digite seu nome"><br>

            <label for="" class="fontLabel"><b>E-mail:</b></label><br>
            <input type="email" name="email" value="" class="campo" placeholder="usuario@email.com"><br>

            <label for="" class="fontLabel"><b>Senha:</b></label><br>
            <input type="password" name="senha" value="" class="campo"  placeholder="Digite sua senha"><br>

            <label for="" class="fontLabel"><b>Confirmar Senha:</b></label><br>
            <input type="password" name="confirmarSenha" value="" class="campo"  placeholder="Digite sua senha novamente"><br> <br>

            <input type="submit" name="" value="Cadastrar" class="botao cadastrar">

            <input type="reset" name="" value="Limpar" class="botao limpar">

            <!-- <a href="telaInicial.php" class="botaoVoltar" id="botaoVoltar"><b>VOLTAR</b></a> <br> -->



        </form>
      </div>

  </body>
</html>

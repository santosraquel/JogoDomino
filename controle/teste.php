<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <?php
    //1. Fazer Conexão com o banco de dados
    $conexaoBanco = mysqli_connect('localhost','root','','domino') or die ('Erro de conexão');
    // $conexaoBanco = mysqli_connect('localhost','root','mysql','domino') or die ('Erro de conexão');


    // 2. Verificar se o email e a senha que o usuário digitou é a mesma que está no banco.
    $email = $_POST['email'];
    $senha = trim($_POST["senha"]);

    $senha = md5($senha . "domino");
    $senha = md5($senha);

    $novaSenha = trim($_POST["novaSenha"]);
    $confirmarNovaSenha = trim($_POST["confirmarNovaSenha"]);
    $novaSenha = md5($novaSenha . "domino");
    $novaSenha = md5($novaSenha);
    $id = trim($_POST["idUsuario"]);
    $sql = "SELECT email, senha FROM usuario WHERE email='$email' AND senha='$senha'";
    $resp = mysqli_query($conexaoBanco, $sql) or die ("Erro ao cadastrar");
    echo "$sql";



    // 3. Se forem iguais o usuário terá que digitar a nova senha e confirmar a senha;
    // caso contrário emitir uma mensagem de erro dizendo que o e-mail e a senha atual
    // digitada estão erradas ou não existem.
        $validarCampos = true;


    if($novaSenha != $confirmarNovaSenha || $novaSenha== ""){
      echo "Senhas não coincidem!";
      $validarCampos = false;
    }

    $atualizarSenha = ("UPDATE usuario SET senha = '$novaSenha' WHERE idUsusario = '$id'");
    echo "$atualizarSenha";
    // 4. Caso estiver tudo OK atualizar no banco de dados e emitir uma mensagem.

     ?>
  </body>
</html>

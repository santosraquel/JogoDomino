<?php
  // $conexao = domino();
  // $resultado = mysqli_query ($conexao, 'SELECT email, senha FROM usuario');
  //
  //    $email = trim($_POST["email"]);
  //    $senha = trim($_POST["senha"]);
  //    $novaSenha = trim($_POST["novaSenha"]);
  //    $confirmarNovaSenha = trim($_POST["confirmarNovaSenha"]);
  //    $validarCampos = true;

// 1. FAZER CONEXÃO COM O BANCO DE DADOS
  // $conexaoBanco = mysqli_connect('localhost','root','mysql','domino');
  // $conexaoBanco = mysqli_connect('localhost','root','','domino');

// 2. Verificar se o email e a senha que o usuário digitou é a mesma que está no banco.
  // $consulta = "SELECT email, senha FROM usuario WHERE email='$email' AND senha='$senha'";
  // $resultado = mysqli_query($consulta, $conexaoBanco);
  // while ($linha = mysql_fetch_array($resultado, $conexaoBanco)) {
  //   $senha = $linha["senha"];
  //   $nome = $linha["nome"];
  // }

  // 3. Se forem iguais o usuário terá que digitar a nova senha e confirmar a senha;
  // caso contrário emitir uma mensagem de erro dizendo que o e-mail e a senha atual
  // digitada estão erradas ou não existem.



// 4. Caso estiver tudo OK atualizar no banco de dados e emitir uma mensagem.



    // if(isset($_POST['redefinirSenha'])){
    //   $email = (strip_tags($_POST["email"]));
    //
    //   $senha_atual = md5(strip_tags($_POST['senha']));
    //   $senha_nova = md5(strip_tags($_POST['senha_nova']));
    //   $confirme_senha  = md5(strip_tags($_POST['confirme_senha']));
    // $sql = mysql_query("SELECT email,senha FROM usuario WHERE email='$email' AND senha='$senha_atual'");
    // $row = mysql_fetch_array($sql);
    // $senha_banco = $row['usr_password'];
    // }
    //

    //conectando ao banco de dados

    include("bancoDados/conexao.php");
    // $conexaoBanco = mysqli_connect('localhost','root','','domino') or die ('Erro de conexão');
    // $conexaoBanco = mysqli_connect('localhost','root','mysql','domino') or die ('Erro de conexão');
    $sql = "SELECT email, senha FROM usuario WHERE email='$email' AND senha='$senha'";
    $resp = mysqli_query($conexaoBanco, $sql) or die ("Erro ao cadastrar");
    echo "$sql";



    //
    // $email = $_POST['email'];
    // $senha = md5(strip_tags($_POST['senha']));
    //
    // $atualizar = "UPDATE usuario SET senha = '$nova_senha' WHERE email = '$email'";
    // mysqli_query($conexaoBanco, $atualizar);

     ?>

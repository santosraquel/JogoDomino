
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Redefinir Senha</title>
  </head>
  <body>

        <?php
        // $conexaoBanco = mysqli_connect('localhost','root','mysql','domino');
          $conexaoBanco = mysqli_connect('localhost','root','','domino');
          if(isset($_POST['redefinirSenha'])){

            $email = $mysqli->escape_string($_POST['email']);
            // somente se o email digitado for inválido
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                $erro[] = "E-mail inválido.";



            $sql_code = "SELECT email FROM usuario WHERE email = '$email'";
            $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
            $dado = $sql_query->fetch_assoc();
            $total = $sql_query->num_rows;

            if($total == 0){
              $erro[] = "O e-mail informado não existe!";
            }


            // Se o email for válido
            if(count($erro) == 0 && $total > 0 ){
            //primeiro pegar a hora em segundos atual e criptografar(minimo 0 e máximo 6 caracter)
            $novaSenha = substr(md5(time()), 0, 6); // está senha será enviada por e-mail para o usuário
            $nsCriptografada = md5(md5($novaSenha)); // está senha será alterada no banco de dados

            // Somente se o e-mail de nova senha for enviado para o usuário
            // if(mail($email, "Sua nova Senha", "Sua nova senha:".$novaSenha)){
            if(1 == 1){

              // é que a senha será alterada no banco de dados
              $sql_update = "UPDATE usuario SET senha = '$nsCriptografada' WHERE email = '$email'";
              $sql_query = $mysqli->query($sql_code) or die($mysqli->error);//atualizando senha no banco de dados

              if($sql_query)
                $erro[] = "Senha alterada com sucesso!";

            }

          }


          }

        ?>

</body>
</html>

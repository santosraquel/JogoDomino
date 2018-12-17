
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Redefinir Senha</title>
  </head>
  <body style="background-color:#cceeff;">

  <div class="imagemProf">
  <img src="../img/prof.png" id="imagemProf" style="float: right; width: 600px; height: 550px;">
  </div>
        <?php
        // $conexaoBanco = mysqli_connect('localhost','root','mysql','domino');
          $conexaoBanco = mysqli_connect('localhost','root','','domino');


          $email = $_POST['email'];
          $sql = "SELECT email FROM usuario WHERE email ='$email'";
          $resultado = mysqli_query($conexaoBanco, $sql) or die ("Erro ao cadastrar");
          // echo "$sql";
          $validarCampos = true;
          if($email == ""){

            $validarCampos = false;
          }


          if (mysqli_num_rows($resultado) > 0) {
            session_start();
            $_SESSION['alterarSenha'] = "ok";
            header("Location: ../alterarSenha.php"); // MOSTRA UMA MENSAGEM DE ERRO

          }
          //Se não...
          else{
            exit ("<p style='background-color:#cc99ffs;
          	border: 1px solid #008f83;
          	border-radius: 10px;
          	width: 300px;
          	text-align: center;
          	margin: 30px auto;
          	padding: 50px;
          	background: radial-gradient(90% 90%, #009e91, #fff);
          	box-shadow: 4px 5px 5px #008075;
            color:  #cc0000;
            font-size:30px;
            font-family:Times New Roman;
            margin: 100px auto 200px 450px;
            float: center;'><b>
            Atenção: E-mail inválido ou E-mail não existe na base de dados!</b></p>");

          }



        ?>

</body>
</html>

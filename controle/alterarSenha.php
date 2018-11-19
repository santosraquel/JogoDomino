<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Validando Login</title>
  </head>
  <body style="background-color:#cceeff;">

<div class="imagemProf">
  <img src="../img/prof.png" id="imagemProf" style="float: right; width: 600px;
	height: 550px;">
</div>
<?php
  // $conexao = domino();
  // $resultado = mysqli_query ($conexao, 'SELECT email, senha FROM usuario');
  //
  //    $email = trim($_POST["email"]);
  //    $senha = trim($_POST["senha"]);
  //    $novaSenha = trim($_POST["novaSenha"]);
  //    $confirmarNovaSenha = trim($_POST["confirmarNovaSenha"]);
  //    $validarCampos = true;


  $email = trim($_POST["email"]);
  $senhaAtual = trim($_POST["senhaAtual"]);

  // Validar campos obrigatórios
  if($email != "" && $senhaAtual != ""){
    // Faz conexão com o banco de Dados
    // $conexaoBanco = mysqli_connect('localhost','root','','domino');
    $conexaoBanco = mysqli_connect('localhost','root','mysql','domino');

    $senha = md5 ($senha . "domino");

    echo "$senha";

    $sql = "SELECT * FROM usuario WHERE (nome LIKE '$email' AND senha LIKE '$senha');";
    $resultado = mysqli_query($conexaoBanco, $sql);

    // Se existir algum registro...
    if (mysqli_num_rows($resultado) > 0) {

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
      Atenção: Preencha todos os campos!</b></p>");

    }
}
     ?>

   </body>
   </html>

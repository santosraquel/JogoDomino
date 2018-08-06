<?php
//recebendo os dados do formulario e armazema
$nome = trim($_REQUEST['nome']);
$email = trim($_REQUEST['email']);
$senha = trim($_REQUEST['senha']);
$confirmarSenha =  trim($_REQUEST['confirmarSenha']);
echo "Cadastrado $nome";

if($nome == ""){
  echo "Nome não informado!";
}

if($email == ""){
  echo "Email não informado!";
}

if($senha == ""){
  echo "Senha não informada!";
}

if($confirmarSenha == ""){
  echo "confimação de senha não informada!";
}

if($confimarSenha != $senha  ""){
  echo "Senha não confirmada!";
}


 ?>

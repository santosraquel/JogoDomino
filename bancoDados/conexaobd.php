<?php

$conexaoBanco = mysqli_connect('localhost','root','','domino');
$sqlinsert = "INSERT INTO cadastro (idUsuario,nome, email, senha) VALUES".
               "('', '','', '')";

$resultado = mysqli_query($conexaoBanco, $sqlinsert);

if ($resultado) {
echo "Cadastro Realizado com sucesso!!";

} else {
echo "Deu problema - Verifique onde está o erro!! :((()";
}



 ?>

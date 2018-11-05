<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type= "text/css" href="css/style.css"/>
  </head>
  <body>
    <h1>Usuários Cadastrados:</h1>
    <?php
    //Criando tabela
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>Nome:</th>";
    echo "<br>";
    echo "<th>E-mail:</th>";
    echo "</tr>";

    //conectando ao banco de dados

    $conexaoBanco = mysqli_connect('localhost','root','','domino') or die ('Erro de conexão');
    // $conexaoBanco = mysqli_connect('localhost','root','mysql','domino') or die ('Erro de conexão');
    $sql = "SELECT * FROM usuario";
    $resp = mysqli_query($conexaoBanco, $sql) or die ("Erro ao cadastrar");

    //Obter os dados usando o loop while
    while ($registro = mysqli_fetch_array($resp)){
      $nome = $registro ['nome'];
      $email = $registro['email'];
      echo "<tr>";
      echo "<td>$nome</td>";
      echo "<td>$email</td>";
      echo "</tr>";
    }
    mysqli_close($conexaoBanco);
    echo "</table>";
    ?>
  </body>
</html>

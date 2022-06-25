
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">


  <title>cadastro de clientes</title>
</head>
<body>

<div class="container">
<?php
session_start();
include_once("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1) {
    $_SESSION['usuario_existe'] = true;
    header('Location: cadastro.html');
    exit;
}

$sql = "INSERT usuario ( nome,usuario,email, telefone,senha,data_cadastro) VALUES ('$nome','$usuario','$email','$telefone','$senha', NOW())";

if ($conexao -> query($sql) === true) {
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: index.php');
exit;
?>
</div>
</body>
</html>
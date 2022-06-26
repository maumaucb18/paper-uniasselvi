<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
  
    <link rel="stylesheet" href="style.css">

  <title> painel </title>
</head>
<body>

<div class="container">


<?php
session_start();
include_once("conexao.php");

$id = $_GET['id'];
$slqSelect = "SELECT * FROM usuario WHERE id = $id";
$resultado = $conexao -> query($slqSelect);

if ($resultado -> num_rols >= 0) {
    $rols = mysqli_fetch_assoc($resultado);


    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
    $senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
} else {
    header('location:painel.php');
}






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

?> 





<p> <a href="painel.php">voltar</p>

</div>



</body>
</html>
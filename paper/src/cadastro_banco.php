<?php
session_start();
include_once("conexao.php");

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$usuario = mysqli_real_escape_string($usuario, $_POST['usuario']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1) {
    $_SESSION['nome_existe'] = true;
    header('Location: cadastro.html');
    exit;
}

$sql = "INSERT INTO usuarios ( `nome`,`usuario`, `senha`, `email`, `telefone`) VALUES ('$nome','$usuario',$email','$telefone','$senha' NOW())";

if ($conexao->query($sql) === true) {
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.html');
exit;

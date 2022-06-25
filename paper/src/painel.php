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
include_once('verifica.php');
?>
<p> Olá <br>
    <?php
echo $_SESSION['usuario'] ;


?> 
<br>  Seja bem vindo ao portal do aluno Uniasselvi</p>
<p><a href="edit.php">Alterar cadastro</a></p>

<p> <a href="logout.php">sair</p>

</div>



</body>
</html>
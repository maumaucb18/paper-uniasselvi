<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>

<div class="grid-container"> 
    <div class="grid-item">
     <p> Realize o login para acessar a plataforma</p>
    <div class="grid-item-img">
        <img src="../css/gioconda -image.png" alt="logo uniasselvi gioconda">
    </div>
</div>

    <main class="container">
<?php
if (isset($_SESSION['nao_autenticado'])):
?>
<div class="notification is-danger">
<p>ERRO: Usuário ou senha inválidos.</p>
 </div>
 <?php
 endif;
 unset($_SESSION['nao_autenticado']);
?>

        <h2>Login</h2>
       
        <form action="../src/login_controll.php" method="POST"> 
            <!--formulário de validação de usuario e senha-->
            <div class="input-field">
                <input type="text" name="usuario" id="usuario" placeholder="Insira seu nome" required>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="password" name="senha" id="senha" placeholder="Insira sua senha" required>
                <div class="underline"></div>
            </div>

            <input type="submit" value="Acessar">

            <a class="login" href="../src/cadastro.html" target="_blank" rel="noopener noreferrer">Cadastre-se</a> 
            <a class="login" href="../src/home.php" target="_blank" rel="noopener noreferrer">home</a> 
        </form>

    </main>

 

</body>

</html>
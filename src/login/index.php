<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>

     

<div class="cube" >
    <div class="top" ><span > </span></div>
    <div>
        <span style="--i:0;"><img src="../gioconda -image.png" alt=""></span>
        <span style="--i:1;"><img src="../../css/uniasselvi-logo.png" alt=""></span>
        <span style="--i:2;"><p>CASATRE-SE</p></span>
        <span style="--i:3;">Acesse com seu login</span>
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

            <a class="login" href="../cadastro.html" target="_blank" rel="noopener noreferrer">Cadastre-se</a> 
            <a class="login" href="../home.php" target="_blank" rel="noopener noreferrer">home</a> 
        </form>

    </main>

 

</body>

</html>
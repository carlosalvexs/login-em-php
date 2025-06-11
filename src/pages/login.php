<?php
    include_once '../php/session.php';
    include_once '../php/userLogin.php';
    include_once '../php/conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/login.css">
    
</head>
<body>
    <form method="post" class='login-container'>
        <h1>Faça login</h1>
        <input type="email" placeholder="Email" name="userEmail" required>
        <input type="password" placeholder="Password" name="userPassword" required>
        <button type="submit" name="loginButton" class="loginButton">Entrar</button>
        <p>Não tem uma conta? <a href="../pages/register.php">Cadastre-se</a></p>
         <?php
            if(isset($_POST['loginButton'])){
                include_once '../php/login.php';
            }
        ?>
        <p><a href="../../index.php">Voltar</a></p>
    </form>
</body>
</html>
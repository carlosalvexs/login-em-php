<?php
    include_once '../php/session.php';
    include_once '../php/userLogin.php';
    include_once '../php/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../style/register.css">
</head>
<body>
        <div class="container">

        <h1>CADASTRO</h1>

        <form method="POST" class="formulario">

            <div class="leftSide">
                <label for="userName" class="loginLabel">Nome Completo</label>
                <input type="text" name="userName" class="loginInput"/>
                <label for="userEmail" class="loginLabel">Email</label>
                <input type="text" name="userEmail" class="loginInput"/>
                <label for="userPassword" class="loginLabel">Senha</label>
                <input type="password" name="userPassword" class="loginInput"/>
                <label for="confirmPassword" class="loginLabel">Confirme a sua senha</label>
                <input type="password" name="confirmPassword" class="loginInput"/>
            </div>

            <div class="rightSide">
                <label for="userPhone" class="loginLabel">Telefone/Celular</label>
                <input type="text" class="loginInput" name="userPhone"/>
                <label for="userCpf" class="loginLabel">CPF</label>
                <input type="text" name="userCpf" class="loginInput"/>
                <label for="userBirth" class="loginLabel">Data de nascimento</label>
                <input type="datetime" name="userBirth" class="loginInput"/>
                <a class="emptySpace"></a>
                <input type="submit" value="Cadastrar" name="loginButton" class="loginButton" />
                <p><a href="../../index.php">Voltar</a></p>
            </div>
        
        <?php
            if(isset($_POST['loginButton'])){
                include_once '../php/cadastro.php';
            }
        ?>
        </form>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
    <?php
        include_once "./php/conexao.php";
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../style/register.css">
</head>
<body>
    <form method="post" class='register'>
        <h1>Faça registro</h1>
        <input type="text" placeholder="name" name="name" required>
        <input type="password" placeholder="password" name="password" required>
        <input type="email" placeholder="email" name="email" required>
        <input type="cpf" placeholder="cpf" name="cpf" required>
        <button type="submit" name="logupBtn">Entrar</button>
        <p>Já tem uma conta? <a href="../pages/login.php">Faça login</a></p>
        <p><a href="../../index.php">Voltar</a></p>
    </form>
     <?php
            if (isset($_POST['logupBtn'])) {
                include_once "./php/register.php";
            }
/*
            //Login de usuário
            if(isset($_GET['login'])){
                $nome = $_GET['nome'];
                $senha = $_GET['senha'];

                $sql = "SELECT name, passwd FROM usuarios WHERE name='$nome';";
                $resultado = $conexao->query($sql);
                if($row = $resultado->fetch_assoc()){
                    if(($row['name'] == $nome) && ($row['passwd'] == $senha)){
                        echo "Usuário existe<br>";
                    }else{
                        echo "Usuário não existe<br>";
                    }
                }
            }

            //Seleção de usuários
            $sql = "SELECT name, passwd FROM usuarios ORDER BY name;";
            $resultado = $conexao->query($sql);

            //Exibição de usuários
            if($resultado->num_rows > 0){
                while($row = $resultado->fetch_assoc()){
                // echo "Usuário: ".$row['name']." | Senha: ".$row['passwd']."<br>";
                }
            }
*/
        ?>
</body>
</html>
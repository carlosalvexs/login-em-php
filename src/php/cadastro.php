<?php
    $nome = $_POST['userName'];
    $email = $_POST['userEmail'];
    $senha = $_POST['userPassword'];
    $confirmaSenha = $_POST['confirmPassword'];
    $telefone = $_POST['userPhone'];
    $cpf = $_POST['userCpf'];
    $nascimento = $_POST['userBirth'];

    $sql = "SELECT userEmail FROM usuarios WHERE userEmail = '$email';";
    $resultado = $conexao->query($sql);

    if($nome == '' || $email == '' || $senha == '' || $confirmaSenha == '' || $telefone == '' || $cpf == '' || $nascimento == ''){
        echo "Pelo menos um dos campos está vazio.";
    }else if($senha !== $confirmaSenha){
        echo "As senhas inseridas não conferem. Por favor, tente novamente.";
    }else if($resultado -> num_rows > 0){
        echo "Já existe uma conta cadastrada com o email inserido";
    }else{
        $sql = "INSERT INTO usuarios (userName, userEmail, userPassword, userPhone, userCpf, userBirth) VALUES ('$nome', '$email', '$senha', '$telefone', '$cpf', '$nascimento');";
        $conexao -> query($sql);
        header("Location: ../pages/home.php");
    }
?>
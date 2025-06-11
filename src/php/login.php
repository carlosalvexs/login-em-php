<?php
    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];

    if($userEmail === '' || $userPassword === ''){
        echo "Um dos campos necessários não foi preenchido corretamente. Por favor, tente novamente.";
    }
    else{
        $sql = "SELECT userEmail, userPassword, userName FROM usuarios WHERE userEmail='$userEmail';";
        $consulta = $conexao -> query($sql);

        if($usuarios = $consulta -> fetch_assoc()){

            if($usuarios['userEmail'] === $userEmail && $usuarios['userPassword'] === $userPassword){
                $logUser = $usuarios['userName'];
                echo "O usuário ".$logUser." existe e está conectado.";
                $_SESSION['user'] = $logUser;
                if(isset($_SESSION["user"])){
                    header("Location: ../pages/home.php");
                }
            } 
            else if ($usuarios['userEmail'] === $userEmail && $usuarios['userPassword'] != $userPassword){
                echo "A senha para o usuário está incorreta.";
            }

        }
        else{
            echo "O email informado não está cadastrado";
        }
    }
?>
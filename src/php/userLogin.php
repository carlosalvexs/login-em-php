<?php 
    if(isset($_SESSION["user"])){
        header("Location: ../pages/home.php");
    }
?>
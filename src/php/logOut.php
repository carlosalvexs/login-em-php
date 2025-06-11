<?php
    include_once "session.php";
    session_unset();
    session_destroy();
    header("Location: ../pages/login.php"); 
    exit(); 
?>
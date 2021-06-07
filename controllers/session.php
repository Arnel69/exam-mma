<?php

session_start();

if ($_POST['username'] === "admin" && $_POST['password'] === "aze"){
        $_SESSION['username'] = "admin";
}


if(isset($_SESSION['username'])){
    header('Location: ../index.php');
}else{
    $_SESSION['password']= true;
    header('Location: ../connexion.php');
}

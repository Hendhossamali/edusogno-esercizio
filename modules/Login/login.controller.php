<?php
include_once("../User/User.php");

session_start();
if (isset($_POST['login-submit'])) {
    
    $user = new UserClass();
    // echo $_POST['username'];
    // echo $_POST['password'];

    if ($user->login($_POST['username'] , $_POST['password']) > 0) {
        $_SESSION['jwtToken'] = $_POST['username'];
        header("Location: http://localhost/edusogno-esercizio/index.php?page=dashboard");
        exit();

    } else {
        header("Location: http://localhost/edusogno-esercizio/index.php");
        exit();
    }
    echo "here";
}



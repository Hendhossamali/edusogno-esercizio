<?php
include_once("../User/User.php");


if (isset($_POST['register-submit'])) {
    if(($_POST["nome"] != "" ) || ($_POST["cognome"] != "" ) || ($_POST["email"] != "") || ($_POST["password"] != ""))
    {
        $user = new UserClass();
        $user->set_user($_POST["nome"],$_POST["cognome"], $_POST["email"], $_POST["password"]);
        $user->create_user();

    } 
    
}

    header("Location: http://localhost/edusogno-esercizio/index.php");
    exit();
    ?>
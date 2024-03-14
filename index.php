<?php

include_once("router.php");

session_start();


$router = new Router;
if (!$_SESSION["jwtToken"]) {
    if (!isset($_GET['page'])) {
        $_GET['page'] = "login";
    }
    if ($_GET['page'] == "register") {
        $router->get_register();
    }
    if ($_GET['page'] == "login")
        $router->get_login();
    // $_SESSION["loginToken"] = "ahmed";
}
if (isset($_SESSION["jwtToken"])) {

    if (!isset($_GET['page'])) {
        $_GET['page'] = "dashboard";
    }
    if (isset($_GET['page'])) {
        if ($_GET['page'] == "dashboard")
            $router->get_dashboard();

        if ($_GET['page'] == "login")
            $router->get_login();

        if ($_GET['page'] == "events")
            $router->get_events();
    }
}

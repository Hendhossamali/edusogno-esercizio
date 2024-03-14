<?php
class Router
{
    function get_login()
    {
        include("modules/Login/login.view.php");
    }
    function get_dashboard()
    {
        include("modules/Dashboard/dashboard.view.php");
    }

    function get_events()
    {
        include("modules/Event/event.view.php");
    }
    function get_register()
    {
        include("modules/Register/register.view.php");
    }
}

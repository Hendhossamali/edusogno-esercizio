<?php
include_once("Event.php");

session_start();
if (isset($_POST['new-event-submit'])) {
    if (($_POST["nome_evento"] != "") || ($_POST["attendees"] != "") || ($_POST["data_evento"] != "")) {
        $event = new EventClass();
        $event->set_event($_POST["nome_evento"], $_POST["attendees"], $_POST["data_evento"]);
        $event->create_event();
    }
    header("Location: http://localhost/edusogno-esercizio/index.php?page=events");
    exit();
}

if (isset($_POST['edit-event-submit'])) {
    if (($_POST["nome_evento_edit"] != "") || ($_POST["attendees_edit"] != "") || ($_POST["data_evento_edit"] != "")) {
        $event = new EventClass();
        $event->update_event($_POST["id"], $_POST["nome_evento_edit"], $_POST["attendees_edit"], $_POST["data_evento_edit"]);
    }
    header("Location: http://localhost/edusogno-esercizio/index.php?page=events");
    exit();
}

if (isset($_GET['action'])) {
    if ($_GET["id"] != "") {
        $event = new EventClass();
        $event->delete_event($_GET["id"]);
    }
    header("Location: http://localhost/edusogno-esercizio/index.php?page=events");
    exit();
}
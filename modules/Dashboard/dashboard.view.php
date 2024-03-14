<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./modules/Dashboard/dashboard.style.css">

</head>

<body>
    <main>
    <nav class="navbar navbar-expand-sm bg-light navbar-light ">
        <div class="container-fluid">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <img src="assets/images/logo.jpg">
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active" href="./index.php?page=dashboard">
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./index.php?page=events">
                        Events
                    </a>
                </li>

        </div>
    </nav>
        <div class="w-full m-auto p-5">
            <h3 class="text-center pt-5">Ciao NOME esso </h3>
            <div class="container p-5">
                <div class="row ">
                <?php
                    include_once('./modules/Event/Event.php');

                    $event = new EventClass();
                    
                    $event->get_dashboard_events();

                    ?>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./modules/Event/event.style.css">
    <script src="./modules/Event/event.scripts.js"></script>
</head>


<body>
    <main>
        <nav class="navbar navbar-expand-sm bg-light navbar-light ">
            <div class="container-fluid">
                <ul class="navbar-nav w-100">
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

                </ul>
            </div>
        </nav>
        <div class="w-full m-auto p-5">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h3 class="pt-2">Events</h3>
                    </div>
                    <div class="col-6  text-end">

                        <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#add-event-modal">
                            Add Event
                        </button>
                    </div>
                </div>
            </div>
            <div class="container p-2">
                <div class="row ">
                    <?php
                    include_once('Event.php');

                    $event = new EventClass();
                    $event->get_all_events();

                    ?>
                </div>
            </div>
            <!-- Modal Add New-->
            <div class="modal" id="add-event-modal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Add Event</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="./modules/Event/event.controller.php" method="post">
                                <div class="form-group">
                                    <label for="nome_evento">Nome Evento:</label>
                                    <input type="text" class="form-control" placeholder="Nome Evento" id="nome_evento" name="nome_evento" required>
                                </div>
                                <div class="form-group">
                                    <label for="attendees">Attendees:</label>
                                    <input type="text" class="form-control" placeholder="Attendees" id="attendees" name="attendees" required>
                                </div>
                                <div class="form-group">
                                    <label for="data_evento">Data Evento:</label>
                                    <input type="datetime-local" class="form-control" placeholder="Data Evento" id="data_evento" name="data_evento" required>
                                </div>
                                <div class="form-group pt-2">
                                    <button type="submit" id="new-event-submit" name="new-event-submit" class="btn btn-primary"> Add Event</button>
                                </div>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal View User-->
            <div class="modal" id="edit-event-modal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Event</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="./modules/Event/event.controller.php" method="post">
                                <div class="form-group">
                                    <label for="id">ID:</label>
                                    <input type="text" class="form-control" value="ID" id="id" name="id" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="nome_evento">Nome Evento:</label>
                                    <input type="text" class="form-control" placeholder="Nome Evento" id="nome_evento_edit" name="nome_evento_edit" required>
                                </div>
                                <div class="form-group">
                                    <label for="attendees">Attendees:</label>
                                    <input type="text" class="form-control" placeholder="Attendees" id="attendees_edit" name="attendees_edit" required>
                                </div>
                                <div class="form-group">
                                    <label for="data_evento">Data Evento:</label>
                                    <input type="datetime-local" class="form-control" placeholder="Data Evento" id="data_evento_edit" name="data_evento_edit" required>
                                </div>
                                <div class="form-group pt-2">
                                    <button type="submit" id="edit-event-submit" name="edit-event-submit" class="btn btn-primary"> Update Event</button>
                                </div>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

    </main>
</body>

</html>
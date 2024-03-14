<?php

class EventClass
{
    public $event_id;
    public $nome_evento;
    public $attendees;
    public $data_evento;

    public function __construct()
    {
    }

    public function set_event($nome_evento, $attendees, $data_evento)
    {
        $this->nome_evento = $nome_evento;
        $this->attendees = $attendees;
        $this->data_evento = $data_evento;
    }

    public function get_all_events()
    {
        try {
            // Create connection
            $conn = new mysqli("localhost", "hend", "123456", "edusongodb");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM eventi";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo ' <div class="col-3 ">
                    <div class="card p-3">
                        <div class="card-body">
                            <h4 class="card-title">' . $row["nome_evento"] . '</h4>
                            <p class="card-text">' . $row["data_evento"] . '</p>
                            <p class="card-text">' . $row["attendees"] . '</p>
                            <button type="button" 
                            class="btn btn-primary float-right" 
                            data-bs-toggle="modal" 
                            data-bs-target="#edit-event-modal"
                            onclick=\'update_edit_modal('. $row["id"] . ' , "' . $row["nome_evento"] . '" , "' . $row["data_evento"] . '" , "' . $row["attendees"] . '")\'
                            >
                                Edit
                            </button>
                            <a href="./modules/Event/event.controller.php?action=delete&id='. $row["id"] . '" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>';
                }
            } else {
                echo "0 results";
            }
            $conn->close();
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage();
        }
    }

    public function get_dashboard_events()
    {
        try {
            // Create connection
            $conn = new mysqli("localhost", "hend", "123456", "edusongodb");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM eventi";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo ' <div class="col-4 ">
                    <div class="card p-4">
                        <div class="card-body">
                            <h4 class="card-title">' . $row["nome_evento"] . '</h4>
                            <p class="card-text">' . $row["data_evento"] . '</p>
                            <p class="card-text">' . $row["attendees"] . '</p>
                            <a href="#" class="btn btn-primary w-100">JOIN</a>
                        </div>
                    </div>
                </div>';
                }
            } else {
                echo "0 results";
            }
            $conn->close();
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage();
        }
    }

    public function create_event()
    {
        try {
            // Create connection
            $conn = new mysqli("localhost", "hend", "123456", "edusongodb");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO eventi (nome_evento, attendees, data_evento) VALUES ('" . $this->nome_evento . "', '" . $this->attendees . "', '" . $this->data_evento . "')";

            if ($conn->query($sql) === TRUE) {
                echo "New Event created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage();
        }
    }

    public function get_event($event_id)
    {
    }


    public function update_event( $event_id , $nome_evento , $attendees, $data_evento)
    {
        try {
            // Create connection
            $conn = new mysqli("localhost", "hend", "123456", "edusongodb");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "UPDATE eventi SET nome_evento='" . $nome_evento . "', attendees ='" . $attendees . "' , data_evento='" . $data_evento . "' WHERE id='" .  $event_id. "'";

            if ($conn->query($sql) === TRUE) {
                echo "New Event created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage();
        }
    }


    public function delete_event($event_id)
    {
        try {
            // Create connection
            $conn = new mysqli("localhost", "hend", "123456", "edusongodb");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "DELETE FROM eventi WHERE id='" .  $event_id. "'";

            if ($conn->query($sql) === TRUE) {
                echo "Event Deleted successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage();
        }
    }
}

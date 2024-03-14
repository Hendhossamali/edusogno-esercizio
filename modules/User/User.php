<?php

include_once('../../utilities/mysql.php');




class UserClass
{
    public $nome;
    public $cognome;
    public $email;
    public $password;

    public function __construct()
    {
    }
    public function set_user($nome, $cognome, $email, $password){
        
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
        $this->password = $password;

    }

    public function login($cognome, $password)
    {
        $this->cognome = $cognome;
        $this->password = $password;

        $conn = new mysqli("localhost", "hend", "123456", "edusongodb");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM utenti WHERE cognome='" . $cognome . "' AND password='" . $password . "'";
        $result = $conn->query($sql);

        return $result->num_rows;
        
        $conn->close();
    }


    // Get All Users
    public function get_all_users()
    {
    }

    // Create New User
    public function create_user()
    {
        try {
            // $mysql->insert('utenti', array('nome' => 'cognome', 'email' => 'post content', 'password' => 'Matthew Loberg'));
            // Create connection
            $conn = new mysqli("localhost", "hend", "123456", "edusongodb");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO utenti (nome, cognome, email, password) VALUES ('" . $this->nome . "', '" . $this->cognome . "', '" . $this->email . "' , '" . $this->password . "')";

            if ($conn->query($sql) === TRUE) {
                echo "New User created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage();
        }
    }


    // Get User 
    public function get_user()
    {
        $conn = new mysqli("localhost", "hend", "123456", "edusongodb");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM utenti WHERE cognome='" . $this->cognome . "'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            // while ($row = $result->fetch_assoc()) {
            //     echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
            // }
        } else {
            echo "0 results";
        }
        $conn->close();
    }

    // Find User 
    public function find_user()
    {
        $conn = new mysqli("localhost", "hend", "123456", "edusongodb");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM utenti WHERE cognome='" . $this->cognome . "'";
        $result = $conn->query($sql);
        return $result->num_rows;

        $conn->close();
        return 0;
    }

    // Update User
    public function update_user($user_id)
    {
    }

    // Delete User
    public function delete_user($user_id)
    {
    }
}

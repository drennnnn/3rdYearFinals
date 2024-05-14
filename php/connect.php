<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_web_adv";

    $conn = new mysqli($host, $user, $pass, $db);
    if($conn->connect_error)
    {
        die("Connection Error: ".$conn->connect_error);
    }
?>
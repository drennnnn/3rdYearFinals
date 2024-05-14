<?php
    session_start();
    if(isset($_SESSION["userName"]))
    {
        header("location:../index.php");
        die();
    }
    include "connect.php";
    if(isset($_POST["login"]))
    {
        $userName = $_POST["username"];
        $password = $_POST["password"];
        $sql = 'SELECT * FROM user_table WHERE username = "'.$userName.'" AND password = "'.$password.'" ';
        $res = $conn->query($sql);
        if($res->num_rows<1)
        {
            header("location:../index.php?error=Incorrect Username or Password.");
            die();
        }
        else
        {
            $_SESSION["userName"] = $userName;
            header("location:../index.php");
            die();
        }
    }
?>
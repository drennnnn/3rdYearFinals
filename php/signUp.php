<?php
    include "connect.php";
    if(isset($_POST["submit"]))
    {
        $userName = $_POST["userName"];
        $password = $_POST["password"];
        $conPass = $_POST["confirmPassword"];
        $sql = 'SELECT * FROM user_table WHERE username = "'.$userName.'" ';
        $res = $conn->query($sql);
        if($res->num_rows>0)
        {
            header("location:../index.php?error=Username is used.");
            die();
        }
        if ($password === $conPass) 
        {
            $sql = "INSERT INTO user_table (username, password) VALUES ('".$userName."', '".$password."')";
            if($conn->query($sql))
            {
                header("location:../index.php?msg=Account created successfully.");
                die();
            }
        }
        else
        {
            header("location:../index.php?error=Password doesn't match.");
            die();
        }
    }
?>
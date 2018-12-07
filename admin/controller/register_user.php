<?php


        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $fullname=$_POST['fullname'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $password=$_POST['password'];
            include '../model/register_user.php';
            header("Location: ../tables-data.php");
    }
?>
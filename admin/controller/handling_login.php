<?php
        session_start();
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
          
            $user=$_POST['user'];
           
            $password=$_POST['password'];
           
            include'../model/login_user.php';
            if($row==0)
            {
                
                header("Location: ../page-login.php");
            }
            else{
                $_SESSION['user']=$user;
           header("Location: ../index.php");
            }

        }

        
?>
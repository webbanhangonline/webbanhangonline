<?php
	session_start();
	require('../model/m_login.php');
	if($_SERVER['REQUEST_METHOD']=='POST')
{
		$username=$_POST['username'];
		$password=$_POST['psw'];
		$a=new m_login();
  		$check=$a->checklogin($username,$password);
  		if(!empty($check)){
  			unset($_SESSION['error']);
  			$_SESSION['username']=($check[1]);

  		}
  		else
  			{$_SESSION['error']="error";
  	}
  }
  	if(!empty($_GET['logout']))
  	{
  		unset($_SESSION['username']);
  	}

  		header('Location: ../shop.php');

?>
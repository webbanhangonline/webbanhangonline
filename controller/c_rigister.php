<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
	
	$_POST['user_author']="user";
	require('../model/class.db.php');
	$a=new DB();
	$a->insert('users',$_POST);
	header('Location: ../shop.php');
}
?>
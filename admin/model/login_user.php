<?php
	require('../class/class.db.php');
	 $db=new DB();
     $row=$db->num_rows("SELECT user_name, user_password FROM users WHERE user_name='$user' AND user_password='$password' AND user_author='admin'");

?>
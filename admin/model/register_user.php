<?php

	require('../class/class.db.php');
	$db=new DB();
	$data = array('fullname' => $fullname,
                            'email'=>$email,
                            'phone'=>$phone,
                            'password'=>$password );
     $db->insert('users',$data);
     
?>
<?php
  class c_login

  {
  	public static checklogin($username,$password)
  	{
  		require('./model/m_login.php');
  		$check=m_login::checklogin($username,$password);
  		if(!empty($check))
  			return $check;
  		else
  			return false;
  	}
  
  }
?>
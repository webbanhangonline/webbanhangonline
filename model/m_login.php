<?php 
class m_login
{
	public function checklogin($username,$password)
	{
		require_once ('class.db.php');
		$database=new DB();
		$array=$database->get_row("SELECT * FROM users WHERE user_name='$username' AND user_password='$password'");
		if(!empty($array))
		{
			return $array;
		}
		
		
	}
}
?>
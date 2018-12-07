<?php
class m_categoryadmin
{
	public function get_category(){
		require('./class/class.db.php');
		$db=new DB();
		$arr=$db->get_results("SELECT * FROM categories");

		return $arr;
	}
	public function get_categoryid($id){
		require('./class/class.db.php');
		$db=new DB();
		$arr=$db->get_results("SELECT * FROM categories WHERE category_id='$id'");

		return $arr;
	}
	public function get_deltailcategoryid(){
		require('./class/class.db.php');
		$db=new DB();
		$arr=$db->get_results("SELECT * FROM deltail_category");

		return $arr;
	}
	
}
?>
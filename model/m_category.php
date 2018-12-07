<?php
/**
* 
*/
class m_category 
{
	public function m_getcategory()
	{
		require_once ('class.db.php');
		$database=new DB();
		$array=$database->get_results("SELECT * FROM categories");
		return $array;

	}
	public function m_deltailcategory($category_id)
	{
		require_once ('class.db.php');
		$database1=new DB();
		$array=$database1->get_results("SELECT * FROM deltail_category WHERE category_idpk='$category_id'");
		return $array;
	}
	public function m_getproduct()
	{
		require_once('class.db.php');
		$database2=new DB();
		$array=$database2->get_results("SELECT * FROM products");
		return $array;
	}
	public function m_getproductid($product_id)
	{
		require_once ('class.db.php');
		$database4=new DB();
		$array=$database4->get_results("SELECT * FROM products WHERE deltail_category_id='$product_id'");
		return $array;
	}
	public function m_getproductpost($post)
	{
		require_once ('class.db.php');
		$database4=new DB();
		$array=$database4->get_results("SELECT * FROM products WHERE product_name LIKE '%$post%'");
		return $array;
	}
	public function m_getrow($product_id)
	{
		require_once ('class.db.php');
		$database5=new DB();
		$array=$database5->get_results("SELECT * FROM products WHERE product_id ='$product_id'");
		return $array;
	}
	public function m_getdeltail_product($product_id)
	{
		require_once ('class.db.php');
		$database5=new DB();
		$array=$database5->get_results("SELECT * FROM deltail_product WHERE product_id ='$product_id'");
		return $array;
	}

}

?>
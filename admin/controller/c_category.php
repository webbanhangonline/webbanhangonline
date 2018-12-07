<?php
class c_categoryadmin
{
	public function getcategory()
	{
		require('./model/m_getcategory.php');
		$m_getcategory=new m_categoryadmin();
		$a=$m_getcategory->get_category();
		return $a;
	}
	public function getcategoryid($id)
	{
		require('./model/m_getcategory.php');
		$m_getcategory=new m_categoryadmin();
		$a=$m_getcategory->get_categoryid($id);
		return $a;
	}
	public function getdeltailcategory()
	{
		require('./model/m_getcategory.php');
		$m_getcategory=new m_categoryadmin();
		$a=$m_getcategory->get_deltailcategoryid();
		return $a;
	}


}
?>
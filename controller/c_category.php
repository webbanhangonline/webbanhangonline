<?php
class c_category
{
	public function getindex()
	{
		 require_once ('./model/m_category.php');
		$a=new m_category();
		$array=$a->m_getcategory();
		return $array;
	}
	public function getcateid($category_id)
	{
		 require_once ('./model/m_category.php');
		$a=new m_category();
		$array=$a->m_deltailcategory($category_id);
		return $array;
	}
	public function getproduct()
	{
		 require_once ('./model/m_category.php');
		$a=new m_category();
		$array=$a->m_getproduct();
		return $array;
	}
	public function getproductid($deltail_category_id)
	{
		require_once ('./model/m_category.php');
		$a=new m_category();
		$array=$a->m_getproductid($deltail_category_id);
		return $array;
	}
	public function getproductpost($post)
	{
		require_once ('./model/m_category.php');
		$a=new m_category();
		$array=$a->m_getproductpost($post);
		return $array;
	}
	public function getrow($product_id)
	{
		require_once ('./model/m_category.php');
		$a=new m_category();
		$array=$a->m_getrow($product_id);
		return $array;
	}
	public function getrows($product_id)
	{
		require_once ('../model/m_category.php');
		$a=new m_category();
		$array=$a->m_getrow($product_id);
		return $array;
	}
	public function getdeltailproduct($product_id)
	{
		require_once ('./model/m_category.php');
		$a=new m_category();
		$array=$a->m_getdeltail_product($product_id);
		return $array;
	}

}
?>
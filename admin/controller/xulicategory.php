<?php
require('../class/class.db.php');
$db=new DB();
if($_SERVER['REQUEST_METHOD']=="POST")
{



	
	if(!empty($_POST['namecategory'])){
		$namecategory= $_POST['namecategory'];
		$data=array(
			'categry_name'=>$namecategory
			);
		$db->insert('categories',$data);
	}
	if(!empty($_POST['deltail_category'])&&!empty($_POST['category']))
	{
		$deltail_category=$_POST['deltail_category'];
		$idcategory=$_POST['category'];

		$data=array(
			'deltail_category_name'=>$deltail_category,
			'category_idpk'=>$idcategory
			);
		$db->insert('deltail_category',$data);

	}
}
if(!empty($_GET['delete']))
{
	echo $_GET['delete'];
	$where=array(
			'category_id'=>$_GET['delete']
		);
	$db->delete('categories',$where,1);

}
if(!empty($_GET['deleteid']))
{
	echo $_GET['deleteid'];
	$where=array(
			'deltail_category_id'=>$_GET['deleteid']
		);
	$db->delete('deltail_category',$where,1);

}
if(!empty($_GET['idupdate']))
{
	echo $_GET['idupdate'];
	echo $_POST['newcategory'];
	echo $_POST['newcategory'];
	$update=array(
			'categry_name'=>$_POST['newcategory']
		);
	$update_where=array(
			'category_id'=>$_GET['idupdate']
		);
	$db->update( 'categories', $update, $update_where, 1 );
}
header('Location: ../categories.php');
?>
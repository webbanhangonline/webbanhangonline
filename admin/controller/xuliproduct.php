<?php
require('../class/class.db.php');
$db=new DB();
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$pro_name=$_POST['pro_name'];
	$pro_quantity=$_POST['pro_quantity'];
	$pro_price=$_POST['pro_price'];
	$pro_image=$_POST['pro_image'];
	$pro_image1=$_POST['pro_image1'];
	$pro_image2=$_POST['pro_image2'];
	$pro_image3=$_POST['pro_image3'];
	$category=$_POST['category'];
	


	$data=array(
			'product_name'=>$pro_name,
			'product_quantity'=>$pro_quantity,
			'product_price'=>$pro_price,
			'product_image'=>'img/product-img/'.$pro_image,
			'deltail_category_id'=>$category
			);
		$db->insert('products',$data);
		$product_id=$db->get_row("SELECT * FROM `products` WHERE product_id=(SELECT MAx(product_id) FROM `products`)");
		$data1=array(
			'deltail_product_image'=>'img/product-img/'.$pro_image1,
			'product_id'=>$product_id[0]
			);
		$data2=array(
			'deltail_product_image'=>'img/product-img/'.$pro_image2,
			'product_id'=>$product_id[0]
			);
		$data3=array(
			'deltail_product_image'=>'img/product-img/'.$pro_image3,
			'product_id'=>$product_id[0]
			);
		$db->insert('deltail_product',$data1);
		$db->insert('deltail_product',$data2);
		$db->insert('deltail_product',$data3);


}
if(!empty($_GET['delete']))
{
	echo $_GET['delete'];
	$where=array(
			'product_id'=>$_GET['delete']
		);
	$db->delete('products',$where,1);

}
header('Location: ../product.php');
?>
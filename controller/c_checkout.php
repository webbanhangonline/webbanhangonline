<?php
session_start();
require_once ('../model/class.db.php');
require('c_category.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$firtname=$_POST['first_name'];
	$lastname=$_POST['last_name'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	echo $email;
	$database=new DB();

	$data=array(
		'firstname'=>$firtname,
		'lastname'=>$lastname,
		'address'=>$address,
		'phone'=>$phone,
		'email'=>$email,
		'order_time'=>(new \DateTime())->format('Y-m-d H:i:s')
		);
	$database->insert('`order`',$data);
	$row=$database->get_row("SELECT * FROM `order` WHERE id=(SELECT MAx(id) FROM `order`)");
	var_dump($row);
	if(!empty($_SESSION['cart'])){

		foreach ($_SESSION['cart'] as $key1 ) {



			$a=new c_category();
			$array=$a->getrows($key1['id']);
			foreach ($array as $key) {








				$data1=array(

					'product_idpk'=>$key1['id'],
					'quantity'=>$key1['quantity'],
					'price'=>$key['product_price'],
					'order_id'=>$row[0]


					);
				$database->insert('`order_product`',$data1);



			}
		}
	}
	unset($_SESSION['cart']);
	header('Location: ../checkoutthanhcong.php');
}
			?>
<?php

require('./controller/c_addcart.php');
require('./controller/c_category.php');
$tong=0;
if(!empty($_GET['delete']))
{

    unset($_SESSION['cart'][$_GET['delete']]);






}
if(!empty($_SESSION['cart'])){
    foreach ($_SESSION['cart'] as $key1 ) {



     $a=new c_category();
     $array=$a->getrow($key1['id']);
     foreach ($array as $key) {


        $tong+=$key['product_price']*$key1['quantity'];
    }}}

    if(!empty($_GET['sl'])&&!empty($_GET['idma']))
    {
        $_SESSION['cart'][$_GET['idma']]['quantity'] =$_GET['sl'];
        if(!empty($_SESSION['cart'])){
            foreach ($_SESSION['cart'] as $key1 ) {



             $a=new c_category();
             $array=$a->getrow($key1['id']);
             foreach ($array as $key) {


                $tong+=$key['product_price']*$key1['quantity'];

            }}}
        }

        ?>
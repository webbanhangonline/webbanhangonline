<?php
session_start();
if(array_key_exists('value', $_GET)&&$_GET['value'])
{
    $product_id=$_GET['value'];
    if(array_key_exists('cart', $_SESSION))
    {
        if(array_key_exists($product_id, $_SESSION['cart']))
        {
            $_SESSION['cart'][$product_id]['quantity'] +=1;
        }
        else
        {
            $_SESSION['cart'][$product_id]=array(
                'id'=>$product_id,
                'quantity'=>1,
                );
        }
    }
    else{
        $_SESSION['cart'][$product_id]=array(
            'id'=>$product_id,
            'quantity'=>1,
            );

    }
}



?>
<?php
    require('./controller/c_addcart.php');
require('./controller/c_category.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Essence - Fashion Ecommerce Template</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="index.php"><img src="img/core-img/logo.png" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="#">Shop</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Women's Collection</li>
                                        <li><a href="shop.php">Dresses</a></li>
                                        <li><a href="shop.php">Blouses &amp; Shirts</a></li>
                                        <li><a href="shop.php">T-shirts</a></li>
                                        <li><a href="shop.php">Rompers</a></li>
                                        <li><a href="shop.php">Bras &amp; Panties</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Men's Collection</li>
                                        <li><a href="shop.php">T-Shirts</a></li>
                                        <li><a href="shop.php">Polo</a></li>
                                        <li><a href="shop.php">Shirts</a></li>
                                        <li><a href="shop.php">Jackets</a></li>
                                        <li><a href="shop.php">Trench</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Kid's Collection</li>
                                        <li><a href="shop.php">Dresses</a></li>
                                        <li><a href="shop.php">Shirts</a></li>
                                        <li><a href="shop.php">T-shirts</a></li>
                                        <li><a href="shop.php">Jackets</a></li>
                                        <li><a href="shop.php">Trench</a></li>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="img/bg-img/bg-6.jpg" alt="">
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop.php">Shop</a></li>
                                    <li><a href="single-product-details.html">Product Details</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="single-blog.html">Single Blog</a></li>
                                    <li><a href="regular-page.html">Regular Page</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                <div class="favourite-area">
                    <a href="#"><img src="img/core-img/heart.svg" alt=""></a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="#"><img src="img/core-img/user.svg" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt=""> <span><?php echo count($_SESSION['cart']);?></span></span></a>
                </div>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Right Side Cart Area ##### -->
   <!-- <div class="cart-bg-overlay"></div>
   
            <div class="right-side-cart-area ">
   
                Cart Button
                <div class="cart-button">
                    <a href="#" id="rightSideCart"><img src="img/core-img/bag.svg" alt=""> <span><?php echo count($_SESSION['cart']);?></span></a>
                </div>
   
                <div class="cart-content d-flex">
   
                    Cart List Area
   
                    <div class="cart-list">
                        Single Cart Item
                        <?php 
   
   
                        if(!empty($_GET['delete']))
                        {
   
                            unset($_SESSION['cart'][$_GET['delete']]);
                           
                            
   
   
   
   
                        }
   
                        if(!empty($_SESSION['cart'])){
   
                            foreach ($_SESSION['cart'] as $key1 ) {
   
   
   
                             $a=new c_category();
                             $array=$a->getrow($key1['id']);
                             foreach ($array as $key) {
   
   
   
   
   
   
   
                                 ?>
                                 <div class="single-cart-item">
                                    <a href="#" class="product-image">
                                        <img src="<?php echo $key['product_image'];?>" class="cart-thumb" alt="">
                                        Cart Item Desc
                                        <div class="cart-item-desc">
                                          <a href="shop.php?delete=<?php echo $key['product_id'];?>"><span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span></a>
                                          <span class="badge">Mango</span>
                                          <h6><?php echo $key['product_name'];?></h6>
                                          <p class="size">Size: S</p>
                                          <p class="color">Số lượng: <input style="width: 60%;float: right;" name="sl_<?php echo $key['product_id'];?>" type="number" class="form-control" id="sl_<?php echo $key['product_id'];?>" min="0" value="<?php echo $key1['quantity']?>"></p>
                                          <p class="price" > Gía:&nbsp;<span id="<?php echo $key['product_price'];?>" ><?php echo $key['product_price'];?></span>đ</p>
                                         
                                          <a href="javascript:void(0)" onclick="updateItem(<?php echo $key['product_id']; ?>)">Update</a>
                                      </div>
                                  </a>
                              </div>
   
                              <?php  
   
   
   
                          }}} 
                          else
                            {
                                echo "<h3 style='color:red;'>Chưa đặt hàng(0)</h3>";
                                }?>
   
   
                          Single Cart Item
   
                      </div>
   
                      Cart Summary
                      <div class="cart-amount-summary">
   
                        <h2>Tóm Lược</h2>
                        <ul class="summary-table">
   
                            <li><span>Giao Hàng:</span> <span>Free</span></li>
                            <li><span>Giảm Giá:</span> <span>0%</span></li>
                            <li><span>Tổng Tiền:</span> <span><?php
                                if(!empty($_SESSION['cart'])){
                                    $tong=0;
                                    foreach ($_SESSION['cart'] as $key1 ) {
   
   
   
                                     $a=new c_category();
                                     $array=$a->getrow($key1['id']);
                                     foreach ($array as $key) {
   
   
                                        $tong+=$key['product_price']*$key1['quantity'];
                                    }}}
                                    else
                                    {
                                        $tong=0;
                                    }
                                    echo $tong;
   
   
   
   
                                    ?>đ</span></li>
                                </ul>
                                <div class="checkout-btn mt-100">
                                    <a href="checkout.php" class="btn essence-btn">check out</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- ##### Right Side Cart End ##### -->
    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Checkout</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Checkout Area Start ##### -->
    <div class="checkout_area section-padding-80">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-page-heading mb-30">
                            <h5>Billing Address</h5>
                        </div>

                        <form action="controller/c_checkout.php" method="post">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="first_name">First Name <span>*</span></label>
                                    <input type="text" class="form-control" name="first_name" value="" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="last_name">Last Name <span>*</span></label>
                                    <input type="text" class="form-control" name="last_name" value="" required>
                                </div>
                                
                                
                                <div class="col-12 mb-3">
                                    <label for="street_address">Address <span>*</span></label>
                                    <input type="text" class="form-control mb-3" name="address" value="">
                                    
                                </div>
                               
                               
                                
                                <div class="col-12 mb-3">
                                    <label for="phone_number">Phone No <span>*</span></label>
                                    <input type="number" class="form-control" name="phone" min="0" value="">
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="email_address">Email Address <span>*</span></label>
                                    <input type="email" class="form-control" name="email" value="">
                                </div>
                                <div class="col-12 mb-4">
                                     <button type="submit" class="btn essence-btn">Place Order</button>
                                </div>

                                
                            </div>
                        
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                    <div class="order-details-confirmation">

                        <div class="cart-page-heading">
                            <h5>Your Order</h5>
                            <p>The Details</p>
                        </div>
                        <?php
                            $tong=0;
                             if(!empty($_SESSION['cart'])){
                                    
                                    foreach ($_SESSION['cart'] as $key1 ) {
   
   
   
                                     $a=new c_category();
                                     $array=$a->getrow($key1['id']);
                                     foreach ($array as $key) {
   
   
                                        $tong+=$key['product_price']*$key1['quantity'];
                                   
                                
   
                        ?>
            
                        <ul class="order-details-form mb-4">
                            <li><span>Sản phẩm</span> <span><?php echo $key['product_name'] ; ?></span></li>
                           <li><span>Giá</span> <span><?php echo number_format($key['product_price'],0,',',',');?></span></li>
                            <li><span>Số Lượng</span> <span><?php echo $key1['quantity'];?></span></li>
                            
                            <li><span >Thành tiền</span> <span><?php echo number_format($key['product_price']*$key1['quantity'],0,',',',');?></span></li>
                        </ul>
                        <?php  }}}?>
                        <ul class="order-details-form mb-4">
                           <li><span style="color:red;">Total</span> <span style="color:red;"><?php echo number_format($tong,0,',',',');?>đ</span></li>
                        </ul>

                        

                       
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Checkout Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area d-flex mb-30">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="shop.php">Shop</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area mb-30">
                        <ul class="footer_widget_menu">
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Payment Options</a></li>
                            <li><a href="#">Shipping and Delivery</a></li>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row align-items-end">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_heading mb-30">
                            <h6>Subscribe</h6>
                        </div>
                        <div class="subscribtion_form">
                            <form action="#" method="post">
                                <input type="email" name="mail" class="mail" placeholder="Your email here">
                                <button type="submit" class="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_social_area">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>

<div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
            
        </div>


    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>
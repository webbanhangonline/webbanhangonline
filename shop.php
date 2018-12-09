<?php
require ('controller/shopcart.php');






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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        function updateItem(id)
        {

            var sl=$("#sl_"+id).val();


            $.get("shop.php?idma="+id+"&sl="+sl,function(data)
            {
                location.reload();
                var cartbtn1 = $('#essenceCartBtn');
                var cartOverlay = $(".cart-bg-overlay");
                var cartWrapper = $(".right-side-cart-area");
                var cartbtn2 = $("#rightSideCart");
                var cartOverlayOn = "cart-bg-overlay-on";
                var cartOn = "cart-on";
                cartOverlay.toggleClass(cartOverlayOn);
                cartWrapper.toggleClass(cartOn);
            });
        }
    </script>



</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <?php
    if(!isset($_SESSION['username']))
        {?>
    <script>
        $(document).ready(function(){
            $("#myBtn").click(function(){
                $("#myModal").modal();
            });
        });
    </script>
    <?php

}
if(isset($_SESSION['error']))
{
    ?>
    <script>
        $(document).ready(function(){

            $("#myModal").modal();
            $("#thongbao").text("Đăng Nhập Thất Bại!!!!");


        });
    </script>
    <?php
}
?>
  <script>
        $(document).ready(function(){
            $("#btnlogout").click(function(){
                alert("Đăng Xuất");

            });
        });
    </script>
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
                             <?php


                                         $a=new c_category();
                                         $array=$a->getindex();

                                         foreach ($array as $key) {
                                             ?>
                                <ul class="single-mega cn-col-4">
                                    <li class="title"><?php echo $key['categry_name'];?></li>
                                    <?php
                                                    $array1=$a->getcateid($key['category_id']);
                                                    foreach ($array1 as $key1) {
                                                # code...

                                                        ?>
                                     <li><a href="shop.php?id=<?php echo $key1['deltail_category_id'];?>"><?php echo $key1['deltail_category_name'];?></a></li>
                                    <?php } ?>
                                </ul>
                               <?php  } ?>
                                <div class="single-mega cn-col-4">
                                    <img src="img/bg-img/bg-6.jpg" alt="">
                                </div>
                            </div>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="index.php">Shop</a></li>
                                
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
                <form action="shop.php" method="POST">
                    <input type="search" name="name" id="headerSearch" placeholder="Type for search">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <!-- Favourite Area -->
            <div class="favourite-area">
                <a href="#"><img src="img/core-img/heart.svg" alt=""></a>
            </div>
            <!-- User Login Info -->
            <div class="user-login-info">
                <a href="#" id="myBtn"><img src="img/core-img/user.svg" alt=""> <?php if(isset($_SESSION['username']))
                    {
                        echo $_SESSION['username'];

                    }?></a>
                </div>
                <div class="favourite-area" id="logout">
                <a href="controller/checklogin.php?logout=1" id="btnlogout"><img src="img/core-img/logout.png" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt=""> <span><?php   if(!empty($_SESSION['cart'])){echo count($_SESSION['cart']);}
                   
                   
                    ?></span></a>
                </div>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area ">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="img/core-img/bag.svg" alt=""> <span><?php  if(!empty($_SESSION['cart'])){ echo count($_SESSION['cart']); }?></span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->

            <div class="cart-list">
                <!-- Single Cart Item -->
                <?php 




                if(!empty($_SESSION['cart'])){

                    foreach ($_SESSION['cart'] as $key1 ) {



                       $a=new c_category();
                       $array=$a->getrow($key1['id']);
                       foreach ($array as $key) {







                           ?>
                           <div class="single-cart-item">
                            <a href="#" class="product-image">
                                <img src="<?php echo $key['product_image'];?>" class="cart-thumb" alt="">
                                <!-- Cart Item Desc -->
                                <div class="cart-item-desc">
                                  <a href="shop.php?delete=<?php echo $key['product_id'];?>"><span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i>Delete</span></a>
                                  <span class="badge"></span>
                                  <h6><?php echo $key['product_name'];?></h6>
                                  <p class="size">Size: S</p>
                                  <p class="color">Số lượng: <input style="width: 60%;float: right;" name="sl_<?php echo $key['product_id'];?>" type="number" class="form-control" id="sl_<?php echo $key['product_id'];?>" min="0" value="<?php echo $key1['quantity']?>"></p>
                                  <p class="price" > Gía:&nbsp;<span id="<?php echo $key['product_price'];?>" ><?php echo number_format($key['product_price'],0,',',',');?></span>đ</p>

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


                <!-- Single Cart Item -->

            </div>

            <!-- Cart Summary -->
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
                            echo number_format($tong,0,',',',');




                            ?>đ</span></li>
                        </ul>
                        <div class="checkout-btn mt-100">
                            <a href="checkout.php" class="btn essence-btn">check out</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ##### Right Side Cart End ##### -->

            <!-- ##### Breadcumb Area Start ##### -->
            <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="page-title text-center">
                                <h2>dresses</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ##### Breadcumb Area End ##### -->

            <!-- ##### Shop Grid Area Start ##### -->
            <section class="shop_grid_area section-padding-80">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="shop_sidebar_area">

                                <!-- ##### Single Widget ##### -->
                                <div class="widget catagory mb-50">
                                    <!-- Widget Title -->
                                    <h6 class="widget-title mb-30">Catagories</h6>

                                    <!--  Catagories  -->
                                    <div class="catagories-menu">
                                        <ul id="menu-content2" class="menu-content collapse show">
                                         <?php


                                         $a=new c_category();
                                         $array=$a->getindex();

                                         foreach ($array as $key) {
                                             ?>
                                             <li data-toggle="collapse" data-target="#clothing">
                                                <a href="#"><?php echo $key['categry_name'];?></a>
                                                <ul class="sub-menu collapse show" id="clothing">
                                                    <?php
                                                    $array1=$a->getcateid($key['category_id']);
                                                    foreach ($array1 as $key1) {
                                                # code...

                                                        ?>
                                                        <li><a href="shop.php?id=<?php echo $key1['deltail_category_id'];?>"><?php echo $key1['deltail_category_name'];?></a></li>
                                                        <?php } ?>

                                                    </ul>
                                                </li>
                                                <?php }
                                                ?>
                                                <!-- Single Item -->

                                            </ul>
                                        </div>
                                    </div>

                                    <!-- ##### Single Widget ##### -->
                                    <div class="widget price mb-50">
                                        <!-- Widget Title -->
                                        <h6 class="widget-title mb-30">Filter by</h6>
                                        <!-- Widget Title 2 -->
                                        <p class="widget-title2 mb-30">Price</p>

                                        <div class="widget-desc">
                                            <div class="slider-range">
                                                <div data-min="49" data-max="360" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="49" data-value-max="360" data-label-result="Range:">
                                                    <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                                </div>
                                                <div class="range-price">Range: $49.00 - $360.00</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ##### Single Widget ##### -->
                                    <div class="widget color mb-50">
                                        <!-- Widget Title 2 -->
                                        <p class="widget-title2 mb-30">Color</p>
                                        <div class="widget-desc">
                                            <ul class="d-flex">
                                                <li><a href="#" class="color1"></a></li>
                                                <li><a href="#" class="color2"></a></li>
                                                <li><a href="#" class="color3"></a></li>
                                                <li><a href="#" class="color4"></a></li>
                                                <li><a href="#" class="color5"></a></li>
                                                <li><a href="#" class="color6"></a></li>
                                                <li><a href="#" class="color7"></a></li>
                                                <li><a href="#" class="color8"></a></li>
                                                <li><a href="#" class="color9"></a></li>
                                                <li><a href="#" class="color10"></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- ##### Single Widget ##### -->
                                    <div class="widget brands mb-50">
                                        <!-- Widget Title 2 -->
                                        <p class="widget-title2 mb-30">Brands</p>
                                        <div class="widget-desc">
                                            <ul>
                                                <li><a href="#">Asos</a></li>
                                                <li><a href="#">Mango</a></li>
                                                <li><a href="#">River Island</a></li>
                                                <li><a href="#">Topshop</a></li>
                                                <li><a href="#">Zara</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-8 col-lg-9">
                                <div class="shop_grid_product_area">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="product-topbar d-flex align-items-center justify-content-between">
                                                <!-- Total Products -->
                                                <div class="total-products">
                                                    <p><span>186</span> products found</p>
                                                </div>
                                                <!-- Sorting -->
                                                <div class="product-sorting d-flex">
                                                    <p>Sort by:</p>
                                                    <form action="#" method="get">
                                                        <select name="select" id="sortByselect">
                                                            <option value="value">Highest Rated</option>
                                                            <option value="value">Newest</option>
                                                            <option value="value">Price: $$ - $</option>
                                                            <option value="value">Price: $ - $$</option>
                                                        </select>
                                                        <input type="submit" class="d-none" value="">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <!-- Single Product -->
                                        <?php
                                        if($_SERVER['REQUEST_METHOD']=="POST")
                                        {
                                           $name=$_POST['name'];
                                           $arrproduct=$a->getproductpost($name);
                                       }

                                       else if(!empty($_GET['id'])){
                                        $arrproduct=$a->getproductid($_GET['id']);
                                    }
                                    else{
                                        $arrproduct=$a->getproduct();
                                    }

                                    foreach ($arrproduct as $key) {
                        # code...
                        # 



                                        ?>
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="single-product-wrapper">
                                                <!-- Product Image -->
                                                <div class="product-img">
                                                    <img src="<?php echo $key['product_image']; ?>" alt="">
                                                    <!-- Hover Thumb -->
                                                    <img class="hover-img" src="<?php echo $key['product_image'];?>" alt="">

                                                    <!-- Product Badge -->
                                                    <div class="product-badge offer-badge">
                                                        <span>-30%</span>
                                                    </div>
                                                    <!-- Favourite -->
                                                    <div class="product-favourite">
                                                        <a href="#" class="favme fa fa-heart"></a>
                                                    </div>
                                                </div>

                                                <!-- Product Description -->
                                                <div class="product-description">
                                                    <span>topshop</span>
                                                    <a href="single-product-details.php?id=<?php echo $key['product_id'];?>">
                                                        <h6><?php echo $key['product_name'];?></h6>
                                                    </a>
                                                    <p class="product-price"><span class="old-price">$75.00</span> <?php echo number_format($key['product_price'],0,',',',');?> đ</p>

                                                    <!-- Hover Content -->
                                                    <div class="hover-content">
                                                        <!-- Add to Cart -->
                                                        <div class="add-to-cart-btn">
                                                            <a href="shop.php?value=<?php echo $key['product_id'];?>" class="btn essence-btn">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <!-- Single Product -->


                                    </div>
                                </div>
                                <!-- Pagination -->
                                <nav aria-label="navigation">
                                    <ul class="pagination mt-50 mb-70">
                                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link" href="#">21</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ##### Shop Grid Area End ##### -->
                <div class="container">

                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="padding:35px 50px;">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                      </div>
                      <div class="modal-body" style="padding:40px 50px;">
                          <form role="form" action="controller/checklogin.php" method="post">
                            <div class="form-group">
                              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                              <input type="text" class="form-control" name="username" placeholder="Enter email">
                          </div>
                          <div class="form-group">
                              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                              <input type="password" class="form-control" name="psw" placeholder="Enter password">
                          </div>
                          <div class="checkbox">
                              <label><input type="checkbox" value="" checked>Remember me</label>
                          </div>
                          <div id="thongbao" style="color:red">

                          </div>
                          <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                      </form>
                  </div>
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                      <p>Not a member? <a href="register.php">Sign Up</a></p>
                      <p>Forgot <a href="#">Password?</a></p>
                  </div>
              </div>

          </div>
      </div> 
  </div>
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
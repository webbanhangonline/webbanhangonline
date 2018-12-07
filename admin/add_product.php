
<!Doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="">
                        <p>Thêm Sản Phẩm<p>
                        </a>
                    </div>
                    <div class="login-form">
                        
                        <form method="POST" action="controller/xuliproduct.php">
                            <div class="form-group">
                                <label>Tên Sản Phẩm</label>
                                <input type="text" class="form-control" placeholder="Tên Sản Phẩm" name="pro_name">

                            </div>
                             <div class="form-group">
                                <label>Số Lượng</label>
                                <input type="text" class="form-control" placeholder="Số Lượng" name="pro_quantity">

                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input type="text" class="form-control" placeholder="Giá" name="pro_price">

                            </div>
                             <div class="form-group">
                                <label>Ảnh</label>
                                <input type="file" class="form-control" placeholder="Ảnh" name="pro_image">

                            </div>
                            <div class="form-group">
                                <label>Chọn Ảnh Chi Tiết</label>
                                
                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input type="file" class="form-control" placeholder="Ảnh" name="pro_image1">

                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input type="file" class="form-control" placeholder="Ảnh" name="pro_image2">

                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input type="file" class="form-control" placeholder="Ảnh" name="pro_image3">

                            </div>

                                    <div class="form-group">
                                        <label>Chọn Tên Danh Mục Chính</label>
                                        <select name="category" class="form-control" >
                                            <?php 
                                            require('controller/c_category.php');
                                            $c_category=new c_categoryadmin();
                                            $arr=$c_category->getdeltailcategory();
                                            foreach ($arr as $key) {

                                                ?>
                                                <option value="<?php echo $key['deltail_category_id'];?>"><?php echo $key['deltail_category_name'];?></option>
                                                <?php } ?>

                                            </select>
                                        </div>


                                        <input type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" value="Thêm Sản Phẩm">

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
                    <script src="assets/js/popper.min.js"></script>
                    <script src="assets/js/plugins.js"></script>
                    <script src="assets/js/main.js"></script>


                </body>
                </html>

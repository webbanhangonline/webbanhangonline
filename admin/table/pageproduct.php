<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Table</a></li>
                    <li class="active">Data table</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Quản Lí Sản Phẩm</strong>
                        <a href="add_product.php" style="float: right;font-size: 20px;color: green;"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
                    </div>
                    <div class="card-body">
                      <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Image</th>
                            <th>Setup</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require('class/class.db.php');
                        $db=new DB();
                        $a=$db->get_results("SELECT * FROM products");

                        foreach($a as $row){
                            ?>
                            <tr>
                                <td><?php echo $row['product_id']; ?></td>
                                <td><?php echo $row['product_name']; ?></td>
                                <td><?php echo $row['product_quantity']; ?></td>
                                <td><?php echo $row['product_price']; ?></td>
                                <td><img style="width: 80%;" src="<?php echo $row['product_image']; ?>"></td>
                                <td>
                                <?php
                        
                        $product_id=$row['product_id'];
                        $b=$db->get_results("SELECT * FROM deltail_product WHERE product_id='$product_id'");

                        foreach($b as $row1){
                            ?>
                                <img style="width: 20%;" src="<?php echo $row1['deltail_product_image']; ?>">
                                   <?php } ?>
                                </td>
                                <td> <a href="controller/xuliproduct.php?delete=<?php echo $row['product_id'];?>">
                                  <span class="fa fa-trash-o" style="color:red;"></span>
                              </a>
                              
                              <a href="#">
                                  <span class="fa fa-pencil-square-o" style="color:blue ;margin-left: 10px;"></span>
                              </a>
                          </td>
                      </tr>
                      <?php } ?>
                  </tbody>
              </table>
          </div>
      </div>
  </div>


</div>
</div><!-- .animated -->
</div><!-- .content -->


</div>
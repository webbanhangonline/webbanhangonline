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
                        <strong class="card-title">Quản Lí Hóa Đơn</strong>
                        
                    </div>
                    <div class="card-body">
                      <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Mã Hóa Đơn</th>
                            <th>Họ</th>
                            <th>Tên</th>
                           
                            
                            <th>Tên Sản Phẩm Mua</th>
                            <th>Số Lượng Mua</th>
                            <th>Giá</th>
                             <th>Ngày Đặt Hàng</th>
                           
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require('class/class.db.php');
                        $db=new DB();
                        $a=$db->get_results("SELECT * FROM `order`");

                        foreach($a as $row){
                            ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                             
                                <td>
                                  <?php
                                $id= $row['id'];
                                 $b=$db->get_results("SELECT product_idpk FROM `order_product` WHERE order_id='$id'");
                                  foreach($b as $row1){

                               ?>
                                  <ul>
                                  <li style="list-style-type: none;"><?php 
                                  $idpro=$row1['product_idpk'];
                                      $c=$db->get_results("SELECT product_name FROM `products` WHERE product_id='$idpro'");
                                       foreach($c as $row2){
                                        echo $row2['product_name'];
                                       }

                                  ?>
                                     

                                  </li>
                                  </ul>
                                    <?php
                              }
                              ?>
                                </td>
                              
                                
                                <td>
                                   <?php
                                $id= $row['id'];
                                 $b=$db->get_results("SELECT quantity FROM `order_product` WHERE order_id='$id'");
                                  foreach($b as $row1){

                               ?>
                                  <ul>
                                  <li style="list-style-type: none;"><?php echo $row1['quantity'];?></li>
                                  </ul>
                                    <?php
                              }
                              ?>
                                </td>
                                <td>
                                  <?php
                                $id= $row['id'];
                                 $b=$db->get_results("SELECT price FROM `order_product` WHERE order_id='$id'");
                                  foreach($b as $row1){

                               ?>
                                  <ul>
                                  <li style="list-style-type: none;"><?php echo $row1['price'];?>đ</li>
                                  </ul>
                                    <?php
                              }
                              ?>
                                </td>
                                <td><?php echo $row['order_time']; ?></td>

                                
                                
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
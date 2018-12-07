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
                        <strong class="card-title">Quản Lí Danh Mục</strong>
                        <a href="add_category.php" style="float: right;font-size: 20px;color: green;"><i class="fa fa-plus" aria-hidden="true"></i></a>
                    </div>
                    <div class="card-body">
                      <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Deltail category</th>
                            
                            <th>Setup</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require('class/class.db.php');
                        $db=new DB();
                        $a=$db->get_results("SELECT * FROM categories");
                       

                        foreach($a as $row){
                            ?>
                            <tr>
                                <td><?php echo $row['category_id']; ?></td>
                                <td><?php echo $row['categry_name']; ?></td>

                                <td>
                                   <?php 
                                $id=$row['category_id'];
                                 $b=$db->get_results("SELECT * FROM deltail_category WHERE category_idpk='$id'");

                                 foreach($b as $row1){?><ul>

                                <li style="list-style-type: none;"><?php echo $row1['deltail_category_name']; ?><a href="controller/xulicategory.php?deleteid=<?php echo $row1['deltail_category_id'];?>">
                                  <span class="fa fa-trash-o" style="color:red;"></span>
                              </a></li>
                                </ul>

                                  <?php } ?>
                                </td>
                                
                                
                                <td> <a href="controller/xulicategory.php?delete=<?php echo $row['category_id'];?>">
                                  <span class="fa fa-trash-o" style="color:red;"></span>
                              </a>
                              
                              <a href="update_category.php?update=<?php echo $row['category_id'];?>">
                                  <span class="fa fa-pencil-square-o" style="color:blue;margin-left: 10px;"></span>
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
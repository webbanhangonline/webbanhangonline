<?php
 require_once('class/class.db.php');
if(!empty($_GET['id']))
{
  
    $db1=new DB();
    $update = array( 'user_author' =>$_POST['quyen']);
    $update_where = array( 'user_id' => $_GET['id']);
     $db1->update( 'users', $update, $update_where, 1 );

}
if(!empty($_GET['delete']))
{
  $database=new DB();
  $where = array( 'user_id' => $_GET['delete']);
  $database->delete( 'users
    ', $where, 1 );
}
?>
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
                        <strong class="card-title">Quản Lí Người Khách Hàng</strong>
                        
                    </div>
                    <div class="card-body">
                      <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                          <th>Id</th>
                           <th>Họ và tên</th>
                            <th>Tên đăng nhập</th>
                            
                            <th>Mật Khẩu</th>
                            <th>Email</th>
                            <th>Quyền</th>
                           
                            <th>Setup</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        $db=new DB();
                        $a=$db->get_results("SELECT * FROM users");

                        foreach($a as $row){
                            ?>
                            <tr>

                               <td><?php echo $row['user_id']; ?></td>
                               <td><?php echo $row['user_fullname']; ?></td>
                                <td><?php echo $row['user_name']; ?></td>
                               
                                <td><?php echo $row['user_password']; ?></td>
                                 <td><?php echo $row['user_email']; ?></td>
                                 <td>
                                  <form method="post" action="tables-data.php?id=<?php echo $row['user_id']; ?>">
                                   <select name="quyen" >
                                      
                                     <option ><?php echo $row['user_author']; ?></option>

                                     <?php
                                     if($row['user_author']=='admin')
                                     {
                                      ?>
                                        <option >user</option>
                                      <?php
                                     }
                                     else
                                     {
                                      ?>
                                         <option >admin</option>
                                      <?php
                                     }
                                   
                                   ?>
                                     
                                     
                                   </select>
                                   <input type="submit" value="Sửa">
                                   </form>
                                 </td>
                               
                                <td> <a href="tables-data.php?delete=<?php echo $row['user_id']; ?>">
                                  <span class="fa fa-trash-o" style="color:red;"></span>
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
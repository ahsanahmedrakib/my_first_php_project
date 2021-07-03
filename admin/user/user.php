

<?php
    include '../session.php';
    include '../inc/header.php';
    require "../database.php";
?>

<?php if($_SESSION['type'] != 1) { 

  
      
$url = $base_url."page_404.php";
echo "<script> location.href='".$url."';</script>";

 }
?>

<div class= col-md-12>
<?php include '../message.php';?>
    <div class="panel panel-primary">

                <div class="panel-heading">
                            <div class="col-md-9 heading_title">User</div>
                             <div class="clearfix"></div>
                        </div>


                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"><a href="#add" aria-controls="add" role="tab" data-toggle="tab">Add</a></li>
                    <li role="presentation" class="active"><a href="#view" aria-controls="view" role="tab" data-toggle="tab">View</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="add">
                    
                    
                          <form class="form-horizontal" action="user_post.php" method="POST" enctype="multipart/form-data">
                              <div class="panel-body">
                                     
                                      <div class="form-group">
                                        <label for="image" class="col-sm-3 control-label">Image</label>
                                        <div class="col-md-6">
                                          <input type="file" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" class="form-control" id="image" placeholder="image">
                                        </div>
                                        <div class="col-md-2"><img id="blah" alt="" width="150" height="150" /></div>
                                      </div>

                                      <div class="form-group">
                                        <label for="name" class="col-sm-3 control-label">Name</label>
                                        <div class="col-md-6">
                                          <input type="text" name="name" class="form-control" id="name" placeholder="name">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group">
                                        <label for="email" class="col-sm-3 control-label">Email</label>
                                        <div class="col-md-6">
                                          <input type="text" name="email" class="form-control" id="email" placeholder="email">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group">
                                        <label for="password" class="col-sm-3 control-label">Password</label>
                                        <div class="col-md-6">
                                          <input type="text" name="password" class="form-control" id="password" placeholder="password">
                                        </div>
                                      </div>

                                      
                                      <div class="form-group">
                                        <label for="type" class="col-sm-3 control-label">Type</label>
                                        <div class="col-md-6">
                                          <select name="type" class="form-control">
                                          <option value="1">Admin</option>
                                          <option value="2">Editor</option>
                                        </select>
                                        </div>
                                        
                                      </div>
                                          
                                      
                                  </div>
                                  <div class="panel text-center">
                                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                              </div>
                            </form>
                    
                    </div>
                           


                    <div role="tabpanel" class="tab-pane active" id="view">
                    
                    <div class="panel-body">
                    
                     
                                <div class="row">
                                                <div class="text-center col-md-12 offset-8">
                                                    <div class="table-responsive">
                                                    <?php
                                                      $select = "SELECT * FROM user";
                                                      $query = mysqli_query($connect, $select);
                                                    ?>
                                                        <table class="table table-bordered">
                                                            <thead class="">
                                                            <tr>
                                                                <th>Image</th>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                                <th>Password</th>
                                                                <th>Type</th>
                                                                <th>Edit</th>
                                                                <?php if($_SESSION['type'] == 1) { ?>
                                                                <th>Delete</th>
                                                                <?php } ?>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php foreach($query as $value) { ?>
                                                                    <tr class="">
                                                                        <td><img style="height: 100px;width: auto;" src="images/<?php echo $value['image']?>" alt=""></td>
                                                                        <td><?php echo $value['name']?></td>
                                                                        <td><?php echo $value['email']?></td>
                                                                        <td><?php echo $value['password']?></td>
                                                                        <td>
                                                                          <?php if($value['type'] == 1){?>
                                                                            Admin
                                                                          <?php
                                                                            }
                                                                            else{?>
                                                                              Editor
                                                                              <?php
                                                                            }     
                                                                          ?>
                                                                        </td>
                                                                        <td><a href="user_edit.php?id=<?php echo $value['id'] ?>"><button class="btn btn-success" type="submit">Edit</button></a></td>
                                                                        
                                                                        <?php if($_SESSION['type'] == 1) { ?>
                                                                        <td><a href="user_delete.php?id=<?php echo $value['id'] ?>"><button class="btn btn-danger" type="submit">Delete</button></a></td>
                                                                        <?php } ?>
                                                                    </tr>
                                                            <?php } ?>
                                                               
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                </div>
                   
                    </div>
                    
                    </div>
                  </div>

    </div> <!-- Panel -->
</div> <!-- col-md-12 -->







<script>
$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>
<?php
  include '../inc/footer.php';
?>







              
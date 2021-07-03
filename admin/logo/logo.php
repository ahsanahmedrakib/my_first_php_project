<?php
    include '../session.php';
    include '../inc/header.php';
    require "../database.php";
?>

<div class= col-md-12>
<?php include '../message.php';?>
    <div class="panel panel-primary">

                <div class="panel-heading">
                            <div class="col-md-9 heading_title">Logo</div>
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
                    
                    
                          <form class="form-horizontal" action="logo_post.php" method="POST" enctype="multipart/form-data">
                              <div class="panel-body">
                                     
                                      <div class="form-group">
                                        <label for="logo" class="col-sm-3 control-label">Logo</label>
                                        <div class="col-md-6">
                                          <input type="file" name="logo" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" class="form-control" id="logo" placeholder="logo">
                                        </div>
                                        <div class="col-md-2"><img id="blah" alt="" width="150" height="150" /></div>
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
                                                <div class="text-center col-md-8 offset-8">
                                                    <div class="table-responsive">
                                                    <?php
                                                      $select = "SELECT * FROM logo";
                                                      $query = mysqli_query($connect, $select);
                                                    ?>
                                                        <table class="table table-bordered">
                                                            <thead class="">
                                                            <tr>
                                                                <th>Image</th>
                                                                <th>Edit</th>
                                                                <?php if($_SESSION['type'] == 1) { ?>
                                                                <th>Delete</th>
                                                                <?php } ?>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php foreach($query as $value) { ?>
                                                                    <tr class="">
                                                                        <td><img style="border: 1px solid" src="<?php echo $value['logo'] ?>" alt="" width="20%"></td>
                                                                        <td><a href="logo_edit.php?id=<?php echo $value['id'] ?>"><button class="btn btn-success" type="submit">Edit</button></a></td>
                                                                        <?php if($_SESSION['type'] == 1) { ?>
                                                                        <td><a href="logo_delete.php?id=<?php echo $value['id'] ?>"><button class="btn btn-danger" type="submit">Delete</button></a></td>
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







              
<?php
    include '../session.php';
    include '../inc/header.php';
    require "../database.php";

    $id = $_GET['id'];

    $data = "SELECT * FROM `logo` WHERE `id` = '$id' ";
    $query = mysqli_query($connect, $data);
    $after = mysqli_fetch_assoc($query);
?>


<div class="panel panel-primary">
                
<?php include '../message.php';?>
                <div class="panel-heading">
                            <div class="col-md-9 heading_title">Logo Edit</div>
                             <div class="clearfix"></div>
                        </div>


                

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="logo_add">
                    
                    
                          <form class="form-horizontal" action="logo_edit_post.php" method="POST" enctype="multipart/form-data">
                              <div class="panel-body">
                                      <input type="hidden" name="id" value="<?php echo $id ?>">

                                         <div class="form-group">
                                        <label for="logo" class="col-sm-3 control-label">Logo</label>
                                        <div class="col-md-6">
                                          <input type="file" name="logo" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" class="form-control" id="logo">
                                        </div>
                                        <div class="col-md-2"><img  style="border: 1px solid" src="logo/<?php echo $after['logo'] ?>" id="blah" alt="" width="150" height="150" /></div>
                                      </div>

                                      
                                  </div>
                              <div class="panel text-center">
                                    <button type="submit" name="submit" class="btn btn-sm btn-primary">Submit</button>
                              </div>
                            </form>
                    
                    </div>



                    
                    </div>
                  </div>

    </div>
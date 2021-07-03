<?php
    include '../session.php';
    include '../inc/header.php';
    require "../database.php";

    $id = $_GET['id'];

    $data = "SELECT * FROM `people_content` WHERE `id` = '$id' ";
    $query = mysqli_query($connect, $data);
    $after = mysqli_fetch_assoc($query);
?>


<div class="panel panel-primary">

                <div class="panel-heading">
                            <div class="col-md-9 heading_title">Team Content Edit</div>
                             <div class="clearfix"></div>
                        </div>


                

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="people_content_add">
                    
                    
                          <form class="form-horizontal" action="people_content_edit_post.php" method="POST" enctype="multipart/form-data">
                              <div class="panel-body">
                                      <input type="hidden" name="id" value="<?php echo $id ?>">

                                         <div class="form-group">
                                        <label for="image" class="col-sm-3 control-label">Image</label>
                                        <div class="col-md-6">
                                          <input type="file" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" class="form-control" id="image">
                                        </div>
                                        <div class="col-md-2"><img src="images/<?php echo $after['image'] ?>" id="blah" alt="" width="150" height="150" /></div>
                                      </div>
   
                                       <div class="form-group">
                                        <label for="description" class="col-sm-3 control-label">Description</label>
                                        <div class="col-sm-8">
                                          <input type="text" name="description" class="form-control" id="description" value="<?php echo $after['description']; ?>">
                                        </div>
                                      </div>
                                      

                                      <div class="form-group">
                                        <label for="name" class="col-sm-3 control-label">Name</label>
                                        <div class="col-sm-8">
                                          <input type="text" name="name" class="form-control" id="name" value="<?php echo $after['name']; ?>">
                                        </div>
                                      </div> 

                                      <div class="form-group">
                                        <label for="designation" class="col-sm-3 control-label">Designation</label>
                                        <div class="col-sm-8">
                                          <input type="text" name="designation" class="form-control" id="designation" value="<?php echo $after['designation']; ?>">
                                        </div>
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
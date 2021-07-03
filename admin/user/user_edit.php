<?php
    include '../session.php';
    include '../inc/header.php';
    require "../database.php";

    $id = $_GET['id'];

    $data = "SELECT * FROM `user` WHERE `id` = '$id' ";
    $query = mysqli_query($connect, $data);
    $after = mysqli_fetch_assoc($query);
?>


<div class="panel panel-primary">

                <div class="panel-heading">
                            <div class="col-md-9 heading_title">User Edit</div>
                             <div class="clearfix"></div>
                        </div>


                

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="user_add">
                    
                    
                          <form class="form-horizontal" action="user_edit_post.php" method="POST" enctype="multipart/form-data">
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
                                        <label for="name" class="col-sm-3 control-label">Name</label>
                                        <div class="col-sm-8">
                                          <input type="text" name="name" class="form-control" id="name" value="<?php echo $after['name']; ?>">
                                        </div>
                                      </div> 

                                      <div class="form-group">
                                        <label for="email" class="col-sm-3 control-label">Email</label>
                                        <div class="col-sm-8">
                                          <input type="text" name="email" class="form-control" id="email" value="<?php echo $after['email']; ?>">
                                        </div>
                                      </div>
                                      
                                       <div class="form-group">
                                        <label for="password" class="col-sm-3 control-label">Password</label>
                                        <div class="col-sm-8">
                                          <input type="text" name="password" class="form-control" id="password" value="<?php echo $after['password']; ?>">
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
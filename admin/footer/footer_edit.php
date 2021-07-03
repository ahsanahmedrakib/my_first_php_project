<?php
    include '../session.php';
    include '../inc/header.php';
    require "../database.php";

    $id = $_GET['id'];

    $data = "SELECT * FROM `footer` WHERE `id` = '$id' ";
    $query = mysqli_query($connect, $data);
    $after = mysqli_fetch_assoc($query);
?>


<div class="panel panel-primary">
      <?php include "../message.php" ?>
                <div class="panel-heading">
                            <div class="col-md-9 heading_title">Footer Edit</div>
                             <div class="clearfix"></div>
                        </div>


                

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home_add">
                    
                    
                          <form class="form-horizontal" action="footer_edit_post.php" method="POST">
                              <div class="panel-body">
                                      <input type="hidden" name="id" value="<?php echo $id ?>">
                                      
                                      <div class="form-group">
                                        <label for="title" class="col-sm-3 control-label">Title</label>
                                        <div class="col-sm-8">
                                          <input type="text" name="title" class="form-control" id="title" value="<?php echo $after['title']; ?>">
                                        </div>
                                      </div>
                                      
                                                 <div class="form-group">
                                        <label for="link" class="col-sm-3 control-label">Link</label>
                                        <div class="col-sm-8">
                                          <input type="text" name="link" class="form-control" id="link" value="<?php echo $after['link']; ?>">
                                        </div>
                                      </div>
                                                 
                                  </div>
                                  <div class="panel text-center">
                                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                              </div>
                            </form>
                    
                    </div>



                    
                    </div>
                  </div>

    </div>
<?php
    include '../session.php';
    include '../inc/header.php';
    require "../database.php";

    $id = $_GET['id'];

    $data = "SELECT * FROM `navbar` WHERE `id` = '$id' ";
    $query = mysqli_query($connect, $data);
    $after = mysqli_fetch_assoc($query);
?>


<div class="panel panel-primary">
        <?php include "../message.php" ?>
                <div class="panel-heading">
                            <div class="col-md-9 heading_title">Navbar Edit</div>
                             <div class="clearfix"></div>
                        </div>


                

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="navbar_add">
                    
                    
                          <form class="form-horizontal" action="navbar_edit_post.php" method="POST">
                              <div class="panel-body">
                                      <input type="hidden" name="id" value="<?php echo $id ?>">
                                      <div class="form-group">
                                        <label for="menu" class="col-sm-3 control-label">Menu</label>
                                        <div class="col-sm-8">
                                          <input type="text" name="menu" class="form-control" id="menu" value="<?php echo $after['menu']; ?>">
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
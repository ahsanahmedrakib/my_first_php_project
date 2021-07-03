<?php
    include '../session.php';
    include '../inc/header.php';
    require "../database.php";
?>

<div class= col-md-12>
  <?php include "../message.php" ?>
    <div class="panel panel-primary">

                <div class="panel-heading">
                            <div class="col-md-9 heading_title">Portfolio</div>
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
                    
                    
                          <form class="form-horizontal" action="portfolio_post.php" method="POST" enctype="multipart/form-data">
                              <div class="panel-body">
                                     
                                      <div class="form-group">
                                        <label for="title" class="col-sm-3 control-label">Title</label>
                                        <div class="col-md-6">
                                          <input type="text" name="title" class="form-control" id="title" placeholder="title">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group">
                                        <label for="description" class="col-sm-3 control-label">Description</label>
                                        <div class="col-md-6">
                                          <input type="text" name="description" class="form-control" id="description" placeholder="description">
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
                                                <div class="text-center col-md-8 offset-8">
                                                    <div class="table-responsive">
                                                    <?php
                                                      $select = "SELECT * FROM portfolio";
                                                      $query = mysqli_query($connect, $select);
                                                    ?>
                                                        <table class="table table-bordered">
                                                            <thead class="">
                                                            <tr>
                                                                <th>Title</th>
                                                                <th>Description</th>
                                                                <th>Edit</th>
                                                                <?php if($_SESSION['type'] == 1) { ?>
                                                                <th>Delete</th>
                                                                <?php } ?>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php foreach($query as $value) { ?>
                                                                    <tr class="">
                                                                        <td><?php echo $value['title']?></td>
                                                                        <td><?php echo $value['description']?></td>
                                                                        <td><a href="portfolio_edit.php?id=<?php echo $value['id'] ?>"><button class="btn btn-success" type="submit">Edit</button></a></td>
                                                                        <?php if($_SESSION['type'] == 1) { ?>
                                                                        <td><a href="portfolio_delete.php?id=<?php echo $value['id'] ?>"><button class="btn btn-danger" type="submit">Delete</button></a></td>
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







              
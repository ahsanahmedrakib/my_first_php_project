<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css"/>
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
  </head>
  <body>
  	<div class="container-fluid header_full">
    	<div class="container header">
        	<div class="row">
            
            </div><!--row end-->
        </div><!--container end-->
    </div><!--container-fluid end-->
    <div class="container-fluid content_full">
        <div class="row">
            <div class="col-md-2 sidebar pd0">
            	<div class="side_user">
                	<img class="img-responsive" src="images/avatar.png"/>
                    <h4>Saidul Islam Uzzal</h4>
                    <span><i class="fa fa-circle"></i> Online</span>
                </div>
                <h2>MAIN NAVIGATION</h2>
                <ul>
                	<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="#"><i class="fa fa-user-circle"></i> User</a></li>
                    <li><a href="#"><i class="fa fa-gamepad"></i> Banner</a></li>
                    <li><a href="#"><i class="fa fa-image"></i> Gallery</a></li>
                    <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ul>
            </div><!--sidebar end-->
            <div class="col-md-10 admin-part pd0">
            	<ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                  <li><a href="#">Dashboard</a></li>
                </ol>
                <div class="col-md-12">
                	<form class="form-horizontal" action="" method="">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                Update Information
                             </div>
                             <div class="col-md-3 text-right">
                             	<a href="table.html" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Information</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" value="Saidul Islam Uzzal">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-8">
                              <input type="email" class="form-control" value="qeqeqe@asas.as" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Phone</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" value="+01717111221">
                            </div>
                          </div>
                      </div>
                      <div class="panel-footer text-center">
                        <button class="btn btn-sm btn-primary">UPDATE</button>
                      </div>
                    </div>
                    </form>
                </div><!--col-md-12 end-->
            </div><!--admin-part end-->
         </div><!--row end-->
    </div><!--container-fluid end-->
    <div class="container-fluid footer_full">
    	<div class="container footer">
        	<div class="row">
            </div><!--row end-->
        </div><!--container end-->
    </div><!--container-fluid end-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
  </body>
</html>
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
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                All Information View
                             </div>
                             <div class="col-md-3 text-right">
                             	<a href="form.html" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add Information</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <table class="table table-responsive table-striped table-hover table_cus">
                          		<thead class="table_head">
                            		<tr>
                                    	<th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th class="hidden-xs">Address</th>
                                        <th class="hidden-xs">NID</th>
                                        <th>Manage</th>
                                    </tr>
                            	</thead>
                                <tbody>
                                	<tr>
                                    	<td>Saidul Islam Uzzal</td>
                                        <td>adadasd@sas.asa</td>
                                        <td>+880 11121221</td>
                                        <td class="hidden-xs">Dhaka, Bangladesh</td>
                                        <td class="hidden-xs">7677676767676</td>
                                        <td>
                                        	<a href="view.html"><i class="fa fa-plus-square fa-lg"></i></a>
                                            <a href="edit.html"><i class="fa fa-pencil-square fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>Creative IT</td>
                                        <td>qeqeasaq@swewas.yuy</td>
                                        <td>+880 8976677876</td>
                                        <td class="hidden-xs">Dhanmondi, Bangladesh</td>
                                        <td class="hidden-xs">8765432198</td>
                                        <td>
                                        	<a href="view.html"><i class="fa fa-plus-square fa-lg"></i></a>
                                            <a href="edit.html"><i class="fa fa-pencil-square fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                          </table>
                      </div>
                      <div class="panel-footer">
                        <div class="col-md-4">
                        	<a href="#" class="btn btn-sm btn-warning">EXCEL</a>
                            <a href="#" class="btn btn-sm btn-primary">PDF</a>
                            <a href="#" class="btn btn-sm btn-danger">SVG</a>
                            <a href="#" class="btn btn-sm btn-success">PRINT</a>
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4 text-right">
                        	<nav aria-label="Page navigation">
                              <ul class="pagination pagina_cus">
                                <li>
                                  <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                  </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                  <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
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
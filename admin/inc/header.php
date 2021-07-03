
<?php
    include 'global_config.php';
    require "../database.php";

    $name = "SELECT * FROM user";
    $query = mysqli_query($connect, $name);
    $after = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link type="text/css" rel="stylesheet" href="<?php echo $base_url; ?>css/font-awesome.min.css"/>
    <link type="text/css" href="<?php echo $base_url; ?>css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php echo $base_url; ?>css/style.css"/>
  </head>
  <body>
  	<div class="container-fluid header_full">
    	<div class="container header">
                            
        
                            <div class="col-md-9 heading_title">
                                
                             </div>
                            <div class="col-md-3 text-right">
                                <a href="<?php echo $base_url; ?>logout.php" class="btn btn-sm btn btn-danger">Log Out</a>
                            </div>


        	<div class="row">
            
            </div><!--row end-->
        </div><!--container end-->
    </div><!--container-fluid end-->
    <div class="container-fluid content_full">
        <div class="row">
            <div class="col-md-2 sidebar pd0">
            	<div class="side_user">
                   
                	<img class="img-responsive" src="<?php echo $base_url; ?>user/images/<?php echo $_SESSION['image']?>"/>
                    <h4><?php echo $after['name']?></h4>
                    <span><i class="fa fa-circle"></i> Online</span>

                </div>
                <h2>MAIN NAVIGATION</h2>
                <ul>
                	<li><a target="_blank" href="<?php echo $base_url; ?>../index.php"><i class="fa fa-dashboard"></i>Visit Site</a></li>
                	<?php if($_SESSION['type'] == 1) { ?><li><a href="<?php echo $base_url; ?>user/user.php"><i class="fa fa-dashboard"></i>User</a></li><?php } ?>
               <!-- 	<li><a href="<?php echo $base_url; ?>logo/logo.php"><i class="fa fa-dashboard"></i>Logo</a></li> -->
                    <li><a href="<?php echo $base_url; ?>navbar/navbar.php"><i class="fa fa-user-circle"></i>Navbar</a></li>
                    <li><a href="<?php echo $base_url; ?>home/home.php"><i class="fa fa-user-circle"></i>Home</a></li>
                    <li><a href="<?php echo $base_url; ?>services/services.php"><i class="fa fa-user-circle"></i>Services</a></li>
                    <li><a href="<?php echo $base_url; ?>services_content/services_content.php"><i class="fa fa-user-circle"></i>Services Content</a></li>
                    <li><a href="<?php echo $base_url; ?>team/team.php"><i class="fa fa-user-circle"></i>Team</a></li>
                    <li><a href="<?php echo $base_url; ?>team_content/team_content.php"><i class="fa fa-user-circle"></i>Team Content</a></li>
                    <li><a href="<?php echo $base_url; ?>skills/skills.php"><i class="fa fa-user-circle"></i>Skills</a></li>
                    <li><a href="<?php echo $base_url; ?>skills_content/skills_content.php"><i class="fa fa-user-circle"></i>Skills Content</a></li>
                    <li><a href="<?php echo $base_url; ?>portfolio/portfolio.php"><i class="fa fa-user-circle"></i>Portfolio</a></li>
                    <li><a href="<?php echo $base_url; ?>portfolio_content/portfolio_content.php"><i class="fa fa-user-circle"></i>Portfolio Content</a></li>
                    <li><a href="<?php echo $base_url; ?>people/people.php"><i class="fa fa-user-circle"></i>People</a></li>
                    <li><a href="<?php echo $base_url; ?>people_content/people_content.php"><i class="fa fa-user-circle"></i>People Content</a></li>
                    <li><a href="<?php echo $base_url; ?>contact/contact.php"><i class="fa fa-user-circle"></i>Contact</a></li>
                    <li><a href="<?php echo $base_url; ?>contact_us/contact_us.php"><i class="fa fa-user-circle"></i>Contact Us</a></li>
                    <li><a href="<?php echo $base_url; ?>footer/footer.php"><i class="fa fa-user-circle"></i>Footer</a></li>

                </ul>
            </div><!--sidebar end-->
            <div class="col-md-10 admin-part pd0">
            	<ol class="breadcrumb">
<!--                  <li><a href="#"><i class="fa fa-home"></i> Home</a></li>-->
<!--                  <li><a href="#">Dashboard</a></li>-->
                </ol>
                <div class="col-md-12">

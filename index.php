<?php
    require 'admin/database.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cuda</title>

<!--MOBILE VIEW-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<!--FONTS-->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,400italic,600,700' rel='stylesheet' type='text/css'>

<!--CSS-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/portfolio.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jquery.classyloader.min.js"></script>
<script src="js/filterable.pack.js"></script>
<script src="js/responsive-nav.js"></script>
<script src="js/script.js"></script>
<script src="js/waypoints.min.js"></script>


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
        
</head>

<body>
<!-- Paste this code after body tag -->
 <div class="se-pre-con"></div>
 <!-- Ends -->
 <?php
 
    $navbar = "SELECT * FROM navbar";
    $navbar_query = mysqli_query($connect, $navbar);
 
 ?>
 
<!--HEADER-->
<div id="home">
<header>
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
            
        	<h1 class="logo"><a href="#home">Cuda</a></h1>
            <nav  class="nav-collapse">
            	<ul>

                <?php foreach($navbar_query as $value) {?>

                	<li class="menu-item"><a href="#<?= $value['menu'] ?>"><?= $value['menu'] ?></a></li>
                <?php } ?>


               <!--     <li class="menu-item"><a href="#service">Services</a></li>
                    <li class="menu-item"><a href="#team">Team</a></li>
                    <li class="menu-item"><a href="#skill">Skills</a></li>
                    <li class="menu-item"><a href="#portfolio">Portfolio</a></li>
                    <li class="menu-item"><a href="#contact">Contact</a></li> -->
                </ul>
            </nav> 
          </div> 
       </div>
     </div>
</header>  
</div> 
 <?php
 
    $home = "SELECT * FROM home";
    $home_q = mysqli_query($connect, $home);
    $value = mysqli_fetch_assoc($home_q)
 
 ?>
<section class="wrapper" id="banner">
	<div class="container">   
        <div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
        	<p  class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s"><?= $value['title'] ?></p>
            
          
					<a href="#" class="os-animation btn btn-2 btn-2a" data-os-animation="zoomIn" data-os-animation-delay="0.5s">WORK WITH US!</a>
             </div>       
        </div>
    </div>
</section>

<!--SERVICES-->
 <?php
 
    $services = "SELECT * FROM services";
    $services_q = mysqli_query($connect, $services);
    $value = mysqli_fetch_assoc($services_q)
 
 ?>
<section class="wrapper" id="service">
	<div class="container">
    	<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s"><?= $value['title'] ?></h2>
                <div class="bottomline"></div>
                <p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s"><?= $value['description'] ?></p>
            </div>
        </div>
 <?php
 
    $services_content = "SELECT * FROM services_content";
    $services_content_query = mysqli_query($connect, $services_content);
 
 ?>
        <div class="row">

                    <?php foreach($services_content_query as $value) {?>

        	<div class="col-lg-3 col-md-3 col-sm-3">
                <figure class="os-animation" data-os-animation="fadeInDown" data-os-animation-delay="0.5s">
                	<div class="imageheight">
                    	<img src="admin/services_images/<?= $value['image'] ?>" alt="Branding">
                    </div>
                    <figcaption>
                        <h3 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s"><?= $value['title'] ?></h3>
                        <p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s"><?= $value['description'] ?></p>
                    </figcaption>
                </figure>
            </div>

                    <?php } ?>


        <!--    <div class="col-lg-3 col-md-3 col-sm-3">
                <figure class="os-animation" data-os-animation="fadeInDown" data-os-animation-delay="0.7s">
                	<div class="imageheight">
                    	<img src="images/design.png" alt="Design">
                    </div>
                    <figcaption>
                        <h3 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s">Design</h3>
                        <p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                    </figcaption>
                </figure>
            </div>
           <div class="col-lg-3 col-md-3 col-sm-3">
                <figure class="os-animation" data-os-animation="fadeInDown" data-os-animation-delay="0.9s">
                	<div class="imageheight">
                    	<img src="images/development.png" alt="Development">
                    </div>
                    <figcaption>
                        <h3 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s">Development</h3>
                        <p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <figure class="os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1.1s">
                	<div class="imageheight">
                    	<img src="images/rocket.png" alt="Rocket Science">
                    </div>
                    <figcaption>
                        <h3 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s">Rocket Science</h3>
                        <p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                    </figcaption>
                </figure>
            </div>  -->
        </div>
    </div>
</section>

<!--TEAM-->
 <?php
 
    $team = "SELECT * FROM team";
    $team_q = mysqli_query($connect, $team);
    $value = mysqli_fetch_assoc($team_q)
 
 ?>
<section class="wrapper" id="team">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
            	<h2 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s"><?= $value['title'] ?></h2>
                <div class="bottomline"></div>
                <p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s"><?= $value['description'] ?></p>
                
            </div>
        </div>
        
        <div class="row">
 <?php
 
    $team_content = "SELECT * FROM team_content";
    $team_content_q = mysqli_query($connect, $team_content);
 
 ?>
<?php foreach($team_content_q as $value) {?>
        <div class="col-lg-3 col-md-3 col-sm-3">
        	<figure class="os-animation" data-os-animation="fadeInDown" data-os-animation-delay="0.5s">
            	<img src="admin/team_content/images/<?= $value['image'] ?>" alt="image" height="200px" width="200px" style='border-radius: 50%'>
                
                <figcaption>
                	<h4><?= $value['name'] ?></h4>
                    <span><?= $value['designation'] ?></span>
                    <p><?= $value['description'] ?></p>
                    
                    <div class="social">
                	<a href="<?= $value['facebook'] ?>"><i class="fa fa-facebook"></i></a>
                    <a href="<?= $value['twitter'] ?>"><i class="fa fa-twitter"></i></a>
                    <a href="<?= $value['linked_in'] ?>"><i class="fa fa-linkedin"></i></a>
                    <a href="<?= $value['email'] ?>"><i class="fa fa-envelope"></i></a>
                	</div>
               </figcaption>
            </figure>
         </div>
<?php } ?>



      <!--   <div class="col-lg-3 col-md-3 col-sm-3">
        	<figure class="os-animation" data-os-animation="fadeInDown" data-os-animation-delay="0.7s">
            	<img src="images/blackimage.png" alt="image">
                
                <figcaption>
                	<h4>KATE UPTON</h4>
                    <span>Creative Director</span>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                    
                    <div class="social">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-envelope"></i></a>
                	</div>
                </figcaption>
            </figure>
         </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
        	<figure class="os-animation" data-os-animation="fadeInDown" data-os-animation-delay="0.9s">
            	<img src="images/blackimage.png" alt="image">
                
                <figcaption>
                	<h4>OLIVIA WILDS</h4>
                    <span>Lead Designer</span>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                    
                    <div class="social">
                	<a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-envelope"></i></a>
                	</div>
                </figcaption>
            </figure>
         </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
        	<figure class="os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1.1s">
            	<img src="images/blackimage.png" alt="image">
                
                <figcaption>
                	<h4>ASHLEY GREENE</h4>
                    <span>SEO / Developer</span>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                    
                    <div class="social">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-envelope"></i></a>
                	</div>
                </figcaption>
            </figure>
         </div> -->
            
        </div>
    </div>
</section>



 <?php
 
    $skills_content = "SELECT * FROM skills_content";
    $skills_content_q = mysqli_query($connect, $skills_content);
 
 ?>

<!--SKILL-->
<section class="wrapper" id="skill">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s">WE GOT SKILLS!</h2>
                <div class="bottomline"></div>
                <p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="row">
                            <?php foreach($skills_content_q as $value) { ?>
        				<div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="os-animation block" data-os-animation="fadeInDown" data-os-animation-delay="0.5s">
                                <div class="clearfix">
                                    <canvas class="loader"></canvas>
                                    <script>
                                        $(document).ready(function() {
                                            $('.loader').ClassyLoader({
                                                percentage: <?= $value['percentage'] ?>,
                                                speed: 20,
                                                fontSize: '40px',
                                                diameter: 80,
                                                lineColor: 'rgba(48,186,231,1)',
                                                remainingLineColor: 'rgba(223,232,237,0.4)',
                                                lineWidth: 12
                                            });
                                        });
                                    </script>
                                    
                                </div>
                                <span><?= $value['title'] ?></span>
                            </div>
                        </div>
                                    <?php } ?>
                     
        </div>
    </div>
</section>

<!--PORTFOLIO-->




<?php

    require 'admin/database.php';
    $portfolio = "SELECT * FROM portfolio";
    $portfolio_query = mysqli_query($connect, $portfolio);
    $after = mysqli_fetch_assoc($portfolio_query);

    $portfolio_content = "SELECT * FROM portfolio_content";
    $portfolio_content_query = mysqli_query($connect, $portfolio_content);

?>






<!--PORTFOLIO-->
<section class="wrapper" id="portfolio"> 
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s"><?= $after['title'] ?></h2>
                <div class="bottomline"></div>
                <p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s"><?= $after['description'] ?></p>
            </div>
        </div>
        <div class="row clearfix">
       		<div class="col-lg-12 col-md-12 col-sm-12">
    		<div class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.9s"> 
                <ul id="portfolio-filter">
                    <li><a href="#all" title="">All</a></li>
                    <li><a href="#web" title="" rel="web">WEB</a></li>
                    <li><a href="#apps" title="" rel="apps">APPS</a></li>
                    <li><a href="#icons" title="" rel="icons">ICONS</a></li>
                </ul>
		
                <ul id="portfolio-list" class="clearfix">
                <?php foreach($portfolio_content_query as $portfolio){ ?>
                                <li style="display: block;" class="<?php echo $portfolio['class'] ?>">
                                        <a href="<?php echo $portfolio['url'] ?>"><img src="admin/portfolio_content/images/<?php echo $portfolio['image'] ?>" alt=""></a>
                                    <p>
                                        <?php echo $portfolio['title'] ?>
                                    </p>
                                </li>
                <?php } ?>
   
                        <li style="overflow: hidden; clear: both; height: 0px; position: relative; float: none; display: block;"></li>
                </ul>
              </div>  
        	</div>
         </div> 
         <div class="row">
         	<div class="col-lg-12 col-md-12 col-sm-12"> 
       		 <a href="#" class="os-animation btn1 btn-21 btn-2a1" data-os-animation="zoomIn" data-os-animation-delay="0.5s">LOAD MORE PROJECT</a>
        </div>
     </div>
  </div>
</section>


<?php

    $people = "SELECT * FROM people";
    $people_query = mysqli_query($connect, $people);
    $after = mysqli_fetch_assoc($people_query);

    $people_content = "SELECT * FROM people_content";
    $people_content_query = mysqli_query($connect, $people_content);

?>


<!--ABOUT US-->
<section class="wrapper" id="about">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s"><?= $after['title'] ?></h2>
                <div class="bottomline"></div>
                <p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s"><?= $after['description'] ?></p>
            </div>
        </div>
        <div class="row">
        <?php foreach($people_content_query as $value){ ?>
        	 <div class="col-lg-6 col-md-6 col-sm-6">
            	<div class="os-animation testimonial clearfix" data-os-animation="fadeIn" data-os-animation-delay="0.5s">
                	<div class="testimage">
                		<img src="admin/people_content/images/<?= $value['image'] ?>"" style="width: 100px; height: 100px; border-radius: 50%;" alt="">
                    </div>
                    <div class="righttest">
                    	<blockquote>
                        	<?= $value['description'] ?>
                        </blockquote>
                        <span><?= $value['name'] ?></span>
                        <span class="smalltest"><?= $value['designation'] ?></span>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</section>


<?php
    $contact = "SELECT * FROM contact";
    $contact_query = mysqli_query($connect, $contact);
    $after = mysqli_fetch_assoc($contact_query);
?>


<!--GET IN TOUCH-->

<section class="wrapper" id="contact">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s"><?= $after['title'] ?></h2>
                <div class="bottomline"></div>
                <p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s"><?= $after['description'] ?></p>
            </div>
        </div>
        <div class="row spacing">
        	<form div class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.8s" action="admin/contact_us/contact_us_post.php" method="POST">
            <div class="nameemail">
            	<div class="name">
            		<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="email">
                	<input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
                </div>
            </div>    
                <textarea name="message" class="form-control" id="messsage" placeholder="Your Message" required></textarea>
               
             
               <div class="panel text-center">
                    <button type="submit"  class="os-animation btn11 btn-211 btn-2a11" data-os-animation="zoomIn" data-os-animation-delay="0.5s">SEND MESSAGE</button>
                </div>
                
            </form>
        </div>
    </div>
</section>


<?php
    $footer = "SELECT * FROM footer";
    $footer_query = mysqli_query($connect, $footer);
?>
<!--FOOTER-->
<footer class="wrapper">
	<div class="container">
    	<div class="col-lg-12 col-md-12 col-sm-12">
            <ul>
            <?php foreach($footer_query as $value) { ?>
                <li><a href="<?= $value['link'] ?>"><?= $value['title'] ?></a></li>
            <?php } ?>
            </ul>
        </div>
      </div>      
</footer>

<!--JS-->
<script src="js/fastclick.js"></script>
<script src="js/scroll.js"></script>
<script src="js/fixed-responsive-nav.js"></script>
</body>
</html>

<?php require "header.php";
    
require "Dbconnection.php";
require "Product.php";


$Product = new Product();
$Connection = new Dbconnection();

$catList = $Product->categoryList($Connection->con);
?>
<!--script-->
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
<!--script-->
</head>
<body>
<!---header--->
<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<i class="sr-only">Toggle navigation</i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
							</button>				  
							<div class="navbar-brand">
								<h1><a href="index.php"><span style ="color : #e7663f">Ced</span> <span style ="color : #585CA7">Hosting</span></a></h1>
							</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="services.php">Services</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
									<ul class="dropdown-menu">
									<? foreach ($catList as $value){
											?>
											<li><a href="linuxhosting.php"><?php echo $value['prod_name'];?></a></li>
											<!-- <li><a href="wordpresshosting.php">WordPress Hosting</a></li>
											<li><a href="windowshosting.php">Windows Hosting</a></li>
											<li><a href="cmshosting.php">CMS Hosting</a></li> -->
										<?}?>
									</ul>			
								</li>
								<li><a href="pricing.php">Pricing</a></li>
								<li><a href="blog.php">Blog</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
									  
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
	<!---header--->
		<!---singleblog--->
				<div class="content">
					<div class="testimonials">
						<div class="container">
							<h2>Testimonials</h2>
							<div class="testimonials-grids">
								<div class="col-md-4 testimonials-grid">
									<img src="images/t2.jpg" class="img-responsive" alt=""/>
									<h4>Jack Thompson</h4>
									<p>" Vestibulum congue congue dui ut porta. Aenean laoreet viverra turpis, a commodo purus eleifend a. Nam lacus dui.</p>
									<div class="social-icons">
										<a href="#"><i class="icon"></i></a>
										<a href="#"><i class="icon1"></i></a>
										<a href="#"><i class="icon2"></i></a>
										<a href="#"><i class="icon3"></i></a>
									</div>
								</div>
									<div class="col-md-4 testimonials-grid">
									<img src="images/t3.jpg" class="img-responsive" alt=""/>
									<h4>Nick Harris</h4>
									<p>" Vestibulum congue congue dui ut porta. Aenean laoreet viverra turpis, a commodo purus eleifend a. Nam lacus dui.</p>
									<div class="social-icons">
										<a href="#"><i class="icon"></i></a>
										<a href="#"><i class="icon1"></i></a>
										<a href="#"><i class="icon2"></i></a>
										<a href="#"><i class="icon3"></i></a>
									</div>
								</div>
									<div class="col-md-4 testimonials-grid">
									<img src="images/t4.jpg" class="img-responsive" alt=""/>
									<h4>Jack Thompson</h4>
									<p>" Vestibulum congue congue dui ut porta. Aenean laoreet viverra turpis, a commodo purus eleifend a. Nam lacus dui.</p>
									<div class="social-icons">
										<a href="#"><i class="icon"></i></a>
										<a href="#"><i class="icon1"></i></a>
										<a href="#"><i class="icon2"></i></a>
										<a href="#"><i class="icon3"></i></a>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="testimonials-grids">
								<div class="col-md-4 testimonials-grid">
									<img src="images/t8.jpg" class="img-responsive" alt=""/>
									<h4>Jack Thompson</h4>
									<p>" Vestibulum congue congue dui ut porta. Aenean laoreet viverra turpis, a commodo purus eleifend a. Nam lacus dui.</p>
									<div class="social-icons">
										<a href="#"><i class="icon"></i></a>
										<a href="#"><i class="icon1"></i></a>
										<a href="#"><i class="icon2"></i></a>
										<a href="#"><i class="icon3"></i></a>
									</div>
								</div>
									<div class="col-md-4 testimonials-grid">
									<img src="images/t7.jpg" class="img-responsive" alt=""/>
									<h4>Nick Harris</h4>
									<p>" Vestibulum congue congue dui ut porta. Aenean laoreet viverra turpis, a commodo purus eleifend a. Nam lacus dui.</p>
									<div class="social-icons">
										<a href="#"><i class="icon"></i></a>
										<a href="#"><i class="icon1"></i></a>
										<a href="#"><i class="icon2"></i></a>
										<a href="#"><i class="icon3"></i></a>
									</div>
								</div>
									<div class="col-md-4 testimonials-grid">
									<img src="images/t5.jpg" class="img-responsive" alt=""/>
									<h4>Jack Thompson</h4>
									<p>" Vestibulum congue congue dui ut porta. Aenean laoreet viverra turpis, a commodo purus eleifend a. Nam lacus dui.</p>
									<div class="social-icons">
										<a href="#"><i class="icon"></i></a>
										<a href="#"><i class="icon1"></i></a>
										<a href="#"><i class="icon2"></i></a>
										<a href="#"><i class="icon3"></i></a>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<?php require "footer.php";?>
			
</body>
</html>
<?php require "header.php";
    
require "Dbconnection.php";
require "Product.php";


$Product = new Product();
$Connection = new Dbconnection();

$catList = $Product->categoryList($Connection->con);
?>

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<!---fonts-->
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
					<div class="support-section">
						<div class="container">
							<h2>Support</h2>
							<div class="support-grids">
								<div class="col-md-4 support-grid">
									<i class="glyphicon glyphicon-headphones" aria-hidden="true"></i>
									<h4>live support</h4>
									<h5>Fastest way to help you, 24/7</h5>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words . </p>
								</div>
								<div class="col-md-4 support-grid">
									<i class="glyphicon glyphicon-file" aria-hidden="true"></i>
									<h4>database support</h4>
									<h5>Frequently Asked Questions</h5>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words . </p>
								</div>
								<div class="col-md-4 support-grid">
									<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
									<h4>E-mail support</h4>
									<h5>We promise max. 24h turnaround</h5>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words . </p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="supp-grids">
								<div class="col-lg-10 supp-grid">
								<h3>24/7 Service & Support</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi faucibus augue vitae est volutpat eleifend. </p>
							   </div>
								<div class="col-lg-2 supp-grid1">
								 <a  href="#">Live Chat</a>
							   </div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="our-client">
						<div class="container">
						<div class="cour-clientgrids">
							<div class="col-md-8 client-grid">
								<h4>What our clients are saying...</h4>
								<p>“MyVPS is awesome! Reliable, secure hosting, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vel pharetra diam. Aenean convallis nibh facilisis risus and clients. 9/12, 5 Stars all around lorem ipsum dolto sit amet! There are many variations of passages of Lorem Ipsum available”</p>
									<p>Nick Harris : <a href="#"> www.w3layouts.com</a></p>
							</div>
							<div class="col-md-4 client-grid1">
								<img src="images/c7.png" class="img-responsive" alt=""/>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
			</div>
			<?php require "footer.php";?>
</body>
</html>
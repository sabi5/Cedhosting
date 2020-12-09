<?php require "header.php";?>
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
										<li><a href="linuxhosting.php">Linux hosting</a></li>
										<li><a href="wordpresshosting.php">WordPress Hosting</a></li>
										<li><a href="windowshosting.php">Windows Hosting</a></li>
										<li><a href="cmshosting.php">CMS Hosting</a></li>
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
		<!--hosting--->
				<div class="content">
					<div class="hosting-section">
						<div class="container">
							<h2>Portfolio</h2>
							<div class="hosting-grids">
								<div class="col-md-4 hosting-grid">
									<div class="hosting-grd">
										<a class="swipebox" href="images/h1.jpg" ><img src="images/h1.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span></a>
									 </div>
									 <h4>Nullam consectetur</h4>
									  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris sollicitudin dignissim</p>
								</div>
								<div class="col-md-4 hosting-grid">
									<div class="hosting-grd">
										 <a class="swipebox" href="images/h2.jpg" ><img src="images/h2.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span></a>
									</div>
									 <h4>Malesuada fames ac</h4>
									 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris sollicitudin dignissim</p>
								</div>
								<div class="col-md-4 hosting-grid">
									<div class="hosting-grd">
										 <a class="swipebox" href="images/h3.jpg" ><img src="images/h3.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span></a>
									</div>
									<h4>Quisque est velit</h4>
									  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris sollicitudin dignissim</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="hosting-grids">
								<div class="col-md-4 hosting-grid">
									<div class="hosting-grd">
										 <a class="swipebox" href="images/h4.jpg" ><img src="images/h4.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span></a>
									</div>
									 <h4>Nullam consectetur</h4>
									 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris sollicitudin dignissim</p>
								</div>
								<div class="col-md-4 hosting-grid">
									<div class="hosting-grd">
										 <a class="swipebox" href="images/h5.jpg" ><img src="images/h5.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span></a>
									</div>
									 <h4>Malesuada fames ac</h4>
									 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris sollicitudin dignissim</p>
								</div>
								<div class="col-md-4 hosting-grid">
									<div class="hosting-grd">
										 <a class="swipebox" href="images/h6.jpg" ><img src="images/h6.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span></a>
									</div>
									 <h4>Quisque est velit</h4>
									 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris sollicitudin dignissim</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<!--hosting--->
				</div>
				<?php require "footer.php";?>
			
			
</body>
</html>
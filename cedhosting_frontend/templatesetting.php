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
					<div class="setting-section">
						<div class="container">
							<h2>Template settings</h2>
							<div class="setting-grids">
								<div class="col-md-4 setting-grid">
									<h4>1 - Login form</h4>
								</div>
								<div class="col-md-4 setting-grid">
									<ul>
									<li><span>Type :</span> mod_login</li>
									<li><span>Position :</span> modal</li>
									<li><span>Class Suffix :</span> mod_login</li>
									<li><span>Show Title :</span> no</li>
									<li><span>Order :</span> 5</li>
									</ul>
								</div>
								<div class="col-md-4 setting-grid">
								<ul>
									<li><span>Pages :</span> all</li>
									<li><span>Additional info :</span></li>
								</ul>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="setting-grids setting2">
								<div class="col-md-4 setting-grid">
									<h4>2 - CarouFredSel</h4>
								</div>
								<div class="col-md-4 setting-grid">
									<ul>
									<li><span>Type :</span> mod_caroufredsel</li>
									<li><span>Position :</span> bottom</li>
									<li><span>Class Suffix :</span> center</li>
									<li><span>Show Title :</span> no</li>
									<li><span>Order :</span> 2</li>
									</ul>
								</div>
								<div class="col-md-4 setting-grid">
								<ul>
									<li><span>Pages :</span> Home</li>
									<li><span>Additional info :</span></li>
								</ul>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="setting-grids">
								<div class="col-md-4 setting-grid">
									<h4>3 - Search form</h4>
								</div>
								<div class="col-md-4 setting-grid">
									<ul>
									<li><span>Type :</span> mod_login</li>
									<li><span>Position :</span> aside-right</li>
									<li><span>Class Suffix :</span>aside</li>
									<li><span>Show Title :</span> yes</li>
									<li><span>Order :</span> 1</li>
									</ul>
								</div>
								<div class="col-md-4 setting-grid">
								<ul>
									<li><span>Pages :</span> Testimonials</li>
									<li><span>Additional info :</span></li>
								</ul>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="setting-grids setting2">
								<div class="col-md-4 setting-grid">
									<h4>4 - Olark live chat</h4>
								</div>
								<div class="col-md-4 setting-grid">
									<ul>
									<li><span>Type :</span> mod_login</li>
									<li><span>Position :</span> modal</li>
									<li><span>Class Suffix :</span> mod_login</li>
									<li><span>Show Title :</span> no</li>
									<li><span>Order :</span> 5</li>
									</ul>
								</div>
								<div class="col-md-4 setting-grid">
								<ul>
									<li><span>Pages :</span> all</li>
									<li><span>Additional info :</span></li>
								</ul>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="setting-grids">
								<div class="col-md-4 setting-grid">
									<h4>5 - New to domains?</h4>
								</div>
								<div class="col-md-4 setting-grid">
									<ul>
									<li><span>Type :</span>mod_articles_news_adv</li>
									<li><span>Position :</span> content-bottom</li>
									<li><span>Class Suffix :</span> </li>
									<li><span>Show Title :</span> yes</li>
									<li><span>Order :</span> 7</li>
									</ul>
								</div>
								<div class="col-md-4 setting-grid">
								<ul>
									<li><span>Pages :</span> all</li>
									<li><span>Additional info :</span></li>
								</ul>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="setting-grids setting2">
								<div class="col-md-4 setting-grid">
									<h4>6 - Support</h4>
								</div>
								<div class="col-md-4 setting-grid">
									<ul>
									<li><span>Type :</span>mod_articles_single</li>
									<li><span>Position :</span> bottom</li>
									<li><span>Class Suffix :</span> </li>
									<li><span>Show Title :</span> no</li>
									<li><span>Order :</span> 1</li>
									</ul>
								</div>
								<div class="col-md-4 setting-grid">
								<ul>
									<li><span>Pages :</span> Domain names</li>
									<li><span>Additional info :</span></li>
								</ul>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="setting-grids">
								<div class="col-md-4 setting-grid">
									<h4>7 - Domain</h4>
								</div>
								<div class="col-md-4 setting-grid">
									<ul>
									<li><span>Type :</span>mod_articles_single</li>
									<li><span>Position :</span> mainbottom</li>
									<li><span>Class Suffix :</span> </li>
									<li><span>Show Title :</span> no</li>
									<li><span>Order :</span> 5</li>
									</ul>
								</div>
								<div class="col-md-4 setting-grid">
								<ul>
									<li><span>Pages :</span> Domain names</li>
									<li><span>Additional info :</span></li>
								</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<?php require "footer.php";?>
</body>
</html>
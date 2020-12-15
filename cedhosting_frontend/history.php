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
					<div class="history-section">
						<div class="container">
							<h2>history</h2>
							<div class="history-grids">
								<div class="col-md-6 history-grid">
									<div class="history-left">
										<h4>1998</h4>
									</div>
									<div class="history-right">
									<p>Quisque egestas consequat mi. Aenean orci mauris, viverra sit amet tincidunt eget, facilisis id ligula. Curabitur sollicitudin ornare justo vel pretium. Pellentesque adipiscing suscipit neque.</p>
									</div>
								</div>
								<div class="col-md-6 history-grid">
								<div class="history-left">
										<h4>2000</h4>
									</div>
									<div class="history-right">
									<p>Quisque egestas consequat mi. Aenean orci mauris, viverra sit amet tincidunt eget, facilisis id ligula. Curabitur sollicitudin ornare justo vel pretium. Pellentesque adipiscing suscipit neque.</p>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="history-grids">
								<div class="col-md-6 history-grid">
									<div class="history-left">
										<h4>2001</h4>
									</div>
									<div class="history-right">
									<p>Quisque egestas consequat mi. Aenean orci mauris, viverra sit amet tincidunt eget, facilisis id ligula. Curabitur sollicitudin ornare justo vel pretium. Pellentesque adipiscing suscipit neque.</p>
									</div>
								</div>
								<div class="col-md-6 history-grid">
								<div class="history-left">
										<h4>2005</h4>
									</div>
									<div class="history-right">
									<p>Quisque egestas consequat mi. Aenean orci mauris, viverra sit amet tincidunt eget, facilisis id ligula. Curabitur sollicitudin ornare justo vel pretium. Pellentesque adipiscing suscipit neque.</p>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="history-grids">
								<div class="col-md-6 history-grid">
									<div class="history-left">
										<h4>2006</h4>
									</div>
									<div class="history-right">
									<p>Quisque egestas consequat mi. Aenean orci mauris, viverra sit amet tincidunt eget, facilisis id ligula. Curabitur sollicitudin ornare justo vel pretium. Pellentesque adipiscing suscipit neque.</p>
									</div>
								</div>
								<div class="col-md-6 history-grid">
								<div class="history-left">
										<h4>2010</h4>
									</div>
									<div class="history-right">
									<p>Quisque egestas consequat mi. Aenean orci mauris, viverra sit amet tincidunt eget, facilisis id ligula. Curabitur sollicitudin ornare justo vel pretium. Pellentesque adipiscing suscipit neque.</p>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="history-grids">
								<div class="col-md-6 history-grid">
									<div class="history-left">
										<h4>2011</h4>
									</div>
									<div class="history-right">
									<p>Quisque egestas consequat mi. Aenean orci mauris, viverra sit amet tincidunt eget, facilisis id ligula. Curabitur sollicitudin ornare justo vel pretium. Pellentesque adipiscing suscipit neque.</p>
									</div>
								</div>
								<div class="col-md-6 history-grid">
								<div class="history-left">
										<h4>2016</h4>
									</div>
									<div class="history-right">
									<p>Quisque egestas consequat mi. Aenean orci mauris, viverra sit amet tincidunt eget, facilisis id ligula. Curabitur sollicitudin ornare justo vel pretium. Pellentesque adipiscing suscipit neque.</p>
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
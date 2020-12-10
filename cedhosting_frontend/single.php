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
					<div class="blog">
						<div class="container">
							<h2>blog-post</h2>
							<div class="blog-grids">
								<div class="col-md-1 blog-grid">
									<div class="date">
									<h4>09</h4>
									<p>oct</p>
									</div>
									<h6><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> 15</h6>
									<h6><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 10</h6>
								</div>
								<div class="col-md-11 blog-grid1">
									<img src="images/b1.jpg" class="img-responsive " alt=""/>
									<h4>Praesent justo dolor, lobortis quis, lobortis dignissim</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at,cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at,cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<ul class="blog-ic">
										<li><a href="#"><span><i  class="glyphicon glyphicon-user"> </i>Author</span> </a> </li>
										<li><span><i class="glyphicon glyphicon-calendar"> </i>June 14, 2013</span></li>		  						 	
										<li><span><i class="glyphicon glyphicon-eye-open"> </i>Hits:145</span></li>
										<li><a href="#"><span><i class="glyphicon glyphicon-bookmark"> </i> Aliquam Congue5</span></a></li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!---singleblog--->
					<div class="admin">
						<div class="container">
							<h4>written by admin</h4>
							<div class="admin-grids">
								<div class="admin-left">
									<img src="images/user.png">
								</div>
								<div class="admin-right">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at,cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<span>View all posts by : <a href="#"> Admin </a></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
						<!---related--->
					<div class="related">
						<div class="container">
							<h3>related post</h3>
							<div class="related-grids">
								<div class="col-md-3 related-grid">
								<img src="images/p1.jpg" class="img-responsive" alt="/">
								</div>
								<div class="col-md-3 related-grid">
								<img src="images/p2.jpg" class="img-responsive" alt="/">
								</div>
								<div class="col-md-3 related-grid">
								<img src="images/p3.jpg" class="img-responsive" alt="/">
								</div>
								<div class="col-md-3 related-grid">
								<img src="images/p1.jpg" class="img-responsive" alt="/">
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!---related--->
					<!---RESPONSES--->
					<div class="responses">
						<div class="container">
							<h3>3 responses</h3>
							<div class="responses-grids">
								<div class="responses-left">
									<a href="#"><img src="images/user.png"></a>
									<h5>admin</h5>
								</div>
								<div class="responses-right">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean non ummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis sere natoque penati bus et magnis dis. Lorem ipsum dolor. Lorem ipsum dolor sit amet, consectetuer adipiscing elit lorem. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris.</p>
									<ul>
										<li>August 15, 2016</li>
										<li><a href="single.html">Reply</a></li>
									</ul>	
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="responses-grids respon-right">
								<div class="responses-left">
									<a href="#"><img src="images/user.png"></a>
									<h5>admin</h5>
								</div>
								<div class="responses-right">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean non ummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis sere natoque penati bus et magnis dis. Lorem ipsum dolor. Lorem ipsum dolor sit amet, consectetuer adipiscing elit lorem. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris.</p>
									<ul>
										<li>August 15, 2016</li>
										<li><a href="single.html">Reply</a></li>
									</ul>	
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="responses-grids">
								<div class="responses-left">
									<a href="#"><img src="images/user.png"></a>
									<h5>admin</h5>
								</div>
								<div class="responses-right">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean non ummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis sere natoque penati bus et magnis dis. Lorem ipsum dolor. Lorem ipsum dolor sit amet, consectetuer adipiscing elit lorem. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris.</p>
									<ul>
										<li>August 15, 2016</li>
										<li><a href="single.html">Reply</a></li>
									</ul>	
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!---RESPONSES--->
				<div class="coment-form">
					<div class="container">
						<h3>Leave your comment</h3>
						<form>
							<input type="text" value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
							<input type="email" value="Email (will not be published)*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email (will not be published)*';}" required="">
							<input type="text" value="Website" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}" required="">
							<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
							<input type="submit" value="Submit Comment" >
							<label><input type="checkbox" value="Sign me up for the newsletter">Sign me up for the newsletter</label>
						</form>
					</div>
				</div>
				</div>
				<?php require "footer.php";?>
			
</body>
</html>
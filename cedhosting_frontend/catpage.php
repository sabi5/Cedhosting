<?php 

	session_start();
	require "header.php";
		
	require "Dbconnection.php";
	require "Product.php";

	
	 if(isset($_GET['id'])){

		$id = $_GET['id'];
	 }else{
		echo "<script>location.replace('index.php');</script>";
	 }
	$Product = new Product();
	$Connection = new Dbconnection();
	
	$catList = $Product->categoryList($Connection->con);

	$hostingData = $Product->hostingData($id, $Connection->con);

	$hostingproductData = $Product->hostingproductData($id, $Connection->con);
	

	
?>
<title>Hosting page</title>

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
								<li><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="services.php">Services</a></li>
								<li class="dropdown active">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
									<ul class="dropdown-menu">
										<? foreach ($catList as $value){
											?>
											<li><a href="catpage.php?id=<?php echo $value['id'];?>"><?php echo $value['prod_name'];?></a></li>
										<?}?>
									</ul>			
								</li>
								<li><a href="pricing.php">Pricing</a></li>
								<li><a href="blog.php">Blog</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
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
					<div class="linux-section">
						<div class="container">
							<div class="linux-grids">
								<div class="col-md-8 linux-grid">
									<h2><p><?php 
									if(!empty($hostingData)){
									
									foreach ($hostingData as $value){
											echo $value['prod_name'];
										?></p>
									</h2>
									<?
									echo $value['html'];
									}}?>
									
									<a href="#myTab">view plans</a>
								</div>
								<div class="col-md-4 linux-grid1">
									<img src="images/linux.png" class="img-responsive" alt=""/>
								</div>
								<div class="clearfix"></div> 
								
							</div>
						</div>
					</div>
					<div class="tab-prices">
						<div class="container">
							<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
									<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">IN Hosting</a></li>
									<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">US Hosting</a></li>
									</ul>
								<div id="myTabContent" class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
										<div class="linux-prices">
										<?php if(!empty($hostingproductData)){
								
											 foreach ($hostingproductData as $value){
												 
												$decode_desc = $value['description'];
												$obj = json_decode($decode_desc);
												// print_r($obj);
												$web_space = $obj->webspace;
												$bandwidth = $obj->bandwidth;
												$free_domain = $obj->freedomain;
												$language_support = $obj->language;
												$mailbox = $obj->mailbox;
												 ?>
											<div class="col-md-3 linux-price">
												<div class="linux-top">
												<h4><?php echo $value['prod_name'];?></h4>
												</div>
												<div class="linux-bottom">
													<h5><?php echo "$".$value['mon_price'];?> <span class="month">per month</span></h5>
													<h5><?php echo "$".$value['annual_price'];?> <span class="month">per annual</span></h5>
													<h6>Single Domain</h6>
													<ul>
													<li><strong>Webspace : </strong> <?php echo $web_space." GB";?></li>
													<li><strong>Bandwidth : </strong><?php echo $bandwidth." GB";?></li>
													<li><strong>Free Domain : </strong> <?php echo $free_domain;?></li>
													<li><strong>Language : </strong> <?php echo $language_support;?></li>
													<li><strong>Mailbox : </strong><?php echo $mailbox;?></li>
													<!-- <li><strong>location </strong> : <img src="images/india.png"></li> -->
													</ul>
												</div>

												<!-- href="user.php?id='.$product["id"].'&action=addproduct"> -->
												<a data-toggle="modal" data-target="#exampleModalSignUp" href="#">Buy Now</a>
												
											</div>

											<!-- Modal -->
											<div class="modal fade" id="exampleModalSignUp" tabindex="-1" role="dialog" 		aria-labelledby="exampleModalSignTitle" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
												<div class="modal-content">
												<div class="modal-body p-0">
													<div class="card bg-secondary shadow border-0 mb-0">
													<div class="card-header bg-white pb-5">
														<div class="text-muted text-center mb-3">
														<small>Price</small>
														</div>
													</div>
													<div class="card-body px-lg-5 py-lg-5">
													<form role="form" action = "" method = "post">
														<div class="form-group mb-3">
															<div class="input-group input-group-alternative">
															<div class="input-group-prepend">
																<span class="input-group-text"><i class="ni ni-email-83"></i></span>
															</div>
															
															</div>
														</div>
														
														<div class="form-group">
															<div class="input-group input-group-alternative">
																<div class="input-group-prepend">
																	<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
																	<label for="">Price
																	<select class="form-control" name="price" id="select"></label>
																		<option value="">please select..</option>
																		<option value="<?php echo "$".$value['mon_price'];?> ">Monthly </option>
																		<option value="<?php echo "$".$value['annual_price'];?> ">Annually</option>
																	</select>
																</div>
															
															<!-- <input class="form-control" placeholder="Available" type="text"> -->
															</div>
														</div>
														<div class="text-center">
															<input type="hidden" id="pid" value="<?php echo $value['prod_id'];?>">
															
															<a href="catpage.php" id="update" >Submit</a>
														</div>
														</form>
													</div>
													</div>
												</div>
												</div>
											</div>
											</div>
											<?}}?>
											
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- clients -->
				<div class="clients">
					<div class="container">
						<h3>Some of our satisfied clients include...</h3>
						<ul>
							<li><a href="#"><img src="images/c1.png" title="disney" /></a></li>
							<li><a href="#"><img src="images/c2.png" title="apple" /></a></li>
							<li><a href="#"><img src="images/c3.png" title="microsoft" /></a></li>
							<li><a href="#"><img src="images/c4.png" title="timewarener" /></a></li>
							<li><a href="#"><img src="images/c5.png" title="disney" /></a></li>
							<li><a href="#"><img src="images/c6.png" title="sony" /></a></li>
						</ul>
					</div>
				</div>
       			<!-- clients -->
					<div class="whatdo">
						<div class="container">
							<h3><?php foreach ($hostingData as $value){
										echo $value['prod_name'];
							}?></h3>
							<div class="what-grids">
								<div class="col-md-4 what-grid">
									<div class="what-left">
									<i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 what-grid">
									<div class="what-left">
									<i class="glyphicon glyphicon-dashboard" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 what-grid">
									<div class="what-left">
									<i class="glyphicon glyphicon-stats" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="what-grids">
								<div class="col-md-4 what-grid">
									<div class="what-left">
									<i class="glyphicon glyphicon-download-alt" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 what-grid">
									<div class="what-left">
									<i class="glyphicon glyphicon-move" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 what-grid">
									<div class="what-left">
									<i class="glyphicon glyphicon-screenshot" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

				</div>
				<?php require "footer.php";?>
			
			<script>
			$(document).ready(function(){
				$('#update').click(function(e){
					e.preventDefault();
					var id =$('#pid').val();
					alert(id);
					var price= $('#select').val();
					alert(price);
					
					$.ajax({
					url : "intermediate.php",
					type : "post",
					data : {id : id,
							price :price,
							action : "addtocart"},
					success: function(data){

						alert(data);
					}
					});
				});
			});
			
			</script>
	</body>
</html>
<?php
 
session_start();

require "Dbconnection.php";
require "User.php";

if (isset($_POST['submit'])) {
    $username =  $_POST['username'];
    $email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$question = $_POST['question'];
    $answer = $_POST['answer'];
	$password = $_POST['password'];
    $repassword = $_POST['confirm_password'];

    $User = new User();
    $Connection = new Dbconnection();

    $sql = $User->signup($username, $email, $mobile, $question, $answer,  $password, $repassword, $Connection->con);
    echo $sql;

}
?>
<?php require "header.php";?>
<title>Account page</title>
<!--script-->
<link rel="stylesheet" href="css/swipebox.css">
<script src="js/jquery.swipebox.min.js"></script> 
	<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
		$(document).ready(function(){
			$('#answer').hide();
			$('#question').change(function(){
				$('#answer').show();
			});
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
								<li><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
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
		<!---login--->
			<div class="content">
				<!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">
		  	  <form action ="account.php" method ="post"> 
				 <div class="register-top-grid">
					<h3>personal information</h3>
					 <div>
						<span>Name<label>*</label></span>
						<input  type="text" name = "username" required> 
					 </div>
					 <div>
						 <span>Email Address<label>*</label></span>
						 <input  type="email" name ="email" required> 
					 </div>
					 <div>
						<span>Mobile<label>*</label></span>
						<input type="number" name ="mobile" required> 
					 </div>
					 <div>
						<span>Security question<label>*</label></span>
						<select  name="question" id="question">
							<option value="">please select the security question</option>
							<option value="1">What was your childhood nickname?</option>
							<option value="2">What is the name of your favourite childhood friend?</option>
							<option value="3">What was your favourite place to visit as a child?</option>
							<option value="4">What was your dream job as a child?</option>
							<option value="5">What is your favourite teacher's nickname?</option>
						</select>

						<!-- <input type="text" name = "question" required>  -->
					 </div>
					 <div id="answer">
						<span>Security answer<label>*</label></span>
						<input  type="text" name = "answer"  required> 
					 </div>
					 <!-- <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a>-->
					 </div>
				     <div class="register-bottom-grid">
						    <h3>login information</h3>
							 <div>
								<span>Password<label>*</label></span>
								<input  type="password" name = "password" required>
							 </div>
							 <div>
								<span>Confirm Password<label>*</label></span>
								<input  type="password" name = "confirm_password" required>
							 </div>
					 </div>
					 	<div class="register-but">
						 <input type="submit" value="submit" name = "submit" required>
						 <div class="clearfix"> </div>
					</div>
					 
				</form>
				<div class="clearfix"> </div>
				<div class="register-but">
				   <form action="">
					   <!-- <input type="submit" value="submit" name = "submit"> -->
					   <div class="clearfix"> </div>
					</form>
				</div>
		   </div>
		 </div>
	</div>
<!-- registration -->

			</div>
<!-- login -->
<?php require "footer.php";?>
</body>
</html>
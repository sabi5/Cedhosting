<?php
 
session_start();

require "Dbconnection.php";
require "User.php";

require "Product.php";

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// require '/home/cedcoss/vendor/autoload.php';


$Product = new Product();
$Connection = new Dbconnection();

$catList = $Product->categoryList($Connection->con);

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
	// echo $sql;

	// $otp = rand(1000,9999);
    // $_SESSION['otp']=$otp;
    // $mail = new PHPMailer();
    // try {
    //     $mail->isSMTP(true);
    //     $mail->Host = 'smtp.gmail.com';
    //     $mail->SMTPAuth = true;
    //     $mail->Username = 'cedcossarjun1023@gmail.com';
    //     $mail->Password = 'Cedcoss@1023';
    //     $mail->SMTPSecure = 'tls';
    //     $mail->Port = 587;

    //     $mail->setfrom('cedcossarjun1023@gmail.com', 'CedHosting');
    //     $mail->addAddress($email);
    //     $mail->addAddress($email, $username);

    //     $mail->isHTML(true);
    //     $mail->Subject = 'Account Verification';
    //     $mail->Body = 'Hi User,Here is your otp for account verification: '.$otp;
    //     $mail->AltBody = 'Body in plain text for non-HTML mail clients';
    //     $mail->send();
    //     // header('location: verification.php?email=' . $email);
    // } catch (Exception $e) {
    //     echo "Mailer Error: " . $mail->ErrorInfo;
	// }
	

	// // mobile otp


	// $_SESSION['mobileotp']=$otp;
	// $fields = array(
	// 	"sender_id" => "FSTSMS",
	// 	"message" => "Your OTP: " . $otp,
	// 	"language" => "english",
	// 	"route" => "p",
	// 	"numbers" => "$mobile",
	// );
	
	// $curl = curl_init();
	
	// curl_setopt_array($curl, array(
	//   CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
	//   CURLOPT_RETURNTRANSFER => true,
	//   CURLOPT_ENCODING => "",
	//   CURLOPT_MAXREDIRS => 10,
	//   CURLOPT_TIMEOUT => 30,
	//   CURLOPT_SSL_VERIFYHOST => 0,
	//   CURLOPT_SSL_VERIFYPEER => 0,
	//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	//   CURLOPT_CUSTOMREQUEST => "POST",
	//   CURLOPT_POSTFIELDS => json_encode($fields),
	//   CURLOPT_HTTPHEADER => array(
	// 	"authorization: hwnRxDly6bZvHrOIWiL0GQSMAJKNEke1BaYz79oduXTmtVcpqf0uGp4lZLDRJEOqMa321AFvm8QCre5c",
	// 	"accept: */*",
	// 	"cache-control: no-cache",
	// 	"content-type: application/json"
	//   ),
	// ));
	
	// $response = curl_exec($curl);
	// $err = curl_error($curl);
	
	// curl_close($curl);
	
	// if ($err) {
	// //   echo "cURL Error #:" . $err;
	// echo "<script>alert('Mail should not be send on DND Numbers !')</script>";
	// } else {
	// //   echo $response;
	// echo "<script>alert('Your OTP has been send successfully !')</script>";
	// }
	

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
								<li><a href="login.php">Login</a></li>
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
					 <br>
						<span>Name<label>*</label></span>
						<input  type="text" name = "username" class="form-control" required> 
						<small style = "color:green">
						-White spaces not allowed,<br>
						-More than one space not allowed between First name and last name,<br>
						-Name should contain only alphabets(i.e. no numeric data, no special character).
						</small>
					 </div><br>
					 <div>
						 <span>Email Address<label>*</label></span>
						 <input  type="email" name = "email" class="form-control" required> 
						 <small style = "color:green">
							-Format-email,<br>
							-Two decimal(.) not allowed together,<br>
							-White spaces no allowed,<br>
							-No special character except @. <br>
						 </small>
					 </div><br>
					 <div>
						<span>Mobile<label>*</label></span>
						<input type="number" name ="mobile" class="form-control" required> 
						<small style = "color:green">-All values should not be identical(i.e. 1111111111),<br>
								-Decimal is not allowed(.),<br>
								-Only numeric values should be entered,
								<!-- -Maximum 11 digits including preceding 0 and max 10 digits excluding preceding 0,<br> -->
								<!-- -Number should not contain more than one 0's in starting,<br> -->
						</small>
					 </div><br>
					 <div>
						<span>Password<label>*</label></span>
						<input  type="password" name = "password" class="form-control" required>
						<small style = "color:green">
							-No whites paces,<br>
							-Range 8-16 character,<br>
							-Combination of UPPERCASE, lowercase, special character and numeric <value class="br"></value>
						</small>
					 </div><br>
					 <div>
						<span>Confirm Password<label>*</label></span>
						<input  type="password" name = "confirm_password" class="form-control" required>
					 </div><br>
					 <div>
						<span>Security question</span>
						<select  name="question" id="question" class="form-control">
							<option value="">please select the security question</option>
							<option value="1">What was your childhood nickname?</option>
							<option value="2">What is the name of your favourite childhood friend?</option>
							<option value="3">What was your favourite place to visit as a child?</option>
							<option value="4">What was your dream job as a child?</option>
							<option value="5">What is your favourite teacher's nickname?</option>
						</select>
						<div id="answer">
							<span>Security answer</span>
							<input  type="text" name = "answer" class="form-control"> 
					 	</div>
						 <!-- <small style = "color:green">
							-No whites paces,
							-Can be alpha-numeric combination/ only alphabetic,
							-Will be CASE-SENSITIVE(i.e. 'Name' and 'name' will be considered as different answers).
						 </small> -->
					</div><br>
					<div class="register-but">
						<input type="submit" value="submit" name = "submit" required>
						<div class="clearfix"> </div>
					</div><br>
					 
					</div>
				     <div class="register-bottom-grid">
						<!-- <h3>login information</h3> -->
							<!-- <div>
							<span>Password<label>*</label></span>
							<input  type="password" name = "password" class="form-control" required>
							</div>
							<div>
							<span>Confirm Password<label>*</label></span>
							<input  type="password" name = "confirm_password" class="form-control" required>
							</div>
							<div>
						<span>Security question<label>*</label></span>
						<select  name="question" id="question" class="form-control">
							<option value="">please select the security question</option>
							<option value="1">What was your childhood nickname?</option>
							<option value="2">What is the name of your favourite childhood friend?</option>
							<option value="3">What was your favourite place to visit as a child?</option>
							<option value="4">What was your dream job as a child?</option>
							<option value="5">What is your favourite teacher's nickname?</option>
						</select> -->

					 </div>
					 <!-- <div id="answer">
						<span>Security answer<label>*</label></span>
						<input  type="text" name = "answer" class="form-control" required> 
					 </div>
					 </div>
					 	<div class="register-but">
						 <input type="submit" value="submit" name = "submit" required>
						 <div class="clearfix"> </div>
						</div> -->
					 
				</form>
				<div class="clearfix"> </div>
				<div class="register-but">
				   <form action="">
					   <!-- <input type="submit" value="submit" name = "submit"> -->
					   <div class="clearfix"></div>
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
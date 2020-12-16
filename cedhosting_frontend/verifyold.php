<?php
 
session_start();

require "Dbconnection.php";
require "User.php";
$Connection = new Dbconnection();
$User = new User();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '/home/cedcoss/vendor/autoload.php';

// $catList = $Product->categoryList($Connection->con);
$email = $_GET['email'];
$mobile = $_GET['mobile'];


if (isset($_POST['eotpSubmit'])){

    $emailotp = $_POST['emailotp'];
    if($emailotp == $_SESSION['otp']){
        $sql = $User->emailVerify($Connection->con);
        echo $sql;   
    }

}

// email otp send

if (isset($_POST['emailSubmit'])) {
    
    echo "hello";
    
    // ************************

    $otp = rand(1000,9999);
    $_SESSION['otp']= $otp;
    $mail = new PHPMailer();
    try {
        $mail->isSMTP(true);
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'cedcossarjun1023@gmail.com';
        $mail->Password = 'Cedcoss@1023';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setfrom('cedcossarjun1023@gmail.com', 'CedHosting');
        $mail->addAddress($email);
        $mail->addAddress($email, $username);

        $mail->isHTML(true);
        $mail->Subject = 'Account Verification';
        $mail->Body = 'Hi User,Here is your otp for account verification: '.$otp;
        $mail->AltBody = 'Body in plain text for non-HTML mail clients';
        $mail->send();
        // header('location: verification.php?email=' . $email);
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
    
}elseif(isset($_POST['mobileSubmit'])){

	//mobile otp


	$_SESSION['mobileotp']=$otp;
	$fields = array(
		"sender_id" => "FSTSMS",
		"message" => "Your OTP: " . $otp,
		"language" => "english",
		"route" => "p",
		"numbers" => "$mobile",
	);
	
	$curl = curl_init();
	
	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_SSL_VERIFYHOST => 0,
	  CURLOPT_SSL_VERIFYPEER => 0,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => json_encode($fields),
	  CURLOPT_HTTPHEADER => array(
		"authorization: hwnRxDly6bZvHrOIWiL0GQSMAJKNEke1BaYz79oduXTmtVcpqf0uGp4lZLDRJEOqMa321AFvm8QCre5c",
		"accept: */*",
		"cache-control: no-cache",
		"content-type: application/json"
	  ),
	));
	
	$response = curl_exec($curl);
	$err = curl_error($curl);
	
	curl_close($curl);
	
	if ($err) {
	//   echo "cURL Error #:" . $err;
	echo "<script>alert('Mail should not be send on DND Numbers !')</script>";
	} else {
	//   echo $response;
	echo "<script>alert('Your OTP has been send successfully !')</script>";
	}
}


?>
    <?php require "header.php";?>
    <title>Verification page</title>
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
                        <form action ="verify.php" method ="post"> 
                            <div class="register-top-grid">
                                <h3>Verify Your Email </h3> 
                                <div>
                                    <span>Email Address<label>*</label></span>
                                    <input  type="email" name = "email" class="form-control" value = "<?php echo $email;?>" required> 
                                    <div class="register-but">
                                        <input type="submit" value="Verify your email" name = "emailSubmit" required>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            
                <div class="container">
                    <div class="register">
                        <form action ="verify.php" method ="post"> 
                            <div class="register-top-grid">
                                <h3>Verify Your Email </h3> 
                                <div>
                                    <span>OTP<label>*</label></span>
                                    <input type="text" name ="emailotp" class="form-control" required> 
                                    <div class="register-but">
                                        <input type="submit" value="Verify your OTP" name = "eotpSubmit" required>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>    
                        
                <div class="container">
                    <div class="register">
                        <form action ="verify.php" method ="post"> 
                            <div class="register-top-grid">
                                <h3>Verify Your Mobile no.</h3>
                                <div>
                                    <span>Mobile no.<label>*</label></span>
                                    <input  type="number" name = "" class="form-control" value = "<?php echo $mobile;?>" required> 
                                    <div class="register-but">
                                        <input type="submit" value="Verify your mobile no" name = "mobileSubmit" required>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>            
                            </div>
                        </form>
                    </div>
                </div>

                <div class="container">
                    <div class="register">
                        <form action ="verify.php" method ="post"> 
                            <div class="register-top-grid">
                                <h3>Verify Your Mobile no.</h3>
                                <div>
                                    <span>OTP<label>*</label></span>
                                    <input type="text" name ="mobile" class="form-control" required> 
                                    <div class="register-but">
                                        <input type="submit" value="Verify your OTP" name = "motpSubmit" required>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>    
            </div>
            <!-- registration --> 
        </div>
        <!-- login -->
        <?php require "footer.php";?>
    </body>
</html>
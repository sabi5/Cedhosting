<?php
 
session_start();

require "Dbconnection.php";
require "User.php";
$Connection = new Dbconnection();
$User = new User();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '/home/cedcoss/vendor/autoload.php';

$error='';
$msg='';
$errorem='';
$errores='';
if (isset($_GET['email'])) {
    $email = $_GET['email'];
    $mobile = $_GET['mobile'];
    $username = $_GET['name'];
}
  if (isset($_POST['submitEmail'])) {
    // $data=$useractive->dublicateusername($_POST['email'], '12456');
    // if($data){
      $otp = rand(1000,9999);
      $_SESSION['otp']=$otp;
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
        //   $msg = "Dear $username OTP has been sent please check your email !";

          echo "<script>alert('Your Email OTP has been send successfully !')</script>";
          // header('location: verification.php?email=' . $email);
      } catch (Exception $e) {
          echo "Mailer Error: " . $mail->ErrorInfo;
      }
    // }
    // else{
    //   $errores='This Email is not register';
    // }

 
}
if(isset($_POST['submitMobile'])){
//   $data=$useractive->dublicateusername('asdsds@dnfj', $_POST['Mobileotp']);
//   if($data){
    $MobileOtp = rand(1000,9999);
    $_SESSION['mobileOtp']=$MobileOtp;
    $fields = array(
      "sender_id" => "FSTSMS",
      "message" => "This is Test message" . $MobileOtp,
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
      "authorization: kb1YNOlwIxFVvrMsySQD6etE3JARPpu87fZj9Gz0g5m4cdTLiqV8f9WTbqFodk3PIOpXMDRlzmKLCE10",
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
	echo "<script>alert('Your Mobile OTP has been send successfully !')</script>";
	}
//   }
//   else {
//     $errorem='This Mobile is not register';
//   }
}
if(isset($_POST['verifyEmail'])){
  if($_SESSION['otp']==$_POST['email']){
   
    $data=$User->activeEmail($_GET['email'] , $Connection->con);
    // if($data){
    //     echo "<script>alert('Your email is successfully verified !')</script>";
    //   echo '<script>window.location.href="login.php";</script>';
    // }
  }
  else{
    $error="Incorrect OTP";
  }
}
if(isset($_POST['submitOtp'])){
  if($_SESSION['mobileOtp']==$_POST['otp']){
    
    $data=$User->activeMobile($_GET['mobile'] , $Connection->con);
    // if($data){
    //   $errorms="Your Mobile Is Successfully verified";
    //   echo '<script>window.location.href="login.php";</script>';
    // }
    
  }
  else{
    $error="Incorrect OTP";
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
                <div class="main-1">
                    <div class="container">
                        <div class="login-page">
                            <div class="account_grid">
                                <div class="col-md-6 login-right">
                                    <h3>Verify Your Account Using Email</h3>
                                    <p>You can verify yourself through email</p>

                                    <!-- send email otp -->
                                    <form action="" method="post">
                                      <div>
                                        <span>Email Address<label>*</label></span>
                                        <input type="email" name="email" > 
                                      </div>
                                      <input type="submit" name ="submitEmail" value="Verify through Email">
                                      <p class="text-success"><?php echo $msg; ?></p>
                                      <span id="alertsuccess"><?php echo (isset($errores))?$errores:''; ?></span>
                                      <span id="alerterror"><?php echo (isset($errore))?$errore:''; ?></span>
                                    </form>

                                    <!-- verify email otp -->
                                    <form action="" method="post">
                                      <div>
                                        <span>Enter OTP<label>*</label></span>
                                        <input type="text" name="email"> 
                                      </div>
                                      <input type="submit" name ="verifyEmail" id="verifyEmail" value="Validate OTP">
                                      <span id="success"><?php echo (isset($error))?$error:''; ?></span>
                                    </form>
                                </div>
                                <div class="col-md-6 login-right">
                                    <h3>Verify Your Account Using Mobile</h3>
                                    <p>You can verify yourself through mobile</p>

                                    <!-- send mobile otp -->
                                    <form action="" method="post">
                                      <div>
                                        <span>Mobile<label>*</label></span>
                                        <input type="text" name="Mobileotp" > 
                                      </div>                                
                                      <input type="submit" name ="submitMobile" value="Verify through Mobile">
                                      <span id="alertsuccess"><?php echo (isset($errorem))?$errorem:''; ?></span>
                                      <span id="success"><?php echo (isset($errorms))?$errorms:''; ?></span>
                                    </form>

                                    <!-- verify mobile otp -->
                                    <form action="" method="post">
                                      <div>
                                        <span>Mobile<label>*</label></span>
                                        <input type="text" name="otp" > 
                                      </div>                                
                                      <input type="submit" name ="submitOtp" value="Validate OTP">
                                    </form>
                                </div>  
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- login -->
        <?php require "footer.php";?>
    </body>
</html>
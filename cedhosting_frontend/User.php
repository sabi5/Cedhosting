<?php 

// session_start();
// require "Dbconnection.php";

class User {

    public $user_id;
    public $username;
    public $email;
    public $dateofsignup;
    public $mobile;
    public $question;
    public $answer;
    public $isblock;
    public $password;
    public $repassword ;
    public $isadmin;
    public $con;
    

    function login ($email, $password, $con){

        $email = trim($email); 
        $password = trim($password); 

        $sql = "SELECT * FROM `tbl_user` where `email` = '$email'";
        
        $query = $con->query($sql);
        
        if ($query->num_rows > 0) {
            $rtn = "success";

            $username_pass = $query->fetch_assoc();
            
            $email = $username_pass['email'];
            // echo $email;
           
            setcookie('username', $email, time() + (86400 * 30), "/"); // 86400 = 1 day
               
                $db_pass = $username_pass['password'];
                $_SESSION['user'] = array('username'=>$username_pass['name'],
                            'id'=>$username_pass['id'], 'is_admin'=>$username_pass['is_admin'], 'active'=>$username_pass['active'], 'email'=>$username_pass['email']);   
                            // print_r($_SESSION['user']);
                
                // ************* end cookies
                if ($password==$db_pass) {
                    if ($_SESSION['user']['is_admin'] == 1) {
                    //    echo "<script>alert('Admin login successful');</script>";
                        
                        echo  "<script>location.replace('../cedhosting_backend/index.php');</script>";
                    } elseif($_SESSION['user']['active'] == 1) {
                        // echo "<script>alert('Inserted Successfully');</script>";
                        echo "<script>location.replace('index.php');</script>";
                        

                    } else{
                        echo "<script>alert('Sorry! please verify your email or mobile no. to get access');</script>";
                        echo "<script>location.replace('login.php');</script>";
                    }
                    
                } else {
                    echo "<script>alert('password Incorrect');</script>";
                }
        
        } else {
                echo "<script>alert('Invalid Email');</script>";
            }
    }

    function signup($username, $email, $mobile, $question, $answer,  $password, $repassword, $con){

            if (isset($_POST['submit'])) {
                
                $length = strlen ($mobile); 
                $lenpass = strlen ($password);
                $answer = trim($answer);
                $answer = strtolower($answer);
                $password = trim($password);
                $repassword = trim($repassword); 
                $username = trim($username); 
                $email = trim($email);
                $mobile = trim($mobile); 
                $question = trim($question);  

                $mobileval="";
                $split = str_split($mobile, 1);
                $count =0;
                //echo $split[5];
                if(strlen($mobile) == 10) {
                    $mobileval = '/^[1-9]{1}[0-9]{9}$/';
                    if (preg_match ($mobileval, $mobile) ) {  
                        
                        foreach($split as $k=>$val) {
                            if($k < 9) {
                                if($split[$k] == $split[$k+1]) {
                                    $count++;
                                }
                            }
                        }
                        if($count == 9) {
                            $mobileErr = "All value should not be identical";
                            $r = true;
                        }
                    }
                    else {
                        $mobileErr = "Decimal is not allowed(.),
                        -Only numeric values should be entered,
                        -Maximum 10 digits excluding preceding 0";
                        $r = true;
                    }
                }
                if(strlen($mobile) == 11) {
                    $mobileval = '/^[0][1-9][0-9]{9}$/';
                    if (preg_match ($mobileval, $mobile) ) {  
                        foreach($split as $k=>$val) {
                            if($k >0 && $k <10) {
                                if($split[$k] == $split[$k+1]) {
                                    $count++;
                                }
                            }
                        }
                        if($count == 9) {
                            $mobileErr = "All value should not be identical";
                            $r = true;
                        }
                    }
                    else {
                        $mobileErr = "Decimal is not allowed(.),
                        -Only numeric values should be entered,
                        -Maximum 11 digits including preceding 0,
                        -Number should not contain more than one 0's in starting,";
                        $r = true;
                    }
                }elseif (!preg_match('/^([a-zA-Z]+\s?)*$/', $username)){ 
            
                    echo "<script>alert('Username must contain letters only');</script>";

                }
                elseif(!preg_match('/^[a-zA-Z0-9._]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/', $email)){
                    echo "<script>alert('email must contain letters & digits only');</script>";

                }elseif(!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*?[#?!@$%^&*-])\S{8,16}$/', $password)){

                    echo "<script>alert('password invalid');</script>";
                }
                
                elseif($lenpass < 8 || $lenpass > 16){
                    echo "<script>alert('password is too short!.. min length should be 8');</script>";
                }
                elseif( $length < 10 || $length > 10) {  
                    echo "<script>alert('Mobile must have 10 digits');</script>";

                }else{
            
                    $emailquery = "SELECT * FROM tbl_user WHERE email='$email'";
                    $query = mysqli_query($con, $emailquery);
                
                    $emailcount = mysqli_num_rows($query);
                
                    if ($emailcount > 0) {
                        echo("<script>alert('Email already exists');</script>");
                    } else {
                        if ($password === $repassword) {
                            $insertquery = "INSERT INTO tbl_user (email, name, mobile, email_approved, phone_approved, active, is_admin, sign_up_date, password, security_question, security_answer) 
                                    VALUES ('$email', '$username', '$mobile', 0, 0, 0, 0, NOW(), '$password', '$question', '$answer')";
                
                            $iquery = mysqli_query($con, $insertquery);
                            
                            if ($iquery) {
                                echo "<script>alert('Inserted Successful');</script>";
                                // echo "<script>location.replace('verify.php?');</script>";
                                header('location: verify.php?email='.$email.'&mobile='.$mobile.'&name='.$username);
                            } else {
                                echo "<script>alert('Not inserted');</script>";
                            }
                        } else {
                            echo("<script>alert('Password not matched');</script>");
                        }
                    }
                }
            }
        
    }

    function activeEmail($email, $con){

        $sql = "UPDATE `tbl_user` SET `email_approved` = '1', `active` = '1'
                WHERE `email` = '$email' ";
                if ($con->query($sql) === true) {
                    echo "<script>alert('Your email is successfully verified !')</script>";
                    echo '<script>window.location.href="login.php";</script>';
                } else {
                    $msg = "Error updating record: " . $con->error;
                }
    }

    function activeMobile($mobile, $con){

        $sql = "UPDATE `tbl_user` SET `phone_approved` = '1', `active` = '1'
                WHERE `mobile` = '$mobile' ";
                if ($con->query($sql) === true) {
                    echo "<script>alert('Your mobile is successfully verified !')</script>";
                    echo '<script>window.location.href="login.php";</script>';
                } else {
                    $msg = "Error updating record: " . $con->error;
                }
    }

}
?>
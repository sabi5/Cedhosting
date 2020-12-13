<?php

session_start();
require "../cedhosting_frontend/Dbconnection.php";

if($_POST['action'] == "delete"){

    $id = $_POST['delete_id'];

    $Connection = new Dbconnection();
    $conn = $Connection->con;

    $id = $_POST['delete_id'];
    $q = "DELETE FROM tbl_product WHERE `id` = '$id'";
    $result = mysqli_query($conn, $q);

    if($result) {
    echo "YES";
    } else {
    echo "NO";
    }
}
if($_POST['action'] == "edit"){

    $id = $_POST['id'];
    $productname = $_POST['productname'];
    $link = $_POST['link'];
    $available = $_POST['available'];
    echo $available;
    echo $productname."helloo";

    $Connection = new Dbconnection();
    $conn = $Connection->con;

    // $id = $_POST['edit_id'];
    // $id = $_POST['id'];
    $insert = " UPDATE tbl_product SET `prod_name` = '$productname', 
            `link`='$link', `prod_available`='$available' WHERE  `id` = '$id' ";
    
    $uquery = mysqli_query($conn, $insert);

    // $_SESSION['user']['username'] = $username;
    
    // if ($uquery) {
    //     echo '<script> alert("Updated successfully")</script>';
    //     ?>
    <!-- //     <script>location.replace("customer.php")</script> -->
         <?php


    if($uquery) {
    echo "YES";
    } else {
    echo "NO";
    }
}

?>
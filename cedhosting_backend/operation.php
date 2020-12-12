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

?>
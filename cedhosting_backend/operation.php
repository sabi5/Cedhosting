<?php

session_start();
require "../cedhosting_frontend/Dbconnection.php";
require "../cedhosting_frontend/Product.php";

$Connection = new Dbconnection();
$conn = $Connection->con;
$Product = new Product();

// *********** Delete Category

if($_POST['action'] == "delete"){

    $id = $_POST['delete_id'];

    $Connection = new Dbconnection();
    $conn = $Connection->con;
    

    $qd = "DELETE FROM `tbl_product_description` WHERE `prod_id` = '$id'";
    $result = mysqli_query($conn, $qd);

    $ql = "DELETE FROM `tbl_product` WHERE `id` = '$id'";
    $result = mysqli_query($conn, $ql);

    $q = "DELETE FROM `tbl_product` WHERE `prod_parent_id` = '$id'";
    $result = mysqli_query($conn, $q);

    $result = mysqli_query($conn, $qd);

    if($result) {
    echo "YES";
    } else {
    echo "NO";
    }
}

// *********** Delete Product

if($_POST['action'] == "delete_product"){

    $id = $_POST['deleteid'];
    $result=$Product->deleteProduct($id, $Connection->con);
}

if($_POST['action'] == "edit"){
    $id = $_POST['id'];
    $productname = $_POST['productname'];
    // $link = $_POST['link'];
    $available = $_POST['available'];
   
    $Connection = new Dbconnection();
    $conn = $Connection->con;

    $insert = "UPDATE `tbl_product` SET `prod_name` = '$productname', `prod_available`='$available' WHERE  `id` = '$id'";
   
    $uquery = mysqli_query($conn, $insert);
    if ($uquery) {
        echo "yes";
       
    } else {
        echo "no";
        
    }
}


if (isset($_POST['action']) && $_POST['action'] == 'editProduct') {
    $id = $_POST['id'];

    $data = $Product->editProduct($id, $conn);
    echo $data;
}

if (isset($_POST['action']) && $_POST['action'] == 'addtocart') {
    $id = $_POST['id'];

    $data = $Product->addCart($id,$price, $conn);
    echo $data;
}



if (isset($_POST['action']) && $_POST['action'] == 'updateProduct') {
    
    $productName = $_POST['productName'];
    $pageUrl = $_POST['pageUrl'];
    $monthPrice = $_POST['monthPrice'];
    $annualPrice = $_POST['annualPrice'];
    $sku = $_POST['sku'];
    $webspace = $_POST['webspace'];
    $bandwidth = $_POST['bandwidth'];
    $freedomain = $_POST['freedomain'];
    $language = $_POST['language'];
    $mailbox = $_POST['mailbox'];
    $proid = $_POST['proid'];

    $msg = $Product->updateProduct($productName, $pageUrl, $monthPrice, $annualPrice, $sku, $webspace, $bandwidth, $freedomain, $language, $mailbox, $proid, $conn);
    echo $msg;
}
?>
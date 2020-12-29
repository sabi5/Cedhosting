<?php

session_start();
require "Dbconnection.php";
require "Product.php";

$Connection = new Dbconnection();
$conn = $Connection->con;
$Product = new Product();


if (isset($_POST['action']) && $_POST['action'] == 'addtocart') {
    $id = $_POST['id'];
    $price =$_POST['price'];
    $data = $Product->addCart($id, $price, $conn);
   
}
   
// ************ cart item deleted
if($_POST['action'] == "delete_cart"){

    $id = $_POST['delete_id'];
    // $result=$Product->deleteCart($id, $Connection->con);
  
    foreach ( $_SESSION['cartArray'] as $key=>$value) {
        foreach($value as $k=>$v)
        {
            if ($id == $v['prod_id']) {
                unset($_SESSION['cartArray'][$key][$k]);
                echo "YES";
            }
        }
    }
    
}




?>
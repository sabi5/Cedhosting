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

    if($_SESSION['cartArray'] == "") {
        $data = $Product->addCart($id, $price, $conn);
        echo $data;
    }else{
        foreach($_SESSION['cartArray'] as $key=>$value) {

            foreach($value as $k=>$v){

                if($v['prod_id'] == $id) {
                    echo "product already exists";
                }else{
                    $data = $Product->addCart($id, $price, $conn);
                     echo $data;
                }
            }
        }

    }
}
   





?>
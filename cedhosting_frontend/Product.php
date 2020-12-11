<?php 

class Product {

    public $con;
    public $name;
    public $product_name;
    public $link;
    
    function categoryInsert ( $product_name, $link, $con){

        if (isset($_POST['submit'])) {
            
            $insertquery = "INSERT INTO tbl_product (prod_parent_id, prod_name, link, prod_available, prod_launch_date) 
                    VALUES ('1', '$product_name', 'Null', '1', NOW())";

            $iquery = mysqli_query($con, $insertquery);
            
            if ($iquery) {
                echo "<script>alert('Inserted Successful');</script>";
            } else {
                echo "<script>alert('Not inserted');</script>";
            }
        } else {
            echo("<script>alert('Password not matched');</script>");
        }
    }

    function category( $con){

        // $name = $_SESSION['user']['username'];
       
        $data =array();
        
        $sql = "SELECT * FROM `tbl_product` WHERE `id`= '1'";
        // echo $sql;
        $query = $con->query($sql);
        // echo ( $query);
        
        if ($query->num_rows > 0) {

            while($row = $query->fetch_assoc()){
                $data[] = $row;
                // print_r($row);
            }
            return $data;
        }
    
    }

    function categoryList( $con){

        // $name = $_SESSION['user']['username'];
       
        $data =array();
        
        $sql = "SELECT * FROM `tbl_product` WHERE `link` = 'Null'";
        // echo $sql;
        $query = $con->query($sql);
        // echo ( $query);
        
        if ($query->num_rows > 0) {

            while($row = $query->fetch_assoc()){
                $data[] = $row;
                // print_r($row);
            }
            return $data;
        }
    
    }

    // function categoryNav( $con){

    //     // $name = $_SESSION['user']['username'];
       
    //     $data =array();
        
    //     $sql = "SELECT * FROM `tbl_product` WHERE `link` = 'Null'";
    //     // echo $sql;
    //     $query = $con->query($sql);
    //     // echo ( $query);
        
    //     if ($query->num_rows > 0) {

    //         while($row = $query->fetch_assoc()){
    //             $data[] = $row;
    //             // print_r($row);
    //         }
    //         return $data;
    //     }
    
    // }

    function addProduct ($select, $product_name, $page_url, $monthly_price, $annual_price, $sku, $web_space, $bandwidth,        $free_domain, $language_support, $mailbox, $con){

        if (isset($_POST['submit'])) {
            
            $description = array('webspace' => $web_space,
                                'bandwidth' => $bandwidth,
                                'freedomain' => $free_domain,
                                'language' => $language_support,
                                'mailbox' => $mailbox);

            $description_json = json_encode($description);

            $insertquery = "INSERT INTO tbl_product (prod_parent_id, prod_name, link, prod_available, prod_launch_date) 
                    VALUES ($select, '$product_name', 'Null', '1', NOW())";

            if (mysqli_query($con, $insertquery)) {
                $last_id = mysqli_insert_id($con);
                // echo "New record created successfully. Last inserted ID is: " . $last_id;
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
            }

            $insertquery = "INSERT INTO tbl_product_description (prod_id, description , mon_price, annual_price, sku) 
                    VALUES ('$last_id', '$description_json', '$monthly_price', '$annual_price', '$sku')";

            $iquery = mysqli_query($con, $insertquery);

            $insertquery = "";
            
            if ($iquery) {
                echo "<script>alert('Inserted Successful');</script>";
            } else {
                echo "<script>alert('Not inserted');</script>";
            }

        } 
    }

    function view($con){

        $data =array();
        
        $sql = "SELECT `tbl_product`.*,`tbl_product_description`.* FROM tbl_product JOIN tbl_product_description ON `tbl_product`.`id` = `tbl_product_description`.`prod_id`";
        // echo $sql;
        $query = $con->query($sql);
        // echo ( $query);

        // $obj = json_decode($jsonobj);
        // echo $obj->Peter;
        // echo $obj->Ben;
        // echo $obj->Joe;
        $row =($query->fetch_assoc());
        print_r($row);
        echo ($row['description']);
        $decode_desc = $row['description'];
        $obj = json_decode($decode_desc);
        print_r($obj);

        $web_space = $obj->webspace;
        $bandwidth = $obj->bandwidth;
        $free_domain = $obj->freedomain;
        $language_support = $obj->language;
        $mailbox = $obj->mailbox;

        if ($query->num_rows > 0) {

            while($row = $query->fetch_assoc()){
                // print_r($row);
                $data[] = $row;
                // print_r($row);
            }
            return $data;
            // return $web_space;
            // return $bandwidth;
            // return $free_domain;
            // return $language_support;
            // return $mailbox;
        }
    


    }
}
?>
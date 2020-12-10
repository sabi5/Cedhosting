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
}
?>
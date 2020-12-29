<?php 

class Product {

    public $con;
    public $name;
    public $product_name;
    public $link;
    
    function categoryInsert ( $product_name, $link, $con){

        if (isset($_POST['submit'])) {

            $product_name = trim($product_name);
            $link =  trim($link);


            if (!preg_match('/(^([a-zA-Z]+\.[0-9]+$))|(^([a-zA-Z]+[0-9]+\.[0-9]+$))|(^([a-zA-Z]+[a-zA-Z0-9]+$))|(^([a-zA-Z])+$)/', $product_name)){

                echo "<script>alert('Product name must contain letters and single only');</script>";

            }
            // elseif (!preg_match('/(^([a-zA-Z]+\.[0-9]+$))|(^([a-zA-Z]+[0-9]+\.[0-9]+$))|(^([a-zA-Z]+[a-zA-Z0-9]+$))|(^([a-zA-Z])+$)/', $link)){

            //     echo "<script>alert('Link must contain letters and single only');</script>";

            // }
            
            else{
            
                $insertquery = "INSERT INTO tbl_product (prod_parent_id, prod_name, html, prod_available, prod_launch_date) 
                        VALUES ('1', '$product_name', 'Null', '1', NOW())";

                $iquery = mysqli_query($con, $insertquery);
                
                if ($iquery) {
                    echo "<script>alert('Inserted Successful');</script>";
                } else {
                    echo "<script>alert('Not inserted');</script>";
                }
            }
        } else {
            echo("<script>alert('Password not matched');</script>");
        }
    }

    function category( $con){

        $data =array();
        
        $sql = "SELECT * FROM `tbl_product` WHERE `id`= '1'";
      
        $query = $con->query($sql);
        
        if ($query->num_rows > 0) {

            while($row = $query->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    
    }

    function categoryList( $con){

        $data =array();
        
        $sql = "SELECT * FROM `tbl_product` WHERE `prod_parent_id` = '1' AND `prod_available` = '1'";
      
        $query = $con->query($sql);
        
        if ($query->num_rows > 0) {

            while($row = $query->fetch_assoc()){
                $data[] = $row;
               
            }
            return $data;
        }
    
    }

    function addProduct ($select, $product_name, $page_url, $monthly_price, $annual_price, $sku, $web_space, $bandwidth,        $free_domain, $language_support, $mailbox, $con){

        if (isset($_POST['submit'])) {

            $product_name = trim($product_name);
            $page_url = trim($page_url);
            $monthly_price = trim($monthly_price);
            $annual_price = trim($annual_price);
            $sku = trim($sku);
            $web_space = trim($web_space);
            $bandwidth = trim($bandwidth);
            $free_domain = trim($free_domain);
            $language_support = trim($language_support);
            $mailbox = trim($mailbox);


            if (!preg_match('/(^([a-zA-Z]+\-[0-9]+$))|(^([a-zA-Z]+[0-9]+\-[0-9]+$))|(^([a-zA-Z]+[a-zA-Z0-9]+$))|(^([a-zA-Z])+$)/', $product_name)){

                echo "<script>alert('Product name must contain letters only');</script>";

            }elseif(!preg_match('/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/', $monthly_price) ){

                echo "<script>alert('Monthly Price must contain only numeric data and single only');</script>";

            }elseif(!preg_match('/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/', $annual_price) ){

                echo "<script>alert('Annual Price must contain only numeric data and single . only');</script>";

            }elseif(!preg_match('/^(([a-zA-Z0-9-#?]+)([a-zA-Z0-9]+))|(([a-zA-Z0-9-#?]+)([a-zA-Z0-9]+)([-#?]))+$/', $sku) ){

                echo "<script>alert('Invalid SKU');</script>";

            }elseif(!preg_match('/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/', $bandwidth) ){

                echo "<script>alert('Bandwidth must contain only numeric and single .');</script>";
            }
            elseif(!preg_match('/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/', $web_space) ){

                echo "<script>alert('Webspace must contain only numeric and single .');</script>";
            }elseif(!preg_match('/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/', $free_domain) ){

                echo "<script>alert('Webspace must contain only numeric and single .');</script>";
            }elseif(!preg_match('/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/', $mailbox) ){

                echo "<script>alert('Mailbox must contain only numeric and single .');</script>";

            }elseif(!preg_match('/(^([a-zA-Z]+[0-9]+\,[a-zA-Z]+[0-9]+$))|(^([a-zA-Z]+[0-9]+\,[a-zA-Z]+$))|(^([a-zA-Z]+\,[a-zA-Z]+[0-9]+$))|(^([a-zA-Z]+\,[a-zA-Z]+$))|(^([a-zA-Z])+$)/', $language_support) ){

                echo "<script>alert('Language must contain only numeric and single .');</script>";
            }
            
            else{
                $description = array('webspace' => $web_space,
                                    'bandwidth' => $bandwidth,
                                    'freedomain' => $free_domain,
                                    'language' => $language_support,
                                    'mailbox' => $mailbox);

                $description_json = json_encode($description);

                $insertquery = "INSERT INTO tbl_product (prod_parent_id, prod_name, html, prod_available, prod_launch_date) 
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
    }

    function view($con){

        $data =array();
        
        $sql = "SELECT `tbl_product`.*,`tbl_product_description`.* FROM `tbl_product` JOIN `tbl_product_description` ON `tbl_product`.`id` = `tbl_product_description`.`prod_id`";
     
        $query = $con->query($sql);
       
        if ($query->num_rows > 0) {
          
            while($row = $query->fetch_assoc()){
               
                $data[] = $row; 
            }
            return $data;
        }
    }
    
    // *********** show parent product name

    function viewParent($id, $con) {
        $sql = "SELECT * FROM `tbl_product` WHERE `id` = '$id'";
        $query = $con->query($sql);
        if ($query->num_rows > 0) {
          
            while($row = $query->fetch_assoc()){
               
                $data[] = $row; 
            }
            return $data;
        }
    }

    function deleteProduct($id, $con){
        
        $q = "DELETE FROM tbl_product WHERE `id` = '$id'";
        $result = mysqli_query($con, $q);

        if($result) {
            echo "YES";
        } else {
            echo "NO";
        }
    }

    function editProduct($id, $con)
    {
        $sql = "SELECT `tbl_product`.*,`tbl_product_description`.* FROM tbl_product JOIN tbl_product_description ON `tbl_product`.`id` = `tbl_product_description`.`prod_id` WHERE `tbl_product`.`id` = '$id' ";
        $result = $con->query($sql);
        while (($data = $result->fetch_assoc())) {
           

            $descDescript = json_decode($data['description']);
            $webspace = $descDescript->{'webspace'};
            $bandwidth = $descDescript->{'bandwidth'};
            $freedomain = $descDescript->{'freedomain'};
            $language = $descDescript->{'language'};
            $mailbox = $descDescript->{'mailbox'};

            $row[] = array("prod_id"=>$data['prod_id'], "prod_parent_id"=>$data['prod_parent_id'], "prod_name"=>$data['prod_name'], "html"=>$data['html'], "prod_available"=>$data['prod_available'], "prod_launch_date"=>$data['prod_launch_date'],"webspace"=>$webspace, "bandwidth"=>$bandwidth, "freedomain"=>$freedomain, "language"=>$language, "mailbox"=>$mailbox, "mon_price"=>$data['mon_price'], "annual_price"=>$data['annual_price'], "sku"=>$data['sku'], "id"=>$data['id']);
        }
        echo json_encode($row);

    }



    /**
     * Function for update product
     * 
     * @param productName  $productName  comment
     * @param pageUrl      $pageUrl      comment
     * @param monthPrice   $monthPrice   comment
     * @param annualPrice  $annualPrice  comment
     * @param sku          $sku          comment
     * @param webSpace     $webSpace     comment
     * @param bandWidth    $bandWidth    comment
     * @param freeDomain   $freeDomain   comment
     * @param language     $language     comment
     * @param mailBox      $mailBox      comment
     * @param proid  $proid  comment
     * 
     * @return updateProduct()
     */
    function updateProduct($productName, $pageUrl, $monthPrice, $annualPrice, $sku, $webspace, $bandwidth, $freedomain, $language, $mailbox, $proid, $con)
    {

        $productName = trim($productName);
        $pageUrl = trim($pageUrl);
        $monthPrice = trim($monthPrice);
        $annualPrice = trim($annualPrice);
        $sku = trim($sku);
        $webspace = trim($webspace);
        $bandwidth = trim($bandwidth);
        $freedomain = trim($freedomain);
        $language = trim($language);
        $mailbox = trim($mailbox);

        if (!preg_match('/(^([a-zA-Z]+\-[0-9]+$))|(^([a-zA-Z]+[0-9]+\-[0-9]+$))|(^([a-zA-Z]+[a-zA-Z0-9]+$))|(^([a-zA-Z])+$)/', $productName)){

            echo "<script>alert('Product name must contain letters only');</script>";

        }elseif(!preg_match('/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/', $monthPrice) ){

            echo "<script>alert('Monthly Price must contain only numeric data and single only');</script>";

        }elseif(!preg_match('/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/', $annualPrice) ){

            echo "<script>alert('Annual Price must contain only numeric data and single . only');</script>";

        }elseif(!preg_match('/^(([a-zA-Z0-9-#?]+)([a-zA-Z0-9]+))|(([a-zA-Z0-9-#?]+)([a-zA-Z0-9]+)([-#?]))+$/', $sku) ){

            echo "<script>alert('Invalid SKU');</script>";

        }elseif(!preg_match('/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/', $bandwidth) ){

            echo "<script>alert('Bandwidth must contain only numeric and single .');</script>";
        }
        elseif(!preg_match('/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/', $webspace) ){

            echo "<script>alert('Webspace must contain only numeric and single .');</script>";
        }elseif(!preg_match('/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/', $freedomain) ){

            echo "<script>alert('Webspace must contain only numeric and single .');</script>";
        }elseif(!preg_match('/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/', $mailbox) ){

            echo "<script>alert('Mailbox must contain only numeric and single .');</script>";

        }elseif(!preg_match('/(^([a-zA-Z]+[0-9]+\,[a-zA-Z]+[0-9]+$))|(^([a-zA-Z]+[0-9]+\,[a-zA-Z]+$))|(^([a-zA-Z]+\,[a-zA-Z]+[0-9]+$))|(^([a-zA-Z]+\,[a-zA-Z]+$))|(^([a-zA-Z])+$)/', $language) ){

            echo "<script>alert('Language must contain only numeric and single .');</script>";
        }
        
        else{

            $description = array('webspace' => $webspace,
                                'bandwidth' => $bandwidth,
                                'freedomain' => $freedomain,
                                'language' => $language,
                                'mailbox' => $mailbox);

            $description_json = json_encode($description);

            $sql = "UPDATE `tbl_product` SET `prod_name` = '$productName', `html` = '$pageUrl'
            WHERE `id` = '$proid' ";
            if ($con->query($sql) === true) {
            
                $sql = "UPDATE `tbl_product_description` SET `description` = '$description_json', `mon_price` = '$monthPrice', `annual_price` = '$annualPrice', `sku` = '$sku'
                WHERE `prod_id` = '$proid' ";
                if ($con->query($sql) === true) {
                    $msg = "Record updated successfully";
                } else {
                    $msg = "Error updating record: " . $con->error;
                }
            } else {
                $msg = "Error updating record: " . $con->error;
            }
            return $msg;
        }
    }

    // ***********************edit category


    function hostingData($id, $con){
        $data =array();
        
        $sql = "SELECT * FROM `tbl_product` WHERE `id` = '$id'";
      
        $query = $con->query($sql);
        
        if ($query->num_rows > 0) {

            while($row = $query->fetch_assoc()){
                $data[] = $row;
        
            }
            return $data;
        }
    }

    function hostingproductData($id, $con){
        $data =array();
        
        $sql = "SELECT a.*, b.* FROM `tbl_product` as a INNER JOIN tbl_product_description as b on a.id = b.prod_id WHERE a.prod_parent_id= '$id' and a.prod_available =1";
      
        $query = $con->query($sql);
        
        if ($query->num_rows > 0) {

            while($row = $query->fetch_assoc()){
                $data[] = $row;
        
            }
            return $data;
        }
    }
    

    function addCart($id, $price, $con)
    {
        if(!isset($_SESSION['cartArray'])){
            $_SESSION['cartArray'] = array();
       }
            // $_SESSION['cartArray'] = array();
            $row =array();
            $ret = "";
            $r = false;

            $sql = "SELECT `tbl_product`.*,`tbl_product_description`.* FROM tbl_product JOIN tbl_product_description ON `tbl_product`.`id` = `tbl_product_description`.`prod_id` WHERE `tbl_product`.`id` = '$id' ";
            $result = $con->query($sql);
            while (($data = $result->fetch_assoc())) {
            

                $descDescript = json_decode($data['description']);
                $webspace = $descDescript->{'webspace'};
                $bandwidth = $descDescript->{'bandwidth'};
                $freedomain = $descDescript->{'freedomain'};
                $language = $descDescript->{'language'};
                $mailbox = $descDescript->{'mailbox'};

                $row[] = array("prod_id"=>$data['prod_id'], "prod_parent_id"=>$data['prod_parent_id'], "prod_name"=>$data['prod_name'], "prod_launch_date"=>$data['prod_launch_date'],"webspace"=>$webspace, "bandwidth"=>$bandwidth, "freedomain"=>$freedomain, "language"=>$language, "mailbox"=>$mailbox, "price"=>$price, "sku"=>$data['sku'], "id"=>$data['id']);
                    
            }

            foreach($_SESSION['cartArray'] as $key=>$value) {

                foreach($value as $k=>$v){
    
                    if($v['prod_id'] == $id) {
                        $r = true;
                        break;
                    }else{
                      $r = false;
                       
                    //echo "product added successfully";
                    }
                }
            }
            if($r == false) {
                array_push($_SESSION['cartArray'], $row);
                print_r($_SESSION['cartArray']);
                echo "product added successfully";
            }
            else {
                print_r($_SESSION['cartArray']);
                echo "product already exists";
            }
           
            // return $ret;

    }

    // foreach ( $_SESSION['cartArray'] as $key=>$value) {
    //     if ($id == $_SESSION['cartArray'][$key]['id']) {
    //         unset($_SESSION['cartArray'][$key]);
            
    //     }
    // }

     // item deleted from cart
    //  function deleteCart($id, $con){
    //     foreach ( $_SESSION['cartArray'] as $key=>$value) {
    //         foreach($value as $k=>$v)
    //         {
    //             if ($id == $v['prod_id']) {
    //                 unset($_SESSION['cartArray'][$key][$k]);
    //                 echo "YES";
    //             }
    //         }
    //     }
    // }
}
?>
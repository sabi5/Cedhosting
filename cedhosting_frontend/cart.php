<?php

session_start();
require "Dbconnection.php";
require "User.php";

require "Product.php";


$Product = new Product();
$Connection = new Dbconnection();

// $catList = $Product->addCart($Connection->con);



// if(isset($_SESSION['user']['username']) && $_SESSION['user']['is_admin'] == 1){
//     echo  "<script>location.replace('admin/admin.php');</script>";
// }elseif(isset($_SESSION['user']['username']) && $_SESSION['user']['is_admin'] == 0){
//     echo  "<script>location.replace('index.php');</script>";
// }

if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $checked = $_POST['remember_me'];
    $User = new User();
    $Connection = new Dbconnection();

   
    $sql = $User->login($email, $password, $Connection->con);
    echo $sql;
}


?>
<?php require "header.php";?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> 
<link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">

<script>
    $(document).ready(function(){
    $("#myTable").dataTable();
    });
</script>

<!--script-->
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
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
								<li><a href="account.php">Signup</a></li>
								<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
								
							</ul>
									  
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
	<!---header--->

	<div class="row container text-center">
        <div class="col-xl-12 text-center">
		
		<!-- $row[] = array("prod_id"=>$data['prod_id'], "prod_parent_id"=>$data['prod_parent_id'], "prod_name"=>$data['prod_name'], "prod_launch_date"=>$data['prod_launch_date'],"webspace"=>$webspace, "bandwidth"=>$bandwidth, "freedomain"=>$freedomain, "language"=>$language, "mailbox"=>$mailbox, "price"=>$price, "sku"=>$data['sku'], "id"=>$data['id']); -->
            
            <div class="table-responsive">
              <!-- Projects table -->
              <table id ="myTable" class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <!-- <th scope="col">Id</th> -->
					<!-- id | Product Name | Product Category | sku | Billing Cycle | Amount | Action
					1. Linux Business Linux Hosting 224 Monthly $54 Remove -->
                
                    <th scope="col">Id</th>
                    <th scope="col">Product name</th>
                    <th scope="col">Product Category</th>
                    <th scope="col">SKU</th>
                    <th scope="col">Biling Cycle</th>
					<th scope="col">Amount</th>
					<th scope="col">Action</th>
                   
                  </tr>
                </thead>
                <tbody class="text-center">
                  <?php
				//   var_dump($_SESSION['cartArray']);
                    foreach($_SESSION['cartArray'] as $value){
						foreach ($value as $a => $b){

							$proname = $Product->viewParent($b['prod_parent_id'], $Connection->con);
							// print_r($b);
                  ?>
                        
                    <tr id= "<?php echo $b['id']; ?>">

                    	<td class="text-center"><?php echo $b['id']; ?></td>
						<td ><?php echo $b['prod_name']; ?></td>
						<td ><?php echo $proname[0]['prod_name']; ?></td>   
						<td ><?php echo $b['sku']; ?></td> 
						<td ><?php echo "Monthly"; ?></td>                    
						<td><?php echo $b['price']; ?></td>
						<td><a href="cart.php" id="<?php echo $b['id']; ?>" class="delete_data"><i class='fas fa-trash' style='font-size:24px'></i></a></td>
                      
                    </tr>
                  <?php
                  } }?>
                </tbody>
              </table>
            </div>
        </div>
    </div>
<?php require "footer.php";?>
<script>
	$(document).ready(function(){

    
		$(document).on('click', '.delete_data', function(){
		var delete_id = $(this).attr('id');
		// var $ele = $(this).parent().parent();
		alert (delete_id);
		$.ajax({
			url : "intermediate.php",
			type : "post",
			data : {delete_id : delete_id, action : "delete_cart"},
			dataType:'JSON',
			success: function(data){
				if(data=="YES"){
					// $ele.fadeOut().remove();
					alert ("Product deleted from cart successfully");
					location.reload();
				}else{
					alert ("can't deleted");
				}
			}
		});
		});
	});

</script>
</body>
</html>
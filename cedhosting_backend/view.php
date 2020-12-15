<?php 
    session_start();
    
    require "../cedhosting_frontend/Dbconnection.php";
    require "../cedhosting_frontend/Product.php";
    
    $Product = new Product();
    $Connection = new Dbconnection();
    $sql = $Product->view($Connection->con);
    
?>

<?php require "header.php";?>
  <!-- ************** -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> 
<link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">
<script>
    $(document).ready(function(){
    $("#myTable").dataTable();
    });

</script>
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="examples/dashboard.html">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
          </ul>

          <hr class="my-3">
          <h6 class="navbar-heading p-0 text-muted">
          <span class="docs-normal">Products</span>
          </h6>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="category.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Create Category</span>
              </a>
              
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addproduct.php">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Add Product</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view.php">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">View Products</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Create New Offers</span>
              </a>
            </li>
        </ul>
        <hr class="my-3">
          <h6 class="navbar-heading p-0 text-muted">
          <span class="docs-normal">Orders</span>
          </h6>
          <ul  class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="examples/login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Pending Orders</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Completed Orders</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Cancelled Orders</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/upgrade.html">
                <i class="ni ni-send text-pink"></i>
                <span class="nav-link-text">Generate Invoice</span>
              </a>
            </li>
          </ul>
          <hr class="my-3">
          <h6 class="navbar-heading p-0 text-muted">
          <span class="docs-normal">Services</span>
          </h6>
          <ul  class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="examples/login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Active Services</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Expired Services</span>
              </a>
            </li>
          </ul>
          <hr class="my-3">
          <h6 class="navbar-heading p-0 text-muted">
          <span class="docs-normal">Users</span>
          </h6>
          <ul  class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="examples/login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">All User List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Create New User</span>
              </a>
            </li>
          </ul>
          <hr class="my-3">
          <h6 class="navbar-heading p-0 text-muted">
          <span class="docs-normal"> Blog</span>
          </h6>
          <ul  class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="examples/login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Add New Blog</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">View all Blogs</span>
              </a>
            </li>
          </ul>
          <hr class="my-3">
          <h6 class="navbar-heading p-0 text-muted">
          <span class="docs-normal">Accounts</span>
          </h6>
          <ul  class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="examples/login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text"> Update Company Info</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Change Security Ques</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Change Password</span>
              </a>
            </li>
          </ul>
          
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>

                          <?php $name = $_SESSION['user']['username'];?>
                            <h4 class="mb-0 text-sm"><?php echo $name;?></h4>
                            
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"> <?php $name = $_SESSION['user']['username'];
                    echo $name;
                    // print_r($_SESSION['user']);
                    ?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="../cedhosting_frontend/logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Default </h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt">
      <div class="row">
        <div class="col-xl-12">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h1 class="mb-0">Product List</h1>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table id ="myTable" class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Product Id</th>
                    <!-- <th scope="col">prod_parent_id</th> -->
                    <th scope="col">Product name</th>
                    <th scope="col">Product link</th>
                    <th scope="col">Product available</th>
                    <th scope="col">Product launchdate</th>
                    <!-- <th scope="col">prod_id</th> -->
                    <th scope="col">webspace</th>
                    <th scope="col">bandwidth</th>
                    <th scope="col">freedomain</th>
                    <th scope="col">Language</th>
                    <th scope="col">Mailbox</th>
                    <th scope="col">month price</th>
                    <th scope="col">annual price</th>
                    <th scope="col">SKU</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php if(!empty($sql)):?>
               
                  <?php
                    foreach($sql as $value){
                      $decode_desc = $value['description'];
                      $obj = json_decode($decode_desc);
                    // print_r($obj);
                      $web_space = $obj->webspace;
                      $bandwidth = $obj->bandwidth;
                      $free_domain = $obj->freedomain;
                      $language_support = $obj->language;
                      $mailbox = $obj->mailbox;
                  ?>
                        
                    <tr>
                      <td><?php echo $value['prod_id']; ?></td>
                      <td><?php echo $value['prod_name']; ?></td>
                      <td><?php echo $value['html']; ?></td>
                      <td><?php if($value['prod_available'] == 1){ echo "Available";} else { echo "Unavailable";} ?></td>
                      <td><?php echo $value['prod_launch_date']; ?></td>
                      <td><?php echo $web_space; ?></td>
                      <td><?php echo $bandwidth; ?></td>
                      <td><?php echo $free_domain; ?></td>
                      <td><?php echo $language_support; ?></td>
                      <td><?php echo $mailbox; ?></td>
                      <td><?php echo $value['mon_price']; ?></td>
                      <td><?php echo $value['annual_price']; ?></td>
                      <td><?php echo $value['sku'];?></td>
                      

                      <td><a href="view.php" id="<?php echo $value['prod_id']; ?>" title='Delete' class="delete"><i class='fas fa-trash' style='font-size:24px'></i></a></td>
                      
                      <td><a  href="view.php" data-id="<?php echo $value['prod_id']; ?>" id="editProduct" title='Edit' data-toggle="modal" data-target="#exampleModalSignUp"><i class='fas fa-edit' style='font-size:24px'></i></a></td>
                      
                    </tr>
                  <?php
                  } ?>
                   <?php endif;?>
                </tbody>
              </table>
            </div>
        </div>
      </div>
      

      <!-- MODAL -->
  <div class="col-md-4">
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalSignUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-secondary shadow border-0 mb-0">
              <div class="card-header bg-white pb-5">
                <div class="text-muted text-center mb-3">
                  <small>Update Details</small>
                </div>
              </div>
              <div class="card-body px-lg-5 py-lg-5">
              <form role="form" action ="" method ="post">
                <div class="form-group">
                  <label for="product">Select Product Category  <span style = "color:red">*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                   <select name="select" id="select" onfocusout = "validate()" class="form-control">
                       <option value="please select" disabled >Please Select</option>
                       <option value="1" >Linux Hosting</option>
                       <option value="2" >Windows Hosting</option>
                       <option value="3" >CMS Hosting</option>
                       <option value="4" >WordPress Hosting</option>
                   </select>
                   <div class="invalid-feedback">
                        please enter valid product name
                    </div>
               
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Enter Product Name<span style = "color:red">*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" id="product" placeholder="Enter Product name" type="text" name = "product_name" onfocusout = "validate()" required>
                    <div class="invalid-feedback">
                        please enter valid product name
                    </div>
                  </div>
                </div>
                <div class="form-group">
                <label for="">Page URL</label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Enter Product name" type="text" id="pageurl" name = "page_url">
                    <!-- <div class="invalid-feedback" id ="error3">
                        please enter valid product name
                    </div> -->
                  </div>
                </div>
                <hr>
                <div class="text-muted text-center mt-2 mb-4"><h2>Product Description</h2></div>
                <div class="text-center text-muted mb-4">
                <small>Enter Product Description Below</small>
                </div>
                <div class="form-group">
                    <label for="">Enter Monthly Price <span style = "color:red">*</span></label>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" id ="month" onfocusout = "validate()" placeholder="ex: 23" type="text" name ="monthly_price" required><br>
                    <div class="invalid-feedback">
                        please enter valid product name
                    </div>
                  </div><br>
                  <span><h6>This would be Monthly Plan</h6></span>
                </div>
                <div class="form-group">
                    <label for="">Enter Annual Price <span style = "color:red">*</span></label>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" id = "annual" onfocusout = "validate()" placeholder="ex: 23" type="text" name ="annual_price" required><br>
                    <div class="invalid-feedback">
                        please enter valid product name
                    </div>
                  </div><br>
                  <span><h6>This would be Annual Plan</h6></span>
                </div>

                <div class="form-group">
                    <label for="">SKU <span style = "color:red">*</span></label>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" id = "sku" onfocusout = "validate()" placeholder="" type="text" name ="sku" required><br>
                    <div class="invalid-feedback">
                        please enter valid product name
                    </div>
                  </div>
                </div>
                <hr>
                <div class="text-muted text-center mt-2 mb-4"><h2>Features</h2></div>
                <hr>
                
                <div class="form-group">
                <label for="">Web Space(in GB) <span style = "color:red">*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" onfocusout = "validate()" id="webspace" placeholder="" type="text" name = "web_space" required>
                    <div class="invalid-feedback">
                        please enter valid product name
                    </div>
                  </div>
                  <span><h6>Enter 0.5 for 512 MB</h6></span>
                </div>

                <div class="form-group">
                <label for="">Bandwidth (in GB) <span style = "color:red">*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" onfocusout = "validate()" id="bandwidth" placeholder="" type="text" name = "bandwidth" required>
                    <div class="invalid-feedback">
                        please enter valid product name
                    </div>
                  </div>
                  <span><h6>Enter 0.5 for 512 MB</h6></span>
                </div>
                <div class="form-group">
                <label for="">Free Domain <span style = "color:red">*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" onfocusout = "validate()" id="free" placeholder="" type="text" name = "free_domain" required>
                    <div class="invalid-feedback">
                        please enter valid product name
                    </div>
                  </div>
                  <span><h6>Enter 0 if no domain available in this service</h6></span>
                </div>
                <div class="form-group">
                <label for="">Language / Technology Support <span style = "color:red">*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" onfocusout = "validate()" id ="language" placeholder="" type="text" name = "language_support" required>
                    <div class="invalid-feedback">
                        please enter valid product name
                    </div>
                  </div>
                  <span><h6>Separate by (,) Ex: PHP, MySQL, MongoDB</h6></span>
                </div>
                <div class="form-group">
                <label for="">Mailbox <span style = "color:red">*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" onfocusout = "validate()" id ="mailbox" placeholder="" type="text" name = "mailbox" required>
                    <div class="invalid-feedback" >
                        please enter valid product name
                    </div>
                  </div>
                  <span><h6>Enter Number of mailbox will be provided, enter 0 if none</h6></span>
                </div>
                <div class="text-center">
                  <input type="submit" class="btn btn-primary mt-4" name ="submit" id="updateProduct" value ="Update Now">
                </div>
                <input type="hidden" id = "proid">
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <?php require "footer.php";?>
    <script>
      $(document).ready(function(){

        $(document).on('click', '.delete', function(){
          var deleteid = $(this).attr('id');
          var $ele = $(this).parent().parent();
          var confirm = confirm("Are you sure?");
          // alert (deleteid);
          if(confirm == true){
            $.ajax({
              url : "operation.php",
              type : "post",
              data : {deleteid : deleteid, action : "delete_product"},
              success: function(data){
                    if(data=="YES"){
                      
                        //$ele.fadeOut().remove();
                        alert ("Account deleted Successfully");
                    }else{
                        alert (data);
                    }
                }
            });
          }
        }); 

        $('#myTable').on('click', '#editProduct', function(){

          var id = $(this).data('id');
          // alert(id);
          $.ajax({
              url : 'operation.php',
              type : 'POST',
              data : {
                  id : id,
                  action : 'editProduct',
              },
              dataType : 'json',
              success : function(msg)
              {
                  console.log(msg);
                  // console.log(msg[0]['prod_id']);
                  $('#product').val(msg[0]['prod_name']);
                  $('#select').val(msg[0]['prod_available']);

                  $('#pageurl').val(msg[0]['html']);
                  $('#month').val(msg[0]['mon_price']);
                  $('#annual').val(msg[0]['annual_price']);
                  $('#sku').val(msg[0]['sku']);
                  $('#webspace').val(msg[0]['webspace']);
                  $('#bandwidth').val(msg[0]['bandwidth']);
                  $('#free').val(msg[0]['freedomain']);
                  $('#language').val(msg[0]['language']);
                  $('#mailbox').val(msg[0]['mailbox']);
                  $('#proid').val(msg[0]['prod_id']);

              }
          });
        });

        $('#updateProduct').click(function(e){
            e.preventDefault();
            var productName = $('#product').val();
            var pageUrl = $('#pageurl').val();
            var monthPrice = $('#month').val();
            var annualPrice = $('#annual').val();
            var sku = $('#sku').val();
            var webspace = $('#webspace').val();
            var bandwidth = $('#bandwidth').val();
            var freedomain = $('#free').val();
            var language = $('#language').val();
            var mailbox = $('#mailbox').val();
            
            var proid = $('#proid').val();

            $.ajax({
                url : 'operation.php',
                type : 'POST',
                data : {
                    // cid : cid,
                    productName : productName,
                    pageUrl : pageUrl,
                    monthPrice : monthPrice,
                    annualPrice : annualPrice,
                    sku : sku,
                    webspace : webspace,
                    bandwidth : bandwidth,
                    freedomain : freedomain,
                    language : language,
                    mailbox : mailbox,
                    proid : proid,
                    action : 'updateProduct'
                },
                success : function(msg)
                {
                    alert(msg);
                    window.location.reload();
                }
            });

        });

      }); 

      function validate(){
      var select = document.getElementById('select').value;
      var product = document.getElementById('product').value;
      var month = document.getElementById('month').value;
      var annual = document.getElementById('annual').value;
      var sku = document.getElementById('sku').value;
      var webspace = document.getElementById('webspace').value;
      var bandwidth = document.getElementById('bandwidth').value;
      var free = document.getElementById('free').value;
      var language = document.getElementById('language').value;
      var mailbox = document.getElementById('mailbox').value;      

        if(select == ""){
            $('#select').addClass('is-invalid');  
        } else {
          $('#select').removeClass('is-invalid');
        }

        if(product == ""){
          $('#product').addClass('is-invalid');
           
        } else {
          $('#product').removeClass('is-invalid');   
        }

        if(month == ""){
          $('#month').addClass('is-invalid');
           
        } else {
          $('#month').removeClass('is-invalid');
        }

        if(annual == ""){
          $('#annual').addClass('is-invalid');
           
        } else {
          $('#annual').removeClass('is-invalid');
        }

        if(sku == ""){
          $('#sku').addClass('is-invalid');
           
        } else {
          $('#sku').removeClass('is-invalid');
            
        }

        if(webspace == ""){
          $('#webspace').addClass('is-invalid');
            
        } else {
          $('#webspace').removeClass('is-invalid');
           
        }

        if(bandwidth == ""){
          $('#bandwidth').addClass('is-invalid');
           
        } else {
          $('#bandwidth').removeClass('is-invalid');
           
        }

        if(free == ""){
          $('#free').addClass('is-invalid'); 
            
        } else {
          $('#free').removeClass('is-invalid');
          
        }
        if(language == ""){
          $('#language').addClass('is-invalid');
            
        } else {
          $('#language').removeClass('is-invalid');
            
        }
        if(mailbox == ""){
          $('#mailbox').addClass('is-invalid');
           
        } else {
          $('#mailbox').removeClass('is-invalid');
           
        }
  }

  $(document).ready(function (){
    validate1();
    $('#select, #product, #month, #annual, #sku, #webspace, #bandwidth, #language, #mailbox, #free').change(validate1);
});

function validate1(){
    if ($('#select').val().length   >   0   &&
        $('#product').val().length  >   0   &&
        $('#month').val().length  >   0   &&
        $('#annual').val().length  >   0   &&
        $('#sku').val().length  >   0   &&
        $('#webspace').val().length  >   0   &&
        $('#bandwidth').val().length  >   0   &&
        $('#language').val().length  >   0   &&
        $('#mailbox').val().length  >   0   &&
        $('#free').val().length    >   0) {
        $("input[type=submit]").prop("disabled", false);
    }
    else {
        $("input[type=submit]").prop("disabled", true);
    }
}

    </script>
  </div>
  
</body>

</html>

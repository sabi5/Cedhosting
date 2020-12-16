<?php 
    session_start();
    
    require "../cedhosting_frontend/Dbconnection.php";
    require "../cedhosting_frontend/Product.php";
    

    $Product = new Product();
    $Connection = new Dbconnection();

    if (isset($_POST['submit'])) {
        $select =  $_POST['select'];
        $product_name = $_POST['product_name'];
        $page_url = $_POST['page_url'];
        $monthly_price = $_POST['monthly_price'];
        $annual_price = $_POST['annual_price'];
        $sku = $_POST['sku'];
        $web_space = $_POST['web_space'];
        $bandwidth = $_POST['bandwidth'];
        $free_domain = $_POST['free_domain'];
        $language_support = $_POST['language_support'];
        $mailbox = $_POST['mailbox'];
        $addProduct = $Product->addProduct( $select, $product_name, $page_url, $monthly_price, $annual_price, $sku, $web_space, $bandwidth, $free_domain, $language_support, $mailbox,  $Connection->con);
    }
    
    // $sql = $Product->addProduct($Connection->con);
    // $catList = $Product->categoryList($Connection->con);
  
?>

<?php require "header.php";?>

  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>

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
    <div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class="col-xl-8">
         
          <div class="card bg-secondary border-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-4"><h1>Create New Product</h1></div>
              <div class="text-center text-muted mb-4">
                <small>Enter Product Details</small>
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              
              <form role="form" action ="addproduct.php" method = "post">
                <div class="form-group">
                  <label for="product">Select Product Category  <span style = "color:red">*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                   <select name="select" id="select" onfocusout = "validate()" class="form-control productcat">
                       <option value="please select"  disabled>Please Select</option>
                       <option value="1" >Linux Hosting</option>
                       <option value="2" >Windows Hosting</option>
                       <option value="3" >CMS Hosting</option>
                       <option value="4" >WordPress Hosting</option>
                   </select>
                   <span class="pcat"> Please Chose category</span>
                   
                    <!-- <input class="form-control" placeholder="" type="text" name = "name"> -->
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Enter Product Name<span style = "color:red">*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control productname" id="product" placeholder="Enter Product name" type="text" name = "product_name" onfocusout = "validate()" required>
                    <span class="pname" >invalid product name</span>
                  </div>
                </div>
                <div class="form-group">
                <label for="">Page URL</label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control purl" placeholder="Enter Product name" type="text" name = "page_url">
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
                    <input class="form-control mprice" id ="month" onfocusout = "validate()" placeholder="ex: 23" type="text" name ="monthly_price" required><br>
                    <span class="mp" >invalid cridentials</span>
                  </div><br>
                  <span><h6>This would be Monthly Plan</h6></span>
                </div>
                <div class="form-group">
                    <label for="">Enter Annual Price <span style = "color:red">*</span></label>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control aprice" id = "annual" onfocusout = "validate()" placeholder="ex: 23" type="text" name ="annual_price" required><br>
                    <span class="ap" >invalid cridentials</span>
                  </div><br>
                  <span><h6>This would be Annual Plan</h6></span>
                </div>

                <div class="form-group">
                    <label for="">SKU <span style = "color:red">*</span></label>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control skuid" id = "sku" onfocusout = "validate()" placeholder="" type="text" name ="sku" required><br>
                    <span class="sku" >invalid cridentials</span>
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
                    <input class="form-control wspace" onfocusout = "validate()" id="webspace" placeholder="" type="text" name = "web_space" required>
                    <span class="wsp" >invalid cridentials</span>
                  </div>
                  <span><h6>Enter 0.5 for 512 MB</h6></span>
                </div>

                <div class="form-group">
                <label for="">Bandwidth (in GB) <span style = "color:red">*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control bwidth" onfocusout = "validate()" id="bandwidth" placeholder="" type="text" name = "bandwidth" required>
                    <span class="bw" >invalid cridentials</span>
                  </div>
                  <span><h6>Enter 0.5 for 512 MB</h6></span>
                </div>
                <div class="form-group">
                <label for="">Free Domain <span style = "color:red">*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control fdomain" onfocusout = "validate()" id="free" placeholder="" type="text" name = "free_domain" required>
                    <span class="fd" >invalid cridentials</span>
                  </div>
                  <span><h6>Enter 0 if no domain available in this service</h6></span>
                </div>
                <div class="form-group">
                <label for="">Language / Technology Support <span style = "color:red">*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control technology" onfocusout = "validate()" id ="language" placeholder="" type="text" name = "language_support" required>
                    <span class="tech" >invalid cridentials</span>
                  </div>
                  <span><h6>Separate by (,) Ex: PHP, MySQL, MongoDB</h6></span>
                </div>
                <div class="form-group">
                <label for="">Mailbox <span style = "color:red">*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control mailbox" onfocusout = "validate()" id ="mailbox" placeholder="" type="text" name = "mailbox" required>
                    <span class="mb" >invalid cridentials</span>
                  </div>
                  <span><h6>Enter Number of mailbox will be provided, enter 0 if none</h6></span>
                </div>
                <div class="text-center">
                  <input type="submit" class="btn btn-primary mt-4 createproductbtn" name ="submit" value ="Create Now">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php require "footer.php";?>
  </div>

  <script>
//     function validate(){
//       var input = document.getElementById('select').value;
//       var product = document.getElementById('product').value;
//       var month = document.getElementById('month').value;
//       var annual = document.getElementById('annual').value;
//       var sku = document.getElementById('sku').value;
//       var webspace = document.getElementById('webspace').value;
//       var bandwidth = document.getElementById('bandwidth').value;
//       var free = document.getElementById('free').value;
//       var language = document.getElementById('language').value;
//       var mailbox = document.getElementById('mailbox').value;      

//         if(input == ""){
//             document.getElementById("error1").style.display = "display";
            
//         } else {
//             document.getElementById("error1").style.display = "none";
//         }

//         if(product == ""){
//             document.getElementById("error2").style.display = "display";
           
//         } else {
//             document.getElementById("error2").style.display = "none";
//         }

//         if(month == ""){
//             document.getElementById("error4").style.display = "display";
           
//         } else {
//             document.getElementById("error4").style.display = "none";
//         }

//         if(annual == ""){
//             document.getElementById("error5").style.display = "display";
           
//         } else {
//             document.getElementById("error5").style.display = "none";
//         }

//         if(sku == ""){
//             document.getElementById("error6").style.display = "display";
            
//         } else {
//             document.getElementById("error6").style.display = "none";
//         }

//         if(webspace == ""){
//             document.getElementById("error7").style.display = "display";
            
//         } else {
//             document.getElementById("error7").style.display = "none";
//         }

//         if(bandwidth == ""){
//             document.getElementById("error8").style.display = "display";
           
//         } else {
//             document.getElementById("error8").style.display = "none";
//         }

//         if(free == ""){
//             document.getElementById("error9").style.display = "display";
            
//         } else {
//             document.getElementById("error9").style.display = "none";
//         }
//         if(language == ""){
//             document.getElementById("error10").style.display = "display";
            
//         } else {
//             document.getElementById("error10").style.display = "none";
//         }
//         if(mailbox == ""){
//             document.getElementById("error11").style.display = "display";
//         } else {
//             document.getElementById("error11").style.display = "none";
//         }
//   }

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
//validation add product form
        // product name validate
        $(".createproductbtn").hide();
           $(".pname").hide();
           $(".mp").hide();
           $(".ap").hide();
           $(".wsp").hide();
           $(".bw").hide();
           $(".tech").hide();
           $(".mb").hide();
           $(".fd").hide();
           $(".sku").hide();
           $(".pcat").hide();
           var pcategory=$(".productcat").val();
           $(".productcat").focusout(function() {
              product_name();
           })
           function product_name(){
            var pname=$(".productname").val();
            var ansletter = /^([a-zA-Z_0-9]+\s?)*$/;
            if(pname.length==''){
              $(".pname").show();
              $(".pname").focus();
              $(".pname").html("** Please enter Product name");
              $(".createproductbtn").hide();
              return false;
            } else if(!pname.match(ansletter)){
              $(".pname").show();
              $(".pname").focus();
              $(".pname").html("** Please enter valid product name Ex: Windows hosting");
              $(".createproductbtn").hide();
            } else{
              $(".pname").hide();
              product_m_price();
              //$("#createproductbtn").show();
            }
            } 
            
            $(".mprice").focusout(function() {
              product_m_price();
             })

            function product_m_price() {
                var monthlyprice=$(".mprice").val();
                var regex = /^[0-9-+()]*$/;
                if(monthlyprice.length==''){
                $(".mp").show();
                $(".mp").focus();
                $(".mp").html("** Please enter  monthly price");
                $(".createproductbtn").hide();
                } else if(!monthlyprice.match(regex)){
                $(".mp").show();
                $(".mp").focus();
                $(".mp").html("** Please enter valid monthly price Ex: 120.00");
                $(".createproductbtn").hide();
                } else {
                  $(".mp").hide();
                  product_a_price();
                 // $("#createproductbtn").show();
                }
               
            }

            $(".aprice").focusout(function() {
              product_a_price();
             })

             function product_a_price() {
              var annualyprice=$(".aprice").val();
              var regex = /^[0-9-+()]*$/;
                if(annualyprice.length==''){
                $(".ap").show();
                $(".ap").focus();
                $(".ap").html("** Please enter  annualy price");
                $(".createproductbtn").hide();
                } else if(!annualyprice.match(regex)){
                $(".ap").show();
                $(".ap").focus();
                $(".ap").html("** Please enter valid annualy price Ex: 120.00");
                $(".createproductbtn").hide();
                } else {
                  $(".ap").hide();
                  sku_id_validate();
                  //$("#createproductbtn").show();
                }
            }


            // sku validate 
            $(".skuid").focusout(function(){
              sku_id_validate();
            });
            function sku_id_validate(){
              var skuid=$(".skuid").val();
              var regex = /^[a-zA-Z0-9-+(#_)]*$/;
              if(skuid.length==''){
                $(".sku").show();
                $(".sku").focus();
                $(".sku").html("** Please enter SKU ID");
                $(".createproductbtn").hide();
                } else if(!skuid.match(regex)){
                $(".sku").show();
                $(".sku").focus();
                $(".sku").html("** Please enter Valid SKU ID Ex: WINDOW#12");
                $(".createproductbtn").hide();
                } else {
                  $(".sku").hide();
                  sku_websp_validate();
                 // $("#createproductbtn").show();
                }
            }
            // web space validate 
            $(".wspace").focusout(function(){
              sku_websp_validate();
            });

            function sku_websp_validate(){
              var webspace=$(".wspace").val();
              var regex = /^[0-9-+(.)]*$/;
              if(webspace.length==''){
                $(".wsp").show();
                $(".wsp").focus();
                $(".wsp").html("** Please enter Web Space In MB");
                $(".createproductbtn").hide();
                } else if(!webspace.match(regex)){
                $(".wsp").show();
                $(".wsp").focus();
                $(".wsp").html("** Please enter Valid web space Ex:12");
                $(".createproductbtn").hide();
                } else {
                  $(".wsp").hide();
                  bandwidth_validate();
                  //$("#createproductbtn").show();
                }
            }
            // band width validate 
            $(".bwidth").focusout(function(){
              bandwidth_validate();
            });

            function bandwidth_validate(){
              var bandwidth=$(".bwidth").val();
              var regex = /^[0-9-+(.)]*$/;
              if(bandwidth.length==''){
                $(".bw").show();
                $(".bw").focus();
                $(".bw").html("** Please enter bandWidth In MB");
                $("#createproductbtn").hide();
                } else if(!bandwidth.match(regex)){
                $(".bw").show();
                $(".bw").focus();
                $(".bw").html("** Please enter Valid Bandwidth Ex:12");
                $("#createproductbtn").hide();
                } else {
                  $(".bw").hide();
                  fd_validate();
                 // $("#createproductbtn").show();
                }
            }

            // free domain validate 
             $(".fdomain").focusout(function(){
              fd_validate();
            });

            function fd_validate(){
              var freedomain=$(".fdomain").val();
              var regex = /^[0-9-+()]*$/;
              if(freedomain.length==''){
                $(".fd").show();
                $(".fd").focus();
                $(".fd").html("** Please enter Number of free domain");
                $(".createproductbtn").hide();
                } else if(!freedomain.match(regex)){
                $(".fd").show();
                $(".fd").focus();
                $(".fd").html("** Please enter Free Domain Ex: 2");
                $(".createproductbtn").hide();
                } else {
                  $(".fd").hide();
                  tech_validate();
                 // $("#createproductbtn").show();
                }
            }
            // technology validate 
            $(".technology").focusout(function(){
                tech_validate();
            });

            function tech_validate(){
              var technology=$(".technology").val();
              var regex = /^[a-zA-Z,]*$/;
              if(technology.length==''){
                $(".tech").show();
                $(".tech").focus();
                $(".tech").html("** Please enter Technology name");
                $(".createproductbtn").hide();
                } else if(!technology.match(regex)){
                $(".tech").show();
                $(".tech").focus();
                $(".tech").html("** Please enter Valid Technology Name Ex: JAVA,PHP ");
                $(".createproductbtn").hide();
                } else {
                  $(".tech").hide();
                  mail_validate();
                 // $("#createproductbtn").show();
                }
            }
             // mailbox validate 
             $(".mailbox").focusout(function(){
                mail_validate();
            });

            function mail_validate(){
              var technology=$(".mailbox").val();
              var regex = /^[0-9]*$/;
              if(technology.length==''){
                $(".mb").show();
                $(".mb").focus();
                $(".mb").html("** Please enter Number Of Mailbox");
                $(".createproductbtn").hide();
                } else if(!technology.match(regex)){
                $(".mb").show();
                $(".mb").focus();
                $(".mb").html("** Please enter number only Ex: 2 ");
                $(".createproductbtn").hide();
                } else {
                  $(".mb").hide();
                  $(".createproductbtn").show();
                }
            }
             // product category validate 
             $(".productcat").focusout(function(){
                cat_validate();
            });
            function cat_validate(){
              var pcat=$(".productcat").val();
              if(pcat.length==''){
                $(".pcat").show();
                $(".pcat").focus();
                $(".pcat").html("** Please Choose category ");
                $(".createproductbtn").hide();
                } else  {
                  $(".pcat").hide();
                  $(".createproductbtn").show();
                }
            }

        
        $(".createproductbtn").on("click", function(e){

          e.preventDefault();
          var pcategory=$(".productcat").val();
          var productname=$(".productname").val();
          var producturl=$(".purl").val();
          var monthlyprice=$(".mprice").val();
          var annualyprice=$(".aprice").val();
          var skuid=$(".skuid").val();
          var webspace=$(".wspace").val();
          var bandwidth=$(".bwidth").val();
          var freedomain=$(".fdomain").val();
          var technology=$(".technology").val();
          var mailbox=$(".mailbox").val();
           $(".pname").hide();
           $(".mp").hide();
           $(".ap").hide();
           $(".wsp").hide();
           $(".bw").hide();
           $(".tech").hide();
           $(".mb").hide();
           $(".fd").hide();
           $(".sku").hide();
          
          if(pcategory==""||productname==''||monthlyprice==''||annualyprice==''||skuid==''||webspace==''||bandwidth==''||freedomain==''||technology==''||mailbox==''){
            $(".productcat").focus();
            $(".pcat").show();
            cat_validate();
          } 
           if (productname==''){
            $(".productname").focus();
            $(".pname").show();
          }
           if (monthlyprice==''){
            $(".mprice").focus();
            $(".mp").show();
          }
           if (annualyprice==''){
            $(".aprice").focus();
            $(".ap").show();
          }
           if (skuid==''){
            $(".skuid").focus();
            $(".sku").show();
          }
           if (webspace==''){
            $(".wspace").focus();
            $(".wsp").show();
          }
           if (bandwidth==''){
            $(".bandwidth").focus();
            $(".bd").show();;
          } 
           if (freedomain==''){
            $(".freedomail").focus();
            $(".fd").show();
          } 
           if (technology==''){
            $(".technology").focus();
            $(".tech").show();
          } 
           if (mailbox==''){
            $(".mailbox").focus();
            $(".mb").show();
          } else {
               $.ajax({
                 url : "adminAction.php",
                 type : "POST",
                 data : {pcategory:pcategory, productname:productname,producturl:producturl,monthlyprice:monthlyprice,annualyprice:annualyprice,skuid:skuid,webspace:webspace,bandwidth:bandwidth,freedomain:freedomain,technology:technology,mailbox:mailbox,action:"addnewproduct"},
                 dataType : "json",
                 success : function(data){
                   //console.log(data);
                   if(data==1){
                     alert("Successfully Added Product");
                   }else{
                    $(".productcat").focus();
                    $(".pcat").show();
                   }
                  
                 }
               })
          }

          //alert("i am add product button"+pcategory);
        })
  </script>
</body>

</html>
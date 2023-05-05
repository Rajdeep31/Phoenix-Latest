<?php
require('top.inc.php');
require('../connection.inc.php');
require('../functions.inc.php');
if (!isset($_SESSION['DELIVERY_USER_LOGIN'])) {
   header('location:login.php');
}
?>


<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Admin Panel</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../admin/">
   <link rel="stylesheet" href="../admin/assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="../admin/assets/css/font-awesome.min.css">
   <link rel="stylesheet" href="../admin/assets/css/themify-icons.css">
   <link rel="stylesheet" href="../admin/assets/css/pe-icon-7-filled.css">
   <link rel="stylesheet" href="../admin/assets/css/flag-icon.min.css">
   <link rel="stylesheet" href="../admin/assets/css/cs-skin-elastic.css">
   <link rel="stylesheet" href="../admin/assets/css/style.css">
   <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
   <aside id="left-panel" class="left-panel">
      <nav class="navbar navbar-expand-sm navbar-default">
         <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
               <li class="menu-title">Menu</li>
               <li class="menu-item-has-children dropdown">
                  <a href="categories.php">Categories</a>
               </li>
               <li class="menu-item-has-children dropdown">
                  <a href="sub_categories.php">Sub Categories</a>
               </li>
               <li class="menu-item-has-children dropdown">
                  <a href="product.php">Product</a>
               </li>
               <li class="menu-item-has-children dropdown">
                  <a href="order.php">Order</a>
               </li>
               <li class="menu-item-has-children dropdown">
                  <a href="users.php">Users</a>
               </li>
               <li class="menu-item-has-children dropdown">
                  <a href="delivery_boy.php">Delivery Boy</a>
               </li>
            </ul>
         </div>
      </nav>
   </aside>
   <div id="right-panel" class="right-panel">
      <header id="header" class="header">
         <div class="top-left">
            <div class="navbar-header">
               <a class="navbar-brand" href="categories.php"><img src="../images/logo.svg" alt="Logo"></a>
               <a class="navbar-brand hidden" href="index.html"><img src="../admin/images/logo2.png" alt="Logo"></a>
               <!-- <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a> -->
            </div>
         </div>
         <div class="top-right">
            <div class="header-menu">
               <div class="user-area dropdown float-right">
                  <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome Admin</a>
                  <div class="user-menu dropdown-menu">
                     <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div class="content pb-0">
         <div class="orders">
            <div class="row">
               <dic class="col-xl-12">
                  <div class="card">
                     <div class="card-body">
                        <h4 class="box-title">Order</h4>
                     </div>
                     <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                           <table class="table">
                              <thead>
                                 <tr>
                                    <th class="product-thumbnail">Order ID</th>
                                    <th class="product-name"><span class="nobr">Order Date</span></th>
                                    <th class="product-price"><span class="nobr">Address</span></th>
                                    <th class="product-stock-stauts"><span class="nobr">Payment Type</span></th>
                                    <th class="product-stock-stauts"><span class="nobr">Payment Status</span></th>
                                    <th class="product-stock-stauts"><span class="nobr">Order Status</span></th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td class="product-add-to-cart"><a href="order_details.php?id=121">121</a>
                                       <br>
                                       <a href="../invoice.php?id=121">Invoice</a>

                                    </td>
                                    <td class="product-name">2023-05-03</td>
                                    <td class="product-name">
                                       Ahmedabad Address<br />
                                       Ahmedabad<br />
                                       380059 </td>
                                    <td class="product-name">COD</td>
                                    <td class="product-name">pending</td>
                                    <td class="product-name">Processing</td>
                                 </tr>
                                 <tr>
                                    <td class="product-add-to-cart"><a href="order_details.php?id=122">122</a>
                                       <br>
                                       <a href="../invoice.php?id=122">Invoice</a>

                                    </td>
                                    <td class="product-name">2023-05-03</td>
                                    <td class="product-name">
                                       Demo<br />
                                       test<br />
                                       558866 </td>
                                    <td class="product-name">COD</td>
                                    <td class="product-name">pending</td>
                                    <td class="product-name">Shipped</td>
                                 </tr>
                                 <tr>
                                    <td class="product-add-to-cart"><a href="order_details.php?id=125">125</a>
                                       <br>
                                       <a href="../invoice.php?id=125">Invoice</a>

                                    </td>
                                    <td class="product-name">2023-05-05</td>
                                    <td class="product-name">
                                       Ahmedabad Address<br />
                                       Ahmedabad<br />
                                       380059 </td>
                                    <td class="product-name">COD</td>
                                    <td class="product-name">pending</td>
                                    <td class="product-name">Processing</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </dic>
            </div>
         </div>

      </div>

      <div class="clearfix"></div>
      <footer class="site-footer">
         <div class="footer-inner bg-white">
            <div class="row">
               <div class="col-sm-6">
                  Copyright &copy; 2023 Phoenix Computers
               </div>
            </div>
         </div>
      </footer>
   </div>
   <script src="../admin/" type="text/javascript"></script>
   <script src="../admin/assets/js/popper.min.js" type="text/javascript"></script>
   <script src="../admin/assets/js/plugins.js" type="text/javascript"></script>
   <script src="../admin/assets/js/main.js" type="text/javascript"></script>
</body>

</html>

<?php
   require('footer.inc.php');
?>
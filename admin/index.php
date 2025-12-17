<?php
include('../common/dbconnect.php');
include('admin_common/loginverify.php');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Admin </title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
    
	
   <?php
   include("admin_common/header.php");
   ?>
	
		
		<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
				
				<div class="col-md-4">
                        <div class="main-box mb-purpal">
                            <a href="category.php">
                               <i class="fa fa-users fa-5x" ></i>
                                <h5>Manufacturer</h5>
                            </a>
                        </div>
                    </div>
					
					
					<div class="col-md-4">
                        <div class="main-box mb-marron">
                            <a href="product.php">
                                <i class="fa fa-gift fa-5x"></i>
								
                                <h5>Product</h5>
                            </a>
                        </div>
                    </div>
					
					
						<div class="col-md-4">
                        <div class="main-box mb-purpal">
                            <a href="enquiry.php">
                                <i class="fa fa-crosshairs fa-5x"></i>
                                <h5>Enquiry</h5>
                            </a>
                        </div>
                    </div>
				
				
				
                    <div class="col-md-4">
                        <div class="main-box mb-red">
                            <a href="message.php">
                                <i class="fa fa-comment fa-5x"></i>
                                <h5>Message</h5>
                            </a>
                        </div>
                    </div>
					
					<div class="col-md-4">
                        <div class="main-box mb-blue">
                            <a href="aboutus.php">
                                <i class="fa fa-info  fa-5x"></i>
                                <h5>About Us</h5>
                            </a>
                        </div>
                    </div>
					
					
					
                    <div class="col-md-4">
                        <div class="main-box mb-dull">
                            <a href="changepassword.php">
                                <i class="fa fa-key  fa-5x"></i>
                                <h5>Change Password</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-blue">
                            <a href="logout.php">
                                <i class="fa fa-sign-out fa-5x"></i>
                                <h5>Logout</h5>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

   <?php
   include("admin_common/footer.php");
   ?>
	
	<script src="js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/newcustom.js"></script>
    


</body>
</html>

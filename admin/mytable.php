<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
	<!--Data Table-->
	<link href="js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
	
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
                        <h1 class="page-head-line">Data Table</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
         
            <div class="row">
                <div class="col-md-12">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Hover Rows
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>Trident</td>
                                            <td>Internet Explorer 4.0</td>
                                            <td>Win 95+</td>
                                            <td class="center">4</td>
                                            <td class="center">
											<a href="" class="myasimple" title="Edit">
										<img src="img/edit.png" />
											</a>
											
											&nbsp;
											
											<a onclick="return confirm('Are you sure you want to delete this record');" href="#" class="myasimple" title="Delete">
										<img src="img/delete.png" />
											</a>
											
											</td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>Trident</td>
                                            <td>Internet Explorer 5.0</td>
                                            <td>Win 95+</td>
                                            <td class="center">5</td>
                                           <td class="center">
											<a href="" class="myasimple" title="Edit">
										<img src="img/edit.png" />
											</a>
											
											&nbsp;
											
											<a onclick="return confirm('Are you sure you want to delete this record');" href="#" class="myasimple" title="Delete">
										<img src="img/delete.png" />
											</a>
											
											</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>Trident</td>
                                            <td>Internet Explorer 5.5</td>
                                            <td>Win 95+</td>
                                            <td class="center">5.5</td>
                                            <td class="center">
											
											
											
											
											<a onclick="return confirm('Are you sure you want to active this record');" href="#" class="myasimple" title="Active">
										<img src="img/active.png" />
											</a>
											
											&nbsp;
											<a onclick="return confirm('Are you sure you want to active this record');" href="#" class="myasimple" title="Deactive" >
										<img src="img/deactive.png" />
											</a>
											
											&nbsp;
											
											<a href="" class="myasimple" title="Edit">
										<img src="img/edit.png" />
											</a>
											
											&nbsp;
											
											<a onclick="return confirm('Are you sure you want to delete this record');" href="#" class="myasimple" title="Delete">
										<img src="img/delete.png" />
											</a>
											
											</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
						
						</div>
                    </div>
                    <!-- End  Hover Rows  -->
                </div>
               
			
			</div>
			  <!-- /. ROW  -->
			  

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
   
   <?php
   include("admin_common/footer.php");
   ?>
   
   
   
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
     <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="js/newcustom.js"></script>
	
	<script src="js/dataTables/jquery.dataTables.js"></script>
    <script src="js/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>


</body>
</html>

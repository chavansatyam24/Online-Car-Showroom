<?php
/*include("../common/dbconnect.php");
$error = '';
if(isset($_POST['login']))
{
$emailid = mysqli_real_escape_string($_POST['emailid']);
$password = mysqli_real_escape_string($_POST['password']);
$sql = "select * from user where emailid='$emailid' and password='$password'";
$q =mysqli_query($sql);
if(mysqli_num_rows($q)>0)
{
$r = mysqli_fetch_array($q);
$_SESSION['uid'] = $r['id'];
$_SESSION['emailid'] = $r['emailid'];

header("location:index.php");
}
else
{
$error= '<div class="alert alert-danger">
  <strong>Error!</strong> Invalid Username or Password.
</div>';

}

}
*/
include("../common/dbconnect.php");
$error = '';

if(isset($_POST['login']))
{
    $emailid = mysqli_real_escape_string($conn, $_POST['emailid']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM user WHERE emailid='$emailid' AND password='$password'";
    $q = mysqli_query($conn, $sql);

    if(mysqli_num_rows($q) > 0)
    {
        $r = mysqli_fetch_array($q);
        $_SESSION['uid'] = $r['id'];
        $_SESSION['emailid'] = $r['emailid'];

        header("location:index.php");
    }
    else
    {
        $error = '<div class="alert alert-danger">
                    <strong>Error!</strong> Invalid Username or Password.
                 </div>';
    }
}

?>




<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin </title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <h2>ADMIN PANEL</h2>
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
<?php
echo $error;
?>

                                <form role="form" action="login.php" method="post">
                                    <hr />
                                    <h5>Enter Details to Login</h5>
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" name="emailid" placeholder="Your Username " />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" name="password"  placeholder="Your Password" />
                                        </div>
                                    <div class="form-group">

                                            <span class="pull-right">
                                                   
                                        </div>
                                     
                                     <button type="submit" name="login" class="btn btn-primary ">Login Now</button>
                                    <hr />
                                    click here  to go to <a href="../index.php"> Visit Website Home Page</a> 
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
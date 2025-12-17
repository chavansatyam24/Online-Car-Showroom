
<?php
ob_start();
session_start();

$conn = mysqli_connect("localhost", "root", "") or die("Server error: " . mysqli_error());
mysqli_select_db($conn, "onlinevehicles") or die("Database error: " . mysqli_error($conn));
?>








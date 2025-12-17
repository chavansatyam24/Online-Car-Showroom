<?php
include('common/dbconnect.php');

$msg = '';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $emailid = $_POST['emailid'];
    $message = $_POST['message'];

    // Using prepared statement to prevent SQL injection
    $sql = "INSERT INTO message (name, emailid, message, isread) VALUES (?, ?, ?, 'Unread')";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "sss", $name, $emailid, $message);

        // Execute the statement
        mysqli_stmt_execute($stmt);

        // Close the statement
        mysqli_stmt_close($stmt);

        header('location:contact.php?act=1');
    } else {
        die("Error in prepared statement: " . mysqli_error($conn));
    }
}
?>
<!-- Rest of your HTML code -->

<html>
<head>
<title>Online Vehicle</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
<script src="js/jquery.etalage.min.js"></script>
<link href="css/component.css" rel='stylesheet' type='text/css' />
<!-- Include the Etalage files -->
<script>
		jQuery(document).ready(function($){

			$('#etalage').etalage({
				thumb_image_width: 400,
				thumb_image_height: 350,
				
				show_hint: true,
				click_callback: function(image_anchor, instance_id){
					alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
				}
			});
			// This is for the dropdown list example:
			$('.dropdownlist').change(function(){
				etalage_show( $(this).find('option:selected').attr('class') );
			});

	});
</script>
<!----//details-product-slider--->
</head>
<body>
<?php 
	include("common/header1.php");
	
	?>
<?php 
	include("common/sidebar.php");
	
	?>		

			<div class="new-product">
				<div class="new-product-top">
					<ul class="product-top-list">
						<li><a href="index.php">Home</a>&nbsp;<span>&gt;</span></li>
						<li><span class="act">Contact Us</span>&nbsp;</li>
					</ul>
					<p class="back"><a href="index.php">Back to Previous</a></p>
					<div class="clearfix"></div>
				</div>
				<div class="singel_right">
			     <div class="lcontact span_1_of_contact">
				      <div class="contact-form">
				  	        <form method="post" action="contact.php">
					    	    <p class="comment-form-author"><label for="author">Your Name:</label>
					    	    	<input type="text" class="textbox" value="Enter your name here..." name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your name here...';}">
						    	</p>
						        <p class="comment-form-author"><label for="author">Email:</label>
						     	   <input type="text" class="textbox" value="Enter your email here..." name="emailid" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
						        </p>
						        <p class="comment-form-author"><label for="author">Message:</label>
						    	  <textarea value="Enter your message here..." onfocus="this.value = '';" name="message" onblur="if (this.value == '') {this.value = 'Message';}">Enter your message here...</textarea>
						        </p>
						        <input name="submit" type="submit" id="submit" value="Submit">
					        </form>
				       </div>
			     </div>
				 
				 <img src="images/contact-us.jpg" class="img-responsive ">
				 
			     <div class="contact_grid span_2_of_contact_right">
					<br><u><h3>Address</u></h3>
				    <div class="address">
						<i class="pin_icon"></i>
					    <div class="contact_address">
						 Zonal Office - Mumbai
                         Car Avenue India Ltd.
                         Zonal Office - West
                         D-126, TTC Industrial Area,
                         MIDC Shiravane, Nerul,Thane-Belapur Road,
                         Navi Mumbai, Maharashtra. Pin - 400706.
                         (Tel) 022 - 67895000 / 5001 / 5002 / 5003
					    </div>
					    <div class="clearfix"></div>
					</div>
					<div class="address">
						<i class="phone"></i>
					    <div class="contact_address">
						   9826274865
					    </div>
					    <div class="clearfix"></div>
					</div>
					<div class="address">
						<i class="mail"></i>
					    <div class="contact_email">
						  <a href="mailto:example@gmail.com">
						  caravenue@hotmail.com</a>
					    </div>
					    <div class="clearfix"></div>
					</div>
		        </div>
		        <div class="clearfix"></div>
		    </div>
		    <div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241412.9700069494!2d72.89403412682721!3d19.016299443243803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b9f0b81f13ad%3A0x3c12f7681185f869!2sNavi+Mumbai%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1487333065361" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			
			
		    </div>
			</div>
			<div class="clearfix"></div>
			<!--- fOOTER Starts Here --->
		<?php 
	include("common/footer1.php");
	?>
	<!--- fOOTER Starts Here --->
</body>
</html>
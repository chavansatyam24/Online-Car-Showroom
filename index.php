<?php
include('common/dbconnect.php');
?>
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
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<?php 
	include("common/header1.php");
	
	?>
	
<!-- Header Starts Here -->
<div class="header" style="margin-left:-15px;">
	<div class="container">
	
		<!-- Banner Slide Starts Here -->
			<div class="slider">
			<!-- Slideshow 3 -->
			<script src="js/responsiveslides.min.js"></script>
			<script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 3
			      $("#slider3").responsiveSlides({
			        manualControls: '#slider3-pager',
			      });
			    });
			  </script>
		    <ul class="rslides" id="slider3">
		    <li>
		    	<div class="banner">
					<h1 style="color:gray;">The future of the automobile.</h1>

				</div>
		   	</li>
		   	<li>
		    	<div class="banner banner2">
					<h1>Driven by what's inside.</h1>
				</div>
		   	</li>
		   	<li>
		    	<div class="banner banner1">
					<h1>The Best or Nothing</h1>
				</div>
		   	</li>
		   	</ul>
		   	<ul id="slider3-pager">
		      <li><a href="#"><img src="images/small1.jpg" alt=""></a></li>
		      <li><a href="#"><img src="images/small2.jpg" alt=""></a></li>
		      <li><a href="#"><img src="images/small3.jpg" alt=""></a></li>
		    </ul>
		    <div class="clearfix"> </div>
		    </div>
		<!-- Banner Slide Ends Here -->
		<!-- Best Seller Starts Here -->
		<div class="best-seller">
			<div class="best-seller-row">
				<div class="seller-column">
					<div class="sale-box">
						<span class="on_sale title_shop">bestseller</span>
					</div>
					<img src="images/-amaze.jpg" alt=""  class="seller-img">
				</div>
				<div class="seller-column1">
					<h3>Sale</h3>
					<span class="sale-nip"></span>
					<h4>Honda Amaze</h4>
					<small>by Honda LTD</small>
					<p>₹800000</p>
					<div class="price">
						<a href="amaze.php">Get More Info</a>
						<span class="rating">Rating: 4.4 <i class="ratings"></i></span>
					</div>
					<p class="customer">Ask the Customer a Question</p>
				</div>
				<div class="clearfix"></div>
			</div>
			
			<div class="biseller-info">
			<ul id="flexiselDemo3">
			
					<?php
					$sql = "select p.*,c.*,p.id as pid from product as p,category as c where  p.category=c.id";
					$cq =  mysqli_query($sql);
					while($cr =  mysqli_fetch_array($cq))
					{	
					?>
			
			        
			
				<li>
					<div class="biseller-column">
					<img src="upload/<?php echo $cr['image']?>" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="productdetail.php?pid=<?php echo $cr['pid']; ?>">Info</a>
						</div>
					<div class="biseller-name">
						<h4><?php echo $cr['productname']; ?></h4>
						<small>by <?php echo $cr['categoryname']; ?></small>
					</div>
					<div class="biseller-name1">
						<p><?php echo $cr['price']; ?></p>
					</div>
					<div class="clearfix"></div>
					<div class="price-s">
						<a href="productdetail.php?pid=<?php echo $cr['pid']; ?>">Get More Info</a>
					</div>
					
					</div>
				</li>
				<?php
					}
				?>
			
			</ul>
			</div>
		</div>
			<script type="text/javascript">
				 $(window).load(function() {
					$("#flexiselDemo3").flexisel({
						visibleItems: 3,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems: 1
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems: 2
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems: 3
				    		}
				    	}
				    });
				    
				});
			   </script>
			   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
	
	
	
	</div>
</div>
<div>
<?php 
	include("common/footer.php");
	?>
	</div>
</body>
</html>

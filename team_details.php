<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shooting Sport Club</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	
	</head>
	<body>
				<?php
         include("./commonpages/loginheader.php")
		?>
				
	
	
	
				<div class="col-md-12 animate-box" align="center">
				<table width="40%" height="500px">
					<form action="./PHP/team_detail_insert.php" method="post" align="center">
                      
						<div class="row form-group">
							<div class="row form-group">
								
                                
							<div class="col-md-12">
								<tr>
								<td>Team Name:</td>
								<td><input type="text" id="name" name="tname" class="form-control" required></td>
							</tr>
							</div>
						</div>
							<div class="col-md-12">
								<tr>
								<h1>TEAM DETAILS!</h1>
								<h5>INSERT YOUR TEAM DETAILS!</h5>
								</tr>
								
							</div>
						</div>
							<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Total Players</td>
								<td><input type="number" id="mobile" name="totalp"class="form-control"></td>
							</tr>
							</div>
						</div>

					
						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Participate Players:</td>
								<td><input type="number" id="mobile" name="participate"class="form-control"></td>
							</tr>
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Extra Players:</td>
								<td><input type="number" id="gametype" name="extra" class="form-control"></td>
							</tr>
							</div>
						</div>
                        
						<div class="form-group">
							<tr>
								<input type="hidden" name="rid" value="<?=$rid?>">
								<td>&nbsp;</td>
								<td><input type="submit" value="submit" class="btn btn-primary" name="btn_t"> &nbsp; &nbsp; &nbsp;  
						<input type="submit" value="Reset" class="btn btn-primary"></td>

							</tr>

						</div>
                    </table>
					</form>		
				</div>
			</div>
			
		

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>


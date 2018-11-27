	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>mmc-muhabura multichoice company</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">	
			<link rel="stylesheet" href="css/hexagons.min.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			<!-- header -->
          <?php include("header.php") ?>
			<!-- #header -->

			<?php 
	      if (isset($_REQUEST['tab']))
	      	{
	      		      if ($_REQUEST['tab'] == md5 ('main')) 
                             {  	
                             	include("views/main.php");
	                         }
                     elseif ($_REQUEST['tab'] == md5('about')) 
                     {
                     	include("views/about.php");
                     }
                      elseif ($_REQUEST['tab'] == md5('service')) 
                     {
                        include("views/services.php");
                     }
                      elseif ($_REQUEST['tab'] == md5('contact')) 
                     {
                     	include("views/contact.php");
                     }
                    
                     elseif ($_REQUEST['tab'] == md5('journal')) 
                     {
                        include("views/blog-home.php");
                     }
                      elseif ($_REQUEST['tab'] == md5('media')) 
                     {
                        include("views/media.php");
                     }
                     elseif ($_REQUEST['tab'] == md5('gallery')) 
                     {
                        include("views/galery.php");
                     }
                      elseif ($_REQUEST['tab'] == md5('communication')) 
                     {
                        include("views/communication.php");
                     }
                       elseif ($_REQUEST['tab'] == md5('project')) 
                     {
                        include("views/finished-project.php");
                     }
                       elseif ($_REQUEST['tab'] == md5('project1')) 
                     {
                        include("views/ongoing-project.php");
                     }
                      elseif ($_REQUEST['tab'] == md5('video')) 
                     {
                        include("views/videos.php");
                     }

                   
	        }
	        else
	        {
              include("views/main.php");
            }

 
	 ?>
				
			<!-- start footer Area -->		
			 <?php include("footer.php") ?>
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>	
			<script src="js/hexagons.min.js"></script>							
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/waypoints.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>




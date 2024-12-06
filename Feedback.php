<!DOCTYPE html>
<html lang="en">




	<style type="text/css">

		.header {
		  overflow: hidden;
		  background-color: black;
		  padding: 10px 30px ;
		}
		
		.header a {
		  float: left;
		  color: white;
		  text-align: center;
		  padding: 12px;
		  text-decoration: none;
		  font-size: 18px; 
		  line-height: 25px;
		  border-radius: 4px;
		}
		
		.header a.logo {
		  font-size: 25px;
		  font-weight: bold;
		}
		.header a.logo:hover {
		  background-color: black;
		}
		
		.header a:hover {
		  background-color: rgb(86, 246, 11);
		  color: black;
		}
		
		.header a.active {
		  background-color: dodgerblue;
		  color: white;
		}
		
		.header-right {
		  float: right;
		}
		.subnav {
		  float: left;
		  overflow: hidden;
		  padding: 12px;
		  text-decoration: none;
		  font-size: 18px; 
		  line-height: 25px;
		  border-radius: 4px;
		}
		
		.subnav .subnavbtn {
		  border: none;
		  outline: none;
		  color: white;
		
		  background-color: inherit;
		  font-family: inherit;
		  margin: 0;
		}
		
		
		.subnav-content {
		  display: none;
		  position: absolute;
		
		  background-color: black;
		  z-index: 1;
		}
		
		.subnav-content a {
		  float: left;
		  color: white;
		  text-decoration: none;
		}
		
		.subnav-content a:hover {
		  background-color: rgb(6, 240, 26);
		  color: black;
		}
		
		.subnav:hover .subnav-content {
		  display: block;
		}
</style>

<head>
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="UTF-8">
	<title>AYNA</title>
	<!-- viewport meta -->
	<meta name="AYNA" content="All You Need for Agronomy">

	<!-- styles -->
	<!-- helpers -->
	<link rel="stylesheet" href="css/popup.css">
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
	<!-- fontawesome css -->
	<link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
	<!-- strock gap icons -->
	<link rel="stylesheet" href="plugins/Stroke-Gap-Icons-Webfont/style.css">
	<!-- revolution slider css -->
	<link rel="stylesheet" href="plugins/revolution/css/settings.css">
	<link rel="stylesheet" href="plugins/revolution/css/layers.css">
	<link rel="stylesheet" href="plugins/revolution/css/navigation.css">
	<!-- flaticon css -->
	<link rel="stylesheet" href="plugins/flaticon/flaticon.css">
	<!-- jQuery ui css -->
	<link href="plugins/jquery-ui-1.11.4/jquery-ui.css" rel="stylesheet">
	<!-- owl carousel css -->
	<link rel="stylesheet" href="plugins/owl.carousel-2/assets/owl.carousel.css">
	<link rel="stylesheet" href="plugins/owl.carousel-2/assets/owl.theme.default.min.css">
	<!-- animate css -->
	<link rel="stylesheet" href="plugins/animate.min.css">
	<!-- fancybox -->
	<link rel="stylesheet" href="plugins/fancyapps-fancyBox/source/jquery.fancybox.css">
	<link rel="icon" href="images/aynaLogo.png" type="image/gif" sizes="16x16">


	<!-- master stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">



</head>
<body>

	<style type="text/css">

		.header {
		  overflow: hidden;
		  background-color: black;
		  padding: 10px 30px ;
		}
		
		.header a {
		  float: left;
		  color: white;
		  text-align: center;
		  padding: 12px;
		  text-decoration: none;
		  font-size: 18px; 
		  line-height: 25px;
		  border-radius: 4px;
		}
		
		.header a.logo {
		  font-size: 25px;
		  font-weight: bold;
		}
		.header a.logo:hover {
		  background-color: black;
		}
		
		.header a:hover {
		  background-color: rgb(86, 246, 11);
		  color: black;
		}
		
		.header a.active {
		  background-color: dodgerblue;
		  color: white;
		}
		
		.header-right {
		  float: right;
		}
		.subnav {
		  float: left;
		  overflow: hidden;
		  padding: 12px;
		  text-decoration: none;
		  font-size: 18px; 
		  line-height: 25px;
		  border-radius: 4px;
		}
		
		.subnav .subnavbtn {
		  border: none;
		  outline: none;
		  color: white;
		
		  background-color: inherit;
		  font-family: inherit;
		  margin: 0;
		}
		
		
		.subnav-content {
		  display: none;
		  position: absolute;
		
		  background-color: black;
		  z-index: 1;
		}
		
		.subnav-content a {
		  float: left;
		  color: white;
		  text-decoration: none;
		}
		
		.subnav-content a:hover {
		  background-color: rgb(6, 240, 26);
		  color: black;
		}
		
		.subnav:hover .subnav-content {
		  display: block;
		}
</style>	


<!-- Start mainmenu -->
<header>
	<div class="header">
	 <a href="index.php"  class="logo"><img style="height: 80px;" src="images/footer-logo.png" alt="logo"></a>
	 <br>
	  <div class="header-right">
		
        <a style="font-size: larger;" href="index2.php">Home</a>
     
	   <div class="subnav">
		   <button class="subnavbtn">Weather<i class="#"></i></button>
		   <div class="subnav-content">
		   <li><a href="weatherwebsite/index.php">Search</a></li>
		   <li><a href="weatherwebsite/currentLocationW/index.php">Your Current Location</a></li>
		   </div>
	   </div>
	   <a href="govts.php">Goverment Schemes</a>
	   <div class="subnav">
		   <button class="subnavbtn">Crop<i class="#"></i></button>
		   <div class="subnav-content">
		   <li><a href="seed.php">Info on Seeds</a></li>
		   <li><a href="seed price.php">Current Seeds Price</a></li>
		   <li><a href="Fertilizer.php">Fertilizer</a></li>
		   </div>
	   </div>
	   <div class="subnav">
		<button class="subnavbtn">Tech Knowledge<i class="#"></i></button>
		<div class="subnav-content">
		<li><a href="solarpanel.php">Farming Resources</a></li>
		<li><a href="tech.php">IOT</a></li>
		</div>
	</div>
	   </div>

</div>

</header>
<!-- End mainmenu -->


<section class="sec-padding contact-page-content">
	<div class="thm-container">
		<div class="sec-title">

		<?php
                if(isset($_GET['msg']) && !empty($_GET['msg']))
                {
                    $msg = $_GET['msg'];
                    echo "<h3>$msg</h3>";
                }
    ?>
			
			
			<br><br><br><h2><span>Feedback</span></h2>
			
			<p>Give us your thoughts and ideas where we can improve.<br></p>
		</div><br>
		<div class="row">
			<div class="col-md-7 col-sm-6 col-xs-12 pull-left">
				<form action="Feedback_db.php" class="contact-form contact-page" method = "post">
					<p><input id="name" type="text" placeholder="Name" name="name"></p>
					<p><input id="email" type="text" placeholder="Email" name="email"></p>
					<!--<p><input type="text" placeholder="Subject" name="subject"></p>-->
					<p><textarea id="fback" name="fback" placeholder="Feedback"></textarea></p>
					<input type="Submit" name="submit" value="Submit" >
					<!-- <button class = "popup" onclick="submitFunction()" type="submit" class="thm-btn">Submit Now<span class="popuptext" id="myPopup">Thanks for your feedback</span></button> -->
					<!-- <script>
						function submitFunction()
						{
	
							var popup = document.getElementById("myPopup");
  							popup.classList.toggle("show");
							var x = document.getElementById("name");
							var y = document.getElementById("email");
							var z = document.getElementById("message");
							x.value = "";
							y.value = "";
							z.value = "";
						}
					</script> -->
				</form>
			</div>
			
		</div>
	</div>
</section>




<footer id="footer" class="sec-padding">
	<div class="thm-container">
		<div class="row">
			<div class="col-md-4 col-sm-6 footer-widget">
				<div class="about-widget">
					<a href="index.php"><img style="height: 150px;" src="images/footer-logo.png" alt="logo"/></a>
					<p>All You Need for Agronomy</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 footer-widget">
				<div class="pl-30">
					<div class="title" style="color: #05f7c2;">
						<h2><span>"If the farmer is rich, then so is the nation."</span></h2>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 footer-widget">
			</div>
		</div>
	</div>
</footer>

<section class="bottom-bar">
	<div class="thm-container clearfix">
		<div class="pull-left">
			<p>AYNA All rights reserved.</p>
		</div>
		<div class="pull-right">
			
			<a href="#">Created By : <i>AYNA TEAM</i> </a>
			
		</div>
	</div>
</section>


</body>


</html>
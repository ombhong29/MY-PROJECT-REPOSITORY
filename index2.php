<!DOCTYPE html>
<html lang="en">


	<style type="text/css">

		.header {
		  overflow: hidden;
		  background-color: black;
		  font-size: 80px;
		  padding: 10px 30px ;
		}
		
		.header a {
		  float: left;
		  color: white;
		  text-align: center;
		  padding: 12px;
		  text-decoration: none;
		  font-size: 80px; 
		  line-height: 40px;
		  border-radius: 4px;
		}
		
		.header a.logo {
		  font-size: 80px;
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
	

       .btn {
         display: inline-block;
         padding: 30px 30px;
         background-color: #0d3c8c;
         color: #f2f4f4;
         text-decoration: none;
         border-radius: 30px;
       }

       .agrishop1 {
		background-color: rgb(80, 180, 80);
		font-size:larger;
         /* width: calc(33.33% - 20px); */
         padding: 20px;
         /* border: 1px solid #ccc;
         border-radius: 5px; */
         margin: 10px;
       }

</style>	


<!-- Start mainmenu -->
<header>
	<div class="header">
	 <a href="#default" class="logo"><img style="height: 80px;" src="images/footer-logo.png" alt="logo"></a>
	 <br>
	  <div class="header-right">
	   <!-- <div class="subnav">
		   <button style="font-size: 20px;" class="subnavbtn">Weather<i class="#"></i></button>
		   <div class="subnav-content">
		   <li><a style="font-size: 20px;" href="weatherwebsite/currentLocationW/index.php">Search</a></li>
		   </div>
	   </div>
	   <a style="font-size: 20px;" href="Product.php">Agri Shop</a>
	   <a style="font-size: 20px;" href="govts.php">Goverment Schemes</a>
	   <div class="subnav">
		   <button style="font-size: 20px;" class="subnavbtn">Crop<i class="#"></i></button>
		   <div class="subnav-content">
		   <li><a style="font-size: 20px;" href="seed.php">Info on Seeds</a></li>
		   <li><a style="font-size: 20px;" href="seed price.php">Current Seeds Price</a></li>
		   <li><a style="font-size: 20px;"  href="Fertilizer.php">Fertilizer</a></li>
		   </div>
	   </div>
	   <div class="subnav">
		<button style="font-size: 20px;" class="subnavbtn">Tech Knowledge<i class="#"></i></button>
		<div class="subnav-content">
		<li><a style="font-size: 20px;"  href="solarpanel.php">Farming Resources</a></li>
		<li><a style="font-size: 20px;" href="tech.php">IOT</a></li>
		</div> 
	</div>
	   <a style="font-size: 20px;" href="Feedback.php">Feedback</a>
	   </div>-->

	   <div class="subnav">
		   <!-- <button style="font-size: 20px;" class="subnavbtn"><a href ="index.php">Home</a><i class="#" ></i></button>
		   <div class="subnav-content">
		   <li><a style="font-size: 20px;" href="weatherwebsite/currentLocationW/index.php">Search</a></li>
		   </div> -->

		   <button style="font-size: 20px;" class="subnavbtn"><a href ="logout.php">Logout</a><i class="#" ></i></button>

		   <!-- <button style="font-size: 20px;" class="subnavbtn"><a href ="registration.php">Register</a><i class="#" ></i></button> -->

		   <button style="font-size: 20px;" class="subnavbtn"><a style="font-size: 20px;" href="Feedback.php">Feedback</a><i class="#" ></i></button>
		</div>
		   
</div>

</header>
<!-- End mainmenu -->



<section class="rev_slider_wrapper thm-banner-wrapper">

	<!-- <div class="agrishop1">
      
			<a href="second.php" class="btn" target="_blank">AgriShop</a>
  
</div> -->


	<div id="slider1" class="rev_slider"  data-version="5.0">
		<ul>

			<li data-transition="parallaxvertical" data-ease="SlowMo.ease">
				<img src="images/slider/crop.jpg" alt="Crop Background" >

				<div class="tp-caption sfb tp-resizeme caption-h1"
			        data-x="left" data-hoffset="0" 
			        data-y="top" data-voffset="188" 
			        data-whitespace="nowrap"
			        data-transform_idle="o:1;" 
			        data-transform_in="o:0" 
			        data-transform_out="o:0" 
			        data-start="500">
				AGRO TECH
			    </div>
				<div class="tp-caption sfb tp-resizeme caption-p" 
			        data-x="left" data-hoffset="20" 
			        data-y="top" data-voffset="300" 
			        data-whitespace="nowrap"
			        data-transform_idle="o:1;" 
			        data-transform_in="o:0" 
			        data-transform_out="o:0" 
			        data-start="1000">
					"AGRO TECH - <strong>You Need for Agronomy</strong>."
			    </div>
				
			</li>

			<li data-transition="parallaxvertical" data-ease="SlowMo.ease">
				<img src="images/slider/Vision.jpeg"  alt="Farms">
				<div class="tp-caption sfb tp-resizeme caption-h1" 
			        data-x="left" data-hoffset="0" 
			        data-y="top" data-voffset="248" 
			        data-whitespace="nowrap"
			        data-transform_idle="o:1;" 
			        data-transform_in="o:0" 
			        data-transform_out="o:0" 
			        data-start="500">
					Our<br> Vision
			    </div>
				<div class="tp-caption sfb tp-resizeme caption-p" 
			        data-x="left" data-hoffset="0" 
			        data-y="top" data-voffset="375" 
			        data-whitespace="nowrap"
			        data-transform_idle="o:1;" 
			        data-transform_in="o:0" 
			        data-transform_out="o:0" 
			        data-start="1000">
					Is to create awareness related to Farming Technics and Technology in Farmers community.
			    </div>
				<div class="tp-caption sfl tp-resizeme" 
			        data-x="left" data-hoffset="0" 
			        data-y="top" data-voffset="500" 
			        data-whitespace="nowrap"
			        data-transform_idle="o:1;" 
			        data-transform_in="o:0" 
			        data-transform_out="o:0" 
			        data-start="1500">
			    </div>
			</li>
			<li data-transition="parallaxvertical" data-ease="SlowMo.ease">
				<img src="images/slider/bg2.jpg"  alt="crop">
				<div class="tp-caption sfb tp-resizeme caption-h1" 
			        data-x="left" data-hoffset="0" 
			        data-y="top" data-voffset="248" 
			        data-whitespace="nowrap"
			        data-transform_idle="o:1;" 
			        data-transform_in="o:0" 
			        data-transform_out="o:0" 
			        data-start="500">
				AGRO TECH<br>VISION
			    </div>
				<div class="tp-caption sfb tp-resizeme caption-p" 
			        data-x="left" data-hoffset="0" 
			        data-y="top" data-voffset="375" 
			        data-whitespace="nowrap"
			        data-transform_idle="o:1;" 
			        data-transform_in="o:0" 
			        data-transform_out="o:0" 
			        data-start="1000">
			        Is to work for farmers problem and introduce them to various policies and Technology related to farming.
					
			    </div>
				<div class="tp-caption sfl tp-resizeme" 
			        data-x="left" data-hoffset="0" 
			        data-y="top" data-voffset="500" 
			        data-whitespace="nowrap"
			        data-transform_idle="o:1;" 
			        data-transform_in="o:0" 
			        data-transform_out="o:0" 
			        data-start="1500">
					<!--<a href="about.html" class="thm-btn">About Us <i class="fa fa-arrow-right"></i></a>-->
			    </div>
			</li>

			<li data-transition="parallaxvertical" data-ease="SlowMo.ease">
				<img src="images/slider/abc.jpg"  alt="farms">
				<div class="tp-caption sfb tp-resizeme caption-h1" 
			        data-x="left" data-hoffset="0" 
			        data-y="bottom" data-voffset="0" 
			        data-whitespace="nowrap"
			        data-transform_idle="o:1;" 
			        data-transform_in="o:0" 
			        data-transform_out="o:0" 
			        data-start="500">
					
			    </div>
				<div class="tp-caption sfb tp-resizeme caption-h1" 
			        data-x="right" data-hoffset="0" 
			        data-y="bottom" data-voffset="0" 
			        data-whitespace="nowrap"
			        data-transform_idle="o:1;" 
			        data-transform_in="o:0" 
			        data-transform_out="o:0" 
			        data-start="1700">
					
			    </div>
				<div class="tp-caption sfb tp-resizeme caption-p" 
			        data-x="left" data-hoffset="50" 
			        data-y="top" data-voffset="275" 
			        data-whitespace="nowrap"
			        data-transform_idle="o:1;" 
			        data-transform_in="o:0" 
			        data-transform_out="o:0" 
			        data-start="1100">
					"Farming looks mighty easy when your plow is a pencil,<br> and you're a thousand miles from the corn field." <br> - President Dwight D. Eisenhower		
				</div>
			    <div class="tp-caption sfl tp-resizeme" 
			        data-x="right" data-hoffset="460" 
			        data-y="top" data-voffset="360" 
			        data-whitespace="nowrap"
			        data-transform_idle="o:1;" 
			        data-transform_in="o:0" 
			        data-transform_out="o:0" 
			        data-start="1500">
					<!-- <a href="https://www.vitbhopal.ac.in/" class="thm-btn inverse">VIT Bhopal <i class="fa fa-arrow-right"></i></a> -->
			    </div>
			</li>
		</ul>
	</div>
</section>

<section class="about-info-box sec-padding">
	<div class="thm-container">
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<div class="sec-title">
					<h2><span>What is AgroTech</span></h2>
					<ul class="bulleted-list">
					<li><i class="fa fa-arrow-circle-right"></i> AgroTech is a website particularly for the Indian Farmers to provide all information in one portal.</li> 
					</ul>
					<h2><span>Reasons to Use AgroTech</span></h2>
					<ul class="bulleted-list">
					<li><i class="fa fa-arrow-circle-right"></i> A farmer will be able to get all relevant information on specific subjects around his state.</li>
					<li><i class="fa fa-arrow-circle-right"></i> One stop solution for farmers with most of the required information available at one place.</li>
					<li><i class="fa fa-arrow-circle-right"></i> Consist of features like weather report, government schemes, seed price etc.</li> 
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="welcome-services home-one">
	<div class="thm-container">
		<div class="sec-title">
			<h2><span>Features</span></h2>
			<p>All the features that are provided by this website.</p>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="welcome-single-services">
					<div class="img-box">
						<img src="images/welcome-services/18.jpg" alt="weather">
					</div>
					<div class="text-box">
						<div class="content">
							<h3><li><a style="font-size: 20px;" href="weatherwebsite/index.php">Weather Report</a></li></h3>
							<p>Get all information needed on the weather of your current location or by searching for the location.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="welcome-single-services">
					<div class="img-box">
						<img src="images/welcome-services/2.jpg" alt="seed">
					</div>
					<div class="text-box">
						<div class="content">
							<h3><a style="font-size: 20px;" href = "seed.php">Seed Price & Info</a></h3>
							<p>Realtime Seed Price along with all the Knowledge you need about different types of seeds</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="welcome-single-services">
					<div class="img-box">
						<img src="images/welcome-services/19.png" alt="Govt Schemes">
					</div>
					<div class="text-box">
						<div class="content">
							<h3><a style="font-size: 20px;" href="govts.php">Goverment Schemes</a></h3>
							<p>Latest Government Schemes for maximizing the benefits and minimizing the loss.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="welcome-single-services">
					<div class="img-box">
						<img src="images/welcome-services/3.jpg" alt="Tech">
					</div>
					<div class="text-box">
						<div class="content">
							<h3><a style="font-size: 20px;" href="iot.php">IOT</a></h3>
							<p>The knowledge you need to enhance your crop production: Solar Panel, etc.</p>
						</div>
					</div>
				</div>
			</div>
		
			<div class="col-md-6">
				<div class="welcome-single-services">
					<div class="img-box">
						<img src="images/welcome-services/7.jpg" alt="Ui Ux">
					</div>
					<div class="text-box">
						<div class="content">
							<h3><a style="font-size: 20px;" href="tech.php">Tech</a></h3>
							<p>Simple visuals are used making it easy to understand the Technology.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="welcome-single-services">
					<div class="img-box">
						<img src="images/welcome-services/22.jpg" alt="Ui Ux">
					</div>
					<div class="text-box">
						<div class="content">
						<h3><li><a style="font-size: 20px;" href="second.php">AgriShop</a></li></h3>
							<p>Agri Shop Module Provides Fertilizers information & their Price</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="welcome-single-services">
					<div class="img-box">
						<img src="images/welcome-services/Expert.jpeg" alt="Internet">
					</div>
					<div class="text-box">
						<div class="content">
							<h3><a style="font-size: 20px;" href = "bot.php">Expert Talk</a></h3>
							<p>Expert Knowledge.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="welcome-single-services">
					<div class="img-box">
						<img src="images/welcome-services/NotifyLabour.jpeg" alt="NotifyLabour">
					</div>
					<div class="text-box">
						<div class="content">
							<h3><a href="notify_index.php">Notify Labour</h3>
							<p>Labour can get connected to farmers.</p>
						</div>
					</div>
				</div>
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
					<!-- <p>All You Need for Agronomy</p> -->
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
			<p>AgroTech All rights reserved.</p>
		</div>
		<div class="pull-right">
			
			<a href="#">Created By : <i>AgroTech TEAM</i> </a>
			
		</div>
	</div>
</section>


<!-- jQuery js -->
<script src="plugins/jquery/jquery-1.11.3.min.js"></script>
<!-- bootstrap js -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- jQuery ui js -->
<script src="plugins/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- owl carousel js -->
<script src="plugins/owl.carousel-2/owl.carousel.min.js"></script>
<!-- jQuery appear -->
<script src="plugins/jquery-appear/jquery.appear.js"></script>
<!-- jQuery countTo -->
<script src="plugins/jquery-countTo/jquery.countTo.js"></script>
<!-- jQuery validation -->
<script src="plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<!-- gmap.js helper -->
<script src="http://maps.google.com/maps/api/js"></script>
<!-- gmap.js -->
<script src="plugins/gmap.js"></script>
<!-- mixit up -->
<script src="plugins/jquery.mixitup.min.js"></script>

<!-- revolution slider js -->
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>

<!-- fancy box -->
<script src="plugins/fancyapps-fancyBox/source/jquery.fancybox.pack.js"></script>
<!-- type script -->
<script src="plugins/typed.js-master/dist/typed.min.js"></script>

<!-- theme custom js  -->
<script src="js/main.js"></script>
</body>
</html>
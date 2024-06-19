<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>The Plaza - eCommerce Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="The Plaza eCommerce Template">
	<meta name="keywords" content="plaza, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="home/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="home/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="home/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="home/css/owl.carousel.css"/>
	<link rel="stylesheet" href="home/css/style.css"/>
	<link rel="stylesheet" href="home/css/animate.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	@include('home.header')
	<!-- Header section end -->


	<!-- Hero section -->
	@include('home.herosection')
	<!-- Hero section end -->

	
	<!-- Intro section -->
	@include('home.introsection')
	<!-- Intro section end -->



	<!-- Product section -->
	@include('home.products')
	<!-- Product section end -->


	<!-- Blog section -->	
	@include('home.blog')
	<!-- Blog section end -->	

		<!-- Footer section -->
	@include('home.footer')
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="home/js/jquery-3.2.1.min.js"></script>
	<script src="home/js/bootstrap.min.js"></script>
	<script src="home/js/owl.carousel.min.js"></script>
	<script src="home/js/mixitup.min.js"></script>
	<script src="home/js/sly.min.js"></script>
	<script src="home/js/jquery.nicescroll.min.js"></script>
	<script src="home/js/main.js"></script>
    </body>
</html>
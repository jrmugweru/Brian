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
	<section id="introsection">
	@include('home.introsection')
	</section>
	<!-- Intro section end -->



	<!-- Product section -->
	<section id="products">
	@include('home.products')
</section>
	<!-- Product section end -->


	<!-- Blog section -->	
	<section id="blog">
	@include('home.blog')
	</section>
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

    <!-- Smooth scrolling script -->
    <script>
        $(document).ready(function() {
            // Add smooth scrolling to all links
            $("a.nav-link").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>
    </body>
</html>
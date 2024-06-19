<!DOCTYPE html>
<html>

   <head>
    <base href="/public">
      <!-- Basic -->
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

   </head>
   <body>
      <div class="hero_area">

   <style>
      .user-box {
    background-color: blue; /* Background color for user box */
    border-radius: 5px; /* Rounded corners */
    padding: 5px 10px; /* Add some padding */
}

   </style>
   @include('home.header')

<div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto; width: 50%; padding:30px;">
                 
                     <div class="img-box" style="padding:20px;">
                        <img src="product/{{$goods->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{$goods->title}}
                        </h5>

                        @if($goods->discount_price!=null)
                        <h6 style="color: red">
                        Discount price
                        <br>
                        ${{$goods->discount_price}}
                        </h6>

                        <h6 style="text-decoration: line-through; color:blue">
                        price
                        <br>
                        ${{$goods->price}}
                        </h6>
                        @else

                        <h6 style="color: blue">
                        {{$goods->price}}
                        </h6>

                        @endif

                        <h6>product category: {{$goods->category}}</h6>
                        <h6>Description: {{$goods->description}}</h6>

                        <h6>Available quantity: {{$goods->quantity}}</h6>

                        <form action="{{url('add_cart',$goods->id)}}" method="POST">
                           @csrf

                          <div class="row">

                          <div class="col-md-4">

                             <input type="number" name="quantity" value="1" 
                             min="1" style="width: 100px">
                           </div>

                              <div class="col-md-4">

                                 <input type="submit" value="Add to Cart">
                              </div>

                        </div>

                          </form>



                     </div>
                  </div>
               </div>
    @include('home.footer')
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
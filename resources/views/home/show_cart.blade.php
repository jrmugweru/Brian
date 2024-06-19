<!DOCTYPE html>
<html>
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
    <style>
        .user-box {
            background-color: blue;
            border-radius: 5px;
            padding: 5px 10px;
        }
        .center {
            margin: auto;
            width: 70%;
            text-align: center;
            padding: 30px;
            padding-top: 100px; /* Add padding-top to ensure space from navbar */
        }
        table, th, td {
            border: 1px solid grey;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: center;
        }
        .th_deg {
            font-size: 20px;
            padding: 10px;
            background: skyblue;
            color: #fff;
        }
        .img_deg {
            height: 150px;
            width: 150px;
            object-fit: cover;
        }
        .total_deg {
            font-size: 25px;
            margin-top: 20px;
        }
        .btn-custom {
            background: #ff4c3b;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin: 10px;
            transition: background 0.3s ease;
        }
        .btn-custom:hover {
            background: #e43c29;
            color: #fff;
        }
        .alert-success {
            margin: 20px auto;
            width: 70%;
            text-align: center;
        }
        .navbar-fixed-top {
            position: fixed;
            width: 100%;
            z-index: 1000;
            top: 0;
            left: 0;
        }
    </style>
</head>
<body>
    <div class="hero_area">
        @include('home.header')
        <!-- end header section -->

        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{ session()->get('message') }}
        </div>
        @endif

        <div class="center">
            <table>
                <tr>
                    <th class="th_deg">Product Title</th>
                    <th class="th_deg">Quantity</th>
                    <th class="th_deg">Price</th>
                    <th class="th_deg">Image</th>
                    <th class="th_deg">Action</th>
                </tr>
                <?php $totalprice = 0; ?>
                @foreach($cart as $cart)
                <tr>
                    <td>{{ $cart->product_title }}</td>
                    <td>{{ $cart->quantity }}</td>
                    <td>${{ $cart->price }}</td>
                    <td><img class="img_deg" src="/product/{{ $cart->image }}" alt="{{ $cart->product_title }}"></td>
                    <td>
                        <a class="btn-custom" onclick="return confirm('Are you sure to remove this product?')" href="{{ url('/remove_cart', $cart->id) }}">Remove Product</a>
                    </td>
                </tr>
                <?php $totalprice += $cart->price; ?>
                @endforeach
            </table>
            <div>
                <h1 class="total_deg">Total Price: ${{ $totalprice }}</h1>
            </div>
            <div>
                <h1 style="font-size: 25px; padding-bottom: 15px;">Proceed to Order</h1>
                <a href="{{ url('cash_order') }}" class="btn-custom">Cash on Delivery</a>
                <a href="{{ url('stripe', $totalprice) }}" class="btn-custom">Pay using Card</a>
            </div>
        </div>
    </div>
    @include('home.footer')
    <!-- footer end -->

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

<header class="header-section">
		<div class="container-fluid">
            <style>
                /* General Styles */
body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.header-section {
    background: #343a40;
    padding: 15px 0;
    color: #ffffff;
}

.header-section .site-logo img {
    max-height: 60px;
}

/* Navbar Styles */
.navbar {
    padding: 0;
}

.navbar-nav {
    margin: auto;
}

.navbar-nav .nav-item {
    margin-left: 20px;
}

.navbar-nav .nav-item .nav-link {
    color: #ffffff;
    padding: 10px 15px;
    transition: color 0.3s ease;
}

.navbar-nav .nav-item .nav-link:hover {
    color: #007bff;
}

.navbar-nav .nav-item.active .nav-link {
    color: #007bff;
}

.navbar-nav .dropdown-menu {
    background-color: #343a40;
    border: none;
}

.navbar-nav .dropdown-menu .dropdown-item {
    color: #ffffff;
    transition: background-color 0.3s ease;
}

.navbar-nav .dropdown-menu .dropdown-item:hover {
    background-color: #007bff;
}

/* Search Button Styles */
.nav_search-btn {
    background-color: transparent;
    border: none;
    color: #ffffff;
}

.nav_search-btn:hover {
    color: #007bff;
}

/* User Dropdown Styles */
.user-box .dropdown-menu {
    background-color: #343a40;
    border: none;
}

.user-box .dropdown-item {
    color: #ffffff;
}

.user-box .dropdown-item:hover {
    background-color: #007bff;
}

/* Auth Buttons */
#logincss {
    margin-left: 20px;
    color: #ffffff;
    background-color: #007bff;
    border: none;
}

#logincss:hover {
    background-color: #0056b3;
}

.btn-success {
    margin-left: 10px;
    color: #ffffff;
    background-color: #28a745;
    border: none;
}

.btn-success:hover {
    background-color: #218838;
}

/* Responsive Styles */
@media (max-width: 992px) {
    .navbar-nav {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .navbar-nav .nav-item {
        margin: 10px 0;
    }

    .site-logo {
        text-align: center;
        margin-bottom: 15px;
    }
}

            </style>
            
			<!-- logo -->
			<div class="site-logo">
				<img src="home/img/logo.png" alt="logo">
			</div>
			<!-- responsive -->
			
            
         <!-- header section strats -->
         
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                 
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                       
                        
                        <li class="nav-item">
                           <a class="nav-link" href="#products">Products</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#blog">Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#introsection">Premium Products</a>
                        </li>

                        <li class="nav-item">
                           <a class="nav-link" href="{{url('show_cart')}}">Cart</a>
                        </li>

                        <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form>

                        @if (Route::has('login'))

                        @auth
                        <ul class="navbar-nav navbar-nav-right">
                    @auth
                    <li class="nav-item dropdown user-box">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <!-- Assuming you have a 'name' field in your user model -->
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                                    class="dropdown-item">Logout</a>
                            </form>
                        </div>
                    </li>
                    @endauth
                </ul>

                           

                        @else

                        <li class="nav-item">
                           <a class="btn btn-primary" id='logincss'  href="{{ route('login') }}">Login</a>
                        </li>

                        <li class="nav-item">
                           <a class="btn btn-success"  href="{{ route('register') }}">Register</a>
                        </li>

                        @endauth
                        
                        @endif
                        
                       
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
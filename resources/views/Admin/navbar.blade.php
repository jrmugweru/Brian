<style>
        .div_center {
            text-align: center;
            padding-top: 40px;
        }
        .font_div {
            font-size: 30px;
            padding-bottom: 40px;
        }
        .text_color {
            color: black;
            padding-bottom: 20px;
        }
        label {
            display: inline-block;
            width: 200px;
        }
        .div_design {
            padding-bottom: 15px;
        }
        .content-wrapper {
            padding-top: 80px; /* Adjust this value if needed */
        }
        .navbar-fixed {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background-color: #fff; /* Background color of the navbar */
            height: 50px; /* Adjust height to reduce navbar size */
            line-height: 50px; /* Vertically center text */
        }
        .navbar .navbar-nav .nav-link {
            padding-top: 0;
            padding-bottom: 0;
            height: 50px; /* Match the height of the navbar */
            line-height: 50px; /* Vertically center the nav links */
        }
    </style>

<div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-right">
                                
                            @auth
                    <li class="nav-item dropdown">
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
                    </div>
                </nav>
            </div>
        </div>
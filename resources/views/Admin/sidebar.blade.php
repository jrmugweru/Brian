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
        .quixnav {
            width: 200px; /* Adjust width to reduce sidebar size */
        }
        .quixnav-scroll {
            overflow-y: auto;
        }
        .quixnav .metismenu {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .quixnav .nav-item .nav-link {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            font-size: 14px;
        }
        .quixnav .nav-item .menu-icon {
            margin-right: 10px;
        }
        .main-panel {
            margin-left: 200px; /* Adjust to match the new width of the sidebar */
        }
    </style>
<div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                  
                    <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Product</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/view_product')}}">Add Product</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/show_goods')}}">Show Product</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('view_category')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Category</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('view_order')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Order</span>
            </a>
          </li>

                </ul>
            </div>


        </div>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <!-- Required meta tags -->
    <!-- plugins:css -->
    @include('admin.navheader')
    @include('admin.css')
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
            padding-top: 100px; /* Ensure there's space from the navbar */
        }
        .navbar-fixed {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .main-panel {
            padding-top: 60px; /* Ensure there's space from the navbar */
        }
    </style>
</head>
<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        <div class="navbar-fixed">
            @include('admin.navbar')
        </div>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{ session()->get('message') }}
                </div>
                @endif

                <div class="div_center">
                    <h1 class="div_font">Update Product</h1>

                    <form action="{{ url('/update_goods_confirm', $goods->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="div_design">
                            <label>Product Title</label>
                            <input class="text_color" type="text" name="title" placeholder="Write a title" required="" value="{{ $goods->title }}">
                        </div>

                        <div class="div_design">
                            <label>Product Description</label>
                            <input class="text_color" type="text" name="description" placeholder="Write a description" required="" value="{{ $goods->description }}">
                        </div>

                        <div class="div_design">
                            <label>Product Price</label>
                            <input class="text_color" type="number" name="price" placeholder="Write a price" required="" value="{{ $goods->price }}">
                        </div>

                        <div class="div_design">
                            <label>Discount price</label>
                            <input class="text_color" type="number" name="dis_price" placeholder="Write a discount price" value="{{ $goods->discount_price }}">
                        </div>

                        <div class="div_design">
                            <label>Product Quantity</label>
                            <input class="text_color" type="number" min="0" name="quantity" placeholder="Write a quantity" required="" value="{{ $goods->quantity }}">
                        </div>

                        <div class="div_design">
                            <label>Product Category</label>
                            <select class="text_color" name="category" required="">
                                <option value="{{ $goods->category }}" selected="">{{ $goods->category }}</option>
                                @foreach($category as $category)
                                <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="div_design">
                            <label>Current Product Image</label>
                            <img style="margin:auto;" height="100" width="100" src="/product/{{ $goods->image }}">
                        </div>

                        <div class="div_design">
                            <label>Change Product Image Here</label>
                            <input type="file" name="image">
                        </div>

                        <div class="div_design">
                            <input type="Submit" value="Update Product" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>
</html>

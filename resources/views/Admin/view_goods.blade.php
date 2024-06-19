<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   <style>
    .center
    {
        margin:auto;
        width: 70%;
        border: 2px solid white;
        text-align: center;
        margin-top: 40px;
    }
    .font_size
    {
        text-align: center;
        font-size: 30px;
        padding-top: 20px;
    }
    .img_size
    {
        width:100px;
        height: 100;
    }
    .th_color
    {
        background: black;
    }
    .th_dg
    {
        padding : 40px;
    }
   </style>
    <!-- plugins:css -->
    @include('admin.navheader')
    @include('admin.css')
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      
        <!-- partial:partials/_navbar.html -->
       @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <h2 class='font_size'> All Products</h2>

            @if(session()->has('message'))
          <div class="alert alert-success">

          <button type="button" class="close" data-dismiss="alert"
          aria-hidden="true">x</button>
            {{session()->get('message')}}

          </div>


          @endif


          <table class="center">
            <tr class="th_color">

            <th class="th_dg">Product Title</th>
            <th class="th_dg">Description</th>
            <th class="th_dg"> Quantity</th>
            <th class="th_dg">Category</th>
            <th class="th_dg"> Price</th>
            <th class="th_dg">Discount Price</th>
            <th class="th_dg"> Product Image</th>
            <th class="th_dg"> Delete</th>
            <th class="th_dg"> Edit</th>


</tr>

            @foreach($goods as $goods)

            <tr>
                <td>{{$goods->title}}</td>
                <td>{{$goods->description}}</td>
                <td>{{$goods->quantity}}</td>
                <td>{{$goods->category}}</td>
                <td>{{$goods->price}}</td>
                <td>{{$goods->discount_price}}</td>
                <td>

                <img class="img_size" src="/product/{{$goods->image}}">
                </td>

                <td>
                    <a class="btn btn-danger" onclick="return 
                    confirm('Are You Sure To Delete this')" 
                    href="{{url('delete_goods',$goods->id)}}">Delete</a>
                </td>

                <td>
                <a class="btn btn-success" href="{{url('update_goods',$goods->id)}}">Edit</a>
                </td>
            </tr>

            @endforeach
          </table>


            </div>
         </div>


      
      <!-- page-body-wrapper ends -->
    
    <!-- container-scroller -->
    <!-- plugins:js -->
@include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
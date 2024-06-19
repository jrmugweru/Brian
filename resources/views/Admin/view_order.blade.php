<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   
    <!-- plugins:css -->
    @include('admin.css')

    <style>
        .title_deg
        {
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            padding-bottom: 100px;
            color: black;
        }
        .table_deg
        {
            border: 2px solid black;
            width: 80%;
            margin: auto;
            
            text-align: center;
        }
        .th_deg
        {
            background-color: black;
        }
        .image_size
        {
            width: 200px;
            height: 100px;
        }
    </style>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.navheader')
      @include('admin.sidebar')
      <!-- partial -->
      
        <!-- partial:partials/_navbar.html -->
       @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <h1 class="title_deg"> All Orders</h1>


            <table class="table_deg">

            <tr class="th_deg">
            <th>Name</th>
            <th>Email</th>
            <th>Adress</th>
                
            <th>Phone</th>

            <th>Product title</th>

            <th>Quantity</th>
            <th>Price</th>

            <th>Payment Status</th>
            <th>Delivery Status</th>
            <th>Image</th>
            <th>Status</th>
            
            </tr>

            @foreach($order as $order)

            <tr>
                <td>{{$order->name}}</td>
                <td>{{$order->email}}</td>
                <td>{{$order->address}}</td>
                <td>{{$order->phone}}</td>
                <td>{{$order->product_title}}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->price}}</td>
                <td>{{$order->payment_status}}</td>
                <td>{{$order->delivery_status}}</td>
                <td>
                    <img class="image_size" src="/product/{{$order->image}}">
                </td>

                <td>
                    <a href="btn btn-primary" class="">Delivered</a>
                </td>
            </tr>

            @endforeach
                
            </table>


         </div>
         </div>

      
    <!-- container-scroller -->
    <!-- plugins:js -->
@include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>
        </div>
        <div class="row">
            @foreach($goods as $goods)
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="{{url('product_details',$goods->id)}}" class="option1">
                                Product Details
                            </a>
                            <form action="{{url('add_cart',$goods->id)}}" method="POST" class="add-to-cart-form">
                                @csrf
                                <div class="form-group">
                                    <input type="number" name="quantity" value="1" min="1" class="quantity-input">
                                    <input type="submit" value="Add to Cart" class="add-to-cart-btn">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="product/{{$goods->image}}" alt="{{$goods->title}}">
                    </div>
                    <div class="detail-box">
                        <h5>{{$goods->title}}</h5>
                        @if($goods->discount_price != null)
                        <h6 class="discount-price">Discount price<br>${{$goods->discount_price}}</h6>
                        <h6 class="original-price">Price<br>${{$goods->price}}</h6>
                        @else
                        <h6 class="price">${{$goods->price}}</h6>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
.product_section {
    padding: 50px 0;
}
.heading_container {
    text-align: center;
    margin-bottom: 40px;
}
.heading_container h2 {
    font-size: 36px;
    color: #333;
}
.heading_container h2 span {
    color: #ff4c3b;
}
.box {
    border: 1px solid #ddd;
    padding: 20px;
    margin-bottom: 30px;
    position: relative;
    overflow: hidden;
    background: #fff;
    transition: all 0.3s ease;
    text-align: center;
}
.box:hover .option_container {
    opacity: 1;
    visibility: visible;
}
.option_container {
    position: absolute;
    top: 10px;
    left: 0;
    right: 0;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.options {
    display: flex;
    flex-direction: column;
    align-items: center;
}
.options a {
    display: block;
    background: #ff4c3b;
    color: #fff;
    padding: 10px 20px;
    text-align: center;
    margin-bottom: 10px;
    text-decoration: none;
    border-radius: 5px;
    transition: background 0.3s ease;
}
.options a:hover {
    background: #e43c29;
}
.add-to-cart-form .form-group {
    display: flex;
    flex-direction: column;
    align-items: center;
}
.add-to-cart-form .quantity-input {
    width: 80px;
    padding: 5px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-bottom: 10px;
    text-align: center;
}
.add-to-cart-form .add-to-cart-btn {
    padding: 10px 20px;
    background: #ff4c3b;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease;
}
.add-to-cart-form .add-to-cart-btn:hover {
    background: #e43c29;
}
.img-box img {
    width: 100%;
    height: auto;
    display: block;
}
.detail-box {
    text-align: center;
    margin-top: 20px;
}
.detail-box h5 {
    font-size: 18px;
    color: #333;
    margin-bottom: 10px;
}
.discount-price {
    color: red;
}
.original-price {
    text-decoration: line-through;
    color: blue;
}
.price {
    color: blue;
}
</style>

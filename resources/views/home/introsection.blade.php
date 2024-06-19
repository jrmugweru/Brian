<section class="intro-section spad pb-0">
    <div class="section-title">
        <h2>Premium Products</h2>
        <p>We recommend</p>
    </div>
    <div class="intro-slider">
        <ul class="slidee">
            @foreach($goods as $goods)
            <li>
                <div class="intro-item">
                    <figure>
                        <img src="product/{{$goods->image}}" alt="{{$goods->title}}">
                    </figure>
                    <div class="product-info">
                        <h5>{{$goods->title}}</h5>
                        <p>${{$goods->price}}</p>
                        <form action="{{url('add_cart',$goods->id)}}" method="POST">
                            @csrf
                            <button type="submit" class="site-btn btn-line">ADD TO CART</button>
                        </form>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="container">
        <div class="scrollbar">
            <div class="handle">
                <div class="mousearea"></div>
            </div>
        </div>
    </div>
</section>

<style>
.intro-section {
    padding-bottom: 0;
}
.section-title {
    text-align: center;
    margin-bottom: 40px;
}
.intro-slider {
    overflow: hidden;
    position: relative;
    white-space: nowrap;
    margin: 0 auto;
    padding: 20px 0;
    width: 100%;
    box-sizing: border-box;
}
.slidee {
    display: flex;
    transition: transform 0.5s ease;
}
.slidee li {
    list-style: none;
    flex: 0 0 auto;
    width: 300px; /* Adjust the width of each slide */
    margin-right: 20px; /* Adjust the spacing between slides */
}
.intro-item {
    text-align: center;
    background: #fff;
    padding: 20px;
    border: 1px solid #ddd;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
.intro-item figure img {
    width: 100%;
    height: auto;
}
.product-info {
    margin-top: 20px;
}
.product-info h5 {
    font-size: 18px;
    color: #333;
    margin-bottom: 10px;
}
.product-info p {
    font-size: 16px;
    color: #666;
    margin-bottom: 20px;
}
.site-btn.btn-line {
    background: none;
    color: #333;
    border: 2px solid #333;
    padding: 10px 20px;
    text-decoration: none;
    display: inline-block;
    transition: all 0.3s ease;
}
.site-btn.btn-line:hover {
    background: #333;
    color: #fff;
}
.container {
    position: relative;
    width: 100%;
}
.scrollbar {
    position: absolute;
    bottom: 10px;
    width: 100%;
    text-align: center;
}
.handle {
    display: inline-block;
    background: #333;
    width: 50px;
    height: 10px;
    border-radius: 5px;
    cursor: pointer;
}
</style>

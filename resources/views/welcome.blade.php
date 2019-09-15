@extends('layouts.app')

@section('content')

<div class="cols-lg-12">
    <div id="demo"class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                  </ul>
                  <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="https://cdn.pixabay.com/photo/2016/09/22/10/44/banner-1686943__340.jpg" alt="Los Angeles" width="1200" height="530">
                        </div>
                        <div class="carousel-item">
                          <img src="https://www.bannerbatterien.com/upload/filecache/Banner-Batterien-Windrder2-web_bd5cb0f721881d106522f6b9cc8f5be6.jpg" alt="Chicago" width="1200" height="530">
                        </div>
                        <div class="carousel-item">
                          <img src="https://cdn.shopify.com/s/files/1/1381/1501/products/9334059_rfr_summer_banners_ci_1024x1024.jpg?v=1468450863" alt="New York" width="1200" height="530">
                        </div>
                      </div>
                      
                      <!-- Left and right controls -->
                      <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                      </a>
                      <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                      </a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center" style="margin-top:20px;margin-bottom:15px;font-size:45px;">Featured Products</h1>
            </div>   
        </div>    
        <div class="row">
            @foreach($values as $value)
                <div class="col-lg-4 text-center">
                    <p><img src="/images/{{$value->image}}" height="275" width="220"></p>
                    <h3>{{$value->title}}</h3>
                    <h6>{{$value->desc}}</h6>
                    <p>${{$value->cost}}.00</p>
                </div>    
            @endforeach
               
        </div>   
        </div>
    </div>

</div>      
@endsection
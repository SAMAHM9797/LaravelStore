@extends('layouts.layout')

@section('content')       
<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>Bargin Basement</h1>
                                <h2>Here at Bargin Basement we strive to offer you the best deals</h2>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>Bargin Basement</h1>
                                <h2>Here at Bargin Basement we strive to offer you the best deals</h2>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                              <h1><span>Bargin Basement</h1>
                              <h2>Here at Bargin Basement we strive to offer you the best deals</h2>
                              <button type="button" class="btn btn-default get">Get it now</button>
                          </div>
                      </div>
                  </div>
                  <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
</section>
><!--/ end slider-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    @include('shared.sidebar')
                </div>
            </div>
            <!--featured items-->
            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center">Featured Items</h2>
                    @foreach($products as $product) <!--loop through products-->
                    @if($product->id < 5)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{$product->imgurl}}" alt="{{$product->name}}" />
                                    <h2>£{{$product->price}}</h2>
                                    <p>{{$product->name}}</p>
                                    <form method="POST" action="{{url('cart')}}">
                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}"><button type="submit" class="btn btn-fefault add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        <a href='{{url("products/details/$product->id")}}' class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endif
                        @endforeach
                    </div>
                    <!--features_items-->
                </div>
            </div>
        </div>
    </section>
    @endsection
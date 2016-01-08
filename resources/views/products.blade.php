@extends('layouts.layout')

@section('content')       
<section id="advertisement">
  <div class="container">
    <img src="{{asset('images/shop/advertisement.jpg')}}" alt="" />
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="left-sidebar">
          @include('shared.sidebar')
        </div>
      </div>
      <div class="col-sm-9 padding-right">
        <div class="features_items">
          <h2 class="title text-center"></h2>
          @foreach($products as $product) <!--loop through products-->
          <div class="col-sm-4">
            <div class="product-image-wrapper">
              <div class="single-products">
                <div class="productinfo text-center">
                  <img src="../../{{$product->imgurl}}" alt="{{$product->name}}" />
                  <h2>£{{$product->price}}</h2>
                  <p>{{$product->name}}</p>
                  <form method="POST" action="{{url('cart')}}">
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"><button type="submit" class="btn btn-fefault add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                    <a href='{{url("products/details/$product->id")}}' class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            {{$products->render()}}
          </div><!--features_items-->
        </div>
      </div>
    </div>
  </section>
  @stop